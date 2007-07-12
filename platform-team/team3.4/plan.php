<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Team Component 3.4 Development Plan";
	$pageKeywords	= "Eclipse, Team, 3.4, development plan";
	$pageAuthor		= "Team/Compare/CVS team";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<p>Back to the <a href="../index.php">Team Component Page</a></p>

			<table border="0" cellspacing="10" cellpadding="0">
			  <tbody>
			    <tr>
			      <td><img src="../images/progress.gif" alt="under development"> item
			is under development</td>
			      <td><img src="../images/ok.gif" height="10" width="10" alt="finished"> item is
			finished</td>
			      <td><font class="indexsub" alt="deferred">[&gt;3.4]</font> item is deferred</td>
			    </tr>
			  </tbody>
			</table>
			
			<div class="homeitem3col">
			<h3>Eclipse Project 3.4 Plan items that effect Team</h3>
			
			<p>The following items which appear on the 
			<a href="http://www.eclipse.org/eclipse/development/eclipse_project_plan_3_4.html">Eclipse Project 3.4 Plan</a>
			will have an effect on the Team/Compare/CVS component.<p>
			<ul>
			    <li><strong>Plan item 1</strong>: There is no Eclipse 3.4 plan yet but when there is we'll make sure
			    to update this section.
			    </li>
			</ul>
			
			The next section contains a description of the particular items we plan to address in 3.4.
			</div>
			
			<div class="homeitem3col">
			
			<a name="Themes"></a>
			<h3>Overall Team 3.4 Plan</h3>
			
			<p>The overall themes for this release are detailed below:</p>
			<ul>
			  <li><strong>Adopt new menu/commands</strong> (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=196349">196349</a>): The new menu/commands story has been evolving over the last few releases
			  and should be in a state in 3.4 that will allow the Team, Compare and CVS plug-ins to adopt the support.
			  </li>
			  <li><strong>Adapt editor functionality to Compare Editor</strong> (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=169386">169386</a>): We should continue to provide as much editor capabilities
			  as possible in the compare editor.
			  </li>
			  <li><strong>Improve unmatched patch handling</strong> (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=190844">190844</a>): We would like to provide better visual feedback in the merge viewer when
			  portions of a patch cannot be matched so that the user understands what to do and has some additional tools to help them find a match.
			  </li>
			  <li><strong>Compare with Each Other</strong> (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=193321">193321</a>): We would like to provide a more Synchronize view like work flow to
			  the Compare with Each Other action.
			  </li>
			  <li><strong>Project Configuration</strong>: There are several improvements that can be made around project configuration.
			  Some examples are:
			  <ul>
			  <li>Multi-project sharing (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=104203">104203</a>)</li>
			  <li>Multi-project configuration on checkout/import (e.g. make non-Eclipse projects Java projects). (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=73590">73590</a>)<li>
			  </ul>
			  </li>
			</ul>
			
			</div>
			
			<div class="homeitem3col">
			
			<h3>3.4 Development Effort - Milestone 1 (Friday, August ??, 2007) </h3>
			<a name="m1"></a>
			
			<ul>
			  <li><img src="../images/progress.gif" alt="under development"><strong>Bug fixing</strong>: Target bugs are marked as 3.4 M1.
			  </li>
			</ul>
			</div>
			
			<div class="homeitem3col">
			
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
				<li><a href="../index.php">Team Component</a></li>
				<li><a href="../../platform-cvs">CVS Component</a></li>
			</ul>
		</div>
	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
