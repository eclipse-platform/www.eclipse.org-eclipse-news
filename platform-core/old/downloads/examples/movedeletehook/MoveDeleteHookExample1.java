/*******************************************************************************
 * Copyright (c) 2002 International Business Machines Corp. and others.
 * All rights reserved. This program and the accompanying materials 
 * are made available under the terms of the Common Public License v0.5 
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/cpl-v05.html
 * 
 * Contributors:
 *     IBM Corporation - initial implementation
 ******************************************************************************/
package com.example.movedeletehook;

import java.io.BufferedInputStream;
import java.io.BufferedOutputStream;
import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.io.IOException;
import java.io.InputStream;
import java.io.OutputStream;

import org.eclipse.core.resources.IContainer;
import org.eclipse.core.resources.IFile;
import org.eclipse.core.resources.IFolder;
import org.eclipse.core.resources.IProject;
import org.eclipse.core.resources.IProjectDescription;
import org.eclipse.core.resources.IResource;
import org.eclipse.core.resources.IResourceVisitor;
import org.eclipse.core.resources.team.IMoveDeleteHook;
import org.eclipse.core.resources.team.IResourceTree;
import org.eclipse.core.runtime.CoreException;
import org.eclipse.core.runtime.IPath;
import org.eclipse.core.runtime.IProgressMonitor;
import org.eclipse.core.runtime.Platform;
import org.eclipse.core.runtime.Status;

/**
 * Example implementation of <code>IMoveDeleteHook</code> illustrating
 * how this hook should be used.
 * <p>
 * A word on terminology. The code in this hook lives in a world where it
 * must deal with two parallel notions of "file" that must not be confused.
 * The terminology we use to keep these straight:
 * <ul>
 * <li><b>local file system</b> - We use "local file system" (abbreviated "lfs")
 * when talking about files and folders (directories) on disk; these are 
 * accessed through <code>java.io.File</code> protocol.
 * </li> 
 * <li><b>workspace resource tree</b> - We use "workspace resource tree"
 * when talking about in the Eclipse Platform's in-memory representation of
 * files and folders; these are ordinarily accessed through 
 * <code>org.eclipse.core.resources.IResource</code> protocol.
 * </li> 
 * </ul>
 * The general game being played is simple: The hook implementation deals
 * directly with the files in the local file system using whatever means it
 * has at its disposal, and then directs the Eclipse platform how to update the
 * workspace resource tree to match using methods on the
 * <code>org.eclipse.core.resources.team.IResourceTree</code>
 * object passed to the hook on each occasion.
 * </p>
 * <p>
 * N.B. It is important for all core methods to update the progress monitor so 
 * that the user knows that long-running operations are making progress 
 * (and can cancel if required). Progress monitoring was omitted here only
 * because it made the code more difficult to read without shedding much light
 * on how to use this hook correctly. Please do not follow our bad example.
 * </p>
 * 
 * @see org.eclipse.core.resources.IResource
 * @see org.eclipse.core.resources.team.IMoveDeleteHook
 * @see org.eclipse.core.resources.team.IResourceTree
 */
public class MoveDeleteHookExample1 implements IMoveDeleteHook {

	/**
	 * Creates a new hook instance.
	 */
	public MoveDeleteHookExample1() {
	}

	/**
	 * This <code>IMoveDeleteHook</code> method implements 
	 * <code>IResource.delete(int,IProgressMonitor)</code> where the receiver is
	 * a file. This example implementation illustrates the steps involved 
	 * (except for progress monitoring).
	 * 
	 * @param tree the workspace resource tree; this object is only valid 
	 *    for the duration of the invocation of this method, and must not be 
	 *    used after this method has completed
	 * @param file the handle of the file to delete; the receiver of
	 *    <code>IResource.delete(int,IProgressMonitor)</code>
	 * @param updateFlags bit-wise or of update flag constants as per 
	 *    <code>IResource.delete(int,IProgressMonitor)</code>
	 * @param monitor the progress monitor, or <code>null</code> as per 
	 *    <code>IResource.delete(int,IProgressMonitor)</code>
	 * @return <code>false</code> if this method declined to assume 
	 *   responsibility for this operation, and <code>true</code> if this method
	 *   attempted to carry out the operation
	 * @see IResource#delete(int,IProgressMonitor)
	 * @see IMoveDeleteHook#deleteFile(IResourceTree,IFile,int,IProgressMonitor)
	 */
	public boolean deleteFile(
		IResourceTree tree,
		IFile file,
		int updateFlags,
		IProgressMonitor monitor) {

		// do nothing if file does not exist in the workspace resource tree
		if (!file.exists()) {
			// return true anyway to say that the operation has been done
			return true;
		}

		// succeed immediately if file does not exist in the local file system
		java.io.File lfsFile = file.getLocation().toFile();
		if (!lfsFile.exists()) {
			// update the workspace resource tree to match
			tree.deletedFile(file);
			// return true to say that the operation has been done
			return true;
		}

		// if FORCE is not specified, fail if the workspace resource tree is
		// not in sync with file in the local file system
		boolean force = (updateFlags & IResource.FORCE) != 0;
		if (!force) {
			boolean inSync = tree.isSynchronized(file, IResource.DEPTH_ZERO);
			if (!inSync) {
				// report failure
				Status status =
					new Status(
						Status.ERROR,
						"com.example.movedeletehook",
						0,
						"File " + file.getFullPath() + " is out of sync with the local file system",
						null);
				tree.failed(status);
				// return true to say that the operation has been done
				return true;
			}
		}

		// capture the current state of the file in the local history if
		// KEEP_HISTORY is specified
		boolean keepHistory = (updateFlags & IResource.KEEP_HISTORY) != 0;
		if (keepHistory) {
			tree.addToLocalHistory(file);
		}

		// try to delete the file from the local file system
		boolean success = lfsFile.delete();
		if (success) {
			// update the workspace resource tree to match
			tree.deletedFile(file);
			// return true to say that the operation has been done
			return true;
		} else {
			// report an unexpected failure
			Status status =
				new Status(
					Status.ERROR,
					"com.example.movedeletehook",
					0,
					"Unable to delete file " + file.getFullPath() + " from the local file system",
					null);
			tree.failed(status);
			// return true to say that the operation has been done
			return true;
		}
	}

