<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# template.php
	#
	# Author: 		Michael Rennie
	# Date:			August 25, 2006
	#
	# Description: this page lists all of the debug committers, active and otherwise
	#
	#
	#****************************************************************************
	
	
	$pageTitle 		= "Who We Are";
	$pageKeywords	= "debug, platform, debugging, debugger, breakpoints, launching, committers, who, we, are";
	$pageAuthor		= "Debug Team";
	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<p>Over the years there have been a few committers come and go, this page has the most recent list of committers, 
		active and otherwise. Their respective status is displyed with their
		information. It should be noted that those with an inactive status might not reply to questions about the project.</p>
		
		<p>For more information about committers and a listing of what they can commit to see <a href="http://www.eclipse.org/eclipse/commit.html" target="_blank">this page</a> provided
		by eclipse.org listing all committers and their respective commit rights.</p>
		<div class="homeitem3col">
			<h3>Darin Wright</h3>
			<table width="100%" border="0" summary="About Darin Wright">
				<tbody>
				<tr> 
					<td width="30%" valign="top"><no picture available></td>
					<td width="70%">Darin is currently a senior software developer with the IBM Rational Team, 
					an Eclipse committer, and lead for the Eclipse Debug Platform and Java Debugger. 
					For the better part of the last ten years, Darin has been working on IDE's such as Eclipse, 
					VA/Micro Edition, and ENVY/Smalltalk. In a previous software development life, Darin was an 
					audio software developer supporting virtual reality productions at the Banff Centre for the arts.</td>
				</tr>
				<tr> 
					<td width="30%" valign="top"><b>Status</b></td>
					<td width="70%">Active</td>
				</tr>
				<tr> 
					<td width="30%" valign="top"><b>Email</b></td>
					<td width="70%">Darin_Wright@ca.ibm.com</td>
				</tr>
				</tbody>
			</table>
		</div>
		<div class="homeitem3col">
			<h3>Michael Rennie</h3>
			<table width="100%" border="0" summary="About Michael Rennie">
				<tbody>
				<tr> 
					<td width="30%" valign="top"><no picture available></td>
					<td width="70%">Michael Rennie is an Debug platform committer working with the IBM Rational team. 
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
			<h3>Samantha Chan</h3>
			<table width="100%" border="0" summary="About Samantha">
				<tbody>
				<tr> 
					<td width="30%" valign="top"><no picture available></td>
					<td width="70%">Samantha Chan is a developer from IBM Debug Team. 
					She has been working with debug technologies for 4 years.</td>
				</tr>
				<tr> 
					<td width="30%" valign="top"><b>Status</b></td>
					<td width="70%">Active</td>
				</tr>
				<tr> 
					<td width="30%" valign="top"><b>Email</b></td>
					<td width="70%">chanskw@ca.ibm.com</td>
				</tr>
				</tbody>
			</table>
		</div>
		<div class="homeitem3col">
			<h3>Kevin Barnes</h3>
			<table width="100%" border="0" summary="About Kevin Barnes">
				<tbody>
				<tr> 
					<td width="30%" valign="top">No Picture</td>
					<td width="70%">Kevin Barnes has been working with IBM on the Eclipse Debug Framework and 
					JDT Debugger for the last 2 years. Before coming to IBM he was an integral member of the team 
					at IAM Consulting, working on projects such as IAM->Developing - a collaborative java IDE.</td>
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
		<div class="homeitem3col">
			<h3>Darin_Swanson</h3>
			<table width="100%" border="0" summary="About Darin Swanson">
				<tbody>
				<tr> 
					<td width="30%" valign="top"><no picture available></td>
					<td width="70%">Darin Swanson is one of the original committers on the Eclipse project, 
					working as the Ant Component lead for the Eclipse Platform Project. He was also involved 
					in the development of Eclipse's precursors: VisualAge Micro Edition Java IDE and the Visual 
					Age for Java product. Darin has worked for Object Technology International in Victoria, Canada 
					and Minneapolis. Darin is continuing to work on Eclipse in the debug, JDT debug and Ant 
					components in the IBM Beaverton location. He is also happy to expound at length about his 
					love of marathons and trail running.</td>
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
	</div>
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Quick Links</h6>
			<ul>
				<li><a href="/eclipse/debug/documents.php">Articles & Documents</a></li>
				<li><a href="/eclipse/debug/get_involved.php">Get Involved!</a></li>
				<li><a href="/eclipse/debug/contribute.php">How To Contribute</a></li>
				<li><a href="/eclipse/debug/about.php">About this content</a></li>
			</ul>
		</div>
	</div>
</div>


EOHTML;

	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
