<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Platform Text";
	$pageKeywords	= "text, editor, Java, JDT, jdt, development, tools, ide, Eclipse, Luna, Kepler";
	$pageAuthor		= "The Text Team";
	
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
			<h3>About Platform Text</h3>
				<p>
				Platform Text is part of the <a href="https://www.eclipse.org/eclipse/platform-ui/">Platform UI project</a> and provides the basic building blocks for text
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
				</ul></p>
				<p>
				Editors built with this toolkit are for example the JDT Editor or the CDT
				Editor. Take a look at the <a href="http://www.eclipse.org/jdt/ui/screenCasts/index.php">JDT screen casts</a> to see some
				features like the J2SE 5.0 editor support in action.</p>
		</div>
		
		<div class="homeitem3col">
			<h3>Development Resources</h3>
			<p>
			The <a href="development/dev.php">Development Resources</a> show how to use Platform Text components.
		</div>
		
		
		<div class="homeitem3col">
			<h3>Get Involved!</h3>
			<p>
				If you are interested in participating in the development of the Platform
				Text component, check out the developer's mailing list: <a href="http://dev.eclipse.org/mailman/listinfo/platform-text-dev">platform-text-dev@eclipse.org</a>.
				Chat with people there about your problems and interests, and find out
				what you can do to help.
			</p>
	      <p>For more detailed information, check out the <a href="development/dev.php">Development Resources</a>.</p>
		</div>
	</div>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