	/**
	 * This <code>IMoveDeleteHook</code> method implements 
	 * <code>IResource.delete(int,IProgressMonitor)</code> where the receiver is
	 * a folder. This example implementation illustrates the steps involved 
	 * (except for progress monitoring). The general approach illustrated here
	 * first deletes the entire subtree in the local file system and then fixes
	 * up the workspace resource tree to match. (There other approach is to
	 * carry out the deletion in step.)
	 * 
	 * @param tree the workspace resource tree; this object is only valid 
	 *    for the duration of the invocation of this method, and must not be 
	 *    used after this method has completed
	 * @param folder the handle of the folder to delete; the receiver of
	 *    <code>IResource.delete(int,IProgressMonitor)</code>
	 * @param updateFlags bit-wise or of update flag constants as per 
	 *    <code>IResource.delete(int,IProgressMonitor)</code>
	 * @param monitor the progress monitor, or <code>null</code> as per 
	 *    <code>IResource.delete(int,IProgressMonitor)</code>
	 * @return <code>false</code> if this method declined to assume 
	 *   responsibility for this operation, and <code>true</code> if this
	 *   method attempted to carry out the operation
	 * @see IResource#delete(int,IProgressMonitor)
	 * @see IMoveDeleteHook#deleteFolder(IResourceTree,IFolder,int,IProgressMonitor)
	 */
	public boolean deleteFolder(
		IResourceTree tree,
		IFolder folder,
		int updateFlags,
		IProgressMonitor monitor) {

		// do nothing if folder does not exist in the workspace resource tree
		if (!folder.exists()) {
			// return true to say that the operation has been done
			return true;
		}

		// succeed immediately if folder does not exist in the local file system
		java.io.File lfsFolder = folder.getLocation().toFile();
		if (!lfsFolder.exists()) {
			// update the workspace resource tree to match
			tree.deletedFolder(folder);
			// return true to say that the operation has been done
			return true;
		}

		// if FORCE is not specified, fail if the workspace resource tree is 
		// not in sync with the directory subtree in the local file 
		// system (depth infinity)
		boolean force = (updateFlags & IResource.FORCE) != 0;
		if (!force) {
			boolean inSync = tree.isSynchronized(folder, IResource.DEPTH_INFINITE);
			if (!inSync) {
				// report failure
				Status status =
					new Status(
						Status.ERROR,
						"com.example.movedeletehook",
						0,
						"Folder "
							+ folder.getFullPath()
							+ " or one of its descendents is out of sync with the local file system",
						null);
				tree.failed(status);
				// return true to say that the operation has been done
				return true;
			}
		}

		// capture the current state of all files in the local history if
		// KEEP_HISTORY is specified
		boolean keepHistory = (updateFlags & IResource.KEEP_HISTORY) != 0;
		if (keepHistory) {
			addAllFilesToHistory(tree, folder);
		}

		// try to delete the subtree in the local file system
		boolean lfsSuccess = deleteLocalSubtree(lfsFolder);
		if (lfsSuccess) {
			// update the workspace resource tree to match
			tree.deletedFolder(folder);
			// return true to say that the operation has been done
			return true;
		} else {
			// report an unexpected failure
			Status status =
				new Status(
					Status.ERROR,
					"com.example.movedeletehook",
					0,
					"Unable to delete folder "
						+ folder.getFullPath()
						+ " from the local file system",
					null);
			tree.failed(status);
			// prune out any resources in the workspace resource tree that are gone
			pruneMissingResources(tree, folder);
			// return true to say that the operation has been done
			return true;
		}
	}

