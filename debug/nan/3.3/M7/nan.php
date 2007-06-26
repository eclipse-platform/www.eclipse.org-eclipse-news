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
	# Description: a new and noteworty entry for 3.3M7 debug 
	#
	#
	#****************************************************************************
	
	
	$pageTitle 		= "Debug Project New and Noteworthy for 3.3M7";
	$pageKeywords	= "debug, platform, debugging, debugger, breakpoints, launching, new, noteworthy";
	$pageAuthor		= "Debug Team";
	
	include("../../../_sideCommon.php");
	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<table border="0" width="80%" cellpadding="10" cellspacing="0">
		  <tr> 
		    <td colspan="2"> <hr></td>
		  </tr>
		  <tr> 
		    <td width="30%" align="left" valign="top"><b>Launch selection vs. launch last</b></td>
		    <td width="70%" valign="top"><p>Selection based launching introduced in milestone 
		        6 is now the default setting in milestone 7. Use the &quot;Run/Debug &gt; 
		        Launching &gt; Launch the selected resource or active editor&quot; preference 
		        to enable or disabled this feature.</p>
		      <p>Running and debugging applications has been simplified to run or debug 
		        the selected file or active editor. When the selected resource (or active 
		        editor) is not executable, you can opt to launch the associated project 
		        by selecting &quot;Always launch project if selected resource cannot be 
		        launched&quot;.</p>
		      <p><img src="launch-pref.png" alt="Preference for launch selection vs. launch last"/> 
		      </p>
		      <p>Pressing the Run or Debug toolbar button will launch the selected resource 
		        (as will the Run or Debug action in the top level Run menu). When no launch 
		        configuration exists for a file and there is only one way to launch it, 
		        the file will simply be launched in the mode you selected. When there 
		        is more than one way to launch a file you will be prompted to select how 
		        to run or debug the application. For example, when running a JUnit test 
		        you can run as a Java application or JUnit test. A a launch configuration 
		        will be created and an entry will be added to the launch history for the 
		        application.</p>
		      <p><img src="select-way.png" alt="Select a way to run the application"/></p>
		      <p>When the same resource is launched again, the most recent configuration 
		        in the launch history associated with that resource is re-launched.</p></td>
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
