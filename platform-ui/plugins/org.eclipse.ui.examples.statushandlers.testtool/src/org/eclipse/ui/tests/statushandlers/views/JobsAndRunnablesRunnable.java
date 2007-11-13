package org.eclipse.ui.tests.statushandlers.views;

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
import org.eclipse.ui.progress.IProgressService;
import org.eclipse.ui.tests.statushandlers.jobs.TestJob;
import org.eclipse.ui.tests.statushandlers.jobs.UITestJob;
import org.eclipse.ui.views.properties.IPropertySource;

/**
 * This class allows for running jobs and runnables 
 * in different configurations
 */
//TODO: consider splitting this class into three new classes 
// (one for each major option)
public class JobsAndRunnablesRunnable extends TestBedRunnable {

	public static final String JOBS_AND_RUNNABLE_TYPE = "jobsAndRunnable";
	//xml keys
	private static final String JOBS = "jobs";
	private static final String WINDOWRUNNABLE = "windowrunnable";
	private static final String UI_THREAD = "uiThread";
	private static final String ERRORSTATUS = "errorstatus";
	private static final String RESCHEDULE = "reschedule";
	private static final String USEGROUP = "usegroup";
	private static final String USER = "user";
	private static final String SYSTEM = "system";
	private static final String JOBLOCK = "joblock";
	private static final String THREAD = "thread";
	private static final String PROGRESS_NO_FOR_LOCK = "progressNoForLock";
	private static final String RESCHEDULE_DELAY = "rescheduleDelay";
	private static final String QUANTITY = "quantity";
	private static final String DELAY = "delay";
	private static final String EXCEPTION = "exception";
	private static final String DURATION = "duration";
	private static final String PERCENT = "percent";
	
	int percent, duration, exceptionIndex;
	
	String delayString, quantity, rescheduleDelay;
	
	boolean progressNoForLock, thread, jobLock, system, user,
		useGroup, reschedule, returnErrorStatus, uiThread ,windowRunnable,
		jobs;
	
	private JobAndRunnablesPropertySource source;
	
	public JobsAndRunnablesRunnable(int duration, int percent,
			int exception, boolean progressNoForLock, String delay, String quantity,
			String rescheduldeDelay, boolean thread, boolean jobLock,
			boolean system, boolean user, boolean useGroup,
			boolean reschedule, boolean returnErrorStatus, boolean uiThread, boolean windowRunnable, boolean jobs) {
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
	}
	

	JobsAndRunnablesRunnable() {
		
	}

