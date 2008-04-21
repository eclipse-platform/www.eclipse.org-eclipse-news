package org.eclipse.ui.examples.statushandlers.testtool.actions;

import org.eclipse.jface.action.IAction;
import org.eclipse.jface.util.Policy;
import org.eclipse.jface.viewers.ISelection;
import org.eclipse.swt.SWT;
import org.eclipse.swt.layout.GridLayout;
import org.eclipse.swt.widgets.Composite;
import org.eclipse.swt.widgets.Control;
import org.eclipse.swt.widgets.Label;
import org.eclipse.ui.IWorkbenchWindow;
import org.eclipse.ui.IWorkbenchWindowActionDelegate;
import org.eclipse.ui.statushandlers.AbstractStatusAreaProvider;
import org.eclipse.ui.statushandlers.StatusAdapter;

public class EnableSupportAction implements IWorkbenchWindowActionDelegate {

	public void dispose() {

	}

	public void init(IWorkbenchWindow window) {

	}

	public void run(IAction action) {
		if (action.isChecked()) {
			Policy.setErrorSupportProvider(new AbstractStatusAreaProvider() {
				public Control createSupportArea(Composite parent,
						StatusAdapter statusAdapter) {
					Composite composite = new Composite(parent, SWT.NONE);
					composite.setLayout(new GridLayout());
					Label label = new Label(composite, SWT.NONE);
					label.setText(statusAdapter.getStatus().getMessage());
					return composite;
				}
			});
		} else {
			Policy.setErrorSupportProvider(null);
		}

	}

	public void selectionChanged(IAction action, ISelection selection) {

	}

}
