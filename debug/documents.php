<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# documents.php
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
	
	include("_sideCommon.php");
	
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
				<li>For the 3.3M3 release we are working on moving away from strict mode-based launching to an extensible 'options-based' scheme.
				The following <a href="/eclipse/debug/documents/migration_path.pdf" target="_blank">migration guide</a> describes how you can migrate your launching contributions to use the new scheme.
				<br><br>
				Information about the changes to the launching framework, and the sourcecode needed for the debug plugins can be found on the following 
				<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=157059" target="_blank">bug report</a>.
				<br>
				<blockquote>
					<p>An example project which contributes a tab to the Java Application tab group, a launch option called 'fooapplet', and a delegate can be found <a href="/eclipse/debug/misc/launch_option_example.zip" target="_blank">here</a>.</p>
				</blockquote>
				</li>
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
		$commonside
	</div>
</div>


EOHTML;

	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
