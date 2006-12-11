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
			
			<div class="homeitem3col">
			<h3>Eclipse Project 3.3 Plan items that effect Team</h3>
			
			<p>The following items which appear on the 
			<a href="http://www.eclipse.org/eclipse/development/eclipse_project_plan_3_3.html">Eclipse Project 3.3 Plan</a>
			will have an effect on the Team/Compare/CVS component.<p>
			<ul>
			    <li><strong>Platform level proxy settings</strong>: When the proxy settings are made available by the
			    Runtime component, the CVS and SSH2 plugins will need to be modified to use the Runtime settings.
			    </li>
			    <li><strong>Managing and sharing settings</strong>: Depending on the eventual solution for this, 
			    there may be support required by Team or CVS.
			    </li>
			    <li><strong>Ship Finer-grained Components</strong>: It is not clear at this time whether this
			    will have an impact on Team/Compare/CVS.
			    </li>
			    <li><strong>Performance focus</strong>: There will be an ongoing effort during 3.3 to assess the
			    performance of existing an new features.
			    </li>
			    <li><strong>Improve multi-instance view management</strong>: Both the Synchronize view and the History
			    view can benefit from improved multi-instane view management.
			    </li>
			    <li><strong>Adopt the Eclipse File System</strong>: The effects of EFS on Team and Compare will be 
			    considered during 3.3.
			    </li>
			    <li><strong>Adopt the new UI features</strong>: The goal is to update the Team, Compare and CVS components
			    to use new UI features that apply when they become available.
			    </li>
			    <li><strong>Improve compare</strong>: The Compare infrastructure has not undrgone much change in
			  the last few releases. We plan on addressing the more important issues that have accumulated in that time.
			    </li>
			</ul>
			
			The next section contains a description of the particular items we plan to address in 3.3.
			</div>
			
			<div class="homeitem3col">
			
			<a name="Themes"></a>
			<h3>Overall Team 3.3 Plan</h3>
			
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
			</ul>
			
			</div>
			
			<div class="homeitem3col">
			
			<h3>3.3 Development Effort - Milestone 1 (Friday, August 11, 2006) </h3>
			<a name="m1"></a>
			
			<ul>
			  <li><img src="../images/ok.gif" height="10" width="10" alt="finished"><strong>Bug fixing</strong>: Target bugs are marked as 3.3 M1.
			  </li>
			  <li><img src="../images/ok.gif" height="10" width="10" alt="finished"><strong>Add History View API that was missing from 3.2</strong>
			  </li>
			  <li><img src="../images/ok.gif" height="10" width="10" alt="finished"><strong>Update actions to use the Commands framework</strong>
			  </li>
			  <li><img src="../images/ok.gif" height="10" width="10" alt="finished"><strong>Working Set import/export:</strong> Give the user the
			  option to include working sets when exporting project sets.
			  </li>
			</ul>
			</div>
			
			<div class="homeitem3col">

			<h3>3.3 Development Effort - Milestone 2 (Friday, September 22, 2006) </h3>
			<a name="m2"></a>
			
			<ul>
			  <li><img src="../images/progress.gif" alt="progress"><strong>Bug fixing</strong>: Target bugs are marked as 
			  <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&classification=Eclipse&product=Platform&component=Compare&component=CVS&component=Team&target_milestone=3.3+M2&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">3.3 M2</a>.
			  </li>
			  <li><img src="../images/progress.gif" alt="progress">Investigate improvements to the Apply Patch wizard
			       <ul>
			       <li><img src="../images/ok.gif" height="10" width="10" alt="finished">Preview changes against workspace (bug <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=40971">40971</a>)
			       </li>
			       <li><em>[deferred to M3]</em> Support for manual merging (bug <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=79372">79372</a>)
			       </li>
			     </ul>
			  </li>
			  <li><img src="../images/ok.gif" height="10" width="10" alt="finished">Investigate the use of file buffers in Compare editors
			  (bug <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=114">114</a>).
			</ul>
			</div>

			<div class="homeitem3col">

			<h3>3.3 Development Effort - Milestone 3 (Friday, November 3, 2006) </h3>
			<a name="m3"></a>
			
			<ul>
			  <li><img src="../images/ok.gif" height="10" width="10" alt="finished"><strong>Bug fixing</strong>: Target bugs are marked as 
			  <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&classification=Eclipse&product=Platform&component=Compare&component=CVS&component=Team&target_milestone=3.3+M3&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">3.3 M3</a>.
			  </li>
			  <li><img src="../images/ok.gif" height="10" width="10" alt="finished">Continue improvements to the Apply Patch wizard
			    <ul>
			       <li>Support for manual merging (bug <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=79372">79372</a>)
			       </li>
			       <li>Provide a Command for Apply Patch.
			       </li>
			    </ul>
			  </li>
			  <li><img src="../images/ok.gif" height="10" width="10" alt="finished">Compare API
			    <ul>
			      <li>Allow clients to extend ContentMergeViewer to the same extent TextMergeViewer does 
			      (bug <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=144638">144638</a>).
			      </li>
			      <li>Give clients access to Compare viewer navigation (bug <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=143858">143858</a>).
			      </li>
			      <li>Allow clients to contribute actions to a CompareEditorInput.
			    </ul>
			  <li><img src="../images/ok.gif" height="10" width="10" alt="finished">Improve Compare Editor Updating.
			    <ul>
			       <li>Update on save (bug <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=41564">41564</a>)
			       </li>
			       <li>Update in response to Team operations (bug <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=39425">39425</a>)
			       </li>
			       <li>Update in response to Resource operations (bug <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=157213">157213</a>)
			       </li>
			       <li>Asynchronous loading and update.
			    </ul>
			  </li>
			  <li><img src="../images/ok.gif" height="10" width="10" alt="finished">Improve Compare Editor Accessibility.
			  </li>
			</ul>
			</div>
			
			<div class="homeitem3col">

			<h3>3.3 Development Effort - Milestone 4 (Friday, December 15, 2006) </h3>
			<a name="m4"></a>
			
			<ul>
			  <li><img src="../images/ok.gif" height="10" width="10" alt="finished"><strong>Bug fixing</strong>: Target bugs are marked as 
			  <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&classification=Eclipse&product=Platform&component=Compare&component=CVS&component=Team&target_milestone=3.3+M4&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">3.3 M4</a>.
			  </li>
			  <li><img src="../images/ok.gif" height="10" width="10" alt="finished">Unfify Compare Navigation UI affordances
			  </li>
			  <li><img src="../images/ok.gif" height="10" width="10" alt="finished">Investigate making parts of Compare asynchronous.
			      <ul>
			       <li>Non-blocking opening of Compare editor.</li>
			      </ul>
			  </li>
			</ul>
			</div>
			
		    <div class="homeitem3col">

			<h3>3.3 Development Effort - Milestone 5 (Friday, February 16, 2007?) </h3>
			<a name="m5"></a>
			
			<ul>
			  <li><strong>Bug fixing</strong>: Target bugs are marked as 
			  <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&classification=Eclipse&product=Platform&component=Compare&component=CVS&component=Team&target_milestone=3.3+M5&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">3.3 M5</a>.
			  </li>
			  <li>Investigate highlighting of word level diffs
			  </li>
			</ul>
			</div>
			
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
