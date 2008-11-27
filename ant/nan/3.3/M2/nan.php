<?php  
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	
	$App 	= new App();	
	$Nav	= new Nav();	
	$Menu 	= new Menu();		
	include($App->getProjectCommon());

	#*****************************************************************************
	#
	# Copyright (c) 2008 IBM Corporation and others.
 	# All rights reserved. This program and the accompanying materials
 	# are made available under the terms of the Eclipse Public License v1.0
 	# which accompanies this distribution, and is available at
 	# http://www.eclipse.org/legal/epl-v10.html
 	# Contributors:
	#     IBM Corporation - initial implementation
	#
	# Author: 		Ant Team
	# Date:			
	#
	# Description: a new and note-worthy entry for debug 
	#
	#
	#****************************************************************************
	
	
	$pageTitle 		= "Platform Ant Project New and Noteworthy for 3.3M2";
	$pageKeywords	= "ant, script,  platform, debugging, debugger, breakpoints, launching, new, noteworthy";
	$pageAuthor		= "Ant Team";
	
	#adjust the level of file nesting, our default is for a milestone entry inside a milestone for a given version
	
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
		    <td width="30%" valign="top" align="left"><b>Improved support for the &lt;input&gt; task</b></td>
		    <td width="70%" valign="top">The valid input arguments (specified via the <code>validargs</code> attribute of the input task) are now presented to the user in a combo for 
		    easy selection in the default SWT based input handler.
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
