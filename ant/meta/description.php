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
	# Copyright (c) 2009 IBM Corporation and others.
 	# All rights reserved. This program and the accompanying materials
 	# are made available under the terms of the Eclipse Public License v1.0
 	# which accompanies this distribution, and is available at
 	# http://www.eclipse.org/legal/epl-v10.html
 	# Contributors:
	#     IBM Corporation - initial implementation
	#
	# Author: 		Ant Team
	# Date:			December 1, 2009
	#
	# Description: This is the page used on the project metadata page for the description
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
		<div class="homeitem3col">
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
	</div>
</div>

EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
