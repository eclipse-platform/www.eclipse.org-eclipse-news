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
	# Description: This is the new main page for the Platform Ant Team website, the old main
	#			   page will redirect to this one in case community members are using old links
	#
	#
	#****************************************************************************
	
	$pageTitle 		= "Platform Ant Project";
	$pageKeywords	= "ant, script, build, xml, platform, debugging, debugger, breakpoints";
	$pageAuthor		= "Ant Team";
	
	include("_sideCommon.php");
	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<div class="homeitem3col">
			<h2><b>Ant Project Overview</b></h2>
				<p>
					The Ant component is designed to bring the power of Ant and Eclipse together. 
        			Ant is a Java based build tool. In theory it is kind of like make without 
        			make's wrinkles. It exists independent of Eclipse as an <a target="_blank" href="http://ant.apache.org/" target="_top">Apache 
        			open source project</a>. Integrating Ant into Eclipse means:
        		</p>
      			<ul>
        			<li>Executing Ant buildfiles from Eclipse</li>
        			<li>Enabling access to Eclipse resources/function from Ant buildfiles (i.e., 
          				providing Ant tasks for Eclipse)</li>
        			<li>Providing UI support for running Ant buildfiles and managing their output</li>
        			<li>Providing Ant buildfile development facilities (e.g., buildfile editors, 
          				debuggers, ...)</li>
      			</ul>
      			<p>
      				The goal of this component is to make Eclipse's Ant tooling the environment 
        			of choice for Ant users and support Eclipse-based developers in their 
        			product build requirements.
        		</p>
		</div>
		<div class="homeitem3col">
			<h2><b>Ant Plug-ins</b></h2>
			<p>
				The Ant component consists of the following plug-ins:
			</p>
			<ul>
				<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.ant.core" target="_top">org.eclipse.ant.core</a></li>
				<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.ant.ui" target="_top">org.eclipse.ant.ui</a></li>
				<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.ui.externaltools" target="_top">org.eclipse.ui.externaltools</a></li>
				<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.ant.tests.core" target="_top">org.eclipse.ant.tests.core</a></li>
				<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.ant.tests.ui" target="_top">org.eclipse.ant.tests.ui</a></li>
			</ul>
		</div>
		<div class="homeitem3col">
			<h2><b>New and Noteworthy</b></h2>
			<p>
				For a complete listing of new and noteworthy entries check the 
				<a href="/eclipse/ant/nan/new_and_noteworthy.php">New and Noteworthy</a> page.</p>
		</div>
		<div class="homeitem3col">
			<h2><b>Up To The Minute</b></h2>
			<ul>
				<li>The debug utils, which helps in verifying bugs, is now available via update site (with p2 metadata) at 
				<a href="http://www.eclipse.org/eclipse/debug/update/">www.eclipse.org/eclipse/debug/update/</a></li>
				<li>To help new contributors, we have created a 
				<a href="/eclipse/ant/documents/project_sets/ant-pserver.psf" target="_blank">project set file</a> containing all of the projects needed to get started with Ant coding.</li>
				<li>Ant overall <a href="/eclipse/ant/platform/dev_plans/r3_5/plan.php">3.5 plan</a></li>
				<li><a href="/eclipse/ant/test_plans/test_plans.php#3-5_testing">Ant 3.5 Test Matrix</a></li>
			</ul>
		</div>
		<div class="homeitem3col">
			<h2><b>Maintenance Efforts</b></h2>
		      <ul>
		        <li>Fixes released to the <a href="http://bugs.eclipse.org/bugs/buglist.cgi?bug_status=VERIFIED&resolution=FIXED&email1=&emailtype1=substring&emailassigned_to1=1&email2=&emailtype2=substring&emailreporter2=1&bugidtype=include&bug_id=&changedin=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&product=Platform&component=Ant&target_milestone=2.0.1&target_milestone=2.0.2&short_desc=&short_desc_type=allwordssubstr&long_desc=&long_desc_type=allwordssubstr&keywords=&keywords_type=anywords&field0-0-0=noop&type0-0-0=noop&value0-0-0=&cmdtype=doit&namedcmd=2.0.1%2BFixed%27n%2BVerified&newqueryname=&order=Reuse%2Bsame%2Bsort%2Bas%2Blast%2Btime">2.0.x</a> 
		          branch</li>
		        <li>Fixes released to the <a href="https://bugs.eclipse.org/bugs/buglist.cgi?short_desc_type=allwordssubstr&short_desc=&product=Platform&component=Ant&target_milestone=2.1.1&target_milestone=2.1.2&target_milestone=2.1.3&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&keywords_type=allwords&keywords=&bug_status=VERIFIED&resolution=FIXED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&changedin=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&namedcmd=2.0.1+Fixed%27n+Verified&newqueryname=&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">2.1.x</a> 
		          branch</li>
		        <li>Fixes released to the <a href="https://bugs.eclipse.org/bugs/buglist.cgi?short_desc_type=allwordssubstr&short_desc=&product=Platform&component=Ant&target_milestone=3.0.1&target_milestone=3.0.2&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&keywords_type=allwords&keywords=&bug_status=VERIFIED&resolution=FIXED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&changedin=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&namedcmd=2.0.1+Fixed%27n+Verified&newqueryname=&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">3.0.x</a> 
		          branch</li>
		          <li>Fixes released to the <a href="https://bugs.eclipse.org/bugs/buglist.cgi?short_desc_type=allwordssubstr&short_desc=&product=Platform&component=Ant&target_milestone=3.1.1&target_milestone=3.1.2&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&keywords_type=allwords&keywords=&bug_status=VERIFIED&resolution=FIXED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&changedin=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&namedcmd=2.0.1+Fixed%27n+Verified&newqueryname=&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">3.1.x</a> 
		          branch</li>
		        <li>Fixes released to the <a href="https://bugs.eclipse.org/bugs/buglist.cgi?short_desc_type=allwordssubstr&short_desc=&product=Platform&component=Ant&target_milestone=3.2.1&target_milestone=3.2.2&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&keywords_type=allwords&keywords=&bug_status=VERIFIED&resolution=FIXED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&changedin=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&namedcmd=2.0.1+Fixed%27n+Verified&newqueryname=&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">3.2.x</a> 
		          branch</li>
		           <li>Fixes released to the <a href="https://bugs.eclipse.org/bugs/buglist.cgi?short_desc_type=allwordssubstr&short_desc=&product=Platform&component=Ant&target_milestone=3.3.1&target_milestone=3.3.2&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&keywords_type=allwords&keywords=&bug_status=VERIFIED&resolution=FIXED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&changedin=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&namedcmd=2.0.1+Fixed%27n+Verified&newqueryname=&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">3.3.x</a> 
		          branch</li>
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
