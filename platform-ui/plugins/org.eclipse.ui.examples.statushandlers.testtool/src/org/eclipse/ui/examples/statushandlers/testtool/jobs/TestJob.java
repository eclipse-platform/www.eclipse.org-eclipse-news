/*******************************************************************************
 * Copyright (c) 2006, 2007 IBM Corporation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *     IBM Corporation - initial API and implementation
 *******************************************************************************/
package org.eclipse.ui.examples.statushandlers.testtool.jobs;

import org.eclipse.core.resources.ResourcesPlugin;
import org.eclipse.core.runtime.IProgressMonitor;
import org.eclipse.core.runtime.IStatus;
import org.eclipse.core.runtime.MultiStatus;
import org.eclipse.core.runtime.Status;
import org.eclipse.core.runtime.jobs.Job;
import org.eclipse.ui.examples.statushandlers.testtool.Messages;

/**
 * Base class for a simple test job with configurable parameters.
 */
public class TestJob extends Job {
	
	/**
	 * A family identifier for all test jobs
	 */
	public static final Object FAMILY_TEST_JOB = new Object();
	
	/**
	 * Total duration that the test job should sleep, in milliseconds.
	 */
	private long duration;

	private boolean reschedule;

	private long rescheduleWait;

	private boolean returnError;

	private Throwable toBeThrown;

	private long throwAfter;

	/**
	 * Creates a new test job
	 * 
	 * @param duration
	 *            total time that the test job should sleep, in milliseconds
	 * @param lock
	 *            whether the job should use a workspace scheduling rule
	 * @param rescheduleWait
	 *            indicates how much time eclipse should wait before resheduling
	 *            job again
	 * @param reschedule
	 *            indicates if the job should be resheduled
	 * @param throwAfter
	 *            indicates when the exception will be thrown (ticks)
	 * @param toBeThrown
	 *            exception to be thrown
	 * @param returnError
	 *            indicates if the error should be wrapped in the status
	 */
	public TestJob(long duration, boolean lock, boolean reschedule,
			long rescheduleWait, long throwAfter, Throwable toBeThrown,
			boolean returnError) {
		super(Messages.TestJob_TestJob);
		this.duration = duration;
		this.reschedule = reschedule;
		this.rescheduleWait = rescheduleWait;
		this.throwAfter = throwAfter;
		this.toBeThrown = toBeThrown;
		this.returnError = returnError;

		if (lock)
			setRule(ResourcesPlugin.getWorkspace().getRoot());
	}

	/*
	 * (non-Javadoc)
	 * 
	 * @see org.eclipse.core.internal.jobs.InternalJob#belongsTo(java.lang.Object)
	 */
	public boolean belongsTo(Object family) {
		if (family instanceof TestJob) {
			return true;
		}
		return family == FAMILY_TEST_JOB;
	}

	/*
	 * (non-Javadoc)
	 * 
	 * @see org.eclipse.core.internal.jobs.InternalJob#run(org.eclipse.core.runtime.IProgressMonitor)
	 */
	public IStatus run(IProgressMonitor monitor) {

		final long sleep = 10;
		int ticks = (int) (duration / sleep);
		int ticksToThrow = (int) (throwAfter / sleep);

		monitor.beginTask(Messages.TestJob_UITask, ticks);
		monitor.setTaskName(Messages.TestJob_UITask);
		try {
			for (int i = 0; i < ticks; i++) {
				if (monitor.isCanceled())
					return Status.CANCEL_STATUS;
				monitor.subTask("Processing tick #" + i); //$NON-NLS-1$
				try {
					Thread.sleep(sleep);
				} catch (InterruptedException e) {
					return Status.CANCEL_STATUS;
				}
				if (i == ticksToThrow) {
					if (returnError) {
						MultiStatus result = new MultiStatus(
								"org.eclipse.ui.examples.statushandling.jobs", 1, Messages.TestJob_MultiStatusMessage, new RuntimeException(Messages.TestJob_MultiStatusException)); //$NON-NLS-1$
						result
								.add(new Status(
										IStatus.ERROR,
										"org.eclipse.ui.examples.statushandling.jobs", 1, Messages.TestJob_ChildStatusMessage, toBeThrown)); //$NON-NLS-1$
						return result;
					}
					throwException(toBeThrown);
					// toBeThrown is neither a runtime exception nor an
					// error
					return Status.CANCEL_STATUS;

				}

				monitor.worked(1);
			}
		} finally {
			if (reschedule)
				schedule(rescheduleWait);
			monitor.done();
		}

		return Status.OK_STATUS;
	}

	private void throwException(Throwable th) {
		if (th == null)
			return;

		if (th instanceof RuntimeException)
			throw (RuntimeException) th;

		if (th instanceof Error) {
			throw (Error) th;
		}
	}
}
