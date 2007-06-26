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
	# Description: a new and noteworty entry for 3.1M4 debug 
	#
	#
	#****************************************************************************
	
	
	$pageTitle 		= "Debug Project New and Noteworthy for 3.1M4";
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
		      <p align="right"><b>User defined logical structures</b> 
		    </td>
		    <td width="70%" valign="top"> 
		      <p>The Java debugger now allows users to define the structure shown in the 
		        variables view for different types of objects. For example, collections 
		        are displayed as arrays rather than revealing an internal imlpementation 
		        of fields. You can define expressions on the <b>Logical Structures </b>preference 
		        page to generate the values displayed in the variables view for specific 
		        classes and interfaces. You can provide one expression for an object (for 
		        example, <font face="Courier New, Courier, mono">this.toArray()</font>), 
		        or you can define a list of {name, value} pairs. 
		      <p><img src="java_logical_structures.gif" title="Java logical structure dialog" alt="Dialog to edit java logical structure"> 
		    </td>
		  </tr>
		  <tr> 
		    <td colspan="2"> 
		      <hr>
		    </td>
		  </tr>
		  <tr> 
		    <td width="30%" valign="top" align="left"> 
		      <p align="right"><b>Enhanced variable value modification</b>
		    </td>
		    <td width="70%" valign="top"> 
		      <p>The Java debugger now allows changing the value of primitive and non-primitive 
		        variables. A variable's value can be changed by entering an expression 
		        into the <b>Change Value</b> dialog or into the details area of the variables 
		        view and using the <b>Save </b>action. 
		      <p><img src="change_object_value.gif" title="Change object value dialog" alt="Dialog to edit an expression to replace the current value of a variable"> 
		    </td>
		  </tr>
		  <tr> 
		    <td colspan="2"> 
		      <hr>
		    </td>
		  </tr>
		  <tr> 
		    <td width="30%" valign="top" align="left"> 
		      <p align="right"><b>Multiplexing console output</b> 
		    </td>
		    <td width="70%" valign="top"> 
		      <p>A program's output can be written to the console, a file, both, or neither 
		        via settings on the <b>Common</b> tab. 
		    </td>
		  </tr>
		  <tr> 
		    <td colspan="2"> 
		      <hr>
		    </td>
		  </tr>
		  <tr> 
		    <td width="30%" valign="top" align="left"> 
		      <p align="right"><b>Multiple console views</b> 
		    </td>
		    <td width="70%" valign="top"> 
		      <p>More than one console view can be opened to display multiple consoles 
		        at once. Use the <b>New Console View</b> action from the <b>Open Console</b> 
		        drop-down menu in the console view to open another console. 
		    </td>
		  </tr>
		  <tr> 
		    <td colspan="2"> 
		      <hr>
		    </td>
		  </tr>
		  <tr> 
		    <td width="30%" valign="top" align="left"> 
		      <p align="right"><b>Key-bindings for running/debugging</b> 
		    </td>
		    <td width="70%" valign="top">Key-bindings have been defined for launching 
		      Java applications, applets, JUnit tests, Ant builds, and the runtime workbench. 
		      The debug shortcuts are available via <b>Alt-Shift-D</b>, and the run shortcuts 
		      are available via <b>Alt-Shift-X</b>.</td>
		  </tr>
		  <tr> 
		    <td colspan="2"> 
		      <hr>
		    </td>
		  </tr>
		  <tr> 
		    <td width="30%" valign="top" align="left"> 
		      <p align="right"><b>Formatting stack traces</b>
		    </td>
		    <td width="70%" valign="top">The Java stack trace console now supports formatting 
		      of pasted stack traces via the standard <b>Format</b> key-binding.</td>
		  </tr>
		  <tr> 
		    <td colspan="2"> 
		      <hr>
		    </td>
		  </tr>
		   <tr> 
		    <td width="30%" valign="top" align="left"> 
		      <p align="right"><b>Ant Debugger</b>
		    </td>
		    <td width="70%" valign="top">The execution of Ant buildfiles can now be debugged. 
		      Traditional debug support such as stepping and breakpoints as well as "run 
		      to line" support is included. Debugging is supported when building in the 
		      same JRE as Eclipse and when building in a separate JRE.
		      <p><img src="ant_debugger.gif" title="Debugging ant" alt="Ant build file launched in debug mode">
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
