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

import org.eclipse.ui.views.properties.IPropertyDescriptor;
import org.eclipse.ui.views.properties.IPropertySource;
import org.eclipse.ui.views.properties.PropertyDescriptor;

/**
 * A PropertySource for {@link JobsAndRunnablesRunnable}
 */
/* package */ class JobAndRunnablesPropertySource implements IPropertySource {


	private static final String JOBSANDRUNNABLES_WRAPPED = "jobsandrunnables.wrapped";
	private static final String JOBSANDRUNNABLES_RESCHEDULE = "jobsandrunnables.reschedule";
	private static final String JOBSANDRUNNABLES_INGROUP = "jobsandrunnables.ingroup";
	private static final String JOBSANDRUNNABLES_USERJOB = "jobsandrunnables.userjob";
	private static final String JOBSANDRUNNABLES_SYSTEMJOB = "jobsandrunnables.systemjob";
	private static final String JOBSANDRUNNABLES_JOB_WORSKPACE_LOCK = "jobsandrunnables.jobWorskpaceLock";
	private static final String JOBSANDRUNNABLES_JOB_UI_THREAD = "jobsandrunnables.jobUIThread";
	private static final String JOBSANDRUNNABLES_RESCHEDULEDELAY = "jobsandrunnables.rescheduledelay";
	private static final String JOBSANDRUNNABLES_QUANTITY = "jobsandrunnables.quantity";
	private static final String JOBSANDRUNNABLES_STARTDELAY = "jobsandrunnables.startdelay";
	private static final String JOBSANDRUNNABLES_LOCKTHEWORKSPACE = "jobsandrunnables.locktheworkspace";
	private static final String JOBSANDRUNNABLES_JOBS = "jobsandrunnables.jobs";
	private static final String JOBSANDRUNNABLES_IN_WINDOW = "jobsandrunnables.inWindow";
	private static final String JOBSANDRUNNABLES_UI_THREAD = "jobsandrunnables.uiThread";
	private static final String JOBSANDRUNNABLES_EXCEPTION = "jobsandrunnables.exception";
	private static final String JOBSANDRUNNABLES_PERCENT = "jobsandrunnables.percent";
	private static final String JOBSANDRUNNABLES_DURATION = "jobsandrunnables.duration";
	
	private static final PropertyDescriptor[] descriptors = new PropertyDescriptor[] {
			new PropertyDescriptor(JOBSANDRUNNABLES_DURATION, "Duration"),
			new PropertyDescriptor(JOBSANDRUNNABLES_PERCENT, "Percent"),
			new PropertyDescriptor(JOBSANDRUNNABLES_EXCEPTION, "Exception"),
			new PropertyDescriptor(JOBSANDRUNNABLES_UI_THREAD,
					"Run in UI Thread"),
			new PropertyDescriptor(JOBSANDRUNNABLES_IN_WINDOW, "Run in Window"),
			new PropertyDescriptor(JOBSANDRUNNABLES_JOBS, "Run as Job"),
			new PropertyDescriptor(JOBSANDRUNNABLES_LOCKTHEWORKSPACE,
					"Lock the workspace"),
			new PropertyDescriptor(JOBSANDRUNNABLES_STARTDELAY,
					"Job start delay"),
			new PropertyDescriptor(JOBSANDRUNNABLES_QUANTITY,
					"Job start quantity"),
			new PropertyDescriptor(JOBSANDRUNNABLES_RESCHEDULEDELAY,
					"Job reschedule delay"),
			new PropertyDescriptor(JOBSANDRUNNABLES_JOB_UI_THREAD,
					"Job run in UI Thread"),
			new PropertyDescriptor(JOBSANDRUNNABLES_JOB_WORSKPACE_LOCK,
					"Job Workspace Lock"),
			new PropertyDescriptor(JOBSANDRUNNABLES_SYSTEMJOB, "System Job"),
			new PropertyDescriptor(JOBSANDRUNNABLES_USERJOB, "User Job"),
			new PropertyDescriptor(JOBSANDRUNNABLES_INGROUP,
					"Run Jobs in Groups"),
			new PropertyDescriptor(JOBSANDRUNNABLES_RESCHEDULE,
					"Reschedule jobs"),
			new PropertyDescriptor(JOBSANDRUNNABLES_WRAPPED,
					"Wrapped in status"), };
	
	
	private JobsAndRunnablesRunnable runnable;

	/**
	 * @param jobsAndRunnablesRunnable
	 */
	public JobAndRunnablesPropertySource(
			JobsAndRunnablesRunnable jobsAndRunnablesRunnable) {
		this.runnable = jobsAndRunnablesRunnable;
	}



	/* (non-Javadoc)
	 * @see org.eclipse.ui.views.properties.IPropertySource#getEditableValue()
	 */
	public Object getEditableValue() {
		return null;
	}

	/* (non-Javadoc)
	 * @see org.eclipse.ui.views.properties.IPropertySource#getPropertyDescriptors()
	 */
	public IPropertyDescriptor[] getPropertyDescriptors() {
		return descriptors;
	}

	/* (non-Javadoc)
	 * @see org.eclipse.ui.views.properties.IPropertySource#getPropertyValue(java.lang.Object)
	 */
	public Object getPropertyValue(Object id) {
		if(id.equals(JOBSANDRUNNABLES_DURATION)){
			return "" + runnable.duration + " ms";
		}
		if(id.equals(JOBSANDRUNNABLES_PERCENT)){
			return runnable.percent + "%";
		}
		if(id.equals(JOBSANDRUNNABLES_EXCEPTION)){
			return runnable.getException(runnable.exceptionIndex);
		}
		if(id.equals(JOBSANDRUNNABLES_UI_THREAD)){
			return "" + runnable.uiThread;
		}
		if(id.equals(JOBSANDRUNNABLES_IN_WINDOW)){
			return "" + runnable.windowRunnable;
		}
		if(id.equals(JOBSANDRUNNABLES_JOBS)){
			return "" + runnable.jobs;
		}
		if(id.equals(JOBSANDRUNNABLES_LOCKTHEWORKSPACE)){
			return "" + runnable.progressNoForLock;
		}
		if(id.equals(JOBSANDRUNNABLES_STARTDELAY)){
			return "" + runnable.delayString;
		}
		if(id.equals(JOBSANDRUNNABLES_QUANTITY)){
			return "" + runnable.quantity;
		}
		if(id.equals(JOBSANDRUNNABLES_RESCHEDULEDELAY)){
			return "" + runnable.rescheduleDelay + " ms";
		}
		if(id.equals(JOBSANDRUNNABLES_JOB_UI_THREAD)){
			return "" + runnable.thread;
		}
		if(id.equals(JOBSANDRUNNABLES_JOB_WORSKPACE_LOCK)){
			return "" + runnable.jobLock;
		}
		if(id.equals(JOBSANDRUNNABLES_SYSTEMJOB)){
			return "" + runnable.system;
		}
		if(id.equals(JOBSANDRUNNABLES_USERJOB)){
			return "" + runnable.user;
		}
		if(id.equals(JOBSANDRUNNABLES_INGROUP)){
			return "" + runnable.useGroup;
		}
		if(id.equals(JOBSANDRUNNABLES_RESCHEDULE)){
			return "" + runnable.reschedule;
		}
		if(id.equals(JOBSANDRUNNABLES_WRAPPED)){
			return "" + runnable.returnErrorStatus;
		}
		return null;
	}

	/* (non-Javadoc)
	 * @see org.eclipse.ui.views.properties.IPropertySource#isPropertySet(java.lang.Object)
	 */
	public boolean isPropertySet(Object id) { return false; }

	/* (non-Javadoc)
	 * @see org.eclipse.ui.views.properties.IPropertySource#resetPropertyValue(java.lang.Object)
	 */
	public void resetPropertyValue(Object id) {}

	/* (non-Javadoc)
	 * @see org.eclipse.ui.views.properties.IPropertySource#setPropertyValue(java.lang.Object, java.lang.Object)
	 */
	public void setPropertyValue(Object id, Object value) {}

}
