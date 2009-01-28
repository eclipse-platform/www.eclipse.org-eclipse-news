<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# Copyright (c) 2007, 2008 IBM Corporation and others.
 	# All rights reserved. This program and the accompanying materials
 	# are made available under the terms of the Eclipse Public License v1.0
 	# which accompanies this distribution, and is available at
 	# http://www.eclipse.org/legal/epl-v10.html
 	# Contributors:
	#     IBM Corporation - initial implementation
	#
	# Author: 		Debug Team
	# Date:			August 22, 2006
	#
	# Description: This is the new main page for the Debug Team website, the old main
	#			   page will redirect to this one in case community members are using old links
	#
	#
	#****************************************************************************
	
	$pageTitle 		= "Eclipse Debug Project";
	$pageKeywords	= "debug, platform, debugging, debugger, jdt, breakpoints";
	$pageAuthor		= "Debug Team";
	
	include("_sideCommon.php");
	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<div class="homeitem">
			<h3>Debug Project Overview</h3>
			
			<p>The Eclipse Debug Project is not a single project unto itself, it is in fact comprised of 
			two distinct sub-projects: Platform Debug and JDT Debug.</p>
			
			<p><em>Platform Debug</em> defines interfaces for a language
		    independent debug model which abstract common debugging features of many
		    languages, whereas, <em>JDT Debug</em> provides an implementation of platform 
		    debug providing Java debugging support and works with any JDPA-compliant target Java VM.</p>
		    
		    <p>Both Platform and JDT Debug are built into Eclipse and ship as part of the Eclipse SDK. 
		</div>
		<div class="homeitem">
			<h3>Debug Components</h3>
			
			<p>As mentioned the Debug Project is broken down into two smaller sub-projects, each with 
			its own set of committers, projects goals and plans, bug categories and mailing lists.</p>
			<blockquote>
				<table width="100%" border="0" summary="The list of sub-projects for the Debug Project">
					<thead>
						<tr>
						<th width="30%" colspan="1" rowspan="1" align="left">Name</th>
						<th width="70%" colspan="1" rowspan="1" align="left">Description</th>
						</tr>
					</thead>
					<tbody>
					<tr> 
						<td width="30%" valign="top"><a href="http://www.eclipse.org/eclipse/debug/platform/">Platform Debug</a></td>
						<td width="70%">The language independent debug model</td>
					</tr>
					<tr> 
						<td width="30%" valign="top"><a href="http://www.eclipse.org/eclipse/debug/jdt/">JDT Debug</a></td>
						<td width="70%">The Java implementation of the platform debug component</td>
					</tr>
					</tbody>
				</table>
			</blockquote>
		</div>
		<div class="homeitem">
			<h3>New and Noteworthy</h3>
			<p>The JDT debug component is very responsive to new ideas, feature requests and bug reports. The following is a list of some 
			of the newest and more interesting additions to the component.</p>
			<p>For a complete listing of new and noteworthy entries check the <a href="/eclipse/debug/nan/new_and_noteworthy.php">New and Noteworthy</a> page.</p>
		</div>
		<div class="homeitem">
			<h3>Up To The Minute</h3>
			<ul>
			<li style="border:0;padding:1px;list-style:none;">Our manual testing programs our now available for <a href="/eclipse/debug/misc/ManualTestingPrograms.zip">download</a>.  Happy testing!
			<li style="border:0;padding:1px;list-style:none;">The debug utils, which helps in verifying bugs, is now available via update site (with p2 metadata) at <a href="http://www.eclipse.org/eclipse/debug/update/">www.eclipse.org/eclipse/debug/update/</a></li>
			<li style="border:0;padding:1px;list-style:none;">We are presenting two tutorials at EclipseCon 2008.  The presentations are available for both <a target="_blank" href="/eclipse/debug/documents/ec_2008/Debug_Tutorial_Basic_2008.ppt">Debug Platform: The Basics</a> and <a target="_blank" href="/eclipse/debug/documents/ec_2008/Debug_Tutorial_Custom_Integration_2008.ppt">Debug Platform: Custom Integration</a>. More
			information can be found on the <a href="/eclipse/debug/documents.php">Documents</a> page along with exercises.
			</li>
			<li style="border:0;padding:1px;list-style:none;">To help new contributors, we have created a <a href="/eclipse/debug/documents/project_sets/debug.psf" target="_blank">project set file</a> containing all of the projects needed to get started with debug coding.
			There is also a project set file for <a href="/eclipse/debug/documents/project_sets/debug3.3.1.psf" target="_blank">3.3.1 maintenance</a>.</li>
			<li style="border:0;padding:1px;list-style:none;">Debug overall <a href="/eclipse/debug/platform/dev_plans/r3_5/plan.php">3.5 plan</a></li>
			<li style="border:0;padding:1px;list-style:none;"><a href="/eclipse/debug/test_plans/test_plans.php#3-5_testing">Debug 3.5 Test Matrix</a></li>
			</ul>
		</div>
	</div>
	<div id="rightcolumn">
		$commonside
	</div>
</div>

EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
