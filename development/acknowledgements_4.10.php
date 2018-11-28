

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
$keyword = 'eclipse, 4.10, 2018-12, acknowledgements, acknowledgments, thanks';

include($App->getProjectCommon());

#echo '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">';

#*****************************************************************************
#
# index.php
#
# Author:    Sravan Kumar Lakkimsetti and others on Eclipse Project
# Date:      2018-11-28
#
# Description: Eclipse project 2018-12 release acknowledgments page
#
#
#****************************************************************************

#
# Begin: page-specific settings.  Change these.
$pageTitle     = "Eclipse 2018-12 Acknowledgements";
$pageKeywords  = "eclipse, 4.10, 2018-12, acknowledgements, acknowledgments, thanks";
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
  
  
    <h3>Eclipse 2018-12 Acknowledgements</h3>
    
    <p>The entire Eclipse Project team would like to thank the Eclipse Foundation staff for their tireless efforts, including: Denis Roy, Matt Ward, Fred Gurr and Mikael Barbero for not only 
    keeping all that infrastructure going, but also constantly improving it; Sharon Corbett for guiding us through the Eclipse legal process; Cydnie Smith and Wayne Beaton for giving us process 
    support and improved tools to simplify and manage our development process; Thabang Mashologu and Stephanie Swart for help with marketing the release and providing Logos and artwork; 
    and Mike Milinkovich for running the whole show. 
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
     Alexander Bunkowski, Alexander Zakusylo, Alexandra Buzila, Alexandr Miloslavskiy, Angelo Zerr, Anne Hänzka, Burcu Karlidag, Christof Joswig, Denis Ungemach, Fabian Pfaff, Felix Hirsch, Gilles Iachelini, Julian Honnen, Karteek M, Katja Zavozina, Marcus Hoepfner, Martina Pietruschka, Max Hohenegger, Michael Seele, Mike Majewski, Mykola Zakharchuk, Nikita Nemkin, Oleksandr Zakusylo, Peter Wichers, Rainer Herter, Roland Grunberg, Rolf Theunissen, Sebastian Ratz, Sergey Fukanchik, Stefan Nöbauer, Stephan Herrmann, Tobias Melcher, Uenal Akkaya and Vikas Chandra.
    </p>

    Also, the webmasters (Frederic Gurr, Denis Roy, Matt Ward and Mikael Barbero) at the Eclipse Foundation for their constant help and education and improvements. And      
      we also thank the other Eclipse projects that make up a part of the infrastructure we 
      depend on: Tycho, EGit, Jenkins for providing fixes and steady improvements.
    </p>

    <p>The JDT team would like to thank everyone who filed good enhancement requests, helped us improve quality by testing and filing good bug reports, and provided answers on JDT forums/newsgroups. Special thanks to the following list of
      people, in alphabetical order, who contributed code to the project: Angelo Zerr, Dave Nice, Frits Jalvingh, Igor Fedorenko, Jeff Johnston, Jonas Hungershausen, Julian Honnen, Karsten Thoms, Kenneth, Lars Vogel, Mat Booth, Mateusz Matela, Matthias Becker, Michael Keppler, Mickael Istria, Pierre-Yves B, Roland Grunberg, Saravanakumar A. Srinivasan, Simeon Andreev and Sravan Kumar Lakkimsetti for features and bug fixes.
      We would also like to acknowledge Sravan Kumar Lakkimsetti for all the build and releng support.
    </p>
    
    <p>The Plug-in Development Environment team would like to thank the numerous contributors who continue to improve the component every release.
        Special thanks to those who contributed code:
       Alessandra Edda Baas, Alexander Fedorov, Ed Merks, Julian Honnen, Markus Duft, Michael Keppler, Mickael Istria, Mike Majewski, Mykola Zakharchuk, Rastislav Wagner, Sebastian Ratz, Sravan Kumar Lakkimsetti, Stefan Nöbauer, Till Brychcy and Vasili Gulevich.
      </p>

    <p>The Equinox team would like to thank all the contributors that helped improve the project by filing bug reports and enhancement requests.  We also would like to thank the community of developers that have contributed to the Equinox code base this release:
       Anjum Fatima, Hermann Czedik-Eysenberg, Jeff Johnston, Kalyan Prasad Tatavarthi, Karsten Thoms, Mat Booth, Michael Keppler, Mykola Nikishov, Roland Grunberg and Simeon Andreev.
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
      	<td style="width: 23%;">Dani&nbsp;Megert</td>
      	<td style="width: 23%;">Ed&nbsp;Merks</td>
      </tr>
      <tr>
      	<td style="width: 23%;">Eric&nbsp;Williams</td>
      	<td style="width: 23%;">Kalyan&nbsp;Prasad&nbsp;Tatavarthi</td>
      	<td style="width: 23%;">Karsten&nbsp;Thoms</td>
      	<td style="width: 23%;">Lakshmi&nbsp;Priya&nbsp;Shanmugam</td>
      </tr>
      <tr>
      	<td style="width: 23%;">Lars&nbsp;Vogel</td>
      	<td style="width: 23%;">Lucas&nbsp;Bullen</td>
      	<td style="width: 23%;">Mat&nbsp;Booth</td>
      	<td style="width: 23%;">Matthias&nbsp;Becker</td>
      </tr>
      <tr>
      	<td style="width: 23%;">Michael&nbsp;Keppler</td>
      	<td style="width: 23%;">Mickael&nbsp;Istria</td>
      	<td style="width: 23%;">Niraj&nbsp;Modi</td>
      	<td style="width: 23%;">Patrik&nbsp;Suzzi</td>
      </tr>
      <tr>
      	<td style="width: 23%;">Sarika&nbsp;Sinha</td>
      	<td style="width: 23%;">Simeon&nbsp;Andreev</td>
      	<td style="width: 23%;">Sravan&nbsp;Kumar&nbsp;Lakkimsetti</td>
      	<td style="width: 23%;">Szymon&nbsp;Ptaszkiewicz</td>
      </tr>
      <tr>
      	<td style="width: 23%;">Till&nbsp;Brychcy</td>
      	<td style="width: 23%;">Wim&nbsp;Jongman</td>
      	<td style="width: 23%;">Xi&nbsp;Yan</td>
        <td style="width: 23%;">&nbsp;</td>
     </tr>
    </table>

    <h4>Eclipse JDT</h4>
    <table style="width:92%; margin-left:4%; margin-right:4%;">
      <tr>
      	<td style="width: 23%;">Andrey&nbsp;Loskutov</td>
      	<td style="width: 23%;">Dani&nbsp;Megert</td>
      	<td style="width: 23%;">Jay&nbsp;Arthanareeswaran</td>
      	<td style="width: 23%;">Kalyan&nbsp;Prasad&nbsp;Tatavarthi</td>
      </tr>
      <tr>
      	<td style="width: 23%;">Manoj&nbsp;Palat</td>
      	<td style="width: 23%;">Noopur&nbsp;Gupta</td>
      	<td style="width: 23%;">Olivier&nbsp;Thomann</td>
      	<td style="width: 23%;">Sarika&nbsp;Sinha</td>
      </tr>
      <tr>
      	<td style="width: 23%;">Stephan&nbsp;Herrmann</td>
      	<td style="width: 23%;">Till&nbsp;Brychcy</td>
      	<td style="width: 23%;">Vikas&nbsp;Chandra</td>
      	<td style="width: 23%;">&nbsp;</td>
      </tr>
    </table>
    <h4>Eclipse PDE</h4>
    <table style="width:92%; margin-left:4%; margin-right:4%;">
      <tr>
      	<td style="width: 23%;">Alexander&nbsp;Kurtakov</td>
      	<td style="width: 23%;">Andrey&nbsp;Loskutov</td>
      	<td style="width: 23%;">Dani&nbsp;Megert</td>
      	<td style="width: 23%;">Karsten&nbsp;Thoms</td>
      </tr>
      <tr>
      	<td style="width: 23%;">Lars&nbsp;Vogel</td>
      	<td style="width: 23%;">Noopur&nbsp;Gupta</td>
      	<td style="width: 23%;">Vikas&nbsp;Chandra</td>
      	<td style="width: 23%;">&nbsp;</td>
      </tr>
    </table>
    <h4>Equinox</h4>
    <table style="width:92%; margin-left:4%; margin-right:4%;">
      <tr>
        <td style="width: 23%;">Alexander&nbsp;Kurtakov</td>
        <td style="width: 23%;">Andrey&nbsp;Loskutov</td>
        <td style="width: 23%;">Mickael&nbsp;Istria</td>
        <td style="width: 23%;">Sravan&nbsp;Kumar&nbsp;Lakkimsetti</td>
      </tr>
      <tr>
		<td style="width: 23%;">Thomas&nbsp;Watson</td>
		<td style="width: 23%;">Todor&nbsp;Boev</td>
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

