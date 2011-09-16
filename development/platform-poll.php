<?php 
//ini_set("display_errors", "true");
//error_reporting (E_ALL);
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");      
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");     
$App   = new App();  $Nav   = new Nav();  $Menu  = new Menu();

       #*****************************************************************************
       #
       # poll2011name.php
       #
       # Author:            John Arthorne
       # Date:               2011-09-16
       #
       # Description: Poll on machine information
       #
       #
       #****************************************************************************
       
       #
       # Begin: page-specific settings.  Change these. 
	   $pageTitle 		= "Primary Development Platform Poll";
       $pageKeywords = "Eclipse reference platform";
       $pageAuthor          = "John Arthorne";
       $theme = "Nova";


   # Enable polls on this page
   # Polls are good for 3 months!
   $App->usePolls();

   # Poll 1
   $Poll = new Poll(17, "What is your primary development platform that you test every milestone?");
   $Poll->addOption(1, "Windows XP"); 
   $Poll->addOption(2, "Windows Vista"); 
   $Poll->addOption(3, "Windows 7"); 
   $Poll->addOption(4, "RHEL 4");
   $Poll->addOption(5, "RHEL 5"); 
   $Poll->addOption(6, "RHEL 6"); 
   $Poll->addOption(7, "SLES 10"); 
   $Poll->addOption(8, "SLES 11"); 
   $Poll->addOption(9, "Ubuntu LTS (10.4)"); 
   $Poll->addOption(10, "Ubuntu 11.04"); 
   $Poll->addOption(11, "Ubuntu 11.10"); 
   $Poll->addOption(12, "Solaris 10 or earlier"); 
   $Poll->addOption(13, "Solaris 11"); 
   $Poll->addOption(14, "HP-UX 11 v2 or earlier"); 
   $Poll->addOption(15, "HP-UX 11 v3");
   $Poll->addOption(16, "Mac OS X 10.6 or earlier");
   $Poll->addOption(17, "Mac OS X 10.7");
   $Poll->noGraph();  # uncomment to disable bar graph
   $Poll->requireLogin();  # no anonymous votes
   $pollHTML = $Poll->getHTML();
       # Paste your HTML content between the markers!   
ob_start();
?>            


<div id="maincontent" style="width: 90%; padding: 5%;">

              <h1><?= $pageTitle ?></h1>
                     <h2>Please let us know your primary platform for Eclipse development</h2>
                     <p>The Eclipse platform team uses a set of 
                     <a href="http://www.eclipse.org/projects/project-plan.php?planurl=http://www.eclipse.org/eclipse/development/plans/eclipse_project_plan_4_2.xml#target_environments">
                     Reference platforms</a> to focus our development and testing efforts.
                     We typically list only the most recent release of each operating system,
                     with the exception of Windows where we regularly develop and test against multiple versions.</p>
                     <p>We only maintain reference platforms that are actively developed on and tested
                     minimally each milestone, and ideally every integration build. To help us figure out the state
                     of our current reference platform coverage, please indicate below your primary development
                     platform. Please only vote if you are actively using every platform milestone build on this
                     configuration. This poll is intended for Eclipse contributors, so committer login is required
                     to take this poll. We can assess wider community platform coverage by looking at milestone 
                     and release download statistics.
                     </p>

                     <div style="padding: 10px; margin-left: 5%; margin-right: 5%;">
                        <?= $pollHTML ?>
                     </div>
                            
                     <p>Thanks for your vote. And your help with Eclipse!</p>              

                     <p>Current date/time: <?php echo date("d/m/y : H:i (T)", time()); ?></p>
                     
</div>

<?php
       $html = ob_get_contents();
       ob_end_clean();

       # Generate the web page
       $App->generatePage($theme, $Menu, NULL, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
