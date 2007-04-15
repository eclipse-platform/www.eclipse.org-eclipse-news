<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Project Incubator Downloads";
	$pageKeywords	= "Eclipse, Platform, JDT, PDE, Equinox, Incubator, download";
	$pageAuthor		= "Eclipse Project Incubator team";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	# Paste your HTML content between the markers!	
ob_start();
?>		

	<div id="midcolumn">
		<h1><?= $pageTitle ?></h1>
		      <p>
The downloads for the Eclipse Project Incubator subproject are available via the following
pages:
			</p>
	      <table width="100%" border="0">
	        <tr> 
	          <td width="20%" valign="top"><b>Page</b></td>
	          <td width="82%"><b>Description</b></td>
	        </tr>
	        <tr>
	          <td width="20%" valign="top"><a href="http://eclipse.org/equinox/incubator/downloads.php">Equinox</a></td>
	          <td width="82%">Equinox Incubator downloads</td>
	        </tr>
	      </table>
		</div>
	</div>

<div id="rightcolumn">
 <div class="sideitem">
   <h6>Incubation</h6>
   <div align="center">
      <p>&nbsp;</p>
      <a href="/projects/what-is-incubation.php"><img 
        align="center" src="/images/egg-incubation.png" 
        border="0" alt="Incubation" /></a>
      <p>&nbsp;</p>
   </div>
 </div>
</div>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>