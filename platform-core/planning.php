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
		<h3>3.3 release</h3>
			<ul>
				<li>Planning is currently under way for the 3.3 release.</li>
			</ul>
		</div>

		<div class="homeitem3col">
		<h3>3.2 release</h3>
			<ul>
				<li><a href="planning/3.2/plan.html">General 3.2 Core Plan</a></li>
				<li>Check out the <a href="documents.php">documents</a> page for links 
				to some of the major items that we worked on.</li>
			</ul>
		</div>

		<div class="homeitem3col">
		<h3>3.1.1 release</h3>
	      <p>We fixed a number of bugs for the 3.1.1 release in September 2005.
	        Click <a href="https://bugs.eclipse.org/bugs/buglist.cgi?short_desc_type=allwordssubstr&short_desc=&product=PDE&product=Platform&component=Build&component=Resources&component=Runtime&target_milestone=3.1.1&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&keywords_type=allwords&keywords=&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&changedin=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&namedcmd=5votes&newqueryname=&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">here</a> 
	        for a list of bugs for 3.1.1. </p>
		</div>

		<div class="homeitem3col">
		<h3>3.1 release</h3>
			<ul>
				<li><a href="planning/3.1/plan.html">General 3.1 Core Plan</a></li>
				<li><a href="planning/3.1/milestones.html">Milestone Plans</a></li>
				<li><img src="images/new.gif" width="31" height="14"> Core team <a href="planning/3.1/documentation.html">3.1 
				Documentation plan</a></li>
				<li>Check out the <a href="documents.php">documents</a> page for links 
				to some of the major items that we worked on.</li>
			</ul>
		</div>

		<div class="homeitem3col">
		<h3>3.0.1 release</h3>
	      <p>We fixed a minimal set of bugs for the 3.0.1 release in September 2004.
	        Most were TVT bugs, along with the implementation of the file encoding notification 
	        APIs. Click <a href="https://bugs.eclipse.org/bugs/buglist.cgi?short_desc_type=allwordssubstr&short_desc=&product=PDE&product=Platform&component=Build&component=Resources&component=Runtime&target_milestone=3.0.1&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&keywords_type=allwords&keywords=&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&changedin=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&namedcmd=5votes&newqueryname=&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">here</a> 
	        for a list of bugs for 3.0.1. </p>
		</div>

		<div class="homeitem3col">
		<h3>3.0 release</h3>
		<ul>
			<li><a href="planning/3.0/plan.html">General Core plan</a></li>
			<li><a href="planning/3.0/milestones.html">Milestone plans</a></li>
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
