<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# index.php
	#
	# Description: eclipse.org cvs main page
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "CVS";
	$pageKeywords	= "Platform, CVS";
	$pageAuthor		= "";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Bog and Tric", "http://www.bogandtric.com/", "_blank", 3);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<h2>Platform CVS Support</h2>
		<p> The goal of the CVS component is to provide the best CVS integration in the 
			best IDE. Because the CVS plug-in includes a pure java client, the support works
			without requiring a command line client install on the users machine. The 
			advantages of writing a custom java client is that we can implement features that
			wouldn't be possible using the command line client (e.g. browsing a remote
		    repository, connection re-use). However, this comes with a disadvantage; we must
		    keep up with CVS server revisions and ports, plus keep up with new features.</p>
	    	<p>The CVS support is not packaged for use outside of an Eclipse workspace. 
	    	It's really an Eclipse CVS client and not a generic java CVS client. It would be 
	    	nice to have, but initially we were focused on rich integration in Eclipse.
	    	Another minor point; the CVS plug-in doesn't expose an API. That means that
	    	accessing the internal classes is technically possible (e.g. we don't restrict
	    	run-time access to the classes) but we don't guarantee binary compatibility between releases.
			</p>
		<div class="homeitem3col">
			<h3>About the CVS component</h3>
			<a name="ABOUT"></a>
			<p></p>
			<ul>
			  <li>This component is responsible for all org.eclipse.team.cvs.* <a href="http://wiki.eclipse.org/index.php/CVS_Development#Plug-ins">plugins</a></li>
			  <li>Everything you always wanted to know about the CVS plugin can be found over in the <a href="http://wiki.eclipse.org/index.php/CVS_FAQ">CVS
			    FAQ Wiki</a>.</li>
			  <li>Online user <a href="http://help.eclipse.org/help32/topic/org.eclipse.platform.doc.user/gettingStarted/qs-60_team.htm">documentation</a>.</li>
			  <li>The <a href="contributors.php">contributors</a>.</li>
			  <li><a href="http://wiki.eclipse.org/index.php/CVS_Plugins">Links</a> to plug-ins 
			    that improve Eclipse CVS<br>
			  </li>
			</ul>
		</div>
		<div class="homeitem3col">
			<h3>Development Resources</h3>
			<a name="DEV"></a>
			<p>If you are already a CVS developer, check out the <a href="http://wiki.eclipse.org/index.php/CVS_Development">Development Resources</a>.</p>
		</div>
		<div class="homeitem3col">
			<h3>What's Happening</h3>
			<a name="HAPPENING"></a>
			<p><img SRC="http://dev.eclipse.org/images/Adarrow.gif" NOSAVE BORDER=0 height=16 width=16>&nbsp;<b>3.4 Development</b>
			<ul>
			<li>Any work planned for CVS in 3.4 will appear on the 
			<a href="http://www.eclipse.org/eclipse/platform-team/team3.4/plan.php">Team 3.4 Development plan</a></li>
			<li>3.4 <a href="r3.4/test_plan.html">test</a> plan.</li>
			</ul>
			</p>
			<p><img SRC="http://dev.eclipse.org/images/Adarrow.gif" NOSAVE BORDER=0 height=16 width=16>&nbsp;<b>3.3 Development</b>
			<ul>
			<li>Any work planned for CVS is 3.3 will appear on the 
			<a href="http://www.eclipse.org/eclipse/platform-team/team3.3/plan.php">Team 3.3 Development plan</a></li>
			<li>3.3 <a href="r3.3/test_plan.html">test</a> plan.</li>
			</ul>
			</p>
			<p><img SRC="http://dev.eclipse.org/images/Adarrow.gif" NOSAVE BORDER=0 height=16 width=16>&nbsp;<b>3.2 Development</b>
			<ul>
			<li><b>3.2 RC7</b> has been released and is available in the <a href="http://download.eclipse.org/eclipse/downloads">downloads</a> area.</li>
			<li>3.2 <a href="r3.2/plan.php">development</a> plan.</li>
			<li>3.2 <a href="r3.2/3_2_testing.html">testing</a> plan.</li>
			<li>3.2 <a href="http://www.eclipse.org/eclipse/development/freeze_plan_3.2.html">endgame plan</a> is available here.</li>
			</ul>
			</p>
			<p><img SRC="http://dev.eclipse.org/images/Adarrow.gif" NOSAVE BORDER=0 height=16 width=16>&nbsp;<b>Archived Releases</b></p>
			<ul><li>Documents from <a href="archivedReleases.php">previous releases</a>.</li></ul>
		</div>
		<div class="homeitem3col">
			<h3>Get Involved</h3>
			<a name="INVOLVED"></a>
			If you are interested in participating in the development of the CVS component, there are several ways of contributing:
			<ul>
    		<li>Fix bugs/enhancement requests that we need <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&classification=Eclipse&product=Platform&component=CVS&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=helpwanted&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">help</a> with.</li>
		    <li>Check out our <a href="http://wiki.eclipse.org/index.php/CVS_Development#Bugs">bug section</a> on the development page and pick something that interests you.</li>
    		<li>Also, check out the developer's mailing list: <a href="http://dev.eclipse.org/mailman/listinfo/platform-cvs-dev">platform-cvs-dev@eclipse.org</a>. Chat with people there about your problems and interests, and find out what you can do to help.</li>
			</ul>
		</div>
	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Quick Links</h6>
			<ul>
				<li><a href="#ABOUT">About CVS</a></li>
				<li><a href="#DEV">Development Resources</a></li>
				<li><a href="#HAPPENING">What's Happening</a></li>
				<li><a href="#INVOLVED">Get Involved</a></li>
			</ul>
		</div>
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
