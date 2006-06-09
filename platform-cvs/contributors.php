<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Contributors";
	$pageKeywords	= "CVS, contributors";
	$pageAuthor		= "CVS team";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<p>Back to the <a href="index.php">CVS Main Page</a></p>
		<p> The CVS plug-in is the result of contributions from a half-dozen
		developers with the help of hundreds of users across the globe. Some of
		the more prominent contributors are listed below in reverse alphabetical order.</p>
		<div class="homeitem3col">
		<h3>Current</h3>
		<dl>
		<dt><b>Atsuhiko Yamanaka</b></dt>
		<dd>JCraft to the rescue! Yamanaka-san is responsible for the SSH2 CVS
		connection method and the JSch plugin.</dd></dl>
		<dl><dt><b>Michael Valenta</b></dt>
		<dd>Mike is the CVS hacker extraordinaire. Works on every part of the
		plug-in.</dd></dl>
		<dl><dt><b>Bogdan Gheorghe</b></dt>
		<dd>Bogdan joined the Team for the 3.2 release. He's building up to work on every
		part of the plug-in.</dd></dl>
		</div>
		<div class="homeitem3col">
			<h3>Previous</h3>
			<dl><dt><b>James Moody</b></dt>
			<dd>James helped with the UI for the 2.0 release.</dd></dl>
			
			<dl><dt><b>Kevin McGuire</b></dt>
			<dd>Kevin worked on the decorators and helping us ensure that the
			architecture wasn't to complicated! </dd></dl>
			
		
			<dl><dt><b>Jean-Michel Lemieux</b></dt>
			<dd>Jean-Michel has been around since the begining working on pretty
			much every part of the plug-in. Except when he is away on parental
			leave :)</dd></dl>
			
			<dl><dt><b>Boris Bokowski</b></dt>
			<dd>Boris was the first developer of the CVS plug-in. Helped make the
			1.0 release possible before moving on to other things. He is currently
			a member of the UI team.</dd></dl>
		
			<dl><dt><b>John Arthorne</b></dt>
			<dd>John helped with the UI for the 1.0 release.</dd></dl>
		</div>
	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>CVS Related Links</h6>
			<ul><li><a href="http://wiki.eclipse.org/index.php/CVS_FAQ">CVS FAQ Wiki</a></li>
				<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/platform-vcm-home/main.html">Team Support</a></li>
			</ul>
		</div>
	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
