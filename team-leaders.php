<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# team-leaders.php
	#
	# Author: 		
	# Date:			2014-11-14
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
        charter</a>. We welcome new people who want to get involved and can make a contribution. 
        The Eclipse Project is a meritocracy. The more you contribute the more 
        responsibility you will earn. </p>
      <p>We ask that you do not e-mail us directly. Instead - use the <a href="http://www.eclipse.org/mail/index_all.php" target="_top">mailing 
        lists</a>. Mailing lists have been set up for each area of work, and are 
        the best way to get involved.</p>
      <p>The Eclipse Project is managed by a small group known as the Eclipse 
        Project Management Committee (<a href="eclipse-charter.php#PMC">PMC</a>). 
        The work of the project is organized into subprojects. Each subproject 
        has a leader who has overall responsibility for its success. Large subprojects 
        are further divided into component teams, each of who has a leader that 
        is responsible for its overall success. We have listed just the PMC and 
        subproject leaders here but you will encounter many dedicated Eclipse 
        Project committers and developers in the <a href="../newsgroups/index.html" target="_top">newsgroup</a> 
        and <a href="http://www.eclipse.org/mail/index_all.php" target="_top">mailing lists</a>.</p>

		<div class="homeitem3col">
			<h3>Project Management Committee Members</h3>
		      <ul>
		        <li> 
		          <b><a name="McQ"></a>Mike ("McQ") Wilson, IBM Ottawa</b><br>
			      McQ is the overall lead for the Eclipse Project aka PMC Lead.
			      He is a senior architect of the Eclipse SDK, a member of the Eclipse <a href="http://wiki.eclipse.org/Architecture_Council">
			      Architecture Council</a> and one of the original Eclipse Founders. His interests include computer
			      language design and implementation, semantic content publishing, web development,
			      and playing the cello. Mike leads the <a href="http://www.eclipse.org/projects/project_summary.php?projectid=eclipse.e4">e4</a>
				  subproject.
		        </li>
		        <li> 
		          <b><a name="martin"></a>Martin Oberhuber, Wind River</b><br>
			      Martin is on the PMC representing the Community aspect of Eclipse and
			      the e4 project. He is a Platform Core Resources and e4 committer,
			      co-leading the e4 Resources work. Martin also serves on the 
			      <a href="http://wiki.eclipse.org/DSDP/PMC">DSDP PMC</a> and as 
			      <a href="/dsdp/tm/">Target Management</a> Project lead, and revitalized
			      the Eclipse <a href="http://wiki.eclipse.org/Architecture_Council">
			      Architecture Council</a> as its chair. His interests include programming
			      languages, patterns and paradigms, optimizing development processes,
			      skiing, hiking, and playing all sorts of musical instruments.
		        </li>
		        <li> 
		          <b><a name="dani"></a>Dani Megert, IBM Research - Zurich</b><br>
			      Dani leads the <a href="https://wiki.eclipse.org/Platform">Platform</a> and the <a href="http://eclipse.org/jdt">JDT</a> subprojects and
			      represents the project in the Eclipse <a href="http://wiki.eclipse.org/Planning_Council">Planning Council</a>. Dani worked at OTI and now works at IBM Research GmbH. He is one of the initial Eclipse Project committers.
			      His interests include user interface and API design, editors, software quality and performance.
		        </li>
		        <li> 
		          <b><a name="john"></a>John Arthorne, IBM Ottawa</b><br>
			      John has worked on the <a href="http://eclipse.org/eclipse">Eclipse</a> and <a href="http://eclipse.org/equinox">Equinox</a> 
			      projects for the past decade in many different areas. He was the main developer on the resource model for many years, 
			      and designed the platform's concurrency infrastructure. In recent years he has focused on the Orion project, provisioning (p2), 
			      e4, and overall platform API quality. John is a member of the Eclipse <a href="http://wiki.eclipse.org/Architecture_Council">
			      Architecture Council</a> and the Eclipse <a href="http://www.eclipse.org/org/foundation/directors.php">Board of Directors</a>.
			      John has authored numerous <a href="http://www.eclipse.org/articles/">articles</a> 
			      and a <a href="http://www.amazon.com/Official-Eclipse-3-0-FAQs/dp/0321268385/ref=sr_1_1?ie=UTF8&s=books&qid=1221163807&sr=8-1">
			      book</a> on Eclipse.
		        </li>
		        <li> 
		          <b><a name="aleksandar"></a>Aleksandar Kurtakov, Red Hat Inc.</b><br>
					Aleksandar is part of Red Hat's Eclipse team. He is Platform SWT committer, Tools PMC member and leads the <a href="http://www.eclipse.org/linuxtools/">Linux Tools</a> project.
					He is very interested in deeper native platform integration both as runtime experience and as distribution channel.
					He is also interested in growing the contributors and better aligning with modern systems.
		        </li>
		      </ul>
		</div>
		<div class="homeitem3col">
			<h3>Past PMC members</h3>
			The following are Eclipse Project PMC Emeriti:
		      <ul>
		        <li> 
		          <b><a name="erich"></a>Erich Gamma</b><br>
					Erich was the original lead of the Eclipse Java development environment.
					Prior to working on Eclipse he contributed to VA/Micro Edition (part
					of IBM's Java solution for embedded device programming). Erich is well known for
					his work on Design Patterns and <a href="http://www.junit.org/" target="_top">JUnit</a>.
		        </li>
		        <li> 
		          <b><a name="kevin"></a>Kevin Haaland</b><br>
					Kevin was a key contributor to the design and implementation of the
					Platform UI. He was previously component lead for the Platform UI, and
					has a long history of building user interface technology at OTI. In a past
					life he was the lead for the SWT team. Kevin also played a key role in
					the IBM VA/Java project.
		        </li>
		        <li> 
		          <b><a name="jeff"></a>Jeff McAffer</b><br>
		           Jeff McAffer co-led the RT Equinox project and is the Founder of <a href="http://code9.com">Code 9</a>.
			       He is one of the architects of the Eclipse Platform and a co-author of
			       <a href="http://eclipsercp.org">The Eclipse Rich Client Platform</a> (Addison-Wesley).
			       Previous lives include being a Senior Technical Staff
			       Member at IBM and work in distributed/parallel OO computing (Server Smalltalk,
			       massively parallel Smalltalk, etc) as well as expert systems, meta-level architectures
			       and a PhD at the University of Tokyo.
		        </li>
		        <li> 
		          <b><a name="andrew"></a>Andrew Overholt, Mozilla</b><br>
					Andrew works on open source technologies at Mozilla in Toronto.
					He has been involved with the Eclipse community since 2005
					and is a member of the Eclipse <a href="http://wiki.eclipse.org/Architecture_Council">Architecture Council</a>.
					For some time Andrew also led the <a href="http://www.eclipse.org/linuxtools/">Linux Tools</a> project. He is very interested in continuing to grow the
					Eclipse community and to improve native platform integration.
		        </li>
		        <li> 
		          <b><a name="philippe"></a>Philippe Mulet</b><br>
					Philippe is a former PMC and JDT project lead. Prior to Eclipse,
					Philippe was responsible for the compiler and codeassist in IBM VA/Java
					and VA/Micro Edition. Philippe was a member of the expert group on compiler
					API (JSR199), representing IBM. His main interests are in compilation,
					performance, scalability and meta-level architectures.
		        </li>
		        <li>
		          <b><a name="steve"></a>Steve Northover</b><br>
			      Steve Northover is the father of SWT (the Standard Widget Toolkit). Prior to
			      working on Eclipse, he worked on IBM Smalltalk, VA/Java, VA/Micro Edition.
			      His interests include programming languages, API design, operating systems,
			      user interfaces and code optimization.
		        </li>
		        <li> 
		          <b><a name="johnw"></a>John Wiegand</b><br>
					John was a principal architect for the platform infrastructure. John played
					a central role in the development of IBM VA/Java, VA/Micro Edition, and
					Eclipse. His interests are in the areas of performance, scalability,
					compilers, and just about anything that's hard.
		        </li>
		      </ul>
		</div>
		
	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Subproject Leads</h6>
			<ul>
				<li><a href="http://wiki.eclipse.org/Platform">Platform</a><br> -- <a href="#dani">Dani Megert</a></li>
				<li><a href="http://www.eclipse.org/jdt/" target="_top">JDT</a><br> -- <a href="#dani">Dani Megert</a></li>
				<li><a href="http://www.eclipse.org/pde/">PDE</a><br> -- Curtis Windatt</a></li>
				<li><a href="http://www.eclipse.org/e4/" target="_top">e4</a><br> -- <a href="#McQ">Mike Wilson</a></li>
				<li><a href="http://www.eclipse.org/orion/">Orion</a><br> -- Simon Kaegi and Ken Walker</li>
      		</ul>				
		</div>
	</div>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
