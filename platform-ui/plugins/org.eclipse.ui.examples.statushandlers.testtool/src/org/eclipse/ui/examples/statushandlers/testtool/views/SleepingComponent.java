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

import org.eclipse.swt.SWT;
import org.eclipse.swt.layout.GridData;
import org.eclipse.swt.layout.GridLayout;
import org.eclipse.swt.widgets.Composite;
import org.eclipse.swt.widgets.Label;
import org.eclipse.swt.widgets.Spinner;
import org.eclipse.ui.IMemento;
import org.eclipse.ui.examples.statushandlers.testtool.Messages;

/**
 * This component is responsible for allowing user to put sleeping elements into
 * the tests.
 */
public class SleepingComponent implements TestBedComponent {

	private Spinner spinner;

	public static class SleepingRunnable extends TestBedRunnable {

		public static final String SLEEP_TYPE = "Sleep"; //$NON-NLS-1$

		// xml constant
		private static final String SLEEP = "sleep"; //$NON-NLS-1$

		private int sleepingTime;

		public SleepingRunnable(int time) {
			sleepingTime = time;
		}

		public void run() {
			try {
				Thread.sleep(sleepingTime);
			} catch (InterruptedException e) {
				// should not happen
				e.printStackTrace();
			}

		}

		public String toString() {
			return Messages.SleepingComponent_SleepingFor + sleepingTime
					+ Messages.SleepingComponent_Miliseconds;
		}

		/*
		 * (non-Javadoc)
		 * 
		 * @see org.eclipse.core.runtime.IAdaptable#getAdapter(java.lang.Class)
		 */
		public Object getAdapter(Class adapter) {
			return null;
		}

		/*
		 * (non-Javadoc)
		 * 
		 * @see org.eclipse.ui.examples.statushandlers.testtool.views.TestBedRunnable#getTypeId()
		 */
		public String getTypeId() {
			return SLEEP_TYPE;
		}

		/*
		 * (non-Javadoc)
		 * 
		 * @see org.eclipse.ui.examples.statushandlers.testtool.views.TestBedRunnable#saveState(org.eclipse.ui.IMemento)
		 */
		protected void saveState(IMemento memento) {
			memento.putInteger(SLEEP, sleepingTime);
		}

		/**
		 * Creates SleepingRunnable from the memento
		 * 
		 * @param memento
		 *            that stores all information about runnable
		 * @return SleepingRunnable corresponding to the memento
		 */
		public static TestBedRunnable create(IMemento memento) {
			int time = memento.getInteger(SLEEP).intValue();
			return new SleepingRunnable(time);
		}

		/**
		 * Gets the sleeping time.
		 * 
		 * @return sleeping time
		 */
		public int getSleepingTime() {
			return sleepingTime;
		}
	}

	/*
	 * (non-Javadoc)
	 * 
	 * @see org.eclipse.ui.examples.statushandlers.testtool.views.TestBedComponent#createComposite(org.eclipse.swt.widgets.Composite)
	 */
	public Composite createComposite(Composite parent) {
		Composite composite = new Composite(parent, SWT.NONE);
		composite.setLayout(new GridLayout(3, false));
		composite.setLayoutData(new GridData(GridData.FILL_HORIZONTAL));
		Label label = new Label(composite, SWT.NONE);
		label.setText(Messages.SleepingComponent_BlockFor);
		spinner = new Spinner(composite, SWT.BORDER);
		spinner.setValues(1000, 0, 1000000, 0, 1, 1000);
		Label unit = new Label(composite, SWT.NONE);
		unit.setText("ms."); //$NON-NLS-1$
		return composite;
	}

	/*
	 * (non-Javadoc)
	 * 
	 * @see org.eclipse.ui.examples.statushandlers.testtool.views.TestBedComponent#getName()
	 */
	public String getName() {
		return Messages.SleepingComponent_Name;
	}

	/*
	 * (non-Javadoc)
	 * 
	 * @see org.eclipse.ui.examples.statushandlers.testtool.views.TestBedComponent#getTestBedRunnable()
	 */
	public TestBedRunnable getTestBedRunnable() {
		return new SleepingRunnable(spinner.getSelection());
	}

	/*
	 * (non-Javadoc)
	 * 
	 * @see org.eclipse.ui.examples.statushandlers.testtool.views.TestBedComponent#accept(org.eclipse.ui.examples.statushandlers.testtool.views.TestBedRunnable)
	 */
	public boolean accept(TestBedRunnable runnable) {
		if (!(runnable instanceof SleepingRunnable)) {
			return false;
		}
		SleepingRunnable sleepingRunnable = (SleepingRunnable) runnable;
		spinner.setSelection(sleepingRunnable.sleepingTime);
		return true;
	}

}
