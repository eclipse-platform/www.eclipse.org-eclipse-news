

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
# I could not find a place to put "style" element that was 
# "legal". I'm sure there is a way, if suspect the table will 
# look fine without it. 
# <style>
#  table.center {
#    width:92%; 
#    margin-left:4%; 
#    margin-right:4%;
#  }
#</style>
 
# Paste your HTML content between the markers!
ob_start();
?>

<div id="midcolumn">

  <div class="homeitem3col">

    <h3>Eclipse Neon Acknowledgements</h3>

    <p>The entire Eclipse team would like to thank the Eclipse Foundation staff for their tireless efforts, including: Denis Roy, Matt Ward, and Mikael Barbero for not only keeping all
      that infrastructure going, but also constantly improving it; Janet Campbell and Sharon Corbett for guiding us through the Eclipse legal process; Wayne Beaton for giving us improved tools to
      simplify and manage our development process; Ian Skerrett and Roxanne Joncas for help with marketing the Eclipse release and providing Logos and artwork; and Mike Milinkovich for running the whole show. In particular, we appreciate the
      Eclipse Foundation providing development resources through the new <a href="https://eclipse.org/contribute/dev_program.php">Friend of Eclipse Enhancement Program (FEEP)</a>.</p>
    <p>
      We would also like to thank the users and adopters who support our efforts, through a range of activities, including early testing, being a <a href="https://eclipse.org/donate/">Friend of
        Eclipse</a>, contracting special work, or outright employment.
    </p>
    <p>The Platform Resources team would like to thank everyone who has helped by filing bugs, testing and providing patches. Specifically we would like to thank the following people who have
      helped improve the Resources components by their code contributions to this release: Alex Blewitt, Richard Gobeli, Mickael Istria, Markus Keller, Tobias Melcher, Ed Merks, Pascal Rapicault,
      Lars Vogel, Thomas Wolf, Stefan Xenos.</p>

    <!-- For Neon, we say "Platform UI (and Text)" since they combined near the end of the cycle. 
         In future versions, should just say "Platform UI" -->
    <p>The Platform UI (and Text) team would like to thank
      everyone who has helped us to improve the quality by testing and reporting bugs and enhancement requests. Special thanks to the following list of
      people, in alphabetical order, who contributed code to the project:
      Adam Briska, Alain Bernard, Alena Laskavaia, Alex Blewitt, Alexandra Buzila, Ali Akar, Andreas Mayer, Andreas Sewe, Axel Richard, Bartosz Popiela, Ben Cox, C. Sean Young, Christian Georgi,
      Christian Pontesegger, Christian Radspieler, Christoph Daniel Schulze, Conrad Groth, Daniel Haftstein, Daniel Jaeger, Daniel Kruegler, Dariusz Stefanowicz, Denis Zygann,
      Dominic Scharfe, Ed Merks, Elisabeth Bohlig, Eric Williams, Eugen Neufeld, Fabio Zadrozny, Jan-Ove Weichel, Jaxsun McCarthy Huggan, Jens Kubler, Jeremie Bresson, Joel Drigo, Kaloyan Raev,
      Lars Sadau, Leung Wang Hei, Lothar L., Manuel Steurer, Marc-Andre Laperle, Martin Keller, Mat Booth, Matt Biggs, Matthias Becker, Matthias P. Nowak, Mikael Barbero, Noopur Gupta, Philipp Bumann,
      Phillip Webb, Rainer Pfannkuch, Rene Brandstetter, Robert Roth, Rudiger Herrmann, Sebastian Zarnekow, Sergey Grant, Snjezana Peco, Sravan Kumar Lakkimsetti, Stefan Winkler, Thorsten Hake,
      Thorsten Maack, Tobias Melcher, Victor Rubezhny, Wainer dos Santos Moschetta and Wayne Beaton.
    </p>

    <p>The Platform SWT team would like to thank everyone who helped to improve the toolkit by filing bug reports and enhancement requests, as well as the early adopters who contributed towards
      improving quality by testing. Special thanks to David Williams for all the releng suppport. We would also like to thank Alexandra Buzila, Alex Blewitt, Andrey Loskutov, Brian de Alwis,
      Conrad Groth, Eugen Neufeld, Jacek Sieka, Lars Vogel, Marc-Andre Laperle, Marco Hunsicker, Sebastian Ratz, Snjezana Peco, Sopot Cela, Stefan Xenos, Szymon Ptaszkiewicz, Thorsten Hake and Tom Gurney
      for their code contributions. We would like to appreciate Silenio Quarti, Bogdan Gheorghe and Grant Gayed for always supporting the team.
    </p>

    <p>The Release Engineering team would like to thank the many people who helped to improve our build
     as well as the committers who set up and maintain their own Platform HIPP jobs. And a special thanks to other Eclipse projects we prereq: EMF and ECF who 
     also provide timely updates so that we can be ontime. 
    Also, the webmasters at the Eclipse Foundation for their constant help and education and improvements (especially the nice integration of Gerrit and Bugzilla); also
      Mikael Barbero who fixed several issues in CBI and greatly improved the signing process.
      We also thank the other Eclipse projects that make up a part of the infrastructure we 
      depend on: Tycho, EGit, and Hudson for providing fixes and steady improvements.
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

    <h3>Active Committers</h3>
     
    <p>This Eclipse release was brought to you by the following committers. These committers were active at the time of the release (that is, one or more commits since previous
      release.)</p>
    <p>
    <h4>Eclipse Platform</h4>
    <h5>Platform SWT</h5>
    <table style="width:92%; margin-left:4%; margin-right:4%;">
      <tr>
        <td style="width: 23%;">Arun&nbsp;Thondapu</td>
        <td style="width: 23%;">Alexander&nbsp;Kurtakov</td>
        <td style="width: 23%;">Lakshmi&nbsp;Shanmugam</td>
        <td style="width: 23%;">Leo&nbsp;Ufimtsev</td>
      </tr>
      <tr>
        <td style="width: 23%;">Lina&nbsp;Kemmel</td>
        <td style="width: 23%;">Markus&nbsp;Keller</td>
        <td style="width: 23%;">Niraj&nbsp;Modi</td>
        <td style="width: 23%;">Sravan&nbsp;Kumar&nbsp;Lakkimsetti</td>
      </tr>
      <tr>
        <td style="width: 23%;">Eric&nbsp;Williams</td>
        <td style="width: 23%;">&nbsp;</td>
        <td style="width: 23%;">&nbsp;</td>
        <td style="width: 23%;">&nbsp;</td>
      </tr>
    </table>
    <h5>Platform UI (and Text)</h5>
    <table style="width:92%; margin-left:4%; margin-right:4%;">
      <tr>
        <td style="width: 23%;">Alexander&nbsp;Kurtakov</td>
        <td style="width: 23%;">Andrey&nbsp;Loskutov</td>
        <td style="width: 23%;">Brian&nbsp;de&nbsp;Alwis</td>
        <td style="width: 23%;">Dani&nbsp;Megert</td>
      </tr>
      <tr>
        <td style="width: 23%;">Dirk&nbsp;Fauth</td>
        <td style="width: 23%;">Eric&nbsp;Moffatt</td>
        <td style="width: 23%;">Jonas&nbsp;Helming</td>
        <td style="width: 23%;">Kalyan&nbsp;Prasad</td>
      </tr>
      <tr>
        <td style="width: 23%;">Lars&nbsp;Vogel</td>
        <td style="width: 23%;">Markus&nbsp;Keller</td>
        <td style="width: 23%;">Mickael&nbsp;Istria</td>
        <td style="width: 23%;">Olivier&nbsp;Prouvost</td>
      </tr>
      <tr>
        <td style="width: 23%;">Patrik&nbsp;Suzzi</td>
        <td style="width: 23%;">Sergey&nbsp;Prigogin</td>
        <td style="width: 23%;">Simon&nbsp;Scholz</td>
        <td style="width: 23%;">Sopot&nbsp;Cela</td>
      </tr>
      <tr>
        <td style="width: 23%;">Stefan&nbsp;Xenos</td>
        <td style="width: 23%;">Szymon&nbsp;Ptaszkiewicz</td>
        <td style="width: 23%;">Thomas&nbsp;Schindl</td>
        <td style="width: 23%;">Thomas&nbsp;Watson</td>
      </tr>
      <tr>
        <td style="width: 23%;">Tony&nbsp;McCrary</td>
        <td style="width: 23%;">Wojciech&nbsp;Sudol</td>
        <td style="width: 23%;">&nbsp;</td>
        <td style="width: 23%;">&nbsp;</td>
      </tr>
    </table>
    <h5>Platform Resources</h5>
    <table style="width:92%; margin-left:4%; margin-right:4%;">
      <tr>
        <td style="width: 23%;">Dani&nbsp;Megert</td>
        <td style="width: 23%;">Sergey&nbsp;Prigogin</td>
        <td style="width: 23%;">Szymon&nbsp;Ptaszkiewicz</td>
        <td style="width: 23%;">&nbsp;</td>
      </tr>
    </table>
    <h5>Platform Releng</h5>
    <table style="width:92%; margin-left:4%; margin-right:4%;">

      <tr>
        <td style="width: 23%;">David&nbsp;Williams</td>
        <td style="width: 23%;">Dani&nbsp;Megert</td>
        <td style="width: 23%;">Markus&nbsp;Keller</td>
        <td style="width: 23%;">&nbsp;</td>
      </tr>
    </table>
    <h5>Platform Documentation</h5>
    <table style="width:92%; margin-left:4%; margin-right:4%;">

      <tr>
        <td style="width: 23%;">Dani&nbsp;Megert</td>
        <td style="width: 23%;">David&nbsp;Williams</td>
        <td style="width: 23%;">Jay&nbsp;Arthanareeswaran</td>
        <td style="width: 23%;">Lars&nbsp;Vogel</td>
      </tr>
      <tr>
        <td style="width: 23%;">Markus&nbsp;Keller</td>
        <td style="width: 23%;">Noopur&nbsp;Gupta</td>
        <td style="width: 23%;">Sarika&nbsp;Sinha</td>
        <td style="width: 23%;">Stephan&nbsp;Herrmann</td>
      </tr>
      <tr>
        <td style="width: 23%;">Szymon&nbsp;Ptaszkiewicz</td>
        <td style="width: 23%;">&nbsp;</td>
        <td style="width: 23%;">&nbsp;</td>
        <td style="width: 23%;">&nbsp;</td>
      </tr>
    </table>
    <h5>Platform Debug</h5>
    <table style="width:92%; margin-left:4%; margin-right:4%;">

      <tr>
        <td style="width: 23%;">Sarika&nbsp;Sinha</td>
        <td style="width: 23%;">Dani&nbsp;Megert</td>
        <td style="width: 23%;">Markus&nbsp;Keller</td>
        <td style="width: 23%;">Michael&nbsp;Rennie</td>
      </tr>
    </table>

    <h4>Eclipse JDT</h4>
    <table style="width:92%; margin-left:4%; margin-right:4%;">
      <tr>
        <td style="width: 23%;">Dani&nbsp;Megert</td>
        <td style="width: 23%;">Jayaprakash&nbsp;Arthanareeswaran</td>
        <td style="width: 23%;">Jesper&nbsp;Moller</td>
        <td style="width: 23%;">Manoj&nbsp;Palat</td>
      </tr>
      <tr>
        <td style="width: 23%;">Markus&nbsp;Keller</td>
        <td style="width: 23%;">Mateusz&nbsp;Matela</td>
        <td style="width: 23%;">Michael&nbsp;Rennie</td>
        <td style="width: 23%;">Noopur&nbsp;Gupta</td>
      </tr>
      <tr>
        <td style="width: 23%;">Olivier&nbsp;Thomann</td>
        <td style="width: 23%;">Sarika&nbsp;Sinha</td>
        <td style="width: 23%;">Sasikanth&nbsp;Bharadwaj</td>
        <td style="width: 23%;">Stefan&nbsp;Xenos</td>
      </tr>
      <tr>
        <td style="width: 23%;">Stephan&nbsp;Herrmann</td>
        <td style="width: 23%;">Till&nbsp;Brychcy</td>
        <td style="width: 23%;">&nbsp;</td>
        <td style="width: 23%;">&nbsp;</td>
      </tr>
    </table>
    <h4>Eclipse PDE</h4>
    <table style="width:92%; margin-left:4%; margin-right:4%;">
      <tr>
        <td style="width: 23%;">Vikas&nbsp;Chandra</td>
        <td style="width: 23%;">Dani&nbsp;Megert</td>
        <td style="width: 23%;">Lars&nbsp;Vogel</td>
        <td style="width: 23%;">Markus&nbsp;Keller</td>
      </tr>
      <tr>
        <td style="width: 23%;">Olivier&nbsp;Thomann</td>
        <td style="width: 23%;">Peter&nbsp;Nehrer</td>
        <td style="width: 23%;">&nbsp;</td>
        <td style="width: 23%;">&nbsp;</td>
      </tr>
    </table>
  </div>

</div>



<?php
$html = ob_get_contents();
ob_end_clean();

# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