	/**
	 * Deletes resources from the workspace resource tree below the given
	 * container if they do not exist in the local file system. The given
	 * container itself is not affected.
	 * 
	 * @param tree the workspace resource tree
	 * @param container the root container (a folder or project)
	 */
	private void pruneMissingResources(IResourceTree tree, IContainer container) {
		IResource[] children;
		try {
			// we're interested in all members, including team-private ones
			children = container.members(IContainer.INCLUDE_TEAM_PRIVATE_MEMBERS);
		} catch (CoreException e) {
			// bail quietly if there are problem with accessing its members
			return;
		}
		// iterate over children looking for ones to prune			
		for (int i = 0; i < children.length; i++) {
			IResource child = children[i];
			// does child exist in the local file system?
			java.io.File lfsChild = child.getLocation().toFile();
			if (!lfsChild.exists()) {
				// child no longer exists in local file system
				switch (child.getType()) {
					case IResource.FILE :
						// update workspace resource tree to say we deleted it
						tree.deletedFile((IFile) child);
						break;
					case IResource.FOLDER :
						// update workspace resource tree to say we deleted it
						tree.deletedFolder((IFolder) child);
						break;
					case IResource.PROJECT :
						// can't happen since container is a folder or project
						break;
					case IResource.ROOT :
						// can't happen since container is a folder or project
						break;
				}
			} else {
				// child exists in local file system
				if (child.getType() == IResource.FOLDER) {
					// recurse to prune inside a child subfolder
					pruneMissingResources(tree, (IFolder) child);
				}
			}
		}
	}

	/**
	 * This <code>IMoveDeleteHook</code> method implements 
	 * <code>IResource.delete(int,IProgressMonitor)</code> where the receiver is
	 * a project. This example implementation illustrates the steps involved 
	 * (except for progress monitoring).
	 * 
	 * @param tree the workspace resource tree; this object is only valid 
	 *    for the duration of the invocation of this method, and must not be 
	 *    used after this method has completed
	 * @param project the handle of the project to delete; the receiver of
	 *    <code>IResource.delete(int,IProgressMonitor)</code>
	 * @param updateFlags bit-wise or of update flag constants as per 
	 *    <code>IResource.delete(int,IProgressMonitor)</code>
	 * @param monitor the progress monitor, or <code>null</code> as per 
	 *    <code>IResource.delete(int,IProgressMonitor)</code>
	 * @return <code>false</code> if this method declined to assume 
	 *   responsibility for this operation, and <code>true</code> if this 
	 *   method attempted to carry out the operation
	 * @see IResource#delete(int,IProgressMonitor)
	 * @see IMoveDeleteHook#deleteProject(IResourceTree, IProject, int, IProgressMonitor)
	 */
	public boolean deleteProject(
		IResourceTree tree,
		IProject project,
		int updateFlags,
		IProgressMonitor monitor) {

		// do nothing if the project does not exist in the workspace resource tree
		if (!project.exists()) {
			// return true to say that the operation has been done
			return true;
		}

		// succeed immediately if project content area does not exist in the local file system
		java.io.File lfsProjectContentArea = project.getLocation().toFile();
		if (!lfsProjectContentArea.exists()) {
			// update the workspace resource tree to match
			tree.deletedProject(project);
			// return true to say that the operation has been done
			return true;
		}

		// decide if files in project content area are supposed to get deleted
		boolean alwaysDelete =
			(updateFlags & IResource.ALWAYS_DELETE_PROJECT_CONTENT) != 0;
		boolean neverDelete =
			(updateFlags & IResource.NEVER_DELETE_PROJECT_CONTENT) != 0;
		boolean force = (updateFlags & IResource.FORCE) != 0;
		boolean deletingContent;
		if (neverDelete) {
			deletingContent = false;
		} else if (alwaysDelete) {
			// ALWAYS_DELETE_PROJECT_CONTENT implies FORCE
			force = true;
			deletingContent = true;
		} else {
			// default: delete content area for open projects but not closed ones
			deletingContent = project.isOpen();
		}

		// if deleting the project content area and FORCE is not specified 
		// (and ALWAYS_DELETE_PROJECT_CONTENT, which implies FORCE)
		// fail if the workspace resource tree is not in sync with the
		// directory subtree in the local file system (depth infinity)
		if (deletingContent & !force) {
			boolean inSync = tree.isSynchronized(project, IResource.DEPTH_INFINITE);
			if (!inSync) {
				// report failure
				Status status =
					new Status(
						Status.ERROR,
						"com.example.movedeletehook",
						0,
						"Project "
							+ project.getFullPath()
							+ " is out of sync with the local file system",
						null);
				tree.failed(status);
				// return true to say that the operation has been done
				return true;
			}
		}

		// n.b. never capture local history when a project is being deleted
		// because history is kept with the project and gets deleted too

		if (!deletingContent) {
			// delete the project from the workspace resource tree
			tree.deletedProject(project);
			// return true to say that the operation has been done
			return true;
		}

		// try to delete the project content area in the local file system
		boolean lfsSuccess = deleteLocalSubtree(lfsProjectContentArea);
		if (lfsSuccess) {
			// if successful delete the project from the workspace resource tree
			tree.deletedProject(project);
			// return true to say that the operation has been done
			return true;
		} else {
			// report an unexpected failure
			Status status =
				new Status(
					Status.ERROR,
					"com.example.movedeletehook",
					0,
					"Unable to delete project "
						+ project.getFullPath()
						+ " from the local file system",
					null);
			tree.failed(status);
			// prune out any resources in the workspace resource tree that are gone
			pruneMissingResources(tree, project);
			// return true to say that the operation has been done
			return true;
		}
	}

