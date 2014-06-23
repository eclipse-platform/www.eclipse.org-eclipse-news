<?php
function innerHTML($el) {
	$doc = new DOMDocument();
	$doc->appendChild($doc->importNode($el, TRUE));
	$html = trim($doc->saveHTML());
	$tag = $el->nodeName;
	$html =  preg_replace('@^<' . $tag . '[^>]*>|</' . $tag . '>$@', '', $html);
	//update relative links
	return preg_replace('~href="4.2/([^"]+).html"~', 'href="4.2/$1.php"', $html);
}

if(!isset($keyword) OR $keyword == ""){
	$keyword = "eclipse 4.4, eclipse";
}

$file = basename($App->getScriptName(), ".php").'.html';
$doc = new DOMDocument;
$doc->loadhtmlfile($file);

$body = $doc->getElementsByTagName('body')->item(0);
$body = innerHTML($body);

$title = $doc->getElementsByTagName('title')->item(0);
$title = innerHTML($title);
#
# Begin: page-specific settings.  Change these.
$pageTitle 		= $title;
$pageKeywords	= $keyword;
$pageAuthor		= "";

# Add page-specific Nav bars here
# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank)
# $Nav->addCustomNav("My Link", "mypage.php", "_self");
# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank");

# End: page-specific settings
#


if(isset($right_nav) && $right_nav == FALSE){
	//readme
	$Nav = NULL;
	$class = 'fullpage';
}else{
	//porting guide
	$Nav->addNavSeparator("Eclipse 4.2 Plug-in Migration Guide", 	"/eclipse/development/porting/eclipse_4_2_porting_guide.php");
	$Nav->addCustomNav("FAQ", "/eclipse/development/porting/4.2/faq.php", "_self", 1);
	$Nav->addCustomNav("Incompatibilities between Eclipse 3.7 and 4.2", "/eclipse/development/porting/4.2/incompatibilities.php", "_self", 1);
	$Nav->addCustomNav("Adopting 4.2 mechanisms and APIs", "/eclipse/development/porting/4.2/recommended.php", "_self", 1);
	$class = 'twocolums';
}



$html = '<div id="maincontent" class="' . $class . '"><div id="midcolumn">';
$html .= $body;
$html .='</div></div>';

$html = mb_convert_encoding($html, "HTML-ENTITIES", "auto");
$App->Promotion = TRUE;	

// if theme is not provided by caller, we specify "current one", explicitly hard-coded
if (! isset($theme)) {
  $theme = "solstice";
}

$App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="/eclipse/development/nova/styles.css"/>');
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
