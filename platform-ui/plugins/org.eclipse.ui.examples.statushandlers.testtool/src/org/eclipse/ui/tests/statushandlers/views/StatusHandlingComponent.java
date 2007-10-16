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

import java.util.ArrayList;
import java.util.Collections;
import java.util.Iterator;
import java.util.List;

import org.eclipse.core.runtime.IStatus;
import org.eclipse.core.runtime.Status;
import org.eclipse.jface.viewers.IStructuredContentProvider;
import org.eclipse.jface.viewers.StructuredSelection;
import org.eclipse.jface.viewers.TableViewer;
import org.eclipse.jface.viewers.Viewer;
import org.eclipse.swt.SWT;
import org.eclipse.swt.events.SelectionAdapter;
import org.eclipse.swt.events.SelectionEvent;
import org.eclipse.swt.layout.GridData;
import org.eclipse.swt.layout.GridLayout;
import org.eclipse.swt.widgets.Button;
import org.eclipse.swt.widgets.Combo;
import org.eclipse.swt.widgets.Composite;
import org.eclipse.swt.widgets.Label;
import org.eclipse.swt.widgets.Text;
import org.eclipse.ui.IMemento;
import org.eclipse.ui.statushandlers.StatusManager;
import org.eclipse.ui.tests.statushandlers.TestToolPlugin;

/**
 * @since 3.3
 * 
 */
public class StatusHandlingComponent implements TestBedComponent {

	private final class RemoveSelectionAdapter extends SelectionAdapter {
		public void widgetSelected(SelectionEvent e) {
			StructuredSelection sel = (StructuredSelection) statusTableViever
					.getSelection();
			for (Iterator it = sel.iterator(); it.hasNext();) {
				statusItems[0].remove(it.next());
			}
			statusTableViever.refresh();
		}
	}

	private class ContentProvider implements IStructuredContentProvider {

		/*
		 * (non-Javadoc)
		 * 
		 * @see org.eclipse.jface.viewers.IStructuredContentProvider#getElements(java.lang.Object)
		 */
		public Object[] getElements(Object inputElement) {
			return statusItems[0].toArray();
		}

		/*
		 * (non-Javadoc)
		 * 
		 * @see org.eclipse.jface.viewers.IContentProvider#dispose()
		 */
		public void dispose() {

		}

		/*
		 * (non-Javadoc)
		 * 
		 * @see org.eclipse.jface.viewers.IContentProvider#inputChanged(org.eclipse.jface.viewers.Viewer,
		 *      java.lang.Object, java.lang.Object)
		 */
		public void inputChanged(Viewer viewer, Object oldInput, Object newInput) {

		}

	}

	/**
	 * An item to be displayed in the table.
	 */
	public static class DisplayedItem {

		// xml tags
		public static final String STATUS = "status";
		private static final String HINT = "hint";
		private static final String SEVERITY = "severity";
		private static final String SOURCEPLUGIN = "sourceplugin";
		private static final String MESSAGE = "message";
		private static final String EXPLANATION = "explanation";
		private static final String ACTION = "action";
		private static final String WRAPPED = "wrapped";

		private int hint;
		private boolean wrapped;
		private String explanation = null;
		private String action = null;

		private IStatus status;

		/**
		 * Constructs a new item.
		 * 
		 * @param status
		 * @param hint
		 */
		public DisplayedItem(IStatus status, int hint, boolean wrapped,
				String explanation, String action) {
			if (status == null)
				throw new IllegalArgumentException();
			this.status = status;
			this.hint = hint;
			this.wrapped = wrapped;
			this.explanation = explanation;
			this.action = action;
		}

		public String toString() {

			String severity = "?";

			switch (status.getSeverity()) {
			case IStatus.CANCEL:
				severity = "Cancel";
				break;
			case IStatus.ERROR:
				severity = "Error";
				break;
			case IStatus.INFO:
				severity = "Info";
				break;
			case IStatus.OK:
				severity = "Ok";
				break;
			case IStatus.WARNING:
				severity = "Warning";
				break;
			}

			String stringHint = "?";
			if (hint == StatusManager.NONE) {
				stringHint = "NONE";
			} else {
				stringHint = "";
				if ((hint & StatusManager.SHOW) == StatusManager.SHOW) {
					stringHint += "SHOW";
				}
				if ((hint & StatusManager.LOG) == StatusManager.LOG) {
					stringHint += "LOG";
				}
				if ((hint & StatusManager.BLOCK) == StatusManager.BLOCK) {
					stringHint += "BLOCK";
				}
			}

			return "Severity:" + severity + " PluginID:" + status.getPlugin()
					+ " Hint:" + stringHint + " Wrapped:" + wrapped
					+ " Explanation:" + explanation + " Action:" + action;
		}

		/**
		 * @return the hint
		 */
		public int getHint() {
			return hint;
		}

		/**
		 * @return the status
		 */
		public IStatus getStatus() {
			return status;
		}

