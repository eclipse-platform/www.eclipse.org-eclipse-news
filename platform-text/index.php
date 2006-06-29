<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Platform Text";
	$pageKeywords	= "text, editor, Java, JDT, jdt, development, tools, ide, Eclipse";
	$pageAuthor		= "The Text Team";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		
		<div class="homeitem3col">
			<h3>About Platform Text</h3>
				Platform Text provides the basic building blocks for text
				and text editors within Eclipse and contributes the Eclipse default text
				editor. It consists of five parts:
				<ul>
					<li>
					The text infrastructure provides facilities for text manipulation, position
					management, and change notification.</li>
					
					<li>
					JFace Text provides UI components for editing and presenting text. It offers
					support for rule based styling, content completion, formatting, model reconciling,
					hover help, and vertical rulers.</li>
					
					<li>
					The text editor framework provides the abstract implementation of an Eclipse
					text editor.</li>
					
					<li>The File Buffers plug-in which introduces text file buffers for shared access to
					the content of a text file in form of an <tt>IDocument</tt> and and associated <tt>IAnnotationModel</tt>.
					</li>
					
					<li>A concrete editor implementation: the Eclipse default text editor.
					</li>
				</ul>
				Editors built with this toolkit are for example the JDT Editor or the CDT
				Editor. Take a look at the <a href="http://www.eclipse.org/jdt/ui/screenCasts/index.php">JDT screen casts</a> to see some
				features like the new J2SE 5.0 editor support in action.
		</div>
		
		
		<div class="homeitem3col">
			<h3>Development Resources</h3>
			If you are already a Platform Text developer, check out the <a href="development/dev.html">Development Resources</a>.
		</div>
		
		
		<div class="homeitem3col">
			<h3>What's Happening?</h3>
		      <h4> <a NAME="Milestone_Planning"></a>3.3 Development</h4>
		      <ul>
		        <li> The 3.3 plan is posted <a href="3.3/plan.html#Overall_Planning">here</a>.</li>
		        <li> The plan for the next milestone is posted <a href="3.3/plan.html#Milestone_Planning">here</a>.</li>
		        <li>The original plans for previous milestones can be found <a href="3.3/previous_plans.html#Milestone_Planning">here</a>.</li>
		      </ul>
		      <h4> <a NAME="Maintenance_Planning"></a>3.2 Maintenance</h4>
		      	Information about 3.2 maintenance releases can be found <a href="http://eclipse.org/eclipse/development/eclipse_maintenance_schedule_3_2_x.html">here</a>.</p>
		      <h4> <a NAME="Releases"></a>Previous Releases</h4>
		      	Information about previous releases can be found <a href="releases.html">here</a>.</p>
		</div>
		
		
		<div class="homeitem3col">
			<h3>Get Involved!</h3>
				If you are interested in participating in the development of the Platform
				Text component, check out the developer's mailing list: <a href="http://dev.eclipse.org/mailman/listinfo/platform-text-dev">platform-text-dev@eclipse.org</a>.
				Chat with people there about your problems and interests, and find out
				what you can do to help.
				      <p>For more detailed information, check out the <a href="development/dev.html">Development Resources</a>.</p>
		</div>
	</div>

</div>

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
