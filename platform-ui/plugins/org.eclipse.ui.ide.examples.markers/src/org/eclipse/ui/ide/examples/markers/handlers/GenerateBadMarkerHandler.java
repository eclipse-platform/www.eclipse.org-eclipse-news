package org.eclipse.ui.ide.examples.markers.handlers;

import java.util.HashMap;
import java.util.Map;

import org.eclipse.core.commands.AbstractHandler;
import org.eclipse.core.commands.ExecutionEvent;
import org.eclipse.core.commands.ExecutionException;
import org.eclipse.core.commands.IHandler;
import org.eclipse.core.resources.IMarker;
import org.eclipse.core.resources.IWorkspaceRoot;
import org.eclipse.core.resources.ResourcesPlugin;
import org.eclipse.core.runtime.CoreException;
import org.eclipse.core.runtime.IProgressMonitor;
import org.eclipse.core.runtime.IStatus;
import org.eclipse.core.runtime.Status;
import org.eclipse.core.runtime.jobs.Job;
import org.eclipse.ui.texteditor.MarkerUtilities;
import org.eclipse.ui.views.markers.MarkerViewUtil;

public class GenerateBadMarkerHandler extends AbstractHandler implements
		IHandler {
	static final String BAD_MARKER = "org.eclipse.ui.ide.examples.markers.badMarker";

	public Object execute(ExecutionEvent event) throws ExecutionException {

		Job addJob = new Job("Add Bad Markers") {

			/*
			 * (non-Javadoc)
			 * 
			 * @see org.eclipse.core.runtime.jobs.Job#run(org.eclipse.core.runtime.IProgressMonitor)
			 */
			protected IStatus run(IProgressMonitor monitor) {

				try {
					IWorkspaceRoot root = ResourcesPlugin.getWorkspace()
							.getRoot();
					Map<String, Object> attribs = new HashMap<String, Object>();
					for (int i = 0; i < 1000; i++) {

						if (i / 2 == 0) {
							attribs.put(MarkerViewUtil.NAME_ATTRIBUTE, null);
							attribs.put(MarkerViewUtil.PATH_ATTRIBUTE, null);
						}

						attribs.put(IMarker.SEVERITY, null);
						attribs.put(IMarker.SOURCE_ID, null);
						attribs.put(IMarker.MESSAGE, null);
						attribs.put(IMarker.LOCATION, null);
						attribs.put("testAttribute", null);
						MarkerUtilities.createMarker(root, attribs, BAD_MARKER);
					}
				} catch (CoreException e) {
					return e.getStatus();
				}
				return Status.OK_STATUS;

			}

		};

		addJob.schedule();
		return this;
	}

}
