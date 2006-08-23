<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# template.php
	#
	# Author: 		Denis Roy
	# Date:			2005-06-16
	#
	# Description: Type your page comments here - these are not sent to the browser
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Platform Debug Project";
	$pageKeywords	= "Type, page, keywords, here";
	$pageAuthor		= "Type your name here";
	
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
		<h2>Open Source Community</h2>
		<p> Eclipse is an open source community whose projects are focused on providing an extensible development platform and application frameworks for building software. Eclipse provides extensible tools and frameworks that span the software development lifecycle, including support for modeling, language development environments for Java, C/C++ and others, testing and performance, business intelligence, rich client applications and embedded development. A large, vibrant ecosystem of major technology vendors, innovative start-ups, universities and research institutions and individuals extend, complement and support the Eclipse Platform.<br /> <a href="#">more about eclipse &raquo;</a> </p>
		<div class="homeitem">
			<h3>Community News</h3>
			<ul>
				<li><a href="#">Eclipse Magazin, Volume 3 - Titelthema: Eclipse Rich Clients</a>. Zudem stellt das Eclipse Magazin seine <a href="#">'Eclipse Plug-in Collection'</a> vor, die ab sofort online verf&uuml;gbar ist. <span class="dates">02/05/05</span></li>
				<li><a href="#">Eclipse Magazin, Volume 3 - Titelthema: Eclipse Rich Clients</a>. Zudem stellt das Eclipse Magazin seine <a href="#">'Eclipse Plug-in Collection'</a> vor, die ab sofort online verf&uuml;gbar ist. <span class="dates">02/05/05</span></li>
				<li><a href="#">Eclipse Magazin, Volume 3 - Titelthema: Eclipse Rich Clients</a>. Zudem stellt das Eclipse Magazin seine <a href="#">'Eclipse Plug-in Collection'</a> vor, die ab sofort online verf&uuml;gbar ist. <span class="dates">02/05/05</span></li>
				<li><a href="#">Eclipse Magazin, Volume 3 - Titelthema: Eclipse Rich Clients</a>. Zudem stellt das Eclipse Magazin seine <a href="#">'Eclipse Plug-in Collection'</a> vor, die ab sofort online verf&uuml;gbar ist. <span class="dates">02/05/05</span></li>
			</ul>
		</div>
		<div class="homeitem">
			<h3>Community News</h3>
			<ul>
				<li><a href="#">Eclipse Magazin, Volume 3 - Titelthema: Eclipse Rich Clients</a>. Zudem stellt das Eclipse Magazin seine <a href="#">'Eclipse Plug-in Collection'</a> vor, die ab sofort online verf&uuml;gbar ist. <span class="dates">02/05/05</span></li>
				<li><a href="#">Eclipse Magazin, Volume 3 - Titelthema: Eclipse Rich Clients</a>. Zudem stellt das Eclipse Magazin seine <a href="#">'Eclipse Plug-in Collection'</a> vor, die ab sofort online verf&uuml;gbar ist. <span class="dates">02/05/05</span></li>
				<li><a href="#">Eclipse Magazin, Volume 3 - Titelthema: Eclipse Rich Clients</a>. Zudem stellt das Eclipse Magazin seine <a href="#">'Eclipse Plug-in Collection'</a> vor, die ab sofort online verf&uuml;gbar ist. <span class="dates">02/05/05</span></li>
				<li><a href="#">Eclipse Magazin, Volume 3 - Titelthema: Eclipse Rich Clients</a>. Zudem stellt das Eclipse Magazin seine <a href="#">'Eclipse Plug-in Collection'</a> vor, die ab sofort online verf&uuml;gbar ist. <span class="dates">02/05/05</span></li>
			</ul>
		</div>
		<div class="homeitem">
			<h3>Community News</h3>
			<ul>
				<li><a href="#">Eclipse Magazin, Volume 3 - Titelthema: Eclipse Rich Clients</a>. Zudem stellt das Eclipse Magazin seine <a href="#">'Eclipse Plug-in Collection'</a> vor, die ab sofort online verf&uuml;gbar ist. <span class="dates">02/05/05</span></li>
				<li><a href="#">Eclipse Magazin, Volume 3 - Titelthema: Eclipse Rich Clients</a>. Zudem stellt das Eclipse Magazin seine <a href="#">'Eclipse Plug-in Collection'</a> vor, die ab sofort online verf&uuml;gbar ist. <span class="dates">02/05/05</span></li>
				<li><a href="#">Eclipse Magazin, Volume 3 - Titelthema: Eclipse Rich Clients</a>. Zudem stellt das Eclipse Magazin seine <a href="#">'Eclipse Plug-in Collection'</a> vor, die ab sofort online verf&uuml;gbar ist. <span class="dates">02/05/05</span></li>
				<li><a href="#">Eclipse Magazin, Volume 3 - Titelthema: Eclipse Rich Clients</a>. Zudem stellt das Eclipse Magazin seine <a href="#">'Eclipse Plug-in Collection'</a> vor, die ab sofort online verf&uuml;gbar ist. <span class="dates">02/05/05</span></li>
			</ul>
		</div>
		<hr class="clearer" />
	</div>
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>New to Eclipse?</h6>
			<ul>
				<li><a href="#">Community Resources</a></li>
				<li><a href="#">News Corner</a></li>
				<li><a href="#">Newsgroup</a></li>
				<li><a href="#">Registration</a></li>
				<li><a href="#">Downloads</a></li>
				<li><a href="#">Legal</a></li>
				<li><a href="#">Eclipse Roadmap</a></li>
				<li><a href="#">Document</a></li>
			</ul>
		</div>
		<div class="sideitem">
			<h6>Project Links</h6>
			<ul>
				<li><a href="#">Business Intelligence and Reporting</a></li>
				<li><a href="#">Platform</a></li>
				<li><a href="#">Technology Project</a></li>
				<li><a href="#">Test &amp; Performance Tools Platform</a></li>
				<li><a href="#">Web Tools</a></li>
				<li><a href="#">Project Proposals</a></li>
				<li><img src="images/jdj.jpg" width="40" height="42" class="inset" /><a href="#">Cast your vote for Eclipse</a></li>
				<li><a href="#">Eclipse wins Jolt Award</a><br /><img src="images/jolt.jpg" width="100" height="68" /></li>
			</ul>
		</div>
	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
