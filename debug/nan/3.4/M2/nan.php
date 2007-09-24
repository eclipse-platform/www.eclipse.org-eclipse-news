<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# Copyright (c) 2007 IBM Corporation and others.
 	# All rights reserved. This program and the accompanying materials
 	# are made available under the terms of the Eclipse Public License v1.0
 	# which accompanies this distribution, and is available at
 	# http://www.eclipse.org/legal/epl-v10.html
 	# Contributors:
	#     IBM Corporation - initial implementation
	#
	# Author: 		Debug Team
	# Date:			August 7, 2007
	#
	# Description: a new and noteworty entry for 3.4M1 debug 
	#
	#
	#****************************************************************************
	
	
	$pageTitle 		= "Debug Project New and Noteworthy for 3.4M2";
	$pageKeywords	= "debug, platform, debugging, debugger, breakpoints, launching, new, noteworthy";
	$pageAuthor		= "Debug Team";
	
	include("../../../_sideCommon.php");
	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<table border="0" width="80%" cellpadding="10" cellspacing="0">
		  <tr> 
		    <td valign="top" align="left"><a name="Edit Launch History" id="Edit Launch History"></a><b>Remove 
		      items from launch history</b></td>
		    <td valign="top"><p>You can now remove items from the launch history menus. 
		        Use <strong>Control-Shift-Click</strong> to remove an item from a launch 
		        history (that is, select the menu item while pressing <strong>Control-Shift</strong>). 
		        The launch will be removed from your history but the configuration is 
		        not deleted. You will be prompted to confirm that the launch should be 
		        removed from the history. A preference controls prompting on subsequent 
		        removals.</p>
		      <p><img src="images/remove-prompt.png" alt="Confirmation dialog to remove a launch from the history." /></p></td>
		  </tr>
		  <tr> 
		    <td colspan="2"> <hr /> </td>
		  </tr>
		  <tr> 
		    <td valign="top" align="left"><a name="Edit Launch Configuration" id="Edit Launch Configuration"></a><b>Edit 
		      a configuration from a launch shortcut</b></td>
		    <td valign="top">You can now open the launch dialog by control clicking a 
		      launch shortcut. For example, when you press the <strong>Control</strong> 
		      key while selecting <strong>Run As &gt; Java Application</strong> from the 
		      context menu in a Java editor, the launch dialog will open to most recently 
		      executed launch configuration associated with that file. If no launch configuration 
		      exists, the launch dialog will open to the associated type of launch configuration.</td>
		  </tr>
		  <tr> 
		    <td width="30%" valign="top" align="left"><a name="Socket Listening Connector" id="Socket Listening Connector"></a><b>Wait 
		      for a remote debug connection</b></td>
		    <td width="70%" valign="top"><p>A socket listening connector has been added 
		        to the Remote Java Application launch type. This allows you to start the 
		        Java debugger listening for connection on a specific socket. The program 
		        being debugged can then be started with command line options to connect 
		        back to the debugger. Select &quot;Standard (Socket Listen)&quot; in the 
		        connection type drop down.</p>
		      <p><img src="images/listening.png" alt="Connect tab using a socket listening connector." /></p></td>
		  </tr>
		</table>
	</div>
	<div id="rightcolumn">
		$commonside
	</div>
</div>


EOHTML;

	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
