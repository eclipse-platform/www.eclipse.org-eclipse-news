<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#
	# Author: 		Michael Rennie
	# Date:			November 10, 2006
	#
	# Description: a new and noteworty entry for 3.1M1 JDT debug 
	#
	#
	#****************************************************************************
	
	
	$pageTitle 		= "JDT Debug New and Noteworthy for 3.1M1";
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
		      <p align="right"><b>Double click watchpoints and method entry breakpoints</b> 
		    </td>
		    <td width="70%"> 
		      <p>Double clicking in the Java editor ruler creates watchpoints on fields and
		      method entry breakpoints on method declarations.
		    </td>
		  </tr>
		  <tr> 
		    <td colspan="2"> 
		      <hr>
		    </td>
		  </tr>
		  <tr> 
		    <td width="30%" valign="top" align="left"> 
		      <p align="right"><b>Debugging 1.5 source code</b> 
		    </td>
		    <td width="70%"> 
		      <p>You can run and debug 1.5 source code with a 1.5 JRE.
		      Breakpoints are supported in the new "for-each" statement.
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
		
		    <td colspan="2"> 
		      <hr>
		    </td>
		  </tr>
		  <tr> 
		    <td width="30%" valign="top" align="left"> 
		      <p align="right"><b>Folding in the Ant Editor</b> 
		    </td>
		    <td width="70%"> 
		      <p>The Ant editor now supports folding of buildfile regions. Hovering over a
		      folded Ant element lets you peek at the hidden code.
		      <p><img src="ant_folding.gif" title="Code Folding" alt="Picture of code folding in the Ant editor">
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
		      <p align="right"><b> Move to Ant 1.6.2</b> 
		    </td>
		    <td width="70%"> 
		      <p>Eclipse now bundles Ant 1.6.2
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
		$commonplugin
	</div>
</div>


EOHTML;

	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
