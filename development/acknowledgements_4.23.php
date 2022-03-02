

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
$keyword = 'eclipse, 4.23, 2022-03, acknowledgements, acknowledgments, thanks';

include($App->getProjectCommon());
header('Content-type: text/plain; charset=utf-8');

#echo '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">';

#*****************************************************************************
#
# index.php
#
# Author:    Sravan Kumar Lakkimsetti and others on Eclipse Project
# Date:      2022-03-01
#
# Description: Eclipse project 2022-03 release acknowledgments page
#
#
#****************************************************************************

#
# Begin: page-specific settings.  Change these.
$pageTitle     = "Eclipse 2022-03 Acknowledgements";
$pageKeywords  = "eclipse, 4.23, 2022-03, acknowledgements, acknowledgments, thanks";
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
  
  
    <h3>Eclipse 2022-03 Acknowledgements</h3>
    
    <p>The entire Eclipse Project team would like to thank the Eclipse Foundation staff for their tireless efforts, including: Denis Roy, Matt Ward, Eric Poirier, Frederic Gurr and Mika&#xEB;l Barbero for not only 
    keeping all that infrastructure going, but also constantly improving it; Sharon Corbett for guiding us through the Eclipse legal process; Wayne Beaton for giving us process 
    support and improved tools to simplify and manage our development process; and Mike Milinkovich for running the whole show. 
    </p>
    <p>
      We would also like to thank the users and adopters who support our efforts, through a range of activities, including early testing, being a <a href="https://eclipse.org/donate/">Friend of
        Eclipse</a>, contracting special work, or outright employment.
    </p>
    
     <p>
      A special thanks goes to Holger Voormann for his Eclipse IDE promotion videos.
    </p>

  
    <p>The Platform team would like to thank
      everyone who has helped us to improve the quality by testing and reporting bugs and enhancement requests. And a special thanks to other Eclipse projects we build upon: EMF and ECF who 
     also provide timely updates so that we can release on time. Special thanks to the following list of
      people, in alphabetical order, who contributed code to the project:
     Alexander Kurtakov, Alexandr Miloslavskiy, Andrey Loskutov, Carsten Hammer, Christoph L&#xE4;ubrich, Ed Merks, Enda O Brien, Hannes Wellmann, Jayaprakash Arthanareeswaran, Jens Lidestrom, Joel Majano, Joerg Kubitz, Jonah Graham, Jonathan Meier, Julian Jung, Kalyan Prasad Tatavarthi, Karsten Thoms, Kit Lo, Lakshmi P Shanmugam, Lars Vogel, Marcus Hoepfner, Mat Booth, Matthias Becker, Michael Keppler, Mickael Istria, Niraj Modi, Rolf Theunissen, Sarika Sinha, Samantha Dawley, Sebastian Ratz, Simeon Andreev, Sravan Kumar Lakkimsetti, Stephan Wahlbrink, Thomas Wolf, Torbj&#xF6;rn Svensson, Victor Rubezhny, Vikas Chandra, Wim Jongman and Wolfgang Schramm.
     We would also like to acknowledge Kit Lo for all the build and releng support.
    </p>

    <p>
    We also thank the other Eclipse projects that make up a part of the infrastructure we 
      depend on: Tycho, Orbit, EGit, EMF, ECF  for providing fixes and steady improvements.
    </p>

    <p>The JDT team would like to thank everyone who filed good enhancement requests, helped us improve quality by testing and filing good bug reports, and provided answers on JDT forums/newsgroups. Special thanks to the following list of
      people, in alphabetical order, who contributed code to the project: Alexander Kurtakov, Andrey Loskutov, Charlie Oehlrich, Ed Merks, Fabian Pfaff, Fabrice Tiercelin, Gayan Perera, Gilles H&#xE9;lios, Jay Arthanareeswaran, Jeff Johnston, Joerg Kubitz, Kalyan Prasad Tatavarthi, Kenneth Styrberg, Louis M&#xFC;ller, Manoj Palat, Mateusz Matela, Matthias Becker, Mickael Istria, Nikita Nemkin, Niraj Modi, Odin Dahlstr&#xF6;m, Sarika Sinha, Simeon Andreev, Snjezana Peco, Sravan Kumar Lakkimsetti, Stephan Herrmann, Thomas M&#xE4;der, Vikas Chandra and Zsombor Gegesy for features and bug fixes.
    </p>
    
    <p>The Plug-in Development Environment team would like to thank the numerous contributors who continue to improve the component every release.
        Special thanks to those who contributed code:
       Alexander Fedorov, Alexander Kurtakov, Andrey Loskutov, Christoph L&#xE4;ubrich, Claes Rosell, Ed Merks, Hannes Wellmann, Joerg Kubitz, Lars Vogel, Matthias Becker, Mickael Istria, Olivier Prouvost, Sarika Sinha, Sravan Kumar Lakkimsetti, Vikas Chandra and Wim Jongman.
      </p>

    <p>The Equinox team would like to thank all the contributors that helped improve the project by filing bug reports and enhancement requests.  We also would like to thank the community of developers that have contributed to the Equinox code base this release:
       Alexander Kurtakov, Andrey Loskutov, Christoph L&#xE4;ubrich, Ed Merks, Hannes Wellmann, Jared Anderson, Joerg Kubitz, Martin D'Aloia, Mickael Istria, Sravan Kumar Lakkimsetti, Thomas Watson and Vikas Chandra.
      </p>
      
    <br/> 
    <h4>In Memoriam - Kit H Lo</h4>
    
    <p>Eclipse project and its committers want to take a moment to remember with gratitude and deeply thank Kit Lo, who passed away on Saturday, Feb 26th, 2022. 
       Kit Lo was the Technical Lead for IBM Eclipse SDK, based out of IBM RTP lab. Kit has been with IBM for 32+ years, working in various roles and different teams.
       In the past decade, Kit was the lead for Translation/Globalization efforts across various products. About 5 years ago, Kit took up
       the IES Technical Lead role. Kit was a very hard worker, continuous learner and always willing to go the extra mile to help those in need. Kit was also very
       active in Eclipse Open Source Community. He was the co-lead for Eclipse Babel project (community driven translation of strings in Eclipse distribution) and
       in the past year, he also took up the additional role of Eclipse IDE Release Engineer.
      </p>

  </div>

</div>



<?php
$html = ob_get_contents();
ob_end_clean();

# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

