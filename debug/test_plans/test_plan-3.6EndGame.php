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
	# Copyright (c) 2010 IBM Corporation and others.
 	# All rights reserved. This program and the accompanying materials
 	# are made available under the terms of the Eclipse Public License v1.0
 	# which accompanies this distribution, and is available at
 	# http://www.eclipse.org/legal/epl-v10.html
 	# Contributors:
	#     IBM Corporation - initial implementation
	#
	# Author: 		Debug Team
	# Date:			April 26, 2010
	#
	# Description: This page outlines the debug project 3.6M3 test matrix
	#
	#
	#****************************************************************************
	
	
	$pageTitle 		= "Debug Project 3.6M7 Test Matrix";
	$pageKeywords	= "debug, platform, debugging, debugger, breakpoints, launching, test, testing, matrix, plan, 3.6M7";
	$pageAuthor		= "Debug Team";
	
	include("../_sideCommon.php");
	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<div class="homeitem3col">
			<h2><b>Testers</b></h2>
			<p>Committers: Darin Wright, Michael Rennie, Curtis Windatt, Ankur Sharma</p>
			<p>Community:Anyone who wants to help</p>
		</div>
		<div class="homeitem3col">
			<a name="top"></a>
			<h2><b>Test Grid</b></h2>
			<div align="center">
			<table width="90%" border="1">
			  <tr> 
			    <td width="30%" align="center"><b>Testing Scenario</b></td>
			    <td width="12%" align="center"><b>Darin Wright</b></td>
			    <td width="12%" align="center"><b>Michael Rennie</b></td>
			    <td width="12%" align="center"><b>Curtis Windatt</b></td>
			    <td width="12%" align="center"><b>Ankur Sharma</b></td>
			  </tr>
			  <tr> 
			    <td><a href="http://www.eclipse.org/eclipse/debug/test_plans/test_plan-3.6M7.php#Java6">Java 6.0 Features</a></td>
			    <td> <div align="center">Tues, May 4</div></td>
				<td> <div align="center">&nbsp;</div></td>
				<td><div align="center">&nbsp;</div></td>
				<td> <div align="center">&nbsp;</div></td>
			  </tr>
			  <tr> 
			    <td><a href="http://www.eclipse.org/eclipse/debug/test_plans/test_plan-3.6M7.php#Evaluations">Evaluations</a></td>
			    <td> <div align="center">Tues, May 4</div></td>
			    <td> <div align="center">&nbsp;</div></td>
				<td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			  </tr>
			  <tr> 
			    <td><a href="http://www.eclipse.org/eclipse/debug/test_plans/test_plan-3.6M7.php#ContextLaunching">Context Launching</a></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">Tues, May 4</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			  </tr>
			  <tr> 
			    <td><a href="http://www.eclipse.org/eclipse/debug/test_plans/test_plan-3.6M7.php#Launch">Launch Options</a></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">Tues, May 4</div></td>
			  </tr>
			  <tr> 
			    <td><a href="http://www.eclipse.org/eclipse/debug/test_plans/test_plan-3.6M7.php#Launch_Modes">Launch Modes</a></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td><div align="center">Tues, May 4</div></td>
				<td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>				
			  </tr>
			  <tr> 
			    <td><a href="http://www.eclipse.org/eclipse/debug/test_plans/test_plan-3.6M7.php#LaunchConfigurations">Launch Configurations</a></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td><div align="center">Tues, May 4</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			  </tr>
			  <tr> 
			    <td><a href="http://www.eclipse.org/eclipse/debug/test_plans/test_plan-3.6M7.php#Debug">View Management</a></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">Tues, May 4</div></td>
				<td> <div align="center">&nbsp;</div></td>
				<td> <div align="center">&nbsp;</div></td>
			  </tr>
			  <tr> 
			    <td><a href="http://www.eclipse.org/eclipse/debug/test_plans/test_plan-3.6M7.php#Breakpoints">Breakpoints</a></td>
			    <td><div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">Tues, May 4</div></td>
			  </tr>
			  <tr> 
			    <td><a href="http://www.eclipse.org/eclipse/debug/test_plans/test_plan-3.6M7.php#Step">Stepping Tests</a></td>
				<td> <div align="center">&nbsp;</div></td>
				<td><div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">Wed, May 5</div></td>
			  </tr>
			  <tr> 
			    <td><a href="http://www.eclipse.org/eclipse/debug/test_plans/test_plan-3.6M7.php#Logical">Logical Structures</a></td>
				<td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">Wed, May 5</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			  </tr>
			  <tr> 
			    <td><a href="http://www.eclipse.org/eclipse/debug/test_plans/test_plan-3.6M7.php#Watch">Watch Items</a></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">Wed, May 5</div></td>
				<td> <div align="center">&nbsp;</div></td>
				<td> <div align="center">&nbsp;</div></td>
			  </tr>
			  <tr> 
			    <td><a href="http://www.eclipse.org/eclipse/debug/test_plans/test_plan-3.6M7.php#Context">Context Menu Launching</a></td>
			    <td><div align="center">Wed, May 5</div></td>
				<td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			   	<td> <div align="center">&nbsp;</div></td>
			  </tr>
			  <tr> 
			    <td><a href="http://www.eclipse.org/eclipse/debug/test_plans/test_plan-3.6M7.php#Classpaths">Runtime Classpath</a></td>
				<td> <div align="center">Wed, May 5</div></td>
				<td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			  </tr>
			  <tr> 
			    <td><a href="http://www.eclipse.org/eclipse/debug/test_plans/test_plan-3.6M7.php#Source">Source Lookup</a></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">Wed, May 5</div></td>
			    <td><div align="center">&nbsp;</div></td>
				<td> <div align="center">&nbsp;</div></td>
			  </tr>
			  <tr> 
			    <td><a href="http://www.eclipse.org/eclipse/debug/test_plans/test_plan-3.6M7.php#Monitors">Monitor Information</a></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">Wed, May 5</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			  </tr>
			  <tr> 
			    <td><a href="http://www.eclipse.org/eclipse/debug/test_plans/test_plan-3.6M7.php#Hot">HCR</a></td>
			    <td><div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">Wed, May 5</div></td>
			  </tr>
			  <tr> 
			    <td><a href="http://www.eclipse.org/eclipse/debug/test_plans/test_plan-3.6M7.php#JREs">Installed JREs</a></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">Thur, May 6</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			  </tr>
			  <tr> 
			    <td><a href="http://www.eclipse.org/eclipse/debug/test_plans/test_plan-3.6M7.php#EEs">Execution Environments</a></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">Thur, May 6</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			  </tr>
			  <tr> 
			    <td><a href="http://www.eclipse.org/eclipse/debug/test_plans/test_plan-3.6M7.php#String">String Variables</a></td>
			    <td> <div align="center">Thur, May 6</div></td>
			    <td> <div align="center">&nbsp;</div></td>
				<td> <div align="center">&nbsp;</div></td>
				<td> <div align="center">&nbsp;</div></td>
			  </tr>
			  <tr> 
			    <td><a href="http://www.eclipse.org/eclipse/debug/test_plans/test_plan-3.6M7.php#Console">Console</a></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
				<td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">Thur, May 6</div></td>
			  </tr>
			  <tr> 
			    <td><a href="http://www.eclipse.org/eclipse/debug/test_plans/test_plan-3.6M7.php#Variables">Variables</a></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">Thur, May 6</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			  </tr>
			  <tr> 
			    <td><a href="http://www.eclipse.org/eclipse/debug/test_plans/test_plan-3.6M7.php#Refactoring">Refactoring</a></td>
			    <td> <div align="center">&nbsp;</div></td>
				<td> <div align="center">Thur, May 6</div></td>
				<td><div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			  </tr>
			  <tr> 
			    <td><a href="http://www.eclipse.org/eclipse/debug/test_plans/test_plan-3.6M7.php#Applets">Applets</a></td>
				<td> <div align="center">Thur, May 6</div></td>
				<td> <div align="center">&nbsp;</div></td>
				<td> <div align="center">&nbsp;</div></td>
				<td><div align="center">&nbsp;</div></td>
			  </tr>
			  <tr> 
			    <td><a href="http://www.eclipse.org/eclipse/debug/test_plans/test_plan-3.6M7.php#Remote">Remote Debugging</a></td>
			    <td> <div align="center">&nbsp;</div></td>
				<td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">Thur, May 6</div></td>
			  </tr>
			  <tr> 
			    <td><a href="http://www.eclipse.org/eclipse/debug/test_plans/test_plan-3.6M7.php#JSP">JSP Example</a></td>
			    <td> <div align="center">Fri, May 7</div></td>
			    <td><div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			  </tr>
			  <tr> 
			    <td><a href="http://www.eclipse.org/eclipse/debug/test_plans/test_plan-3.6M7.php#STRESS">Stress Tests</a></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">Fri, May 7</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			  </tr>
			  <tr> 
			    <td><a href="http://wiki.eclipse.org/PDE/Testing/Scenarios#End-to-End_Scenarios">End-to-End Scenarios</a></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">Fri, May 7</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			  </tr>
			  <tr> 
			    <td><a href="http://wiki.eclipse.org/PDE/Testing/Scenarios#Import">Import</a></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">Fri, May 7</div></td>
			  </tr>
			  <tr> 
			    <td><a href="http://wiki.eclipse.org/PDE/Testing/Scenarios#Export">Export</a></td>
			    <td> <div align="center">Fri, May 7</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			  </tr>
			  <tr> 
			    <td><a href="http://wiki.eclipse.org/PDE/Testing/Scenarios#Launching">Launching</a></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">Fri, May 7</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			  </tr>
			  <tr> 
			    <td><a href="http://wiki.eclipse.org/PDE/Testing/Scenarios#Target_Management">Target Management</a></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">Fri, May 7</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			  </tr>
			  <tr> 
			    <td><a href="http://wiki.eclipse.org/PDE/Testing/Scenarios#Search">Search</a></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">Fri, May 7</div></td>
			  </tr>
			  <tr> 
			    <td><a href="http://wiki.eclipse.org/PDE/Testing/Scenarios#Refactoring">Refactoring</a></td>
			    <td> <div align="center">Mon, May 10</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			  </tr>
			  <tr> 
			    <td><a href="http://wiki.eclipse.org/PDE/Testing/Scenarios#Cool_Wizards">Cool Wizards</a></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">Mon, May 10</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			  </tr>
			  <tr> 
			    <td><a href="http://wiki.eclipse.org/PDE/Testing/Scenarios#OSGi_Applications">OSGi Applications</a></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">Mon, May 10</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			  </tr>
			  <tr> 
			    <td><a href="http://wiki.eclipse.org/PDE/Testing/Scenarios#User_Assistance">User Assistance</a></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">Mon, May 10</div></td>
			  </tr>
			  <tr> 
			    <td><a href="http://wiki.eclipse.org/PDE/Testing/Scenarios#Project_Creation">Project Creation</a></td>
			    <td> <div align="center">Mon, May 10</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			  </tr>
			  <tr> 
			    <td><a href="http://wiki.eclipse.org/PDE/Testing/Scenarios#Editors">Editors</a></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">Mon, May 10</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			  </tr>
			  <tr> 
			    <td><a href="http://wiki.eclipse.org/PDE/Testing/Scenarios#Log_View">Log View</a></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">Mon, May 10</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			  </tr>
			  <tr> 
			    <td><a href="http://wiki.eclipse.org/PDE/Testing/Scenarios#Add_to_Java_Search">Add to Java Search</a></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">Mon, May 10</div></td>
			  </tr>
			  <tr> 
			    <td><a href="http://wiki.eclipse.org/PDE/Testing/Scenarios#P2_Integration">P2 Integration</a></td>
			    <td> <div align="center">Tues, May 11</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			  </tr>
			  <tr> 
			    <td><a href="http://www.eclipse.org/pde/pde-api-tools/test_plans/test_plan-3.6M5.php#APISETUP">API Setup</a></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">Tues, May 11</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			  </tr>
			  <tr> 
			    <td><a href="http://www.eclipse.org/pde/pde-api-tools/test_plans/test_plan-3.6M5.php#APIBASELINES">API Baselines</a></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">Tues, May 11</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			  </tr>
			  <tr> 
			    <td><a href="http://www.eclipse.org/pde/pde-api-tools/test_plans/test_plan-3.6M5.php#BUILDING">Building</a></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">Tues, May 11</div></td>
			  </tr>
			  <tr> 
			    <td><a href="http://www.eclipse.org/pde/pde-api-tools/test_plans/test_plan-3.6M5.php#TAGSCANNING">Unsupported Javadoc Tags</a></td>
			    <td> <div align="center">Tues, May 11</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			  </tr>
			  <tr> 
			    <td><a href="http://www.eclipse.org/pde/pde-api-tools/test_plans/test_plan-3.6M5.php#QUICKFIXES">Quick Fixes</a></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">Tues, May 11</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			  </tr>
			  <tr> 
			    <td><a href="http://www.eclipse.org/pde/pde-api-tools/test_plans/test_plan-3.6M5.php#FILTERS">Filters</a></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">Tues, May 11</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			  </tr>
			  <tr> 
			    <td><a href="http://www.eclipse.org/pde/pde-api-tools/test_plans/test_plan-3.6M5.php#PREFERENCES">Preferences</a></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">Tues, May 11</div></td>
			  </tr>
			  <tr> 
			    <td><a href="http://www.eclipse.org/pde/pde-api-tools/test_plans/test_plan-3.6M5.php#SYSTEMLIBRARY">Invalid System Library References</a></td>
			    <td> <div align="center">Tues, May 11</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			  </tr>
			  <tr> 
			    <td><a href="http://www.eclipse.org/pde/pde-api-tools/test_plans/test_plan-3.6M5.php#WORKSPACE">Target Platform Stability</a></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">Tues, May 11</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			  </tr>
			</table>
			</div>
		</div>
	</div>
	<div id="rightcolumn">
		$commonside
	</div>
</div>


EOHTML;

	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>