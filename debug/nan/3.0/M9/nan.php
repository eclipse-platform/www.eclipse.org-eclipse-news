<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#
	# Author: 		Michael Rennie
	# Date:			November 10, 2006
	#
	# Description: a new and noteworty entry for 3.0M9 debug 
	#
	#
	#****************************************************************************
	
	
	$pageTitle 		= "Debug Project New and Noteworthy for 3.0M9";
	$pageKeywords	= "debug, platform, debugging, debugger, breakpoints, launching, new, noteworthy";
	$pageAuthor		= "Debug Team";
	
	include("../../../_sideCommon.php");
	
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
		      <p align="right"><b>Launching from the context menu</b> 
		    </td>
		    <td width="70%"> 
		      <p>Launch shortcuts are available in the context menu of all applicable 
		        views - Navigator, Outliner, etc. Run and debug are now separated into 
		        different submenus.
		      <p>The JUnit shortcut allows you to select and launch a single test method.
			<p><img src="context_launch.gif" title="Contextual Launch Menu" alt="Picture of Context Menu for a JUnit Test">
		    </td>
		  </tr>
		  <tr> 
		    <td colspan="2"> 
		      <hr>
		    </td>
		  </tr>
		  <tr> 
		    <td width="30%" valign="top" align="left"> 
		      <p align="right"><b>Breakpoint refactoring support</b> 
		    </td>
		    <td width="70%"> 
		      <p>Java breakpoints are automatically updated when you perform Java refactorings.
		    </td>
		  </tr>
		  <tr> 
		    <td colspan="2"> 
		      <hr>
		    </td>
		  </tr>
		  <tr> 
		    <td width="30%" valign="top" align="left"> 
		      <p align="right"><b> Debugging in alternate perspectives</b> 
		    </td>
		    <td width="70%"> 
		      <p>Debugging can be performed in any perspective. When a breakpoint is encountered 
		        you will be prompted to switch to the Debug perspective. If you choose 
		        to remain in the current perspective, the Debug view and action set will 
		        be opened allowing you to start debugging.
		      <p>You can configure the debugger to open debug related views (Variables, 
		        Breakpoints, etc.), in non-Debug perspectives via the View Management 
		        preference page (also available from the drop-down menu in the Debug view). 
		    </td>
		  </tr>
		  <tr> 
		    <td width="30%" valign="top" align="left"> 
		      <p align="right"><b> </b>
		    </td>
		    <td width="70%"> 
		      <p>&nbsp;
		      </td>
		  </tr>
		<tr> 
		    <td colspan="2"> 
		      <hr>
		    </td>
		  </tr>
		  <tr> 
		    <td width="30%" valign="top" align="left"> 
		      <p align="right"><b> Better code assistance for custom Ant tasks</b> 
		    </td>
		    <td width="70%"> 
		      <p>You can now get more code assist proposals for custom tasks. Boolean attributes, enumerated attributes, and references all present
		the correct set of proposals. 
		You also get proposals for macrodef elements and 
		any nested element and attributes defined by the macrodef.
		    </td>
		  </tr>
		  <tr> 
		    <td width="30%" valign="top" align="left"> 
		      <p align="right"><b> </b>
		    </td>
		    <td width="70%"> 
		      <p>&nbsp;
		      </td>
		  </tr>
		<tr> 
		    <td colspan="2"> 
		      <hr>
		    </td>
		  </tr>
		  <tr> 
		    <td width="30%" valign="top" align="left"> 
		      <p align="right"><b> Ant preference pages have preview viewers</b> 
		    </td>
		    <td width="70%"> 
		      <p>The Ant syntax, template and formatting preference pages all have a preview viewer so you 
		can immediately see the results of changing the preferences.
			<p><img src="ant_preferences_preview.gif" title="Ant Preferences Preview" alt="Picture of Preview Area in Ant Preferences">
		    </td>
		  </tr>
		  <tr> 
		    <td width="30%" valign="top" align="left"> 
		      <p align="right"><b> </b>
		    </td>
		    <td width="70%"> 
		      <p>&nbsp;
		      </td>
		  </tr>
		<tr> 
		    <td colspan="2"> 
		      <hr>
		    </td>
		  </tr>
		  <tr> 
		    <td width="30%" valign="top" align="left"> 
		      <p align="right"><b>Full Template Support for Ant</b> 
		    </td>
		    <td width="70%"> 
		      <p>You can add, edit or remove from the set of Ant templates that will be provided as 
		code assist proposals. See the Ant Template preference page.
		    </td>
		  </tr>
		  <tr> 
		    <td width="30%" valign="top" align="left"> 
		      <p align="right"><b> </b>
		    </td>
		    <td width="70%"> 
		      <p>&nbsp;
		      </td>
		  </tr>
		
		<tr> 
		    <td colspan="2"> 
		      <hr>
		    </td>
		  </tr>
		  <tr> 
		    <td width="30%" valign="top" align="left"> 
		      <p align="right"><b> Ant Context Menu launching</b> 
		    </td>
		    <td width="70%"> 
		      <p>An Ant build can be invoked from the Run context menu. You can run the 
		        entire build file, or open a dialog to select specific targets. You can 
		        also select and run individual targets from the Ant editor outline and 
		        Ant view.
		    </td>
		  </tr>
		  <tr> 
		    <td width="30%" valign="top" align="left"> 
		      <p align="right"><b> </b>
		    </td>
		    <td width="70%"> 
		      <p>&nbsp;
		      </td>
		  </tr>
		
		</table>
	</div>
	<div id="rightcolumn">
		$commonside
	</div>
</div>


EOHTML;

	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