	/**
	 * This <code>IMoveDeleteHook</code> method implements 
	 * <code>IResource.move(IPath,int,IProgressMonitor)</code> where the receiver
	 * is a file. This example implementation illustrates the steps involved 
	 * (except for progress monitoring).
	 * 
	 * @param tree the workspace resource tree; this object is only valid 
	 *    for the duration of the invocation of this method, and must not be 
	 *    used after this method has completed
	 * @param source the handle of the file to move; the receiver of
	 *    <code>IResource.move(IPath,int,IProgressMonitor)</code>; 
	 *    guaranteed to exist in the workspace resource tree
	 * @param destination the handle of where the file will move to; the handle 
	 *    equivalent of the first parameter to
	 *    <code>IResource.move(IPath,int,IProgressMonitor)</code>;
	 *    guaranteed to not exist in the workspace resource tree;
	 *    parent container guaranteed to exist and be open
	 * @param updateFlags bit-wise or of update flag constants as per 
	 *    <code>IResource.move(IPath,int,IProgressMonitor)</code>
	 * @param monitor the progress monitor, or <code>null</code> as per 
	 *    <code>IResource.move(IPath,int,IProgressMonitor)</code>
	 * @return <code>false</code> if this method declined to assume 
	 *   responsibility for this operation, and <code>true</code> if this
	 *   method attempted to carry out the operation
	 * @see IResource#move(IPath,int,IProgressMonitor)
	 * @see IMoveDeleteHook#moveFile(IResourceTree,IFile,IFile,int,IProgressMonitor)
	 */
	public boolean moveFile(
		IResourceTree tree,
		IFile source,
		IFile destination,
		int updateFlags,
		IProgressMonitor monitor) {

		// Given: source exists in workspace resource tree
		// Given: destination does not exist in workspace resource tree
		// Given: destination parent exists and is open in workspace resource tree
		if (!source.exists()
			|| destination.exists()
			|| !destination.getParent().isAccessible()) {
			throw new IllegalArgumentException();
		}

		// if FORCE is not specified, fail if the workspace resource tree is
		// not in sync at source file in the local file system
		boolean force = (updateFlags & IResource.FORCE) != 0;
		if (!force) {
			boolean inSync = tree.isSynchronized(source, IResource.DEPTH_ZERO);
			if (!inSync) {
				// report failure
				Status status =
					new Status(
						Status.ERROR,
						"com.example.movedeletehook",
						0,
						"File " + source.getFullPath() + " is out of sync with the local file system",
						null);
				tree.failed(status);
				// return true to say that the operation has been done
				return true;
			}
		}

		// capture the current state of the source file in the local history if
		// KEEP_HISTORY is specified
		boolean keepHistory = (updateFlags & IResource.KEEP_HISTORY) != 0;
		if (keepHistory) {
			tree.addToLocalHistory(source);
		}

		// try to move the source file in the local file system
		java.io.File lfsSource = source.getLocation().toFile();
		java.io.File lfsDestination = destination.getLocation().toFile();
		boolean moveSuccess = moveLocalFile(lfsSource, lfsDestination);
		if (moveSuccess) {
			// update the workspace resource tree to match
			tree.movedFile(source, destination);
			// moveLocalFile may have affected timestamp
			// update timestamp to avoid having out of sync destination
			tree.updateMovedFileTimestamp(destination, tree.computeTimestamp(destination));
			// return true to say that the operation has been done
			return true;
		} else {
			// report an unexpected failure
			Status status =
				new Status(
					Status.ERROR,
					"com.example.movedeletehook",
					0,
					"Unable to move file " + source.getFullPath() + " in the local file system",
					null);
			tree.failed(status);
			// return true to say that the operation has been done
			return true;
		}
	}

