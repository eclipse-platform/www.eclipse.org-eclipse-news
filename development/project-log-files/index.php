<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# index.php
	#
	# Author: 		
	# Date:			2009-06-09
	#
	# Description: Eclipse project IP log main page
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Project IP Logs";
	$pageKeywords	= "eclipse, IP, intellectual property";
	$pageAuthor		= "";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the markers!	
ob_start();
?>		

	<div id="midcolumn">
		<h1><?= $pageTitle ?></h1>
		<div class="homeitem3col">
			<h3>Current IP Log</h3>
			<p>To see a draft IP log for the Eclipse project release currently under development,
			view the <a href="http://www.eclipse.org/projects/ip_log.php?projectid=eclipse.platform,eclipse.jdt,eclipse.pde">auto-generated IP log</a>.
		</div>
		<div class="homeitem3col">
			<h3>IP Logs For Past Releases</h3>
			<p>The following are approved IP logs for past Eclipse project releases.</p>
			<table cellpadding=5 cellspacing=5 border=1 align=justify>
				<tr>
					<th>Release</th>
					<th>Platform</th>
					<th>JDT</th>
					<th>PDE</th>
				</tr>
				<tr>
					<td>Galileo (3.5)</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			</table>
		</div>
		<div class="homeitem3col">
			<h3>Historical Information</h3>
			Prior to the introduction of the automatic IP log tool, the Eclipse project maintained
			a single log that captured IP data for all releases in one place. This log was divided
			into three documents. The information in these logs captures IP data for Eclipse
			project releases 1.0 to 3.4.
			<ul>
				<li><a href="Committers.txt">Committers</a></li>
				<li><a href="Contributors.csv">Contributors</a></li>
				<li><a href="3p.csv">Third party libraries</a></li>
			</ul>
		</div>
	</div>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
