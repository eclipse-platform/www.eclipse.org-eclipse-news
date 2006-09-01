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

	$pageTitle 		= "Debug Project Related Documents";
	$pageKeywords	= "debug, platform, debugging, debugger, breakpoints, launching, documents, articles, papers";
	$pageAuthor		= "Debug Team";	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<div class="homeitem3col">
			<h3>Articles</h3>
			<ul>
				
			</ul>
		</div>
		<div class="homeitem3col">
			<h3>EclipseCon Presentations</h3>
			<ul>
				<li>EclipseCon 2005 - <a target="_blank" href="/eclipse/debug/documents/debugger_eclipsecon_2005.pdf">Debug Platform / Java Debugger 3.1</a></li>
				<li>EclipseCon 2006 - <a target="_blank" href="/eclipse/debug/documents/debugger_Supporting-a-Community-of-Debuggers.pdf">The Eclipse 3.2 Debug Platform: Supporting a community of debuggers</a></li>
				<li>EclipseCon 2006 - <a target="_blank" href="/eclipse/debug/documents/debugger_Advanced-Debug-Tutorial.pdf">Integrating Custom Debuggers into the Eclipse Platform</a><br>
					<blockquote>
					<p>The associated exercises are available <a href="/eclipse/debug/documents/EC2006_exercises-advanced-tutorial.php">here</a></p>
					</blockquote></li>
				<li>EclipseCon 2006 - <a target="_blank" href="/eclipse/debug/documents/debugger_Basic-Debug-Tutorial.pdf">The Eclipse Debug Framework</a><br>
					<blockquote>
					<p>The associated exercises are available <a href="/eclipse/debug/documents/EC2006_exercises-basic-tutorial.php">here</a></p>
					</blockquote></li>
			</ul>
		</div>
		<div class="homeitem3col">
			<h3>Miscellaneous Documents</h3>
			<ul>
				
			</ul>
		</div>
		<div class="homeitem3col">
			<h3>Miscellaneous Source Artifacts</h3>
			<ul>
				<li>Debug.util is a small helper plugin we use to update our build notes files once we verify bugs. To use it, simply download the plugin
				<a href="/eclipse/debug/misc/org.eclipse.debug.util.101.zip">here</a> and enabled it in your workspace. Once that is done to actually 'use' it, place the cursor at the position in your
				build notes document and click <b>Run->Verify Bug...</b> and enter the number of the bug you verified. The tool will then insert the 
				corresponding html into the build notes document.<br> The source for the plugin is located <a href="/eclipse/debug/misc/utilsrc.zip">here</a> for interested parties.</li>
			</ul>
		</div>
	</div>
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Quick Links</h6>
			<ul>
				<li><a href="/eclipse/debug/get_involved.php">Get Involved!</a></li>
				<li><a href="/eclipse/debug/contribute.php">How To Contribute</a></li>
				<li><a href="/eclipse/debug/who.php">Who We Are</a></li>
				<li><a href="http://eclipse-debug.blogspot.com/">Debug Team Blog</a></li>
				<li><a href="/eclipse/debug/about.php">About this content</a></li>
			</ul>
		</div>
	</div>
</div>


EOHTML;

	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
