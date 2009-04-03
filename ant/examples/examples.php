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
	# Copyright (c) 2008 IBM Corporation and others.
 	# All rights reserved. This program and the accompanying materials
 	# are made available under the terms of the Eclipse Public License v1.0
 	# which accompanies this distribution, and is available at
 	# http://www.eclipse.org/legal/epl-v10.html
 	# Contributors:
	#     IBM Corporation - initial implementation
	#
	# Author: 		Ant Team
	# Date:			November 28, 2008
	#
	# Description: This page hosts example Ant scripts
	#
	#
	#****************************************************************************
	
	
	$pageTitle 		= "Example Ant Scripts";
	$pageKeywords	= "ant, script, platform, debugging, debugger, breakpoints, launching";
	$pageAuthor		= "Ant Team";
	
	include("../_sideCommon.php");
	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<div class="homeitem3col">
			<h2><b>External Tool Builders</b></h2>
			<ul>
				<li>The tool builder used by <a href="http://dev.eclipse.org/viewcvs/index.cgi/pde/apitools/org.eclipse.pde.api.tools/scripts/buildApiToolsAntSupportJar.xml?view=log" target="_blank">org.eclipse.pde.api.tools</a> to build the jar of Ant tasks usable
					in a RelEng build setting</li>
				<li>The tool builder use by <a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.jdt.launching/scripts/buildLaunchingSupportJAR.xml?view=log" target="_blank">org.eclipse.jdt.launching</a> to provide launching support tooling.</li>
			</ul>
		</div>
		<div class="homeitem3col">
			<h2><b>Commandline Scripts</b></h2>
			<ul>
				<li>The task available <a href="http://dev.eclipse.org/viewcvs/index.cgi/pde/apitools/org.eclipse.pde.api.tools/scripts/api-tasks.xml?view=log" target="_blank">here</a> is used to run the API tools Ant tasks from the command line, along with its required
				.properties file available <a href="http://dev.eclipse.org/viewcvs/index.cgi/pde/apitools/org.eclipse.pde.api.tools/scripts/api-tasks.properties?view=log" target="_blank">here</a>.</li>
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
