package org.eclipse.ui.ide.examples.markers.markerSupport;

import org.eclipse.core.resources.IMarker;
import org.eclipse.ui.IMarkerResolution;
import org.eclipse.ui.IMarkerResolutionGenerator;

public class ExampleMarkerResolutionGenerator implements
		IMarkerResolutionGenerator {

	public IMarkerResolution[] getResolutions(IMarker marker) {
		IMarkerResolution resolution = new IMarkerResolution() {

			public String getLabel() {
				return "Example";
			}

			public void run(IMarker marker) {
				System.out.println("Fixed!");
				
			}

		};
		
		return new IMarkerResolution[]{resolution};
	}

}
