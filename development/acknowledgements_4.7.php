

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
$keyword = 'eclipse, 4.7, Oxygen, acknowledgements, acknowledgments, thanks';

include($App->getProjectCommon());

#echo '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">';

#*****************************************************************************
#
# index.php
#
# Author:    Vikas Chandra and others on Eclipse Project
# Date:      2017-05-31
#
# Description: Eclipse project Oxygen release acknowledgments page
#
#
#****************************************************************************

#
# Begin: page-specific settings.  Change these.
$pageTitle     = "Eclipse Oxygen Acknowledgements";
$pageKeywords  = "eclipse, 4.7, Oxygen, acknowledgements, acknowledgments, thanks";
$pageAuthor    = "Vikas Chandra and the Eclipse Project Team";

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
  
  
    <h3>Eclipse Oxygen Acknowledgements</h3>

    <p>The Platform Resources team would like to thank everyone who has helped by filing bugs, testing and providing patches. Specifically we would like to thank the following people who have
      helped improve the Resources components by their code contributions to this release: Mikael Barbero, Matthias Becker, Sopot Cela, Conrad Groth, Rüdiger Herrmann, Mickael Istria,
      Alexander Kurtakov, Sravan Kumar Lakkimsetti, Ed Merks and Sebastian Ratz.</p>


    <p>The Platform UI team would like to thank
      everyone who has helped us to improve the quality by testing and reporting bugs and enhancement requests. Special thanks to the following list of
      people, in alphabetical order, who contributed code to the project:
      Alena Laskavaia, Andreas Mayer, Axel Richard, Benedikt Kuntz, Björn Michael, Bruno Medeiros, Christian Pontesegger, Conrad Groth, Daniel Raap, 
      David Weiser, Dawid Pakuła, Denis Forveille, Ed Merks, Eugen Neufeld, Fabian Pfaff, Fabio Zadrozny, Gunnar Wagenknecht, Harald Albers, Ian Pun, Ilya Buziuk,
	  Jan Rosczak, Jonah Graham, Lars Sadau, Leo Ufimtsev, Lothar Lattermann, Louis-Michel Mathurin, Mario Herzig, Martin Karpisek, 
	  Matthias Becker, Max Hohenegger, Michal Niewrzal, Mickael Istria, Mikael Barbero, Noopur Gupta, Olivier Prouvost, Paul Punke, Philipp Kunz,  Ralf Petter,
	  Robert Roth, Rob Stryker, Rüdiger Herrmann, Sebastian Lohmeier, Sebastian Ratz, Sezgin Halibov, Søren Troest, 
      Sravan Kumar Lakkimsetti, Stephan Wahlbrink, Szymon Ptaszkiewicz, Till Brychcy, Tommy Redel, Vasili Gulevich and Wim Jongman.
    </p>

    <p>The Platform SWT team would like to thank everyone who helped to improve the toolkit by filing bug reports and enhancement requests, as well as the early adopters who contributed towards improving quality by testing.
		We would also like to thank Andrey Loskutov, Ben Steffensmeier, Christian Mohr, Conrad Groth, David Weiser, Ed Merks, Eugen Neufeld, Fabian Pfaff, Gunnar Wagenknecht, Lars Vogel, Marc-Andre Laperle, Martin Oberhuber,
    	Matthias Becker, Mickael Istria, Mikael Barbero, Patrik Suzzi, Phillip Webb, Rolf Theunissen, Rüdiger Herrmann, Sergey Prigogin, Stefan Xenos, Szymon Ptaszkiewicz and Till Brychcy for their code contributions.
    </p>

    <p>The Release Engineering team would like to thank the many people who helped to improve our build
     as well as the committers who set up and maintain their own Platform HIPP jobs. And a special thanks to other Eclipse projects we prereq: EMF and ECF who 
     also provide timely updates so that we can be ontime. Special thanks to the following list of people, in alphabetical order, who contributed code to the project:
     Andrey Loskutov, Arun Thondapu, Lars Vogel, Mickael Istria, Sarika Sinha, Sopot Cela and Thomas Watson.
     
    Also, the webmasters (Frederic Gurr, Denis Roy and Matt Ward) at the Eclipse Foundation for their constant help and education and improvements; also
      Mikael Barbero who fixed several issues in CBI and greatly improved the signing process and created a new service to create signed dmg for Mac OS X. And      
      We also thank the other Eclipse projects that make up a part of the infrastructure we 
      depend on: Tycho, EGit, and Hudson for providing fixes and steady improvements.
    </p>

    <p>The JDT Core team would like to thank everyone who has helped us improve quality by testing and filing good bug reports. Special thanks to the following list of
      people, in alphabetical order, who contributed code to the project: Alexander Rookey, Andreas Sewe, Andrey Loskutov, Anton Tanasenko, Brian , Fabian Steeg, 
      Igor Fedorenko, Karsten Thoms, Lars Vogel, Sergey Prigogin, Timo Kinnunen. 
      We would also like to acknowledge Sravan Kumar Lakkimsetti for all the build and releng support.
    </p>

    <p>The JDT Debug team would like to thank everyone who helped improve the Java debugger by filing bugs, testing and providing patches. Specifically we would like to thank Brian de Alwis, 
	Christian Buck, Igor Fedorenko, Josef Lehner, Matthias Becker, Sergey Prigogin and Till Brychcy for features and bug fixes.
    </p>

    <p>The Platform Debug team would like to thank everyone who helped improve the debugger framework by filing bugs, testing and providing patches. Specifically we would like to thank Alexander Kurtakov, 
	Andreas Loth,  David Weiser, Lars Vogel, Markus Duft, Noopur Gupta, Patrik Suzzi, Ralf M Petter, Sergey Prigogin, Till Brychcy and Victor Rubezhny for features and bug fixes.
    </p>

    <p>The Platform Ant team would like to thank everyone who helped improve the ant framework by filing bugs, testing and providing patches. Specifically we would like to thank Alexander Kurtakov,
     Andreas Sewe, Andrey Loskutov, David Williams, Gunnar Wagenknecht, Lars Vogel, Roland Grunberg and Sravan Kumar Lakkimsetti for bug fixes and providing support in updating Ant to new version.
    </p>


    <p>JDT UI sends thanks to everyone
      who filed good enhancement requests, helped to improve the quality by testing and filing good bug reports, and provided answers on JDT forums/newsgroups.
      Special thanks to those who contributed code:
      Bj&ouml;rn Michael, Conrad Groth, Jonah Graham, Lars Vogel, Leo Ufimtsev, Mateusz Matela, Matthias Becker, Mickael Istria, Olivier Thomann, Sergey Prigogin, Stefan Xenos, Till Brychcy and Vikas Chandra.
    </p>

    <p>The Plug-in Development Environment team would like to thank the numerous contributors who continue to improve the component every release.
        Special thanks to those who contributed code:
        Abel Hegedus, Alexander Kurtakov, Andrey Loskutov, Brian de Alwis, David Weiser, Elena Laskavaia, Fabian Pfaff, Gunnar Wagenknecht, Julian Honnen, Kevin Townsend, Marc-André Laperle, Matthias Becker, Mickael Istria, Mikaël Barbero, Niklas Mehner, Olivier Prouvost, Patrik Suzzi, Sarika Sinha, Sergey Prigogin, Sopot Cela, Sravan Kumar Lakkimsetti, Stefan Xenos, Thomas Watson, Torbjörn Svensson and Vincenzo Caselli.
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
        <td style="width: 23%;">Eric&nbsp;Williams</td>
      </tr>
      <tr>
        <td style="width: 23%;">Ian&nbsp;Pun</td>
        <td style="width: 23%;">Leo&nbsp;Ufimtsev</td>
        <td style="width: 23%;">Markus&nbsp;Keller</td>
        <td style="width: 23%;">Niraj&nbsp;Modi</td>
      </tr>
      <tr>
        <td style="width: 23%;">Sravan&nbsp;Kumar&nbsp;Lakkimsetti</td>
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
        <td style="width: 23%;">Markus&nbsp;Keller</td>
        <td style="width: 23%;">Andrey&nbsp;Loskutov</td>
        <td style="width: 23%;">Dani&nbsp;Megert</td>
        <td style="width: 23%;">Sergey&nbsp;Prigogin</td>
      </tr>
      <tr>
        <td style="width: 23%;">Szymon&nbsp;Ptaszkiewicz</td>
        <td style="width: 23%;">Lars&nbsp;Vogel</td>
        <td style="width: 23%;">Stefan&nbsp;Xenos</td>
        <td style="width: 23%;">&nbsp;</td>
      </tr>
    </table>
    <h5>Platform Releng</h5>
    <table style="width:92%; margin-left:4%; margin-right:4%;">

      <tr>
        <td style="width: 23%;">Alexander&nbsp;Kurtakov</td>
        <td style="width: 23%;">David&nbsp;Williams</td>
        <td style="width: 23%;">Dani&nbsp;Megert</td>
        <td style="width: 23%;">Markus&nbsp;Keller</td>
      </tr>
      <tr>
        <td style="width: 23%;">Sravan&nbsp;Kumar&nbsp;Lakkimsetti</td>
        <td style="width: 23%;">&nbsp;</td>
        <td style="width: 23%;">&nbsp;</td>
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
        <td style="width: 23%;">Andrey&nbsp;Loskutov</td>
        <td style="width: 23%;">Dani&nbsp;Megert</td>
        <td style="width: 23%;">Markus&nbsp;Keller</td>
        <td style="width: 23%;">Sarika&nbsp;Sinha</td>
      </tr>
    </table>

    <h4>Eclipse JDT</h4>
    <table style="width:92%; margin-left:4%; margin-right:4%;">
      <tr>
      	<td style="width: 23%;">Andrey&nbsp;Loskutov</td>
        <td style="width: 23%;">Dani&nbsp;Megert</td>
        <td style="width: 23%;">Jayaprakash&nbsp;Arthanareeswaran</td>
        <td style="width: 23%;">Manoj&nbsp;Palat</td>
      </tr>
      <tr>
        <td style="width: 23%;">Markus&nbsp;Keller</td>
        <td style="width: 23%;">Mateusz&nbsp;Matela</td>
        <td style="width: 23%;">Noopur&nbsp;Gupta</td>
        <td style="width: 23%;">Olivier&nbsp;Thomann</td>
      </tr>
      <tr>
        <td style="width: 23%;">Sarika&nbsp;Sinha</td>
        <td style="width: 23%;">Sasikanth&nbsp;Bharadwaj</td>
        <td style="width: 23%;">Stefan&nbsp;Xenos</td>
        <td style="width: 23%;">Stephan&nbsp;Herrmann</td>
      </tr>
      <tr>
        <td style="width: 23%;">Till&nbsp;Brychcy</td>
        <td style="width: 23%;">&nbsp;</td>
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
        <td style="width: 23%;">Martin&nbsp;Karpisek</td>
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

