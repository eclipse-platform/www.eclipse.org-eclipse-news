<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# index.php
	#
	# Author: 		Michael Rennie
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

	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		
		<div class="homeitem3col">
		<h3>JDT Debug Overview</h3>
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
	        
      		<p>Using a J9 vritual machine:</p>
	        <ul>
		        <li> <a href="plugins/org.eclipse.jdt.launching.j9/index.html">J9 launching support</a></li>
	        </ul>
		</div>
	</div>
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Quick Links</h6>
		</div>
		<div class="sideitem">
			<h6>Plugins</h6>
			<ul>
				<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.jdt.debug" target="_top">org.eclipse.jdt.debug</a></li>
		        <li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.jdt.debug.ui" target="_top">jdt.debug.ui</a></li>
		        <li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.jdt.launching" target="_top">jdt.launching</a></li>
		        <li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.jdt.launching.j9" target="_top">jdt.launching.j9</a></li>
		        <li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.jdt.launching.macosx" target="_top">jdt.launching.macosx</a></li>
		        <li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.jdt.debug.tests." target="_top">jdt.debug.tests</a></li>
		        <li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.jdt.debug.jdi.tests" target="_top">jdt.debug.jdi.tests</a></li>
			</ul>
		</div>
	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
