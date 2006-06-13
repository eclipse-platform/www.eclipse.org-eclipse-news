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
	$pageTitle 		= "WebDAV and FTP Support";
	$pageKeywords	= "Team, target management, WebDAV, FTP";
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
		<p>Back to the <a href="dev.php">Team Development Page</a></p>
		<p>These plugins provide Target management support. They will enable users to manage files between
		a local location (either the local filesystem or an Eclipse workspace) and a remote location (by using
		FTP or WebDAV). Note that these plugins <em>are not under active development</em>.
		</p>
		<div class="homeitem3col">
		<h3>Plugins</h3>
		<a name="plugins"></a>
		<p>The FTP and WebDAV plugins have been structured in such a manner that they can 
		be used in either a RCP application or with the full Eclipse SDK. The plugins
		are organized as follows:
		</p>
		<H4>Core</H4>
		The Core plugins are responsible for providing the base infrastructure needed to
		create FTP and WebDAV clients.
		<ul>
		<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/platform-vcm-home/plugins/target/org.eclipse.ftp/">org.eclipse.ftp</a></li>
		<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.webdav/">org.eclipse.webdav</a></li>
		</ul>
		<H4>Target</H4>
		The Target group of plugins provide the main funtionality for Target Management. They sit on top of the Core plugins and provide full FTP and
		WebDAV client implementations that will run in an RCP application. 
		<ul>
		<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/platform-vcm-home/plugins/target/org.eclipse.target/">org.eclipse.target</a></li>
		<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/platform-vcm-home/plugins/target/org.eclipse.target.ftp/">org.eclipse.target.ftp</a></li>
		<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/platform-vcm-home/plugins/target/org.eclipse.target.webdav/">org.eclipse.target.webdav</a></li>
		<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/platform-vcm-home/plugins/target/org.eclipse.target.ide/">org.eclipse.target.ide</a></li>
		<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/platform-vcm-home/plugins/target/org.eclipse.target.iofile/">org.eclipse.target.iofile</a></li>
		<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/platform-vcm-home/plugins/target/org.eclipse.target.rcp/">org.eclipse.target.rcp</a></li>
		<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/platform-vcm-home/plugins/target/org.eclipse.team.target/">org.eclipse.team.target</a></li>
		</ul>
		<H4>Team</H4>
		The Team plugins add Sync View support for WebDAV and FTP. They sit on top of the Target layer.
		<ul>
		<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.team.ftp/">org.eclipse.team.ftp</a></li>
		<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.team.webdav/">org.eclipse.team.webdav</a></li>
		<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.team.extras/">org.eclipse.team.extras</a></li>
		</ul>
		</div>
		
		
		<div class="homeitem3col">
		<h3>Downloads</h3>
			<a name="downloads"></a>
			<ul>
			<li>The WebDAV and FTP plugins are built as part of the <a href="http://download.eclipse.org/eclipse/downloads/">platform build</a>. Click
			on whatever build you're interested in and scroll down to the "FTP and WebDAV Support" section.</li>
			</ul>
			<ul>
			<li>Also available are two Team project sets which will load the plugins directly into your
				workspace. :
				<ul><li><a href="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/platform-vcm-home/plugins/target/target-project-sets/all-target.psf">All the plugins (both RCP and IDE)</a> </li></ul>
				<ul><li><a href="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/platform-vcm-home/plugins/target/target-project-sets/rcp-target.psf">Plugins suitable for use in an RCP application</a></li></ul>
				Save the desired set to your local file system and then inport it using the Team Project Set import wizard in Eclipse (File>Import and select Team>Team Project Set). 
			</li>
			</ul>		
		</div>
		
	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Quick Links</h6>
			<ul>
				<li><a href="#plugins">Plugins</a></li>
				<li><a href="#downloads">Downloads</a></li>
			</ul>
		</div>
	</div>
	
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Team Related Links</h6>
			<ul><li><a href="http://wiki.eclipse.org/index.php/Team_FAQ">Team FAQ Wiki</a></li>
			</ul>
		</div>
	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
