<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# index.php
	#
	# Author: 		
	# Date:			2006-01-25
	#
	# Description: The main entry point for the Eclipse Project Web page
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Project";
	$pageKeywords	= "Type, page, keywords, here";
	$pageAuthor		= "";
	
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
		<h2>About the Eclipse Project</h2>
    	<p>The Eclipse Project is an open source project of eclipse.org, overseen 
	      by a <a href="team-leaders.php">Project Management Committee</a> (PMC) 
      	  and project leaders. The work is done in subprojects working against a <a href="http://dev.eclipse.org/viewcvs/">CVS 
	      repository</a>. The <a href="eclipse-charter.php">Eclipse Project Charter</a> 
      	  describes the organization of the project, roles and responsibilities of 
      	  the participants, and top level development process for the project. The 
      	  JDT and PDE are plug-in tools for the Eclipse Platform. Together, these 
      	  three pieces form the Eclipse SDK <a href="http://download.eclipse.org/eclipse/" target="_top">download</a>, 
      	  a complete development environment for Eclipse-based tools, and for developing 
      	  Eclipse itself.
      	 </p>
      	 <ul>
      	   <li><a href="development/">Eclipse Project Development</a><br>
				Release plans and other information about the Eclipse Project development process.
      	   </li>
      	   <li><a href="http://download.eclipse.org/eclipse/">Downloads</a><br>
				Download the Eclipse SDK, Eclipse RCP, SWT, the Eclipse Java compiler, and many more. You
				can find the current release here.  Or, download the latest stable and integration builds if you want
				to try out the newest features under development, or get started with contributing to the project.
      	   </li>
      	   <li><a href="../documentation/main.html">Documentation</a><br>
				Browse the documentation included with Eclipse Project releases.
      	   </li>
      	 </ul>
		<div class="homeitem3col">
			<h3>Subprojects</h3>
		      <ul>
		        <li> 
		          <a href="http://wiki.eclipse.org/Platform" target="_top">Platform</a><br/>
				      The Platform defines the set of frameworks and common services that collectively 
				      make up &quot;integration-ware&quot; required to support the use of Eclipse 
				      as a component model, as a rich client platform (<a href="http://wiki.eclipse.org/Rich_Client_Platform" target="_top">RCP</a>) 
				      and as a comprehensive tool integration platform. These services and frameworks 
				      include a standard workbench user interface model and portable native widget 
				      toolkit, a project model for managing resources, automatic resource delta 
				      management for incremental compilers and builders, language-independent 
				      debug infrastructure, and infrastructure for distributed multi-user versioned 
				      resource management.
		        </li>
		        <li> 
		          <a href="http://www.eclipse.org/jdt/" target="_top">JDT - Java development tools</a><br>
				      The JDT provides the tool plug-ins for the platform that implement a Java 
				      IDE for power-users, that supports the development of any Java application, 
				      including Eclipse plug-ins. The JDT adds the notion of Java projects and 
				      a Java perspective to the Eclipse platform, as well as a number of views, 
				      editors, wizards, builders, and code merging and refactoring tools. The 
				      JDT allows Eclipse to be a development environment for itself. The JDT plug-ins 
				      themselves can also be further extended by other tool builders.
		        </li>
		        <li> 
		          <a href="http://www.eclipse.org/pde/" target="_top">PDE - Plug-in development environment</a><br>
				      The PDE project provides a number of views and editors that make is easier 
				      to build plug-ins for Eclipse. Using the PDE, you can create your plug-in 
				      manifest file (plugin.xml), specify your plug-in runtime and other required 
				      plug-ins, define extension points, including their specific markup, associate 
				      XML Schema files with the extension point markup so extensions can be validated, 
				      create extensions on other plug-in extension points, etc. The PDE makes 
				      integrating plug-ins easy and fun.
		        </li>
		        <li> 
		          <a href="http://www.eclipse.org/e4/" target="_top">e4 - the next generation of the Eclipse platform</a><br>
				      The e4 project is an incubator for developing the next generation
				      of the Eclipse platform. The mission of the e4 project is to build a next 
				      generation platform for pervasive, component-based applications and tools.<br>
		        </li>
		        <li> 
		          <a href="http://eclipse.org/orion" target="_top">Orion</a><br>
				  Orion's objective is to create a browser-based open tool integration platform 
				  which is entirely focused on developing for the web, in the web. Tools are written 
				  in JavaScript and run in the browser. Unlike other attempts at creating browser-based 
				  development tools, this is not an IDE running in a single tab. Links work and can 
				  be shared. You can open a file in a new tab. Great care has been taken to provide 
				  a web experience for development. 
		        </li>
		      </ul>
		</div>
	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Project Links</h6>
			<ul>
				<li><a href="http://download.eclipse.org/eclipse/">Downloads</a></li>
				<li><a href="http://wiki.eclipse.org/index.php/Eclipse_FAQs">Project FAQ</a></li>
				<li><a href="presentation/eclipse-slides.pdf">Slide Presentation (PDF)</a><br>
			      A presentation of the technical aspects of the Eclipse Project.
			      (<a href="presentation/eclipse-slides.ppt" target="_blank">Powerpoint</a>) 
			    </li>
			    <li><a href="http://wiki.eclipse.org/index.php/Eclipse_Project">Project Wiki</a></li>
      		</ul>				
		</div>
	</div>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
