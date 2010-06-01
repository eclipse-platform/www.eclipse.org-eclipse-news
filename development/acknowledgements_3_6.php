<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# index.php
	#
	# Author: 		
	# Date:			2010-05-31
	#
	# Description: Eclipse project development main page
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse 3.6 Acknowledgements";
	$pageKeywords	= "eclipse, 3.6 acknowledgements, thanks";
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


<div class="homeitem3col">
<h3>Eclipse 3.6 Acknowledgements</h3>


<p>
The Eclipse and RT Equinox project committers always receive a tremendous amount of support from the community during every
release.  The 3.6 release cycle is no exception.  We would like to thank the following people for their efforts opening bug reports, 
providing patches, testing, consuming the latest builds and participating in discussions that resulted in a better Helios release.
</p>

<p>
The Platform and JDT Text team would like to thank everyone who filed good bug reports and enhancement requests. Special thanks go to:<br>
Tom Hofmann, Stephan Wahlbrink, Anton Leherbauer, Fabio Zadrozny, Doug Satchwell and Kim Moir for all her releng work.
</p>

<p>
JDT UI sends thanks to:<br>
Benjamin Muskalla, Chris West (Faux), Robert Konigsberg, Carsten Pfeiffer, Achim Demelt and Kim Moir for the poems she sends along with the milestones.
</p>

<p>
The User Assistance team would like to thank everyone who made contributions or filed bug
reports, and in particular Hao Zhang for the contribution of the criteria feature,
and Chris Austin and Jim Perry for their enhancements to remote help. </p>


  </div>
  </div>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

