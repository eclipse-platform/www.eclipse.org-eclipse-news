<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Core documents";
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
		<h3>Articles</h3>
			<ul>
				<li>September 2004 -  <a href="http://www.eclipse.org/articles/Article-Branding/branding-your-application.html"/> Branding your application</a> by Andrew Eidsness and Pascal Rapicault</li>
				<li>January 2003 - <a href="http://www.eclipse.org/articles/Article-Builders/builders.html">Builders and Natures</a> by John Arthorne</li>
				<li>August 2002 - <a href="http://www.eclipse.org/articles/Article-Resource-deltas/resource-deltas.html">Responding 
				to resource changes in the Eclipse workspace</a> by John Arthorne</li>
			</ul>
		</div>

		<div class="homeitem3col">
		<h3>General core documents</h3>
			<ul>
				<li><a href="http://dev.eclipse.org/conventions.html">Coding Conventions 
				  - Eclipse</a></li>
				<li><a href="documents/coding_conventions.html">Coding Conventions - Platform/Core 
				  Team</a></li>
				<li><a href="documents/core_formatting.xml">Code Formatting - Platform/Core 
				  Team Code Format Template</a></li>
				<li><a href="runtime/index.html">The OSGi-based runtime</a></li>
				<li><a href="documents/core_overview.html">Core Overview</a></li>
				<li><a href="documents/update.html">Eclipse Update Site</a></li>
				<li><a href="documents/session_tests.html">Session Test Framework</a></li>
			</ul>
		</div>

		<div class="homeitem3col">
		<h3>Active work</h3>
			<p>We are just finishing up the Eclipse 3.2 (Callisto) release, and are
			starting to formulate plans for the 3.3 (Europa) release. Stay tuned for
			details...</p>
		</div>

		<div class="homeitem3col">
		<h3>Archive</h3>
			<p>
			Eclipse 3.2:
			<ul>
				<li><a href="documents/plugin-versioning.html">Plug-in Versioning</a></li>
				<li><a href="documents/3.2/flexible_workspaces/">Flexible workspaces</a></li>
			</ul>
		    Eclipse 3.1:
		    <ul>
		        <li> User Settings/Preferences <a href="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/platform-ui-home/R3_1/dynamic_teams/dynamic_teams.html">(Dynamic 
		          Team page</a>, <a href="documents/user_settings/index.html">Core page</a>)</li>
		        <li> <a href="documents/history_store.html">History 
		          store</a> modifications</li>
		        <li> <a href="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/platform-ui-home/permissions-proposal/permissions-proposal.html">File 
		          Attributes</a></li>
		        <li> <a href="documents/3.1/large_scale_issues.html">Issues 
		          with large-scale development</a></li>
		        <li> <a href="documents/3.1/message_bundles.html">Message 
		          bundles</a></li>
		        <li> <a href="documents/3.1/run_from_jars.html">Running 
		          Eclipse from JARs</a></li>
		        <li> <a href="documents/rfc/0010/dynamic_capabilities.html">Markup 
		          to express bundle dynamic capabilities</a></li>
		        <li><a href="documents/3.1/perf_stats.html"> 
		          Gathering performance statistics</a> [March 2005]</li>
		        <li><a href="documents/3.1/debug.html">Gathering 
		          Information about your plug-in</a> [June 2005]</li>
		        <li><a href="documents/path_changes.html">Lifting restrictions on IPath 
		          characters (the colon/slash problem)</a> [October 2004]</li>
		    </ul>
		    Eclipse 3.0:
		    <ul>
		        <li> <a href="planning/3.0/plan_content_types.html">Content 
		          Types</a></li>
		        <li> <a href="planning/3.0/plan_encoding.html">File 
		          Encoding</a></li>
		    </ul>
		    Eclipse 1.0 to 2.1:
		    <ul>
		        <li><a href="documents/2.0/remote-development.html"> 
		          Eclipse Remote Development Guidelines</a> (draft) [April 2002]</li>
				<li><a href="documents/rfc/index.html">RFCs</a> (mostly from 2.0)</li>
		        <li>Inflexible Project Structure - <a href="http://www.eclipse.org/eclipse/development/inflexible-projects-problem.html">Problem 
		          Definition</a>, <a href="http://www.eclipse.org/eclipse/development/towards-more-flexible-projects.html">Possible 
		          Solutions</a>, and the <a href="http://www.eclipse.org/eclipse/development/flexible-projects-proposal.html">Proposed 
		          Solution</a></li>
				<li><em>(obsolete)</em> <a href="docs/classloader-properties/classloader_properties.html">Using 
		          the Class Loader Properties File</a></li>
				<li><em>(obsolete)</em> <a href="docs/package-prefixes/prefixes.html">Using Package Prefixes 
		          in the plugin.xml</a></li>
			</ul>
		</div>

	</div>

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
