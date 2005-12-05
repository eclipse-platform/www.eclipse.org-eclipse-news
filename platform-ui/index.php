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

		
		<hr class="clearer" />
	</div>
	<div id="rightcolumn">
		<div class="sideitem">
			<h3>What's Happening</h3>
			<ul>
				<li>R3.2 Development
					<ul>
					<li>Most active development goes into this stream. </li>
          			<li>The 3.2 next-milestone plan is posted <a href="R3_2/main.html#Milestone_Planning">here</a>.</li>
          			<li>The 3.1 builds are available in the <a href="http://www.eclipse.org/downloads/index.php" target="newdownload&quot;">download</a> area.</li>
        				</ul>
        			</li>
				<li>R3.1 Maintenance</b> <ul><li>Release 3.0 and 3.0.1 maintenance builds are available in the <a href="http://www.eclipse.org/downloads/index.php" target="newdownload&quot;"> download</a> area.</li></li>
				<li>Talks<dl>
    					<dt><a href="http://www.desktopcon.org/2005">Desktop Developers'Conference 2005</a></dt>
    					<dd><p>Billy Biggs (SWT) and Douglas Pollock (UI) gave a <a href="talks/desktopDevelopersConference2005.sxi">talk</a> on Eclipse 3.1.  The talk gave a general overview of Eclipse, and then focused in on specific changes and problems with SWT's implementation on GTK+.</p>
    	
    					<dt><a href="http://eclipsecon.org/2005">EclipseCon 2005</a></dt>
    					<dd><p>The majority of the Platform UI team attended EclipseCon 2005.  Supplemental materials relating to our talks can be found <a href="eclipsecon/index.html">here</a>.</p></dd>						
    					</dl>
    				</li>
    				<li><p>Get Involved! If you are interested in participating in the development of the UI component, check out the developer's mailing list: <a href="http://dev.eclipse.org/mailman/listinfo/platform-ui-dev">platform-ui-dev@eclipse.org</a>. Chat with people there about your problems and interests, and find out what you can do to help. </p>
      				<p>In particular, if you have experience in developing user interfaces, are interested in accessibility and usability issues please consider joining the UI team. If you enjoy working with COM to support OLE documents and ActiveX controls we really want to get to know you. </p>
      				<p>For more detailed information, check out the <a href="dev.html">Development Resources</a>.</p>
      			</li>
			</ul>
		</div>
		<div class="sideitem">
			<h6>Development Resources</h6>
			<ul>
				<liFor Platform UI developers, check out the <a href="dev.html">Development Resources</a></li>
				<li>Interested in what the UI team is currently working on, or past proposals, look at the <a href="docs.html">Proposals</a> list.</li>
				<li><a href="#">If you are contributing to the Platform UI see the <a href="contributing/checklist.html">Contributers Check List</a> we provide to help guide and smooth the process.</li>
			</ul>
		</div>
	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
