<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# Copyright (c) 2008, 2012 IBM Corporation and others.
 	# All rights reserved. This program and the accompanying materials
 	# are made available under the terms of the Eclipse Public License v1.0
 	# which accompanies this distribution, and is available at
 	# http://www.eclipse.org/legal/epl-v10.html
 	# Contributors:
	#     IBM Corporation - initial implementation
	#
	# Author: 		Ant Team
	# Date:			November 26, 2008
	#
	# Description: this page lists all of the Ant committers, active and otherwise
	#
	#
	#****************************************************************************
	
	
	$pageTitle 		= "Who We Are";
	$pageKeywords	= "ant, script, platform, debugging, debugger, breakpoints, launching, committers, who, we, are";
	$pageAuthor		= "Ant Team";
	
	include("_sideCommon.php");
	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<p>Over the years there have been a few committers come and go, this page has the most recent list of committers, 
		active and otherwise. Their respective status is displayed with their
		information. It should be noted that those with an inactive status might not reply to questions about the project.</p>
		
		<p>For more information about committers and a listing of what they can commit to see <a href="http://www.eclipse.org/eclipse/commit.html" target="_blank">this page</a> provided
		by eclipse.org listing all committers and their respective commit rights.</p>
		<div class="homeitem3col">
			<h2><b>Darin Wright</b></h2>
			<table width="100%" border="0" summary="About Darin Wright">
				<tbody>
				<tr> 
					<td width="30%" valign="top">No Picture</td>
					<td width="70%">Darin is currently the CTO of Codenza and an Eclipse committer. 
					For the better part of the last ten years, Darin has been working on IDE's such as Eclipse, 
					VA/Micro Edition, and ENVY/Smalltalk. In a previous software development life, Darin was a project / team lead at IBM Canada 
					and an audio software developer supporting virtual reality productions at the Banff Centre for the arts.</td>
				</tr>
				<tr> 
					<td width="30%" valign="top"><b>Status</b></td>
					<td width="70%">Inactive</td>
				</tr>
				<tr> 
					<td width="30%" valign="top"><b>Email</b></td>
					<td width="70%">darin.eclipse@gmail.com</td>
				</tr>
				</tbody>
			</table>
		</div>
		<div class="homeitem3col">
			<h2><b>Michael Rennie</b></h2>
			<table width="100%" border="0" summary="About Michael Rennie">
				<tbody>
				<tr> 
					<td width="30%" valign="top">No Picture</td>
					<td width="70%">Michael Rennie is an Ant, Debug, Doc and API Tools committer working with the IBM Rational team. 
					Before that he was a graduate student at the University of Manitoba, researching SOA and 
					architecture description languages.</td>
				</tr>
				<tr> 
					<td width="30%" valign="top"><b>Status</b></td>
					<td width="70%">Active</td>
				</tr>
				<tr> 
					<td width="30%" valign="top"><b>Email</b></td>
					<td width="70%">Michael_Rennie@ca.ibm.com</td>
				</tr>
				</tbody>
			</table>
		</div>
		<div class="homeitem3col">
			<h2><b>Darin Swanson</b></h2>
			<table width="100%" border="0" summary="About Darin Swanson">
				<tbody>
				<tr> 
					<td width="30%" valign="top">No Picture</td>
					<td width="70%"></td>
				</tr>
				<tr> 
					<td width="30%" valign="top"><b>Status</b></td>
					<td width="70%">Inactive</td>
				</tr>
				<tr> 
					<td width="30%" valign="top"><b>Email</b></td>
					<td width="70%">Darin_Swanson@us.ibm.com</td>
				</tr>
				</tbody>
			</table>
		</div>
		<div class="homeitem3col">
			<h2><b>Kevin Barnes</b></h2>
			<table width="100%" border="0" summary="About Michael Rennie">
				<tbody>
				<tr> 
					<td width="30%" valign="top">No Picture</td>
					<td width="70%"></td>
				</tr>
				<tr> 
					<td width="30%" valign="top"><b>Status</b></td>
					<td width="70%">Inactive</td>
				</tr>
				<tr> 
					<td width="30%" valign="top"><b>Email</b></td>
					<td width="70%">krbarnes@ca.ibm.com</td>
				</tr>
				</tbody>
			</table>
		</div>
	</div>
	<div id="rightcolumn">
		$commonside
	</div>
</div>

EOHTML;

	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
