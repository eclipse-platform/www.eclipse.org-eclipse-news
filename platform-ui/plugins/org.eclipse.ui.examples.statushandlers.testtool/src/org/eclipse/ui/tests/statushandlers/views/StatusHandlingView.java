/*******************************************************************************
 * Copyright (c) 2005, 2007 IBM Corporation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *     IBM Corporation - initial API and implementation
 *******************************************************************************/
package org.eclipse.ui.tests.statushandlers.views;

import java.io.BufferedReader;
import java.io.BufferedWriter;
import java.io.File;
import java.io.FileReader;
import java.io.FileWriter;
import java.io.IOException;
import java.util.ArrayList;
import java.util.Collections;
import java.util.List;

import org.eclipse.jface.viewers.ISelection;
import org.eclipse.jface.viewers.ISelectionChangedListener;
import org.eclipse.jface.viewers.IStructuredContentProvider;
import org.eclipse.jface.viewers.SelectionChangedEvent;
import org.eclipse.jface.viewers.StructuredSelection;
import org.eclipse.jface.viewers.TableViewer;
import org.eclipse.jface.viewers.Viewer;
import org.eclipse.swt.SWT;
import org.eclipse.swt.custom.ScrolledComposite;
import org.eclipse.swt.events.SelectionAdapter;
import org.eclipse.swt.events.SelectionEvent;
import org.eclipse.swt.layout.FillLayout;
import org.eclipse.swt.layout.GridData;
import org.eclipse.swt.layout.GridLayout;
import org.eclipse.swt.widgets.Button;
import org.eclipse.swt.widgets.Composite;
import org.eclipse.swt.widgets.Event;
import org.eclipse.swt.widgets.FileDialog;
import org.eclipse.swt.widgets.Listener;
import org.eclipse.swt.widgets.Menu;
import org.eclipse.swt.widgets.MenuItem;
import org.eclipse.swt.widgets.TabFolder;
import org.eclipse.swt.widgets.TabItem;
import org.eclipse.ui.IMemento;
import org.eclipse.ui.WorkbenchException;
import org.eclipse.ui.XMLMemento;
import org.eclipse.ui.part.ViewPart;

/**
 * A view dedicated to generating status (error.
 */
public class StatusHandlingView extends ViewPart {

	/**
	 * @since 3.3
	 * 
	 */
	private final class RemoveSelectionAdapter extends SelectionAdapter {
		public void widgetSelected(SelectionEvent e) {
			removeSelectedFromExecutionList();
		}
	}

	static final class MoveDownSelectionAdapter extends SelectionAdapter {
		private TableViewer viewer;
		private List[] list;

		public MoveDownSelectionAdapter(TableViewer viewer, List[] list) {
			super();
			this.viewer = viewer;
			this.list = list;
		}

		public void widgetSelected(SelectionEvent e) {
			int index = viewer.getTable().getSelectionIndex();
			list[0].add(index + 1, list[0].remove(index));
			viewer.getTable().setSelection(index + 1);
			viewer.refresh();
		}
	}

	static final class MoveUpSelectionAdapter extends SelectionAdapter {
		private TableViewer viewer;
		private List[] list;

		public MoveUpSelectionAdapter(TableViewer viewer, List[] list) {
			super();
			this.viewer = viewer;
			this.list = list;
		}

		public void widgetSelected(SelectionEvent e) {
			int index = viewer.getTable().getSelectionIndex();
			list[0].add(index - 1, list[0].remove(index));
			viewer.getTable().setSelection(index - 1);
			viewer.refresh();
		}
	}

	// TODO: consider extension point
	private TestBedComponent components[] = new TestBedComponent[] {
			new JobsAndRunnablesComponent(), new ShowViewComponent(),
			new StatusHandlingComponent(), new SleepingComponent() };
	private TabFolder tabFolder;
	private TabItem firstTab;

	private TableViewer viewer;

	private final List executionList = Collections
			.synchronizedList(new ArrayList());
	private Button addButton;
	private Button executeButton;
	private Button removeButton;
	private Button exportButton;

