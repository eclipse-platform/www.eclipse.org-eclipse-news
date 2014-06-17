<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# Copyright (c) 2007, 2012 IBM Corporation and others.
 	# All rights reserved. This program and the accompanying materials
 	# are made available under the terms of the Eclipse Public License v1.0
 	# which accompanies this distribution, and is available at
 	# http://www.eclipse.org/legal/epl-v10.html
 	# Contributors:
	#     IBM Corporation - initial implementation
	#
	# Author: 		Debug Team
	# Date:			August 25, 2006
	#
	# Description: This is the new main page for the Platform Debug website, the old main
	#			   page will redirect to the new main page for the site: www.eclipse.org/eclipse/debug/index.php
	#
	#
	#****************************************************************************

	$pageTitle 		= "Debug Project Related Documents";
	$pageKeywords	= "debug, platform, debugging, debugger, breakpoints, launching, documents, articles, papers";
	$pageAuthor		= "Debug Team";	
	
	include("_sideCommon.php");
	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<div class="homeitem3col">
			<h2><b>Articles</b></h2>
			<ul>
				<li>Eclipse Corner article <a target="_blank" href="http://www.eclipse.org/articles/Article-Debugger/how-to.html">How To Write An Eclipse Debugger</a></li>
				<li>Eclipse Corner article <a target="_blank" href="http://www.eclipse.org/articles/Article-Launch-Framework/launch.html">We Have Lift-off: The Launching Framework in Eclipse </a></li>
				<li>Eclipse Corner article <a target="_blank" href="http://www.eclipse.org/articles/article.php?file=Article-MemoryView/index.html">Inside the Memory View: A Guide for Debug Providers</a></li>
				
			</ul>
		</div>
		<div class="homeitem3col">
			<h2><b>EclipseCon Presentations</b></h2>
			<p>
			     The last time we gave the Debug tutorial in 2009 has been archived <a target="_blank" href="/eclipse/debug/documents/eclipsecon-2009.zip">here</a>.
			</p>
		</div>
		<div class="homeitem3col">
			<h2><b>Miscellaneous Documents</b></h2>
			<ul>
				<li>Back in 3.3M3 we added support for extensible 'options-based' launching. The following <a href="/eclipse/debug/documents/migration_path.pdf" target="_blank">migration guide</a> describes how you can migrate your launching contributions to use the new scheme.</li>
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
