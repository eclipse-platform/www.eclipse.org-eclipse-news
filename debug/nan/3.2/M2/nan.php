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
	# Description: a new and noteworty entry for 3.2M2 debug 
	#
	#
	#****************************************************************************
	
	
	$pageTitle 		= "Debug Project New and Noteworthy for 3.2M2";
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
	      <td valign="top" align="left"> <p align="right"><b>Breakpoint import and export</b></td>
	      <td valign="top"> <p>Breakpoints can be exported to and imported from the 
	        local file system. The export wizard allows you to select the breakpoints 
	        to export. Breakpoint working sets can optionally be created when importing 
	        breakpoints.</p>
	      <p align="center"><img src="brkpt_export.PNG"></p></td>
	      </tr>
	      <tr> 
    	  <td valign="top" align="left"> <p align="right"><b>System property launch variable</b></td>
    	  <td valign="top"> <p>A new launch variable allows you to dynamically specify 
             system properties as program and VM arguments from the Eclipse runtime. 
             The variable accepts a single argument which is the name of the system 
             property to be resolved at launch time. For example, &quot;\${system_property:java.home}&quot;.</p>
      	  <p align="center"><img src="sys_prop.PNG"></p>
      	  <p>&nbsp;</p></td>
 		  </tr>
 		  <tr> 
		    <td width="30%" valign="top" align="left"> <p align="right"><b>Evaluation 
		        support for arrays</b></td>
		    <td width="70%" valign="top"> <p>Content assist and evaluations are now supported 
		        for arrays. The debugger allows you to refer to the selected array as 
		        'this'. </p>
		      <p align="center"><img src="arr_eval.PNG"></p>
		      <p>&nbsp;</p></td>
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
