<?php
//ini_set("display_errors", "true");
//error_reporting (E_ALL);
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");
$App   = new App();
$Nav  = new Nav();
$Menu   = new Menu();
$right_nav = FALSE;
$keyword = 'eclipse, 4.6, Neon, acknowledgements, acknowledgments, thanks';
include($App->getProjectCommon());


#echo '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">';


#*****************************************************************************
#
# index.php
#
# Author:    David Williams and others on Eclipse Project
# Date:      2015-06-16
#
# Description: Eclipse project Neon release acknowledgments page
#
#
#****************************************************************************

#
# Begin: page-specific settings.  Change these.
$pageTitle     = "Eclipse Neon Acknowledgements";
$pageKeywords  = "eclipse, 4.6, Neon, acknowledgements, acknowledgments, thanks";
$pageAuthor    = "David Williams and the Eclipse Project Team";

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

    <h3>Eclipse Neon Acknowledgements</h3>
<p class="bg-danger">NOTE: This page is under development.</p>
    <p>The entire Eclipse and Equinox team would like to thank
    <!-- the Eclipse Foundation staff for their tireless efforts, including: Denis Roy, Matt Ward, and Mikael Barbero for not only keeping all
      that infrastructure going, but also constantly improving it; Janet Campbell and Sharon Corbett for guiding us through the Eclipse legal process; Wayne Beaton for giving us improved tools to
      simplify and manage our development process; Ian Skerrett for his help with marketing the Eclipse release; and Mike Milinkovich for running the whole show. In particular, we appreciate the
      Eclipse Foundation providing resources to allow the building and signing of "Mac Apps" as true applications for MacosX, all propertly signed with the new requirements from Apple.
    -->
     </p>
    <p>
      We would also like to thank the users and adopters who support our efforts, through a range of activities, including early testing, being a <a href="https://eclipse.org/donate/">Friend of
        Eclipse</a>, contracting special work, or outright employment.
    </p>

    <!--
    <p>A special mention should be made to thank to Luis Bernardo and the Apache Batik team who provided service versions on some very old versions of the 'org.apache.batik.dom' bundle, for the
      Neon release train. This was to fix a security issue discovered late in the cycle, and prevented everyone on the release train being required to move up to the latest version at the last minute.
      One of bundles, the oldest version, was even re-compiled with Java 1.2 libraries, as it was originally, which not only shows the age of the bundle, but shows that team's skill and care at
      release engineering. Overall, an excellent example of cooperation and collaboration with other Open Source projects, even outside of Eclipse.
    -->
    </p>


    <p>The Platform Resources team would like to thank everyone who has helped by filing bugs, testing and providing patches. Specifically we would like to thank the following people who have
      helped improve the Resources components by their code contributions to this release: Alex Blewitt, Richard Gobeli, Mickael Istria, Markus Keller, Tobias Melcher, Ed Merks, Pascal Rapicault,
      Lars Vogel, Thomas Wolf, Stefan Xenos.</p>

    <p>The Platform UI (and Text) team would like to thank
      everyone who has helped us to improve the quality by testing and reporting bugs and enhancement requests. Special thanks to the following list of
      people, in alphabetical order, who contributed code to the project:
      Adam Briska, Alain Bernard, Alena Laskavaia, Alex Blewitt, Alexandra Buzila, Ali Akar, Andreas Mayer, Andreas Sewe, Axel Richard, Bartosz Popiela, Ben Cox, C. Sean Young, Christian Georgi,
      Christian Pontesegger, Christian Radspieler, Christoph Daniel Schulze, Conrad Groth, Conrad Groth, Daniel Haftstein, Daniel Jaeger, Daniel Kruegler, Dariusz Stefanowicz, Denis Zygann,
      Dominic Scharfe, Ed Merks, Elisabeth Bohlig, Eric Williams, Eugen Neufeld, Fabio Zadrozny, Jan-Ove Weichel, Jaxsun McCarthy Huggan, Jens Kubler, Jeremie Bresson, Joel Drigo, Kaloyan Raev,
      Lars Sadau, Leung Wang Hei, Lothar L., Manuel Steurer, Marc-Andre Laperle, Martin Keller, Mat Booth, Matt Biggs, Matthias Becker, Matthias P. Nowak, Mikael Barbero, Noopur Gupta, Philipp Bumann,
      Phillip Webb, Rainer Pfannkuch, Rene Brandstetter, Robert Roth, Rudiger Herrmann, Sebastian Zarnekow, Sergey Grant, Snjezana Peco, Sravan Kumar Lakkimsetti, Stefan Winkler, Thorsten Hake,
      Thorsten Maack, Tobias Melcher, Victor Rubezhny, Wainer dos Santos Moschetta and Wayne Beaton.
    </p>

    <p>The Platform SWT team would like to thank

    <!-- everyone who helped to improve the toolkit by filing bug reports and enhancement requests, as well as the early adopters who contributed towards
      improving quality by testing. Special thanks go to : Alexander Kurtakov (reviewed and contributed several patches for GTK3), Leo Ufimtsev (DND and other fixes for GTK3), Snjezana Peco (fixed
      drawing issues related to GTK+ 3.10 and above including one 'greatfix' contribution), Marc-Andre Laperle (fixed unresponsive keyboard shortcuts in GTK3), Joshua Barkovic (contributed initial
      implementation for Wayland backend), Matthew Painter &amp; Neil Rashbrook (helped in improving support for newer versions of XULRunner), Nicolaj Hoess &amp; Marco Descher (added tooltip support
      for menu items). We would also like to thank Abhishek Kishore, Alexandra Buzila, Andrey Loskutov, Anton Leherbauer, Dani Megert, David Williams, Ian Bull, Jacek Sieka, James Watkins-Harvey,
      Jonny Lamb, Lars Vogel, Lina Kemmel, Markus Keller, Mat Booth, Matthias Mailänder, Mickael Istria, Mikael Barbero, Pascal Rapicault, Paul Webster, Peter White, Sami Wagiaalla, Sergey Prigogin,
      Sopot Cela, Stefan Xenos, Stephan Herrmann, Steve Francisco, Sudol Wojciech and Tobias Oberlies. We would like to appreciate Silenio Quarti, Bogdan Gheorghe and Grant Gayed for always supporting
      the team.
    -->
    </p>
    <p>The release engineering team would like to thank
    <!-- the many people who helped to improve our build. Also, the webmasters at the Eclipse Foundation for their constant help and education; in
      particular Mikael Barbero who fixed several show-stopping issues in CBI. I'd also like to thank the Tycho Team for providing fixes and timely updates to Tycho &dash; two releases during Neon!
    -->
    </p>
    <p>The JDT Core team would like to thank everyone who has helped us improve quality by testing and filing good bug reports.We would also like to acknowledge David Williams for all
     the build and releng support. We would like to thank Alex Blewitt, Alex Panchenko, Alexander Kurtakov, Andreas Sewe, Andrey Loskutov, Carmi Grushko, Dusi Sarath Chandra, 
     Gabor Kovesdan, Harry Terkelsen, Igor Fedorenko, John Glassmyer, Lars Vogel, Mat Booth, Robert Roth and Sven Strohschein for their contributions to JDT. 
    </p>
    
    <p>The JDT Debug team would like to thank everyone who helped improve the Java debugger by filing bugs, testing and providing patches. Specifically we would like to thank Andrey Loskutov (for 
    contributing to Timeout and Breakpoint related old bugs), Alexander Kurtakov, Jens Schiebel, Jesper Steen Moller (for contributing to Java 8 related bugs), Mat Booth, Matej Spiller Muys (for 
    working on old performance bug), Noopur Gupta and Stefan Xenos for bug fixes.
    </p>

    <p>The Platform Debug team would like to thank everyone who helped improve the debugger framework by filing bugs, testing and providing patches. Specifically we would like to thank Alex Blewitt,
     Anton Leherbauer, Ghaith Hachem, Jonah Graham, Lars Vogel, Norman Yee, Ricardo Bochnia, Stefan Xenos and Stephan Wahlbrink for bug fixes, Matthias Becker and Tony McCrary for icons.
    </p>

    <p>The Platform Ant team would like to thank everyone who helped improve the ant framework by filing bugs, testing and providing patches. Specifically we would like to thank Alexander Kurtakov,
      David North, Julian Enoch, Kaloyan Raev, Robert Roth and Stefan Xenos for bug fixes.
    </p>


    <p>JDT UI sends thanks to everyone
      who filed good enhancement requests, helped to improve the quality by testing and filing good bug reports, and provided answers on JDT forums/newsgroups.
      Special thanks to those who contributed code:
      Alex Blewitt, Alexander Kurtakov, Gabor Kovesdan, Harald Albers, Jan Rosczak, John Glassmyer, Kalyan Prasad, Lars Vogel, Manju Mathew, Mateusz Matela, Matthias Becker,
      Sandra Lions, Sarika Sinha, Stefan Xenos, Szymon Ptaszkiewicz and Till Brychcy.
    </p>

    <p>The Plug-in Development Environment team would like to thank the numerous contributors who continue to improve the component every release. 
        Special thanks to Peter Nehrer for contributing DS Annotations Support to PDE and as a result, he was voted in as a committer. We thank
        Markus Keller for demonstrating high quality bug reporting and providing quality fixes. He was also voted in as a committer at the end of 
        the release. We appreciate all the contributions from the community and would specifically like to thank Elena Laskavaia, Brian de Alwis, Lars Vogel,
        Stefan Xenos, Simon Scholz and Alex Blewitt. 
      </p>

    <p>The p2 team would like to thank
    <!-- the entire Eclipse team and community for supporting us while some major changes went in p2 to put in place the native layout for Mac. A special thanks to
      David Williams for all his assistance and patience and on getting the build going. Finally, thanks to everyone who provided bug reports and contributed fixes.
      -->
      </p>

    <h3>Active Committers</h3>
      <p class="bg-danger">NOTE: This section is left as a place holder and will be updated later.</p>
    <p>This Eclipse and Equinox release was brought to you by the following committers. These committers were active at the time of the release (that is, one or more commits since previous
      release.)</p>
    <p>
    <h4>Eclipse Platform</h4>
    <h5>Platform SWT</h5>
    <table
      width="92%"
      align="center">
      <tr>
        <td width="23%">Arun&nbsp;Thondapu</td>
        <td width="23%">Alexander&nbsp;Kurtakov</td>
        <td width="23%">Lakshmi&nbsp;Shanmugam</td>
        <td width="23%">Leo&nbsp;Ufimtsev</td>
      </tr>
      <tr>
        <td width="23%">Lina&nbsp;Kemmel</td>
        <td width="23%">Markus&nbsp;Keller</td>
        <td width="23%">Niraj&nbsp;Modi</td>
        <td width="23%">Sravan&nbsp;Kumar&nbsp;Lakkimsetti</td>
      </tr>
    </table>
    <h5>Platform UI</h5>
    <table
      width="92%"
      align="center">
      <tr>
        <td width="23%">Steve&nbsp;Francisco</td>
        <td width="23%">Sopot&nbsp;Cela</td>
        <td width="23%">Brian&nbsp;de&nbsp;Alwis</td>
        <td width="23%">Paul&nbsp;Elder</td>
      </tr>
      <tr>
        <td width="23%">Dirk&nbsp;Fauth</td>
        <td width="23%">Markus&nbsp;Keller</td>
        <td width="23%">Andrey&nbsp;Loskutov</td>
        <td width="23%">Dani&nbsp;Megert</td>
      </tr>
      <tr>
        <td width="23%">Eric&nbsp;Moffatt</td>
        <td width="23%">Sergey&nbsp;Prigogin</td>
        <td width="23%">Olivier&nbsp;Prouvost</td>
        <td width="23%">Szymon&nbsp;Ptaszkiewicz</td>
      </tr>
      <tr>
        <td width="23%">Thomas&nbsp;Schindl</td>
        <td width="23%">Wojciech&nbsp;Sudol</td>
        <td width="23%">Paul&nbsp;Webster</td>
        <td width="23%">Lars&nbsp;Vogel</td>
      </tr>
    </table>
    <h5>Platform Resources</h5>
    <table
      width="92%"
      align="center">
      <tr>
        <td width="23%">Dani&nbsp;Megert</td>
        <td width="23%">Sergey&nbsp;Prigogin</td>
        <td width="23%">Szymon&nbsp;Ptaszkiewicz</td>
        <td width="23%">&nbsp;</td>
      </tr>
    </table>
    <h5>Platform Releng</h5>
    <table
      width="92%"
      align="center">
      <tr>
        <td width="23%">David&nbsp;Williams</td>
        <td width="23%">Dani&nbsp;Megert</td>
        <td width="23%">Markus&nbsp;Keller</td>
        <td width="23%">&nbsp;</td>
      </tr>
    </table>
    <h5>Platform Documentation</h5>
    <table
      width="92%"
      align="center">
      <tr>
        <td width="23%">Dani&nbsp;Megert</td>
        <td width="23%">David&nbsp;Williams</td>
        <td width="23%">Jay&nbsp;Arthanareeswaran</td>
        <td width="23%">Lars&nbsp;Vogel</td>
      </tr>
      <tr>
        <td width="23%">Markus&nbsp;Keller</td>
        <td width="23%">Noopur&nbsp;Gupta</td>
        <td width="23%">Sarika&nbsp;Sinha</td>
        <td width="23%">Stephan&nbsp;Herrmann</td>
      </tr>
      <tr>
        <td width="23%">Szymon&nbsp;Ptaszkiewicz</td>
        <td width="23%">&nbsp;</td>
        <td width="23%">&nbsp;</td>
        <td width="23%">&nbsp;</td>
      </tr>
    </table>
    <h5>Platform Text</h5>
    <table
      width="92%"
      align="center">
      <tr>
        <td width="23%">Dani&nbsp;Megert</td>
        <td width="23%">Markus&nbsp;Keller</td>
        <td width="23%">&nbsp;</td>
        <td width="23%">&nbsp;</td>
      </tr>
    </table>
    <h5>Platform Debug</h5>
    <table
      width="92%"
      align="center">
      <tr>
        <td width="23%">Sarika&nbsp;Sinha</td>
        <td width="23%">Dani&nbsp;Megert</td>
        <td width="23%">Markus&nbsp;Keller</td>
        <td width="23%">Michael&nbsp;Rennie</td>
      </tr>
    </table>

    <h4>Eclipse JDT</h4>
    <table
      width="92%"
      align="center">
      <tr>
        <td width="23%">Andrew&nbsp;Clement</td>
        <td width="23%">Dani&nbsp;Megert</td>
        <td width="23%">Jayaprakash&nbsp;Arthanareeswaran</td>
        <td width="23%">Jesper&nbsp;Moller</td>
      </tr>
      <tr>
        <td width="23%">Manoj&nbsp;Palat</td>
        <td width="23%">Markus&nbsp;Keller</td>
        <td width="23%">Mateusz&nbsp;Matela</td>
        <td width="23%">Michael&nbsp;Rennie</td>
      </tr>
      <tr>
        <td width="23%">Noopur&nbsp;Gupta</td>
        <td width="23%">Olivier&nbsp;Thomann</td>
        <td width="23%">Sarika&nbsp;Sinha</td>
        <td width="23%">Sasikanth&nbsp;Bharadwaj</td>
      </tr>
      <tr>
        <td width="23%">Stefan&nbsp;Xenos</td>
        <td width="23%">Stephan&nbsp;Herrmann</td>
        <td width="23%">Till&nbsp;Brychcy</td>
        <td width="23%">Walter&nbsp;Harley</td>
      </tr>
    </table>
    <h4>Eclipse PDE</h4>
    <table
      width="92%"
      align="center">
      <tr>
        <td width="23%">Vikas&nbsp;Chandra</td>
        <td width="23%">Pascal&nbsp;Rapicault</td>
        <td width="23%">Dani&nbsp;Megert</td>
        <td width="23%">Lars&nbsp;Vogel</td>
      </tr>
      <tr>
        <td width="23%">Curtis&nbsp;Windatt</td>
        <td width="23%">&nbsp;</td>
        <td width="23%">&nbsp;</td>
        <td width="23%">&nbsp;</td>
      </tr>
    </table>
    <h4>Equinox</h4>
    <table
      width="92%"
      align="center">
      <tr>
        <td width="23%">Thomas&nbsp;Watson</td>
        <td width="23%">Arun&nbsp;Thondapu</td>
        <td width="23%">BJ&nbsp;Hargrave</td>
        <td width="23%">Pascal&nbsp;Rapicault</td>
      </tr>
      <tr>
        <td width="23%">Martin&nbsp;Lippert</td>
        <td width="23%">Silenio&nbsp;Quarti</td>
        <td width="23%">Raymond&nbsp;Auge</td>
        <td width="23%">&nbsp;</td>
      </tr>
    </table>
    <h4>Equinox - p2</h4>
    <table
      width="92%"
      align="center">
      <tr>
        <td width="23%">Pascal&nbsp;Rapicault</td>
        <td width="23%">Tobias&nbsp;Oberlies</td>
        <td width="23%">Thomas&nbsp;Watson</td>
        <td width="23%">Susan&nbsp;McCourt</td>
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

