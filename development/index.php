<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# index.php
	#
	# Author: 		
	# Date:			2011-08-05
	#
	# Description: Eclipse project development main page
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Project Development";
	$pageKeywords	= "eclipse, plan, milestone, schedule, endgame, API";
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
		<div class="homeitem3col">
			<h3>Releases currently under development</h3>
			<ul>
		      <li><a href="http://www.eclipse.org/projects/project-plan.php?planurl=http://www.eclipse.org/eclipse/development/plans/eclipse_project_plan_4_3.xml"> Eclipse Project Kepler 4.3 Plan</a><br>
		        This document lays out the feature and API set for the Kepler 4.3 release of the Eclipse Project.</li>
		      <li><a href="plans/freeze_plan_4_2_2.php">Eclipse Project Juno SR2 Endgame Plan</a><br>
				Information about how we plan to wrap up the Juno SR2 release (versions 3.8.2 and 4.2.2).</li>
		    </ul>
      	</div>
		<div class="homeitem3col">
			<h3>Development Process</h3>
			<ul>
			<li><a href="http://wiki.eclipse.org/index.php/Development_Conventions_and_Guidelines">
				Conventions and Guidelines</a><br>
		        Look here for the for the coding standards, naming conventions, and other 
		        guidelines we use to help ensure eclipse presents to users and developers 
		        as a unified whole rather than as a loose collection of parts.
			</li>
			<li><a href="http://dev.eclipse.org/bugs/">Bug Reports</a><br>
		        Eclipse uses <a href="http://bugzilla.mozilla.org/">Bugzilla</a> 
		        as our bug tracking system. Bugzilla has a wide following within the open 
		        source community and directly supports the workflows associated with distributed 
		        development (e.g., email notification). You can sign up for your own Eclipse 
		        bugzilla ID and start contributing bug reports.
			</li>
			<li><a href="http://git.eclipse.org">Git Repositories</a><br>
		        We use the <a href="http://git-scm.com/">Git</a> version control system
		        to support concurrent distributed development. All Eclipse project development 
		        is carried out in these repositories:
		        <ul>
		        <li><a href="http://git.eclipse.org/c/platform">Platform Git Repositories</a></li>
		        <li><a href="http://git.eclipse.org/c/jdt">JDT Git Repositories</a></li>
		        <li><a href="http://git.eclipse.org/c/pde">PDE Git Repositories</a></li>
		        <li><a href="http://git.eclipse.org/c/orion">Orion Git Repositories</a></li>
		        <li><a href="http://git.eclipse.org/c/e4">e4 Git Repositories</a></li>
		        </ul>
		        The repositories support &quot;ssh&quot;, &quot;git&quot;, and &quot;http&quot;
		        connection methods. For more information on usage of Git at eclipse.org,
		        see the <a href="http://wiki.eclipse.org/Git">Eclipsepedia Git page</a>.
			</li>
			<li><a href="http://www.eclipse.org/mail/">Mailing Lists</a><br>
		        Eclipse uses mailing lists for development coordination, design discussions, 
		        voting, announcements etc.
			</li>
			<li><a href="project-log-files/">Eclipse IP Logs</a><br>
      			Intellectual property logs, including list of committers, contributors, and
      			third party code dependencies.
      		</li>
			<li><b>Porting Guides</b><br>
			    Eclipse project porting guides detail incompatible API changes,
			    and recommended client changes in each release. For each change
			    there is a summary of what clients are affected, and steps for clients
			    to migrate.
		        <ul>
		        <li><a href="porting/eclipse_4_2_porting_guide.php">Eclipse Platform 4.2 Porting Guide</a></li>
		        </ul>
      		</li>
      		</ul>
      	</div>
		<div class="homeitem3col">
			<h3>API Resources</h3>
			<ul>
			<li><a href="http://www.eclipse.org/articles/Article-API%20use/eclipse-api-usage-rules.html">
				How to use the Eclipse API</a><br>
      			Guidelines for using Eclipse APIs to ensure that your code will keep working as Eclipse evolves.
      		</li>
      		<li><a href="http://wiki.eclipse.org/index.php/Evolving_Java-based_APIs">Evolving Java-based APIs</a><br>
      			Guidelines for how to evolve Java-based APIs while maintaining compatibility 
				with existing client code.
			</li>
			<li><a href="apis/Eclipse-APIs-Lines-in-the-Sand.pdf">
				Eclipse APIs: Line in the Sand (pdf)</a><br>
      			The philosophy, psychology, and sociology of APIs, EclipseCON 2004 presentation 
				by Jim des Rivieres
			</li>
			<li><a href="apis/API-First.pdf">API First (pdf)</a><br>
				Best practices for API development based, EclipseCON 2005 presentation by 
				Jim des Rivieres
			</li>
			<li><a href="http://wiki.eclipse.org/index.php/Performance">Eclipse Performance</a><br>
				Poor performance is a bug and should be tested for, tracked and fixed in 
				the same way. The Eclipse Performance page is a collection of resources 
				and information aimed at helping plug-in developers do just that.
			</li>
	        <li><a href="http://www.eclipse.org/eclipse/platform-releng/buildSchedule.html"> 
	          Release Engineering Build Schedule</a><br>
	          Schedule for Eclipse Platform nightly, integration, and milestone builds. 
	        </li>
      		</ul>
      	</div>
		<div class="homeitem3col">
			<h3>Historical information about past releases</h3>			
			<ul>
		      <li><a href="plans/freeze_plan_4_2_1.php">Eclipse Project Juno SR1 Endgame Plan</a><br>
				Information about how we wrapped up the Juno SR1 release (versions 3.8.1 and 4.2.1).</li>
		      <li><a href="http://www.eclipse.org/projects/project-plan.php?planurl=http://www.eclipse.org/eclipse/development/plans/eclipse_project_plan_4_2.xml"> Eclipse Project Juno 4.2 Plan</a><br>
		        This document lays out the feature and API set for the Juno 4.2 release of the Eclipse Project.</li>
		      <li><a href="plans/freeze_plan_4_2.php"> Eclipse Project Juno 4.2 Endgame Plan</a><br>
				Information about how we wrapped up the Juno release (versions 3.8 and 4.2).</li>
		      <li><a href="plans/freeze_plan_3_7_2.php"> Eclipse Project Indigo 3.7 SR2 Endgame Plan</a><br>
				Information about how we wrapped up Indigo 3.7 Service Release 2 (version 3.7.2).</li>
		      <li><a href="plans/freeze_plan_4_1_1.php"> Eclipse Project Indigo 4.1 SR1 Endgame Plan</a><br>
				Information about how we wrapped up Indigo 4.1 Service Release 1 (version 4.1.1).</li>
		      <li><a href="plans/freeze_plan_3_7_1.php"> Eclipse Project Indigo 3.7 SR1 Endgame Plan</a><br>
				Information about how we wrapped up Indigo 3.7 Service Release 1 (version 3.7.1).</li>
		      <li><a href="http://www.eclipse.org/projects/project-plan.php?planurl=http://www.eclipse.org/eclipse/development/plans/eclipse_project_plan_3_7.xml"> Eclipse Project Indigo 3.7 Plan</a><br>
		        This document lays out the feature and API set for the Indigo 3.7 release of the Eclipse Project.</li>
		      <li><a href="http://www.eclipse.org/projects/project-plan.php?planurl=http://www.eclipse.org/eclipse/development/plans/eclipse_project_plan_4_1.xml"> Eclipse Project Indigo 4.1 Plan</a><br>
		        This document lays out the feature and API set for the Indigo 4.1 release of the Eclipse Project.</li>
		      <li><a href="plans/freeze_plan_3_7.php"> Eclipse Project Indigo Endgame Plan</a><br>
				Information about how we wrapped up the Indigo release (version 3.7.0).</li>
		      <li><a href="plans/freeze_plan_3_6_2.php"> Eclipse Project Helios SR2 Endgame Plan</a><br>
				Information about how we wrapped up Helios Service Release 2 (version 3.6.2).</li>
		      <li><a href="plans/freeze_plan_3_6_1.php"> Eclipse Project Helios SR1 Endgame Plan</a><br>
				Information about how we wrapped up Helios Service Release 1 (version 3.6.1).</li>
		      <li><a href="http://www.eclipse.org/projects/project-plan.php?planurl=http://www.eclipse.org/eclipse/development/plans/eclipse_project_plan_4_0.xml"> Eclipse Project 4.0 Plan</a><br>
		        This document lays out the feature and API set for the 4.0 early adopter release of the Eclipse Project. </li>
		      <li><a href="plans/freeze_plan_4.0.php"> Eclipse SDK 4.0 Endgame Plan</a><br>
	    		Information about how we wrapped up the 4.0 early adopter release.</li>     
		      <li><a href="http://www.eclipse.org/projects/project-plan.php?projectid=eclipse.e4"> e4 Project July 2010 Release Plan</a><br>
		        This document lays out the feature and API set for the July 2010 release of the e4 Project. </li>
		      <li><a href="http://www.eclipse.org/projects/project-plan.php?planurl=http://www.eclipse.org/eclipse/development/plans/eclipse_project_plan_3_6.xml"> Eclipse Project Helios Plan</a><br>
		        This document lays out the feature and API set for the Helios (3.6) release of the Eclipse Project. </li>
		      <li><a href="plans/freeze_plan_3.6.php"> Eclipse Project Helios Endgame Plan</a><br>
	    		Information about how we wrapped up the Helios release (version 3.6).</li>     
	      	<li><a href="http://www.eclipse.org/projects/project-plan.php?planurl=http://www.eclipse.org/e4/development/plan/e4_plan_0_9.xml"> e4 Project 0.9 Release Plan</a><br>
	        	This document lays out the feature and API set for the 0.9 release of the e4 Project. </li>
	      	<li><a href="http://www.eclipse.org/projects/project-plan.php?planurl=http://www.eclipse.org/eclipse/development/eclipse_project_plan_3_5.xml"> Eclipse Project Galileo Plan</a><br>
	        	This document lays out the feature and API set for the Galileo (3.5) release of the Eclipse Project. </li>
	      <li><a href="eclipse_project_plan_3_4.html"> Eclipse Project 3.4 Plan</a><br>
	        This document lays out the feature and API set for the 3.4 release of Eclipse Project. </li>
			 <li><a href="eclipse_project_plan_3_3.html"> Eclipse Platform Project 3.3 Plan</a><br>
 	       This document lays out the feature and API set for the 3.3 release of Eclipse. </li>
 	        <li><a href="eclipse_project_plan_3_2.html"> Eclipse Platform Project 3.2 Plan</a><br>
        	This document lays out the feature and API set for the 3.2 release of Eclipse. </li>
      		<li><a href="eclipse_3_1_stats.html">
      			Eclipse 3.1 by the numbers</a><br>
      			Some light-hearted statistics for the 3.1 release cycle.
			</li>
      		<li><a href="eclipse_project_plan_3_1.html">Eclipse Project 3.1 Plan (Final)</a><br>
      			This document lays out the feature and API set for the 3.1 release of Eclipse.
      		</li>
      		<li><a href="eclipse31_release_review.pdf">Eclipse Platform 3.1 Release Review (pdf)</a><br>
      			Presentation to Eclipse Foundation prior to shipping the 3.1 release.
      		</li>
      		<li><a href="eclipse_proposals_3_1.html">Eclipse 3.1 Proposals</a><br>
      			Links to proposals and working documents for various 3.1 plan items.
			</li>
			<li><a href="eclipse_project_plan_3_0.html">
				Eclipse Project 3.0 Plan (Final)</a><br>
				This document lays out the feature and API set for the 3.0 release of Eclipse.
			</li>
			<li><a href="eclipse_3_0_stats.html">Eclipse 3.0 by the numbers</a><br>
				Some light-hearted statistics for the 3.0 release cycle, compiled by John Arthorne.
			</li>
			<li><a href="eclipse_proposals_3_0.html">Eclipse 3.0 Proposals</a><br>
      			Links to proposals and working documents for various 3.0 plan items.
			</li>
			<li><a href="eclipse_project_plan_2_1.html">
				Eclipse Project 2.1 Plan (Final)</a><br>
				This document lays out the feature and API set for the 2.1 release of Eclipse.
			</li>
			<li><a href="2_0_retrospective_actions.html">
				Eclipse 2.0 Retrospective Actions<br></a>
				In August 2002 retrospective sessions were held with the various 
				component teams to discuss what worked (and didn't work) with the 2.0 release. 
				Based on the feedback collected during these sessions, we agreed on actions for the 2.1 effort.
			</li>
			</ul>
		</div>
	</div>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
