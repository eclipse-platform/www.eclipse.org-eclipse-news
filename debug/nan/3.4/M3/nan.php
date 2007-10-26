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
	# Date:			August 7, 2007
	#
	# Description: a new and noteworty entry for 3.4M1 debug 
	#
	#
	#****************************************************************************
	
	
	$pageTitle 		= "Debug Project New and Noteworthy for 3.4M2";
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
    <td width="30%" valign="top" align="left"><a name="ImportExportLCs" id="ImportExportLCs"></a><b>Import/export 
      launch configurations</b></td>
    <td width="70%" valign="top"><p>You can now import and export launch configurations 
        in the local file system. Select <strong>Launch Configurations</strong> 
        from the <strong>Run/Debug</strong> category of the Import or Export wizard.</p>
      <p><img src="images/export-lc-1.PNG" alt="Select 'Launch Configurations' from the 'Run/Debug' category of the Import or Export wizard." /></p>
      <p>The following page allows you to select configurations to export to a 
        location in the local file system.</p>
      <p><img src="images/export-lc-2.PNG" alt="Select configurations to export and export directory." /> </p>
      </td>
  </tr>
  <tr>
    <td colspan="2"><hr />
    </td>
  </tr>
  <tr>
    <td width="30%" valign="top" align="left"><a name="eeFiles" id="eeFiles"></a><b>Execution 
      environment description files</b></td>
    <td width="70%" valign="top"><p>An execution environment description file 
        describes a JVM and the environment it represents (see <a href="http://wiki.eclipse.org/index.php/Execution_Environment_Descriptions">Execution 
        Environment Descriptions</a> for detailed information on file format). 
        The file defines JVM properties such as boot path, endorsed directories, 
        language level, executeables, source attachments, and so on.</p>
      <p>You can now add JREs to your workspace using execution environment description 
        files from the <strong>Installed JREs</strong> preference page. Press 
        <strong>Add...</strong> and select the <strong>Execution Environment Description</strong> 
        JRE type.</p>
      <p><img src="images/select-jre-type.PNG" alt="Selection 'Execution Environment Description' JRE type." /></p>
      <p>On the following page specify an .ee file. This will create a JRE with 
        attributes from the description file. This example shows <a href="http://wiki.eclipse.org/J9">J9 
        configured for Foundation 1.1</a>.</p>
      <p><img src="images/ee-jre.PNG" alt="Specify an .ee file to fill in JRE attributes." /></p>
      <p></p></td>
  </tr>
  <tr>
    <td colspan="2"><hr />
    </td>
  </tr>
  <tr>
    <td width="30%" valign="top" align="left"><a name="lcSearchResults" id="lcSearchResults"></a><b>Launch 
      configurations in search results</b></td>
    <td width="70%" valign="top"><p>Launch configurations now appear when searching 
        for references to a main type. Double-clicking on the search result opens 
        the launch dialog on that configuration.</p>
      <p><img src="images/search-lc.PNG" alt="References to a main type include launch configurations." /></p></td>
  </tr>
  <tr>
    <td colspan="2"><hr />
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
