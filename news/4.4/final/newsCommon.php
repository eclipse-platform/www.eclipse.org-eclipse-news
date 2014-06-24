<?php
function innerHTML($el) {
	$doc = new DOMDocument();
	$doc->appendChild($doc->importNode($el, TRUE));
	$html = trim($doc->saveHTML());
	$tag = $el->nodeName;
	$html =  preg_replace('@^<' . $tag . '[^>]*>|</' . $tag . '>$@', '', $html);
	//update relative links
	// TODO: is is required?
	//return preg_replace('~href="(.*)_4.4/([^"]+).html"~', 'href="${1}4.4/${2}.php"', $html);
	return $html;
}

if(!isset($keyword) OR $keyword == ""){
	$keyword = "eclipse 4.4, eclipse, new and noteworthy";
}

$file = basename($App->getScriptName(), ".php").'.html';
echo "file: $file";
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


$html = $body;
//$html .='</div></div>';

$html = mb_convert_encoding($html, "HTML-ENTITIES", "auto");
$App->Promotion = FALSE;	

// if theme is not provided by caller, we specify "current one", explicitly hard-coded
if (! isset($theme)) {
  $theme = "solstice";
}

$App->AddExtraHtmlHeader('<link rel="stylesheet" href="default_style.css" charset="ISO-8859-1" type="text/css">');
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
