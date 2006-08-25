<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# index.php
	#
	# Author: 		Michael Rennie
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
	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<div class="homeitem3col">
			<h3>Debug Project Overview</h3>
			
			<p>The Eclipse Debug Project is not a single project unto itself, it is in fact comprised of 
			two distinct sub-projects: Platform Debug and JDT Debug.</p>
			
			<p><em>Platform Debug</em> defines interfaces for a language
		    independent debug model which abstract common debugging features of many
		    languages, whereas, <em>JDT Debug</em> provides an implementation of platform 
		    debug providing Java debugging support and works with any JDPA-compliant target Java VM.</p>
		    
		    <p>Both Platform and JDT Debug are built into Eclipse and ship as part of the Eclipse SDK. 
		</div>
		<div class="homeitem3col">
			<h3>Debug Components</h3>
			
			<p>As mentioned the Debug Project is broken down into two smaller sub-projects, each with 
			its own set of committers, projects goals and plans, bug categories and mailing lists.</p>
			
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
		</div>
	</div>
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Quick Links</h6>
			<ul>
				<li><a href="/eclipse/debug/about.php">About this content</a></li>
			</ul>
		</div>
	</div>
</div>


EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
