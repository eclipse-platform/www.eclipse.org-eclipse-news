<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<?php                                                              require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");  require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");   require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");   $App   = new App();  $Nav  = new Nav();  $Menu   = new Menu();    include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

  #*****************************************************************************
  #
  # index.php
  #
  # Author:    David Williams and others on Eclipse Project 
  # Date:      2014-06-16
  #
  # Description: Eclipse project Luna release acknowledgments page
  #
  #
  #****************************************************************************
  
  #
  # Begin: page-specific settings.  Change these. 
  $pageTitle     = "Eclipse Luna Acknowledgements";
  $pageKeywords  = "eclipse, 4.4, luna, acknowledgements, acknowledgments, thanks";
  $pageAuthor    = "";
  
  # Add page-specific Nav bars here
  # Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
  # $Nav->addNavSeparator("My Page Links",   "downloads.php");
  # $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
  # $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

  # End: page-specific settings
  #
    
  # Paste your HTML content between the markers!  
ob_start();
?>    

  <div id="midcolumn">


<div class="homeitem3col">
<h3>Eclipse Luna Acknowledgements</h3>

<p>
The entire Eclipse and Equinox team would like to thank ...
</p>
<p>
The Platform Text team would like to thank everyone who filed good bug reports and enhancement requests.
Special thanks go to Terry Parker, Thanh Ha, darren ha, Szymon Ptaszkiewicz, and Mickael Istria for patches they submitted.
</p>
<p>
JDT UI sends thanks to code contributors
Nikolay Metchev, Samrat Dhillon, Lukas Hanke, Mickael Istria, Stephan Herrmann, Lars Vogel, Thanh Ha,
Xavier Coulon, Andrew Eisenberg, Ievgen Lukash, Marcel Bruch, Matthias Mailänder, Thirumala Reddy Mutchukota, Thomas Schindl, Andreas Schmid.
</p>
<p>
The JDT Core team would like to thank ...
</p>
<p>
The JDT Debug team would like to thank ...
</p>
<p>
The Platform Debug team would like to thank ...
</p>
<p>
The Plug-in Development Environment team would like to thank .
</p>
<p>
The SWT team would like to thank ...
</p>
<p>The release engineering team would like to thank ...
</p>
<p>
The Platform UI team would like to extend special thanks to ...
</p>


<h3>Active Committers [TODO: update from IPLogs/Release Review Materials]</h3>
<p>
This Eclipse and Equinox release was brought to you by the following committers. These committers
were active at the time of the release (one or more commits in the past nine months):
</p>
<p>
<table width=100%>
<tr>
<td>...</td>
<td>...</td>
<td>...</td>
<td>...</td>
</tr>
</table>
</p>
</div>

<?php
  $html = ob_get_contents();
  ob_end_clean();

  # Generate the web page
  $App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

