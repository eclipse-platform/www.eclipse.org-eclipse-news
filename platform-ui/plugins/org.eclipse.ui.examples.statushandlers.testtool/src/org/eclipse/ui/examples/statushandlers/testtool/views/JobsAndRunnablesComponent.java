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

import org.eclipse.jface.dialogs.IDialogConstants;
import org.eclipse.osgi.util.NLS;
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
import org.eclipse.ui.examples.statushandlers.testtool.Messages;

/**
 * This component is responsible for gathering informations about jobs and
 * runnables from the user.
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
	private Button deferredStatusField;

	/*
	 * (non-Javadoc)
	 * 
	 * @see org.eclipse.ui.examples.statushandlers.testtool.views.TestBedComponent#createComposite(org.eclipse.swt.widgets.Composite)
	 */
	public Composite createComposite(Composite parent) {
		Composite composite = new Composite(parent, SWT.NONE);
		composite.setLayout(new GridLayout(2, false));
		composite.setLayoutData(new GridData(GridData.FILL_HORIZONTAL));

		createEntryFieldGroup(composite);
		createJobAndRunnableSpecificGroups(composite);

		return composite;
	}

	/*
	 * (non-Javadoc)
	 * 
	 * @see org.eclipse.ui.examples.statushandlers.testtool.views.TestBedComponent#getName()
	 */
	public String getName() {
		return Messages.JobsAndRunnablesComponent_Name;
	}

	/*
	 * (non-Javadoc)
	 * 
	 * @see org.eclipse.ui.examples.statushandlers.testtool.views.TestBedComponent#getTestBedRunner()
	 */
	public TestBedRunnable getTestBedRunnable() {
		// pass controls snapshot
		return new JobsAndRunnablesRunnable(getDuration(durationField
				.getSelectionIndex()), percentField.getSelection(),
				exceptionField.getSelectionIndex(), progressNoForkLockField
						.getSelection(), delayField.getText(), quantityField
						.getText(), rescheduleDelayField.getText(), threadField
						.getSelection(), jobLockField.getSelection(),
				systemField.getSelection(), userField.getSelection(),
				groupField.getSelection(), rescheduleField.getSelection(),
				returnErrorStatusField.getSelection(), uiThreadRadio
						.getSelection(), windowRunnableRadio.getSelection(),
				jobsRadio.getSelection(), deferredStatusField.getSelection());
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
	 *            parent on which all controls should be set
	 */
	private void createEntryFieldGroup(Composite body) {
		// duration
		Label label = new Label(body, SWT.NONE);
		label.setText("Duration:"); //$NON-NLS-1$
		durationField = new Combo(body, SWT.DROP_DOWN | SWT.READ_ONLY);
		GridData data = new GridData(GridData.FILL_HORIZONTAL);
		data.widthHint = IDialogConstants.ENTRY_FIELD_WIDTH;
		durationField.setLayoutData(data);
		durationField
				.setToolTipText(Messages.JobsAndRunnablesComponent_DurationTooltip);
		durationField.add("0"); //$NON-NLS-1$
		durationField.add(Messages.JobsAndRunnablesComponent_1ms);
		durationField.add(Messages.JobsAndRunnablesComponent_1s);
		durationField.add(Messages.JobsAndRunnablesComponent_10s);
		durationField.add(Messages.JobsAndRunnablesComponent_1minute);
		durationField.add(Messages.JobsAndRunnablesComponent_10minutes);
		durationField.select(3); // default 10 seconds

		label = new Label(body, SWT.NONE);
		label.setText(Messages.JobsAndRunnablesComponent_ThrowAfter);
		percentField = new Scale(body, SWT.NONE);
		data = new GridData(GridData.FILL_HORIZONTAL);
		data.widthHint = IDialogConstants.ENTRY_FIELD_WIDTH;
		percentField.setLayoutData(data);
		percentField
				.setToolTipText(Messages.JobsAndRunnablesComponent_DefaultThrowAfterTooltip);
		percentField.setMinimum(1);
		percentField.setMaximum(100);
		percentField.setSelection(50);
		percentField.addSelectionListener(new SelectionAdapter() {

			public void widgetSelected(SelectionEvent e) {
				percentField
						.setToolTipText(NLS
								.bind(
										Messages.JobsAndRunnablesComponent_ExceptionThrownAfter,
										new Integer(percentField.getSelection())));

			}

		});

		label = new Label(body, SWT.NONE);
		label.setText(Messages.JobsAndRunnablesComponent_Exception);
		exceptionField = new Combo(body, SWT.DROP_DOWN | SWT.READ_ONLY);
		data = new GridData(GridData.FILL_HORIZONTAL);
		data.widthHint = IDialogConstants.ENTRY_FIELD_WIDTH;
		exceptionField.setLayoutData(data);
		exceptionField
				.setToolTipText(Messages.JobsAndRunnablesComponent_ExceptionFromTheJob);
		exceptionField.add("NullPointerException"); //$NON-NLS-1$
		exceptionField.add("OutOfMemoryError"); //$NON-NLS-1$
		exceptionField.add("IndexOutOfBoundsException");//$NON-NLS-1$
		exceptionField.select(0);

	}

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
		uiThreadRadio
				.setText(Messages.JobsAndRunnablesComponent_RunInUIThreadLabel);
		uiThreadRadio
				.setToolTipText(Messages.JobsAndRunnablesComponent_RunInUIThreadTooltip);
		windowRunnableRadio = new Button(radios, SWT.RADIO);
		windowRunnableRadio
				.setText(Messages.JobsAndRunnablesComponent_WindowRunnable);
		windowRunnableRadio
				.setToolTipText(Messages.JobsAndRunnablesComponent_WindowRunnableTooltip);
		jobsRadio = new Button(radios, SWT.RADIO);
		jobsRadio.setText(Messages.JobsAndRunnablesComponent_Jobs);
		jobsRadio
				.setToolTipText(Messages.JobsAndRunnablesComponent_CreateJobWithParameters);

		parameters = new Composite(parent, SWT.BORDER);
		stackLayout = new StackLayout();
		parameters.setLayout(stackLayout);
		gd = new GridData(GridData.FILL_BOTH);
		parameters.setLayoutData(gd);

		runJobOptions = createRunJob(parameters);
		uiRunOptions = createRunInUIGroup(parameters);
		uiInterfaceThread = createRunInUserInterfaceThread(parameters);
		uiThreadRadio.addSelectionListener(new SelectionAdapter() {

			public void widgetSelected(SelectionEvent e) {
				stackLayout.topControl = uiRunOptions;
				parameters.layout();
			}

		});

		windowRunnableRadio.addSelectionListener(new SelectionAdapter() {

			public void widgetSelected(SelectionEvent e) {
				stackLayout.topControl = uiInterfaceThread;
				parameters.layout();
			}

		});

		jobsRadio.addSelectionListener(new SelectionAdapter() {

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
				.setToolTipText(Messages.JobsAndRunnablesComponent_progressNoForkTooltip);
		return group;
	}

	private Composite createRunInUserInterfaceThread(Composite parent) {

		Composite group = new Composite(parent, SWT.BORDER);
		GridLayout layout = new GridLayout();
		layout.numColumns = 2;
		group.setLayout(layout);
		group.setLayoutData(new GridData(GridData.FILL_HORIZONTAL));

		Label noOptions = new Label(group, SWT.NONE);
		noOptions.setText(Messages.JobsAndRunnablesComponent_NoOptions);

		return group;
	}

	private Composite createRunJob(Composite parent) {
		Composite group = new Composite(parent, SWT.BORDER);
		GridLayout layout = new GridLayout();
		layout.numColumns = 2;
		group.setLayout(layout);
		group.setLayoutData(new GridData(GridData.FILL_HORIZONTAL));

		Label label = new Label(group, SWT.NONE);
		label.setText(Messages.JobsAndRunnablesComponent_DelayLabel);
		delayField = new Text(group, SWT.BORDER);
		GridData data = new GridData(GridData.FILL_HORIZONTAL);
		data.widthHint = IDialogConstants.ENTRY_FIELD_WIDTH;
		delayField.setLayoutData(data);
		delayField
				.setToolTipText(Messages.JobsAndRunnablesComponent_DelayTooltip);
		delayField.setText(Messages.JobsAndRunnablesComponent_23);

		label = new Label(group, SWT.NONE);
		label.setText(Messages.JobsAndRunnablesComponent_Quantity);
		quantityField = new Text(group, SWT.BORDER);
		data = new GridData(GridData.FILL_HORIZONTAL);
		data.widthHint = IDialogConstants.ENTRY_FIELD_WIDTH;
		quantityField.setLayoutData(data);
		quantityField
				.setToolTipText(Messages.JobsAndRunnablesComponent_QunatityTooltip);
		quantityField.setText("1"); //$NON-NLS-1$

		// reschedule delay
		label = new Label(group, SWT.NONE);
		label.setText(Messages.JobsAndRunnablesComponent_ResheduleDelayLabel);
		rescheduleDelayField = new Text(group, SWT.BORDER);
		data = new GridData(GridData.FILL_HORIZONTAL);
		data.widthHint = IDialogConstants.ENTRY_FIELD_WIDTH;
		rescheduleDelayField.setLayoutData(data);
		rescheduleDelayField
				.setToolTipText(Messages.JobsAndRunnablesComponent_ResheduleValueTooltip);
		rescheduleDelayField
				.setText(Messages.JobsAndRunnablesComponent_DefaultResheduleValue);

		// thread
		threadField = new Button(group, SWT.CHECK);
		threadField.setText(Messages.JobsAndRunnablesComponent_UIThreadLabel);
		data = new GridData(GridData.FILL_HORIZONTAL);
		threadField.setLayoutData(data);
		threadField
				.setToolTipText(Messages.JobsAndRunnablesComponent_UIJobTooltip);

		// lock
		jobLockField = new Button(group, SWT.CHECK);
		jobLockField
				.setText(Messages.JobsAndRunnablesComponent_LockedWorkspace);
		data = new GridData(GridData.FILL_HORIZONTAL);
		jobLockField.setLayoutData(data);
		jobLockField
				.setToolTipText(Messages.JobsAndRunnablesComponent_LockedWorkspaceTooltip);

		// system
		systemField = new Button(group, SWT.CHECK);
		systemField.setText(Messages.JobsAndRunnablesComponent_SystemJobLabel);
		data = new GridData(GridData.FILL_HORIZONTAL);
		systemField.setLayoutData(data);
		systemField
				.setToolTipText(Messages.JobsAndRunnablesComponent_SystemJobTooltip);

		// whether the job is a user job
		userField = new Button(group, SWT.CHECK);
		userField.setText(Messages.JobsAndRunnablesComponent_UserJob);
		data = new GridData(GridData.FILL_HORIZONTAL);
		userField.setLayoutData(data);
		userField
				.setToolTipText(Messages.JobsAndRunnablesComponent_UserJobTooltip);

		// groups
		groupField = new Button(group, SWT.CHECK);
		groupField.setText(Messages.JobsAndRunnablesComponent_SingleGroupLabel);
		data = new GridData(GridData.FILL_HORIZONTAL);
		groupField.setLayoutData(data);
		groupField
				.setToolTipText(Messages.JobsAndRunnablesComponent_SingleGroupTooltip);

		// reschedule
		rescheduleField = new Button(group, SWT.CHECK);
		rescheduleField
				.setText(Messages.JobsAndRunnablesComponent_resheduleLabel);
		data = new GridData(GridData.FILL_HORIZONTAL);
		rescheduleField.setLayoutData(data);
		rescheduleField
				.setToolTipText(Messages.JobsAndRunnablesComponent_resheduleTooltip);

		returnErrorStatusField = new Button(group, SWT.CHECK);
		returnErrorStatusField
				.setText("Wrapped"); //$NON-NLS-1$
		data = new GridData(GridData.FILL_HORIZONTAL);
		returnErrorStatusField.setLayoutData(data);
		returnErrorStatusField
				.setToolTipText(Messages.JobsAndRunnablesComponent_wrapTooltip);
		
		deferredStatusField = new Button(group, SWT.CHECK);
		deferredStatusField.setText("Deffered"); //$NON-NLS-1$
		deferredStatusField.setToolTipText("Does not report error immediately"); //$NON-NLS-1$
		return group;
	}

	/*
	 * (non-Javadoc)
	 * 
	 * @see org.eclipse.ui.examples.statushandlers.testtool.views.TestBedComponent#accept(org.eclipse.ui.examples.statushandlers.testtool.views.TestBedRunnable)
	 */
	public boolean accept(TestBedRunnable runnable) {
		if (!(runnable instanceof JobsAndRunnablesRunnable)) {
			return false;
		}
		JobsAndRunnablesRunnable jarr = (JobsAndRunnablesRunnable) runnable;
		int index = 0;
		int millis = jarr.duration;
		switch (millis) {
		case 1: // 1 ms
			index = 1;
			break;
		case 1000: // 1s
			index = 2;
			break;
		case 10000: // 10s
			index = 3;
			break;
		case 60000: // 1m
			index = 4;
			break;
		case 600000: // 10m
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
		if (jarr.uiThread) {
			stackLayout.topControl = uiRunOptions;
		}
		windowRunnableRadio.setSelection(jarr.windowRunnable);
		if (jarr.windowRunnable) {
			stackLayout.topControl = uiInterfaceThread;
		}
		jobsRadio.setSelection(jarr.jobs);
		if (jarr.jobs) {
			stackLayout.topControl = runJobOptions;
		}
		deferredStatusField.setSelection(jarr.deferred);
		parameters.layout();
		return true;
	}

}
