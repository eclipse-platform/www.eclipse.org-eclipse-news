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
	# Date:			November 10, 2006
	#
	# Description: This is a main page listing all of the new and noteworthy entries for the debug project
	#
	#
	#****************************************************************************
	
	
	$pageTitle 		= "Debug Project New and Noteworthy";
	$pageKeywords	= "debug, platform, debugging, debugger, breakpoints, launching, new, noteworthy, new and noteworthy";
	$pageAuthor		= "Debug Team";
	
	include("../_sideCommon.php");
	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<p>The debug component is very responsive to new ideas, feature requests and bug reports. The following is a list of some 
			of the newest and more interesting additions to the component.</p>
		<div class="homeitem3col">
			<h3>New and Noteworthy for 3.4</h3>
			<p>Listing of new and noteworthy items separated by milestone:
				<ul>
					<li><a href="/eclipse/debug/nan/3.4/M1/nan.php">Milestone 1</a></li>
					<li><a href="/eclipse/debug/nan/3.4/M2/nan.php">Milestone 2</a></li>
				</ul>
			</p>
		</div>
		<div class="homeitem3col">
			<h3>New and Noteworthy for 3.3</h3>
			<p>Listing of new and noteworthy items separated by milestone:
				<ul>
					<li><a href="/eclipse/debug/nan/3.3/M1/nan.php">Milestone 1</a></li>
					<li><a href="/eclipse/debug/nan/3.3/M3/nan.php">Milestone 3</a></li>
					<li><a href="/eclipse/debug/nan/3.3/M4/nan.php">Milestone 4</a></li>
					<li><a href="/eclipse/debug/nan/3.3/M6/nan.php">Milestone 6</a></li>
					<li><a href="/eclipse/debug/nan/3.3/M7/nan.php">Milestone 7</a></li>
				</ul>
			</p>
		</div>
		<div class="homeitem3col">
			<h3>New and Noteworthy for 3.2</h3>
			<p>Listing of new and noteworthy items separated by milestone:
				<ul>
					<li><a href="/eclipse/debug/nan/3.2/M2/nan.php">Milestone 2</a></li>
					<li><a href="/eclipse/debug/nan/3.2/M3/nan.php">Milestone 3</a></li>
					<li><a href="/eclipse/debug/nan/3.2/M4/nan.php">Milestone 4</a></li>
					<li><a href="/eclipse/debug/nan/3.2/M5/nan.php">Milestone 5</a></li>
					<li><a href="/eclipse/debug/nan/3.2/M6/nan.php">Milestone 6</a></li>
				</ul>
			</p>
		</div>
		<div class="homeitem3col">
			<h3>New and Noteworthy for 3.1</h3>
			<p>Listing of new and noteworthy items separated by milestone:
				<ul>
					<li><a href="/eclipse/debug/nan/3.1/M1/nan.php">Milestone 1</a></li>
					<li><a href="/eclipse/debug/nan/3.1/M2/nan.php">Milestone 2</a></li>
					<li><a href="/eclipse/debug/nan/3.1/M3/nan.php">Milestone 3</a></li>
					<li><a href="/eclipse/debug/nan/3.1/M4/nan.php">Milestone 4</a></li>
					<li><a href="/eclipse/debug/nan/3.1/M5/nan.php">Milestone 5</a></li>
					<li><a href="/eclipse/debug/nan/3.1/M6/nan.php">Milestone 6</a></li>
					<li><a href="/eclipse/debug/nan/3.1/M7/nan.php">Milestone 7</a></li>
				</ul>
			</p>
		</div>
		<div class="homeitem3col">
			<h3>New and Noteworthy for 3.0</h3>
			<p>Listing of new and noteworthy items separated by milestone:
				<ul>
					<li><a href="/eclipse/debug/nan/3.0/M7/nan.php">Milestone 7</a></li>
					<li><a href="/eclipse/debug/nan/3.0/M8/nan.php">Milestone 8</a></li>
					<li><a href="/eclipse/debug/nan/3.0/M9/nan.php">Milestone 9</a></li>
				</ul>
			</p>
		</div>
	</div>
	<div id="rightcolumn">
		$commonside
	</div>
</div>


EOHTML;

	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
