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
	# Description: This is the new main page for the Platform Debug website, the old main
	#			   page will redirect to the new main page for the site: www.eclipse.org/eclipse/debug/index.php
	#
	#
	#****************************************************************************

	$pageTitle 		= "Platform Debug";
	$pageKeywords	= "debug, platform, debugging, debugger, breakpoints, launching";
	$pageAuthor		= "Debug Team";
	
	include("../_sideCommon.php");
	include("_pluginCommon.php");
	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<div class="homeitem3col">
			<h2><b>Platform Debug Overview</b></h2>
			<p>The Debug component of the platform defines language independent
			    facilities and mechanisms for:</p>
		    <ul>
			    <li>Launching programs</li>
			    <li>Source lookup</li>
			    <li>Defining and registering breakpoints</li>
			    <li>Event notification from programs being debugged</li>
			    <li>A language independent debug model</li>
			    <li>A language independent debug UI</li>
		    </ul>
		    <p>The Debug component of the platform defines interfaces for a language
		    independent debug model, which abstract common debugging features of many
		    languages. The Debug component of the platform does not provide an
		    implementation of a debugger, it is the duty of other plug-ins to
		    provide language specific implementations of debuggers.</p>
		</div>
		<div class="homeitem3col">
			<h2><b>New and Noteworthy</b></h2>
			<p>The platform debug component is very responsive to new ideas, feature requests and bug reports. The following is a list of some 
			of the newest and more interesting additions to the component.</p>
			<ul>
				<li>The latest entry of noteworthy interest is <a href="/eclipse/debug/nan/3.3/M7/nan.php">3.3 Milestone 7</a></li>
				<li>In the 3.3M7 release we have significant changes to launching, logical structures and new export features. 
				More specific information can be found in the <a href="http://dev.eclipse.org/viewcvs/index.cgi/~checkout~/org.eclipse.debug.core/buildnotes_platform-debug.html" target="_blank">buld notes</a>.</li>
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

	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
