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
	$pageTitle 		= "Platform UI Team";
	$pageKeywords	= "Platform, UI, Team";
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
<script src="drag.js">
</script>
<div width="100%" height="100%">
<img class="piece" style="position: absolute; left: 300px; top: 200px;"
  src="images/boris-head-24-fs8.png" onmouseover="handleMouseOver(this, 'boris');" onmousedown="handleDragStart(event);" /> 
<img class="piece" style="position: absolute; left: 431px; top: 200px;"
  src="images/nose-fs8.png" onmouseover="handleMouseOver(this, 'nose');" onmousedown="handleDragStart(event);" /> 
</div>
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
