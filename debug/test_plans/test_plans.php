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
	# Date:			October 29, 2007
	#
	# Description: This page presents all test plans used and the milestones they were used for
	#
	#
	#****************************************************************************
	
	
	$pageTitle 		= "Debug Test Plans";
	$pageKeywords	= "debug, platform, debugging, debugger, breakpoints, launching, test, testing, plan, plans, 3.4, M3, 3.4M3";
	$pageAuthor		= "Debug Team";
	
	include("../_sideCommon.php");
	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<div class="homeitem3col">
			<h3>3.4 Test Plans</h3>
			<a name="3-4_testing"></a>
			<ul>
				<li><a href="/eclipse/debug/test_plans/test_plan-3.4M2.php">3.4M2</a></li>
				<li><a href="/eclipse/debug/test_plans/test_plan-3.4M3.php">3.4M3</a></li>
			</ul>
		</div>
		<div class="homeitem3col">
			<h3>3.3 Test Plans</h3>
			<a name="3-3_testing"></a>
			<ul>
				<li><a href="/eclipse/debug/test_plans/test_plan-3.3.php">3.3</a></li>
			</ul>
		</div>
		<div class="homeitem3col">
			<h3>3.2 Test Plans</h3>
			<a name="3-2_testing"></a>
			<ul>
				<li><a href="/eclipse/debug/test_plans/test_plan-3.2.php">3.2</a></li>
			</ul>
		</div>
		<div class="homeitem3col">
			<h3>3.1 Test Plans</h3>
			<a name="3-1_testing"></a>
			<ul>
				<li><a href="/eclipse/debug/test_plans/test_plan-3.1.php">3.1</a></li>
			</ul>
		</div>
		<div class="homeitem3col">
			<h3>3.0 Test Plans</h3>
			<a name="3-0_testing"></a>
			<ul>
				<li><a href="/eclipse/debug/test_plans/test_plan-3.0.php">3.0</a></li>
			</ul>
		</div>
		<div class="homeitem3col">
			<h3>2.1 Test Plans</h3>
			<a name="2-1_testing"></a>
			<ul>
				<li><a href="/eclipse/debug/test_plans/test_plan-2.1.php">2.1</a></li>
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
