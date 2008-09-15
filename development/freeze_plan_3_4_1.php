<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# index.php
	#
	# Author: 		
	# Date:			2008-09-01
	#
	# Description: Eclipse project 3.4.1 release freeze plan
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Draft Ganymede SR1 endgame plan";
	$pageKeywords	= "eclipse, 3.4.1,  milestone, schedule, endgame";
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


<div class="homeitem3col">
<h3>Eclipse Ganymede SR1 draft endgame plan</h3>
<table cellspacing="5" cellpadding="2" width="100%" border="0"> 
<tbody> <tr> <td valign="top" align="left" colspan="2"><b>Status</b></td></tr>
<tr> <td valign="top" align="right"></td><td> 
<p><font color="#ff0000"><b>Monday September 15, 2008 15:00 EDT Status:</b></font> 
          The 3.4.1 RC3 build has been declared. No further 3.4.1 builds are planned.
      </td></tr> 
<tr> <td valign="top" align="left" colspan="2"><b>Detailed Timeline</b></td></tr> <tr> <td valign="top" align="left" colspan="2"> 
<TABLE BORDER="0" CELLSPACING="0" CELLPADDING="0" ALIGN="center">
          <TR> 
            <TD HEIGHT="18" ALIGN="right"><B>August 2008</B>&nbsp;</TD>
            <TD WIDTH="24" HEIGHT="18"><IMG SRC="images/tbar_l.gif" WIDTH="24" HEIGHT="18"></TD>
          </TR>
          <TR> 
            <TD HEIGHT="18"></TD>
            <TD HEIGHT="18"><IMG SRC="images/tbar_r.gif" WIDTH="24" HEIGHT="18"></TD>
            <TD HEIGHT="18" ALIGN="right">&nbsp;27</TD>
            <TD HEIGHT="18">&nbsp;&nbsp;Wed 20:00 EDT</TD>
            <TD HEIGHT="18">&nbsp;&nbsp;<B>Release Candidate 1 build</B></TD>
            <TD HEIGHT="18">&nbsp;&nbsp;</TD>
            <TD HEIGHT="18">&nbsp;&nbsp;</TD>
            <TD HEIGHT="18">&nbsp;&nbsp;</TD>
          </TR>
          <TR> 
            <TD HEIGHT="18"></TD>
            <TD HEIGHT="18"><IMG SRC="images/tbar_r.gif" WIDTH="24" HEIGHT="18"></TD>
            <TD ALIGN="right" HEIGHT="18">28</TD>
            <TD HEIGHT="18">&nbsp;&nbsp;Thurs 12:00 EDT</TD>
            <TD HEIGHT="18">&nbsp;&nbsp;<B>Start 1-day test pass against RC1</B></TD>
            <TD HEIGHT="18">&nbsp;&nbsp;</TD>
            <TD HEIGHT="18">&nbsp;&nbsp;</TD>
            <TD HEIGHT="18">&nbsp;&nbsp;</TD>
          </TR>
          <TR> 
            <TD HEIGHT="10"></TD>
            <TD ALIGN="center" HEIGHT="5"><IMG SRC="images/gray.gif" WIDTH="2" HEIGHT="10"></TD>
          </TR>
          <TR> 
            <TD ALIGN="right" HEIGHT="18"><B>September 2008</B>&nbsp;</TD>
            <TD HEIGHT="18"><IMG SRC="images/tbar_l.gif" WIDTH="24" HEIGHT="18"></TD>
          </TR>
          <TR> 
            <TD HEIGHT="18"></TD>
            <TD HEIGHT="18"><IMG SRC="images/tbar_r.gif" WIDTH="24" HEIGHT="18"></TD>
            <TD ALIGN="right" HEIGHT="18">3</TD>
            <TD HEIGHT="18">&nbsp;&nbsp;Wed 20:00 EDT</TD>
            <TD HEIGHT="18">&nbsp;&nbsp;<B>Release Candidate 2 build</B></TD>
            <TD HEIGHT="18">&nbsp;&nbsp;</TD>
            <TD HEIGHT="18">&nbsp;&nbsp;</TD>
            <TD HEIGHT="18">&nbsp;&nbsp;</TD>
          </TR>
          <TR> 
            <TD HEIGHT="18"></TD>
            <TD HEIGHT="18"><IMG SRC="images/tbar_r.gif" WIDTH="24" HEIGHT="18"></TD>
            <TD ALIGN="right" HEIGHT="18">4</TD>
            <TD HEIGHT="18">&nbsp;&nbsp;Thurs 12:00 EDT</TD>
            <TD HEIGHT="18">&nbsp;&nbsp;<B>Start 1-day test pass against RC2</B></TD>
            <TD HEIGHT="18">&nbsp;&nbsp;</TD>
            <TD HEIGHT="18">&nbsp;&nbsp;</TD>
            <TD HEIGHT="18">&nbsp;&nbsp;</TD>
          </TR>
          <TR> 
          <TR> 
            <TD HEIGHT="10"></TD>
            <TD ALIGN="center" HEIGHT="5"><IMG SRC="images/gray.gif" WIDTH="2" HEIGHT="10"></TD>
          </TR>
          <TR> 
            <TD HEIGHT="18"></TD>
            <TD HEIGHT="18"><IMG SRC="images/tbar_r.gif" WIDTH="24" HEIGHT="18"></TD>
            <TD ALIGN="right" HEIGHT="18">10</TD>
            <TD HEIGHT="18">&nbsp;&nbsp;Wed 08:00 EDT</TD>
            <TD HEIGHT="18">&nbsp;&nbsp;<B>Release Candidate 3 build [if required]</B></TD>
            <TD HEIGHT="18">&nbsp;&nbsp;</TD>
            <TD HEIGHT="18">&nbsp;&nbsp;</TD>
            <TD HEIGHT="18">&nbsp;&nbsp;</TD>
          </TR>
          <TR> 
            <TD HEIGHT="10"></TD>
            <TD ALIGN="center" HEIGHT="5"><IMG SRC="images/gray.gif" WIDTH="2" HEIGHT="10"></TD>
          </TR>
          <TR> 
            <TD HEIGHT="18"></TD>
            <TD ALIGN="center" HEIGHT="5"><IMG SRC="images/gray.gif" WIDTH="2" HEIGHT="18"></TD>
          </TR>
          <TR> 
            <TD HEIGHT="18"></TD>
            <TD ALIGN="center" HEIGHT="18"><IMG SRC="images/gray.gif" WIDTH="2" HEIGHT="18"></TD>
            <TD ALIGN="right" HEIGHT="18">24</TD>
            <TD HEIGHT="18">&nbsp;&nbsp;Wed 08:00 EDT</TD>
            <TD HEIGHT="18">&nbsp;&nbsp;<B>Release 3.4.1 available</B></TD>
            <TD HEIGHT="18">&nbsp;&nbsp;</TD>
            <TD HEIGHT="18">&nbsp;&nbsp;</TD>
            <TD HEIGHT="18">&nbsp;&nbsp;</TD>
          </TR>
        </TABLE>            
                      
        <p><a href="http://www.eclipse.org/eclipse/platform-releng/buildSchedule.html">Build Schedule</a> - details on build times.</p>               
        
        <strong>What's the game plan?</strong>
        
		<p> 
 		The Eclipse Ganymede Service Release 1 ("Ganymede SR1") endgame involves building 
        a series of release candidates leading to the Eclipse project's contribution to the
        Ganymede SR1 release. The Eclipse project version number for this release is 3.4.1.
        By its nature, this maintenance release contains fixes to a small number 
        of serious problems found in the June 2008 Ganymede release. We make and verify each 
        fix carefully, so that we do not need to tie up the entire development 
        team in time-consuming test passes. As always, we welcome help from the 
        community with testing the release candidates. By default,&nbsp; Ganymede SR1
        is supposed to work exactly like the initial Ganymede release except for the problems we intended 
        to fix. All problems fixed in Ganymede SR1 are in the Eclipse bugzilla database 
        and flagged with Target Milestone &quot;3.4.1&quot; (query bugzilla for 
        the <a href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&amp;product=PDE&amp;product=Platform&amp;product=Equinox&amp;target_milestone=3.4.1&amp;resolution=FIXED&amp;order=bugs.bug_id">complete 
        list of bugs fixed in Ganymede SR1</a>). So we're most interested in identifying 
        regressions where we've changed something that we did not intend to.
        </p> 
                
        <p>General announcements during the Ganymede SR1 endgame are posted to the 
        <a href="http://dev.eclipse.org/mailman/listinfo/platform-releng-dev">platform-releng-dev@eclipse.org</a> 
	    developer mailing list. Anyone participating in the endgame should be subscribed 
		to this list, and should direct any general questions and comments about the process 
		there as well.</p>			
       
	   <strong>RC1</strong>
	   <p>
        Release candidate containing fixes for the majority of known outstanding 
        defects that we intend to fix for Ganymede SR1. At the end of RC1 build, 
        there should not be any open defects tagged 3.4.1. All fixes submitted 
        to maintenance stream builds must have a component lead vote on the bug report.
        </p>               

        <strong>Test pass using RC1</strong>
        <p>Concerted 1-day testing effort using RC1 involving entire community 
           including all component teams. The goal is to verify all 
           the fixes and check for any regressions.
         </p>

         <strong>RC2</strong>
         <p>Release candidate containing fixes for all known outstanding defects
         that we intend to fix for Ganymede SR1. All fixes submitted 
         to RC2 must have a PMC vote on the bug report. 
         Ensure that all feature/plugin versions have been consistently incremented when needed.
         </p>

        <strong>Test pass using RC2</strong>
        <p>Concerted 1-day testing effort using RC2 involving entire community 
           including all component teams. The goal is to verify all the fixes, check 
           for any regressions and sanity check our RC2 candidate.
         </p>
         
         <strong>RC3</strong>
         <p>Release candidate 3, if required, to fix problems detected during the test pass.
         We expect NO CHANGE at this point. If you find a show stopper, please notify ASAP the 
         <a href="http://dev.eclipse.org/mailman/listinfo/eclipse-pmc">eclipse-pmc@eclipse.org</a> mailing list.
         All fixes submitted to RC3 must have a PMC vote on the bug report. 
         </p>
         <p>No test pass is scheduled unless significant contributions occurred. If so, then thursday would be elected for a one day test pass</p>

		<strong>Ganymede SR1 Release</strong>
        <p>The Ganymede SR1 release should be complete and available for download by 
              the end of September 2008 as part of the <a href="http://wiki.eclipse.org/Ganymede">Ganymede 
              coordinated service release</a> . If product teams intending 
              to ship on Ganymede SR1 uncover further serious defects during the endgame, 
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
