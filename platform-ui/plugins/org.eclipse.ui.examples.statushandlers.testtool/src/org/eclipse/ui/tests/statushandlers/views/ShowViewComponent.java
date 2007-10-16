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

import java.util.Arrays;
import java.util.List;

import org.eclipse.swt.SWT;
import org.eclipse.swt.layout.GridData;
import org.eclipse.swt.layout.GridLayout;
import org.eclipse.swt.widgets.Combo;
import org.eclipse.swt.widgets.Composite;
import org.eclipse.swt.widgets.Label;

/**
 * @since 3.3
 */
public class ShowViewComponent implements TestBedComponent {

	
	
	private static final String RUNTIME_EXCEPTION_ID = "RuntimeException";
	private static final String PART_INIT_EXCEPTION_ID = "PartInitException";
	private static final List exceptions = Arrays.asList( new String[]{
			PART_INIT_EXCEPTION_ID, RUNTIME_EXCEPTION_ID});
	
	
	private static final String VIEW_ID = "view";
	private static final String EDITOR_ID = "editor";
	private static final List elements = Arrays.asList(
			new String[]{EDITOR_ID, VIEW_ID});
	
	private Combo elementCombo;
	private Combo exceptionCombo;

	/* (non-Javadoc)
	 * @see org.eclipse.ui.tests.statushandlers.views.TestBedComponent#createComposite(org.eclipse.swt.widgets.Composite)
	 */
	public Composite createComposite(Composite parent) {
		Composite composite = new Composite(parent, SWT.NONE);
		GridLayout layout = new GridLayout();
		layout.numColumns = 2;
		composite.setLayout(layout);
		GridData gd = new GridData(GridData.FILL_HORIZONTAL);
		composite.setLayoutData(gd);
		
		Label showLabel = new Label(composite, SWT.NONE);
		showLabel.setText("Show");
		
		elementCombo = new Combo(composite, SWT.READ_ONLY);
		for(int i = 0; i < elements.size(); i++){
			elementCombo.add((String) elements.get(i));
		}
		elementCombo.select(0);
		
		Label throwingLabel = new Label(composite, SWT.NONE);
		throwingLabel.setText("throwing");
		
		exceptionCombo = new Combo(composite, SWT.READ_ONLY);
		for (int i = 0; i < exceptions.size(); i++) {
			exceptionCombo.add((String) exceptions.get(i));
		}
		exceptionCombo.select(0);
		return composite;
	}

	/* (non-Javadoc)
	 * @see org.eclipse.ui.tests.statushandlers.views.TestBedComponent#getName()
	 */
	public String getName() {
		return "Views";
	}

	/* (non-Javadoc)
	 * @see org.eclipse.ui.tests.statushandlers.views.TestBedComponent#getTestBedRunner()
	 */
	public TestBedRunnable getTestBedRunnable() {
		String element = (String) elements.get(elementCombo.getSelectionIndex());
		String exception = (String) exceptions.get(exceptionCombo.getSelectionIndex());
		return new ShowViewRunnable(element, exception);
	}

	/* (non-Javadoc)
	 * @see org.eclipse.ui.tests.statushandlers.views.TestBedComponent#accept(org.eclipse.ui.tests.statushandlers.views.TestBedRunnable)
	 */
	public boolean accept(TestBedRunnable runnable) {
		if(!(runnable instanceof ShowViewRunnable)){
			return false;
		}
		ShowViewRunnable showViewRunnable = (ShowViewRunnable) runnable;
		elementCombo.select(elements.indexOf(showViewRunnable.element));
		exceptionCombo.select(exceptions.indexOf(showViewRunnable.exception));
		return true;
	}

}
