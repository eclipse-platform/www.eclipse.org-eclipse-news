<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# index.php
	#
	# Author: 		Michael Rennie
	# Date:			August 25, 2006
	#
	# Description: This is the 3.3 plan item page, describing the items to be addressed in 
	#			   the 3.3 release of eclipse
	#
	#
	#****************************************************************************

	$pageTitle 		= "Platform Debug 3.3 Release Plan";
	$pageKeywords	= "debug, platform, debugging, debugger, breakpoints, release, 3.3, milestone, plan";
	$pageAuthor		= "Debug Team";	
	
	include("/debug/_sideCommon.php")
	include("/debug/platform/_pluginCommon.php")
	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<div class="homeitem3col">
			<h3>Overall 3.3 Plan</h3>
			
			<h4>Overall Themes for Platform Debug:</h4>
	        
	        <table>
				<tr> 
		          <td><img src="/eclipse/debug/images/defer.gif"> item is deferred</td>
		          <td> <img src="/eclipse/debug/images/progress.gif"> item is under development </td>
		          <td> <img src="/eclipse/debug/images/ok.gif" width="10" height="10"> item is finished </td>
		        </tr>
			</table>
	        <h4>Planned Items</h4>
	        <blockquote>
	        	
			</blockquote>
			
			<h4>Deferred Items (Post 3.3)</h4>
	      	
	      	</blockquote>
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
