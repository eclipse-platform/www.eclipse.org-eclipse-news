<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Core planning";
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
		<h3>Test Plans</h3>
			<ul>
				<li><a href="documents/3.1/test_plan.html">Test 
				plan</a> for core plug-ins</li>
			</ul>
		</div>

		<div class="homeitem3col">
		<h3>Archives</h3>
			<p>Click <a href="documents/test_plan_30.html">here</a> for the Core test plan for 3.0.</p>
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
