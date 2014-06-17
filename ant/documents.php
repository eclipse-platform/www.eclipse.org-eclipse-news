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
	# Copyright (c) 2008, 2012 IBM Corporation and others.
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
	# Description: This page is the entry-point to all of the hosted Ant documents
	#
	#
	#****************************************************************************

	$pageTitle 		= "Ant Project Related Documents";
	$pageKeywords	= "ant, script, platform, debugging, debugger, breakpoints, launching, documents, articles, papers";
	$pageAuthor		= "Ant Team";	
	
	include("_sideCommon.php");
	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<div class="homeitem3col">
			<h2><b>Articles</b></h2>
			<ul>
			</ul>
		</div>
		<div class="homeitem3col">
			<h2><b>EclipseCon Presentations</b></h2>
			<ul>
			     <li>The last time Ant was presented at Eclipsecon was in 2005. The presentation and examples can be found <a target="_blank" href="/eclipse/ant/documents/eclipsecon-2005.zip">here</a></li>
 			</ul>
		</div>
		<div class="homeitem3col">
			<h2><b>Miscellaneous Documents</b></h2>
			<ul>
			 <li>There is an old write-up on Ant and JDT integrations that can be found <a target="_blank" href="/eclipse/ant/documents/most-from-eclipse.pdf">here</a></li>
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
