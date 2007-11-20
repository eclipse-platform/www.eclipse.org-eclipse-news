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

import java.util.Arrays;
import java.util.List;

import org.eclipse.swt.SWT;
import org.eclipse.swt.layout.GridData;
import org.eclipse.swt.layout.GridLayout;
import org.eclipse.swt.widgets.Combo;
import org.eclipse.swt.widgets.Composite;
import org.eclipse.swt.widgets.Label;
import org.eclipse.ui.examples.statushandlers.testtool.Messages;

/**
 * This component is responsible for showing test views.
 */
public class ShowViewComponent implements TestBedComponent {

	/* package */static final String RUNTIME_EXCEPTION_ID = "RuntimeException"; //$NON-NLS-1$
	/* package */static final String PART_INIT_EXCEPTION_ID = "PartInitException"; //$NON-NLS-1$
	private static final List exceptions = Arrays.asList(new String[] {
			PART_INIT_EXCEPTION_ID, RUNTIME_EXCEPTION_ID });

	/* package */static final String VIEW_ID = "view"; //$NON-NLS-1$
	/* package */static final String EDITOR_ID = "editor"; //$NON-NLS-1$
	private static final List elements = Arrays.asList(new String[] {
			EDITOR_ID, VIEW_ID });

	private Combo elementCombo;
	private Combo exceptionCombo;

	/*
	 * (non-Javadoc)
	 * 
	 * @see org.eclipse.ui.examples.statushandlers.testtool.views.TestBedComponent#createComposite(org.eclipse.swt.widgets.Composite)
	 */
	public Composite createComposite(Composite parent) {
		Composite composite = new Composite(parent, SWT.NONE);
		GridLayout layout = new GridLayout();
		layout.numColumns = 2;
		composite.setLayout(layout);
		GridData gd = new GridData(GridData.FILL_HORIZONTAL);
		composite.setLayoutData(gd);

		Label showLabel = new Label(composite, SWT.NONE);
		showLabel.setText(Messages.ShowViewComponent_ShowLabel);

		elementCombo = new Combo(composite, SWT.READ_ONLY);
		for (int i = 0; i < elements.size(); i++) {
			elementCombo.add((String) elements.get(i));
		}
		elementCombo.select(0);

		Label throwingLabel = new Label(composite, SWT.NONE);
		throwingLabel.setText(Messages.ShowViewComponent_ThrowingLabel);

		exceptionCombo = new Combo(composite, SWT.READ_ONLY);
		for (int i = 0; i < exceptions.size(); i++) {
			exceptionCombo.add((String) exceptions.get(i));
		}
		exceptionCombo.select(0);
		return composite;
	}

	/*
	 * (non-Javadoc)
	 * 
	 * @see org.eclipse.ui.examples.statushandlers.testtool.views.TestBedComponent#getName()
	 */
	public String getName() {
		return Messages.ShowViewComponent_Name;
	}

	/*
	 * (non-Javadoc)
	 * 
	 * @see org.eclipse.ui.examples.statushandlers.testtool.views.TestBedComponent#getTestBedRunner()
	 */
	public TestBedRunnable getTestBedRunnable() {
		String element = (String) elements
				.get(elementCombo.getSelectionIndex());
		String exception = (String) exceptions.get(exceptionCombo
				.getSelectionIndex());
		return new ShowViewRunnable(element, exception);
	}

	/*
	 * (non-Javadoc)
	 * 
	 * @see org.eclipse.ui.examples.statushandlers.testtool.views.TestBedComponent#accept(org.eclipse.ui.examples.statushandlers.testtool.views.TestBedRunnable)
	 */
	public boolean accept(TestBedRunnable runnable) {
		if (!(runnable instanceof ShowViewRunnable)) {
			return false;
		}
		ShowViewRunnable showViewRunnable = (ShowViewRunnable) runnable;
		elementCombo.select(elements.indexOf(showViewRunnable.element));
		exceptionCombo.select(exceptions.indexOf(showViewRunnable.exception));
		return true;
	}

}
