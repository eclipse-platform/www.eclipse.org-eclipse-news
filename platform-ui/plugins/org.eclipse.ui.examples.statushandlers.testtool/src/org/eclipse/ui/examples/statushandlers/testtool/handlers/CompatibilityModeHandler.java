package org.eclipse.ui.examples.statushandlers.testtool.handlers;

import org.eclipse.jface.util.Policy;
import org.eclipse.ui.statushandlers.WorkbenchErrorHandler;
import org.eclipse.ui.statushandlers.WorkbenchStatusDialogManager;

/**
 * This handler uses the dialog in the compatibility mode.
 */
public class CompatibilityModeHandler extends WorkbenchErrorHandler {

	/* (non-Javadoc)
	 * @see org.eclipse.ui.statushandlers.WorkbenchErrorHandler#configureStatusDialog(org.eclipse.ui.statushandlers.WorkbenchStatusDialogManager)
	 */
	protected void configureStatusDialog(
			WorkbenchStatusDialogManager statusDialog) {
		super.configureStatusDialog(statusDialog);
		if (Policy.getErrorSupportProvider() == null) {
			statusDialog.enableDefaultSupportArea(true);
		}
		statusDialog.enableErrorDialogCompatibility();
	}


}