	/**
	 * This <code>IMoveDeleteHook</code> method implements 
	 * <code>IResource.move(IPath,int,IProgressMonitor)</code> where the receiver
	 * is a folder. This example implementation illustrates the steps involved 
	 * (except for progress monitoring). The general approach illustrated here
	 * moves the entire subtree in the local file system and then fixes
	 * up the workspace resource tree to match using
	 * <code>IResourceTree.movedFolder</code>.
	 * 
	 * @param tree the workspace resource tree; this object is only valid 
	 *    for the duration of the invocation of this method, and must not be 
	 *    used after this method has completed
	 * @param source the handle of the folder to move; the receiver of
	 *    <code>IResource.move(IPath,int,IProgressMonitor)</code>;
	 *    guaranteed to exist in the workspace resource tree
	 * @param destination the handle of where the folder will move to; the 
	 *    handle equivalent of the first parameter to
	 *    <code>IResource.move(IPath,int,IProgressMonitor)</code>
	 *    guaranteed to not exist in the workspace resource tree;
	 *    parent container guaranteed to exist and be open
	 * @param updateFlags bit-wise or of update flag constants as per 
	 *    <code>IResource.move(IPath,int,IProgressMonitor)</code>
	 * @param monitor the progress monitor, or <code>null</code> as per 
	 *    <code>IResource.move(IPath,int,IProgressMonitor)</code>
	 * @return <code>false</code> if this method declined to assume 
	 *   responsibility for this operation, and <code>true</code> if this 
	 *   method attempted to carry out the operation
	 * @see IResource#move(IPath,int,IProgressMonitor)
	 * @see IMoveDeleteHook#moveFolder(IResourceTree,IFolder,IFolder,int,IProgressMonitor)
	 */
	public boolean moveFolder(
		IResourceTree tree,
		IFolder source,
		IFolder destination,
		int updateFlags,
		IProgressMonitor monitor) {

		// Given: source exists in workspace resource tree
		// Given: destination does not exist in workspace resource tree
		// Given: destination parent exists and is open in workspace resource tree
		if (!source.exists()
			|| destination.exists()
			|| !destination.getParent().isAccessible()) {
			throw new IllegalArgumentException();
		}

		// if FORCE is not specified, fail if the workspace resource tree is
		// not in sync at source folder and its descendents in the local file system
		boolean force = (updateFlags & IResource.FORCE) != 0;
		if (!force) {
			boolean inSync = tree.isSynchronized(source, IResource.DEPTH_INFINITE);
			if (!inSync) {
				// report failure
				Status status =
					new Status(
						Status.ERROR,
						"com.example.movedeletehook",
						0,
						"Folder " + source.getFullPath() + " is out of sync with the local file system",
						null);
				tree.failed(status);
				// return true to say that the operation has been done
				return true;
			}
		}

		// capture the current state of all files in the local history if
		// KEEP_HISTORY is specified
		boolean keepHistory = (updateFlags & IResource.KEEP_HISTORY) != 0;
		if (keepHistory) {
			addAllFilesToHistory(tree, source);
		}

		// try to move the subtree in the local file system
		java.io.File lfsSource = source.getLocation().toFile();
		java.io.File lfsDestination = destination.getLocation().toFile();
		boolean lfsSuccess = moveLocalSubtree(lfsSource, lfsDestination);
		if (lfsSuccess) {
			// update the workspace resource tree to match
			tree.movedFolderSubtree(source, destination);
			// moveLocalSubtree may have affected file timestamps
			// update file timestamps to avoid having out of sync destination
			updateTimestamps(tree, destination);
			// return true to say that the operation has been done
			return true;
		} else {
			// report an unexpected failure
			Status status =
				new Status(
					Status.ERROR,
					"com.example.movedeletehook",
					0,
					"Unable to move folder " + source.getFullPath() + " in the local file system",
					null);
			tree.failed(status);
			// return true to say that the operation has been done
			return true;
		}
	}

	/**
	 * Updates timestamps for all files in the workspace resource subtree rooted
	 * at the given container. The given container must exist and be accessible.
	 * <p>
	 * Note that this is <b>not</b> the same thing as <code>refreshLocal</code>,
	 * because (a) it only updates file timestamps for file known to the
	 * workspace resource tree, and (b) the updated timestamps are not 
	 * considered to be changes.
	 * 
	 * @param tree the workspace resource tree
	 * @param container the root container
	 */
	private void updateTimestamps(final IResourceTree tree, IContainer container) {

		// Resource visitor for updtating timestamp for files it visits
		class UpdateVisitor implements IResourceVisitor {
			public boolean visit(IResource resource) {
				if (resource.getType() == IResource.FILE) {
					IFile file = (IFile) resource;
					tree.updateMovedFileTimestamp(file, tree.computeTimestamp(file));
				}
				return true;
			}
		}

		try {
			// update timestamps for both regular and team-private members
			container.accept(
				new UpdateVisitor(),
				IResource.DEPTH_INFINITE,
				IContainer.INCLUDE_TEAM_PRIVATE_MEMBERS);
		} catch (CoreException e) {
			// visitor does not throw CoreException
			// container is known to be accessible
			// exception should not happen
			throw new RuntimeException();
		}
	}

