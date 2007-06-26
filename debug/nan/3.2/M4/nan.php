<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# Copyright (c) 2007 IBM Corporation and others.
 	# All rights reserved. This program and the accompanying materials
 	# are made available under the terms of the Eclipse Public License v1.0
 	# which accompanies this distribution, and is available at
 	# http://www.eclipse.org/legal/epl-v10.html
 	# Contributors:
	#     IBM Corporation - initial implementation
	#
	# Author: 		Debug Team
	# Date:			November 10, 2006
	#
	# Description: a new and noteworty entry for 3.2M4 debug 
	#
	#
	#****************************************************************************
	
	
	$pageTitle 		= "Debug Project New and Noteworthy for 3.2M4";
	$pageKeywords	= "debug, platform, debugging, debugger, breakpoints, launching, new, noteworthy";
	$pageAuthor		= "Debug Team";
	
	include("../../../_sideCommon.php");
	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<table border="0" width="80%" cellpadding="10" cellspacing="0">
		  <tr> 
		    <td colspan="2"> <hr> </td>
		  </tr>
		  <tr> 
		    <td width="30%" align="left" valign="top"> <p align="right"><b>Execution environments</b></td>
		    <td width="70%" valign="top"> <p align="left">You can now specify a JRE to 
		        use for running, debugging and building based on execution environment. 
		        An execution environment describes the capabilities of a runtime - for 
		        example, J2SE-1.4. The new Execution Environments preference page displays 
		        the JREs installed in your workspace compatible with each execution environment. 
		        JREs that meet the exact requirements of an execution environment are 
		        displayed in bold, and JREs that surpass the requirements of an environment 
		        are displayed in the default font. When more than one JRE is compatible 
		        with an execution environment, you can select a default JRE to use for 
		        that environment by checking it.</p>
		      <p align="center"><img src="manage_ee.PNG"></p>
		      <p align="left">A build path or launch configuration referencing an execution 
		        environment is more portable than one referencing an explicit JRE as a 
		        JRE's exeuction environment can be resolved independant of its name. Use 
		        the JRE tab or Edit Library wizard to specify an execution environment 
		        for running and building.</p>
		      <p align="center"><img src="jre_ee.PNG"></p>
		      <p align="left">&nbsp;</p></td>
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
