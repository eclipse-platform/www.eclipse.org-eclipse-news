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
	$pageKeywords	= "debug, platform, debugging, debugger, jdt, breakpoints";
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
	</div>
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Quick Links</h6>
			<ul>
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
