<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# index.php
	#
	# Author: 		Michael Rennie
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
			
		</div>
		<div class="homeitem3col">
      		<h3>Development Efforts</h3>
		    <ul>
		    	<li>Overall <a href="/eclipse/debug/platform/dev_plans/r2_1-plan.php">2.1 plan</a></li>
		    	<li>Overall <a href="/eclipse/debug/platform/dev_plans/r3_0-plan.php">3.0 plan</a></li>
		    	<li>Overall <a href="/eclipse/debug/platform/dev_plans/r3_1-plan.php">3.1 plan</a></li>
				<li>Overall <a href="/eclipse/debug/platform/dev_plans/r3_2-plan.php">3.2 plan</a></li>
		    	<li>Overall <a href="/eclipse/debug/platform/dev_plans/r3_3-plan.php">3.3 plan</a></li>
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
	        </ul>
		</div>
		<div class="homeitem3col">
			<h3>Maintenance Efforts</h3>
     		<ul>
				<li>Fixes for <a href="">2.0.x</a></li>
				<li>Fixes for <a href="">2.1.x</a></li>
				<li>Fixes for <a href="">3.0.x</a></li>
				<li>Fixes for <a href="">3.2.x</a></li>
				<li>Fixes for <a href="">3.3.x</a></li>
	        </ul>
		</div>
	</div>
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Quick Links</h6>
			<ul>
				<li><a href="/eclipse/debug/documents.php">Articles & Documents</a></li>
				<li><a href="/eclipse/debug/get_involved.php">Get Involved!</a></li>
				<li><a href="/eclipse/debug/contribute.php">How To Contribute</a></li>
				<li><a href="/eclipse/debug/who.php">Who We Are</a></li>
				<li><a href="/eclipse/debug/about.php">About this content</a></li>
			</ul>
		</div>
		<div class="sideitem">
			<h6>Plugins</h6>
			<ul>
				<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.debug.core" target="_top">debug.core</a></li>
        		<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.debug.ui" target="_top">debug.ui</a></li>
			</ul>
		</div>
	</div>
</div>


EOHTML;

	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
