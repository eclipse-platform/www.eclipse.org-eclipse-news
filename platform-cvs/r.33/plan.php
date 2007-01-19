<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse CVS Component 3.3 Development Plan";
	$pageKeywords	= "Eclipse, CVS, 3.3, development plan";
	$pageAuthor		= "Team/CVS team";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<p>Back to the <a href="../index.php">CVS Component Page</a></p>

			<table border="0" cellspacing="10" cellpadding="0">
			  <tbody>
			    <tr>
			      <td><img src="../images/progress.gif" height="5" width="14"> item
			is under development</td>
			      <td><img src="../images/ok.gif" height="10" width="10"> item is
			finished</td>
			      <td><font class="indexsub">[&gt;3.3]</font> item is deferred</td>
			    </tr>
			  </tbody>
			</table>
			
			<a name="Themes"></a>
			<h1>Themes for CVS 3.3</h1>
			
			<p>The overall themes for this release are detailed below:</p>
			<ul>
			  <li><strong>Logical Model Integration</strong>: There are several logical model integration related issues
			  that were not addressed in 3.2 that we plan on addressing in 3.3.</li>
			  <li><strong>Generic Repositories view using Common Navigator framework</strong>: Currently, each repository
			  provider must create their own view for remote browsing. We plan on using the Common Navigator framework
			  to support the inclusion of content from multiple repository types into a single view. CVS
			  will provider a content provider for browsing CVS repositories.</li>
			  <li><strong>Support Eclipse.org projects</strong>: </li>
			  <li><strong>Improve cache management</strong> </li>
			  <li><strong>Improve error handling</strong> </li>
			  <li><strong>Improve background prompting</strong> </li>
			</ul>
			
			<h1>3.3 Development Effort - Milestone 1 (???) </h1>
			<a name="m1"></a>
			
			<ul>
			  <li><strong>Bug fixing</strong>: Target bugs are marked as 3.3 M1.
			  </li>
			  <li><strong>Update actions to use the Commands framework</strong>
			  </li>
			  <li><strong>Improve the working off-line experience</strong>
			  </li>
			</ul>
	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
	<div class="sideitem">
		<h6>Quick Links</h6>
		<ul>
			<li><a href="#Themes">Overall Themes</a></li>
			<li><a href="#m1">Milestone 1</a></li>
			<li><a href="#m2">Milestone 2</a></li>
			<li><a href="#m3">Milestone 3</a></li>
			<li><a href="#m4">Milestone 4</a></li>
			<li><a href="#m5">Milestone 5</a></li>
			<li><a href="#m6">Milestone 6</a></li>
		</ul>
	</div>
	</div>
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="../index.php">CVS Component</a></li>
				<li><a href="../../platform-team">Team Component</a></li>
			</ul>
		</div>
	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
