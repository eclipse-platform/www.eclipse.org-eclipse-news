/*******************************************************************************
 * Copyright (c) 2007 IBM Corporation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *     IBM Corporation - initial API and implementation
 ******************************************************************************/

package org.eclipse.ui.examples.statushandlers.testtool.views;

import org.eclipse.jface.resource.ImageDescriptor;
import org.eclipse.ui.IEditorInput;
import org.eclipse.ui.IMemento;
import org.eclipse.ui.IPersistableElement;
import org.eclipse.ui.PartInitException;
import org.eclipse.ui.PlatformUI;
import org.eclipse.ui.examples.statushandlers.testtool.Messages;
import org.eclipse.ui.views.properties.IPropertySource;

class ShowViewRunnable extends TestBedRunnable {

	public static final String SHOW_VIEW_TYPE = "showView"; //$NON-NLS-1$

	// xml tags
	private static final String EXCEPTION = "exception"; //$NON-NLS-1$
	private static final String UIELEMENT = "uielement"; //$NON-NLS-1$

	String element;
	String exception;
	private Object source;

	public ShowViewRunnable(String element, String exception) {
		this.element = element;
		this.exception = exception;
	}

	public void run() {
		if (element.equals(ShowViewComponent.EDITOR_ID)
				&& exception.equals(ShowViewComponent.PART_INIT_EXCEPTION_ID)) {
			showPartInitExceptionEditor();
		}
		if (element.equals(ShowViewComponent.EDITOR_ID)
				&& exception.equals(ShowViewComponent.RUNTIME_EXCEPTION_ID)) {
			showRuntimeExceptionEditor();
		}
		if (element.equals(ShowViewComponent.VIEW_ID)
				&& exception.equals(ShowViewComponent.PART_INIT_EXCEPTION_ID)) {
			showPartInitExceptionView();
		}
		if (element.equals(ShowViewComponent.VIEW_ID)
				&& exception.equals(ShowViewComponent.RUNTIME_EXCEPTION_ID)) {
			showRuntimeExceptionView();
		}

	}

	private void showRuntimeExceptionEditor() {
		try {
			PlatformUI
					.getWorkbench()
					.getActiveWorkbenchWindow()
					.getActivePage()
					.openEditor(new IEditorInput() {

						public boolean exists() {

							return false;
						}

						public ImageDescriptor getImageDescriptor() {

							return null;
						}

						public String getName() {

							return null;
						}

						public IPersistableElement getPersistable() {

							return null;
						}

						public String getToolTipText() {

							return null;
						}

						public Object getAdapter(Class adapter) {

							return null;
						}

					},
							"org.eclipseinternal.ui.tests.statushandling.RuntimeExceptionEditor"); //$NON-NLS-1$
		} catch (PartInitException e) {
			// should not be thrown !
			e.printStackTrace();
		}
	}

	private void showPartInitExceptionView() {
		try {
			PlatformUI
					.getWorkbench()
					.getActiveWorkbenchWindow()
					.getActivePage()
					.showView(
							"org.eclipseinternal.ui.tests.statushandling.PartInitExceptionView"); //$NON-NLS-1$
		} catch (PartInitException e) {
			// should not be thrown !
			e.printStackTrace();
		}
	}

	private void showRuntimeExceptionView() {
		try {
			PlatformUI
					.getWorkbench()
					.getActiveWorkbenchWindow()
					.getActivePage()
					.showView(
							"org.eclipseinternal.ui.tests.statushandling.RuntimeExceptionView"); //$NON-NLS-1$
		} catch (PartInitException e) {
			// should not be thrown !
			e.printStackTrace();
		}
	}

	private void showPartInitExceptionEditor() {
		try {
			PlatformUI
					.getWorkbench()
					.getActiveWorkbenchWindow()
					.getActivePage()
					.openEditor(new IEditorInput() {

						public boolean exists() {

							return false;
						}

						public ImageDescriptor getImageDescriptor() {

							return null;
						}

						public String getName() {

							return null;
						}

						public IPersistableElement getPersistable() {

							return null;
						}

						public String getToolTipText() {

							return null;
						}

						public Object getAdapter(Class adapter) {

							return null;
						}

					},
							"org.eclipseinternal.ui.tests.statushandling.PartInitExceptionEditor"); //$NON-NLS-1$
		} catch (PartInitException e) {
			// should not be thrown !
			e.printStackTrace();
		}
	}

	/*
	 * (non-Javadoc)
	 * 
	 * @see org.eclipse.ui.examples.statushandlers.testtool.views.TestBedRunnable#toString()
	 */
	public String toString() {
		return Messages.ShowViewRunnable_ShowView;
	}

	/*
	 * (non-Javadoc)
	 * 
	 * @see org.eclipse.core.runtime.IAdaptable#getAdapter(java.lang.Class)
	 */
	public Object getAdapter(Class adapter) {
		if (adapter == IPropertySource.class) {
			if (source == null) {
				source = new ShowViewPropertySource(this);
			}
			return source;
		}
		return null;
	}

	public String getElement() {
		return element;
	}

	public void setElement(String element) {
		this.element = element;
	}

	public String getException() {
		return exception;
	}

	public void setException(String exception) {
		this.exception = exception;
	}

	/*
	 * (non-Javadoc)
	 * 
	 * @see org.eclipse.ui.examples.statushandlers.testtool.views.TestBedRunnable#getTypeId()
	 */
	public String getTypeId() {
		return SHOW_VIEW_TYPE;
	}

	/*
	 * (non-Javadoc)
	 * 
	 * @see org.eclipse.ui.examples.statushandlers.testtool.views.TestBedRunnable#saveState(org.eclipse.ui.IMemento)
	 */
	protected void saveState(IMemento memento) {
		memento.putString(UIELEMENT, element);
		memento.putString(EXCEPTION, exception);
	}

	/**
	 * Creates ShowViewRunnable from the memento
	 * 
	 * @param memento
	 *            that stores all information about runnable
	 * @return ShowViewRunnable corresponding to the memento
	 */
	public static TestBedRunnable create(IMemento memento) {
		String element = memento.getString(UIELEMENT);
		String exception = memento.getString(EXCEPTION);
		return new ShowViewRunnable(element, exception);
	}

}
