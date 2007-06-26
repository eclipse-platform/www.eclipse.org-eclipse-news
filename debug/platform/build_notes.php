<?php  	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	
	$App 	= new App();	
	$Nav	= new Nav();	
	$Menu 	= new Menu();		
	include($App->getProjectCommon());

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
	# Date:			June 26 2007
	#
	# Description: this page contains the up to the minute build notes for the platform debugger
	#				and contains links to old sets of build notes
	#
	#
	#****************************************************************************
	
	
	$pageTitle 		= "Platform Debug Build Notes";
	$pageKeywords	= "debug, platform, debugging, debugger, breakpoints, launching, build, notes";
	$pageAuthor		= "Debug Team";
	
	include("../_sideCommon.php");
	include("_pluginCommon.php");
	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<div class="homeitem3col">
			<a name="uptotheminute"/>
			<h3>Up to the Minute Build Notes</h3>
			<ul>
				<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/~checkout~/org.eclipse.debug.core/buildnotes_platform-debug.html" target="_blank">build notes</a></li>
			</ul>
		</div>
		<div class="homeitem3col">
			<a name="previous"/>
			<h3>Build Notes For Previous Releases</h3>
			<ul>
				
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
