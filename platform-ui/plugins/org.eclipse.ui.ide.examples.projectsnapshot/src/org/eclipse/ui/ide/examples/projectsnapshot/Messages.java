/*******************************************************************************
 * Copyright (c) 2010 Wind River Systems, Inc. and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *    Francis Lynch (Wind River) - initial API and implementation
 *******************************************************************************/

package org.eclipse.ui.ide.examples.projectsnapshot;

import org.eclipse.osgi.util.NLS;

/**
 * Messages for refresh snapshot wizards
 */
public class Messages extends NLS {
	private static final String BUNDLE_NAME = "org.eclipse.ui.ide.examples.projectsnapshot.messages"; //$NON-NLS-1$

	public static String ProjectRefreshSnapshotExportWizard_exportTitle;
	public static String ProjectRefreshSnapshotExportWizardPage_title;
	public static String ProjectRefreshSnapshotExportWizardPage_description;
	public static String ProjectRefreshSnapshotExportWizardPage_selectProjects;
	public static String ProjectRefreshSnapshotExportWizardPage_selectAll;
	public static String ProjectRefreshSnapshotExportWizardPage_deselectAll;
	public static String ProjectRefreshSnapshotExportWizardPage_errorsOccurred;
	public static String ProjectRefreshSnapshotExportWizardPage_needProjectSelected;
	public static String ProjectRefreshSnapshotExportWizardPage_errorDialogTitle;
	public static String ProjectRefreshSnapshotExportWizardPage_selectSnapshot;
	public static String ProjectRefreshSnapshotExportWizardPage_snapshotBrowse;
	public static String ProjectRefreshSnapshotExportWizardPage_browseSnapshot;
	public static String ProjectRefreshSnapshotExportWizardPage_overwrite;
	public static String ProjectRefreshSnapshotExportWizardPage_question;

	public static String ProjectRefreshSnapshotImportWizard_importTitle;
	public static String ProjectRefreshSnapshotImportWizardPage_projectLabel;
	public static String ProjectRefreshSnapshotImportWizardPage_title;
	public static String ProjectRefreshSnapshotImportWizardPage_description;
	public static String ProjectRefreshSnapshotImportWizardPage_selectProject;
	public static String ProjectRefreshSnapshotImportWizardPage_selectSnapshot;
	public static String ProjectRefreshSnapshotImportWizardPage_sourceBrowse;
	public static String ProjectRefreshSnapshotImportWizardPage_sourceDirectory;
	public static String ProjectRefreshSnapshotImportWizardPage_snapshotBrowse;
	public static String ProjectRefreshSnapshotImportWizardPage_selectProjects;
	public static String ProjectRefreshSnapshotImportWizardPage_searching;
	public static String ProjectRefreshSnapshotImportWizardPage_processing;
	public static String ProjectRefreshSnapshotImportWizardPage_hiddenProjects;
	public static String ProjectRefreshSnapshotImportWizardPage_internalError;
	public static String ProjectRefreshSnapshotImportWizardPage_snapshotError;
	public static String ProjectRefreshSnapshotImportWizardPage_checking;
	public static String ProjectRefreshSnapshotImportWizardPage_browseSource;
	public static String ProjectRefreshSnapshotImportWizardPage_browseSnapshot;
	public static String ProjectRefreshSnapshotImportWizardPage_creationProblems;
	public static String ProjectRefreshSnapshotImportWizardPage_createProjectsTask;
	public static String ProjectRefreshSnapshotImportWizardPage_overwrite;
	public static String ProjectRefreshSnapshotImportWizardPage_overwriteInFolder;
	public static String ProjectRefreshSnapshotImportWizardPage_question;
	public static String ProjectRefreshSnapshotImportWizardPage_recurse;

	static {
		NLS.initializeMessages(BUNDLE_NAME, Messages.class);
	}

}
