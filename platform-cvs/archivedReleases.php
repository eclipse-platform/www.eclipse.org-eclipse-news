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
	$pageKeywords	= "CVS, archived, releases";
	$pageAuthor		= "";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<p>Back to the <a href="index.php">CVS Main Page</a></p>
		<p>Note: The following links are for old development documents. As such, some of the
		links contained in the documents might be out of date.</p>
		<div class="homeitem3col">
		<h3>3.1 Release</h3>
		<a name="31"></a>
		<ul>
		<li><a href="r3.1/plan.html">3.1 development plan</a></li>
		</ul>
		</div>
		<div class="homeitem3col">
		<h3>3.0 Release</h3>
			<a name="30"></a>
		<ul>
		<li><a href="r3.0/milestone-plan.html">3.0 development plan</a></li>
		<li><a href="r3.0/repoview.html">3.0 repo view planning</a></li>
		<li><a href="r3.0/password-caching.html">3.0 password management planning</a></li>
		<li><a href="r3.0/plan-brainstorming.html">3.0 brainstorming</a></li>
		</ul>
		</div>
		<div class="homeitem3col">
		<h3>2.1 Release</h3>
			<a name="21"></a>
		<ul>
		<li><a href="r2.1/plan.html">2.1 development plan</a></li>
		<li><a href="r2.1/modules.html">2.1 development plan</a></li>
		<li><a href="r2.1/fix211.html">2.1.1 candidate bugs</a></li>
		</ul>
		</div>
		<div class="homeitem3col">
		<h3>2.0 Release</h3>
			<a name="20"></a>
		<ul>
		<li><a href="r2.0/vcm_story2.0/vcm2story.html">2.0 VCM Story</a></li>
		<li><a href="r2.0/cvs-faq.html">CVS FAQ for 2.0</a></li>
		<li><a href="r2.0/cvs-features2.0.htm">CVS Features for 2.0</a></li>
		</ul>
		</div>
	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Quick Links</h6>
			<ul>
				<li><a href="#31">3.1 Release</a></li>
				<li><a href="#30">3.0 Release</a></li>
				<li><a href="#21">2.1 Release</a></li>
				<li><a href="#20">2.0 Release</a></li>
			</ul>
		</div>
	</div>
	
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>CVS Related Links</h6>
			<ul>
				<li><a href="../index.php">CVS Main Page</a></li>
				<li><a href="#">CVS FAQ Wiki</a></li>
			</ul>
		</div>
	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
