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
		<div class="homeitem3col">
			<h3>Maintenance Efforts</h3>
     		<ul>
				<li>Fixes for <a target="_blank" href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&classification=Eclipse&product=JDT&component=Debug&target_milestone=2.0+F1&target_milestone=2.0+F2&target_milestone=2.0+F3&target_milestone=2.0+F4&target_milestone=2.0+M1&target_milestone=2.0+M2&target_milestone=2.0+M3&target_milestone=2.0+M4&target_milestone=2.0+M5&target_milestone=2.0+M6&target_milestone=2.0.1&target_milestone=2.0.2&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&resolution=FIXED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Bug+Number&field0-0-0=noop&type0-0-0=noop&value0-0-0=">2.0.x</a></li>
				<li>Fixes for <a target="_blank" href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&classification=Eclipse&product=JDT&component=Debug&target_milestone=2.1&target_milestone=2.1+M1&target_milestone=2.1+M2&target_milestone=2.1+M3&target_milestone=2.1+M4&target_milestone=2.1+M5&target_milestone=2.1+RC1&target_milestone=2.1+RC2&target_milestone=2.1+RC3&target_milestone=2.1+RC4&target_milestone=2.1.1&target_milestone=2.1.2&target_milestone=2.1.3&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&resolution=FIXED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Bug+Number&field0-0-0=noop&type0-0-0=noop&value0-0-0=">2.1.x</a></li>
				<li>Fixes for <a target="_blank" href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&classification=Eclipse&product=JDT&component=Debug&target_milestone=3.0&target_milestone=3.0+M1&target_milestone=3.0+M2&target_milestone=3.0+M3&target_milestone=3.0+M4&target_milestone=3.0+M5&target_milestone=3.0+M6&target_milestone=3.0+M7&target_milestone=3.0+M8&target_milestone=3.0+M9&target_milestone=3.0+RC1&target_milestone=3.0+RC2&target_milestone=3.0+RC3&target_milestone=3.0+RC4&target_milestone=3.0.1&target_milestone=3.0.2&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&resolution=FIXED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Bug+Number&field0-0-0=noop&type0-0-0=noop&value0-0-0=">3.0.x</a></li>
				<li>Fixes for <a target="_blank" href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&classification=Eclipse&product=JDT&component=Debug&target_milestone=3.1&target_milestone=3.1+M1&target_milestone=3.1+M2&target_milestone=3.1+M3&target_milestone=3.1+M4&target_milestone=3.1+M5&target_milestone=3.1+M6&target_milestone=3.1+M7&target_milestone=3.1+RC1&target_milestone=3.1+RC2&target_milestone=3.1+RC3&target_milestone=3.1+RC4&target_milestone=3.1.1&target_milestone=3.1.2&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&resolution=FIXED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Bug+Number&field0-0-0=noop&type0-0-0=noop&value0-0-0=">3.1.x</a></li>
				<li>Fixes for <a target="_blank" href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&classification=Eclipse&product=JDT&component=Debug&target_milestone=3.2&target_milestone=3.2+M1&target_milestone=3.2+M2&target_milestone=3.2+M3&target_milestone=3.2+M4&target_milestone=3.2+M5&target_milestone=3.2+M6&target_milestone=3.2+RC1&target_milestone=3.2+RC2&target_milestone=3.2+RC3&target_milestone=3.2+RC4&target_milestone=3.2+RC5&target_milestone=3.2+RC6&target_milestone=3.2+RC7&target_milestone=3.2.1&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&resolution=FIXED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Bug+Number&field0-0-0=noop&type0-0-0=noop&value0-0-0=">3.2.x</a></li>
				<li>Fixes (so far) for <a target="_blank" href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&classification=Eclipse&product=JDT&component=Debug&target_milestone=3.3&target_milestone=3.3+M1&target_milestone=3.3+M2&target_milestone=3.3+M3&target_milestone=3.3+M4&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&resolution=FIXED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Bug+Number&field0-0-0=noop&type0-0-0=noop&value0-0-0=">3.3.x</a></li>
	        </ul>
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
				<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.jdt.debug" target="_blank">jdt.debug</a></li>
		        <li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.jdt.debug.ui" target="_blank">jdt.debug.ui</a></li>
		        <li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.jdt.launching" target="_blank">jdt.launching</a></li>
		        <li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.jdt.launching.j9" target="_blank">jdt.launching.j9</a></li>
		        <li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.jdt.launching.macosx" target="_blank">jdt.launching.macosx</a></li>
		        <li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.jdt.debug.tests." target="_blank">jdt.debug.tests</a></li>
		        <li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.jdt.debug.jdi.tests" target="_blank">jdt.debug.jdi.tests</a></li>
			</ul>
		</div>
	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
