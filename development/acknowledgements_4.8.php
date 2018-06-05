

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
$keyword = 'eclipse, 4.8, Photon, acknowledgements, acknowledgments, thanks';

include($App->getProjectCommon());

#echo '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">';

#*****************************************************************************
#
# index.php
#
# Author:    Sravan Kumar Lakkimsetti and others on Eclipse Project
# Date:      2018-05-10
#
# Description: Eclipse project Photon release acknowledgments page
#
#
#****************************************************************************

#
# Begin: page-specific settings.  Change these.
$pageTitle     = "Eclipse Photon Acknowledgements";
$pageKeywords  = "eclipse, 4.8, Photon, acknowledgements, acknowledgments, thanks";
$pageAuthor    = "Sravan Kumar Lakkimsetti and the Eclipse Project Team";

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
  
  
    <h3>Eclipse Photon Acknowledgements</h3>
    
    <p>The entire Eclipse Project team would like to thank the Eclipse Foundation staff for their tireless efforts, including: Denis Roy, Matt Ward, Fred Gurr and Mikael Barbero for not only keeping all
      that infrastructure going, but also constantly improving it; Sharon Corbett for guiding us through the Eclipse legal process; Stephanie Swart and Wayne Beaton for giving us process support and improved tools to
      simplify and manage our development process; Ian Skerrett and Roxanne Joncas for help with marketing the Eclipse release and providing Logos and artwork; and Mike Milinkovich for running the whole show. In particular, we appreciate the Eclipse Foundation for providing development resources through the new <a href="https://eclipse.org/contribute/dev_program.php">Friend of Eclipse Enhancement Program (FEEP)</a>.</p>
    <p>
      We would also like to thank the users and adopters who support our efforts, through a range of activities, including early testing, being a <a href="https://eclipse.org/donate/">Friend of
        Eclipse</a>, contracting special work, or outright employment.
    </p>
    
     <p>
      A special thanks goes to Holger Voormann for his Eclipse IDE promotion videos.
    </p>

  
    <p>The Platform team would like to thank
      everyone who has helped us to improve the quality by testing and reporting bugs and enhancement requests. And a special thanks to other Eclipse projects we prereq: EMF and ECF who 
     also provide timely updates so that we can be ontime. Special thanks to the following list of
      people, in alphabetical order, who contributed code to the project:
     Alexander Kurtakov, Alexandra Buzila, Alex Say, Andreas Loth, Andreas Sewe, Andrey Loskutov, Andrey Mozzhuhin, Angelo Zerr, Armin Beil, Arne Deutsch, Arun Thondapu, Asma Smaoui, Ataul Ahmad, Axel Richard, Benjamin Leipold, Björn Arnelid, Brian de Alwis, Carsten Reckord, Christian Georgi, Christoph Läubrich, Christoph Stanik, Conrad Groth, Daniel Kruegler, Dani Megert, Darrel Karisch, David Weiser, David Williams, Dawid Pakuła, Dirk Fauth, Ed Merks, Erdal Karaca, Eric Williams, Etienne Reichenbach, Fabian Pfaff, Fabio Zadrozny, Gunnar Wagenknecht, Hilger Steenblock, Holger Voormann, Ian Pun, Igor Fedorenko, Janis Danisevskis, Jens Lidestrom, Jens Reimann, Joachim Kaesser, John Arthorne, John Hendrikx, Jonas Helming, Jonas Hungershausen, Julian Honnen, Kaloyan Raev, Kalyan Prasad, Karsten Thoms, Karthik Bhat, Kim Moir, Klara Ward, Lakshmi Shanmugam, Lars Neumeier, Lars Sadau, Lars Vogel, Leo Ufimtsev, Lucas Bullen, Marco Maccaferri, Markus Duft, Markus Keller, Marlo Häring, Martin Karpisek, Martin Schreiber, Mat Booth, Matthias Becker, Michael Keppler, Michal Niewrzal, Mickael Istria, Mikael Barbero, Nikita Nemkin, Niraj Modi, Noopur Gupta, Olivier Prouvost, Patrik Suzzi, Paul Webster, Peter Severin, Philip Langer, Philippe Brossel, René Purrio, Roland Grunberg, Rolf Theunissen, Sarika Sinha, Sebastian Ratz, Shawn Kleese, Simeon Andreev, Simon Scholz, Sopot Cela, Sravan Kumar Lakkimsetti, Stefan Nöbauer, Stefan Prieschl, Stefan Winkler, Stephan Wahlbrink, Thanh Ha, Thomas Watson, Thorsten Hake, Till Brychcy, Tobias Eichhorn, Tobias Melcher, Tom Bergmann, Tom Schindl, Torbjörn Svensson, Tu Ton, Unai Martinez, Vasili Gulevich, Vikas Chandra, Wayne Beaton and Wim Jongman
    </p>

    Also, the webmasters (Frederic Gurr, Denis Roy, Matt Ward and Mikael Barbero) at the Eclipse Foundation for their constant help and education and improvements. And      
      we also thank the other Eclipse projects that make up a part of the infrastructure we 
      depend on: Tycho, EGit, Jenkins for providing fixes and steady improvements.
    </p>

    <p>The JDT Core team would like to thank everyone who has helped us improve quality by testing and filing good bug reports. Special thanks to the following list of
      people, in alphabetical order, who contributed code to the project: Alexander Rookey, Andreas Sewe, Andrey Loskutov, Anton Tanasenko, Brian, Fabian Steeg, 
      Igor Fedorenko, Karsten Thoms, Lars Vogel, Sergey Prigogin and Timo Kinnunen. 
      We would also like to acknowledge Sravan Kumar Lakkimsetti for all the build and releng support.
    </p>

    <p>The JDT Debug team would like to thank everyone who helped improve the Java debugger by filing bugs, testing and providing patches. Specifically we would like to thank Alexander Kurtakov, 
    Axel Richard, Brian de Alwis, Frank Benoit, Gregory Amerson, Karsten Thoms, Lucas Bullen, Matthias Becker, Mickael Istria, Mikael Barbero, Roland Grunberg, Sravan Kumar Lakkimsetti  and Tom Schindl for features and bug fixes.
    </p>


    <p>The JDT UI team sends thanks to everyone who filed good enhancement requests, helped to improve the quality by testing and filing good bug reports, and provided answers on JDT forums/newsgroups. Special thanks to those who contributed code: 
    Alexander Kurtakov, Angelo ZERR, Brian de Alwis, David Weiser, Guillermo Gutierrez Almazor, Igor Fedorenko, Jonas Hungershausen, Karsten Thoms, Kenneth Styrberg, Lars Vogel, Matthias Becker, Michael Keppler, Michal Niewrzal, Mickael Istria, Roland Grunberg, Simeon Andreev and Sravan Kumar Lakkimsetti.
    </p>

    <p>The Plug-in Development Environment team would like to thank the numerous contributors who continue to improve the component every release.
        Special thanks to those who contributed code:
       Andreas Sewe, Arne Deutsch, Christian Dietrich, Ed Merks, Fabian Pfaff, Jonas Hungershausen, Karsten Thoms, Lucas Bullen, Matthias Becker, Michael Keppler, Mickael Istria , Moritz Aleithe, Olivier Prouvost, Taras Lungol and Till Brychcy.
      </p>

    <p>The Equinox team would like to thank all the contributors that helped improve the project by filing bug reports and enhancement requests.  We also would like to thank the community of developers that have contributed to the Equinox code base this release:
       Andreas Sewe, Andrey Loskutov, Anjum Fatima, Carsten Reckord, David Weiser, Dirk Fauth, Elena Laskavaia, Fabian Pfaff, Jens Kübler, Juan Gonzalez, Julien Henry, Karsten Thoms, Lars Vogel, Martin Oberhuber, Matthias Becker, Mickael Istria, Mikael Barbero, Mykola Nikishov, Nitin Dahyabhai, Roland Grunberg, Sergey Prigogin, Simon Scholz, Sravan Kumar Lakkimsetti, Szymon Ptaszkiewicz and Till Brychcy.
      </p>

    <h3>Active Committers</h3>
     
    <p>This Eclipse release was brought to you by the following committers. These committers were active at the time of the release (that is, one or more commits since previous
      release.)</p>
    <p>
    <h4>Eclipse Platform</h4>
    <table style="width:92%; margin-left:4%; margin-right:4%;">
      <tr>
      	<td style="width: 23%;">Alexander&nbsp;Kurtakov</td>
      	<td style="width: 23%;">Andrey&nbsp;Loskutov</td>
      	<td style="width: 23%;">Arun&nbsp;Thondapu</td>
      	<td style="width: 23%;">Brian&nbsp;de&nbsp;Alwis</td>
      </tr>
      <tr>
      	<td style="width: 23%;">Conrad&nbsp;Groth</td>
      	<td style="width: 23%;">Dani&nbsp;Megert</td>
      	<td style="width: 23%;">David&nbsp;Williams</td>
      	<td style="width: 23%;">Dirk&nbsp;Fauth</td>
      </tr>
      <tr>
      	<td style="width: 23%;">Eric&nbsp;Williams</td>
      	<td style="width: 23%;">Ian&nbsp;Pun</td>
      	<td style="width: 23%;">Jay&nbsp;Arthanareeswaran</td>
      	<td style="width: 23%;">Jonas&nbsp;Helming</td>
      </tr>
      <tr>
      	<td style="width: 23%;">Kalyan&nbsp;Prasad</td>
      	<td style="width: 23%;">Karsten&nbsp;Thoms</td>
      	<td style="width: 23%;">Lakshmi&nbsp;Shanmugam</td>
      	<td style="width: 23%;">Lars&nbsp;Vogel</td>
      </tr>
      <tr>
      <td style="width: 23%;">Leo&nbsp;Ufimtsev</td>
      <td style="width: 23%;">Markus&nbsp;Keller</td>
      <td style="width: 23%;">Mickael&nbsp;Istria</td>
      <td style="width: 23%;">Niraj&nbsp;Modi</td>
     </tr>
     <tr>
     	<td style="width: 23%;">Noopur&nbsp;Gupta</td>
     	<td style="width: 23%;">Olivier&nbsp;Prouvost</td>
     	<td style="width: 23%;">Patrik&nbsp;Suzzi</td>
     	<td style="width: 23%;">Sarika&nbsp;Sinha</td>
     </tr>
     <tr>
     	<td style="width: 23%;">Simon&nbsp;Scholz</td>
     	<td style="width: 23%;">Sopot&nbsp;Cela</td>
     	<td style="width: 23%;">Sravan&nbsp;Kumar&nbsp;Lakkimsetti</td>
     	<td style="width: 23%;">Stefan&nbsp;Xenos</td>
     </tr>
     <tr>
     	<td style="width: 23%;">Stephan&nbsp;Herrmann</td>
     	<td style="width: 23%;">Szymon&nbsp;Ptaszkiewicz</td>
     	<td style="width: 23%;">Thomas&nbsp;Schindl</td>
     	<td style="width: 23%;">Thomas&nbsp;Watson</td>
     </tr>
     <tr>
     	<td style="width: 23%;">Tony&nbsp;McCrary</td>
     	<td style="width: 23%;">&nbsp;</td>
     	<td style="width: 23%;">&nbsp;</td>
     	<td style="width: 23%;">&nbsp;</td>
     </tr>
    </table>

    <h4>Eclipse JDT</h4>
    <table style="width:92%; margin-left:4%; margin-right:4%;">
      <tr>
      	<td style="width: 23%;">Andrey&nbsp;Loskutov</td>
        <td style="width: 23%;">Dani&nbsp;Megert</td>
        <td style="width: 23%;">Jayaprakash&nbsp;Arthanareeswaran</td>
        <td style="width: 23%;">Jesper&nbsp;Steen&nbsp;Moller</td>
      </tr>
      <tr>
        <td style="width: 23%;">Kalyan&nbsp;Prasad</td>
        <td style="width: 23%;">Manoj&nbsp;Palat</td>
        <td style="width: 23%;">Markus&nbsp;Keller</td>
        <td style="width: 23%;">Mateusz&nbsp;Matela</td>
      </tr>
      <tr>
        <td style="width: 23%;">Noopur&nbsp;Gupta</td>
        <td style="width: 23%;">Olivier&nbsp;Thomann</td>
        <td style="width: 23%;">Sarika&nbsp;Sinha</td>
        <td style="width: 23%;">Sasikanth&nbsp;Bharadwaj</td>
      </tr>
      <tr>
        <td style="width: 23%;">Stefan&nbsp;Xenos</td>
        <td style="width: 23%;">Stephan&nbsp;Herrmann</td>
        <td style="width: 23%;">Till&nbsp;Brychcy</td>
        <td style="width: 23%;">Vikas&nbsp;Chandra</td>
      </tr>
    </table>
    <h4>Eclipse PDE</h4>
    <table style="width:92%; margin-left:4%; margin-right:4%;">
      <tr>
        <td style="width: 23%;">Alexander&nbsp;Kurtakov</td>
        <td style="width: 23%;">Andrey&nbsp;Loskutov</td>
        <td style="width: 23%;">Dani&nbsp;Megert</td>
        <td style="width: 23%;">Lars&nbsp;Vogel</td>
      </tr>
      <tr>
        <td style="width: 23%;">Markus&nbsp;Keller</td>
        <td style="width: 23%;">Martin&nbsp;Karpisek</td>
        <td style="width: 23%;">Noopur&nbsp;Gupta</td>
        <td style="width: 23%;">Peter&nbsp;Nehrer</td>
      </tr>
      <tr>
 
        <td style="width: 23%;">Sopot&nbsp;Cela</td>
        <td style="width: 23%;">Vikas&nbsp;Chandra</td>
      </tr>
    </table>
    <h4>Equinox</h4>
    <table style="width:92%; margin-left:4%; margin-right:4%;">
      <tr>
        <td style="width: 23%;">Alexander&nbsp;Kurtakov</td>
        <td style="width: 23%;">Arun&nbsp;Thondapu</td>
        <td style="width: 23%;">BJ&nbsp;Hargrave</td>
        <td style="width: 23%;">Markus&nbsp;Keller</td>
      </tr>
      <tr>
        <td style="width: 23%;">Pascal&nbsp;Rapicault</td>
        <td style="width: 23%;">Raymond&nbsp;Auge</td>
        <td style="width: 23%;">Stefan&nbsp;Xenos</td>
        <td style="width: 23%;">Thomas&nbsp;Watson</td>
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