		/**
		 * @param statusMemento
		 */
		public void saveState(IMemento memento) {
			IMemento child = memento.createChild(STATUS);
			child.putString(SOURCEPLUGIN, status.getPlugin());
			child.putInteger(SEVERITY, status.getSeverity());
			child.putInteger(HINT, hint);
			child.putString(MESSAGE, status.getMessage());
			child.putString(WRAPPED, "" + wrapped);
			child.putString(EXPLANATION, explanation);
			child.putString(ACTION, action);
		}

		/**
		 * @param memento
		 * @return
		 */
		public static Object create(IMemento memento) {
			String source = memento.getString(SOURCEPLUGIN);
			String message = memento.getString(MESSAGE);
			int severity = memento.getInteger(SEVERITY).intValue();
			int hint = memento.getInteger(HINT).intValue();
			boolean wrapped = Boolean.getBoolean(memento.getString(WRAPPED));
			String explanation = memento.getString(EXPLANATION);
			if (explanation != null && explanation.length() == 0)
				explanation = null;
			String action = memento.getString(ACTION);
			if (action != null && action.length() == 0)
				action = null;
			Status status = new Status(severity, source, message);
			return new DisplayedItem(status, hint, wrapped, explanation, action);
		}

		/**
		 * @return Returns the explanation.
		 */
		String getExplanation() {
			return explanation;
		}

		/**
		 * @param explanation
		 *            The explanation to set.
		 */
		void setExplanation(String explanation) {
			this.explanation = explanation;
		}

		/**
		 * @return Returns the action.
		 */
		String getAction() {
			return action;
		}

		/**
		 * @param action
		 *            The action to set.
		 */
		void setAction(String action) {
			this.action = action;
		}

		/**
		 * @return Returns the wrapped.
		 */
		boolean isWrapped() {
			return wrapped;
		}

		/**
		 * @param wrapped
		 *            The wrapped to set.
		 */
		void setWrapped(boolean wrapped) {
			this.wrapped = wrapped;
		}
	}

	private List[] statusItems = new List[] { Collections
			.synchronizedList(new ArrayList()) };

	private TableViewer statusTableViever;
	private Combo statusSeverityField;
	private Text statusPluginID;
	private Button showStatusField;
	private Button logStatusField;
	private Button blockStatusField;
	private Button wrappedStatusField;
	private Text explanationField;
	private Text actionField;

