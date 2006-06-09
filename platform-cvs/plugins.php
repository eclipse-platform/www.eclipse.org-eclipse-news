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
	$pageTitle 		= "Plugins";
	$pageKeywords	= "CVS, plugins";
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
		<p> The CVS plug-in is the result of contributions from a half-dozen
		developers with the help of hundreds of users across the globe. Some of
		the more prominent contributors are listed below in alphabetical order.</p>
		<dl>
		<dt><b>Atsuhiko Yamanaka</b></dt>
		<dd>JCraft to the rescue! Yamanaka-san is responsible for the SSH2 CVS
		connection method and the JSch plugin.</dd></dl>
		<dl><dt><b>Boris Bokowski</b></dt>
		<dd>Boris was the first developer of the CVS plug-in. Helped make the
		1.0 release possible and then moved on to creating <a
		 href="http://www.hype.de/">Hype</a>. </dd></dl>
		<dl><dt><b>Kevin McGuire</b></dt>
		<dd>Kevin worked on the decorators and helping us ensure that the
		architecture wasn't to complicated! </dd></dl>
		<dl><dt>Michael Valenta</dt>
		<dd>Mike is the CVS hacker extraordinaire. Worked on every part of the
		plug-in.</dd></dl>
		<dl><dt>James Moody</dt>
		<dd>James helped with the UI for the 2.0 release.</dd></dl>
		<dl><dt>Jean-Michel Lemieux</dt>
		<dd>Jean-Michel has been around since the begining working on pretty
		much every part of the plug-in. Except when he is away on parental
		leave :)</dd></dl>
		<dl><dt>John Arthorne</dt>
		<dd>John helped with the UI for the 1.0 release.</dd></dl>
	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
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
