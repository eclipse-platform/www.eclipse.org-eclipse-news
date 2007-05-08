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
	#
	# Author: 		Michael Rennie
	# Date:			May 8, 2007
	#
	# Description: 
	#
	#
	#****************************************************************************
	
	
	$pageTitle 		= "Eclipse J9 JRE Support";
	$pageKeywords	= "debug, platform, debugging, debugger, breakpoints, launching, jdt, j9, support";
	$pageAuthor		= "Debug Team";
	
	include("../_sideCommon.php");
	include("../jdt/_pluginCommon.php");
	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<div class="homeitem3col">
			<h3>Purpose</h3>
			<p>
				Install this plugin when you want to configure a J9 JRE for building, running, and/or debugging a Java project. 
			</p>
		</div>
		<div class="homeitem3col">
			<h3>Install</h3>
			<ol>
				<li>Download the plugin version that is compatible with the build you are working on: 
		          	<ul>
						<li><a target="_blank" href="../misc/plugins/org.eclipse.jdt.launching.j9_6.1.0.200704121156.jar">Eclipse SDK 3.3</a></li>
					</ul>
				</li>
				<li> Copy the plugin to the plugins directory of your Eclipse install</li>
			</ol>
			<p><b>Plugin Contributions</b>
				<ul>
					<li><b>VM Install</b> - defines the directory structure of a J9 JRE</li>
					<li><b>VM Runner</b> - support for launching a J9 JRE</li>
				</ul>
			</p>
		</div>
		<div class="homeitem3col">
			<h3>Downloading a J9 JRE</h3>
			<p>A J9 JRE for QNX can be downloaded from <a target="_blank" href="http://www.embedded.oti.com/download/technologies/wce_eclipse.phtml">http://www.embedded.oti.com/download/technologies/wce_eclipse.phtml</a>.</p>
		</div>
		<div class="homeitem3col">
			<h3>Setting up a J9 JRE</h3>
			<p>A J9 JRE can be defined via the Installed JREs preference page.
				<ol>
					<li>Open Installed JRE preferences via &quot;<strong>Window</strong> > <strong> Preferences</strong> > <strong>Java</strong> > <strong>Installed JREs</strong>&quot;</li>
					<li>Press &quot;<strong>Add...</strong>&quot;</li>
					<li>Select &quot;<strong>J9 VM</strong>&quot; for JRE type</li>
					<li>Assign a name to the JRE, and specify the home directory where J9 is installed.</li>
				</ol>
				<p><img src="../images/add-vm.PNG"></p>
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
