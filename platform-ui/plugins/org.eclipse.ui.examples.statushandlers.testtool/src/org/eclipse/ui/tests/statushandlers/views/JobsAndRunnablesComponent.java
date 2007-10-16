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


import org.eclipse.jface.dialogs.IDialogConstants;
import org.eclipse.swt.SWT;
import org.eclipse.swt.custom.StackLayout;
import org.eclipse.swt.events.SelectionAdapter;
import org.eclipse.swt.events.SelectionEvent;
import org.eclipse.swt.layout.GridData;
import org.eclipse.swt.layout.GridLayout;
import org.eclipse.swt.widgets.Button;
import org.eclipse.swt.widgets.Combo;
import org.eclipse.swt.widgets.Composite;
import org.eclipse.swt.widgets.Label;
import org.eclipse.swt.widgets.Scale;
import org.eclipse.swt.widgets.Text;

/**
 * @since 3.3
 *
 */
public class JobsAndRunnablesComponent implements TestBedComponent {


	private Combo durationField;
	private Scale percentField;
	private Combo exceptionField;
	private Button progressNoForkLockField;
	private Text delayField;
	private Text quantityField;
	private Text rescheduleDelayField;
	private Button threadField;
	private Button jobLockField;
	private Button systemField;
	private Button userField;
	private Button groupField;
	private Button rescheduleField;
	private Button returnErrorStatusField;
	private Button uiThreadRadio;
	private Button windowRunnableRadio;
	private Button jobsRadio;
	private Composite runJobOptions;
	private Composite uiRunOptions;
	private Composite uiInterfaceThread;
	private Composite parameters;
	private StackLayout stackLayout;

	/* (non-Javadoc)
	 * @see org.eclipse.ui.tests.statushandlers.views.TestBedComponent#createComposite(org.eclipse.swt.widgets.Composite)
	 */
	public Composite createComposite(Composite parent) {
		Composite composite = new Composite(parent, SWT.NONE);
		composite.setLayout(new GridLayout(2, false));
		composite.setLayoutData(new GridData(GridData.FILL_HORIZONTAL));
		
		createEntryFieldGroup(composite);
		createJobAndRunnableSpecificGroups(composite);
		
		return composite;
	}

	/* (non-Javadoc)
	 * @see org.eclipse.ui.tests.statushandlers.views.TestBedComponent#getName()
	 */
	public String getName() {
		return "Jobs And Runnables";
	}

	/* (non-Javadoc)
	 * @see org.eclipse.ui.tests.statushandlers.views.TestBedComponent#getTestBedRunner()
	 */
	public TestBedRunnable getTestBedRunnable() {
		//pass controls snapshot
		//TODO: split this into three subclasses depending on radios state
		return new JobsAndRunnablesRunnable(
				getDuration(durationField.getSelectionIndex()),
				percentField.getSelection(),
				exceptionField.getSelectionIndex(),
				progressNoForkLockField.getSelection(),
				delayField.getText(),
				quantityField.getText(),
				rescheduleDelayField.getText(),
				threadField.getSelection(),
				jobLockField.getSelection(),
				systemField.getSelection(),
				userField.getSelection(),
				groupField.getSelection(),
				rescheduleField.getSelection(),
				returnErrorStatusField.getSelection(),
				uiThreadRadio.getSelection(),
				windowRunnableRadio.getSelection(),
				jobsRadio.getSelection());
	}
	
	protected int getDuration(int durationIndex) {
		switch (durationIndex) {
		case 0:
			return 0;
		case 1:
			return 1;
		case 2:
			return 1000;
		case 3:
			return 10000;
		case 4:
			return 60000;
		case 5:
		default:
			return 600000;
		}
	}
	
