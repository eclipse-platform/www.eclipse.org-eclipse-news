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

import org.eclipse.core.runtime.IAdaptable;
import org.eclipse.ui.IMemento;
import org.eclipse.ui.examples.statushandlers.testtool.views.SleepingComponent.SleepingRunnable;

/**
 * This class represents a general action used in status handling testing. All
 * test actions should inherit from this class.
 */
public abstract class TestBedRunnable implements Runnable, IAdaptable {

	private static final String TYPE = "type"; //$NON-NLS-1$

	public static final String TEST_BED_RUNNABLE = "testBedRunnable"; //$NON-NLS-1$

	/*
	 * (non-Javadoc)
	 * 
	 * @see java.lang.Runnable#run()
	 */
	public abstract void run();

	/**
	 * This method returns String visible to the user in the execution list
	 * view.
	 */
	public abstract String toString();

	/**
	 * This method returns String that is used in the XMLMemento to identify the
	 * type of the class.
	 * 
	 * @return the id of the runnable
	 */
	public abstract String getTypeId();

	public void save(IMemento memento) {
		IMemento child = memento.createChild(TEST_BED_RUNNABLE);
		child.putString(TYPE, getTypeId());
		saveState(child);
	}

	/**
	 * Saves the state of current TestBedRunnable.
	 * 
	 * @param memento
	 *            a memento that will store the state
	 */
	protected abstract void saveState(IMemento memento);

	/**
	 * Factory method. Delegates restoring to particular classes.
	 * 
	 * @param memento
	 *            a memento that stores the state
	 * @return a runnable corresponding to memento
	 */
	public static TestBedRunnable restore(IMemento memento) {
		String type = memento.getString(TYPE);
		if (type.equals(JobsAndRunnablesRunnable.JOBS_AND_RUNNABLE_TYPE)) {
			return JobsAndRunnablesRunnable.create(memento);
		}
		if (type.equals(StatusHandlingRunnable.STATUS_HANDLING_TYPE)) {
			return StatusHandlingRunnable.create(memento);
		}
		if (type.equals(ShowViewRunnable.SHOW_VIEW_TYPE)) {
			return ShowViewRunnable.create(memento);
		}
		if (type.equals(SleepingRunnable.SLEEP_TYPE)) {
			return SleepingRunnable.create(memento);
		}
		return null;
	}

}
