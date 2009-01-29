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
	# Copyright (c) 2009 IBM Corporation and others.
 	# All rights reserved. This program and the accompanying materials
 	# are made available under the terms of the Eclipse Public License v1.0
 	# which accompanies this distribution, and is available at
 	# http://www.eclipse.org/legal/epl-v10.html
 	# Contributors:
	#     IBM Corporation - initial implementation
	#
	# Author: 		Debug Team
	# Date:			
	#
	# Description: This page outlines the debug project X test matrix
	#
	#
	#****************************************************************************
	
	
	$pageTitle 		= "Debug Project 3.5M5 Test Matrix";
	$pageKeywords	= "debug, platform, debugging, debugger, breakpoints, launching, test, testing, matrix, plan, 3.x, 3.5, 3.5M5, M5";
	$pageAuthor		= "Debug Team";
	
	include("../_sideCommon.php");
	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<div class="homeitem3col">
			<h2><b>Testers</b></h2>
			<p>Committers: Darin Wright, Michael Rennie, Curtis Windatt, Pawel Piech, Samantha Chan</p>
			<p>Community:Anyone who wants to help</p>
		</div>
		<div class="homeitem3col">
			<h2><b>JRE Grid</b></h2>
			<p>The following JREs should be considered when testing. Committers have been 
			  assigned a JRE and platform to test on. The community can chose any JRE and 
			  platform. </p>
			  <div align="center">
				<table width="100%" border="1">
				  <tr> 
				    <td width="11%">&nbsp;</td>
				    <td width="13%"><b>JDK 1.4.2</b></td>
				    <td width="13%"><b>IBM 1.4.2</b></td>
				    <td width="13%"><b>JDK 1.5</b></td>
					<td width="13%"><b>IBM 1.5</b></td>
				    <td width="13%"><b>JDK 1.6</b></td>
				    <td width="13%"><b>IBM 1.6</b></td>
				  </tr>
				  <tr> 
				    <td><b>Win Vista</b></td>
				    <td> <div align="center">&nbsp;</div></td>
				    <td> <div align="center">&nbsp;</div></td>
				    <td> <div align="center">&nbsp;</div></td>
				    <td> <div align="center">&nbsp;</div></td>
				    <td> <div align="center">&nbsp;</div></td>
				    <td> <div align="center">Darin Wright</div></td>
				  </tr>
				  <tr> 
				    <td><b>Win XP</b></td>
				    <td> <div align="center">&nbsp;</div></td>
				    <td> <div align="center">&nbsp;</div></td>
				    <td> <div align="center">&nbsp;</div></td>
				    <td> <div align="center">&nbsp;</div></td>
				    <td> <div align="center">&nbsp;</div></td>
					<td> <div align="center">Samantha Chan</div></td>
				  </tr>
				  <tr> 
				    <td><b>Linux</b></td>
				    <td> <div align="center">&nbsp;</div></td>
				    <td> <div align="center">&nbsp;</div></td>
				    <td> <div align="center">Pawel Piech</div></td>
					<td> <div align="center">&nbsp;</div></td>
					<td> <div align="center">&nbsp;</div></td>
					<td> <div align="center">Curtis Windatt</div></td>
				  </tr>
				  <tr> 
				    <td><b>Mac</b></td>
				    <td> <div align="center">&nbsp;</div></td>
				    <td> <div align="center">&nbsp;</div></td>
				    <td> <div align="center">Michael Rennie</div></td>
				    <td> <div align="center">&nbsp;</div></td>
				    <td> <div align="center">&nbsp;</div></td>
					<td> <div align="center">&nbsp;</div></td>
				  </tr>
				</table>
			</div>
		</div>
		<div class="homeitem3col">
			<a name="top"></a>
			<h2><b>Test Grid</b></h2>
			<div align="center">
			<table width="100%" border="1">
			  <tr> 
			    <td width="30%" align="center"><b>Feature Testing</b></td>
			    <td width="12%" align="center"><b>Darin Wright</b></td>
			    <td width="12%" align="center"><b>Michael Rennie</b></td>
			    <td width="12%" align="center"><b>Curtis Windatt</b></td>
			    <td width="12%" align="center"><b>Pawel Piech</b></td>
			    <td width="12%" align="center"><b>Samantha Chan</b></td>
			  </tr>
			  <tr> 
			    <td><a href="#Java6">Java 6.0 Features</a></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
				<td> <div align="center">&nbsp;</div></td>
				<td> <div align="center">&nbsp;</div></td>
				<td> <div align="center"><img src="/eclipse/debug/images/ok.gif" width="10" height="10"></div></td>
			  </tr>
			  <tr> 
			    <td><a href="#Evaluations">Evaluations</a></td>
			    <td> <div align="center"><img src="/eclipse/debug/images/ok.gif" width="10" height="10">;</div></td>
				<td> <div align="center">&nbsp;</div></td>
				<td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			  </tr>
			  <tr> 
			    <td><a href="#ContextLaunching">Context Launching</a></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center"><img src="/eclipse/debug/images/ok.gif" width="10" height="10"></div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			  </tr>
			  <tr> 
			    <td><a href="#Launch">Launch Options</a></td>
			     <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center"><img src="/eclipse/debug/images/ok.gif" width="10" height="10"></div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			  </tr>
			  <tr> 
			    <td><a href="#Launch_Modes">Launch Modes</a></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
				<td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center"><img src="/eclipse/debug/images/ok.gif" width="10" height="10"></div></td>	
			    <td> <div align="center">&nbsp;</div></td>			
			  </tr>
			  <tr> 
			    <td><a href="#LaunchConfigurations">Launch Configurations</a></td>
			    <td> <div align="center"><img src="/eclipse/debug/images/ok.gif" width="10" height="10"></div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			  </tr>
			  <tr> 
			    <td><a href="#Debug">View Management</a></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center"><img src="/eclipse/debug/images/ok.gif" width="10" height="10"></div></td>
				<td> <div align="center">&nbsp;</div></td>
				<td> <div align="center">&nbsp;</div></td>
				<td> <div align="center">&nbsp;</div></td>
			  </tr>
			  <tr> 
			    <td><a href="#Breakpoints">Breakpoints</a></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center"><img src="/eclipse/debug/images/ok.gif" width="10" height="10"></div></td>
			  </tr>
			  <tr> 
			    <td><a href="#Step">Stepping Tests</a></td>
				<td> <div align="center">&nbsp;</div></td>
				<td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center"><img src="/eclipse/debug/images/ok.gif" width="10" height="10"></div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			  </tr>
			  <tr> 
			    <td><a href="#Logical">Logical Structures</a></td>
				<td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center"><img src="/eclipse/debug/images/ok.gif" width="10" height="10">;</div></td>
			  </tr>
			  <tr> 
			    <td><a href="#Watch">Watch Items</a></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
				<td> <div align="center">&nbsp;</div></td>
				<td> <div align="center"><img src="/eclipse/debug/images/ok.gif" width="10" height="10"></div></td>
				<td> <div align="center">&nbsp;</div></td>
			  </tr>
			  <tr> 
			    <td><a href="#Context">Context Menu Launching</a></td>
			    <td> <div align="center"><img src="/eclipse/debug/images/ok.gif" width="10" height="10"></div></td>
				<td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			   	<td> <div align="center">&nbsp;</div></td>
			   	<td> <div align="center">&nbsp;</div></td>
			  </tr>
			  <tr> 
			    <td><a href="#Classpaths">Runtime Classpath</a></td>
				<td> <div align="center">&nbsp;</div></td>
				<td> <div align="center"><img src="/eclipse/debug/images/ok.gif" width="10" height="10"></div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			  </tr>
			  <tr> 
			    <td><a href="#Source">Source Lookup</a></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center"><img src="/eclipse/debug/images/ok.gif" width="10" height="10"></div></td>
				<td> <div align="center">&nbsp;</div></td>
				<td> <div align="center">&nbsp;</div></td>
			  </tr>
			  <tr> 
			    <td><a href="#Monitors">Monitor Information</a></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center"><img src="/eclipse/debug/images/ok.gif" width="10" height="10"></div></td>
			  </tr>
			  <tr> 
			    <td><a href="#Hot">HCR</a></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center"><img src="/eclipse/debug/images/ok.gif" width="10" height="10"></div></td>
			    <td> <div align="center">&nbsp;</div></td>
			  </tr>
			  <tr> 
			    <td><a href="#JREs">Installed JREs</a></td>
			    <td> <div align="center"><img src="/eclipse/debug/images/ok.gif" width="10" height="10"></div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			  </tr>
			  <tr> 
			    <td><a href="#EEs">Execution Environments</a></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center"><img src="/eclipse/debug/images/ok.gif" width="10" height="10"></div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			  </tr>
			  <tr> 
			    <td><a href="#String">String Variables</a></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
				<td> <div align="center"><img src="/eclipse/debug/images/ok.gif" width="10" height="10"></div></td>
				<td> <div align="center">&nbsp;</div></td>
				<td> <div align="center">&nbsp;</div></td>
			  </tr>
			  <tr> 
			    <td><a href="#Console">Console</a></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
				<td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center"><img src="/eclipse/debug/images/ok.gif" width="10" height="10"></div></td>
			    <td> <div align="center">&nbsp;</div></td>
			  </tr>
			  <tr> 
			    <td><a href="#Variables">Variables</a></td>
			    <td> <div align="center"><img src="/eclipse/debug/images/ok.gif" width="10" height="10"></div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			  </tr>
			  <tr> 
			    <td><a href="#Refactoring">Refactoring</a></td>
			    <td> <div align="center">&nbsp;</div></td>
				<td> <div align="center"><img src="/eclipse/debug/images/ok.gif" width="10" height="10"></div></td>
				<td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			  </tr>
			  <tr> 
			    <td><a href="#Applets">Applets</a></td>
				<td> <div align="center">&nbsp;</div></td>
				<td> <div align="center">&nbsp;</div></td>
				<td> <div align="center"><img src="/eclipse/debug/images/ok.gif" width="10" height="10"></div></td>
				<td> <div align="center">&nbsp;</div></td>
				<td> <div align="center">&nbsp;</div></td>
			  </tr>
			  <tr> 
			    <td><a href="#Remote">Remote Debugging</a></td>
			    <td> <div align="center">&nbsp;</div></td>
				<td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center"><img src="/eclipse/debug/images/ok.gif" width="10" height="10"></div></td>
			    <td> <div align="center">&nbsp;</div></td>
			  </tr>
			  <tr> 
			    <td><a href="#JSP">JSP Example</a></td>
			    <td><div align="center"><img src="/eclipse/debug/images/ok.gif" width="10" height="10"></div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			  </tr>
			  <tr> 
			    <td><a href="#STRESS">Stress Tests</a></td>
			    <td> <div align="center"><img src="/eclipse/debug/images/ok.gif" width="10" height="10"></div></td>
			    <td> <div align="center"><img src="/eclipse/debug/images/ok.gif" width="10" height="10"></div></td>
			    <td> <div align="center"><img src="/eclipse/debug/images/ok.gif" width="10" height="10"></div></td>
			    <td> <div align="center"><img src="/eclipse/debug/images/ok.gif" width="10" height="10"></div></td>
			    <td> <div align="center"><img src="/eclipse/debug/images/ok.gif" width="10" height="10"></div></td>
			  </tr>
			</table>
			<p></p>
			<table width="100%" border="1">
			  <tr> 
			    <td width="40%"><b>Non-Java Testing</b></td>
			    <td width="15%"><b>Pawel Piech</b></td>
			  </tr>
			  <tr> 
			    <td><a href="#Memory">Memory View</a></td>
			    <td> <div align="center"><img src="/eclipse/debug/images/ok.gif" width="10" height="10"></div></td>
			  </tr>
			  <tr> 
			    <td><a href="#Modules">Modules View</a></td>
			    <td> <div align="center"><img src="/eclipse/debug/images/ok.gif" width="10" height="10"></div></td>
			  </tr>
			  <tr> 
			    <td><a href="#Registers">Registers View</a></td>
			    <td> <div align="center"><img src="/eclipse/debug/images/ok.gif" width="10" height="10"></div></td>
			  </tr>
			  <tr> 
			    <td><a href="#Breakpoint_Toggle_Types">Breakpoint Toggle Types</a></td>
			    <td> <div align="center"><img src="/eclipse/debug/images/ok.gif" width="10" height="10"></div></td>
			  </tr>
			</table>
			</div>
		</div>
		<div class="homeitem3col">
			<a name="Java6"></a>
			<p>&nbsp;</p>
			<h2><b>Java 6.0 Features</b></h2>
				<h3> All Instances</h3>
					<ol>
						<li>should not be available when not debugging with 1.6 VM</li>
						<li>Variables view popup</li>
						<li>Java Outline view popup (type and constructors only)</li>
						<li>Java editor popup (type name or constructor name selected)</li>
						<li>change number of instances to show on Heap walking preference page</li>
					</ol>
				<h3>All References</h3>
					<ol>
						<li>should not be available when not debugging with 1.6 VM</li>
						<li>Variables view popup</li>
						<li>in-line as variable in the variables view (change in view preferences and preference page)</li>
						<li>change number of references to show on Heap walking preference page</li>
					</ol>
				<h3>Force Early Return</h3>
					<ol>
						<li>should not be available when not debugging with 1.6 VM</li>
						<li>works as an evaluation (from display and details pane)</li>
						<li>Run menu and key binding</li>
						<li>Java editor context menu</li>
					</ol>
				<p><a href="#top">Back to top</a><br><hr></p><p>&nbsp;</p>
			<a name="Evaluations"></a>
			<h2><b>Evaluations</b></h2>
				<h3>Java 5.0 features</h3> 
				    <ol>
						<li>Generic types</li>
						<li>enhanced for loop syntax</li>
						<li>varargs</li>
						<li>autoboxing</li>
						<li>enumerations</li>
				    </ol>
				<h3>From various contexts</h3> 
				    <ol>
					    <li>Java Compilation Unit editor</li>
					    <li>Java Classfile editor</li>
					    <li>Display View</li>
					    <li>Details area</li>
					    <li>Snippet editor</li>
					    <li>in class files without attached source</li>
					    <li>for arrays as the receiving 'this' context</li>
				    </ol>
				<h3>Inspect vs. Display</h3> 
				    <ol>
					    <li>note that in the Display view and Snippet editor, &quot;Display&quot; prints the result in-line</li>
					    <li>everywhere else, popups are used to display/inspect the result</li>
				    </ol>
				<h3>General</h3>
					<ol>
						<li>switch statements should be supported in evaluations</li>
						<li>use key bindings and context menus</li>
					  	<li>use code assist (key binding and context menu)</li>
						<li>persisting the result - i.e. move the result to the Display view or Expressions view</li>
						<li>in a clean workspace, popups should size reasonable on the first use, after which the popup sizes are persisted and reused</li>
					</ol>
				<p><a href="#top">Back to top</a><br><hr></p><p>&nbsp;</p>
			<a name="ContextLaunching"></a>
			<h2><b>Context Launching</b></h2>
				<h3> Resource properties page</h3>
					<ol>
						<li>available on launchable resources</li>
						<li>only show listing of launch configurations that apply to selected resource</li>
						<li>create/delete/edit configuration</li>
						<li>changes to configurations are cancelable</li>
					</ol>
				<h3>Launching</h3>
					<ol>
						<li>launch button(s) tooltip(s) should track selection changes (update as selections change)</li>
						<li>non-launchable resource should prompt to run the parent (if set to do so, toggle pref on Launching preference page)</li>
						<li>
							<p>
								Running and debugging applications has been simplified 
							    to run or debug the selected file or active editor. Use the &quot;Run/Debug 
							    &gt; Launching &gt; Launch the selected resource or active editor&quot; 
							    preference to enable this behavior. When the selected resource (or active 
							    editor) is not executable, you can opt to launch the associated project 
							    by selecting &quot;Always launch project if selected resource cannot be 
							    launched&quot;.
							</p>
							<p>
								Pressing the Run or Debug toolbar button will launch the selected resource 
								(as will the Run or Debug action in the top level Run menu). When no launch 
								configuration exists for the selected resource, you will be prompted to 
								select how to run or debug an application if there is more than one way 
								to launch the selection. For example, when running a JUnit test you can 
								launch it as a Java application or JUnit test. This will create a launch 
								configuration and entry in the launch history for the application.
							</p>
							<p>
								When the same resource is launched again, the most recent configuration 
								in the launch history associated with that resource is re-launched.
							</p>
						</li>
					</ol>
				<p><a href="#top">Back to top</a><br><hr></p><p>&nbsp;</p>
			<a name="Launch"></a>
			<h2><b>Launch Options</b></h2>
				<h3>Build before launch</h3> 
				    <ol>
					    <li>build is scoped to relevant projects</li>
					    <li>standard job progress dialog is displayed for the following cases. The &quot;Run in Background&quot; button is never present</li> 
				        <li>launching in foreground (un-check &quot;Launch in background&quot; option on common tab)</li> 
			            <li>waiting for ongoing build to complete before launching</li>
			            <li>building before launching</li>
					    <li>the progress dialog never appears when launching in the background
				        <li>when waiting for an ongoing build to complete before launching a 
				            node appears in the debug view in italics showing &quot;waiting for 
				            build&quot;</li>
				    </ol>
				<h3>Prompt to launch in face of compilation errors</h3> 
				    <ol>
					    <li>always/prompt</li>
					    <li>prompt should tell you which project(s) contain errors</li>
					    <li>irrelevant errors should not cause prompt (i.e. Ant errors should not prevent Java launch)</li>
				    </ol>
				<h3>Prompt to launch in debug mode when breakpoints present</h3> 
				    <ol>
				    	<li>always/never/prompt</li>
				    </ol>
				<h3>General</h3>
					<ol>
				  		<li>save dirty editors</li>
				  		<li>launch in foreground/background (controlled via common tab on launch config)</li>
					</ol>
			<p><a href="#top">Back to top</a><br><hr></p><p>&nbsp;</p>
			<a name="Launch_Modes"></a>
			<h2><b>Launch Modes</b></h2>
				<p> For this test, you require the use of the launch modes test plugin available <a href="http://www.eclipse.org/eclipse/debug/misc/plugins/org.eclipse.example.mixedmode_1.2.0.jar">here</a>.</p>
				<h3> Preferences Dialog</h3>
					<ol>
						<li>ensure launch tool preferences page is available, even if there is no conflicting tooling. Page
						should be disabled with an explanation if no conflicting tooling</li>
						<li>ensure page can be searched for with tree viewer searching</li>
						<li>ensure there is a help topic for the page</li>
						<li>with duplicate tooling select a variety of items in both viewers</li>
						<li>ensure once an item is selected in the preferred tooling viewer it cannot be unselected (checked)</li>
						<li>changing selected tooling without saving changes should not modify saved choices</li>
						<li>selecting preferred tooling from a quick launch or the launch configuration dialog should be reflected in the pref page (and changeable)</li>
					</ol>
				<h3> Launch Configuration Dialog</h3>
					<ol>
						<li>ensure incompatible modes are flagged correctly (check the widget on the Coverage Tab) with an error message and link</li>
						<li>link should present complete list of support mode combinations</li>
						<li>selection of mode set should update dialog and remove error</li>
						<li>duplicate delegates should be flagged correctly with error message and link</li>
						<li>link should present complete set of contributed launch tooling</li>
						<li>selection of tooling should remove error from dialog, and be reflected in the preference page</li>
					</ol>			
				<h3> Launch History</h3>
					<ol>
						<li>resolution dialog should be presented if duplicate tooling found and no choice has been made</li>
						<li>choice of tooling should allow launch to continue and be reflected in the preferences page</li>
						<li>canceling either choice from the resolution dialog should cancel the launch as well</li>
					</ol>
				</ol>
			<p><a href="#top">Back to top</a><br><hr></p><p>&nbsp;</p>
			<a name="LaunchConfigurations"></a>
			<h2><b>Launch Configurations</b></h2>
				<h3>Launch History / Favorites</h3>
					<ol>
						<li>available in the toolbar drop-down</li>
						<li>new launched configurations added to top of history</li>
						<li>launching from history changes order of history</li>
						<li>test the 'organize favorites' dialog</li>
						<li>configurations should not be in both history and favorites</li>
						<li>ctrl-clicking a configuration should open to launch configuration dialog</li>
						<li>ctrl-Shift-clicking a configuration should offer to remove it from the history/favorites</li>
					</ol>
				<h3>Launch Configuration Dialog</h3>
					<ol>
						<li>creating/Deleting configurations of different types</li>
						<Li>deleting multiple launch configurations, ensure selection is preserved/updated</li>
						<li>filtering configurations from tree</li>
						<li>test error handling, apply/revert buttons, and launching</li>
						<li>check if tabs make configuration dirty even if no changes are made</li>
					</ol>
				<h3>General</h3>
					<ol>
						<li>importing and exporting of launch configurations through File > Import/Export</li>
						<li>using java search to find launch configurations that launch a class</li>
					</ol>
			<p><a href="#top">Back to top</a><br><hr></p><p>&nbsp;</p>
			<a name="Debug"></a>
			<h2><b>Debug View Management </b></h2>
				<h3>Switch to Debug Perspective</h3> 
				    <ol>
				      	<li>when launching (always/never/prompt)</li>
				      	<li>when suspending (always/never/prompt)</li>
				    </ol>
				<h3>Activate The Debug View When Program Suspends</h3> 
				    <ol>
						<li>debug action set should also open automatically when a debug view is opened</li>
						<li>relevant debug views should automatically open when stack frame is selected</li>
						<li>in debug perspective by default</li>
						<li>in other perspectives as configured on the &quot;View Management&quot; pref page (also available in Debug View drop down menu)</li>
						<li>use PDA debugger to try debugging different languages in same perspective (hope to have this available - example from draft debug article)</li>
			          	<li>automatically opened views should close when debugging ends</li>
				    </ol>
				 <h3>General</h3>
				 	<ol>
				 		<li>activate the workbench when a breakpoint is hit</li>
				 	</ol>
			<p><a href="#top">Back to top</a><br><hr></p><p>&nbsp;</p>
			<a name="Breakpoints"></a>
			<h2><b>Breakpoints</b></h2>
				<h3>Breakpoint Groups</h3> 
				    <ol>
					    <li>show breakpoints, breakpoint types, breakpoint working sets, files, projects, resource working sets, advanced</li>
					    <li>auto-add to default breakpoint working set</li>
					    <li>drag &amp; drop between breakpoint working sets (move)</li>
					    <li>copy &amp; paste between breakpoint working sets</li>
					    <li>stratum breakpoints should group by stratum (e.g. JSP breakpoints)</li>
				    </ol>
				<h3>Creation Of Breakpoints</h3> 
				    <ol>
				    	<li>create: line, class load, method, exception, and watchpoint</li>
					    <li>no breakpoints can be set in interfaces</li>
					    <li>breakpoints can be set in external source file (file from OS that does not belong to a project)</li>
					    <li>toggle Line breakpoints - double click in ruler, Run menu action (menu &amp; keybinding), context menu in outline view</li>
					    <li>toggle Method breakpoints - double click in ruler, Run menu action (menu &amp; keybinding), context menu in outline view</li>
					    <li>class Load Breakpoint - double click in ruler, Run menu action (menu &amp; keybinding), context menu in outline view</li>
					    <li>toggle Watchpoints - double click in ruler, Run menu action (menu &amp; keybinding), context menu in outline view</li>
					    <li>watchpoint cannot appear on 'final' field</li>
					    <li>watchpoint cannot appear on 'static final' field</li>
					    <li>exception Breakpoints - Run menu action, hyperlink from stack trace, breakpoints view</li>
				    </ol>
				<h3>Refactoring</h3>
					<ol>
						<li>breakpoints should be updated if enclosing type is refactored</li>
						<li>method breakpoints should be updated after refactoring method</li>
						<li>line breakpoints should be updated if enclosing method refactored</li>
						<li>watchpoint should be updated if field refactored</li>
					</ol>
				<h3>Skip All Breakpoints Option</h3> 
				    <ol>
				    	<li>not all shortcuts have support</li>
				      	<li>groups and breakpoints should be rendered with &quot;skip&quot; (crossed out) line</li>
				    </ol>
				<h3>Import/Export</h3> 
				    <ol>
				      	<li>export wizard is properly initialized based on breakpoint selection in Breakpoints view</li>
				      	<li>wizard settings are persisted for subsequent import/export operations</li>
				      	<li>breakpoint working set information is exported and are re-created on import</li>
				      	<li>existing breakpoints are updated with imported information (for example, hit count, etc.)</li>
				        <li>breakpoint working sets are recreated properly</li>
				    </ol>
				<h3>General</h3>
					<ol>
						<li>option to open inspector on exception when an exception breakpoint is hit </li>
					  	<li>Java &gt; Debug: &quot;open popup when suspended on exception&quot;</li>
					  	<li>option to delete breakpoints vs. working set when &quot;delete&quot; pressed on a working set</li>
					  	<li>breakpoint option choices are properly persisted</li>
					  	<li>preference for suspending Thread by default on newly created breakpoints</li>
					</ol>
			<p><a href="#top">Back to top</a><br><hr></p><p>&nbsp;</p>
			<a name="Step"></a>
			<h2><b>Stepping Tests</b></h2>
				<h3>Run to Line</h3>
				    <ol>
				     	<li>context menu</li>
				      	<li>run menu action and keybinding</li>
				      	<li>classfile and Compilation unit editor</li>
				      	<li>preference to &quot;skip breakpoints during run to line&quot; (on main Run/Debug pref page)</li>
				    </ol>
				<h3> Step Into Selection</h3>
				  	<ol>
				  		<li>run menu action and keybinding</li>
				  		<li>hyperlink action using Ctrl+Alt+Click</li>
				  	</ol>
				<h3>Step Filters</h3>
				  	<ol>
				  		<li>step filters on/off should affect stepping (no stepping within filtered types)</li>
				  		<li>toggle step filters action</li>
				  		<li>edit step filters via context menu, preference page</li>
				  		<li>persistence of step filters, view open/closure, workbench restart</li>
				  	</ol>
				<h3>Drop To Frame</h3>
					<ol>
						<li>drops to selected frame</li>
						<li>cannot drop to frame of a native method</li>
					</ol>
				</ol>
			<p><a href="#top">Back to top</a><br><hr></p><p>&nbsp;</p>
			<a name="Logical"></a> 
			<h2><b>Logical Structures</b> </h2>
				<h3>View Options</h3>
					<ol>
						<li>view variables with logical structures on/off</li>
				  		<li>stepping with logical structures on/off</li>
				  		<li>selectively turn off logical structures via context menu &quot;Show As &gt; ...&quot; </li>
					</ol>
				<h3>Compatible Structures</h3> 
				    <ol>
				      	<li>java.util.Collection (flat list)</li>
				      	<li>java.util.Map (list of map entries)</li>
				      	<li>java.util.Map$Entry (key/value)</li>
				    </ol>
				<h3>User Defined Logical Structures</h3> 
				    <ol>
					    <li>more than one structure for a type:	all choices appear in &quot;Show As &gt; ..&quot; menu and the user
					          	can choose between structures properly</li>
				      	<li>structures persist restore properly across workbench invocations</li>
				      	<li>structures with compilation errors</li>
				      	<li>structures with runtime errors</li>
				      	<li>when two different types (A,B) share the same possible logical structures, 
				        	their enabled (selected) structure is shared (i.e. if you select &quot;show 
				        	A as X&quot; then B will also show as X.</li>
				    </ol>
				<h3>Import/Export Logical Structures</h3>
					<ol>
						<li>Import is available</li>
						<li>Logical structure import succeeds</li>
					</ol>
			<p><a href="#top">Back to top</a><br><hr></p><p>&nbsp;</p>
			<a name="Watch"></a>
			<h2><b>Watch Items</b></h2>
				<h3>Creating Watch items</h3>
				    <ol>
				      	<li>from context menu &quot;Add Watch Expression&quot;</li>
				     	<li>from variables view context menu &quot;Watch&quot;</li>
				     	<li>dragging variables from variables view to expressions view</li>
				     	<li>dragging text to expressions view</li>
				    </ol>
				 <h3>General</h3>
				 	<ol>
				 		<li>persist</li>
				  		<li>reordering of expressions view by dragging and dropping</li>
				  		<li>unable/disable</li>
				  		<li>update while stepping</li>
				  		<li>update when selecting a different stack frame</li>
				  		<li>errors appear as children of a watch expression (compilation errors, runtime errors) </li>
				 	</ol>
			<p><a href="#top">Back to top</a><br><hr></p><p>&nbsp;</p>
			<a name="Context"></a>
			<h2><b>Context Menu Launching</b></h2>
				<h3>Run/Debug Menu</h3>
					<ol>
						<li>from the context and top level Run/Debug cascade menus. Note that 
				    		before a shortcut's property tester is loaded, it will appear in the context 
				    		menu by default. For example, the Java application shortcut requires the &quot;hasMain&quot; 
				    		tester from the Java debug plug-in, and thus, until the plug-in is loaded, 
				    		the shortcut will appear on all Java files whether they have a main method 
				    		or not</li>
				      	<li>Java Applications (with main, without main, compilation unit, type, method, classfile, package, project)</li>
				      	<li>Java Applets</li>
				      	<li>JUnit tests</li>
				      	<li>Ant build, Ant build... (build file, targets in outline and Ant view)</li>
				    </ol>
				<h3>Context Menu Availability</h3>
				    <ol>
				      	<li>resource navigator</li>
				      	<li>package explorer</li>
				      	<li>outline view</li>
				      	<li>editor</li>
				    </ol>
				<h3>Use keybindings To Launch (ALT-Shift-D/X)</h3>
				    <ol>
				      	<li>an active editor</li>
				      	<li>a selection in an outline/navigator</li>
				    </ol>
				<H3>Ctrl-Click On A Launch Shortcut</h3> 
				  	<ol>
				  		<li>not all shortcuts have support</li>
						<li>should select the most recently used configuration for the launchable class</li>
						<li>if no recently used configurations exist, the type should be selected</li>
				  	</ol>
				</ol>
			<p><a href="#top">Back to top</a><br><hr></p><p>&nbsp;</p>
			<a name="Classpaths"></a>
			<h2><b>Runtime Classpaths</b></h2>
				<h3>Default Classpath</h3>
					<ol>
						<li>the default classpath should track a project's build path</li>
						<li>option to only include exported items in runtime classpath (by default, all items are included)</li>	
					</ol>
				<h3>Non-Default Bootpath</h3> 
				    <ol>
				      	<li>prepending and appending to the default bootpath</li>
				      	<li>using an explicit bootpath (i.e. without prepend/append)</li>
				    </ol>
				<h3>Non-Default Classpath</h3> 
				    <ol>
				      	<li>different types of entries</li>
				      	<li>new entry type - String Variables</li>
				    </ol>
			<p><a href="#top">Back to top</a><br><hr></p><p>&nbsp;</p>
			<a name="Source"></a>
			<h2><b>Source Lookup</b></h2>
				<h3>Default Source Lookup Path</h3>
					<ol>
						<li>the default source lookup path should track changes in the default build path 
					    	(when using a default runtime classpath). If a non-default runtime classpath 
					    	is used, the default source lookup path should track the runtime classpath</li>
					  	<li>searching for duplicate source files</li>
					  	<li>modifying the source lookup path when a source file cannot be found</li>
					  	<li>multiple source roots in archives</li>
					</ol>
				<h3>Entry Types</h3> 
				    <ol>
				      	<li>Internal archives</li>
				      	<li>External archives</li>
				      	<li>Java projects</li>
				      	<li>Java classpath variables</li>
				      	<li>Directory (external)</li>
				      	<li>Folder (in the workspace)</li>
				      	<li>Java Library (JRE, required plug-ins, etc).</li>
				    </ol>
			<p><a href="#top">Back to top</a><br><hr></p><p>&nbsp;</p>
			<a name="Monitors"></a>
			<h2><b>Threads &amp; Monitors &amp; Thread Groups </b></h2>
				<h3>Monitor Information In The Debug View</h3> 
				    <ol>
				      	<li>no information/errors for VMs that do not support monitor information</li>
				      	<li>monitor information appears for suspended threads</li>
				      	<li>monitor information is not displayed for running threads</li>
				      	<li>ensure valid deadlocks are detected </li>
				        <li>threads are rendered red (preference color), and have deadlock overlay</li>
				      	<li>locks support resume/terminate</li>
				    </ol>
				<h3>Thread Groups</h3>
				    <ol>
				      	<li>thread groups can be displayed in debug view by turning on the &quot;Show Thread Groups&quot; option in the view menu</li>
				        <li>thread groups support terminate</li>
				    </ol>
			<p><a href="#top">Back to top</a><br><hr></p><p>&nbsp;</p>
			<a name="Hot"></a>
			<h2><b>Hot Code Replace </b></h2>
				<h3>Valid HCR</h3> 
				    <ol>
				      	<li>method changes (existing)</li>
			      		<li>changes to statements inside method work on SUN and IBM vms</li>
			      		<li>HCR fails adding/removing/changing signature of method on SUN vm</li>
			      		<li>HCR allows methods to be added for IBM J9 vm</li>
				      	<li>changes in existing instance variable initializer</li>
				      	<li>affected frames are automatically popped (unless top frame or native method on the stack)</li>
				      	<li>change method in declared inner type</li>
				      	<li>change method in anonymous inner type</li>
				      	<li>default and non-default packages</li>
				    </ol>
				<h3>Manually Drop To Frame</h3>
				    <ol>
				      	<li>works in all methods except last method on stack</li>
				      	<li>a native method cannot be dropped (and thus a method above a native cannot be dropped/re-entered)</li>
				    </ol>
			<p><a href="#top">Back to top</a><br><hr></p><p>&nbsp;</p>
			<a name="JREs"></a>
			<h2><b>Installed JREs </b></h2>
				<h3>Javadoc Locations</h3>
					<ol>
						<li>JREs allow a javadoc location to be set per library in the JRE</li> 
					    <li>changing the javadoc location on a JRE updates the build path javadoc location</li>
					    <li>changing the javadoc location on a build path (JRE library) updates the JRE</li>
					    <li>changing a javadoc location or source attachment does not causes an explicit bootpath to be used when launching with that JRE</li>
				   	</ol>
				<h3>General</h3>
					<ol>
						<li>copy a JRE definition</li>
				  		<li>import/export of JRE preferences</li>
						<li>changing the default JRE triggers a build if the default JRE is referenced by a project</li>
					</ol>
				</ol>
			<p><a href="#top">Back to top</a><br><hr></p><p>&nbsp;</p>
			<a name="EEs" id="EEs"></a>
			<h2><b>Execution Environments </b></h2>
				<h3>Specify a Build Path</h3> 
				    <ol>
				      	<li>changing the default JRE for an EE updates build path</li>
				    </ol>
				<h3>Specify a Runtime</h3> 
				    <ol>
				      	<li>changing the default JRE for an EE updates the default and/or selected EE runtime JRE</li>
				    </ol>
				<h3> Modifying Access Rules</h3> 
				  	<ol>
				  		<li>adding an access rule should cause a rebuild (if auto-build is enabled)</li>
				  		<li>ensure that the access rules defined in a system library are not editable/removable</li>
				  		<li>add a new forbidden rule, ensure accesses to forbidden types is flagged as an error</li>
				  		<li>add a new discouraged rule, ensure access to discouraged types is flagged as a warning</li>
				  		<li>ensure access rules can be removed</li>
				  		<li>
				  	</ol>
				<h3> Over-riding Access Rules</h3>
				  	<ol>
				  		<li>create a rule that over-rides a system library rule, and ensure it works</li>
				  	</ol>
			<p><a href="#top">Back to top</a><br><hr></p><p>&nbsp;</p>
			<a name="String"></a>
			<h2><b>String Variables </b></h2>
				<h3>General</h3>
					<ol>
				  		<li>use String Variables in launch configs</li>
				      	<li>VM args, program args, main type name</li>
				  		<li>String Variable selection dialog</li>
					</ol>
			<p><a href="#top">Back to top</a><br><hr></p><p>&nbsp;</p>
			<a name="Console"></a>
			<h2><b>Console </b></h2>
				<h3>Options</h3>
					<ol>
						<li>Pin a console - pin action is specific to console view. When pinned, console should not change in that view</li>
				  		<li>Scroll lock - specific to console view. When locked, the console in that view should not scroll</li>
				  		<li>link to console preferences from context menu</li>
					</ol>
				<h3>Switching between consoles</h3>
					<ol>
						<li>use the drop down to toggle between consoles</li> 
				  		<li>clicking on the drop-down should toggle between the last two consoles shown</li>
				  		<li>open new console - CVS and Java Stack Trace Console</li>
				  		<li>Create a keybinding for Next / Previous page for the Console view</li>
				  		<li>Try the new key binding from every kind of console available; should be available for all console kinds</li>
					</ol>
				<h3>Stack trace console</h3> 
				    <ol>
				      	<li>pasting and navigating stack traces</li>
				      	<li>hyperlinks are colored by hyperlink color preferences</li>
				      	<li>editing stack traces/clearing console</li>
				      	<li>contents are persisted across workbench invocations and close/re-open</li>
				      	<li>formatting</li>
				      	<li>hyperlinks for stack traces, link to source code</li>
				  		<li>hyperlinks for exception names allow creation/modification of exception breakpoint settings</li>
				    </ol>
				<h3>Encoding</h3> 
				    <ol>
				    	<li>use alternate console encoding to display DBCS character set</li>
				      	<li>remember to use &quot;-Dfile.encoding=UTF-8&quot; (or whatever encoding) on the VM args</li>
				    </ol>
				<h3>Open Multiple Console Views</h3> 
				    <ol>
				      	<li>pin a view selectively</li>
				      	<li>scroll lock a view selectively</li>
				      	<li>key-bindings work in views - FORMAT in Java stack trace console/CTRL-D/Z in process console</li>
				    </ol>
				<h3>Multiplex Output</h3>  
				    <ol>
				    	<li>available from the common tab in a supporting launch configuration</li>
				      	<li>a file</li>
				      	<li>the console</li>
				      	<li>both</li>
				      	<li>none</li>
				    </ol>
				<h3>General</h3>
					<ol>
						<li>show when output to standard out/err</li>
						<li>console title becomes bold when content changes (but not if on top/auto activated)</li>
						<li>console input - typing, pasting, pasting multiple lines</li>
						<li>CTRL-Z/D for EOF when doing console input</li>
					</ol>
			<p><a href="#top">Back to top</a><br><hr></p><p>&nbsp;</p>
			<a name="Variables"></a>
			<h2><b>Variables</b></h2>
				<h3>toString()</h3>  
				    <ol>
				    	<li>in-line in the tree viewer</li>
				      	<li>for all variables</li>
				      	<li>for variables with detail formatters</li>
				      	<li>only in the details area</li>
				    </ol>
				<h3>Changing Variable Values</h3> 
				    <ol>
				      	<li>via &quot;Change Value...&quot; context action 
				        <li>dialogs are different for primitives &amp; objects</li>
				        <li>evaluations are supported</li>
				        <li>editing a String value via evaluation and direct editing</li>
				      	<li>via CTRL-S in the details area 
				        <li>evaluations for objects</li>
				        <li>direct editing for primitives</li>
				    </ol>
				<h3>Column support</h3> 
				    <ol>
				      	<li>turn columns off/on</li>
				      	<li>column size automatically until user changes them</li>
				      	<li>sizes are persisted</li>
				      	<li>select &amp; persist columns to display</li>
				      	<li>background &quot;changed&quot; color highlighting</li>
				    </ol>
				<h3>General</h3>
					<ol>
						<li>find Variable support and key-binding</li>
					 	<li>changed variables appear red (preference color) when stepping</li>
					 	<li>variables remain expanded/selected as stepping</li>
					  	<li>when switching between stack frames (without resuming), the variables expanded/selected 
					    	are maintained (i.e. expand and select for frame 1, then select frame 2 and 
					    	expand/select. when re-selecting frame 1, the original state is restored)</li>
					    <li>Debug hover works for symbols with the same name and different values (inherited fields), showing correct value</li>
					</ol>
			<p><a href="#top">Back to top</a><br><hr></p><p>&nbsp;</p>
			<a name="Refactoring"></a>
			<h2><b>Refactoring</b></h2>
				<h3>Launch Configurations</h3>
					<ol>
						<li>launch configuration main type is updated after type rename, type move, package rename</li>
						<li>launch configuration project is updated after project rename, package move, type move</li>
					</ol>
				<h3>Java breakpoints</h3> 
			    	<ol>
			    		<li>are updated after type rename, type move, package rename, package move, project rename</li>
			      		<li>VM suspend at the new location</li>
			      		<li>breakpoint attributes are preserved</li>
			      		<li>label is updated</li>
			      		<li>marker location is updated (text selected when double-clicking on a breakpoint in the breakpoint view)</li>
			    	</ol>
			<p><a href="#top">Back to top</a><br><hr></p><p>&nbsp;</p>
			<a name="Applets"></a>
			<h2><b>Applets</b></h2>
				<h3>Main Tab</h3> 
				    <ol>
				      	<li>specify a project via typing/browsing</li>
				      	<li>specify a nonexistent project (should see error if does not exist)</li>
				      	<li>specify an applet class via typing/searching (no validation is performed 
				       		on type name in the tab - error occurs on launch if an invalid type is 
				        	specified)</li>
				      	<li>specify a class that is not an applet (no validation is performed - error occurs on launch if invalid)</li>
				      	<li>specify default applet viewer class</li>
				      	<li>specify an explicit applet viewer class </li>
				    </ol>
				<h3>Parameters</h3> 
				    <ol>
				      	<li>specify various width &amp; height</li>
				      	<li>specify parameters (available via Applet#getParameter(...))</li>
				      	<li>specify applet name - allows Applets to communicate with each other via AppletContext#getApplet(...)</li>
				    </ol>
			<p><a href="#top">Back to top</a><br><hr></p><p>&nbsp;</p>
			<a name="Remote"></a>
			<h2><b>Remote Debugging</b></h2>
				<h3>Connect To A Remote VM</h3> 
				    <ol>
				      	<li>try &quot;suspend=y&quot; and &quot;suspend =n&quot; options</li>
				      	<li>try different sockets</li>
				      	<li>try connecting to a socket that has no VM</li>
				      	<li>try &quot;localhost&quot; and &quot;127.0.0.1&quot;</li>
				    </ol>
				<h3>Remote VM Connect To Waiting Debug Session</h3> 
				    <ol>
				      	<li>try different sockets</li>
					  	<li>try terminating waiting debug process</li>
					  	<li>try stopping waiting job</li>
				    </ol>
				<h3>General</h3>
					<ol>
						<li>terminate should only be enabled when the config specifies that terminate is supported</li>
					</ol>
			<p><a href="#top">Back to top</a><br><hr></p><p>&nbsp;</p>
			<a name="JSP"></a>
			<h2><b>JSP Example </b></h2>
				<p>
					Try JSP debugging example, as documented in the &quot;org.eclipse.jdt.ui.examples.javafamily&quot; 
					plug-in ReleaseNotes.html. The instructions are in the section titled &quot;Debugging 
					a JSP&quot;.
				</p>
				<h3>Testing</h3>
				    <ol>
				      	<li>Tomcat launch configuration</li>
				      	<li>breakpoints in JSP files</li>
				      	<li>enable/Disable installed JSP breakpoints</li>
				      	<li>enable/Disable un-installed breakpoints when a target/server is running</li>
				      	<li>changing the stratum displayed via context menu in debug view</li>
				      	<li>stepping in a Java file from a JSP file and stepping back (source lookup 
				        	should work)</li>
				      	<li>evaluation in the context of a JSP file (requires adding jsp-api.jar, 
				        	jasper-runtime.jar and servlet-api.jar from /common/lib to the project's 
				        	build path)</li>
				    </ol>
			<p><a href="#top">Back to top</a><br><hr></p><p>&nbsp;</p>
			<a name="STRESS"></a>
			<h2><b>Stress Tests </b></h2>
				<h3>Stepping With Many Threads</h3>
					<ol>
				      	<li>expansion and selection are maintained properly in the Debug View</li>
				      	<li>other suspended threads should not interfere with the current stepping thread</li>
				      	<li>selection should remain on the stack frame that is being stepped</li>
				    </ol>
				<h3>Stepping With Many Variables</h3> 
				    <ol>
				    	<li>debug a test case with many variables.  Expand many variables and set selection at the bottom of the Variables View.  Do a few Step Over.
				 			 Test with logical structures turned on / off</li>
				      	<li>the Variables View should properly maintain expansion and selection </li>
				      	<li>the Variables View should not scroll to the top unexpectedly</li>
				    </ol>
				<h3>Maintaining Variable(s) Expansion &amp; Selection</h3>  							 			  	
				    <ol>
				    	<li>debug a test case with many variables.  Expand many variables and set selection.  Switch between different stack frames</li>
				      	<li>verify that expansion and selection are maintained properly in the Variables View</li>
				      	<li>the Variables View should not scroll to the top unexpectedly</li>
				    </ol>	
				<h3>Stepping Quickly</h3>			 			  	
				    <ol>
				    	<li>hold down the step over key (F6). Test with logical structures turned on / off. Test with thread filters turned on / off</li>
				      	<li>verify that expansion and selection are maintained properly in the Debug View</li>
				      	<li>verify that expansion and selection are maintained properly in the Variables View</li>
				      	<li>verify that source lookup is performed properly</li>
				      	<li>verify that debug actions are properly enabled/disabled </li>
				    </ol>		
				<h3>Toggle Logical Structures Quickly</h3>		  
				    <ol>
				    	<li>debug a test case with many variables.  Some of these variables
				  			can be displayed differently when logical structures is turned on.  (e.g. Hash map)  Expand many of these
				  			variables and then toggle the logical structures action quickly</li>
				      	<li>verify that expansion and selection are maintained properly in the Variables View</li>
				      	<li>verify that there is no blank labels in the Variables View</li>
				    </ol>
			<p><a href="#top">Back to top</a><br></p><p>&nbsp;</p>
			<a name="Breadcrumb"></a>
			<h2><b>Breadcrumb</b></h2>
	 			<h3>Activation</h3>
				    <ol>
				      <li>Automatic switch when resizing view</li>
				      <li>Tree viewer and breadcrumb selection should be the same</li>
				    </ol>
				<h3>Updating</h3>
				    <ol>
				      <li>Launching</li>
				      <li>Stepping, resuming, suspending, etc.</li>
				      <li>Terminating, Remove All</li>
				      <li>Remove All</li>
				      <li><i>No Active Context</i> should be shown when Debug view is empty or if there is no selection</li> 
				    </ol>
				<h3>Drop down</h3>
				    <ol>
				      <li>Mouse-clicking on item.  Item should retain focus until mousing over drop down.  Clicking again on item should close drop down.  Clicking on another item should close drop-down and immediately open a new drop-down for the other item.</li>
				      <li>Mouse-clicking on drop-down button.  Drop down should open and receive focus immediately.  Clicking again on button should close it.</li>
				      <li>Make a selection in the drop-down.  Selected item should become the new active context, and drop-down should close.</li>
				      <li>Expanded state of elements shoudl be preserved between opening and closing the drop-downs, and should be the same as in the tree viewer.</li>
				    </ol>
				<h3>Keyboard navigation</h3>
				    <ol>
				      <li>Last item should receive focus when view is activated.</li>
				      <li>Left and Right keys should set selection to sibling items</li>
				      <li>Left key on the first item should open drop down</li>
				      <li>Right key on the last item should open drop down</li>
				      <li>Down key on any item should open drop down and give it focus.</li>
				      <li>Up key on the first item in drop down, should close it.</li>
				    </ol>
				<h3>Active Context</h3>
				    <ol>
				      <li>Selecting different items should change the active debug context (variables view should update, etc.)</li>
				      <li>Menu activation action on any item should open the context menu.</li>
				      <li>Menu actions should reflect the selected item.  E.g. copy stack trace for a thread should copy the trace of the whole thread</li>
				      <li>Find action should activate the selected item in Debug view</li>
				    </ol>
			<p><a href="#top">Back to top</a><br></p><p>&nbsp;</p>
			<a name="Memory"></a>
			<h2><b>Memory View</b></h2>
				<p>
					To test the Memory View, you will need the example.debug.memoryview sample.  You can get the sample from 
					the "Advanced Tutorial" from EclipseCon 2007.
				</p>
				<h3>Add memory block</h3>
					<ol>
						<li>adding multiple memory blocks by using a comma delimited list</li>
						<li>adding a memory block with empty expression</li>
						<li>adding a memory block using the key binding (Ctrl+Alt+M)</li>
					</ol>
				<h3>Remove memory block</h3>
					<ol>
						<li>remove single memory block</li>
						<li>remove multiple memory blocks </li>
						<li>remove all</li>
					</ol>				  	  
				<h3>Add Memory Rendering</h3>
					<ol>
						<li>default renderings get added automatically when a memory block is added</li>
					  	<li>add rendering from the Add Memory Rendering tab</li>
					  	<li>from the context menu</li>
					  	<li>using the key binding (Ctrl+N)</li>
					  	<li>add multiple renderings</li>
					</ol>				  	  			
				<h3>Remove Memory Rendering</h3>
					<ol>
					  	<li>by closing the tab.</li>
					  	<li>from the context menu.</li>					  	
					  	<li>using the key binding (Ctrl+W)</li>
					</ol>				  	  	  
				<h3>Renderings</h3>
					<ol>
					  	<li>make sure all the these renderings can be created:  Hex, Signed Integer, Unsigned Integer, ASCII, Hex Integer</li>
					  	<li>bring different renderings to the top.  Make sure that the tab label shows the address
					  		of the memory block when it is brought to the top</li>
					  	<li>switch between renderings using the key binding (Ctrl+PgUp / Ctrl+PgDn)</li>
					  	<li>content of the renderings get updated after each step</li>
					  	<li>renderings should mark memory that has changed</li>
					  	<li>memory shows up as grey if the rendering does not have cache to compute changes. e.g hidden when the user is stepping</li>
					  	<li>scroll to end of buffer and make sure memory is reloaded.  Try with scrollbar and cursor</li>
					  	<li>top index and cursor in rendering are maintained after rendering update</li>
					</ol>				  	 		
				<h3>Synchronization</h3>
				  	<ol>
				  		<li>toggle synchronization on and off</li>
				  		<li>scroll Bar</li>
				  		<li>table Cursor</li>
				  		<li>Format...</li>
				  	</ol>
				 <h3>Addresses</h3>
				 	<ol>
				 		<li>reset to Base Address </li>
				  		<li>go to Address:  Context Menu and CTRL+G.  Try different modes.</li>
				  		<li>try switching between memory blocks:  Tree viewer and Switch Memory Monitor action</li>
				 	</ol>				  	
				<h3>Auto vs Manual Loading</h3>
				  	<ol>
				  		<li>try auto loading</li>
				  		<li>try manual loading</li>
				  		<li>try different buffer sizes</li>
				  		<li>try page up and page down actions during manual loading. Try shortcut keys:  CTRL+sHIFT+&gt; and CTRL+SHIFT+&lt; </li>
				  		<li>make sure buffer size and loading preferences are preserved after workbench restart</li>
				  	</ol>  
				<h3>Memory View Layout</h3>
				  	<ol>
				  		<li>show and Hide Memory Monitors Pane</li>
				  		<li>show and Hide Renderings Pane</li>
				  		<li>try with having multiple memory views</li>
				  		<li>preferences are persisted across workbench restart</li>
				  		<li>vertical vs Horizontal Orientation</li>
				  	</ol>
			<p><a href="#top">Back to top</a><br><hr></p><p>&nbsp;</p>
			<a name="Modules"></a>
			<h2><b>Modules View</b></h2>
				<h3>General</h3>
					<ol>
					  	<li>Modules View can be populated with flexible hierarchy</li>
					  	<li>Find...</li>
					  	<li>details pane can be populated</li>
					</ol>
			<p><a href="#top">Back to top</a><br><hr></p><p>&nbsp;</p>
			<a name="Registers"></a>
			<h2><b>Registers View</b></h2>
				<h3>General</h3>
					<ol>
					  	<li>the Registers View can be populated with Register Group and Registers</li>
					  	<li>register values get updated when their values change</li>
					  	<li>modify register values</li>
					  	<li>find a register</li>
					  	<li>copy registers</li>				  
					  	<li>turn column on and off</li>
					  	<li>show and hide columns</li>
					  	<li>details pane shows details of registers</li>
					  	<li>top index and expansion of registers are maintained after each step or switching stack frame</li>
					</ol>
			<p><a href="#top">Back to top</a><br><hr></p><p>&nbsp;</p>			
			<a name="Breakpoint_Toggle_Types"></a>
			<h2><b>Breakpoint Toggle Types</b></h2>
				<h3>General</h3>
					<ol>
					  	<li>use the PDA example debugger to test this feature.  The PDA debugger supports different watchpoint 
					      types which can be toggled in the editor and the variables view</li>
					  	<li>breakpoint toggle actions can have multiple targets (i.e. handlers) registered for them.  If a 
					      debugger is installed, which registers multiple breakpoint targets, the Breakpoint Types sub-menu 
					      appears in the Run menu</li>
					  	<li>select different breakpoint types</li>
					  	<li>toggle breakpoints in different locations (editor and view)</li>
					  	<li>check that user-selected breakpoint type is persisted</li>
					</ol>
			<p><a href="#top">Back to top</a><br><hr></p><p>&nbsp;</p>			
		</div>
	</div>
	<div id="rightcolumn">
		$commonside
	</div>
</div>


EOHTML;

	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