	public void run() {
		final Throwable throwable = getException(exceptionIndex);
		final long throwAfter = getThrowAfter(duration);
		if(uiThread){

			IProgressService progressService = PlatformUI.getWorkbench()
					.getProgressService();
			try {
				progressService.runInUI(progressService,
						new IRunnableWithProgress() {
							public void run(IProgressMonitor monitor)
									throws InterruptedException {
								if (progressNoForLock)
									doRunInWorkspace(duration, throwAfter,
											throwable, monitor);
								else
									doRun(duration, throwAfter, throwable, monitor);
							}
						}, ResourcesPlugin.getWorkspace().getRoot());
			} catch (InvocationTargetException e) {
				e.printStackTrace();
			} catch (InterruptedException e) {
				e.printStackTrace();
			}
		}
		if(windowRunnable){
			final long sleep = 10;

			IRunnableWithProgress runnableTest = new WorkspaceModifyOperation() {

				/*
				 * (non-Javadoc)
				 * 
				 * @see org.eclipse.ui.actions.WorkspaceModifyOperation#execute(org.eclipse.core.runtime.IProgressMonitor)
				 */
				protected void execute(IProgressMonitor monitor){

					int ticks = (int) (duration / sleep);
					int ticksToThrow = (int) (throwAfter / sleep);

					monitor.beginTask(
							"Spinning inside ApplicationWindow.run()", ticks); //$NON-NLS-1$
					monitor.setTaskName("Spinning inside ApplicationWindow.run()"); //$NON-NLS-1$
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
		if(jobs){
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
				group.beginTask("Group", total); //$NON-NLS-1$
			}

			long delay = Integer.parseInt(delayString);
			for (int i = 0; i < jobCount; i++) {
				Job result;
				if (thread)
					result = new UITestJob(duration, jobLock, throwAfter, throwable,
							returnErrorStatus);
				else
					result = new TestJob(duration, jobLock, reschedule,
							rescheduleWait, throwAfter, throwable, returnErrorStatus);

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
			return new NullPointerException("A sample NullPointerException");
		case 1:
			return new OutOfMemoryError("A sample OutOfMemoryError");
		case 2:
			return new IndexOutOfBoundsException(
					"A sample IndexOutOfBoundsException");
		default:
			return new NullPointerException("A sample NullPointerException");

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
		monitor.beginTask("Spinning inside IProgressService", ticks); //$NON-NLS-1$
		monitor.setTaskName("Spinning inside IProgressService"); //$NON-NLS-1$
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

		// TODO do something !! the exception cannot be thrown
	}

	/* (non-Javadoc)
	 * @see org.eclipse.ui.tests.statushandlers.views.TestBedRunnable#toString()
	 */
	public String toString() {
		return "Job or Runnable";
	}

	/* (non-Javadoc)
	 * @see org.eclipse.core.runtime.IAdaptable#getAdapter(java.lang.Class)
	 */
	public Object getAdapter(Class adapter) {
		if(adapter == IPropertySource.class){
			if(source == null){
				source = new JobAndRunnablesPropertySource(this);
			}
			return source;
		}
		return null;
	}

	/* (non-Javadoc)
	 * @see org.eclipse.ui.tests.statushandlers.views.TestBedRunnable#getTypeId()
	 */
	public String getTypeId() {
		return JOBS_AND_RUNNABLE_TYPE;
	}

	/* (non-Javadoc)
	 * @see org.eclipse.ui.tests.statushandlers.views.TestBedRunnable#saveState(org.eclipse.ui.IMemento)
	 */
	protected void saveState(IMemento memento) {
		memento.putInteger(PERCENT, percent);
		memento.putInteger(DURATION, duration);
		memento.putInteger(EXCEPTION, exceptionIndex);
		memento.putString(DELAY, delayString);
		memento.putString(QUANTITY, quantity);
		memento.putString(RESCHEDULE_DELAY, rescheduleDelay);
		memento.putString(PROGRESS_NO_FOR_LOCK, "" + progressNoForLock);
		memento.putString(THREAD, "" + thread);
		memento.putString(JOBLOCK, "" + jobLock);
		memento.putString(SYSTEM, "" + system);
		memento.putString(USER, "" + user);
		memento.putString(USEGROUP, "" + useGroup);
		memento.putString(RESCHEDULE, "" + reschedule);
		memento.putString(ERRORSTATUS, "" + returnErrorStatus);
		memento.putString(UI_THREAD, "" + uiThread);
		memento.putString(WINDOWRUNNABLE, "" + windowRunnable);
		memento.putString(JOBS, "" + jobs);
	}

	/**
	 * Creates {@link JobsAndRunnablesRunnable} from the memento
	 * @param memento
	 * @return
	 */
	public static TestBedRunnable create(IMemento memento) {
		JobsAndRunnablesRunnable runnable = new JobsAndRunnablesRunnable();
		runnable.percent = memento.getInteger(PERCENT).intValue();
		runnable.duration = memento.getInteger(DURATION).intValue();
		runnable.exceptionIndex = memento.getInteger(EXCEPTION).intValue();
		runnable.delayString = memento.getString(DELAY);
		runnable.quantity = memento.getString(QUANTITY);
		runnable.rescheduleDelay = memento.getString(RESCHEDULE_DELAY);
		runnable.progressNoForLock = Boolean.getBoolean(memento
				.getString(PROGRESS_NO_FOR_LOCK));
		runnable.thread = Boolean.getBoolean(memento.getString(THREAD));
		runnable.jobLock = Boolean.getBoolean(memento.getString(JOBLOCK));
		runnable.system = Boolean.getBoolean(memento.getString(SYSTEM));
		runnable.user = Boolean.getBoolean(memento.getString(USER));
		runnable.useGroup = Boolean.getBoolean(memento.getString(USEGROUP));
		runnable.reschedule = Boolean.getBoolean(memento.getString(RESCHEDULE));
		runnable.returnErrorStatus = Boolean.getBoolean(memento
				.getString(ERRORSTATUS));
		runnable.uiThread = Boolean.getBoolean(memento.getString(UI_THREAD));
		runnable.windowRunnable = Boolean.getBoolean(memento
				.getString(WINDOWRUNNABLE));
		runnable.jobs = Boolean.getBoolean(memento.getString(JOBS));
		return runnable;
	}
}
