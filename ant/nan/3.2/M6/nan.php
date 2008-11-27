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
	
	
	$pageTitle 		= "Platform Ant Project New and Noteworthy for 3.2M6";
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
		    <td colspan="2"> <hr> </td>
		  </tr>
		  <tr> 
		    <td align="left" valign="top"> <p align="right"><b>Namespace support for the Ant extension points</b></td>
		    <td valign="top"> <p align="left">The Ant Core antTasks and antTypes extension points now allow for the designation of a URI that the definition should live in.
		    See <a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=133190">bug 133190</a> for full details of all the changes.</p></td>
		  </tr>
		  <tr> 
		    <td width="30%" align="left" valign="top"> <p align="right"><b>Java problem markers from a &quot;javac&quot; build</b></td>
		    <td width="70%" valign="top"> <p align="left">Running an Ant build that contains a &quot;javac&quot; declaration can produce JDT problem markers for the code that is compiled.
		    The marker generation is controlled by an Ant UI preference: Window > Preferences > Ant > Create problem markers from &quot;javac&quot; results.
		    As well, the &quot;javac&quot; declaration needs to set the &quot;listfiles&quot; attribute to &quot;true&quot; and an Eclipse console must be allocated for the build output.</p>
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