	/**
	 * This <code>IMoveDeleteHook</code> method implements 
	 * <code>IResource.move(IProjectDescrition,int,IProgressMonitor)</code> 
	 * where the receiver is a project. This example implementation illustrates
	 * the steps involved (except for progress monitoring). The general approach
	 * illustrated here relocates the entire project content are in the local
	 * file system and then fixes up the workspace resource tree to match using
	 * <code>IResourceTree.movedProject</code>.
	 * 
	 * @param tree the workspace resource tree; this object is only valid 
	 *    for the duration of the invocation of this method, and must not be 
	 *    used after this method has completed
	 * @param source the handle of the project to move; the receiver of
	 *    <code>IResource.move(IProjectDescription,int,IProgressMonitor)</code>
	 *    or <code>IResource.move(IPath,int,IProgressMonitor)</code>;
	 *    guaranteed to exist and be open in the workspace resource tree
	 * @param description the new description of the project; the first
	 *    parameter to
	 *    <code>IResource.move(IProjectDescription,int,IProgressMonitor)</code>, or
	 *    a copy of the project's description with the location changed to the
	 *    path given in the first parameter to 
	 *    <code>IResource.move(IPath,int,IProgressMonitor)</code>
	 * @param updateFlags bit-wise or of update flag constants as per 
	 *    <code>IResource.move(IProjectDescription,int,IProgressMonitor)</code>
	 *    or <code>IResource.move(IPath,int,IProgressMonitor)</code>
	 * @param monitor the progress monitor, or <code>null</code> as per 
	 *    <code>IResource.move(IProjectDescription,int,IProgressMonitor)</code>
	 *    or <code>IResource.move(IPath,int,IProgressMonitor)</code>
	 * @return <code>false</code> if this method declined to assume 
	 *   responsibility for this operation, and <code>true</code> if this method
	 *   attempted to carry out the operation
	 * @see IResource#move(IPath,int,IProgressMonitor)
	 * @see IResource#move(IProjectDescription,int,IProgressMonitor)
	 * @see IMoveDeleteHook#moveProject(IResourceTree,IProject,IProjectDescription,int,IProgressMonitor)
	 */
	public boolean moveProject(
		IResourceTree tree,
		IProject project,
		IProjectDescription description,
		int updateFlags,
		IProgressMonitor monitor) {

		// Given: source exists and is open in workspace resource tree
		if (!project.exists() || !project.isOpen()) {
			throw new IllegalArgumentException();
		}

		// are we changing the name of the project?
		// this affects the workspace resource tree
		String oldProjectName = project.getName();
		String newProjectName = description.getName();
		boolean renaming = !newProjectName.equals(oldProjectName);

		// are we changing the location of the project content area?
		// this affects the files in the local file system 
		// and the workspace resource tree
		IPath oldProjectContentArea = project.getLocation();
		IPath newProjectContentArea = description.getLocation();
		if (newProjectContentArea == null) {
			// compute path of new default project content area
			newProjectContentArea = Platform.getLocation().append(newProjectName);
		}
		boolean relocating = !newProjectContentArea.equals(oldProjectContentArea);

		IProject newProject =
			project.getWorkspace().getRoot().getProject(newProjectName);

		if (!renaming && !relocating) {
			// the hook method should never have been called
			throw new IllegalArgumentException();
		}

		// fail we are renaming to project that exists in workspace resource tree
		if (renaming && newProject.exists()) {
			// report failure
			Status status =
				new Status(
					Status.ERROR,
					"com.example.movedeletehook",
					0,
					"Project " + newProject.getFullPath() + " already exists",
					null);
			tree.failed(status);
			// return true to say that the operation has been done
			return true;
		}

		// relocate the project content area
		if (relocating) {
			// need to move files in local file system
			boolean lfsMoveSuccess =
				moveLocalSubtree(
					oldProjectContentArea.toFile(),
					newProjectContentArea.toFile());
			if (!lfsMoveSuccess) {
				// report failure
				Status status =
					new Status(
						Status.ERROR,
						"com.example.movedeletehook",
						0,
						"Unable to move project contents for " + newProject.getFullPath(),
						null);
				tree.failed(status);
				// return true to say that the operation has been done
				return true;
			}
		}

		// update project in workspace resource tree
		boolean treeMoveSuccess = tree.movedProjectSubtree(project, description);
		if (!treeMoveSuccess) {
			// report failure
			Status status =
				new Status(
					Status.ERROR,
					"com.example.movedeletehook",
					0,
					"Unable to move project " + project.getFullPath(),
					null);
			tree.failed(status);
			// return true to say that the operation has been done
			return true;
		}
		
		if (relocating) {
			// moveLocalSubtree may have affected file timestamps
			// update file timestamps to avoid having out of sync destination
			updateTimestamps(tree, newProject);
		}
		// return true to say that the operation has been done
		return true;
	}

