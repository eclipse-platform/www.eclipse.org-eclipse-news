/*******************************************************************************
 * Copyright (c) 2006 IBM Corporation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *     IBM Corporation - initial API and implementation
 *******************************************************************************/

package org.eclipse.core.internal.filesystem.zip;

import java.io.File;
import java.net.URI;
import java.net.URISyntaxException;

import org.eclipse.swt.widgets.FileDialog;
import org.eclipse.swt.widgets.Shell;
import org.eclipse.ui.ide.fileSystem.FileSystemContributor;

/**
 * ZipFileSystemContributor is the zip example of a file system contributor.
 * 
 */
public class ZipFileSystemContributor extends FileSystemContributor {

	public ZipFileSystemContributor() {
		super();
	}

	public URI getURI(String pathString) {
		if (File.separatorChar != '/')
			pathString = pathString.replace(File.separatorChar, '/');
		final int length = pathString.length();
		StringBuffer pathBuf = new StringBuffer(length + 1);
		// There must be a leading slash in a hierarchical URI
		if (length > 0 && (pathString.charAt(0) != '/'))
			pathBuf.append('/');
		// additional double-slash for UNC paths to distinguish from host
		// separator
		if (pathString.startsWith("//")) //$NON-NLS-1$
			pathBuf.append('/').append('/');
		pathBuf.append(pathString);
		try {
			return new URI(ZipFileSystem.SCHEME_ZIP, null, pathBuf.toString(),
					null);
		} catch (URISyntaxException e) {
			return null;
		}
	}
	
	/* (non-Javadoc)
	 * @see org.eclipse.ui.ide.fileSystem.FileSystemContributor#browseFileSystem(java.lang.String, org.eclipse.swt.widgets.Shell)
	 */
	public URI browseFileSystem(String initialPath, Shell shell) {

		FileDialog dialog = new FileDialog(shell);
		
		if (initialPath.length() > 0)
			dialog.setFilterPath(initialPath);

		dialog.setFilterExtensions(new String[] { "*.zip" });//$NON-NLS-1$		

		String selectedFile = dialog.open();
		if (selectedFile == null)
			return null;
		return getURI(selectedFile);
		
	
	}

}
