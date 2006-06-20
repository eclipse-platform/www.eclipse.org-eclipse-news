<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# sample_list.php
	#
	# Author: 		Denis Roy
	# Date:			2005-11-07
	#
	# Description: Type your page comments here - these are not sent to the browser
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "CVS Development Resources";
	$pageKeywords	= "CVS, development, resources";
	$pageAuthor		= "";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<p>Back to the <a href="index.php">CVS Main Page</a></p>
		<div class="homeitem3col">
			<h3>FAQ</h3>
			<a name="FAQ"></a>
			<p>All FAQ items are addressed in the <a href="http://wiki.eclipse.org/index.php/CVS_FAQ">CVS FAQ Wiki</a>.</p>
		</div>
		<div class="homeitem3col">
			<h3>Plugins</h3>
			<a name="Plugins"></a>
			<p>The CVS component is made up of the following plugins:</p>
			 <ul>        
          		<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.team.cvs.core">org.eclipse.team.cvs.core</a></li>
          		<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.team.cvs.ui">org.eclipse.team.cvs.ui</a></li>
                <li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.team.cvs.ssh">org.eclipse.team.cvs.ssh</a></li>
                <li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.team.cvs.ssh2">org.eclipse.team.cvs.ssh2</a></li>
                <li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.team.tests.cvs.core">org.eclipse.team.tests.cvs.core</a></li>
 			</ul>
		</div>
		<div class="homeitem3col">
			<h3>Documents</h3>
			<a name="Documents"></a>
			<ul>
			<li>3.2 <a href="r3.2/plan.php">development</a> plan.<br>
			3.2 <a href="r3.2/3_2_testing.html">testing</a> plan.</li>
			<li>How to run the <a href="junits.php">CVS JUnit tests</a>.</li>
			<li>Documents from <a href="archivedReleases.php">previous releases</a>.</li></ul>
		</div>
		<div class="homeitem3col">
			<h3>Bugs</h3>
			<a name="Bugs"></a>
			<p>Here are some of the bugs crawling around the CVS component:</p>
			<dl>
			<dt><b>Quick Overview</b></dt>
			<dd><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&classification=Eclipse&product=Platform&component=CVS&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailassigned_to1=1&emailtype1=substring&email1=platform-cvs&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">All open bugs in the CVS inbox</a></dd>
			<dd><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&classification=Eclipse&product=Platform&component=CVS&target_milestone=3.3&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailassigned_to1=1&emailtype1=substring&email1=platform-cvs&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">Open bugs in the CVS inbox targeted for 3.3</a></dd>
			<dd><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&classification=Eclipse&product=Platform&component=CVS&target_milestone=3.2.1&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailassigned_to1=1&emailtype1=substring&email1=platform-cvs&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">Open bugs in the CVS inbox targeted for 3.2.1</a></dd></dl>
			<dl><dt><b>Help Wanted</b></dt>
			<dd><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&classification=Eclipse&product=Platform&component=CVS&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=helpwanted&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailassigned_to1=1&emailtype1=substring&email1=platform-cvs&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">Bugs that we need help with</a></dd>
			</dl>
			<dl>
			<dt><b>3.3 Release</b></dt>
			<dd><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&classification=Eclipse&product=Platform&component=CVS&target_milestone=3.3&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&emailassigned_to1=1&emailtype1=notregexp&email1=platform-cvs&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">Assigned defects with no specific milestone for 3.3</a></dd>
			<dd><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&classification=Eclipse&product=Platform&component=CVS&target_milestone=3.3&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_severity=enhancement&emailassigned_to1=1&emailtype1=notregexp&email1=platform-cvs&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">Assigned enhancements with no specific milestone for 3.3</a></dd>
			</dl>
			<dl>
			<dt><b>3.2.1 Release</b></dt>
			<dd><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&classification=Eclipse&product=Platform&component=CVS&target_milestone=3.2.1&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&emailassigned_to1=1&emailtype1=notregexp&email1=platform-cvs&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">Assigned defects for 3.2.1</a></dd>
			</dl>
			<p>To facilitate bug searches, we try to place all incoming bugs into one of the following categories:</p>
			<dl>
				<dd><a href="">Actions</a> - bugs that deal with CVS actions.</dd>
				<dd><a href="">Annotate View</a> - bugs that deal with the Annotate View</dd>
				<dd><a href="">Change Sets</a> - bugs that deal with Change Sets.</dd>
				<dd><a href="">Commands</a> - bugs that deal with the CVS command infrastrucutre.</dd>
				<dd><a href="">Connection</a> - bugs that deal with connecting to CVS</dd>
				<dd><a href="">Console View</a> - bugs that deal with the Console View.</dd>
				<dd><a href="">Decorators</a> - bugs that deal with CVS decorators.</dd>
				<dd><a href="">History</a> - bugs that deal with the CVS implementation of the History API</dd>
				<dd><a href="">History View</a> - bugs that deal with the CVS implementation of the History View page</dd>
				<dd><a href="">Misc</a> - bugs that defy categorization.</dd>
				<dd><a href="">Model Support</a> - bugs that deal with the model API</dd>
				<dd><a href="">Modules</a> - bugs that deal with CVS Modules</dd>
			   	<dd><a href="">Operations</a> - bugs that deal with CVS operations.</dd>
			   	<dd><a href="">Patch</a> - bugs that deal with Patching</dd>
			   	<dd><a href="">Preferences</a> - bugs that deal with the CVS preference page</dd>
			   	<dd><a href="">Repo View</a> - bugs that deal with the Repo View.</dd>
				<dd><a href = "">Resources</a> - bugs that deal with CVS Resource</dd>
				<dd><a href = "">Subscriber</a> - bugs that deal with the Subscriber API</dd>
				<dd><a href="">Sync Info</a> - bugs that deal with the Sync info infrastrcuture</dd>
				<dd><a href="">Sync View</a> - bugs that deal with the Sync View</dd>
				<dd><a href="">Tags</a> - bugs that deal with Tags</dd>
				<dd><a href="">Tests</a> - bugs that deal with CVS JUnit tests</dd>					
				<dd><a href="">Watch/Edit</a> - bugs that deal with the Watch/Edit feature</dd>
				<dd><a href="">Wizards</a> - bugs that deal with the CVS Wizards</dd>
			</dl>
		</div>
		
			<div class="homeitem3col">
			<h3>Mailing List</h3>
			<a name="Mail"></a>
		 <ul>
        <li><a
 href="http://dev.eclipse.org/mailman/listinfo/platform-cvs-dev">platform-cvs-dev@eclipse.org</a> 
           (<a href="mailto:platform-cvs-dev@eclipse.org">post</a>, <a
 href="http://dev.eclipse.org/mhonarc/lists/platform-cvs-dev/maillist.html">archives</a>)</li>  
      </ul>
	</div>
		
	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Quick Links</h6>
			<ul>
				<li><a href="#FAQ">FAQ</a></li>
				<li><a href="#Plugins">Plugins</a></li>
				<li><a href="#Documents">Documents</a></li>
				<li><a href="#Bugs">Bugs</a></li>
				<li><a href="#Mail">Mailing Lists</a></li>
			</ul>
		</div>
	</div>
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>CVS Related Links</h6>
			<ul><li><a href="http://wiki.eclipse.org/index.php/CVS_FAQ">CVS FAQ Wiki</a></li>
				<li><a href="http://eclipse.org/eclipse/platform-team/">Team Support</a></li>
			</ul>
		</div>
	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
