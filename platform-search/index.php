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
			
			<p>Since 3.2, Platform Search is mostly in maintenance mode. Contact us if you want to help, contributions are highly appreciated!</p>
			
		      <h4> <a NAME="Milestone_Planning"></a>4.3 Development</h4>
				<p>
		      <ul>
		        <li>currently no work planned</li>
		      </ul></p>
			
		</div>
		
		<div class="homeitem3col">
			<a name="involved"></a>
			<h3>Get Involved!</h3>
			<p>If you are interested in participating in the development of the Search component, 
			check out the developer's mailing list: <a href="http://dev.eclipse.org/mailman/listinfo/platform-search-dev">platform-search-dev@eclipse.org</a>. 
			Chat with people there about your problems and interests, and find out 
			what you can do to help. Or pick a bug from the 
			<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&bugidtype=include&product=Platform&component=Search&cmdtype=doit" target="_top">Search Inbox</a>
			and help us fix bugs.</p>
			<p>Interesting areas for participation:</p>
			<ul>
				<li>Split the search plugin to a UI (RCP plugin) and a plugin containing file search</li>		
			</ul>
			<p>More information can be found on the <a href="dev.php">Development Resources</a>.</p>
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
