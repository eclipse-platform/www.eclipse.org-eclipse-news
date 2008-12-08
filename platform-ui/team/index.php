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
<script> 
window.onload = function() {documentLoaded=true;init();};
var zIndex = 10;
if (navigator.userAgent.indexOf("MSIE") == -1) {
	browser = {
		getX : function(event) {
	        return event.clientX + window.scrollX;
		},
		getY : function(event) {
	        return event.clientY + window.scrollY;
		},
		preventDefault : function(event) {
			event.preventDefault();
		},
		addEventListener : function(eventName, listener) {
			document.addEventListener(eventName, listener, true);
		},
		removeEventListener : function(eventName, listener) {
			document.removeEventListener(eventName, listener, true);
		},
		getEventTarget : function(event) {
			return event.target;
		},
		mousemove : "mousemove",
		mouseup : "mouseup",
		play:function(){},
		stop:function(){}
	};
} else {
	browser = {
		getX : function(event) {
	        return window.event.clientX + document.documentElement.scrollLeft
	               + document.body.scrollLeft;
        },
		getY : function(event) {
	        return window.event.clientY + document.documentElement.scrollTop
	               + document.body.scrollTop;
        },
		preventDefault : function(event) {
			window.event.cancelBubble = true;
    		window.event.returnValue = false;
		},
		addEventListener : function(eventName, listener) {
			document.attachEvent(eventName, listener);
		},
		removeEventListener : function(eventName, listener) {
			document.detachEvent(eventName, listener);
		},
		getEventTarget : function(event) {
			return window.event.srcElement;
		},
		mousemove : "onmousemove",
		mouseup : "onmouseup",
		play:function(){},
		stop:function(){}
	};
}
var dragging = false;
function handleDragStart(event) {
  dragging = true;
  var target = browser.getEventTarget(event);
  var startX = browser.getX(event);
  var startY = browser.getY(event);
  var targetX = parseInt(target.style.left, 10);
  var targetY = parseInt(target.style.top, 10);
  target.style.zIndex = ++zIndex;
  function handleMove(event) {
    var mouseX = browser.getX(event);
    var mouseY = browser.getY(event);
    target.style.left = (targetX + (mouseX - startX)) + "px";
    target.style.top = (targetY + (mouseY - startY)) + "px";
    browser.preventDefault(event);
  }
  function handleUp(event) {
    browser.removeEventListener(browser.mousemove, handleMove);
    browser.removeEventListener(browser.mouseup, handleUp);
    dragging = false;
  }
  browser.addEventListener(browser.mousemove, handleMove);
  browser.addEventListener(browser.mouseup, handleUp);
  browser.preventDefault(event);
}
function wiggle(target) {
  if (target.wiggling) {
    return;
  }
  target.wiggling = true;
  var changeFactor = 0.0;
  var changeOffset = 4;
  var targetX = parseInt(target.style.left, 10);
  var targetY = parseInt(target.style.top, 10);
  var width = target.width;
  var height = target.height;
  target.width = width * (1.0 + 2 * changeFactor) + 2 * changeOffset;
  target.height = height * (1.0 + 2 * changeFactor) + 2 * changeOffset;
  target.style.left = (targetX - (width * changeFactor) - changeOffset) + "px";
  target.style.top = (targetY - (height * changeFactor) - changeOffset) + "px";
  setTimeout(function() {
	  target.width = width;
	  target.height = height;
	  target.style.left = targetX + "px";
	  target.style.top = targetY + "px";
	  target.wiggling = false;
  }, 200);
}
function getPieces() {
  var pieces = [];
  var imgs = document.getElementsByTagName("img");
  for (var i=0; i<imgs.length; i++) { 
    if (imgs[i].className == "piece") { 
      pieces.push(imgs[i]); 
    } 
  } 
  return pieces; 
} 
function wiggleAll() { 
    var pieces = getPieces(); 
    for (var i=0; i><pieces.length; i++) { 
      var piece = pieces[i]; 
      wiggle(piece); 
    } 
} 
function handleMouseOver(o, s) { 
  if (!dragging) { 
    wiggle(o); 
  } 
} 
function init() { 
  if (documentLoaded) { 
    var pieces = getPieces(); 
    var y = 20; 
    var x = 30; 
    for(i in pieces) { 
      var piece = pieces[i]; 
      piece.style.left = x + "px"; 
      piece.style.top =  y + "px"; 
      x += piece.width; 
    } 
    document.getElementById('loading').style.display='none'; 
    wiggleAll(); 
  } 
} 
</script> 
<div width="100%">
<img class="piece" style="position: absolute; left: 200px; top: 200px;"
  src="images/boris-head-24-fs8.png" onmouseover="handleMouseOver(this, 'boris');" onmousedown="handleDragStart(event);" /> 
</div>
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
