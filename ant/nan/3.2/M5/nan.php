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
	
	
	$pageTitle 		= "Platform Ant Project New and Noteworthy for 3.2M5";
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
		    <td align="left" valign="top"> <p align="right"><b>Export to Ant buildfile</b></td>
		    <td valign="top"> <p align="left">Exporting a Java project to an Ant buildfile has been improved. One of the notable changes is that the export no longer creates a build-user.xml file. 
		    Instead, user files are imported if marked with a the processing instruction: &lt;?eclipse.ant.import?&gt;. The &lt;import&gt; task is used instead of the dated &quot;entity includes&quot; reference;.
		    See <a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=122421">bug 122421</a> for full details of all the changes.</p></td>
		  </tr>
		  <tr> 
		    <td width="30%" align="left" valign="top"> <p align="right"><b>Ant launch configuration refactoring</b></td>
		    <td width="70%" valign="top"> <p align="left">Renaming buildfiles or renaming the projects containing buildfiles will correctly update the launch configurations associated with the buildfile. </p>
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
