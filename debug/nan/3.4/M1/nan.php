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
	
	
	$pageTitle 		= "Debug Project New and Noteworthy for 3.4M1";
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
		    <td align="left" valign="top"><b>Default console and file encoding</b></td>
		    <td valign="top"><p>The console encoding used when running or debugging a 
		        program automatically matches the encoding of the program being run or 
		        debugged. For example, your Java program's (or Java project's) encoding 
		        will be used by the console and a corresponding VM argument (for example, 
		        &quot;<code>-Dfile.encoding=UTF-8</code>&quot;) will be added to the command 
		        line. This makes it simpler to run and debug code displaying console output.</p></td>
		  </tr>
		  <tr> 
		    <td colspan="2"> <hr /> </td>
		  </tr>
		  <tr> 
		    <td align="left" valign="top"><b>Drag text to create watch expressions</b></td>
		    <td valign="top"><p>You can now drag text into the Expressions view to create 
		        expressions. </p></td>
		  </tr>
		  <tr> 
		    <td colspan="2"> <hr /> </td>
		  </tr>
		  <tr> 
		    <td align="left" valign="top"><b>Reorder watch expressions</b></td>
		    <td valign="top"><p>You can now reorder entries in the Expressions view with 
		        drag and drop.</p></td>
		  </tr>
		  <tr> 
		    <td colspan="2"> <hr /> </td>
		  </tr>
		  <tr> 
		    <td width="30%" align="left" valign="top"><b>Default watchpoint suspend settings</b></td>
		    <td width="70%" valign="top"><p>You can now control the suspend settings for 
		        newly created watchpoints. A watchpoint can suspend execution when a field 
		        is accessed, modified, or both. The new preference is available on the 
		        <strong>Java &gt; Debug</strong> preference page.</p>
		      <p><img src="watchpoint.png" alt="Watchpoint default suspend operation"/></p></td>
		  </tr>
		  <tr> 
		    <td colspan="2"> <hr /> </td>
		  </tr>
		  <tr> 
		    <td align="left" valign="top"><b>Search for installed JREs on Mac</b></td>
		    <td valign="top"><p>You can now search for all installed JREs on Mac. Pressing 
		        the &quot;Search...&quot; button on the <strong>Java &gt; Installed JREs</strong> 
		        preference page will add definitions for all VMs installed in the operating 
		        system's default location (<code>/System/Library/Frameworks/JavaVM.framework/Versions</code>).</p>
		      <p><img src="mac-jres.png" alt="Mac Installed JREs preference page"/></p></td>
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
