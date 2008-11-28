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
			<h3>External Tool Builders</h3>
			<ul>
				<li>The tool builder used by <a href="/eclipse/ant/examples/tool_builders/buildApiToolsAntSupportJar.xml" target="_blank">org.eclipse.pde.api.tools</a> to build the jar of Ant tasks usable
					in a RelEng build setting</li>
				<li>The tool builder use by <a href="/eclipse/ant/examples/tool_builders/buildLaunchingSupportJAR.xml" target="_blank">org.eclipse.jdt.launching</a> to provide launching support tooling.</li>
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
