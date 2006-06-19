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
	$pageTitle 		= "CVS/Team JUnit Tests";
	$pageKeywords	= "CVS, junit";
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
		<p>Back to the <a href="dev.php">CVS Development Page</a></p>
		
		<div class="homeitem3col">
		<h3>Step by Step</h3>
		<a name="Step by Step"></a>
		<p>To test the CVS plugin using JUnit:</p>
		<ol>
		<li>If you haven't already done so, prepare a CVS repository that can be used for testing.</li>

          <li>Start Eclipse and setup your workspace for self-hosting.</li>
         
          <li>Load the following tests plugins from dev.eclipse.org:
          <p/>
          <ul>
          <li>org.eclipse.core.tests.harness</li>
          <li>org.eclipse.core.tests.resources</li>
         <li>org.eclipse.team.tests.core</li>
         <li>org.eclipse.team.tests.cvs.core</li>
           <li>org.eclipse.team.tests.cvs.core</li>
          <li>org.eclipse.team.tests.core</li>
    	  <li>org.eclipse.team.tests.cvs.core</li>
          </ul>
          </li>
          <p/>
          
          <li>Edit the org.eclipse.team.tests.cvs.core/repository.properties file to contain the
          information required to connect to your test repository. This file can be copied to a directory
          outside of the workspace so that the values you enter can be maintained indefinitely. Do not
          commit personal connection information to the repository.
          </li>
          <p/>
          
          <li>Launch the Junit plugin tester by performing the following steps:
		  <ul>
          <li>Select org.eclipse.team.cvs.tests and from the Run menu, choose Run...</li>

          <li>In the Run dialog, select "JUnit Plugin Test" and press New</li>
          <li>Enter a name for the launch configuration.
          <li>Ensure that the project is org.eclipse.team.cvs.tests and press Search to find the 
          desired test class. Use org.eclipse.team.tests.ccvs.core.provider.AllTestsProvider to run
          all the CVS provider tests.
          </li>
          <li>Change the application name to org.eclipse.pde.junit.coretestapplication</li>
          <li>Click on the Arguments tab and enter "-Declipse.cvs.properties=C:\path\to\repository.properties" as the VM
          arguments, where "C:\path\to\repository.properties" is the path to the properties file created/edited above.
          <li>Click Run.
          <p/>
          </ul>
          <li>You should see a "connected to..." message in the console and shortly after that,
          the JUnit view should open and show you the results of each test.
          </li>

          <p/>
		</ol>
		</div>
		
	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->	
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