	/**
	 * Creates global entry group.
	 * 
	 * @param body
	 *            parent
	 */
	private void createEntryFieldGroup(Composite body) {
		// duration
		Label label = new Label(body, SWT.NONE);
		label.setText("Duration:"); //$NON-NLS-1$
		durationField = new Combo(body, SWT.DROP_DOWN | SWT.READ_ONLY);
		GridData data = new GridData(GridData.FILL_HORIZONTAL);
		data.widthHint = IDialogConstants.ENTRY_FIELD_WIDTH;
		durationField.setLayoutData(data);
		durationField.setToolTipText("Duration of the job/runnable");
		durationField.add("0"); //$NON-NLS-1$
		durationField.add("1 millisecond"); //$NON-NLS-1$
		durationField.add("1 second"); //$NON-NLS-1$
		durationField.add("10 seconds"); //$NON-NLS-1$
		durationField.add("1 minute"); //$NON-NLS-1$
		durationField.add("10 minutes"); //$NON-NLS-1$
		durationField.select(3);

		label = new Label(body, SWT.NONE);
		label.setText("Throw exception after (% of duration):"); //$NON-NLS-1$
		percentField = new Scale(body, SWT.NONE);
		data = new GridData(GridData.FILL_HORIZONTAL);
		data.widthHint = IDialogConstants.ENTRY_FIELD_WIDTH;
		percentField.setLayoutData(data);
		percentField
				.setToolTipText("Exception/Error will be thrown after 50% of duration");
		percentField.setMinimum(1);
		percentField.setMaximum(100);
		percentField.setSelection(50);
		percentField.addSelectionListener(new SelectionAdapter(){

			public void widgetSelected(SelectionEvent e) {
				percentField.setToolTipText("Exception/Error will be thrown after "
						+ percentField.getSelection() + "% of duration");
			}
			
		});

		label = new Label(body, SWT.NONE);
		label.setText("Exception:"); //$NON-NLS-1$
		exceptionField = new Combo(body, SWT.DROP_DOWN | SWT.READ_ONLY);
		data = new GridData(GridData.FILL_HORIZONTAL);
		data.widthHint = IDialogConstants.ENTRY_FIELD_WIDTH;
		exceptionField.setLayoutData(data);
		exceptionField
				.setToolTipText("Exception/Error to be thrown from the job/runnable");
		exceptionField.add("NullPointerException"); //$NON-NLS-1$
		exceptionField.add("OutOfMemoryError"); //$NON-NLS-1$
		exceptionField.add("IndexOutOfBoundsException");//$NON-NLS-1$
		exceptionField.select(0);

	}
	
	/**
	 * Creates groups for run in UI / run in user thread and run job actions.
	 * 
	 * @param parent
	 */
	private void createJobAndRunnableSpecificGroups(Composite parent) {

		Composite group = new Composite(parent, SWT.NONE);
		GridLayout layout = new GridLayout();
		layout.numColumns = 3;
		group.setLayout(layout);
		GridData gd = new GridData(GridData.FILL_BOTH);
		gd.horizontalSpan = 2;
		group.setLayoutData(gd);
		
		Composite radios = new Composite(parent, SWT.NONE);
		layout = new GridLayout();
		radios.setLayout(layout);
		gd = new GridData(GridData.FILL_BOTH);
		gd.horizontalAlignment = GridData.HORIZONTAL_ALIGN_BEGINNING;
		radios.setLayoutData(gd);
		
		uiThreadRadio = new Button(radios, SWT.RADIO);
		uiThreadRadio.setText("Run in UI thread (does not fork)");
		uiThreadRadio.setToolTipText("Use IProgressService.runInUI(...)"); 
		windowRunnableRadio = new Button(radios, SWT.RADIO);
		windowRunnableRadio.setText("Runnable in Window");
		windowRunnableRadio.setToolTipText("Use PlatformUI.getWorkbench().getActiveWorkbenchWindow().run(true, true, new IRunnableWithProgress(){...})");
		jobsRadio = new Button(radios, SWT.RADIO);
		jobsRadio.setText("Jobs");
		jobsRadio.setToolTipText("Creates and schedules jobs according to specified parameters");
		
		
		
		parameters = new Composite(parent, SWT.BORDER);
		stackLayout = new StackLayout();
		parameters.setLayout(stackLayout);
		gd = new GridData(GridData.FILL_BOTH);
		parameters.setLayoutData(gd);

		runJobOptions = createRunJob(parameters);
		uiRunOptions = createRunInUIGroup(parameters);
		uiInterfaceThread = createRunInUserInterfaceThread(parameters);
		uiThreadRadio.addSelectionListener(new SelectionAdapter(){

			public void widgetSelected(SelectionEvent e) {
				stackLayout.topControl = uiRunOptions;
				parameters.layout();
			}
			
		});
		
		windowRunnableRadio.addSelectionListener(new SelectionAdapter(){

			public void widgetSelected(SelectionEvent e) {
				stackLayout.topControl = uiInterfaceThread;
				parameters.layout();
			}
			
		});
		
		jobsRadio.addSelectionListener(new SelectionAdapter(){

			public void widgetSelected(SelectionEvent e) {
				stackLayout.topControl = runJobOptions;
				parameters.layout();
			}
			
		});
		
		uiThreadRadio.setSelection(true);
		stackLayout.topControl = uiRunOptions;
		parameters.layout();
	}
	
