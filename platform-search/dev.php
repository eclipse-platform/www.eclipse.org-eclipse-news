<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Search Component Development Resources";
	$pageKeywords	= "Search, text search, development, tools, ide, Eclipse";
	$pageAuthor		= "Search Team";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
ob_start();
?>
	<div id="midcolumn">
		<h1><?= $pageTitle ?></h1>
		
		<div class="homeitem3col">
			<a name="bugs"></a>
			<h3>Bugs</h3>
			<ul>
				<li>
				<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&priority=P1&email1=&emailtype1=substring&emailassigned_to1=1&email2=&emailtype2=substring&emailreporter2=1&bugidtype=include&bug_id=&changedin=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&product=Platform&version=&component=Search&short_desc=&short_desc_type=allwordssubstr&long_desc=&long_desc_type=allwordssubstr&keywords=&keywords_type=anywords&field0-0-0=noop&type0-0-0=noop&value0-0-0=&cmdtype=doit&order=Reuse+same+sort+as+last+time" target="_top">Priority
				1</a></li>
				
				<li>
				<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&email1=&emailtype1=substring&emailassigned_to1=1&email2=&emailtype2=substring&emailreporter2=1&bugidtype=include&bug_id=&changedin=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&product=Platform&component=Search&short_desc=&short_desc_type=allwordssubstr&long_desc=&long_desc_type=allwordssubstr&keywords=&keywords_type=anywords&field0-0-0=noop&type0-0-0=noop&value0-0-0=&cmdtype=doit&newqueryname=&order=Reuse%2Bsame%2Bsort%2Bas%2Blast%2Btime" target="_top">New,
				Assigned and Reopened</a>&nbsp;</li>
				
				<li>
				<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&email1=&emailtype1=substring&emailassigned_to1=1&email2=&emailtype2=substring&emailreporter2=1&bugidtype=include&bug_id=&changedin=7&votes=&chfield=resolution&chfieldfrom=&chfieldto=Now&chfieldvalue=&product=Platform&version=&component=Search&short_desc=&short_desc_type=allwordssubstr&long_desc=&long_desc_type=allwordssubstr&keywords=&keywords_type=anywords&field0-0-0=noop&type0-0-0=noop&value0-0-0=&cmdtype=doit&order=Reuse+same+sort+as+last+time" target="_top">Resolved
				in the last week</a></li>
			</ul>
		</div>
		
		<div class="homeitem3col">
			<a name="documents"></a>
			<h3>Documents</h3>
			<ul>
				<li><a href="http://dev.eclipse.org/conventions.html">coding conventions</a></li>
				<li><a href="../../jdt/ui/ui-messages.php">common ui message issues</a></li>
			</ul>
		</div>
		
		<div class="homeitem3col">
			<a name="plugins"></a>
			<h3>Plug-ins</h3>
			<p>The Search component consists of the following plug-in:</p>
			<ul>
				<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.search" target="_top">org.eclipse.search</a></li>
			</ul>
		</div>
		
		<div class="homeitem3col">
			<a name="lists"></a>
			<h3>Mailing Lists</h3>
			<ul>
				<li>
					<a href="http://dev.eclipse.org/mailman/listinfo/platform-search-dev">platform-search-dev@eclipse.org</a>
					(<a href="mailto:platform-search-dev@eclipse.org">post</a>,
					<a href="http://bugs.eclipse.org/mhonarc/lists/platform-search-dev/maillist.html">archives</a>)
				</li>
			</ul>
		</div>
	</div>
	
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Quick links</h6>
			<ul>
				<li><a href="#bugs">Bugs</a></li>
				<li><a href="#documents">Documents</a></li>
				<li><a href="#plugins">Plug-ins</a></li>
				<li><a href="#lists">Mailing List</a></li>
			</ul>
		</div>
	</div>
	

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
