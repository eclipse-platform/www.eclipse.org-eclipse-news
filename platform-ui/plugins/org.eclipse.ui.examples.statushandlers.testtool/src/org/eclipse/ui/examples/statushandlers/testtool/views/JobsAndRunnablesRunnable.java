/*******************************************************************************
 * Copyright (c) 2007, 2008 IBM Corporation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *     IBM Corporation - initial API and implementation
 ******************************************************************************/
package org.eclipse.ui.examples.statushandlers.testtool.views;

import java.lang.reflect.InvocationTargetException;

import org.eclipse.core.resources.IWorkspaceRunnable;
import org.eclipse.core.resources.ResourcesPlugin;
import org.eclipse.core.runtime.CoreException;
import org.eclipse.core.runtime.IProgressMonitor;
import org.eclipse.core.runtime.NullProgressMonitor;
import org.eclipse.core.runtime.jobs.Job;
import org.eclipse.jface.operation.IRunnableWithProgress;
import org.eclipse.ui.IMemento;
import org.eclipse.ui.PlatformUI;
import org.eclipse.ui.actions.WorkspaceModifyOperation;
import org.eclipse.ui.examples.statushandlers.testtool.Messages;
import org.eclipse.ui.examples.statushandlers.testtool.jobs.TestJob;
import org.eclipse.ui.examples.statushandlers.testtool.jobs.UITestJob;
import org.eclipse.ui.progress.IProgressService;
import org.eclipse.ui.views.properties.IPropertySource;

/**
 * This class allows for running jobs and runnables in different configurations
 */
public class JobsAndRunnablesRunnable extends TestBedRunnable {

	public static final String JOBS_AND_RUNNABLE_TYPE = "jobsAndRunnable"; //$NON-NLS-1$
	// xml keys
	private static final String JOBS = "jobs"; //$NON-NLS-1$
	private static final String WINDOWRUNNABLE = "windowrunnable"; //$NON-NLS-1$
	private static final String UI_THREAD = "uiThread"; //$NON-NLS-1$
	private static final String ERRORSTATUS = "errorstatus"; //$NON-NLS-1$
	private static final String RESCHEDULE = "reschedule"; //$NON-NLS-1$
	private static final String USEGROUP = "usegroup"; //$NON-NLS-1$
	private static final String USER = "user"; //$NON-NLS-1$
	private static final String SYSTEM = "system"; //$NON-NLS-1$
	private static final String JOBLOCK = "joblock"; //$NON-NLS-1$
	private static final String THREAD = "thread"; //$NON-NLS-1$
	private static final String PROGRESS_NO_FOR_LOCK = "progressNoForLock"; //$NON-NLS-1$
	private static final String RESCHEDULE_DELAY = "rescheduleDelay"; //$NON-NLS-1$
	private static final String QUANTITY = "quantity"; //$NON-NLS-1$
	private static final String DELAY = "delay"; //$NON-NLS-1$
	private static final String EXCEPTION = "exception"; //$NON-NLS-1$
	private static final String DURATION = "duration"; //$NON-NLS-1$
	private static final String PERCENT = "percent"; //$NON-NLS-1$
	private static final String DEFERRED = "deferred"; //$NON-NLS-1$

	int percent, duration, exceptionIndex;

	String delayString, quantity, rescheduleDelay;

	boolean progressNoForLock, thread, jobLock, system, user, useGroup,
			reschedule, returnErrorStatus, uiThread, windowRunnable, jobs,
			deferred;

	private JobAndRunnablesPropertySource source;

	public JobsAndRunnablesRunnable(int duration, int percent, int exception,
			boolean progressNoForLock, String delay, String quantity,
			String rescheduldeDelay, boolean thread, boolean jobLock,
			boolean system, boolean user, boolean useGroup, boolean reschedule,
			boolean returnErrorStatus, boolean uiThread,
			boolean windowRunnable, boolean jobs, boolean deffered) {
		this.percent = percent;
		this.duration = duration;
		this.exceptionIndex = exception;
		this.delayString = delay;
		this.quantity = quantity;
		this.rescheduleDelay = rescheduldeDelay;
		this.progressNoForLock = progressNoForLock;
		this.thread = thread;
		this.jobLock = jobLock;
		this.system = system;
		this.user = user;
		this.useGroup = useGroup;
		this.reschedule = reschedule;
		this.returnErrorStatus = returnErrorStatus;
		this.uiThread = uiThread;
		this.windowRunnable = windowRunnable;
		this.jobs = jobs;
		this.deferred = deffered;
	}

	JobsAndRunnablesRunnable() {
	}

