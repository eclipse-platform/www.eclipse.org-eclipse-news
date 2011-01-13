<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# Copyright (c) 2007, 2011 IBM Corporation and others.
 	# All rights reserved. This program and the accompanying materials
 	# are made available under the terms of the Eclipse Public License v1.0
 	# which accompanies this distribution, and is available at
 	# http://www.eclipse.org/legal/epl-v10.html
 	# Contributors:
	#     IBM Corporation - initial implementation
	#
	# Author: 		Debug Team
	# Date:			August 25, 2006
	#
	# Description: This is the new main page for the JDT Debug website, the old main
	#			   page will redirect to the new main page for the site: www.eclipse.org/eclipse/debug/index.php
	#
	#
	#****************************************************************************

	$pageTitle 		= "JDT Debug";
	$pageKeywords	= "debug, platform, debugging, debugger, jdt, breakpoints";
	$pageAuthor		= "Debug Team";

	include("../_sideCommon.php");
	include("_pluginCommon.php");

	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		
		<div class="homeitem3col">
		<h2><b>JDT Debug Overview</b></h2>
			<p> JDT Debug implements Java debugging support and works with any JDPA-compliant target 
	      		Java VM. It is implemented on top of the language independent &quot;debug 
	      		model&quot; provided by the platform debugger.</p>
	      		
      		<p>JDT debug provides the following debugging functionality:</font></p>
	        <ul>
		        <li>Launching of a Java VM in either run or debug mode</li> 
		        <li>Attaching to a running Java VM</li>
		        <li>Expression evaluation in the context of a stack frame</li> 
		        <li>Scrapbook pages for interactive Java code snippet evaluation</li> 
		        <li>Dynamic class reloading where supported by Java virtual machine</li>
	        </ul>
	        
      		<p>Using a J9 virtual machine:</p>
	        <ul>
		        <li> <a href="../j9/j9_launching.php">J9 launching support</a></li>
	        </ul>
		</div>
		<div class="homeitem3col">
			<h2><b>New and Noteworthy</b></h2>
			<p>The JDT debug component is very responsive to new ideas, feature requests and bug reports. The following is a list of some 
			of the newest and more interesting additions to the component.</p>
			<ul>
			<li>The latest entry of noteworthy interest is <a href="/eclipse/debug/nan/3.3/M7/nan.php">3.3 Milestone 7</a></li>
			<li>In the 3.3M7 release we have significant changes to launching, logical structures and new export features.</li>
			<li>For a complete listing of new and noteworthy entries check the <a href="/eclipse/debug/nan/new_and_noteworthy.php">New and Noteworthy</a> page.</li>
			</ul>
		</div>
		<div class="homeitem3col">
			<h2><b>Test Plans</b></h2>
			<p>While testing, ensure that keyboard navigation is available and works, in 
			  addition to using the mouse. Ensure that keyboard accelerators are available 
			  for each menu item, and that conflicts are not present. Also try assigning alternate 
			  keybindings to applicable actions. File a bug when something does not work. When 
			  a test can be automated and is not part of our test suite, add a JUnit test 
			  to the test suite.</p>
     		<p>
     			The test script to be used for testing is found on <a href="wiki.eclipse.org/Debug/Test_Script">our wiki</a>.
     		</p>
		</div>
	</div>
	<div id="rightcolumn">
		$commonside
		$commonplugin
	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
