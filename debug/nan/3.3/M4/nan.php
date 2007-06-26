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
	# Date:			November 10, 2006
	#
	# Description: a new and noteworty entry for 3.3M4 debug 
	#
	#
	#****************************************************************************
	
	
	$pageTitle 		= "Debug Project New and Noteworthy for 3.3M4";
	$pageKeywords	= "debug, platform, debugging, debugger, breakpoints, launching, new, noteworthy";
	$pageAuthor		= "Debug Team";
	
	include("../../../_sideCommon.php");
	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<table border="0" width="80%" cellpadding="10" cellspacing="0">
		  <tr> 
		    <td colspan="2"> <hr></td>
		  </tr>
		  <tr> 
		    <td valign="top" align="left"><b>Automatically showing the console</b></td>
    		<td valign="top"><p>Toggle buttons have been added to the console toolbar 
		        controlling when the console is automatically displayed. The buttons provide 
		        quick access to the workspace preferences to show the console when output 
		        is written to standard out or standard error.</p>
      		<p><img src="showconsole.PNG" alt="Toggle buttons for console settings"/> </p>
      		</td>
		  </tr>
		  <tr> 
		    <td colspan="2"> <hr /> </td>
		  </tr>
		  <tr> 
		    <td width="30%" valign="top" align="left"><b>Pluggable detail panes</b></td>
		    <td width="70%" valign="top"><p>API has been added to the debug platform allowing 
		        custom detail panes to be contributed to the variables view. Clients may 
		        use any SWT control to render custom details for their variables. A context 
		        menu allows users to choose between available detail panes for each variable. 
		        See the new extension point <code>org.eclipse.debug.ui.detailPaneFactories</code>.</p></td>
		  </tr>
		  <tr> 
		    <td colspan="2"> <hr /> </td>
		  </tr>
		  <tr> 
		    <td width="30%" valign="top" align="left"><b>Access rules for execution environments</b></td>
		    <td width="70%" valign="top"><p>Access rules are now assigned to each execution 
		        environment based on its profile. For example, rules prevent access to 
		        <code>com.sun.*</code> packages that are not guaranteed to be present 
		        at runtime. The rules are only applied to projects that are bound to execution 
		        environments. Projects bound to a specific JRE still have access to all 
		        of its libraries.</p>
		      <p><img src="accessrules.PNG" alt="Access rules for an execution environment" /></p></td>
		  </tr>
		  <tr> 
		    <td colspan="2"> <hr /> </td>
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
