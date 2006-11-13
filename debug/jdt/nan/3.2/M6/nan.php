<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#
	# Author: 		Michael Rennie
	# Date:			November 10, 2006
	#
	# Description: a new and noteworty entry for 3.2M6 JDT debug 
	#
	#
	#****************************************************************************
	
	
	$pageTitle 		= "JDT Debug New and Noteworthy for 3.2M6";
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
		    <td colspan="2"> <hr> </td>
		  </tr>
		  <tr> 
		    <td align="left" valign="top"> <p align="right"><b>Launch configuration filtering</b></td>
		    <td valign="top"> <p align="left">The launch dialog now provides a name filter. 
		        Entries are dynamically filtered to show only those matching the entered 
		        text. As well, a<strong> Collapse All</strong> action has been added to 
		        the toolbar. </p>
		      <p align="center"><img src="launch-filter.PNG"></p></td>
		  </tr>
		  <tr> 
		    <td align="left" valign="top"> <p align="right"><b>Variable Columns</b></td>
		    <td valign="top"> <p align="left">Variables can be displayed using columns 
		        or a standard tree. To toggle columns on/off use the view menu's <strong>Layout 
		        &gt; Show Columns</strong> action. You can select the columns to be displayed 
		        using the <strong>Layout &gt; Select Columns...</strong> action. Recently 
		        changed variables are displayed with a yellow background (controlled by 
		        the &quot;Changed value background color&quot; user preference via the 
		        <strong>Run/Debug</strong> preference page). The Java debugger supports 
		        editing of Strings and primitive values inline.</p>
		      <p align="center"><img src="columns.PNG"></p></td>
		  </tr>
		  <tr> 
		    <td align="left" valign="top"> <p align="right"><b>Runtime classpath exported 
		        entries</b></td>
		    <td valign="top"> <p align="left">A Java application's default runtime classpath 
		        can be configured to only include exported entries from its project's 
		        corresponding buildpath. By default, a runtime classpath inlcudes all 
		        entries (exported and non-exported). From the Classpath tab select the 
		        default entry and use the <strong>Edit...</strong> button to configure 
		        the option.</p>
		      <p align="center"><img src="exported.PNG"></p></td>
		  </tr>
		  <tr> 
		    <td width="30%" align="left" valign="top"> <p align="right"><b>Suspend thread 
		        vs. VM</b></td>
		    <td width="70%" valign="top"> <p align="left">A preference has been added 
		        to the <strong>Java &gt; Debug</strong> page to control whether newly 
		        created breakpoints suspend a single thread or the entire VM.</p>
		      <p align="center"><img src="suspend-pref.PNG"></p></td>
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
