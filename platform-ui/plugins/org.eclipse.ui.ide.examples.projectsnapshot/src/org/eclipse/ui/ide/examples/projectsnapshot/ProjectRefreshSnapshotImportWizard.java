/*******************************************************************************
 * Copyright (c) 2000, 2010 IBM Corporation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *     IBM Corporation - initial API and implementation
 *     Francis Lynch (Wind River) - adapted from standard project import
 *******************************************************************************/
package org.eclipse.ui.ide.examples.projectsnapshot;

import org.eclipse.jface.dialogs.IDialogSettings;
import org.eclipse.jface.viewers.IStructuredSelection;
import org.eclipse.jface.wizard.Wizard;
import org.eclipse.ui.IImportWizard;
import org.eclipse.ui.IWorkbench;
import org.eclipse.ui.internal.ide.IDEWorkbenchPlugin;

/**
 * Wizard for importing projects with a refresh snapshot into the Eclipse
 * workspace. Allows specification of the URI for the project refresh snapshot.
 * Currently, that URI is assumed to contain a file named
 * <projectName>-index.zip that was created by the export refresh snapshot
 * wizard.
 * <p>
 * This class may be instantiated and used without further configuration; this
 * class is not intended to be subclassed.
 * </p>
 */
public class ProjectRefreshSnapshotImportWizard extends Wizard implements
		IImportWizard {
	private static final String EXTERNAL_PROJECT_SECTION = "ProjectRefreshSnapshotImportWizard";//$NON-NLS-1$
	private ProjectRefreshSnapshotImportWizardPage mainPage;

	/**
	 * Constructor for ProjectRefreshSnapshotImportWizard.
	 */
	public ProjectRefreshSnapshotImportWizard() {
		super();
		setNeedsProgressMonitor(true);
		IDialogSettings workbenchSettings = IDEWorkbenchPlugin.getDefault()
				.getDialogSettings();

		IDialogSettings wizardSettings = workbenchSettings
				.getSection(EXTERNAL_PROJECT_SECTION);
		if (wizardSettings == null) {
			wizardSettings = workbenchSettings
					.addNewSection(EXTERNAL_PROJECT_SECTION);
		}
		setDialogSettings(wizardSettings);
	}

	/*
	 * (non-Javadoc) Method declared on IWizard.
	 */
	public void addPages() {
		super.addPages();
		mainPage = new ProjectRefreshSnapshotImportWizardPage();
		addPage(mainPage);
	}

	/*
	 * (non-Javadoc) Method declared on IWorkbenchWizard.
	 */
	public void init(IWorkbench workbench, IStructuredSelection currentSelection) {
		setWindowTitle(Messages.ProjectRefreshSnapshotImportWizard_importTitle);
		setDefaultPageImageDescriptor(IDEWorkbenchPlugin
				.getIDEImageDescriptor("wizban/importproj_wiz.png")); //$NON-NLS-1$
	}

	/*
	 * (non-Javadoc) Method declared on IWizard.
	 */
	public boolean performCancel() {
		mainPage.performCancel();
		return true;
	}

	/*
	 * (non-Javadoc) Method declared on IWizard.
	 */
	public boolean performFinish() {
		return mainPage.createProjects();
	}

}
