<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Platform UI Incubator";
	$pageKeywords	= "platform ui development resources incubator update site";
	$pageAuthor		= "Platform UI Monkey";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<h2>Installation</h2>
		To install incubator updates please go to Help->Software Updates->Find and Install and add the following as an update site location:   <em>http://www.eclipse.org/eclipse/platform-ui/update</em>.  Please note that these will only work with Eclipse 3.3 or greater at this time.
		
	
	</div>
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Development Resources</h6>
			<ul>
				<liFor Platform UI developers, check out the <a href="dev.html">Development Resources</a></li>
				<li>Interested in what the UI team is currently working on, or past proposals, look at the <a href="docs.html">Proposals</a> list.</li>
				<li><a href="#">If you are contributing to the Platform UI see the <a href="contributing/checklist.html">Contributers Check List</a> we provide to help guide and smooth the process.</li>
			</ul>
		</div>
	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
