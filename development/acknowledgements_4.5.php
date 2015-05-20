<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<?php                                                              require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");  require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");   require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");   $App   = new App();  $Nav  = new Nav();  $Menu   = new Menu();    include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

  #*****************************************************************************
  #
  # index.php
  #
  # Author:    David Williams and others on Eclipse Project 
  # Date:      2015-06-16
  #
  # Description: Eclipse project Mars release acknowledgments page
  #
  #
  #****************************************************************************
  
  #
  # Begin: page-specific settings.  Change these. 
  $pageTitle     = "Eclipse Mars Acknowledgements";
  $pageKeywords  = "eclipse, 4.5, Mars, acknowledgements, acknowledgments, thanks";
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
      <h3>Eclipse Mars Acknowledgements</h3>

      <p>
        The entire Eclipse and Equinox team would like to thank ...
      </p>
      <p>The Platform Workspace team would like to thank ...</p>
      <p>The Platform UI team would like to extend special thanks to the following people who have made (and continue to make) ... </p>
      <p>The Platform Text team would like to thank everyone who filed good bug reports and enhancement requests. Special thanks ...</p>
      <p>The Platform Debug team would like to thank ...</p>
      <p>The Platform SWT team would like to thank ...</p>
      <p>The release engineering team would like to thank ...</p>

      <p>The JDT Core team would like to thank everyone ...</p>
      <p>The JDT Debug team would like to thank ...</p>
      <p>JDT UI sends thanks to code contributors ...</p>

      <p>The Plug-in Development Environment team would like to thank ....</p>

      <p>The Equinox team would like to thank the entire Eclipse team and community for ...
        </p>

      <h3>Active Committers [TODO: same list as last year, so far, will update later, based on Git records.]</h3>
      <p>This Eclipse and Equinox release was brought to you by the following committers. These committers were active at the time of the release (that is, one or more commits since previous
        release.)</p>
      <p>
      <h4>Eclipse Platform</h4>
      <table width="92%" align="center">
        <tr>
          <td width="23%">Alexander Kurtakov</td>
          <td width="23%">Arun Thondapu</td>
          <td width="23%">Atsuhiko Yamanaka</td>
          <td width="23%">Bogdan Gheorghe</td>
        </tr>
        <tr>
          <td width="23%">Brian de Alwis</td>
          <td width="23%">Chris Austin</td>
          <td width="23%">Curtis Windatt</td>
          <td width="23%">Dani Megert</td>
        </tr>
        <tr>
          <td width="23%">Daniel Rolka</td>
          <td width="23%">David Williams</td>
          <td width="23%">Eric Moffatt</td>
          <td width="23%">Grant Gayed</td>
        </tr>
        <tr>
          <td width="23%">John Arthorne</td>
          <td width="23%">Lakshmi Priya Shanmugam</td>
          <td width="23%">Lars Vogel</td>
          <td width="23%">Lina Kemmel</td>
        </tr>
        <tr>
          <td width="23%">Malgorzata Janczarska</td>
          <td width="23%">Markus Keller</td>
          <td width="23%">Michael Rennie</td>
          <td width="23%">Niraj Modi</td>
        </tr>
        <tr>
          <td width="23%">Paul Elder</td>
          <td width="23%">Paul Webster</td>
          <td width="23%">Silenio Quarti</td>
          <td width="23%">Szymon Brandys</td>
        </tr>
        <tr>
          <td width="23%">Szymon Ptaszkiewicz</td>
          <td width="23%">Thanh Ha</td>
          <td width="23%">Thomas Schindl</td>
          <td width="23%">Thomas Watson</td>
        </tr>
        <tr>
          <td width="23%">Wojciech Sudol</td>
        </tr>
      </table>
      <h4>Eclipse JDT</h4>
      <table width="92%" align="center">
        <tr>
          <td width="23%">Anirban Chakraborty</td>
          <td width="23%">Curtis Windatt</td>
          <td width="23%">Dani Megert</td>
          <td width="23%">Deepak Azad</td>
        </tr>
        <tr>
          <td width="23%">Jayaprakash Arthanareeswaran</td>
          <td width="23%">Jesper Moller</td>
          <td width="23%">Manju Mathew</td>
          <td width="23%">Manoj Palat</td>
        </tr>
        <tr>
          <td width="23%">Markus Keller</td>
          <td width="23%">Michael Rennie</td>
          <td width="23%">Noopur Gupta</td>
          <td width="23%">Sarika Sinha</td>
        </tr>
        <tr>
          <td width="23%">Srikanth Sankaran</td>
          <td width="23%">Stephan Herrmann</td>
        </tr>
      </table>
      <h4>Eclipse PDE</h4>
      <table width="92%" align="center">
        <tr>
          <td width="23%">Andrew Niefer</td>
          <td width="23%">Curtis Windatt</td>
          <td width="23%">Dani Megert</td>
          <td width="23%">Michael Rennie</td>
        </tr>
      </table>
      <h4>Equinox</h4>
      <table width="92%" align="center">
        <tr>
          <td width="23%">Arun Thondapu</td>
          <td width="23%">BJ Hargrave</td>
          <td width="23%">John Arthorne</td>
          <td width="23%">John Ross</td>
        </tr>
        <tr>
          <td width="23%">Lazar Kirchev</td>
          <td width="23%">Martin Lippert</td>
          <td width="23%">Silenio Quarti</td>
          <td width="23%">Thomas Watson</td>
        </tr>
      </table>
      <h4>Equinox - p2</h4>
      <table width="92%" align="center">
        <tr>
          <td width="23%">Ian Bull</td>
          <td width="23%">John Arthorne</td>
          <td width="23%">Krzysztof Daniel</td>
          <td width="23%">Pascal Rapicault</td>
        </tr>
        <tr>
          <td width="23%">Susan McCourt</td>
          <td width="23%">Thomas Watson</td>
        </tr>
      </table>
    </div>

  </div>
</body>
</html>


<?php
  $html = ob_get_contents();
  ob_end_clean();

  # Generate the web page
  $App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

