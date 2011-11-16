<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# team-leaders.php
	#
	# Author: 		
	# Date:			2011-11-16
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
        The work of the project is organized into subprojects. Each subproject 
        has a leader who has overall responsibility for its success. Large subprojects 
        are further divided into component teams, each of who has a leader that 
        is responsible for its overall success. We have listed just the PMC and 
        subproject leaders here but you will encounter many dedicated Eclipse 
        Project committers and developers in the <a href="../newsgroups/index.html" target="_top">newsgroup</a> 
        and <a href="../mail/index.html" target="_top">mailing lists</a>.</p>

		<div class="homeitem3col">
			<h3>Project Management Committee Members</h3>
		      <ul>
		        <li> 
		          <b><a name="McQ"></a>Mike ("McQ") Wilson, IBM Ottawa</b><br>
			      McQ is the overall lead for the Eclipse Project aka PMC Lead.
			      He is a senior architect of the Eclipse SDK, a member of the Eclipse
			      Architecture Council and one of the original Eclipse Founders. His interests include computer
			      language design and implementation, semantic content publishing, web development,
			      and playing the cello. Mike leads the <a href="http://eclipse.org/platform/">Platform</a>,
			      <a href="http://www.eclipse.org/projects/project_summary.php?projectid=eclipse.e4">e4</a>, 
			      and <a href="http://www.eclipse.org/eclipse/incubator/">Eclipse Project Incubator</a>
				  subprojects.
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
		          <b><a name="dani"></a>Dani Megert, IBM Zurich</b><br>
			      Dani leads the <a href="http://eclipse.org/jdt">JDT</a> subproject and
			      leads the Platform Search, Platform Text and JDT Text components. Dani worked at OTI and is one of the initial Eclipse Project committers.
			      His interests include user interface and API design, editors, performance and DJing.
		        </li>
		        <li> 
		          <b><a name="john"></a>John Arthorne, IBM Ottawa</b><br>
			      John has worked on the Eclipse project for the past decade in many different areas, and 
			      more recently on the <a href="http://eclipse.org/equinox">Equinox</a> project. In recent years he has focused on the 
			      workspace model, concurrency infrastructure, provisioning (<a href="http://wiki.eclipse.org/p2">p2</a>), <a href="http://wiki.eclipse.org/e4">e4</a>, and 
			      overall platform API quality. John is a member of the Eclipse <a href="http://wiki.eclipse.org/Architecture_Council">
			      Architecture</a> and <a href="http://wiki.eclipse.org/Planning_Council">Planning</a> Councils, and has authored numerous <a href="http://www.eclipse.org/articles/">articles</a> 
			      and a <a href="http://www.amazon.com/Official-Eclipse-3-0-FAQs/dp/0321268385/ref=sr_1_1?ie=UTF8&s=books&qid=1221163807&sr=8-1">
			      book</a> on Eclipse.
		        </li>
		        <li> 
		          <b><a name="andrew"></a>Andrew Overholt, Red Hat Toronto</b><br>
					Andrew works on Eclipse and related technologies at Red Hat's Toronto
					office.  He has been involved with the Eclipse community since 2005
					and is a member of the Eclipse <a href="http://wiki.eclipse.org/Architecture_Council">Architecture</a>.
					Andrew also leads the <a href="http://www.eclipse.org/linuxtools/">Linux Tools project</a>. He is very interested in continuing to grow the
					Eclipse community and to improve native platform integration.
		        </li>
		      </ul>
		</div>
		
	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Subproject Leads</h6>
			<ul>
				<li><a href="http://www.eclipse.org/platform/">Platform</a><br> -- <a href="#McQ">Mike Wilson</a></li>
				<li><a href="http://www.eclipse.org/jdt/" target="_top">JDT</a><br> -- <a href="#dani">Dani Megert</a></li>
				<li><a href="http://www.eclipse.org/pde/">PDE</a><br> -- Ankur Sharma and Curtis Windatt</a></li>
				<li><a href="http://www.eclipse.org/e4/" target="_top">e4</a><br> -- <a href="#McQ">Mike Wilson</a></li>
				<li><a href="http://www.eclipse.org/eclipse/incubator/">Eclipse Incubator</a><br> -- <a href="#McQ">Mike Wilson</a></li>
      		</ul>				
		</div>
	</div>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
