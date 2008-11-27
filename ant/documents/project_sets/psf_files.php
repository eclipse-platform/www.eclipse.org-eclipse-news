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
	# Date:			November 26, 2008
	#
	# Description: This page presents some available project set files of interest to the
	#			   community
	#
	#
	#****************************************************************************
	
	
	$pageTitle 		= "Ant Project Set Files";
	$pageKeywords	= "ant, script, platform, debugging, debugger, psf, project, set, files, working, sets, cvs, pserver, extssh";
	$pageAuthor		= "Ant Team";
	
	include("../../_sideCommon.php");
	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<div class="homeitem3col">
			<h3>Debug PSF Files</h3>
			<a name="ant_psf"></a>
			<ul>
				<li><a href="/eclipse/ant/documents/project_sets/debug-pserver.psf">Current release projects for non-committers (pserver)</a></li>
				<li><a href="/eclipse/ant/documents/project_sets/ant-extssh.psf">Current release projects for committers (extssh)</a></li>
				<li><a href="">3.4 maintenance release projects for non-committers (pserver)</a></li>
				<li><a href="">3.4 maintenance release projects for committers (extssh)</a></li>
				<li><a href="">3.3 maintenance release projects for non-committers (pserver)</a></li>
				<li><a href="">3.3 maintenance release projects for committers (extssh)</a></li>
			</ul>
		</div>
		<div class="homeitem3col">
			<h3>How to Use PSF Files</h3>
			<a name="how_to_use"></a>
			<ol>
				<li>Save the file to a local directory</li>
				<li>Start an eclipse instance.</li>
				<li>Select "File > Import..." from the main workbench menu to open the "Import" dialog.</li>
				<li>Select "Team > Team Project Set" in the tree viewer.</li>
				<li>Click "Next >".</li>
				<li>Click "Browse..." to select and locate this file saved in step (1)</li>
				<li>Click "Finish"</li>
				<li>Accept the defaults and Click "OK" on the "Specify Repository Location" dialog if necessary</li>
			</ol>
		</div>
	</div>
	<div id="rightcolumn">
		$commonside
	</div>
</div>


EOHTML;

	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