	private Composite createRunInUIGroup(Composite parent) {
		Composite group = new Composite(parent, SWT.BORDER);
		GridLayout layout = new GridLayout();
		group.setLayout(layout);
		group.setLayoutData(new GridData(GridData.FILL_VERTICAL));

		progressNoForkLockField = new Button(group, SWT.CHECK);
		progressNoForkLockField
				.setText("Lock the workspace (run in workspace)"); //$NON-NLS-1$
		GridData data = new GridData(GridData.FILL_HORIZONTAL);
		progressNoForkLockField.setLayoutData(data);
		progressNoForkLockField
				.setToolTipText("Use ResourcesPlugin.getWorkspace().run(new IWorkspaceRunnable(){...}) inside the IProgressService.runInUI(...)");
		return group;
	}
	
	private Composite createRunInUserInterfaceThread(Composite parent) {

		Composite group = new Composite(parent, SWT.BORDER);
		GridLayout layout = new GridLayout();
		layout.numColumns = 2;
		group.setLayout(layout);
		group.setLayoutData(new GridData(GridData.FILL_HORIZONTAL));
		
		Label noOptions = new Label (group, SWT.NONE);
		noOptions.setText("No additional options to configure");

		return group;
	}
	
	/**
	 * @param parent
	 */
	private Composite createRunJob(Composite parent) {
		Composite group = new Composite(parent, SWT.BORDER);
		GridLayout layout = new GridLayout();
		layout.numColumns = 2;
		group.setLayout(layout);
		group.setLayoutData(new GridData(GridData.FILL_HORIZONTAL));

		Label label = new Label(group, SWT.NONE);
		label.setText("Start delay (ms):"); //$NON-NLS-1$
		delayField = new Text(group, SWT.BORDER);
		GridData data = new GridData(GridData.FILL_HORIZONTAL);
		data.widthHint = IDialogConstants.ENTRY_FIELD_WIDTH;
		delayField.setLayoutData(data);
		delayField.setToolTipText("Delay to start the job");
		delayField.setText("0"); //$NON-NLS-1$

		label = new Label(group, SWT.NONE);
		label.setText("Quantity:"); //$NON-NLS-1$
		quantityField = new Text(group, SWT.BORDER);
		data = new GridData(GridData.FILL_HORIZONTAL);
		data.widthHint = IDialogConstants.ENTRY_FIELD_WIDTH;
		quantityField.setLayoutData(data);
		quantityField.setToolTipText("How many jobs ought to be started ?");
		quantityField.setText("1"); //$NON-NLS-1$

		// reschedule delay
		label = new Label(group, SWT.NONE);
		label.setText("Reschedule Delay (ms):"); //$NON-NLS-1$
		rescheduleDelayField = new Text(group, SWT.BORDER);
		data = new GridData(GridData.FILL_HORIZONTAL);
		data.widthHint = IDialogConstants.ENTRY_FIELD_WIDTH;
		rescheduleDelayField.setLayoutData(data);
		rescheduleDelayField
				.setToolTipText("Reschedule after ... (see the reschedule checkbox)");
		rescheduleDelayField.setText("1000"); //$NON-NLS-1$

		// thread
		threadField = new Button(group, SWT.CHECK);
		threadField.setText("Run in UI thread"); //$NON-NLS-1$
		data = new GridData(GridData.FILL_HORIZONTAL);
		threadField.setLayoutData(data);
		threadField
				.setToolTipText("Use org.eclipse.ui.progress.UIJob (instead of org.eclipse.core.runtime.jobs.Job)");

		// lock
		jobLockField = new Button(group, SWT.CHECK);
		jobLockField.setText("Lock the workspace"); //$NON-NLS-1$
		data = new GridData(GridData.FILL_HORIZONTAL);
		jobLockField.setLayoutData(data);
		jobLockField
				.setToolTipText("Reserve exclusive access to workspace - setRule(ResourcesPlugin.getWorkspace().getRoot())");

		// system
		systemField = new Button(group, SWT.CHECK);
		systemField.setText("System job"); //$NON-NLS-1$
		data = new GridData(GridData.FILL_HORIZONTAL);
		systemField.setLayoutData(data);
		systemField
				.setToolTipText("Decide whether the job is a system job /is presented on UI/");

		// whether the job is a user job
		userField = new Button(group, SWT.CHECK);
		userField.setText("User job"); //$NON-NLS-1$
		data = new GridData(GridData.FILL_HORIZONTAL);
		userField.setLayoutData(data);
		userField
				.setToolTipText("Decide whether the job is initiated directly by the UI end user");

		// groups
		groupField = new Button(group, SWT.CHECK);
		groupField.setText("Run in Group"); //$NON-NLS-1$
		data = new GridData(GridData.FILL_HORIZONTAL);
		groupField.setLayoutData(data);
		groupField
				.setToolTipText("Run all of the jobs as a single group (if there is more than one job)");

		// reschedule
		rescheduleField = new Button(group, SWT.CHECK);
		rescheduleField.setText("Reschedule"); //$NON-NLS-1$
		data = new GridData(GridData.FILL_HORIZONTAL);
		rescheduleField.setLayoutData(data);
		rescheduleField
				.setToolTipText("Reschedule the job ('Reschedule Delay' is the period between reschedules)");


		returnErrorStatusField = new Button(group, SWT.CHECK);
		returnErrorStatusField
				.setText("Return an exception wrapped in a error status"); //$NON-NLS-1$
		data = new GridData(GridData.FILL_HORIZONTAL);
		data.horizontalSpan = 2;
		returnErrorStatusField.setLayoutData(data);
		returnErrorStatusField
				.setToolTipText("Wrap the exception in a MultiStatus instance");
		return group;
	}

