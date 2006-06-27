<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Search Component";
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
			<a name="dev"></a>
			<h3>Development Resources</h3>
			<p>If you are already a Platform Search developer, check out the <a href="dev.php">Development 
			Resources</a>.</p>
		</div>
		
		<div class="homeitem3col">
			<a name="search"></a>
			<h3>Search</h3>
			<p>The search facility defines the infrastructure for contributing search
			functionality to the workbench. It is extensible and enables the
			contribution of content type specific searching support. For example, the
			JDT component contributes index based Java searching. The search component
			itself provides textual searching. It makes the following contributions to
			the workbench:</p>
			<ul>
				<li>
					<p>A multi page dialog for defining the search arguments. When
					contributing a new search kind, clients contribute a custom page to
					this dialog.</p>
				</li>
				<li>
					<p>A search results view that shows the search matches. When
					contributing a new search kind, clients define how the matches are
					presented, sorted, and how to navigate from a match to the
					corresponding resource.</p>
				</li>
			</ul>
		</div>
		
		<div class="homeitem3col">
			<a name="happening"></a>
			<h3>What's Happening?</h3>
			
			<br>
			<h4> <a name="Milestone_Planning"></a>3.1 Development Effort</h4>
			<ul>
				<li>Most active development goes into this stream.</li>
				<li>The 3.1 plan is posted <a href=plan.html#Overall_Planning>here</a>.</li>
				<li>The 3.1 next-milestone plan is posted <a href=plan.html#Milestone_Planning>here</a>.</li>
			</ul>
			
			<br>
			<h4> 3.0.1 Maintenance effort</h4>
			<ul>
				<li> Corresponding sources are released in branch "R3_0_maintenance".</li>
				<li> Bug resolution: 
				(<a href="https://bugs.eclipse.org/bugs/buglist.cgi?short_desc_type=allwordssubstr&short_desc=&product=Platform&component=Search&target_milestone=3.0.1&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&keywords_type=anywords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&emailassigned_to1=1&emailtype1=substring&email1=&emailreporter2=1&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&changedin=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&namedcmd=Assigned&newqueryname=&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">resolved fixes</a>)
				(<a href="https://bugs.eclipse.org/bugs/buglist.cgi?short_desc_type=allwordssubstr&short_desc=&product=Platform&component=Search&target_milestone=3.0.1&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&keywords_type=anywords&keywords=&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailassigned_to1=1&emailtype1=substring&email1=&emailreporter2=1&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&changedin=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&namedcmd=Assigned&newqueryname=&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">unresolved 
				fixes</a>).&nbsp;</li>
				<li> To find the latest Eclipse 3.0.x maintenance builds please go <a href="http://download.eclipse.org/downloads/index.php">here</a></li>
			</ul>
			
			<p>For more detailed information, check out the <a href="dev.php">Development 
			Resources</a>.</p>
		</div>
		
		<div class="homeitem3col">
			<a name="involved"></a>
			<h3>Get Involved!</h3>
			<p>If you are interested in participating in the development of the Search component, 
			check out the developer's mailing list: <a href="http://dev.eclipse.org/mailman/listinfo/platform-search-dev">platform-search-dev@eclipse.org</a>. 
			Chat with people there about your problems and interests, and find out 
			what you can do to help.</p>
			<p>In particular, if you are interested in improving regular expression
			matching for text search or adding search support for custom content types
			then don't hesitate to contact us.</p>
			<p>For more detailed information, check out the <a href="dev.html">Development 
			Resources</a>.</p>
		</div>
	</div>
	
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Quick links</h6>
			<ul>
				<li><a href="#dev">Development Resources</a></li>
				<li><a href="#search">Search</a></li>
				<li><a href="#happening">What's Happening?</a></li>
				<li><a href="#involved">Get Involved!</a></li>
			</ul>
		</div>
	</div>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
