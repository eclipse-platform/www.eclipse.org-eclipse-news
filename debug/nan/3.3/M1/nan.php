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
	# Description: a new and noteworty entry for 3.3M1 debug 
	#
	#
	#****************************************************************************
	
	
	$pageTitle 		= "Debug Project New and Noteworthy for 3.3M1";
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
		    <td valign="top" align="left"> <p align="right"><b>Browse all references</b></td>
		    <td valign="top"> You can browse all references to an object in the variables 
		      view. This feature requires you to debug your application using a J2SE6.0 
		      virtual machine. Select any object in the variables view, and choose &quot;<strong>All 
		      References...</strong>&quot; from the context menu. A popup displays all 
		      objects referring to the selected object. You can expand each node in the 
		      tree to follow references to each object. You can inspect any object in 
		      the reference tree by selecting it and pressing <strong>CTRL-Shift-I</strong>. 
		      This opens an inspect popup displaying the object's fields. 
		      <p><img src="all-refs.png"></p></td>
		  </tr>
		  <tr> 
		    <td colspan="2"> <hr></td>
		  </tr>
		  <tr> 
		    <td valign="top" align="left"> <p align="right"><b>No more prompting</b></td>
		    <td valign="top"> A user preference now controls whether you are prompted 
		      to confirm the deletion of all breakpoints in the workspace. The new preference 
		      is available on the <strong>Run/Debug</strong> preference page. As well, 
		      a check box in the confirmation dialog allows you to set the preference. 
		      <p><img src="breakpoint-prompt.png"></p></td>
		  </tr>
		  <tr> 
		    <td colspan="2"> <hr></td>
		  </tr>
		  <tr> 
		    <td valign="top" align="left"> <p align="right"><b>Auto format stack traces</b></td>
		    <td valign="top"> <p>Stack traces can be formatted automatically as you paste 
		        them into the Java stack trace console. An &quot;<strong>Auto Format</strong>&quot; 
		        toggle is available on the console toolbar.</p>
		      <p><img src="auto-format.png"></p></td>
		  </tr>
		  <tr> 
		    <td colspan="2"> <hr></td>
		  </tr>
		  <tr> 
		    <td width="30%" valign="top" align="left"> <p align="right"><b>Double-click 
		        and Ctrl-Shift-B for all kinds of breakpoints</b></td>
		    <td width="70%" valign="top"> <p>Double-clicking in the vertical ruler, or 
		        invoking Toggle Breakpoint (<strong>Ctrl-Shift-B</strong>) now creates 
		        an appropriate kind of breakpoint based on the cursor location - line 
		        breakpoint, watchpoint, method breakpoint, or class load breakpoint. To 
		        create a class load breakpoint, double click on the class declaration 
		        line.</p>
		      <p><img src="classload-bp.png"></p>
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