	/* (non-Javadoc)
	 * @see org.eclipse.ui.tests.statushandlers.views.TestBedComponent#accept(org.eclipse.ui.tests.statushandlers.views.TestBedRunnable)
	 */
	public boolean accept(TestBedRunnable runnable) {
		if(!(runnable instanceof JobsAndRunnablesRunnable)){
			return false;
		}
		JobsAndRunnablesRunnable jarr = (JobsAndRunnablesRunnable) runnable;
		int index = 0;
		int millis = jarr.duration;
		switch (millis) {
		case 1: //1 ms
			index = 1;
			break;
		case 1000: //1s
			index = 2;
			break;
		case 10000: //10s
			index = 3;
			break;
		case 60000: //1m
			index = 4;
			break;
		case 600000: //10m
			index = 5;
			break;
		}
		durationField.select(index);
		percentField.setSelection(jarr.percent);
		exceptionField.select(jarr.exceptionIndex);
		progressNoForkLockField.setSelection(jarr.progressNoForLock);
		delayField.setText(jarr.delayString);
		quantityField.setText(jarr.quantity);
		rescheduleDelayField.setText(jarr.rescheduleDelay);
		threadField.setSelection(jarr.thread);
		jobLockField.setSelection(jarr.jobLock);
		systemField.setSelection(jarr.system);
		userField.setSelection(jarr.user);
		groupField.setSelection(jarr.useGroup);
		rescheduleField.setSelection(jarr.reschedule);
		returnErrorStatusField.setSelection(jarr.returnErrorStatus);
		uiThreadRadio.setSelection(jarr.uiThread);
		if(jarr.uiThread){
			stackLayout.topControl = uiRunOptions;
		}
		windowRunnableRadio.setSelection(jarr.windowRunnable);
		if(jarr.windowRunnable){
			stackLayout.topControl = uiInterfaceThread;
		}
		jobsRadio.setSelection(jarr.jobs);
		if(jarr.jobs){
			stackLayout.topControl = runJobOptions;
		}
		parameters.layout();
		return true;
	}

}