	public void run() {
		final Throwable throwable = getException(exceptionIndex);
		final long throwAfter = getThrowAfter(duration);
		if (uiThread) {

			IProgressService progressService = PlatformUI.getWorkbench()
					.getProgressService();
			try {
				progressService.runInUI(progressService,
						new IRunnableWithProgress() {
							public void run(IProgressMonitor monitor) {
								if (progressNoForLock)
									doRunInWorkspace(duration, throwAfter,
											throwable, monitor);
								else
									doRun(duration, throwAfter, throwable,
											monitor);
							}
						}, ResourcesPlugin.getWorkspace().getRoot());
			} catch (InvocationTargetException e) {
				e.printStackTrace();
			} catch (InterruptedException e) {
				e.printStackTrace();
			}
		}
		if (windowRunnable) {
			final long sleep = 10;

			IRunnableWithProgress runnableTest = new WorkspaceModifyOperation() {

				/*
				 * (non-Javadoc)
				 * 
				 * @see org.eclipse.ui.actions.WorkspaceModifyOperation#execute(org.eclipse.core.runtime.IProgressMonitor)
				 */
				protected void execute(IProgressMonitor monitor) {

					int ticks = (int) (duration / sleep);
					int ticksToThrow = (int) (throwAfter / sleep);

					monitor.beginTask(
							Messages.JobsAndRunnablesRunnable_SpinningTaskName,
							ticks);
					monitor
							.setTaskName(Messages.JobsAndRunnablesRunnable_SpinningTaskName);
					for (int i = 0; i < ticks; i++) {
						monitor.subTask("Processing tick #" + i); //$NON-NLS-1$
						if (monitor.isCanceled())
							return;
						try {
							Thread.sleep(sleep);
						} catch (InterruptedException e) {
							// ignore
						}
						if (i == ticksToThrow) {
							throwException(throwable);
							// throwable is neither a runtime exception nor an
							// error
							return;
						}
						monitor.worked(1);
					}
				}

			};

			try {
				PlatformUI.getWorkbench().getActiveWorkbenchWindow().run(true,
						true, runnableTest);
			} catch (InvocationTargetException e) {
				e.printStackTrace();
			} catch (InterruptedException e) {
				e.printStackTrace();
			}
		}
		if (jobs) {
			int jobCount = Integer.parseInt(quantity);
			final long rescheduleWait = Long.parseLong(rescheduleDelay);

			int groupIncrement = IProgressMonitor.UNKNOWN;
			IProgressMonitor group = new NullProgressMonitor();
			int total = IProgressMonitor.UNKNOWN;

			if (jobCount > 1) {
				total = 100;
				groupIncrement = 100 / jobCount;
			}

			if (useGroup) {
				group = Job.getJobManager().createProgressGroup();
				group.beginTask(
						Messages.JobsAndRunnablesRunnable_GroupTaskName, total);
			}

			long delay = Integer.parseInt(delayString);
			for (int i = 0; i < jobCount; i++) {
				Job result;
				if (thread)
					result = new UITestJob(duration, jobLock, throwAfter,
							throwable, returnErrorStatus, deferred);
				else
					result = new TestJob(duration, jobLock, reschedule,
							rescheduleWait, throwAfter, throwable,
							returnErrorStatus, deferred);

				result.setProgressGroup(group, groupIncrement);
				result.setSystem(system);
				result.setUser(user);
				result.schedule(delay);
			}
		}
	}

	Throwable getException(int exceptionIndex) {

		switch (exceptionIndex) {
		case 0:
			return new NullPointerException(
					Messages.JobsAndRunnablesRunnable_NullPointerExceptionMessage);
		case 1:
			return new OutOfMemoryError(
					Messages.JobsAndRunnablesRunnable_OutOfMemoryExceptionMessage);
		case 2:
			return new IndexOutOfBoundsException(
					Messages.JobsAndRunnablesRunnable_IndexOutOfBoundsMessage);
		default:
			return new NullPointerException(
					Messages.JobsAndRunnablesRunnable_NullPointerExceptionMessage);

		}
	}

	private long getThrowAfter(long duration) {
		return Math.round(duration * percent / 100.0);
	}

	protected void doRunInWorkspace(final long duration, final long throwAfter,
			final Throwable toBeThrown, IProgressMonitor monitor) {
		try {
			ResourcesPlugin.getWorkspace().run(new IWorkspaceRunnable() {
				public void run(IProgressMonitor monitor) {
					doRun(duration, throwAfter, toBeThrown, monitor);
				}
			}, monitor);
		} catch (CoreException e) {
			e.printStackTrace();
		}
	}

