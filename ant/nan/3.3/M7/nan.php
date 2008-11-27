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
	# Copyright (c) 2008 IBM Corporation and others.
 	# All rights reserved. This program and the accompanying materials
 	# are made available under the terms of the Eclipse Public License v1.0
 	# which accompanies this distribution, and is available at
 	# http://www.eclipse.org/legal/epl-v10.html
 	# Contributors:
	#     IBM Corporation - initial implementation
	#
	# Author: 		Ant Team
	# Date:			
	#
	# Description: a new and note-worthy entry for debug 
	#
	#
	#****************************************************************************
	
	
	$pageTitle 		= "Platform Ant Project New and Noteworthy for 3.3M7";
	$pageKeywords	= "ant, script,  platform, debugging, debugger, breakpoints, launching, new, noteworthy";
	$pageAuthor		= "Ant Team";
	
	#adjust the level of file nesting, our default is for a milestone entry inside a milestone for a given version
	
	include("../../../_sideCommon.php");
	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<table border="0" width="80%" cellpadding="10" cellspacing="0">
		  <tr> 
		    <td colspan="2"> <hr /> 
		      <h2>Ant</h2>
		      <hr /></td>
		  </tr>
		  <tr> 
		    <td width="30%" valign="top" align="left"><b>Ant 1.7.0</b></td>
		    <td width="70%" valign="top">The <b>org.apache.ant</b> plug-in provided by Eclipse has been upgraded to latest Apache Ant release 1.7.0.
		  </tr>
		  <tr> 
		    <td colspan="2"> <hr /> </td>
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
