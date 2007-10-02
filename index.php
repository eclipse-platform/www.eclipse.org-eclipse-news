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
	      by a <a href="team-leaders.html">Project Management Committee</a> (PMC) 
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
      	   <li><a href="../documentation/main.html">Documentation</a><br>
				Browse the documentation included with Eclipse Project releases.
      	   </li>
      	 </ul>
		<div class="homeitem3col">
			<h3>Subprojects</h3>
		      <ul>
		        <li> 
		          <a href="http://www.eclipse.org/platform/" target="_top">Platform</a><br/>
				      The Platform defines the set of frameworks and common services that collectively 
				      make up &quot;integration-ware&quot; required to support the use of Eclipse 
				      as a component model, as a rich client platform (<a href="http://eclipse.org/rcp/" target="_top">RCP</a>) 
				      and as a comprehensive tool integration platform. These services and frameworks 
				      include a standard workbench user interface model and portable native widget 
				      toolkit, a project model for managing resources, automatic resource delta 
				      management for incremental compilers and builders, language-independent 
				      debug infrastructure, and infrastructure for distributed multi-user versioned 
				      resource management.
		        </li>
		        <li> 
		          <a href="http://www.eclipse.org/equinox/" target="_top">Equinox - an OSGi framework</a><br>
				      The Equinox project provides the OSGi framework implementation and component 
				      model on which the Eclipse RCP and IDE platforms run. The project seeks 
				      to implement the latest OSGi framework specification as well as all optional 
				      services contained in the OSGi specification. Equinox team members also 
				      participate actively in the OSGi specification process. In addition to the 
				      standard services and mechanisms, Equinox includes some basic infrastructure 
				      such as the notion of plug-in (aka bundle), the Eclipse bootstrap and launching 
				      code and the Eclipse extension registry. The Equinox OSGi implementation 
				      is suitable for use in embedded, desktop and server scenarios.<br>
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
		          <a href="http://eclipse.org/eclipse/incubator" target="_top">Eclipse Project Incubator</a><br>
				      The Eclipse Project Incubator subproject gives the community around the Eclipse Project 
			a forum and set of resources for innovation and investigation of new and alternative ideas.  The
			project is essentially an umbrella for the incubation work associated with the main Eclipse sub-projects.
		        </li>
		      </ul>
		</div>
	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Project Links</h6>
			<ul>
				<li><a href="http://wiki.eclipse.org/index.php/Eclipse_FAQs">Project FAQ</a></li>
				<li><a href="presentation/eclipse-slides.html">Slide Presentation</a><br>
			      A presentation of the technical aspects of the Eclipse Project. (<a href="presentation/eclipse-slides.html" target="_blank">HTML</a>) 
			      (<a href="presentation/eclipse-slides.ppt" target="_blank">Powerpoint</a>) 
			      (<a href="presentation/eclipse-slides.pdf" target="_blank">pdf</a>)</td>
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
