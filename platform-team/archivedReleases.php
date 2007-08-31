<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# sample_list.php
	#
	# Author: 		Denis Roy
	# Date:			2005-11-07
	#
	# Description: Type your page comments here - these are not sent to the browser
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Archived Releases";
	$pageKeywords	= "Team, archived, releases";
	$pageAuthor		= "";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
		
	# Paste your HTML content between the markers!	
	ob_start();
?>		

	<div id="midcolumn">
		<h1><?= $pageTitle ?></h1>
		<p>Back to the <a href="index.php">Team Page</a></p>
		<p>Note: The following links are for old development documents. As such, some of the
		links contained in the documents might be out of date.</p>
		
		<div class="homeitem3col">
		<h3>3.2 Release</h3>
			<a name="32"></a>
			<ul>
				<li>3.2 <a href="team3.2/plan.php">development</a> plan.</li>
				<li>3.2 <a href="team3.2/3_2_testing.html">testing</a> plan.</li>
				<li>3.2 <a href="http://www.eclipse.org/eclipse/development/freeze_plan_3.2.html">endgame plan</a> is available here.</li>
			</ul>
		</div>
		
		<div class="homeitem3col">
			<h3>3.1 Release</h3>
			<a name="31"></a>
			<ul>
				<li><a href="team3.1/plan.html">3.1 development plan</a></li>
			</ul>
		</div>
		
		<div class="homeitem3col">
			<h3>3.0 Release</h3>
			<a name="30"></a>
				<ul>
				<li><a href="team3.0/milestone-plan.html">3.0 development plan</a></li>
				<li><a href="team3.0/Team Synchronization.ppt">Team Synchronization slides</a></li>
				<li><a href="team3.0/Concurrency Experience Report.ppt">Concurrent Experience Report Slides</a></li>
			</ul>
		</div>
	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Quick Links</h6>
			<ul>
				<li><a href="#32">3.2 Release</a></li>
				<li><a href="#31">3.1 Release</a></li>
				<li><a href="#30">3.0 Release</a></li>
			</ul>
		</div>
		<div class="sideitem">
			<h6>Team Related Links</h6>
			<ul>
				<li><a href="http://wiki.eclipse.org/Workspace_Team">Workspace Team Page</a></li>
				<li><a href="http://wiki.eclipse.org/index.php/Team_FAQ">Team FAQ</a></li>
			</ul>
		</div>
	</div>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
