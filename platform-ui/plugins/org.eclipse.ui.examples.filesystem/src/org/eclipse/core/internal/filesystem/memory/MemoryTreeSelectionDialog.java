/*******************************************************************************
 * Copyright (c) 2006 IBM Corporation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 * 
 * Contributors:
 *     IBM Corporation - initial API and implementation
 *******************************************************************************/
package org.eclipse.core.internal.filesystem.memory;

import org.eclipse.core.runtime.Path;
import org.eclipse.jface.viewers.IStructuredSelection;
import org.eclipse.jface.viewers.TreeViewer;
import org.eclipse.swt.SWT;
import org.eclipse.swt.layout.GridData;
import org.eclipse.swt.widgets.Composite;
import org.eclipse.swt.widgets.Control;
import org.eclipse.swt.widgets.Shell;
import org.eclipse.ui.dialogs.SelectionDialog;
import org.eclipse.ui.model.WorkbenchContentProvider;
import org.eclipse.ui.model.WorkbenchLabelProvider;

/**
 * A dialog that presents a tree of memory tree elements
 * for the user to select from.
 */
public class MemoryTreeSelectionDialog extends SelectionDialog {

	TreeViewer tree;
	protected MemoryTreeSelectionDialog(Shell parentShell) {
		super(parentShell);
	}
	protected Control createDialogArea(Composite parent) {
		Composite top = (Composite) super.createDialogArea(parent);

		tree = new TreeViewer(top, SWT.SINGLE);
		GridData data = new GridData(GridData.FILL_BOTH);
		tree.getControl().setLayoutData(data);
		tree.setContentProvider(new WorkbenchContentProvider());
		tree.setLabelProvider(new WorkbenchLabelProvider());
		tree.setInput(new MemoryFileStore(Path.ROOT));
		
		return top;
	}
	
	protected void okPressed() {
		IStructuredSelection selection = (IStructuredSelection)tree.getSelection();
		setResult(selection.toList());
	}
}
