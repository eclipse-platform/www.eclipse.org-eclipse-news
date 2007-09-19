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
			<h3>Platform Debug Overview</h3>
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
			<h3>New and Noteworthy</h3>
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
      		<h3>Development Efforts</h3>
		    <ul>
		    	<li>Overall <a href="/eclipse/debug/platform/dev_plans/r2_1-plan.php">2.1 plan</a></li>
		    	<li>Overall <a href="/eclipse/debug/platform/dev_plans/r3_0-plan.php">3.0 plan</a></li>
		    	<li>Overall <a href="/eclipse/debug/platform/dev_plans/r3_1-plan.php">3.1 plan</a></li>
				<li>Overall <a href="/eclipse/debug/platform/dev_plans/r3_2-plan.php">3.2 plan</a></li>
		    	<li>Overall <a href="/eclipse/debug/platform/dev_plans/r3_3-plan.php">3.3 plan</a></li>
				<li>Overall <a href="/eclipse/debug/platform/dev_plans/r3_4-plan.php">3.4 plan</a></li>
		    </ul>
		    <p>For more detailed information, check out the <a href="/eclipse/debug/platform/dev_resources.php">Development Resources</a>.</p>
		</div>
		<div class="homeitem3col">
			<h3>Test Plans</h3>
			<p>While testing, ensure that keyboard navigation is available and works, in 
			  addition to using the mouse. Ensure that keyboard accelerators are available 
			  for each menu item, and that conflicts are not present. Also try assigning alternate 
			  keybindings to applicable actions. File a bug when something does not work. When 
			  a test can be automated and is not part of our test suite, add a JUnit test 
			  to the test suite.</p>
     		<ul>
				<li>Test matrix for <a href="/eclipse/debug/test_plans/test_plan-2.1.php">2.1.x</a></li>
				<li>Test matrix for <a href="/eclipse/debug/test_plans/test_plan-3.0.php">3.0.x</a></li>
				<li>Test matrix for <a href="/eclipse/debug/test_plans/test_plan-3.1.php">3.1.x</a></li>
				<li>Test matrix for <a href="/eclipse/debug/test_plans/test_plan-3.2.php">3.2.x</a></li>
				<li>Test matrix for <a href="/eclipse/debug/test_plans/test_plan-3.3.php">3.3.x</a></li>
				<li>Test matrix for <a href="/eclipse/debug/test_plans/test_plan-3.4.php">3.4.x</a></li>
	        </ul>
		</div>
		<div class="homeitem3col">
			<h3>Maintenance Efforts</h3>
     		<ul>
				<li>Fixes for <a target="_blank" href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&classification=Eclipse&product=Platform&component=Debug&target_milestone=2.0+F1&target_milestone=2.0+F2&target_milestone=2.0+F3&target_milestone=2.0+F4&target_milestone=2.0+M1&target_milestone=2.0+M2&target_milestone=2.0+M3&target_milestone=2.0+M4&target_milestone=2.0+M5&target_milestone=2.0+M6&target_milestone=2.0.1&target_milestone=2.0.2&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&resolution=FIXED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Bug+Number&field0-0-0=noop&type0-0-0=noop&value0-0-0=">2.0.x</a></li>
				<li>Fixes for <a target="_blank" href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&classification=Eclipse&product=Platform&component=Debug&target_milestone=2.1&target_milestone=2.1+M1&target_milestone=2.1+M2&target_milestone=2.1+M3&target_milestone=2.1+M4&target_milestone=2.1+M5&target_milestone=2.1+RC1&target_milestone=2.1+RC2&target_milestone=2.1+RC3&target_milestone=2.1+RC4&target_milestone=2.1.1&target_milestone=2.1.2&target_milestone=2.1.3&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&resolution=FIXED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Bug+Number&field0-0-0=noop&type0-0-0=noop&value0-0-0=">2.1.x</a></li>
				<li>Fixes for <a target="_blank" href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&classification=Eclipse&product=Platform&component=Debug&target_milestone=3.0&target_milestone=3.0+M1&target_milestone=3.0+M2&target_milestone=3.0+M3&target_milestone=3.0+M4&target_milestone=3.0+M5&target_milestone=3.0+M6&target_milestone=3.0+M7&target_milestone=3.0+M8&target_milestone=3.0+M9&target_milestone=3.0+RC1&target_milestone=3.0+RC2&target_milestone=3.0+RC3&target_milestone=3.0+RC4&target_milestone=3.0.1&target_milestone=3.0.2&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&resolution=FIXED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Bug+Number&field0-0-0=noop&type0-0-0=noop&value0-0-0=">3.0.x</a></li>
				<li>Fixes for <a target="_blank" href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&classification=Eclipse&product=Platform&component=Debug&target_milestone=3.1&target_milestone=3.1+M1&target_milestone=3.1+M2&target_milestone=3.1+M3&target_milestone=3.1+M4&target_milestone=3.1+M5&target_milestone=3.1+M6&target_milestone=3.1+M7&target_milestone=3.1+RC1&target_milestone=3.1+RC2&target_milestone=3.1+RC3&target_milestone=3.1+RC4&target_milestone=3.1.1&target_milestone=3.1.2&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&resolution=FIXED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Bug+Number&field0-0-0=noop&type0-0-0=noop&value0-0-0=">3.1.x</a></li>
				<li>Fixes for <a target="_blank" href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&classification=Eclipse&product=Platform&component=Debug&target_milestone=3.2&target_milestone=3.2+M1&target_milestone=3.2+M2&target_milestone=3.2+M3&target_milestone=3.2+M4&target_milestone=3.2+M5&target_milestone=3.2+M6&target_milestone=3.2+RC1&target_milestone=3.2+RC2&target_milestone=3.2+RC3&target_milestone=3.2+RC4&target_milestone=3.2+RC5&target_milestone=3.2+RC6&target_milestone=3.2+RC7&target_milestone=3.2.1&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&resolution=FIXED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Bug+Number&field0-0-0=noop&type0-0-0=noop&value0-0-0=">3.2.x</a></li>
				<li>Fixes (so far) for <a target="_blank" href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&classification=Eclipse&product=Platform&component=Debug&target_milestone=3.3&target_milestone=3.3+M1&target_milestone=3.3+M2&target_milestone=3.3+M3&target_milestone=3.3+M4&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&resolution=FIXED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Bug+Number&field0-0-0=noop&type0-0-0=noop&value0-0-0=">3.3.x</a></li>
	        </ul>
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
