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
	# Description: a new and noteworty entry for 3.3M3 debug 
	#
	#
	#****************************************************************************
	
	
	$pageTitle 		= "Debug Project New and Noteworthy for 3.3M3";
	$pageKeywords	= "debug, platform, debugging, debugger, breakpoints, launching, new, noteworthy";
	$pageAuthor		= "Debug Team";
	
	include("../../../_sideCommon.php");
	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<table border="0" width="80%" cellpadding="10" cellspacing="0">
		  <tr> 
		    <td colspan="2"> <hr /> 
		      <h2>Platform Debug</h2>
		      <hr /></td>
		  </tr>
		  <tr> 
		    <td width="30%" valign="top" align="left"><b>Mixed mode launch APIs and more</b></td>
		    <td width="70%" valign="top"><p>The debug platform's launch API now supports 
		        mixed mode launching. For example, an ISV could contribute a launcher 
		        to profile and debug an application at the same time. See enhancements 
		        to the <code>launchDelegates </code>and <code>launchConfgurationTypes 
		        </code>extension points.</p>
		      <p>ISVs can also contribute one or more tabs to existing tab groups in the 
		        launch dialog to extend existing launch types with new function. For example, 
		        a profiling tool could provide a tab to configure profile options for 
		        Java applications. See the new extension point <code>launchConfigurationTabs</code>.</p>
		      <p>The platform also allows more than one toolset to exist for launching 
		        the same kind of application. For example, two profilers could exist for 
		        Java applications and the user would be prompted to choose which profiler 
		        to use at runtime.</p>
		      </td>
		  </tr>
		  <tr> 
		    <td colspan="2"> <hr /> </td>
		  </tr>
		  <tr> 
		    <td width="30%" valign="top" align="left"><b>Debug context API</b></td>
		    <td width="70%" valign="top">The debug platform has new API to access the 
		      active debug context. A debug context represents the active state of a program 
		      being debugged and drives the enabled state of debug actions (step, terminate, 
		      etc.), as well as source lookup, visible variables, and watch expression 
		      values. A set of classes and interfaces have been added to the new package 
		      <code>org.eclipse.debug.ui.contexts </code>allowing clients to listen to 
		      and drive the active debug context.</td>
		  </tr>
		  <tr> 
		    <td colspan="2"> <hr /> </td>
		  </tr>
		  <tr> 
		    <td width="30%" valign="top" align="left"><b>Debug command API</b></td>
		    <td width="70%" valign="top">Debug commands represent common operations implemented 
		      by debuggers - for example, step over, suspend, resume, and terminate. The 
		      debug platform has added API allowing debuggers to provide custom implementations 
		      of the operations by implementing the debug command interfaces. See the 
		      new package <code>org.eclipse.debug.ui.commands</code>.</td>
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
