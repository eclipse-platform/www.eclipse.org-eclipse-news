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
	
	include("../../_sideCommon.php");
	include("../_pluginCommon.php");
	
	/*
	error_reporting(E_ALL);
			
	$filename = "http://dev.eclipse.org/viewcvs/index.cgi/~checkout~/org.eclipse.debug.core/buildnotes_platform-debug.html";
	$dataFile = fopen( $filename, "r" ) ;
    if ( $dataFile )  {
    	while (!feof($dataFile))   {
        	$contents .= fgets($dataFile, 4096);
    	}
    	fclose($dataFile);
    } else  {
    	$contents = <p>A connection to CVS could not be opened for streaming, so you'll have to look the old way by clicking the following link: <a href="http://dev.eclipse.org/viewcvs/index.cgi/~checkout~/org.eclipse.debug.core/buildnotes_platform-debug.html" target="_blank">here</a></p>
    }
	*/
	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<div class="homeitem3col">
			<a name="uptotheminute"></a>
			<h2><b>Up to the Minute Build Notes</b></h2>
				<p>
				A connection to CVS could not be opened for streaming, so you'll have to look the old way by 
				clicking the following link: <a href="http://dev.eclipse.org/viewcvs/index.cgi/~checkout~/org.eclipse.debug.core/buildnotes_platform-debug.html" target="_blank">here</a>
				</p>
		</div>
		<div class="homeitem3col">
			<a name="previous"></a>
			<h2><b>Build Notes For Previous Releases</b></h2>
			<ul>
				<li><a href="../../scripts/build_notes_proxy.php">2.0 Release</a></li>
				<li><a href="../../scripts/build_notes_proxy.php">2.1 Release</a></li>
				<li><a href="../../scripts/build_notes_proxy.php">3.0 Release</a></li>
				<li><a href="../../scripts/build_notes_proxy.php">3.1 Release</a></li>
				<li><a href="../../scripts/build_notes_proxy.php">3.2 Release</a></li>
				<li><a href="../../scripts/build_notes_proxy.php">3.2.1 Release</a></li>
				<li><a href="../../scripts/build_notes_proxy.php">3.2.2 Release</a></li>
				<li><a href="../../scripts/build_notes_proxy.php">3.3 Release</a></li>
				<li><a href="../../scripts/build_notes_proxy.php">3.3.1 Release</a></li>
			</ul>
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
