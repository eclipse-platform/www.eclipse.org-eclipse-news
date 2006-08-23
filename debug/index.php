<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# index.php
	#
	# Author: 		Michael Rennie
	# Date:			August 22, 2006
	#
	# Description: This is the new main page for the Debug Team website, the old main
	#			   page will redirect to this one in case community members are using old links
	#
	#
	#****************************************************************************
	
	$pageTitle 		= "Eclipse Debug Project";
	$pageKeywords	= "debug, platform, debugging, debugger, jdt, breakpoints";
	$pageAuthor		= "Debug Team";

	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<h2>New Website</h2>
		<p>The Debug team has moved to Phoenix. 
			At this point our new home is still being built so we ask for your patience and understanding as we migrate all of our existing resources.</p>
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
</div>


EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
