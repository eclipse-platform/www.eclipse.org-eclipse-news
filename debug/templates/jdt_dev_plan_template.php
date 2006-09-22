<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#
	# Author: 		Michael Rennie
	# Date:			
	#
	# Description: 
	#
	#
	#****************************************************************************
	
	
	$pageTitle 		= "JDT Debug Release Plan";
	$pageKeywords	= "debug, platform, debugging, debugger, breakpoints, launching, release, plan";
	$pageAuthor		= "Debug Team";
	
	include("../../_sideCommon.php");
	include("../_pluginCommon.php");
	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<div class="homeitem3col">
			<h3>Overall  Plan</h3>
			
			<h4>Overall Themes for JDT Debug:</h4>
	        
	        <table>
				<tr> 
		          <td><img src="/eclipse/debug/images/defer.gif"> item is deferred</td>
		          <td> <img src="/eclipse/debug/images/progress.gif"> item is under development </td>
		          <td> <img src="/eclipse/debug/images/ok.gif" width="10" height="10"> item is finished </td>
		        </tr>
			</table>
	        <h4>Planned Items</h4>
	        <blockquote>	
	        	<b>Item Name</b>
	        		<ul>
	        			<li>work item</li>
	        		</ul>
			</blockquote>
			
			<h4>Deferred Items </h4>
	      	<blockquote>
	      		<b>Item Name</b>
	        		<ul>
	        			<li>work item</li>
	        		</ul>
	      	</blockquote>
		</div>
		<div class="homeitem3col">
		<h3>#.# Development Effort - Milestone # (date)</h3>
			<blockquote>
				<b>Item Name</b>
	        		<ul>
	        			<li>work item</li>
	        		</ul>
			</blockquote>
		</div>
		<div class="homeitem3col">
		<h3>Bug Resolution</h3>
			<ul>
				<li>Bug Fixes Released to #.#</li>
			</ul>
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