	/**
	 * Captures local history for all files in the subtree rooted at the 
	 * given container. The given container must exist and be accessible.
	 * 
	 * @param tree the workspace resource tree
	 * @param container the root container
	 */
	private void addAllFilesToHistory(
		final IResourceTree tree,
		IContainer container) {

		// Resource visitor for keeping local listory for files it visits
		class KeepVisitor implements IResourceVisitor {
			public boolean visit(IResource resource) {
				if (resource.getType() == IResource.FILE) {
					// capture current state of file in local history
					tree.addToLocalHistory((IFile) resource);
				}
				return true;
			}
		}

		try {
			// only save history for regular members as there is little point
			// in saving history for team-private members
			container.accept(new KeepVisitor(), IResource.DEPTH_INFINITE, IResource.NONE);
		} catch (CoreException e) {
			// visitor does not throw CoreException
			// container is known to be accessible
			// exception should not happen
			throw new RuntimeException();
		}
	}

	/**
	 * Deletes the given directory subtree in the local file system.
	 * Returns <code>true</code> immediately if the given folder does
	 * not exist.
	 * 
	 * @param lfsFolder the folder in the local file system
	 * @return <code>true</code> if the given folder no longer exists,
	 *    and <code>false</code> if it was not deleted
	 */
	private boolean deleteLocalSubtree(java.io.File lfsFolder) {
		java.io.File[] lfsChildren = lfsFolder.listFiles();
		if (lfsChildren == null) {
			if (lfsFolder.exists()) {
				// folder does exists (I/O error or not a directory)
				return false;
			} else {
				// folder does not exist
				return true;
			}
		}
		// delete all children first
		for (int i = 0; i < lfsChildren.length; i++) {
			java.io.File lfsChild = lfsChildren[i];
			if (lfsChild.isFile()) {
				// attempt to delete the file
				boolean childSuccess = lfsChild.delete();
				// don't worry if we could not delete the child file
				// we will be unable to delete the parent folder if it still
				// has children
			} else if (lfsChild.isDirectory()) {
				// otherwise recurse over the child subtree
				boolean childSuccess = deleteLocalSubtree(lfsChild);
				// don't worry if we could not delete the child folder
				// we will be unable to delete the parent folder if it still
				// has children
			}
		}
		// delete folder now that children should be gone
		boolean success = lfsFolder.delete();
		// we're happy as long as folder is gone
		return !lfsFolder.exists();
	}

	/**
	 * Copies the given source file in the local file system to the given
	 * destination file. The operation fails rather than overwriting an
	 * existing destination file. The destination parent folder will be
	 * created if required.
	 * 
	 * @param lfsSource the source file in the local file system; this is
	 *    the file to be copied
	 * @param lfsDestination the destination file in the local file system;
	 *    this is where the file is to be copied to
	 * @return <code>true</code> if the copy was successful,
	 *    and <code>false</code> if the copy failed
	 */
	private boolean copyLocalFile(
		java.io.File lfsSource,
		java.io.File lfsDestination) {

		// create the destination parent folder if required
		java.io.File lfsDestinationParent = lfsDestination.getParentFile();
		if (lfsDestinationParent != null && !lfsDestinationParent.exists()) {
			boolean mkdirSuccess = lfsDestinationParent.mkdirs();
			if (!mkdirSuccess) {
				// fail if unable to create destination parent folder
				return false;
			}
		}

		if (lfsDestination.exists()) {
			// so that we do not overwrite an existing file
			return false;
		}

		InputStream in = null;
		OutputStream out = null;
		try {
			in = new BufferedInputStream(new FileInputStream(lfsSource));
			out = new BufferedOutputStream(new FileOutputStream(lfsDestination));
			long fileSize = lfsSource.length();
			// use 10KB buffer for small files
			int bufferSize = 10 * 1024;
			if (fileSize > 100 * 1024) {
				// use 100KB buffer for medium-sized files
				bufferSize = 100 * 1024;
			}
			if (fileSize > 1000 * 1024) {
				// use 1MB buffer for large files
				bufferSize = 1000 * 1024;
			}
			byte[] buffer = new byte[bufferSize];
			while (true) {
				int bytesRead = in.read(buffer);
				if (bytesRead < 0) {
					break;
				}
				out.write(buffer, 0, bytesRead);
			}
			return true;
		} catch (FileNotFoundException e) {
			// unable to open the source file for input
			// or unable to open the destination file for output
			// fail in either case
			return false;
		} catch (IOException e) {
			// fail
			return false;
		} finally {
			// close both streams in all cases
			try {
				if (in != null) {
					in.close();
				}
			} catch (IOException closeException) {
				// ignore
			}
			try {
				if (out != null) {
					out.close();
				}
			} catch (IOException closeException) {
				// better safe than sorry
				// fail if we have problems closing the output stream
				return false;
			}
		}
	}