	protected void doRun(long duration, final long throwAfter,
			final Throwable toBeThrown, IProgressMonitor monitor) {
		final long sleep = 10;
		int ticks = (int) (duration / sleep);
		int ticksToThrow = (int) (throwAfter / sleep);
		monitor.beginTask(Messages.JobsAndRunnablesRunnable_SpiningInside,
				ticks);
		monitor.setTaskName("Spinning inside IProgressService"); //$NON-NLS-1$
		for (int i = 0; i < ticks; i++) {
			monitor.subTask(Messages.JobsAndRunnablesRunnable_ProcessingTick
					+ i);
			if (monitor.isCanceled())
				return;
			try {
				Thread.sleep(sleep);
			} catch (InterruptedException e) {
				// ignore
			}
			if (i == ticksToThrow) {
				throwException(toBeThrown);
				// toBeThrown is neither a runtime exception nor an error
				return;
			}
			monitor.worked(1);
		}
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

	/*
	 * (non-Javadoc)
	 * 
	 * @see org.eclipse.ui.examples.statushandlers.testtool.views.TestBedRunnable#toString()
	 */
	public String toString() {
		return Messages.JobsAndRunnablesRunnable_Name;
	}

	/*
	 * (non-Javadoc)
	 * 
	 * @see org.eclipse.core.runtime.IAdaptable#getAdapter(java.lang.Class)
	 */
	public Object getAdapter(Class adapter) {
		if (adapter == IPropertySource.class) {
			if (source == null) {
				source = new JobAndRunnablesPropertySource(this);
			}
			return source;
		}
		return null;
	}

	/*
	 * (non-Javadoc)
	 * 
	 * @see org.eclipse.ui.examples.statushandlers.testtool.views.TestBedRunnable#getTypeId()
	 */
	public String getTypeId() {
		return JOBS_AND_RUNNABLE_TYPE;
	}

	/*
	 * (non-Javadoc)
	 * 
	 * @see org.eclipse.ui.examples.statushandlers.testtool.views.TestBedRunnable#saveState(org.eclipse.ui.IMemento)
	 */
	protected void saveState(IMemento memento) {
		memento.putInteger(PERCENT, percent);
		memento.putInteger(DURATION, duration);
		memento.putInteger(EXCEPTION, exceptionIndex);
		memento.putString(DELAY, delayString);
		memento.putString(QUANTITY, quantity);
		memento.putString(RESCHEDULE_DELAY, rescheduleDelay);
		memento.putString(PROGRESS_NO_FOR_LOCK, "" + progressNoForLock); //$NON-NLS-1$
		memento.putString(THREAD, "" + thread); //$NON-NLS-1$
		memento.putString(JOBLOCK, "" + jobLock); //$NON-NLS-1$
		memento.putString(SYSTEM, "" + system); //$NON-NLS-1$
		memento.putString(USER, "" + user); //$NON-NLS-1$
		memento.putString(USEGROUP, "" + useGroup); //$NON-NLS-1$
		memento.putString(RESCHEDULE, "" + reschedule); //$NON-NLS-1$
		memento.putString(ERRORSTATUS, "" + returnErrorStatus); //$NON-NLS-1$
		memento.putString(UI_THREAD, "" + uiThread); //$NON-NLS-1$
		memento.putString(WINDOWRUNNABLE, "" + windowRunnable); //$NON-NLS-1$
		memento.putString(JOBS, "" + jobs); //$NON-NLS-1$
		memento.putString(DEFERRED, "" + deferred); //$NON-NLS-1$
	}

	/**
	 * Creates JobsAndRunnablesRunnable from the memento
	 * 
	 * @param memento
	 *            that stores all information about runnable
	 * @return JobsAndRunnablesRunnable corresponding to the memento
	 */
	public static TestBedRunnable create(IMemento memento) {
		JobsAndRunnablesRunnable runnable = new JobsAndRunnablesRunnable();
		runnable.percent = memento.getInteger(PERCENT).intValue();
		runnable.duration = memento.getInteger(DURATION).intValue();
		runnable.exceptionIndex = memento.getInteger(EXCEPTION).intValue();
		runnable.delayString = memento.getString(DELAY);
		runnable.quantity = memento.getString(QUANTITY);
		runnable.rescheduleDelay = memento.getString(RESCHEDULE_DELAY);
		runnable.progressNoForLock = new Boolean(memento
				.getString(PROGRESS_NO_FOR_LOCK)).booleanValue();
		runnable.thread = new Boolean(memento.getString(THREAD)).booleanValue();
		runnable.jobLock = new Boolean(memento.getString(JOBLOCK))
				.booleanValue();
		runnable.system = new Boolean(memento.getString(SYSTEM)).booleanValue();
		runnable.user = new Boolean(memento.getString(USER)).booleanValue();
		runnable.useGroup = new Boolean(memento.getString(USEGROUP))
				.booleanValue();
		runnable.reschedule = new Boolean(memento.getString(RESCHEDULE))
				.booleanValue();
		runnable.returnErrorStatus = new Boolean(memento.getString(ERRORSTATUS))
				.booleanValue();
		runnable.uiThread = new Boolean(memento.getString(UI_THREAD))
				.booleanValue();
		runnable.windowRunnable = new Boolean(memento.getString(WINDOWRUNNABLE))
				.booleanValue();
		runnable.jobs = new Boolean(memento.getString(JOBS)).booleanValue();
		runnable.deferred = new Boolean(memento.getString(DEFERRED)).booleanValue();
		return runnable;
	}
}
