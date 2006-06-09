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

		<div class="homeitem3col">
		  <h3>About the core component</h3>
			<p>The core component provides basic platform infrastructure that
			does not involve any UI.  It is currently comprised of the following principal plug-ins:
			</p>
			<ul>
				<li><b>org.eclipse.core.contenttype</b> - Support for defining and managing file content types</li>
				<li><b>org.eclipse.core.expressions</b> - A generic XML-based expression language used in the
				markup of various extension points.</li>
				<li><b>org.eclipse.core.filesystem</b> - A generic file system API</li>
				<li><b>org.eclipse.core.jobs</b> - Infrastructure for concurrent programming in Eclipse</li>
				<li><b>org.eclipse.core.resources</b> - Management of resources - projects, folders, and files</li>
				<li><b>org.eclipse.core.runtime</b> - Formerly the foundation of the platform, this plug-in
				has largely been supplanted by the <a href="http://eclipse.org/equinox">Equinox</a> runtime</li>
			</ul>
			<p>These plug-ins are excruciatingly generic -- each provides a basic
			set of services, and API and extension points for managing and interacting
			with those services.  The contents of resources are never examined in 
			any domain-specific way and the Core can run equally well with and without a UI. 
			</p><p>
		    Note that much of the function previously provided by core now falls under the 
		    <a href="http://eclipse.org/equinox">Equinox OSGi project</a>
		    </p>
	    </div>
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
		</div>
	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Core links</h6>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="documents.php">Documents</a></li>
				<li><a href="downloads.php">Downloads</a></li>
				<li><a href="resources.php">Resources</a></li>
				<li><a href="planning.php">Planning</a></li>
				<li><a href="testing.php">Testing</a></li>
			</ul>
		</div>
	</div>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
