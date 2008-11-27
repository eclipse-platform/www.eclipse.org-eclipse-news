<?php

require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	

$App = new App();	
$Nav = new Nav();	
$Menu = new Menu();		

include($App->getProjectCommon());

	#*****************************************************************************
	#
	# Copyright (c) 2008 IBM Corporation and others.
 	# All rights reserved. This program and the accompanying materials
 	# are made available under the terms of the Eclipse Public License v1.0
 	# which accompanies this distribution, and is available at
 	# http://www.eclipse.org/legal/epl-v10.html
 	# Contributors:
	#     IBM Corporation - initial implementation
	#
	# Author: 		Ant Team
	# Date:			November 26, 2008
	#
	# Description: This is a main page listing all of the new and noteworthy entries for the Ant project
	#
	#
	#****************************************************************************
	
	
	$pageTitle 		= "Ant Project New and Noteworthy";
	$pageKeywords	= "ant, script, build, xml, platform, debugging, debugger, breakpoints, launching, new, noteworthy, new and noteworthy";
	$pageAuthor		= "Ant Team";
	
	include("../_sideCommon.php");
	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<p>The Ant component is very responsive to new ideas, feature requests and bug reports. The following is a list of some 
			of the newest and more interesting additions to the component.</p>
		<div class="homeitem3col">
			<h3>New and Noteworthy for 3.4</h3>
			<p>Listing of new and noteworthy items separated by milestone:
				<ul>
				</ul>
			</p>
		</div>
		<div class="homeitem3col">
			<h3>New and Noteworthy for 3.3</h3>
			<p>Listing of new and noteworthy items separated by milestone:
				<ul>
				</ul>
			</p>
		</div>
		<div class="homeitem3col">
			<h3>New and Noteworthy for 3.2</h3>
			<p>Listing of new and noteworthy items separated by milestone:
				<ul>
				</ul>
			</p>
		</div>
		<div class="homeitem3col">
			<h3>New and Noteworthy for 3.1</h3>
			<p>Listing of new and noteworthy items separated by milestone:
				<ul>
				</ul>
			</p>
		</div>
		<div class="homeitem3col">
			<h3>New and Noteworthy for 3.0</h3>
			<p>Listing of new and noteworthy items separated by milestone:
				<ul>
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
