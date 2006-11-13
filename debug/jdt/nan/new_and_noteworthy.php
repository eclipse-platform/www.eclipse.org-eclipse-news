<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#
	# Author: 		Michael Rennie
	# Date:			November 10, 2006
	#
	# Description: This is a main page listing all of the new and noteworthy entries for the JDT debug project
	#
	#
	#****************************************************************************
	
	
	$pageTitle 		= "JDT Debug New and Noteworthy";
	$pageKeywords	= "debug, platform, debugging, debugger, breakpoints, launching";
	$pageAuthor		= "Debug Team";
	
	include("../../_sideCommon.php");
	include("../_pluginCommon.php");
	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<p>The JDT debug component is very responsive to new ideas, feature requests and bug reports. The following is a list of some 
			of the newest and more interesting additions to the component.</p>
		<div class="homeitem3col">
			<h3>New and Noteworthy for 3.3</h3>
			<p>Listing of new and noteworthy items separated by milestone:
				<ul>
					<li><a href="/eclipse/debug/jdt/nan/3.3/M1/nan.php">3.3 Milestone 1</a></li>
					<li><a href="/eclipse/debug/jdt/nan/3.3/M3/nan.php">3.3 Milestone 3</a></li>
				</ul>
			</p>
		</div>
		<div class="homeitem3col">
			<h3>New and Noteworthy for 3.2</h3>
			<p>Listing of new and noteworthy items separated by milestone:
				<ul>
					<li><a href="/eclipse/debug/jdt/nan/3.2/M2/nan.php">3.2 Milestone 2</a></li>
					<li><a href="/eclipse/debug/jdt/nan/3.2/M3/nan.php">3.2 Milestone 3</a></li>
					<li><a href="/eclipse/debug/jdt/nan/3.2/M4/nan.php">3.2 Milestone 4</a></li>
					<li><a href="/eclipse/debug/jdt/nan/3.2/M5/nan.php">3.2 Milestone 5</a></li>
					<li><a href="/eclipse/debug/jdt/nan/3.2/M6/nan.php">3.2 Milestone 6</a></li>
				</ul>
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
