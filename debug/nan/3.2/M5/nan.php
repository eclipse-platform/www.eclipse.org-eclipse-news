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
	# Description: a new and noteworty entry for 3.2M5 debug 
	#
	#
	#****************************************************************************
	
	
	$pageTitle 		= "Debug Project New and Noteworthy for 3.2M5";
	$pageKeywords	= "debug, platform, debugging, debugger, breakpoints, launching, new, noteworthy";
	$pageAuthor		= "Debug Team";
	
	include("../../../_sideCommon.php");
	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<table border="0" width="80%" cellpadding="10" cellspacing="0">
		  <tr> 
		    <td colspan="2"> <hr> </td>
		  </tr>
		  <tr> 
		    <td align="left" valign="top"> <p align="right"><b>Launch configuration filters</b></td>
		    <td valign="top"> <p align="left">The launch dialog and launch history menu 
		        support a set of filters that can be configured on the <strong>Run/Debug 
		        &gt; Launching &gt; Launch Configurations</strong> preference page. You 
		        can filter configurations from closed, deleted, or unavailable projects. 
		        As well, you can filter specific kinds of configurations. The dialog and 
		        history menus optionally support the current workbench window working 
		        sets.</p>
		      <p align="left">For resource based filtering to work, you need to migrate 
		        your existing launch configurations. This can be done by pressing the 
		        <strong>Migrate</strong> button on the preference page.</p>
		      <p align="center"><img src="launch-prefs.png"></p>
		      <p align="left">The filters are also available for easy access in a new 
		        toolbar in the launch dialog.</p>
		      <p align="center"><img src="lcd-fitlers.PNG"></p></td>
		  </tr>
		  <tr> 
		    <td width="30%" align="left" valign="top"> <p align="right"><b>Java thread 
		        groups</b></td>
		    <td width="70%" valign="top"> <p align="left">You can now display thread groups 
		        in the Debug View by toggling Show Thread Groups in the view menu.</p>
		      <p align="center"><img src="thread-groups.png"></p></td>
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
