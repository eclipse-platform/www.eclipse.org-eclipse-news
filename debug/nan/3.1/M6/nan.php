<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#
	# Author: 		Michael Rennie
	# Date:			November 10, 2006
	#
	# Description: a new and noteworty entry for 3.1M6 JDT debug 
	#
	#
	#****************************************************************************
	
	
	$pageTitle 		= "JDT Debug New and Noteworthy for 3.1M6";
	$pageKeywords	= "debug, platform, debugging, debugger, breakpoints, launching";
	$pageAuthor		= "Debug Team";
	
	include("../../../../_sideCommon.php");
	include("../../../_pluginCommon.php");
	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<table border="0" width="80%" cellpadding="10" cellspacing="0">
		  <tr> 
		    <td colspan="2"> 
		      <hr>
		    </td>
		  </tr>
		  <tr> 
		    <td width="30%" valign="top" align="left"> 
		      <p align="right"><b>Run and Debug from editor</b> 
		    </td>
		    <td width="70%" valign="top"> 
		      <p>You can now run and debug Java programs and Ant builds from an editor's 
		        context menu.</p>
		    </td>
		  </tr>
		  <tr> 
		    <td width="30%" valign="top" align="left"> 
		      <p align="right"><b>Javadoc attachments</b>
		    </td>
		    <td width="70%" valign="top"> 
		      <p>You can now associate a different javadoc location with each jar in a 
		        JRE's libararies.</p>
		      <p><img src="javadoc_location.PNG"></p>
		      </td>
		  </tr>
		  <tr> 
		    <td width="30%" valign="top" align="left"> 
		      <p align="right"><b>Mark Occurrences in the Ant editor</b>
		    </td>
		    <td width="70%" valign="top">
		      <p>You can now enable the Ant editor to mark occurrences of properties and 
		        targets. Mark occurrences is controlled via the Ant editor preferences and editor toolbar action.</p>
		      <p><img src="pref.PNG"></p>
		      <p><img src="occur.PNG"></p>
		    </td>
		  </tr>
		   <tr> 
		    <td width="30%" valign="top" align="left"> 
		      <p align="right"><b>system-path Variable</b>
		    </td>
		    <td width="70%" valign="top">
		      <p>A new dynamic variable "system-path" that allows you to define an external tool simply by specifying a 
		      tool name that is on the system path when configuring your external tool launch configuration.</p>
		    </td>
		  </tr>
		   <tr> 
		    <td width="30%" valign="top" align="left"> 
		      <p align="right"><b>More control over error reporting in the Ant editor</b>
		    </td>
		    <td width="70%" valign="top">
		      <p>You can now set the Ant editor to ignore all buildfile problems. As well you can specify specific buildfile names that the editor should not report problems for.
		      Both settings are controlled using the Ant editor preferences for Problems. See <a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=84307">bug 84307</a> for full details</p>
		      <p><img src="control.PNG"></p>
		    </td>
		  </tr>
		   <tr> 
		    <td width="30%" valign="top" align="left"> 
		      <p align="right"><b>Rename in File for the Ant editor</b>
		    </td>
		    <td width="70%" valign="top">
		      <p>You can now rename occurrences of properties and targets within the same buildfile within the Ant editor.
		      To activate use the editor context menu or the Alt-Shift-R keyboard shortcut when the cursor is located within the occurrence to rename.</p>
		      <p><img src="rename.PNG"></p>
		    </td>
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
