/*******************************************************************************
 * Copyright (c) 2006, 2008 IBM Corporation and others.
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
import org.eclipse.ui.examples.statushandlers.testtool.Messages;
import org.eclipse.ui.progress.IProgressConstants;
import org.eclipse.ui.progress.UIJob;

/**
 * Base class for a simple test UI job with configurable parameters
 */
public class UITestJob extends UIJob {

	private long duration;

	private boolean returnError;

	private Throwable toBeThrown;

	private long throwAfter;

	/**
	 * Creates the UI test Job
	 * 
	 * @param duration
	 *            total time that the test job should sleep, in milliseconds
	 * @param lock
	 *            indicates if the workspace should be locked
	 * @param throwAfter
	 *            indicates when the exception will be thrown (ticks)
	 * @param toBeThrown
	 *            exception to be thrown
	 * @param returnError
	 *            indicates if the error should be wrapped in the status
	 * @param deffered
	 *            indicates if the error should not be shown immediately
	 */
	public UITestJob(long duration, boolean lock, long throwAfter,
			Throwable toBeThrown, boolean returnError, boolean deffered) {
		super(Messages.TestJob_TestJob);
		this.duration = duration;

		this.throwAfter = throwAfter;
		this.toBeThrown = toBeThrown;
		this.returnError = returnError;
		if (deffered) {
			this.setProperty(
					IProgressConstants.NO_IMMEDIATE_ERROR_PROMPT_PROPERTY,
					Boolean.TRUE);
		}
		if (lock)
			setRule(ResourcesPlugin.getWorkspace().getRoot());
	}

	public IStatus runInUIThread(IProgressMonitor monitor) {

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
