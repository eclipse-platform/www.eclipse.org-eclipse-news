package org.eclipse.ui.ide.examples.markers.handlers;

import org.eclipse.core.commands.AbstractHandler;
import org.eclipse.core.commands.ExecutionEvent;
import org.eclipse.core.commands.ExecutionException;
import org.eclipse.core.commands.IHandler;
import org.eclipse.core.resources.IMarker;
import org.eclipse.core.resources.IResource;
import org.eclipse.core.resources.IWorkspaceRoot;
import org.eclipse.core.resources.ResourcesPlugin;
import org.eclipse.core.runtime.CoreException;
import org.eclipse.ui.statushandlers.StatusManager;

public class DeleteMarkersHandler extends AbstractHandler implements IHandler {

	public Object execute(ExecutionEvent event) throws ExecutionException {

		try {
			IWorkspaceRoot root = ResourcesPlugin.getWorkspace().getRoot();

			IMarker[] markers = root.findMarkers(
					GenerateMarkersHandler.EXAMPLE_MARKER, false,
					IResource.DEPTH_ZERO);

			for (int i = 0; i < markers.length; i++) {
				markers[i].delete();
			}
		} catch (CoreException e) {
			StatusManager.getManager().handle(e.getStatus());
		}

		return this;
	}

}
