<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# team-leaders.php
	#
	# Author: 		
	# Date:			2006-01-25
	#
	# Description: Details about the Eclipse Project PMC
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Project PMC";
	$pageKeywords	= "PMC";
	$pageAuthor		= "McQ";
	
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
		<h2>Who's running this project?</h2>
      <p>This page lists the people that are currently playing the PMC and subproject 
        leadership roles described in the <a href="eclipse-charter.php">project 
        charter</a>. You will notice that there are many IBM people listed... 
        it's not because we want to do all the work (believe us!) - its just because 
        we built the first release of Eclipse before it became an open source 
        project, and others haven't had enough time yet to get involved in key 
        roles. We welcome new people who want to get involved and can make a contribution. 
        The Eclipse Project is a meritocracy. The more you contribute the more 
        responsibility you will earn. </p>
      <p>We ask that you do not email us directly. Instead - use the <a href="../mail/index.html" target="_top">mailing 
        lists</a>. Mailing lists have been set up for each area of work, and are 
        the best way to get involved.</p>
      <p>The Eclipse Project is managed by a small group known as the Eclipse 
        Project Management Committee (<a href="eclipse-charter.php#PMC">PMC</a>). 
        The work of the Project is organized into subprojects. Each subproject 
        has a leader who has overall responsibility for its success. Large subprojects 
        are further divided into component teams, each of who has a leader that 
        is responsible for its overall success. We have listed just the PMC and 
        subproject leaders here but you will encounter many dedicated Eclipse 
        project committers and developers in the <a href="../newsgroups/index.html" target="_top">newsgroup</a> 
        and <a href="../mail/index.html" target="_top">mailing lists</a>.</p>

		<div class="homeitem3col">
			<h3>Project Management Committee Members</h3>
		      <ul>
		        <li> 
		          <b><a name="erich"></a>Erich Gamma, IBM Zurich</b><br>
      Erich is the original lead of the Eclipse Java development environment.
      Prior to working on Eclipse he contributed to VA/Micro Edition (part
      of IBM's Java solution for embedded device programming). Erich is well known for
      his work on Design Patterns and <a href="http://www.junit.org/" target="_top">JUnit</a>.
      Erich is a member of the <a href="../tools/index.html" target="_top">Eclipse
      Tools</a> PMC and the Eclipse Project PMC.
		        </li>
		        <li> 
		          <b><a name="kevin"></a>Kevin Haaland, IBM Ottawa</b><br>
      Kevin has been a key contributor to the design and implementation of the
      Platform UI. He was previously component lead for the Platform UI, and
      has a long history of building user interface technology at OTI. In a past
      life he was the lead for the SWT team. Kevin also played a key role in
      the IBM VA/Java project. Kevin is a member of the Eclipse Project PMC
      and is the overall lead for the Eclipse Project.
		        </li>
		        <li> 
		          <b><a name="jeff"></a>Jeff McAffer, IBM Ottawa</b><br>
      Jeff leads the Eclipse RCP and Equinox OSGi efforts.  He is one of the
      architects of the  Eclipse Platform and a co-author of <a href="http://eclipsercp.org">The
      Eclipse Rich  Client Platform</a>.  He is currently interested in helping
      realize Eclipse's original  vision as a platform for composing general
      sets of application function to solve real problems. Previous lives included work 
      in distributed/parallel OO computing (Server Smalltalk, massively  parallel Smalltalk, etc) 
      as well as expert systems, meta-level architectures and a PhD at 
      the University of Tokyo.  Jeff is a member of the Eclipse Project PMC and
      leads the <a href="http://eclipse.org/equinox">Equinox</a> and
      <a href="http://eclipse.org/pde">PDE</a> subprojects.
		        </li>
		        <li> 
		          <b><a name="philippe"></a>Philippe Mulet, IBM Saint-Nazaire</b><br>
      Philippe is the lead for the Eclipse Java Infrastructure. Prior to Eclipse,
      Philippe was responsible for the compiler and codeassist in IBM VA/Java
      and VA/Micro Edition. Philippe is a member of the expert group on compiler
      API (JSR199), representing IBM. His main interests are in compilation,
      performance, scalability and meta-level architectures. Philippe is a member of the Eclipse
      Project PMC and leads the <a href="http://eclipse.org/jdt">JDT</a> subproject.
		        </li>
		        <li> 
		          <b><a name="john"></a>John Wiegand, IBM Portland</b><br>
      John is the principal architect for the platform infrastructure. John played
      a central role in the development of IBM VA/Java, VA/Micro Edition, and
      now Eclipse. His interests are in the areas of performance, scalability,
      compilers, and just about anything that's hard. John is a member of
      the Eclipse Project PMC.
		        </li>
		        <li> 
		          <b><a name="McQ"></a>Mike Wilson, IBM Ottawa</b><br>
      Mike is a senior architect on the Eclipse platform. He is currently leading
      the Platform Runtime, Team and UI teams, and previous to that lead the SWT team 
      (and has co-authored a book on that subject). He was one of the original
      founding members of OTI. His interests include computer language design
      and implementation, semantic content publishing, scalability/performance,
      and playing the cello. Mike is a member of the Eclipse Project
      PMC and leads the <a href="http://eclipse.org/platform/">Platform</a> subproject.
		        </li>
		      </ul>
		</div>
		
	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Subproject Leads</h6>
			<ul>
				<li><a href="http://www.eclipse.org/equinox/" target="_top">Equinox</a><br> -- <a href="#jeff">Jeff McAffer</a></li>
				<li><a href="http://www.eclipse.org/platform/">Platform</a><br> -- <a href="#McQ">Mike Wilson</a></li>
				<li><a href="http://www.eclipse.org/jdt/" target="_top">JDT</a><br> -- <a href="#philippe">Philippe Mulet</a></li>
				<li><a href="http://www.eclipse.org/pde/">PDE</a><br> -- <a href="#jeff">Jeff McAffer</a></li>
      		</ul>				
		</div>
	</div>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
