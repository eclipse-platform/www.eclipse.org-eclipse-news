package org.eclipse.ui.ide.examples.markers.markerSupport;

import org.eclipse.core.resources.IMarker;
import org.eclipse.ui.views.markers.MarkerField;
import org.eclipse.ui.views.markers.MarkerItem;

public class SourceIDMarkerField extends MarkerField {

	public SourceIDMarkerField() {
		super();
	}

	/* (non-Javadoc)
	 * @see org.eclipse.ui.internal.provisional.views.markers.api.MarkerField#getValue(org.eclipse.ui.internal.provisional.views.markers.api.MarkerItem)
	 */
	public String getValue(MarkerItem item) {
		IMarker marker = item.getMarker();
		if(marker == null)
			return "";
		return marker.getAttribute(IMarker.SOURCE_ID,  "");
	}

}
