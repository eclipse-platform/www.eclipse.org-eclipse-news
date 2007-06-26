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
	# Description: a new and noteworty entry for 3.1M7 debug 
	#
	#
	#****************************************************************************
	
	
	$pageTitle 		= "Debug Project New and Noteworthy for 3.1M7";
	$pageKeywords	= "debug, platform, debugging, debugger, breakpoints, launching, new, noteworthy";
	$pageAuthor		= "Debug Team";
	
	include("../../../_sideCommon.php");
	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<table border="0" width="80%" cellpadding="10" cellspacing="0">
		  <tr> 
		    <td colspan="2"> 
		      <hr>
		    </td>
		  </tr>
		   <tr> 
		    <td width="30%" valign="top" align="left"> 
		      <p align="right"><b>system-path Variable</b>
		    </td>
		    <td width="70%" valign="top">
		      <p>A new dynamic variable "system-path" that allows you to define an external tool simply by specifying a 
		      tool name that is on the system path when configuring your external tool launch configuration.</p>
		    </td>
		  </tr>
		   <tr> 
		    <td width="30%" valign="top" align="left"> 
		      <p align="right"><b>Reconcile Control in the Ant Editor</b>
		    </td>
		    <td width="70%" valign="top">
		      <p>For certain buildfiles, such as those with numerous "large" imports, the Ant editor performance while typing is sub-optimal.
		         You can now turn off the automatic background reconcile for the Ant editor to achieve better typing performance.
		         When you save or toggle on the automatic reconcile, the Ant editor outline and internal data structures will be synchronized.</p>
		      <p><img src="reconcile.png"></p>
		    </td>
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
