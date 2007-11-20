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
 * A PropertySource for {@link JobsAndRunnablesRunnable}
 */
/* package */class JobAndRunnablesPropertySource implements IPropertySource {

	private static final String JOBSANDRUNNABLES_WRAPPED = "jobsandrunnables.wrapped"; //$NON-NLS-1$
	private static final String JOBSANDRUNNABLES_RESCHEDULE = "jobsandrunnables.reschedule"; //$NON-NLS-1$
	private static final String JOBSANDRUNNABLES_INGROUP = "jobsandrunnables.ingroup"; //$NON-NLS-1$
	private static final String JOBSANDRUNNABLES_USERJOB = "jobsandrunnables.userjob"; //$NON-NLS-1$
	private static final String JOBSANDRUNNABLES_SYSTEMJOB = "jobsandrunnables.systemjob"; //$NON-NLS-1$
	private static final String JOBSANDRUNNABLES_JOB_WORSKPACE_LOCK = "jobsandrunnables.jobWorskpaceLock"; //$NON-NLS-1$
	private static final String JOBSANDRUNNABLES_JOB_UI_THREAD = "jobsandrunnables.jobUIThread"; //$NON-NLS-1$
	private static final String JOBSANDRUNNABLES_RESCHEDULEDELAY = "jobsandrunnables.rescheduledelay"; //$NON-NLS-1$
	private static final String JOBSANDRUNNABLES_QUANTITY = "jobsandrunnables.quantity"; //$NON-NLS-1$
	private static final String JOBSANDRUNNABLES_STARTDELAY = "jobsandrunnables.startdelay"; //$NON-NLS-1$
	private static final String JOBSANDRUNNABLES_LOCKTHEWORKSPACE = "jobsandrunnables.locktheworkspace"; //$NON-NLS-1$
	private static final String JOBSANDRUNNABLES_JOBS = "jobsandrunnables.jobs"; //$NON-NLS-1$
	private static final String JOBSANDRUNNABLES_IN_WINDOW = "jobsandrunnables.inWindow"; //$NON-NLS-1$
	private static final String JOBSANDRUNNABLES_UI_THREAD = "jobsandrunnables.uiThread"; //$NON-NLS-1$
	private static final String JOBSANDRUNNABLES_EXCEPTION = "jobsandrunnables.exception"; //$NON-NLS-1$
	private static final String JOBSANDRUNNABLES_PERCENT = "jobsandrunnables.percent"; //$NON-NLS-1$
	private static final String JOBSANDRUNNABLES_DURATION = "jobsandrunnables.duration"; //$NON-NLS-1$

	private static final PropertyDescriptor[] descriptors = new PropertyDescriptor[] {
			new PropertyDescriptor(JOBSANDRUNNABLES_DURATION,
					Messages.JobAndRunnablesPropertySource_DurationProperty),
			new PropertyDescriptor(JOBSANDRUNNABLES_PERCENT,
					Messages.JobAndRunnablesPropertySource_PercentProperty),
			new PropertyDescriptor(JOBSANDRUNNABLES_EXCEPTION,
					Messages.JobAndRunnablesPropertySource_ExceptionProperty),
			new PropertyDescriptor(JOBSANDRUNNABLES_UI_THREAD,
					Messages.JobAndRunnablesPropertySource_UIThreadProperty),
			new PropertyDescriptor(JOBSANDRUNNABLES_IN_WINDOW,
					Messages.JobAndRunnablesPropertySource_InWindowProperty),
			new PropertyDescriptor(JOBSANDRUNNABLES_JOBS,
					Messages.JobAndRunnablesPropertySource_AsJobProperty),
			new PropertyDescriptor(JOBSANDRUNNABLES_LOCKTHEWORKSPACE,
					Messages.JobAndRunnablesPropertySource_LockProperty),
			new PropertyDescriptor(JOBSANDRUNNABLES_STARTDELAY,
					Messages.JobAndRunnablesPropertySource_StartDelayProperty),
			new PropertyDescriptor(JOBSANDRUNNABLES_QUANTITY,
					Messages.JobAndRunnablesPropertySource_QunatityProperty),
			new PropertyDescriptor(JOBSANDRUNNABLES_RESCHEDULEDELAY,
					Messages.JobAndRunnablesPropertySource_ResheduleDelay),
			new PropertyDescriptor(JOBSANDRUNNABLES_JOB_UI_THREAD,
					Messages.JobAndRunnablesPropertySource_JobUIThreadProperty),
			new PropertyDescriptor(
					JOBSANDRUNNABLES_JOB_WORSKPACE_LOCK,
					Messages.JobAndRunnablesPropertySource_JobWorkspaceLockProperty),
			new PropertyDescriptor(JOBSANDRUNNABLES_SYSTEMJOB,
					Messages.JobAndRunnablesPropertySource_SystemJobProperty),
			new PropertyDescriptor(JOBSANDRUNNABLES_USERJOB,
					Messages.JobAndRunnablesPropertySource_USerJobProperty),
			new PropertyDescriptor(JOBSANDRUNNABLES_INGROUP,
					Messages.JobAndRunnablesPropertySource_GroupsProperty),
			new PropertyDescriptor(JOBSANDRUNNABLES_RESCHEDULE,
					Messages.JobAndRunnablesPropertySource_ResheduleProperty),
			new PropertyDescriptor(JOBSANDRUNNABLES_WRAPPED,
					Messages.JobAndRunnablesPropertySource_WrappedProperty), };

	private JobsAndRunnablesRunnable runnable;

	/**
	 * Construct property source from {@link JobsAndRunnablesRunnable}
	 * 
	 * @param jobsAndRunnablesRunnable
	 *            a runnable from which the property source should be created
	 */
	public JobAndRunnablesPropertySource(
			JobsAndRunnablesRunnable jobsAndRunnablesRunnable) {
		this.runnable = jobsAndRunnablesRunnable;
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
		return descriptors;
	}

	/*
	 * (non-Javadoc)
	 * 
	 * @see org.eclipse.ui.views.properties.IPropertySource#getPropertyValue(java.lang.Object)
	 */
	public Object getPropertyValue(Object id) {
		if (id.equals(JOBSANDRUNNABLES_DURATION)) {
			return "" + runnable.duration + " ms"; //$NON-NLS-1$ //$NON-NLS-2$
		}
		if (id.equals(JOBSANDRUNNABLES_PERCENT)) {
			return runnable.percent + "%"; //$NON-NLS-1$
		}
		if (id.equals(JOBSANDRUNNABLES_EXCEPTION)) {
			return runnable.getException(runnable.exceptionIndex);
		}
		if (id.equals(JOBSANDRUNNABLES_UI_THREAD)) {
			return "" + runnable.uiThread; //$NON-NLS-1$
		}
		if (id.equals(JOBSANDRUNNABLES_IN_WINDOW)) {
			return "" + runnable.windowRunnable; //$NON-NLS-1$
		}
		if (id.equals(JOBSANDRUNNABLES_JOBS)) {
			return "" + runnable.jobs; //$NON-NLS-1$
		}
		if (id.equals(JOBSANDRUNNABLES_LOCKTHEWORKSPACE)) {
			return "" + runnable.progressNoForLock; //$NON-NLS-1$
		}
		if (id.equals(JOBSANDRUNNABLES_STARTDELAY)) {
			return "" + runnable.delayString; //$NON-NLS-1$
		}
		if (id.equals(JOBSANDRUNNABLES_QUANTITY)) {
			return "" + runnable.quantity; //$NON-NLS-1$
		}
		if (id.equals(JOBSANDRUNNABLES_RESCHEDULEDELAY)) {
			return "" + runnable.rescheduleDelay + " ms"; //$NON-NLS-1$ //$NON-NLS-2$
		}
		if (id.equals(JOBSANDRUNNABLES_JOB_UI_THREAD)) {
			return "" + runnable.thread; //$NON-NLS-1$
		}
		if (id.equals(JOBSANDRUNNABLES_JOB_WORSKPACE_LOCK)) {
			return "" + runnable.jobLock; //$NON-NLS-1$
		}
		if (id.equals(JOBSANDRUNNABLES_SYSTEMJOB)) {
			return "" + runnable.system; //$NON-NLS-1$
		}
		if (id.equals(JOBSANDRUNNABLES_USERJOB)) {
			return "" + runnable.user; //$NON-NLS-1$
		}
		if (id.equals(JOBSANDRUNNABLES_INGROUP)) {
			return "" + runnable.useGroup; //$NON-NLS-1$
		}
		if (id.equals(JOBSANDRUNNABLES_RESCHEDULE)) {
			return "" + runnable.reschedule; //$NON-NLS-1$
		}
		if (id.equals(JOBSANDRUNNABLES_WRAPPED)) {
			return "" + runnable.returnErrorStatus; //$NON-NLS-1$
		}
		return null;
	}

	/*
	 * (non-Javadoc)
	 * 
	 * @see org.eclipse.ui.views.properties.IPropertySource#isPropertySet(java.lang.Object)
	 */
	public boolean isPropertySet(Object id) {
		return false;
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