	/*
	 * (non-Javadoc)
	 * 
	 * @see org.eclipse.ui.tests.statushandlers.views.TestBedComponent#createComposite(org.eclipse.swt.widgets.Composite)
	 */
	public Composite createComposite(Composite parent) {
		Composite composite = new Composite(parent, SWT.NONE);
		composite.setLayout(new GridLayout(2, false));
		composite.setLayoutData(new GridData(GridData.FILL_HORIZONTAL));

		statusTableViever = new TableViewer(composite, SWT.MULTI | SWT.BORDER
				| SWT.V_SCROLL | SWT.VIRTUAL);
		ContentProvider contentProvider = new ContentProvider();
		statusTableViever.setContentProvider(contentProvider);
		GridData gd = new GridData(GridData.FILL_BOTH);
		gd.verticalSpan = 2;
		statusTableViever.getTable().setLayoutData(gd);
		statusTableViever.setInput(new Object[0]);

		StatusHandlingView.createPopMenu(statusTableViever, statusItems,
				new RemoveSelectionAdapter());

		Composite addStatusComposite = new Composite(composite, SWT.BORDER);
		addStatusComposite.setLayout(new GridLayout(2, false));

		// duration
		Label label = new Label(addStatusComposite, SWT.NONE);
		label.setText("Severity level:"); //$NON-NLS-1$
		statusSeverityField = new Combo(addStatusComposite, SWT.DROP_DOWN
				| SWT.READ_ONLY);
		statusSeverityField.setLayoutData(new GridData());
		statusSeverityField.setToolTipText("Severity of the generated status");//$NON-NLS-1$
		statusSeverityField.add("OK"); //$NON-NLS-1$
		statusSeverityField.add("INFO"); //$NON-NLS-1$
		statusSeverityField.add("WARNING"); //$NON-NLS-1$
		statusSeverityField.add("CANCEL"); //$NON-NLS-1$
		statusSeverityField.add("ERROR"); //$NON-NLS-1$
		statusSeverityField.select(4);

		Label labelID = new Label(addStatusComposite, SWT.NONE);
		labelID.setText("source plugin ID:"); //$NON-NLS-1$
		statusPluginID = new Text(addStatusComposite, SWT.BORDER);
		statusPluginID.setLayoutData(new GridData());
		statusPluginID
				.setToolTipText("Sets the ID of plugin which 'generated' the status");
		statusPluginID.setText(TestToolPlugin.PLUGIN_ID);

		showStatusField = new Button(addStatusComposite, SWT.CHECK);
		showStatusField.setText("Show status "); //$NON-NLS-1$
		showStatusField.setLayoutData(new GridData());

		logStatusField = new Button(addStatusComposite, SWT.CHECK);
		logStatusField.setText("Log status"); //$NON-NLS-1$
		logStatusField.setLayoutData(new GridData());
		logStatusField
				.setToolTipText("Sets one of the StatusManager hints for logging statuses (LOG or SHOWANDLOG)!");

		blockStatusField = new Button(addStatusComposite, SWT.CHECK);
		blockStatusField.setText("Block");
		GridData blockGd = new GridData();
		blockStatusField.setLayoutData(blockGd);
		blockStatusField
				.setToolTipText("Decides if status will be shown in modal window");
		blockStatusField.addSelectionListener(new SelectionAdapter() {
			public void widgetSelected(SelectionEvent e) {
				if (blockStatusField.getSelection()) {
					showStatusField.setSelection(true);
				}
			}
		});

		wrappedStatusField = new Button(addStatusComposite, SWT.CHECK);
		wrappedStatusField.setText("Wrapped");
		wrappedStatusField
				.setToolTipText("Decides if IStatus should be wrapped in StatusAdapter.\n"
						+ "Enables explanation and action");
		wrappedStatusField.addSelectionListener(new SelectionAdapter() {
			public void widgetSelected(SelectionEvent e) {
				if (wrappedStatusField.getSelection()) {
					explanationField.setEnabled(true);
					actionField.setEnabled(true);
				} else {
					explanationField.setEnabled(false);
					actionField.setEnabled(false);
				}
			}
		});

		final Label explanationLabel = new Label(addStatusComposite, SWT.NONE);
		explanationLabel.setText("Explanation:");
		explanationField = new Text(addStatusComposite, SWT.BORDER);
		explanationField
				.setToolTipText("Put explanation here. Empty means that no explanation available");
		explanationField.setEnabled(false);

		final Label actionLabel = new Label(addStatusComposite, SWT.NONE);
		actionLabel.setText("Action:");
		actionField = new Text(addStatusComposite, SWT.BORDER);
		actionField
				.setToolTipText("Put action here. Empty means that no action available");
		actionField.setEnabled(false);

		Button addStatus = new Button(addStatusComposite, SWT.PUSH);

		addStatus.setText("Add status to the list"); //$NON-NLS-1$
		gd = new GridData(GridData.FILL_HORIZONTAL);
		gd.horizontalSpan = 2;
		addStatus.setLayoutData(gd);
		addStatus.addSelectionListener(new SelectionAdapter() {

			private int statusNo;

			public void widgetSelected(SelectionEvent e) {
				boolean log = logStatusField.getSelection();
				boolean show = showStatusField.getSelection();
				boolean block = blockStatusField.getSelection();

				int hint = StatusManager.NONE;
				if (log) {
					hint = hint | StatusManager.LOG;
				}
				if (show) {
					hint = hint | StatusManager.SHOW;
				}
				if (block) {
					hint = hint | StatusManager.BLOCK;
				}

				int severity = IStatus.OK;
				switch (statusSeverityField.getSelectionIndex()) {
				case 0:
					severity = IStatus.OK;
					break;
				case 1:
					severity = IStatus.INFO;
					break;
				case 2:
					severity = IStatus.WARNING;
					break;
				case 3:
					severity = IStatus.CANCEL;
					break;
				case 4:
					severity = IStatus.ERROR;
					break;
				}

				boolean wrapped = wrappedStatusField.getSelection();
				String explanation = explanationField.getText();

				if (explanation != null && explanation.length() == 0)
					explanation = null;
				String action = actionField.getText();
				if (action != null && action.length() == 0)
					action = null;
				statusNo++;

				statusItems[0].add(new DisplayedItem(new Status(severity,
						statusPluginID.getText(), "A test status No. "
								+ statusNo + " !"), hint, wrapped, explanation,
						action));
				statusTableViever.refresh();
			}
		});

		return composite;
	}

	/*
	 * (non-Javadoc)
	 * 
	 * @see org.eclipse.ui.tests.statushandlers.views.TestBedComponent#getName()
	 */
	public String getName() {
		return "Status Handling";
	}

	/*
	 * (non-Javadoc)
	 * 
	 * @see org.eclipse.ui.tests.statushandlers.views.TestBedComponent#getTestBedRunnable()
	 */
	public TestBedRunnable getTestBedRunnable() {
		return new StatusHandlingRunnable(new ArrayList(statusItems[0]));
	}

	/*
	 * (non-Javadoc)
	 * 
	 * @see org.eclipse.ui.tests.statushandlers.views.TestBedComponent#accept(org.eclipse.ui.tests.statushandlers.views.TestBedRunnable)
	 */
	public boolean accept(TestBedRunnable runnable) {
		if (!(runnable instanceof StatusHandlingRunnable)) {
			return false;
		}
		StatusHandlingRunnable shr = (StatusHandlingRunnable) runnable;
		statusItems[0] = Collections.synchronizedList(new ArrayList(shr.items));
		statusTableViever.refresh();
		return true;
	}

}
