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
	# Copyright (c) 2011 IBM Corporation and others.
 	# All rights reserved. This program and the accompanying materials
 	# are made available under the terms of the Eclipse Public License v1.0
 	# which accompanies this distribution, and is available at
 	# http://www.eclipse.org/legal/epl-v10.html
 	# Contributors:
	#     IBM Corporation - initial implementation
	#
	# Author: 		Debug Team
	# Date:			August 29, 2011
	#
	# Description: 
	#
	#
	#****************************************************************************
	
	
	$pageTitle 		= "J9 JRE Support";
	$pageKeywords	= "debug, platform, debugging, debugger, breakpoints, launching, jdt, j9, support";
	$pageAuthor		= "Debug Team";
	
	include("../_sideCommon.php");
	include("../jdt/_pluginCommon.php");
	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<div class="homeitem3col">
			<h2><b>Purpose</b></h2>
			<p>
				Install this plug-in when you want to configure a J9 JRE for building, running, and/or debugging a Java project. 
			</p>
			<p>
			    It should be noted that this plug-in is no longer actively developed or maintained in any way. The use of the plug-in
			    is provided as-is with no warranty expressed or implied.
			</p>
		</div>
		<div class="homeitem3col">
			<h2><b>Install</b></h2>
			<ol>
				<li>Download the plug-in <a target="_blank" href="../misc/plugins/org.eclipse.jdt.launching.j9_6.1.0.201108291108.jar">here</a></li>
				<li>Install the plug-in
				    <ul>
				        <li>For older versions of Eclipse (3.3, etc), copy the plug-in to the <em>plugins</em> directory of your Eclipse install</li>
				        <li>For newer versions of Eclipse (3.4+), copy the plug-in to the <em>dropins</em> directory of your Eclipse install</li>
				    </ul>
				</li>
			</ol>
			<h3><b>Plug-in Contributions</b></h3>
			 <p>
				<ul>
					<li><b>VM Install</b> - defines the directory structure of a J9 JRE</li>
					<li><b>VM Runner</b> - support for launching a J9 JRE</li>
				</ul>
				The pre-built <em>jar</em> file also has the source bundle included within it.
			</p>
		</div>
		<div class="homeitem3col">
			<h2><b>Downloading a J9 JRE</b></h2>
			<p>A J9 JRE for QNX can be downloaded from <a target="_blank" href="http://www.embedded.oti.com/download/technologies/wce_eclipse.phtml">http://www.embedded.oti.com/download/technologies/wce_eclipse.phtml</a>.</p>
		</div>
		<div class="homeitem3col">
			<h2><b>Setting up a J9 JRE</b></h2>
			<p>A J9 JRE can be defined via the Installed JREs preference page.
				<ol>
					<li>Open Installed JRE preferences via &quot;<strong>Window</strong> > <strong> Preferences</strong> > <strong>Java</strong> > <strong>Installed JREs</strong>&quot;</li>
					<li>Press &quot;<strong>Add...</strong>&quot;</li>
					<li>Select &quot;<strong>J9 VM</strong>&quot; for JRE type</li>
					<li>Assign a name to the JRE, and specify the home directory where J9 is installed.</li>
				</ol>
				<p><img src="/eclipse/debug/images/add-vm.png"></p>
			</p>
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
