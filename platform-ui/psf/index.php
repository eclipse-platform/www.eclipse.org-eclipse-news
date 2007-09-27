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
	$pageTitle 		= "Project Set Files for Platform UI";
	$pageKeywords	= "Platform, UI";
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
		You can find team project set files on this page.
		
		<div class="homeitem3col">
			<h3>Contributors</h3>
			<ul>
			  <li>All of Platform UI+IDE HEAD: <a href="platform-ui-ide-HEAD-pserver.psf">platform-ui-ide-HEAD-pserver.psf</a></li>
			  <li>data binding HEAD: <a href="databinding-HEAD-pserver.psf">databinding-HEAD-pserver.psf</a></li>
			  <li>data binding 3.3 maintenance: <a href="databinding-3_3_maintenance-pserver.psf">databinding-3_3_maintenance-pserver.psf</a></li>
			</ul>
			<h3>Committers</h3>
			<ul>
			  <li>All of Platform UI+IDE HEAD: <a href="platform-ui-ide-HEAD-extssh.psf">platform-ui-ide-HEAD-extssh.psf</a></li>
			  <li>data binding HEAD: <a href="databinding-HEAD-extssh.psf">databinding-HEAD-extssh.psf</a></li>
			  <li>data binding 3.3 maintenance: <a href="databinding-3_3_maintenance-extssh.psf">databinding-3_3_maintenance-extssh.psf</a></li>
			</ul>
		</div>
	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
