<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Core resources";
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
		<h3>Bugs</h3>
	      <ul>
	        <li> <a href="https://bugs.eclipse.org/bugs/buglist.cgi?short_desc_type=allwordssubstr&short_desc=&product=Platform&component=Resources&component=Runtime&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&keywords_type=anywords&keywords=&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&priority=P1&emailtype1=substring&email1=&emailreporter2=1&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&changedin=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&namedcmd=5votes&newqueryname=&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=" target="_top">Priority 
	          1</a></li>
	        <li> <a href="https://bugs.eclipse.org/bugs/buglist.cgi?short_desc_type=allwordssubstr&short_desc=&product=Platform&component=Resources&component=Runtime&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&keywords_type=anywords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&emailtype1=substring&email1=&emailreporter2=1&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&changedin=7&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&namedcmd=5votes&newqueryname=&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=" target="_top">Resolved 
	          in the last week</a> </li>
	        <li><a href="https://bugs.eclipse.org/bugs/buglist.cgi?short_desc_type=allwordssubstr&short_desc=&product=Platform&component=Resources&component=Runtime&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&keywords_type=anywords&keywords=&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=REOPENED&emailassigned_to1=1&emailtype1=substring&email1=platform&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&changedin=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&namedcmd=5votes&newqueryname=&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=" target="_top">Inbox</a> 
	          - These are the bug reports which have been entered against the Platform/Core 
	          component and are either awaiting more information from originator or 
	          have not yet been verified as a bug. The general state of bugs in this 
	          query is <em>uncategorized</em>.</li>
	        <li><a href="https://bugs.eclipse.org/bugs/buglist.cgi?short_desc_type=allwordssubstr&short_desc=&product=Platform&component=Resources&component=Runtime&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&keywords_type=anywords&keywords=&bug_status=ASSIGNED&bug_severity=blocker&bug_severity=critical&bug_severity=major&bug_severity=normal&bug_severity=minor&bug_severity=trivial&emailassigned_to1=1&emailtype1=substring&email1=platform&emailreporter2=1&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&changedin=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&namedcmd=5votes&newqueryname=&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=" target="_top">Open 
	          Bugs</a> - These are the bug reports which have either been verified 
	          as real bugs or issues which should be investigated. Feature requests 
	          are <em>not</em> included in this list.</li>
	        <li><a href="https://bugs.eclipse.org/bugs/buglist.cgi?short_desc_type=allwordssubstr&short_desc=&product=Platform&component=Resources&component=Runtime&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&keywords_type=anywords&keywords=&bug_status=ASSIGNED&bug_severity=enhancement&emailassigned_to1=1&emailtype1=substring&email1=platform&emailreporter2=1&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&changedin=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&namedcmd=5votes&newqueryname=&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=" target="_top">Feature 
	          Requests</a> - These are the bug reports which are not bugs but are 
	          features that the user wishes to have added to the Core. They have been 
	          marked with a severity of <em>enhancement</em>.</li>
			  <li>The following prefixes are used on bug summaries in the platform runtime component:
			  <ul>
			  <li>[doc], [jobs], [prefs], [osgi], [content type], [registry], [other]</li>
			  </ul>
		    </li>
	      </ul>
		</div>

		<div class="homeitem3col">
		<h3>Mailing Lists</h3>
	      <ul>
	        <li> <a href="http://dev.eclipse.org/mailman/listinfo/platform-core-dev">platform-core-dev@eclipse.org</a> 
	          (<a href="mailto:platform-core-dev@eclipse.org">post</a>, <a href="http://dev.eclipse.org/mhonarc/lists/platform-core-dev/maillist.html">archives</a>)</li>
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
