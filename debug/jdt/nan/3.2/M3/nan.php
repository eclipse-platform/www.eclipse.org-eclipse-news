<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#
	# Author: 		Michael Rennie
	# Date:			November 10, 2006
	#
	# Description: a new and noteworty entry for 3.2M3 JDT debug 
	#
	#
	#****************************************************************************
	
	
	$pageTitle 		= "JDT Debug New and Noteworthy for 3.2M3";
	$pageKeywords	= "debug, platform, debugging, debugger, breakpoints, launching";
	$pageAuthor		= "Debug Team";
	
	include("_sideCommon.php");
	include("_pluginCommon.php");
	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<table border="0" width="80%" cellpadding="10" cellspacing="0">
		  <tr> 
		    <td colspan="2"> <hr> </td>
		  </tr>
		  <tr> 
		    <td width="30%" align="left" valign="top"> <p align="right"><b>Perspective 
		        launch settings</b></td>
		    <td width="70%" valign="top"> <p>The perspective settings for running and 
		        debugging have been centralized on the &quot;Run/Debug &gt; Perspectives&quot; 
		        preference page.</p>
		      <p align="center"><img src="perspectives.PNG"></p></td>
		  </tr>
		</table>
	</div>
	<div id="rightcolumn">
		$commonside
		$commonplugin
	</div>
</div>


EOHTML;

	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
