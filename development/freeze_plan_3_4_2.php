<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# index.php
	#
	# Author: 		
	# Date:			2008-12-17
	#
	# Description: Eclipse project Ganymede Service Release 2 endgame plan
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Draft Ganymede SR2 endgame plan";
	$pageKeywords	= "eclipse, 3.4.2,  milestone, schedule, endgame";
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
<h3>Eclipse Ganymede SR2 draft endgame plan</h3>
<table cellspacing="5" cellpadding="2" width="100%" border="0"> 
<tbody> <tr> <td valign="top" align="left" colspan="2"><b>Status</b></td></tr>
<tr> <td valign="top" align="right"></td><td> 
<p><font color="#ff0000"><b>Friday January 2, 2009 11:00 EDT Status:</b></font> 
          Builds toward Eclipse Ganymede SR2 occur every Wednesday at 8 am EST. 
      </td></tr> 
<tr> <td valign="top" align="left" colspan="2"><b>Detailed Timeline</b></td></tr> <tr> <td valign="top" align="left" colspan="2"> 
<TABLE BORDER="0" CELLSPACING="0" CELLPADDING="0" ALIGN="center">
          <TR> 
            <TD HEIGHT="18" ALIGN="right"><B>January 2009</B>&nbsp;</TD>
            <TD WIDTH="24" HEIGHT="18"><IMG SRC="images/tbar_l.gif" WIDTH="24" HEIGHT="18"></TD>
          </TR>
          <TR> 
            <TD HEIGHT="18"></TD>
            <TD HEIGHT="18"><IMG SRC="images/tbar_r.gif" WIDTH="24" HEIGHT="18"></TD>
            <TD HEIGHT="18" ALIGN="right">&nbsp;21</TD>
            <TD HEIGHT="18" ALIGN="right">&nbsp;Wed 08:00 EDT</TD>
            <TD HEIGHT="18">&nbsp;&nbsp;<B>Release Candidate 0 build</B></TD>
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
            <TD HEIGHT="18"><IMG SRC="images/tbar_r.gif" WIDTH="24" HEIGHT="18"></TD>
            <TD ALIGN="right" HEIGHT="18">22</TD>
            <TD ALIGN="right" HEIGHT="18">Thur 08:00 EDT</TD>
            <TD HEIGHT="18">&nbsp;&nbsp;<B>Start 1-day test pass against RC0</B></TD>
            <TD HEIGHT="18">&nbsp;&nbsp;</TD>
            <TD HEIGHT="18">&nbsp;&nbsp;</TD>
            <TD HEIGHT="18">&nbsp;&nbsp;</TD>
          </TR>
          <TR> 
            <TD HEIGHT="10"></TD>
            <TD ALIGN="center" HEIGHT="5"><IMG SRC="images/gray.gif" WIDTH="2" HEIGHT="10"></TD>
          </TR>
          <TR> 
            <TD HEIGHT="10"></TD>
            <TD ALIGN="center" HEIGHT="5"><IMG SRC="images/gray.gif" WIDTH="2" HEIGHT="10"></TD>
          </TR>
          <TR> 
            <TD HEIGHT="18"></TD>
            <TD HEIGHT="18"><IMG SRC="images/tbar_r.gif" WIDTH="24" HEIGHT="18"></TD>
            <TD ALIGN="right" HEIGHT="18">28</TD>
            <TD ALIGN="right" HEIGHT="18">Wed 08:00 EDT</TD>
            <TD HEIGHT="18">&nbsp;&nbsp;<B>Release Candidate 1 build</B></TD>
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
            <TD ALIGN="right" HEIGHT="18"><B>February 2009</B>&nbsp;</TD>
            <TD HEIGHT="18"><IMG SRC="images/tbar_l.gif" WIDTH="24" HEIGHT="18"></TD>
          </TR>
          <TR> 
            <TD HEIGHT="18"></TD>
            <TD HEIGHT="18"><IMG SRC="images/tbar_r.gif" WIDTH="24" HEIGHT="18"></TD>
            <TD ALIGN="right" HEIGHT="18">2</TD>
            <TD ALIGN="right" HEIGHT="18">Mon 08:00 EDT</TD>
            <TD HEIGHT="18">&nbsp;&nbsp;<B>Contribute RC1 build to release train RC1 build</B></TD>
            <TD HEIGHT="18">&nbsp;&nbsp;</TD>
            <TD HEIGHT="18">&nbsp;&nbsp;</TD>
            <TD HEIGHT="18">&nbsp;&nbsp;</TD>
          </TR>
          <TR> 
            <TD HEIGHT="18"></TD>
            <TD HEIGHT="18"><IMG SRC="images/tbar_r.gif" WIDTH="24" HEIGHT="18"></TD>
            <TD ALIGN="right" HEIGHT="18">4</TD>
            <TD ALIGN="right" HEIGHT="18">Wed 08:00 EDT</TD>
            <TD HEIGHT="18">&nbsp;&nbsp;<B>Release Candidate 2 build</B></TD>
            <TD HEIGHT="18">&nbsp;&nbsp;</TD>
            <TD HEIGHT="18">&nbsp;&nbsp;</TD>
            <TD HEIGHT="18">&nbsp;&nbsp;</TD>
          </TR>
          <TR> 
            <TD HEIGHT="18"></TD>
            <TD HEIGHT="18"><IMG SRC="images/tbar_r.gif" WIDTH="24" HEIGHT="18"></TD>
            <TD ALIGN="right" HEIGHT="18">9</TD>
            <TD ALIGN="right" HEIGHT="18">Mon 08:00 EDT</TD>
            <TD HEIGHT="18">&nbsp;&nbsp;<B>Contribute RC2 build to release train RC2 build</B></TD>
            <TD HEIGHT="18">&nbsp;&nbsp;</TD>
            <TD HEIGHT="18">&nbsp;&nbsp;</TD>
            <TD HEIGHT="18">&nbsp;&nbsp;</TD>
          </TR>
          <TR> 
            <TD HEIGHT="10"></TD>
            <TD ALIGN="center" HEIGHT="5"><IMG SRC="images/gray.gif" WIDTH="2" HEIGHT="10"></TD>
          </TR>
          <TR> 
            <TD HEIGHT="10"></TD>
            <TD ALIGN="center" HEIGHT="5"><IMG SRC="images/gray.gif" WIDTH="2" HEIGHT="10"></TD>
          </TR>
          <TR> 
            <TD HEIGHT="18"></TD>
            <TD ALIGN="center" HEIGHT="18"><IMG SRC="images/gray.gif" WIDTH="2" HEIGHT="18"></TD>
            <TD ALIGN="right" HEIGHT="18">25</TD>
            <TD ALIGN="right" HEIGHT="18"></TD>
            <TD HEIGHT="18">&nbsp;&nbsp;<B>Ganymede SR2 release available</B></TD>
            <TD HEIGHT="18">&nbsp;&nbsp;</TD>
            <TD HEIGHT="18">&nbsp;&nbsp;</TD>
            <TD HEIGHT="18">&nbsp;&nbsp;</TD>
          </TR>
        </TABLE>            
                      
        <p><a href="http://www.eclipse.org/eclipse/platform-releng/buildSchedule.html">Build Schedule</a> - details on build times.</p>               
        
        <strong>What's the game plan?</strong>
        
		<p> 
 		The Eclipse Ganymede Service Release 2 ("Ganymede SR2") endgame involves building 
        a series of release candidates leading to the Eclipse project's contribution to the
        <a href="http://wiki.eclipse.org/index.php/Ganymede_Simultaneous_Release#Coordinated_Service_Releases">Ganymede SR2</a> release. The Eclipse project version number for this release is 3.4.2.
        By its nature, this maintenance release contains fixes to a small number 
        of serious problems found in the Ganymede SR1 release. We make and verify each 
        fix carefully, so that we do not need to tie up the entire development 
        team in time-consuming test passes. As always, we welcome help from the 
        community with testing the release candidates. By default,&nbsp; Ganymede SR2
        is supposed to work exactly like Ganymede SR1 except for the problems we intended 
        to fix. All problems fixed in Ganymede SR2 are in the Eclipse bugzilla database 
        and flagged with Target Milestone &quot;3.4.2&quot; (query bugzilla for 
        the <a href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&amp;product=PDE&amp;product=Platform&amp;target_milestone=3.4.2&amp;resolution=FIXED&amp;order=bugs.bug_id">complete 
        list of bugs fixed in 3.4.2</a>). So we're most interested in identifying 
        regressions where we've changed something that we did not intend to.
        </p> 
                
        <p>General announcements during the Ganymede SR2 endgame are posted to the 
        <a href="http://dev.eclipse.org/mailman/listinfo/platform-releng-dev">platform-releng-dev@eclipse.org</a> 
	    developer mailing list. Anyone participating in the endgame should be subscribed 
		to this list, and should direct any general questions and comments about the process 
		there as well.</p>			
       
	   <strong>RC0</strong>
	   <p>
        Release candidate containing fixes for the majority of known outstanding 
        defects that we intend to fix for Ganymede SR2. At then end of RC0 build, 
        there should not be any open defects tagged 3.4.2. All fixes submitted 
        to 3.4.2 stream builds must have a PMC vote on the bug report.
        </p>               
        
        <strong>Test pass using RC0</strong>
        <p>Concerted 1-day testing effort using RC0 involving entire community 
           including all component teams. Since this is the only test pass 
           scheduled for this maintenance release, the goal is to verify all 
           the fixes and check for any regressions.
         </p>
         
         <strong>RC1</strong>
         <p>Release candidate 1, if required, to fix problems detected during the test pass.
          All fixes submitted to 3.4.2 stream builds must have a PMC vote on the bug report.</p>

         <strong>RC2</strong>
         <p>Release candidate 2, if required, to fix problems detected during integration
         with the Ganymede release train.  All fixes submitted to 3.4.2 stream builds must 
         have a PMC vote on the bug report.</p>

		<strong>Ganymede SR2 Release</strong>
        <p>The Ganymede SR2 release should be complete and available for download by 
              the end of February as part of the <a href="http://wiki.eclipse.org/index.php/Ganymede_Simultaneous_Release#Coordinated_Service_Releases">Ganymede
              coordinated service release</a> . If product teams intending 
              to ship on Ganymede SR2 uncover further serious defects during the end-game, 
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
