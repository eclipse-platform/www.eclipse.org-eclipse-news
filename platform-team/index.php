<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# index.php
	#
	# Description: eclipse.org cvs main page
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Team";
	$pageKeywords	= "Platform, Team";
	$pageAuthor		= "";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Bog and Tric", "http://www.bogandtric.com/", "_blank", 3);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<h2>Platform Team Integration Framework</h2>
		<p> The goal of the Team component is to provide a mechanism by which repository tools can 
		integrate the full, rich, functionality of their repository solution into the Eclipse 
		workbench in a first class way.</p>
		<div class="homeitem3col">
			<h3>About the Team component</h3>
			<a name="ABOUT"></a>
			<p></p>
			<ul>
			  <li>This component is responsible for all org.eclipse.team.* <a href="dev.php#Plugins">plugins</a></li>
			  <li>Have a question about the Team component? We might already have an answer for you in the <a href="http://wiki.eclipse.org/index.php/Team_FAQ">Team
			    FAQ Wiki</a>.</li>
			  <li>Online user <a href="http://help.eclipse.org/help31/topic/org.eclipse.platform.doc.isv/guide/team.htm">documentation</a>.</li>
			</ul>
		</div>
		<div class="homeitem3col">
			<h3>Development Resources</h3>
			<a name="DEV"></a>
			<p>If you are already a Team developer, check out the <a href="dev.php">Development Resources</a>.</p>
		</div>
		<div class="homeitem3col">
			<h3>What's Happening</h3>
			<a name="HAPPENING"></a>
			<p><img SRC="http://dev.eclipse.org/images/Adarrow.gif" NOSAVE BORDER=0 height=16 width=16>&nbsp;<b>3.3 Development</b>
			<ul>
			<li>Team planning for the 3.3 release is underway. Stay tuned for details!</li>
			</ul>
			</p>
			<p><img SRC="http://dev.eclipse.org/images/Adarrow.gif" NOSAVE BORDER=0 height=16 width=16>&nbsp;<b>3.2 Development</b>
			<ul>
			<li><b>3.2 RC7</b> has been released and is available in the <a href="http://download.eclipse.org/eclipse/downloads">downloads</a> area.</li>
			<li>3.2 <a href="team3.2/plan.php">development</a> plan.</li>
			<li>3.2 <a href="team3.2/3_2_testing.html">testing</a> plan.</li>
			<li>3.2 <a href="http://www.eclipse.org/eclipse/development/freeze_plan_3.2.html">endgame plan</a> is available here.</li>
			</ul>
			</p>
			<p><img SRC="http://dev.eclipse.org/images/Adarrow.gif" NOSAVE BORDER=0 height=16 width=16>&nbsp;<b>Archived Releases</b></p>
			<ul><li>Documents from <a href="archivedReleases.php">previous releases</a>.</li></ul>
		</div>
		<div class="homeitem3col">
			<h3>Get Involved</h3>
			<a name="INVOLVED"></a>
			If you are interested in participating in the development of the CVS component, there are several ways of contributing:
			<ul>
    		<li>Fix bugs/enhancement requests that we need <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&classification=Eclipse&product=Platform&component=Team&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=helpwanted&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">help</a> with.</li>
		    <li>Check out our <a href="dev.php#Bugs">bug section</a> on the development page and pick something that interests you.</li>
    		<li>Also, check out the developer's mailing list: <a href="http://dev.eclipse.org/mailman/listinfo/platform-team-dev">platform-team-dev@eclipse.org</a>. Chat with people there about your problems and interests, and find out what you can do to help.</li>
			</ul>
		</div>
	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Quick Links</h6>
			<ul>
				<li><a href="#ABOUT">About Team</a></li>
				<li><a href="#DEV">Development Resources</a></li>
				<li><a href="#HAPPENING">What's Happening</a></li>
				<li><a href="#INVOLVED">Get Involved</a></li>
			</ul>
		</div>
		<div class="sideitem">
			<h6>CVS Related Links</h6>
			<ul><li><a href="http://wiki.eclipse.org/index.php/Team_FAQ">Team FAQ Wiki</a></li>
			</ul>
		</div>
	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
