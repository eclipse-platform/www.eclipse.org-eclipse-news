<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# index.php
	#
	# Author: 		
	# Date:			2010-12-03
	#
	# Description: Eclipse project 3.6.2 release freeze plan
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Helios SR2 Endgame Plan";
	$pageKeywords	= "eclipse, 3.6.2,  milestone, schedule, endgame";
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
<style type="text/css">
	table.schedule tr.current td {
		background-color: #F4EEFF;
	}
</style>
	<div id="midcolumn">
		<h1><?= $pageTitle ?></h1>
		<div class="homeitem3col">
			<h3>Status</h3>
			<p><b>January 17, 2010 - RC2 build and test pass this week.</b></p>
      	</div>
		<div class="homeitem3col">
			<h3>Detailed Timeline</h3>
	        <table class="schedule" border="0" cellspacing="0" cellpadding="0" align="center">
	          <tr>
	            <td align="right" height="20"><b>January 2011</b>&nbsp;</td>
	          </tr>
	          <tr>
	            <td height="20"></td>
	            <td align="right" height="20">12</td>
	            <td align="right" height="20">Wed 08:00 EDT</td>
	            <td height="20">&nbsp;&nbsp;</td>
	            <td height="20">&nbsp;&nbsp;<b>Release Candidate 1 build</b></td>
	            <td height="20">&nbsp;&nbsp;</td>
	          </tr>         
			  <tr>
	            <td height="30"></td>
	          </tr>
	          <tr>
	            <td height="20"></td>
	            <td align="right" height="20">17</td>
	            <td align="right" height="20">Mon 08:00 EDT</td>
	            <td height="20">&nbsp;&nbsp;</td>
	            <td height="20">&nbsp;&nbsp;<b>Contribute RC1 build to Helios SR2 train</b></td>
	            <td height="20">&nbsp;&nbsp;</td>
	          </tr>         
	          <tr class="current">
	            <td height="20"></td>
	            <td align="right" height="20">19</td>
	            <td align="right" height="20">Wed 08:00 EDT</td>
	            <td height="20">&nbsp;&nbsp;</td>
	            <td height="20">&nbsp;&nbsp;<b>Release Candidate 2 build</b></td>
	            <td height="20">&nbsp;&nbsp;</td>
	          </tr>         
	          <tr>
	            <td height="20"></td>
	            <td align="right" height="20">20</td>
	            <td align="right" height="20">Thu 08:00 EDT</td>
	            <td height="20">&nbsp;&nbsp;</td>
	            <td height="20">&nbsp;&nbsp;<b>Start 1-day test pass against RC2</b></td>
	            <td height="20">&nbsp;&nbsp;</td>
	          </tr>         
			  <tr>
	            <td height="30"></td>
	          </tr>
	          <tr>
	            <td height="20"></td>
	            <td align="right" height="20">24-28</td>
	            <td align="right" height="20"></td>
	            <td height="20">&nbsp;&nbsp;</td>
	            <td height="20">&nbsp;&nbsp;<b>Milestone week for Helios M5</b></td>
	            <td height="20">&nbsp;&nbsp;</td>
	          </tr>         
			  <tr>
	            <td height="30"></td>
	          </tr>
	          <tr>
	            <td height="20"></td>
	            <td align="right" height="20">31</td>
	            <td align="right" height="20">Mon 08:00 EDT</td>
	            <td height="20">&nbsp;&nbsp;</td>
	            <td height="20">&nbsp;&nbsp;<b>Contribute RC2 build to Helios SR2 train</b></td>
	            <td height="20">&nbsp;&nbsp;</td>
	          </tr>         
	          <tr>
	            <td align="right" height="20"><b>February 2011</b>&nbsp;</td>
	          </tr>
	          <tr>
	            <td height="20"></td>
	            <td align="right" height="20">3</td>
	            <td align="right" height="20">Wed 08:00 EDT</td>
	            <td height="20">&nbsp;&nbsp;</td>
	            <td height="20">&nbsp;&nbsp;<b>Release Candidate 3 build</b></td>
	            <td height="20">&nbsp;&nbsp;</td>
	          </tr>         
	          <tr>
	            <td height="20"></td>
	            <td align="right" height="20">3</td>
	            <td align="right" height="20">Thu 08:00 EDT</td>
	            <td height="20">&nbsp;&nbsp;</td>
	            <td height="20">&nbsp;&nbsp;<b>Start 1-day test pass against RC3</b></td>
	            <td height="20">&nbsp;&nbsp;</td>
	          </tr>         
			  <tr>
	            <td height="30"></td>
	          </tr>
	          <tr>
	            <td height="20"></td>
	            <td align="right" height="20">7</td>
	            <td align="right" height="20">Mon 08:00 EDT</td>
	            <td height="20">&nbsp;&nbsp;</td>
	            <td height="20">&nbsp;&nbsp;<b>Contribute RC3 build to Helios SR2 train</b></td>
	            <td height="20">&nbsp;&nbsp;</td>
	          </tr>         
	          <tr>
	            <td height="20"></td>
	            <td align="right" height="20">9</td>
	            <td align="right" height="20">Wed 08:00 EDT</td>
	            <td height="20">&nbsp;&nbsp;</td>
	            <td height="20">&nbsp;&nbsp;<b>Release Candidate 4 build [if required]</b></td>
	            <td height="20">&nbsp;&nbsp;</td>
	          </tr>         
			  <tr>
	            <td height="30"></td>
	          </tr>
	          <tr>
	            <td height="20"></td>
	            <td align="right" height="20">14</td>
	            <td align="right" height="20">Mon 08:00 EDT</td>
	            <td height="20">&nbsp;&nbsp;</td>
	            <td height="20">&nbsp;&nbsp;<b>Contribute RC4 build to Helios SR2 train</b></td>
	            <td height="20">&nbsp;&nbsp;</td>
	          </tr>         
	        </table>
	        <p>
	        Note that February 21 is a holiday in Canada.
	        </p>
      	</div>
		<div class="homeitem3col">
			<h3>Useful Links</h3>
			<ul>
			<li><a href="http://www.eclipse.org/eclipse/platform-releng/buildSchedule.html ">Build Schedule</a> - details on build times.</li>
			<li><a href="http://wiki.eclipse.org/Eclipse/Release_checklist">Eclipse Release Checklist</a> -
				 lists various things that need to be checked before each release.</li>
			<li><a href="http://www.eclipse.org/projects/project-plan.php?projectid=eclipse">Eclipse Project Helios Plan</a></li>
			<li><a href="http://wiki.eclipse.org/index.php/Helios">Helios Simultaneous Release</a></li>
			</ul>
      	</div>
		<div class="homeitem3col">
			<h3>What is the game plan?</h3>
			<p> 
	 		The Eclipse Helios Service Release 2 ("Helios SR2") endgame involves building 
	        a series of release candidates leading to the Eclipse project's contribution to the
	        Helios SR2 release. The Eclipse project version number for this release is 3.6.2.
	        By its nature, this maintenance release contains fixes to a small number 
	        of serious problems found in the September 2010 Helios SR1 release. We make and verify each 
	        fix carefully, so that we do not need to tie up the entire development 
	        team in time-consuming test passes. As always, we welcome help from the 
	        community with testing the release candidates. By default,&nbsp; Helios SR2
	        is supposed to work exactly like the initial Helios release except for the problems we intended 
	        to fix. All problems fixed in Helios SR2 are in the Eclipse bugzilla database 
	        and flagged with Target Milestone &quot;3.6.2&quot; (query bugzilla for 
	        the <a href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&amp;product=PDE&amp;product=Platform&amp;product=Equinox&amp;target_milestone=3.6.2&amp;resolution=FIXED&amp;order=bugs.bug_id">complete 
	        list of bugs fixed in Helios SR2</a>). We are most interested in identifying 
	        regressions where we have changed something that we did not intend to.
	        </p> 
	                
	        <p>General announcements during the Helios SR2 endgame are posted to the 
	        <a href="http://dev.eclipse.org/mailman/listinfo/platform-releng-dev">platform-releng-dev@eclipse.org</a> 
		    developer mailing list. Anyone participating in the endgame should be subscribed 
			to this list, and should direct any general questions and comments about the process 
			there as well.</p>			
	       
		   <strong>RC1</strong>
		   <p>
		   Release candidate 1 is a warm-up build to ensure the release train build
		   process is in place and all projects are making contributions. All fixes submitted 
	       to maintenance stream builds must have a component lead vote on the bug report.
	       </p>

		   <strong>RC2</strong>
		   <p>
	        Release candidate containing fixes for the majority of known outstanding 
	        defects that we intend to fix for Helios SR2. At the end of RC2 build, 
	        there should not be any open defects tagged 3.6.2. All fixes submitted 
	        to maintenance stream builds must have a component lead vote on the bug report,
	        and the fix must be reviewed by an additional committer (the reviewer can be
	        the component lead if they didn't make the fix).
	        </p>               
	
	        <strong>Test pass using RC2</strong>
	        <p>Concerted 1-day testing effort using RC2 involving entire community including 
	        all component teams. The goal is to verify all the fixes and check for any regressions.
			</p>
	
	        <strong>RC3</strong>
	        <p>Release candidate containing fixes for all known outstanding defects
	        that we intend to fix for Helios SR2. All fixes submitted to RC3 must have a PMC vote on the bug report,
	        and the fix must be reviewed by an additional committer (any committer other than
	        the one who made the fix).
	        Ensure that all feature/plugin versions have been consistently incremented when needed.
	        </p>
	
	        <strong>Test pass using RC3</strong>
	        <p>Concerted 1-day testing effort using RC3 involving entire community 
	           including all component teams. The goal is to verify all the fixes, check 
	           for any regressions and sanity check our RC3 candidate.
	         </p>
	         
	         <strong>RC4</strong>
	         <p>Release candidate 4, if required, to fix problems detected during the test pass.
	         We expect NO CHANGE at this point. If you find a show stopper, please notify ASAP the 
	         <a href="http://dev.eclipse.org/mailman/listinfo/eclipse-pmc">eclipse-pmc@eclipse.org</a> mailing list.
	         All fixes submitted to RC4 must have a PMC vote on the bug report and be reviewed
	         by an additional committer (any committer other than the one who made the fix).
	         </p>
	         <p>No test pass is scheduled unless significant contributions occurred. If so, 
	         then Thursday would be elected for a one day test pass</p>
	         
			<strong>API change approval</strong>
	        <p>
			No API changes are expected during a maintenance release. Any exception must be
			approved by the PMC. No changes are to be released without prior approval
			and associated bug report. Send the request for approval to the eclipse-pmc
			mailing list. If a change is made to API to make it binary compatible with
			a previous release, technically this is still an API change, and thus it should be treated
			in the same way as any other API change requests.	
			</p>
			
			<strong>Helios SR2 Release</strong>
			<p>The Helios SR2 release should be complete and available for download by 
	              the end of February 2011 as part of the <a href="http://wiki.eclipse.org/Helios">Helios 
	              coordinated service release</a> . If product teams intending 
	              to ship on Helios SR2 uncover further serious defects during the endgame, 
	              we may schedule additional release candidate builds to incorporate fixes.
			</p>             
		</div>
	</div>
              
<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