	/*
	 * (non-Javadoc)
	 * 
	 * @see org.eclipse.ui.part.WorkbenchPart#createPartControl(org.eclipse.swt.widgets.Composite)
	 */
	public void createPartControl(Composite parent) {
		parent.setLayout(new FillLayout());

		ScrolledComposite sc = new ScrolledComposite(parent, SWT.H_SCROLL
				| SWT.V_SCROLL);
		sc.setLayout(new FillLayout());

		parent = new Composite(sc, SWT.NONE);
		parent.setLayout(new GridLayout(2, false));

		tabFolder = new TabFolder(parent, SWT.NONE);
		tabFolder.setLayoutData(new GridData(GridData.FILL_BOTH));

		firstTab = createTab(components[0]);
		for (int i = 1; i < components.length; i++) {
			createTab(components[i]);
		}

		viewer = new TableViewer(parent, SWT.BORDER | SWT.MULTI);
		GridData gridData = new GridData(GridData.FILL_BOTH);
		viewer.getTable().setLayoutData(gridData);
		viewer.setContentProvider(new IStructuredContentProvider() {

			public Object[] getElements(Object inputElement) {
				return executionList.toArray();
			}

			public void dispose() {
			}

			public void inputChanged(Viewer viewer, Object oldInput,
					Object newInput) {

			}

		});
		viewer.setInput(new Object[0]);
		getSite().setSelectionProvider(viewer);
		viewer.addPostSelectionChangedListener(new ISelectionChangedListener() {

			public void selectionChanged(SelectionChangedEvent event) {
				ISelection iSelection = event.getSelection();
				if (iSelection instanceof StructuredSelection) {
					StructuredSelection selection = (StructuredSelection) iSelection;
					TestBedRunnable runnable = (TestBedRunnable) selection
							.getFirstElement();
					for (int i = 0; i < components.length; i++) {
						if (components[i].accept(runnable)) {
							tabFolder.setSelection(i);
							break;
						}
					}
				}
			}

		});

		createPopMenu(viewer, new List[] { executionList },
				new RemoveSelectionAdapter());

		Composite tabButtons = new Composite(parent, SWT.NONE);
		tabButtons.setLayout(new GridLayout(2, true));
		createExecuteButton(tabButtons);

		addButton = new Button(tabButtons, SWT.NONE);
		addButton.setLayoutData(new GridData(GridData.FILL_HORIZONTAL));
		addButton.setText("Add to the execution list");

		Composite listButtons = new Composite(parent, SWT.NONE);
		listButtons.setLayout(new GridLayout(2, false));

		Button executeAll = new Button(listButtons, SWT.NONE);
		exportButton = new Button(listButtons, SWT.NONE);
		removeButton = new Button(listButtons, SWT.NONE);
		final Button importButton = new Button(listButtons, SWT.NONE);

		executeAll.setLayoutData(new GridData(GridData.FILL_HORIZONTAL));
		executeAll.setText("Execute All");
		executeAll.addSelectionListener(new SelectionAdapter() {

			public void widgetSelected(SelectionEvent e) {
				for (int i = 0; i < executionList.size(); i++) {
					TestBedRunnable runnable = (TestBedRunnable) executionList
							.get(i);
					runnable.run();
				}
			}

		});

		removeButton.setLayoutData(new GridData(GridData.FILL_HORIZONTAL));
		removeButton.setText("Remove");
		removeButton.setEnabled(false);
		removeButton.addSelectionListener(new SelectionAdapter() {

			public void widgetSelected(SelectionEvent e) {
				removeSelectedFromExecutionList();
			}

		});

		exportButton.setLayoutData(new GridData(GridData.FILL_HORIZONTAL));
		exportButton.setText("Export");
		exportButton.setEnabled(false);
		exportButton.addSelectionListener(new SelectionAdapter() {
			public void widgetSelected(SelectionEvent e) {
				storeState();
			}
		});

		importButton.setLayoutData(new GridData(GridData.FILL_HORIZONTAL));
		importButton.setText("Import");
		importButton.addSelectionListener(new SelectionAdapter() {
			public void widgetSelected(SelectionEvent e) {
				restoreState();
				if (executionList.size() == 0) {
					removeButton.setEnabled(false);
					exportButton.setEnabled(false);
				} else {
					removeButton.setEnabled(true);
					exportButton.setEnabled(true);
				}
				viewer.refresh();
			}
		});

		addButton.addSelectionListener(new SelectionAdapter() {

			public void widgetSelected(SelectionEvent e) {
				int index = tabFolder.getSelectionIndex();
				TestBedRunnable runnable = components[index]
						.getTestBedRunnable();
				executionList.add(runnable);
				viewer.refresh();
				removeButton.setEnabled(true);
				exportButton.setEnabled(true);
			}

		});

		sc.setMinSize(parent.computeSize(SWT.DEFAULT, SWT.DEFAULT));
		sc.setContent(parent);
		sc.setExpandHorizontal(true);
		sc.setExpandVertical(true);

	}

