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

package org.eclipse.ui.tests.statushandlers.views;

import org.eclipse.jface.resource.ImageDescriptor;
import org.eclipse.ui.IEditorInput;
import org.eclipse.ui.IMemento;
import org.eclipse.ui.IPersistableElement;
import org.eclipse.ui.PartInitException;
import org.eclipse.ui.PlatformUI;
import org.eclipse.ui.views.properties.IPropertySource;

class ShowViewRunnable extends TestBedRunnable{

	public static final String SHOW_VIEW_TYPE = "showView";
	
	// xml tags
	private static final String EXCEPTION = "exception";
	private static final String UIELEMENT = "uielement";
	
	String element;
	String exception;
	private Object source;
	
	public ShowViewRunnable(String element, String exception) {
		this.element = element;
		this.exception = exception;
	}

	public void run() {
		if(element.equals("editor")  && exception.equals("PartInitException")){
			showPartInitExceptionEditor();
		}
		if(element.equals("editor") && exception.equals("RuntimeException")){
			showRuntimeExceptionEditor();
		}
		if(element.equals("view") && exception.equals("PartInitException")){
			showPartInitExceptionView();
		}
		if(element.equals("view") && exception.equals("RuntimeException")){
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
							"org.eclipseinternal.ui.tests.statushandling.RuntimeExceptionEditor");
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
							"org.eclipseinternal.ui.tests.statushandling.PartInitExceptionView");
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
							"org.eclipseinternal.ui.tests.statushandling.RuntimeExceptionView");
		} catch (PartInitException e) {
			// should not be thrown !
			e.printStackTrace();
		}
	}

	private void showPartInitExceptionEditor() {
		try {
			PlatformUI.getWorkbench()
					.getActiveWorkbenchWindow().getActivePage()
					.openEditor(
							new IEditorInput() {

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

								public Object getAdapter(
										Class adapter) {

									return null;
								}

							},
							"org.eclipseinternal.ui.tests.statushandling.PartInitExceptionEditor");
		} catch (PartInitException e) {
			// should not be thrown !
			e.printStackTrace();
		}
	}

	/* (non-Javadoc)
	 * @see org.eclipse.ui.tests.statushandlers.views.TestBedRunnable#toString()
	 */
	public String toString() {
		return "ShowView";
	}

	/* (non-Javadoc)
	 * @see org.eclipse.core.runtime.IAdaptable#getAdapter(java.lang.Class)
	 */
	public Object getAdapter(Class adapter) {
		if(adapter == IPropertySource.class){
			if(source == null){
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

	/* (non-Javadoc)
	 * @see org.eclipse.ui.tests.statushandlers.views.TestBedRunnable#getTypeId()
	 */
	public String getTypeId() {
		return SHOW_VIEW_TYPE;
	}

	/* (non-Javadoc)
	 * @see org.eclipse.ui.tests.statushandlers.views.TestBedRunnable#saveState(org.eclipse.ui.IMemento)
	 */
	protected void saveState(IMemento memento) {
		memento.putString(UIELEMENT, element);
		memento.putString(EXCEPTION, exception);
	}

	/**
	 * @param memento
	 * @return
	 */
	public static TestBedRunnable create(IMemento memento) {
		String element = memento.getString(UIELEMENT);
		String exception = memento.getString(EXCEPTION);
		return new ShowViewRunnable(element, exception);
	}
	
}
