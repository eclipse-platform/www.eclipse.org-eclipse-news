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

import org.eclipse.ui.examples.statushandlers.testtool.Messages;
import org.eclipse.ui.views.properties.IPropertyDescriptor;
import org.eclipse.ui.views.properties.IPropertySource;
import org.eclipse.ui.views.properties.PropertyDescriptor;

/**
 * A property source for {@link ShowViewRunnable}
 */
/* package */class ShowViewPropertySource implements IPropertySource {

	private static final String THROWN_EXCEPTION_ID = "showview.exception"; //$NON-NLS-1$
	private static final String GUIELEMENT_ID = "showview.guielement"; //$NON-NLS-1$

	private static final PropertyDescriptor[] PROPERTY_DESCRIPTOR = new PropertyDescriptor[] {
			new PropertyDescriptor(GUIELEMENT_ID,
					Messages.ShowViewPropertySource_GUIElementLabel),
			new PropertyDescriptor(THROWN_EXCEPTION_ID,
					Messages.ShowViewPropertySource_ThrownExceptionLabel) };

	private ShowViewRunnable runnable;

	/**
	 * Creates the property source for {@link ShowViewRunnable}
	 * 
	 * @param showViewRunnable
	 *            a runnable, for which the property source should be created.
	 */
	public ShowViewPropertySource(ShowViewRunnable showViewRunnable) {
		runnable = showViewRunnable;
	}

	/*
	 * (non-Javadoc)
	 * 
	 * @see org.eclipse.ui.views.properties.IPropertySource#getEditableValue()
	 */
	public Object getEditableValue() {
		return null;
	}

	/*
	 * (non-Javadoc)
	 * 
	 * @see org.eclipse.ui.views.properties.IPropertySource#getPropertyDescriptors()
	 */
	public IPropertyDescriptor[] getPropertyDescriptors() {
		return PROPERTY_DESCRIPTOR;
	}

	/*
	 * (non-Javadoc)
	 * 
	 * @see org.eclipse.ui.views.properties.IPropertySource#getPropertyValue(java.lang.Object)
	 */
	public Object getPropertyValue(Object id) {
		if (id.equals(GUIELEMENT_ID)) {
			return runnable.getElement();
		}
		if (id.equals(THROWN_EXCEPTION_ID)) {
			return runnable.getException();
		}
		return null;
	}

	/*
	 * (non-Javadoc)
	 * 
	 * @see org.eclipse.ui.views.properties.IPropertySource#isPropertySet(java.lang.Object)
	 */
	public boolean isPropertySet(Object id) {
		return true;
	}

	/*
	 * (non-Javadoc)
	 * 
	 * @see org.eclipse.ui.views.properties.IPropertySource#resetPropertyValue(java.lang.Object)
	 */
	public void resetPropertyValue(Object id) {
	}

	/*
	 * (non-Javadoc)
	 * 
	 * @see org.eclipse.ui.views.properties.IPropertySource#setPropertyValue(java.lang.Object,
	 *      java.lang.Object)
	 */
	public void setPropertyValue(Object id, Object value) {
	}

}