	/**
	 * Copies the given folder subtree in the local file system to the given
	 * destination folder. The operation fails rather than overwriting an
	 * existing file. The destination parent folder will be created if required.
	 * 
	 * @param lfsSource the source folder in the local file system; this is
	 *    the folder to be copied
	 * @param lfsDestination the destination folder in the local file system;
	 *    this is where the folder is to be copied to
	 * @return <code>true</code> if the copy was successful,
	 *    and <code>false</code> if the copy failed
	 */
	private boolean copyLocalSubtree(
		java.io.File lfsSource,
		java.io.File lfsDestination) {

		java.io.File[] lfsChildren = lfsSource.listFiles();
		if (lfsChildren == null) {
			// folder does not exist, I/O error, or not a directory
			// fail since no source to copy
			return false;
		}

		// create the destination folder if required
		if (!lfsDestination.exists()) {
			boolean mkdirSuccess = lfsDestination.mkdirs();
			if (!mkdirSuccess) {
				// fail if unable to create destination folder
				return false;
			}
		}

		// copy all children
		for (int i = 0; i < lfsChildren.length; i++) {
			java.io.File lfsChild = lfsChildren[i];
			java.io.File lfsDestinationChild =
				new java.io.File(lfsDestination, lfsChild.getName());
			boolean childSuccess = false;
			if (lfsChild.isFile()) {
				// attempt to copy the file
				childSuccess = copyLocalFile(lfsChild, lfsDestinationChild);
			} else if (lfsChild.isDirectory()) {
				// otherwise recursively copy the child folder
				childSuccess = copyLocalSubtree(lfsChild, lfsDestinationChild);
			}
			if (!childSuccess) {
				// fail immediately if unable to successfully copy a child
				return false;
			}
		}
		// succeed since all children were successfully copied
		return true;
	}

	/**
	 * Moves the given source file in the local file system to the given
	 * destination file. The destination's parent folder will be created
	 * if required. The timestamp of the file may change in the process.
	 * 
	 * @param lfsSource the source file in the local file system; this is
	 *    the file to be moved
	 * @param lfsDestination the destination file in the local file system;
	 *    this is where the file is to be moved to
	 * @return <code>true</code> if the move was successful,
	 *    and <code>false</code> if the move failed
	 */
	private boolean moveLocalFile(
		java.io.File lfsSource,
		java.io.File lfsDestination) {

		// create the destination parent (and ancestors) if required
		java.io.File lfsDestinationParent = lfsDestination.getParentFile();
		if (lfsDestinationParent != null && !lfsDestinationParent.exists()) {
			boolean mkdirsSuccess = lfsDestinationParent.mkdirs();
			if (!mkdirsSuccess) {
				// fail because destination parent cannot be created
				return false;
			}
		}

		// attempt to rename the file
		boolean renameSuccess = lfsSource.renameTo(lfsDestination);
		if (renameSuccess) {
			// that was easy
			return true;
		}

		// plan B: copy the file and delete the original
		boolean copySuccess = copyLocalFile(lfsSource, lfsDestination);
		if (!copySuccess) {
			// fail if unable to make copy
			return false;
		}

		// delete the source file
		boolean deleteSuccess = lfsSource.delete();
		// operation succeeds iff we copied source and successfully deleted it
		return deleteSuccess;
	}

	/**
	 * Moves the given subtree in the local file system to the given
	 * destination. The destination's parent folder will be created
	 * if required.
	 * 
	 * @param lfsSource the source folder in the local file system; this is
	 *    the folder to be moved
	 * @param lfsDestination the destination folder in the local file system;
	 *    this is where the folder is to be moved to
	 * @return <code>true</code> if the move was successful,
	 *    and <code>false</code> if the move failed
	 */
	private boolean moveLocalSubtree(
		java.io.File lfsSource,
		java.io.File lfsDestination) {

		// create the destination parent (and ancestors) if required
		java.io.File lfsDestinationParent = lfsDestination.getParentFile();
		if (lfsDestinationParent != null && !lfsDestinationParent.exists()) {
			boolean mkdirsSuccess = lfsDestinationParent.mkdirs();
			if (!mkdirsSuccess) {
				// fail because destination parent cannot be created
				return false;
			}
		}

		// attempt to rename the folder
		boolean renameSuccess = lfsSource.renameTo(lfsDestination);
		if (renameSuccess) {
			// that was easy
			return true;
		}

		// plan B: copy the folder and then delete the original
		boolean copySuccess = copyLocalSubtree(lfsSource, lfsDestination);
		if (!copySuccess) {
			// fail if unable to make copy
			return false;
		}

		// delete the source folder
		boolean deleteSuccess = deleteLocalSubtree(lfsSource);
		// operation succeeds iff we copied source and successfully deleted it
		return deleteSuccess;
	}
}