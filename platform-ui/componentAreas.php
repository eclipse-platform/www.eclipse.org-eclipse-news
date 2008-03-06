<style type="text/css">
<!--
div.component{
	vertical-align: top; 
	text-align:right;
}
a.bugs {
	style="font-size: smaller";
}
div.owner {
	text-indent: 30px;
}
-->
</style>
<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	ob_start();
	$pageTitle = "Platform UI Component Areas";
	$pageKeywords	= "platform ui component area";
	$pageAuthor = "Platform UI Monkey";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
?>

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		Platform UI is divided into the following functional areas. The tags in
square brackets are used in bug report subject headings to indicate the
affected area. The current owner of each functional area is indicated in
parentheses. The queries here may not represent all bugs in a given
component area if there are any that havn't been properly tagged.
<p>
<p>Last updated: March 4, 2008
<p>
<table id="componentAreas" border="1">

</table>

<p>	
	</div>
</div>


<?
	# Generate the web page
	$App->AddExtraHtmlHeader($script);
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, ob_get_clean());
?>