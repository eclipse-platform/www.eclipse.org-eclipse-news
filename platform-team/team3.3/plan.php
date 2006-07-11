<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Team Component 3.3 Development Plan";
	$pageKeywords	= "Eclipse, Team, 3.3, development plan";
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
		<p>Back to the <a href="../dev.php">Team Component Page</a></p>

			<table border="0" cellspacing="10" cellpadding="0">
			  <tbody>
			    <tr>
			      <td><img src="../images/progress.gif" alt="under development"> item
			is under development</td>
			      <td><img src="../images/ok.gif" height="10" width="10" alt="finished"> item is
			finished</td>
			      <td><font class="indexsub" alt="deferred">[&gt;3.3]</font> item is deferred</td>
			    </tr>
			  </tbody>
			</table>
			
			<a name="Themes"></a>
			<h1>Themes for Team 3.3</h1>
			
			<p>The overall themes for this release are detailed below:</p>
			<ul>
			  <li><strong>Compare Improvements</strong>: The Compare infrastructure has not undrgone much change in
			  the last few releases. We plan on addressing the more important issues that have accumulated in that time.
			  Some of these include:
			  <ul>
			      <li>API for change navigation in Compare Editors and Viewers.</li>
			      <li>Use ISaveable API that was introduced in 3.2.</li>
			      <li>Asynchronous population of compare editor content and labels.</li>
			      <li>Proper use of Commands (key bindings) for editor/viewer actions.</li>
			      <li>Support selection of proper ancestor and/or remote within an editor/viewer.</li>
			      <li>Use History view for local and model (e.g. Java) histories.</li>
			      <li>Polish items from Wiki.</li>
			  </ul>
			  </li>
			  <li><strong>Logical Model Integration</strong>: There are several logical model integration related issues
			  that were not addressed in 3.2 that we plan on addressing in 3.3.</li>
			  <li><strong>Improve multi-instance view management</strong>: The Synchronize view and History view are both page 
			  based views but they use different mechanisms to support multiple active pages. In 3.3, we will use the same mechanism 
			  for both and hep investigate improvements to multi-view management to improve the user experience.</li>
			  <li><strong>Eclipse File System</strong>: The Eclipse File System (EFS) API was introduced in 3.2. In 3.3, we 
			  will investigate ways of incorporating this into Team.</li>
			  <li><strong>Configuring projects</strong>: Enabling new capabilities on existing projects, such as adding Java 
              ompilation to a non-Java project, is currently not supported but will be investigatd in 3.3. Team will need to
              partake in this to ensure that the story works for projects imported from a repository.</li>
			</ul>
			
			<h1>3.3 Development Effort - Milestone 1 (Friday, August 11, 2006) </h1>
			<a name="m1"></a>
			
			<ul>
			  <li><strong>Bug fixing</strong>: Target bugs are marked as 3.3 M1.
			  </li>
			  <li><strong>Add History View API that was missing from 3.2</strong>
			  </li>
			  <li><img src="../images/ok.gif" height="10" width="10" alt="finished"><strong>Update actions to use the Commands framework</strong>
			  </li>
			  <li><img src="../images/progress.gif" alt="finished"><strong>Working Set import/export:</strong> Give the user the
			  option to include working sets when exporting project sets.
			  </li>
			</ul>
			<p></p>
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
				<li><a href="../dev.php">Team Component</a></li>
				<li><a href="../../platform-cvs">CVS Component</a></li>
			</ul>
		</div>
	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
