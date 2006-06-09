<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Core";
	$pageKeywords	= "core, runtime, resources, jobs, preferences";
	
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
		<h1><?= $pageTitle ?></h1>
		<h2>the foundation of the platform</h2>
		<p>The Core component forms the base of the Eclipse platform's runtime configuration. 
		It includes mechanisms and facilities for:</p>
		<ul>
			<li>booting and running the platform</li>
	        <li>plug-in declaration and management</li>
	        <li>resource management</li>
		</ul>
		<p>The Core is excruciatingly generic -- all plug-ins installed and run 
		on the Core infrastructure are treated equally. The contents of resources 
		are never examined in any domain-specific way and the Core can run equally 
		well with and without a UI. 
		</p><p>
	    Note that much of the Core component's function now falls under the 
	    <a href="http://eclipse.org/equinox">Equinox OSGi project</a>
	    </p>
		
		</p>
		<div class="homeitem3col">
		  <h3>Get involved!</h3>
	      <p>If you are interested in participating in the development of the Core 
	        component, check out the developer's mailing list: <a href="http://dev.eclipse.org/mailman/listinfo/platform-core-dev">platform-core-dev@eclipse.org</a>. 
	        Chat with people there about your problems and interests, and find out 
	        what you can do to help. </p>
	      <p>In particular, if you are interested in system level code and are intimately 
	        familiar with Java classloading, thread management, filesystem resource 
	        management on a variety of operating systems, Windows/Linux filesystem 
	        callback management, or programming for speed/space, the Core team wants 
	        to talk to you.</p>
	      <p>Upcoming work is primarily in the details of currently supported function.</p>
		</div>
	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Core links</h6>
			<ul>
				<li><a href="main.html">[home]</a></li>
				<li><a href="documents.html">[documents]</a></li>
				<li><a href="downloads.html">[downloads]</a></li>
				<li><a href="resources.html">[resources]</a></li>
				<li><a href="planning.html">[planning]</a></li>
				<li><a href="testing.html">[testing]</a></li>
			</ul>
		</div>
	</div>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