	public static void createPopMenu(final TableViewer viewer,
			final List[] list, final SelectionAdapter remove) {
		Menu menu = new Menu(viewer.getControl().getShell(), SWT.POP_UP);
		viewer.getTable().setMenu(menu);

		final MenuItem upMenuItem = new MenuItem(menu, SWT.PUSH);
		upMenuItem.setText("Move Up");
		upMenuItem
				.addSelectionListener(new MoveUpSelectionAdapter(viewer, list));

		final MenuItem downMenuItem = new MenuItem(menu, SWT.PUSH);
		downMenuItem.setText("Move Down");
		downMenuItem.addSelectionListener(new MoveDownSelectionAdapter(viewer,
				list));

		final MenuItem deleteMenuItem = new MenuItem(menu, SWT.PUSH);
		deleteMenuItem.setText("Delete");
		deleteMenuItem.addSelectionListener(remove);

		menu.addListener(SWT.Show, new Listener() {

			public void handleEvent(Event event) {
				if (viewer.getTable().getItems().length > 1
						&& viewer.getTable().getSelectionIndices().length == 1) {
					if (viewer.getTable().getSelectionIndex() == 0) {
						upMenuItem.setEnabled(false);
						downMenuItem.setEnabled(true);
					} else if (viewer.getTable().getSelectionIndex() == viewer
							.getTable().getItems().length - 1) {
						upMenuItem.setEnabled(true);
						downMenuItem.setEnabled(false);
					} else {
						upMenuItem.setEnabled(true);
						downMenuItem.setEnabled(true);
					}
				} else {
					upMenuItem.setEnabled(false);
					downMenuItem.setEnabled(false);
				}
				deleteMenuItem
						.setEnabled(viewer.getTable().getItems().length != 0);
			}

		});
	}

	private void createExecuteButton(Composite parent) {
		executeButton = new Button(parent, SWT.PUSH);
		executeButton.setLayoutData(new GridData(GridData.FILL_HORIZONTAL));
		executeButton.setText("Execute tab"); //$NON-NLS-1$
		executeButton
				.setToolTipText("Executes action from currently selected tab");
		executeButton.addSelectionListener(new SelectionAdapter() {

			public void widgetSelected(SelectionEvent e) {
				int index = tabFolder.getSelectionIndex();
				TestBedRunnable runnable = components[index]
						.getTestBedRunnable();
				runnable.run();
			}

		});
	}

	private TabItem createTab(TestBedComponent component) {
		Composite composite = component.createComposite(tabFolder);
		TabItem tab = new TabItem(tabFolder, SWT.NONE);
		tab.setControl(composite);
		tab.setText(component.getName());
		return tab;
	}

	public void setFocus() {
		tabFolder.setSelection(firstTab);
	}

	private void storeState() {
		try {
			FileDialog fd = new FileDialog(tabFolder.getShell(), SWT.SAVE);
			fd.setText("Save sequence");
			fd.setFilterExtensions(new String[] { "*.xml" });
			String path = fd.open();
			if (path == null)
				return;
			BufferedWriter bw = new BufferedWriter(new FileWriter(
					new File(path)));
			XMLMemento memento = XMLMemento.createWriteRoot("runnables");
			for (int i = 0; i < executionList.size(); i++) {
				TestBedRunnable runnable = (TestBedRunnable) executionList
						.get(i);
				runnable.save(memento);
			}
			memento.save(bw);
			bw.close();
		} catch (IOException e) {
			e.printStackTrace();
		}
	}

	private void restoreState() {
		try {
			FileDialog fd = new FileDialog(tabFolder.getShell(), SWT.OPEN);
			fd.setText("Load sequence");
			fd.setFilterExtensions(new String[] { "*.xml" });
			String path = fd.open();
			if (path == null)
				return;
			executionList.clear();
			BufferedReader br = new BufferedReader(new FileReader(
					new File(path)));
			XMLMemento memento = XMLMemento.createReadRoot(br);
			IMemento children[] = memento
					.getChildren(TestBedRunnable.TEST_BED_RUNNABLE);
			for (int i = 0; i < children.length; i++) {
				executionList.add(TestBedRunnable.restore(children[i]));
			}
		} catch (IOException e) {
			executionList.clear();
			viewer.refresh();
			e.printStackTrace();
		} catch (WorkbenchException e) {
			executionList.clear();
			viewer.refresh();
			e.printStackTrace();
		}
	}

	private void removeSelectedFromExecutionList() {
		int indices[] = viewer.getTable().getSelectionIndices();
		for (int i = indices.length; i > 0; i--) {
			executionList.remove(indices[i - 1]);
		}
		if (executionList.size() == 0) {
			removeButton.setEnabled(false);
			exportButton.setEnabled(false);
		}
		viewer.refresh();
	}
}
