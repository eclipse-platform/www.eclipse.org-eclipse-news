<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# template.php
	#
	# Author: 		Denis Roy
	# Date:			2005-06-16
	#
	# Description: Type your page comments here - these are not sent to the browser
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "UI Components";
	$pageKeywords	= "platform ui development resources";
	$pageAuthor		= "Platform UI Monkey";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<h2>Platform UI</h2>
		
		<p>Platform UI consists of several components, which provide the basic building blocks for user
      interfaces built with Eclipse.  Some of these can be reused in arbitrary applications, while others are specific to the Eclipse IDE.</p>

	  <p>Two of the Platform UI components form the <strong>Rich Client Platform UI</strong>.  These are <strong>JFace</strong> and the <strong>Workbench</strong>.  JFace and the Workbench can be used to build arbitrary applications, not just the Eclipse IDE.  The Eclipse IDE is just one instance of an RCP application, but it demonstrates the power and extensibility achievable by RCP applications.</p>

      <p>JFace is a UI toolkit with classes for handling many common UI
      programming tasks. JFace is window-system-independent in both its API and
      implementation, and is designed to work with SWT without hiding it. JFace
      includes the usual UI toolkit components of image and font registries,
      text, dialog, preference and wizard frameworks, and progress reporting for
      long running operations. Two of its more interesting features are actions and 
	  viewers. The action mechanism allows user commands to be defined
      independently from their exact whereabouts in the UI. Viewers are model
      based adapters for certain SWT widgets, simplifying the presentation of 
	  application data structured as lists, tables or trees.</p>

      <p>The Workbench provides the user interface structure for Eclipse. The
      purpose of the Workbench is to facilitate the seamless integration of
      tools. These tools contribute to extension points defined by the
      Workbench. The Workbench is responsible for the presentation and
      coordination of the user interface.  The tools metaphor is not specific to
	  development tools, but can apply equally well to arbitrary applications.
	  Note that the Workbench is sometimes called the <em>Generic Workbench</em>, to distinguish it from its instantiation in the Eclipse IDE, where it is called the <em>IDE Workbench</em>.</p>

	  <p>Platform UI also provides the IDE application plug-in, which instantiates and configures the Generic Workbench to form the IDE Workbench, on top of which lies the rest of the Eclipse IDE Platform and the Eclipse SDK (including the Java Development Tools and Plug-in Development Environment).  Unlike the Generic Workbench, the IDE application plug-in is intended only for use in the IDE Platform, and is not designed as a reusable component for use in other RCP applications.</p>

	  <p>Platform UI does, however, provide some other components that <em>can</em> be reused in other RCP applications.  These are:
	  <ul>
	  <li>the Outline and Properties views</li>
	  <li>the Console view</li>
	  <li>the Welcome Page / Intro support, with guided assistance</li>
	  <li>Cheat Sheets, which guide the user through a long-running, multi-step task</li>
	  </ul>
	  </p>

      <p>For more details on the Rich Client Platform and other components available for use in RCP applications, see the 
	  <A HREF="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/platform-ui-home/rcp/index.html">RCP Home Page</A> 
	  and the <A HREF="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/platform-ui-home/rcp/faq.html">RCP FAQ</A>.
	  </p>

		<div class="homeitem3col">
			<h3>What's Happening</h3>
			<a name="HAPPENING"></a>
			<ul>
				<li>3.4 Development
					<ul>
					</ul>
				</li>
				<li>3.3 Development
					<ul>
					<li>Most active development goes into this stream. </li>
          			<li>The 3.3 next-milestone plan is posted <a href="http://dev.eclipse.org/viewcvs/index.cgi/platform-ui-home/R3_3/main.html?view=co">here</a>.</li>
          			<li>The 3.2 builds are available in the <a href="http://www.eclipse.org/downloads/index.php">download</a> area.</li>
        			</ul>
        		</li>
			</ul>
		</div>
		<div class="homeitem3col">
			<h3>Get Involved</h3>
			<a name="INVOLVED"></a>
			<p>
				If you are interested in participating in the development of the UI component, check out the developer's mailing list: <a href="http://dev.eclipse.org/mailman/listinfo/platform-ui-dev">platform-ui-dev@eclipse.org</a>. 
				Chat with people there about your problems and interests, and find out what you can do to help.
      		</p>		
      		<p>
      			In particular, if you have experience in developing user interfaces, are interested in accessibility and usability issues please consider joining the UI team. If you enjoy working with COM 
      			to support OLE documents and ActiveX controls we really want to get to know you. 
      		</p>
      		<p>
      			For more detailed information, check out the <a href="http://dev.eclipse.org/viewcvs/index.cgi/platform-ui-home/dev.html?view=co">Development Resources</a>.</p>
      		</p>
		</div>
		<div class="homeitem3col">
			<h3>Development Resources</h3>
			<a name="DEV"></a>
			<ul>
				<li>For Platform UI developers, check out the <a href="http://dev.eclipse.org/viewcvs/index.cgi/platform-ui-home/dev.html?view=co">Development Resources</a></li>
			</ul>
		</div>
	</div>
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Quick Links</h6>
			<ul>
				<li><a href="#DEV">Development Resources</a></li>
				<li><a href="#HAPPENING">What's Happening</a></li>
				<li><a href="#INVOLVED">Get Involved</a></li>
			</ul>
		</div>
		<div class="sideitem">
			<h6>Pltform UI Related Links</h6>
			<ul>
			<li><a href="http://wiki.eclipse.org/Platform_UI">Platform UI Wiki</a></li>
			<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/platform-ui-home/main.html?view=co">The old Platform UI site</a></li>
			</ul>
		</div>
	</div>
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
