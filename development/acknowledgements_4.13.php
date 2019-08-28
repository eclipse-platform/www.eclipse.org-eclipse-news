

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
$keyword = 'eclipse, 4.13, 2019-09, acknowledgements, acknowledgments, thanks';

include($App->getProjectCommon());
header('Content-type: text/plain; charset=utf-8');

#echo '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">';

#*****************************************************************************
#
# index.php
#
# Author:    Sravan Kumar Lakkimsetti and others on Eclipse Project
# Date:      2019-08-28
#
# Description: Eclipse project 2019-09 release acknowledgments page
#
#
#****************************************************************************

#
# Begin: page-specific settings.  Change these.
$pageTitle     = "Eclipse 2019-09 Acknowledgements";
$pageKeywords  = "eclipse, 4.13, 2019-09, acknowledgements, acknowledgments, thanks";
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
  
  
    <h3>Eclipse 2019-09 Acknowledgements</h3>
    
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
     Alexander Fedorov, Alexander Kurtakov, Alexandr Miloslavskiy, Andrew Obuchowicz, Andrey Loskutov, Benedikt Kuntz, Carsten Hammer, Chad Meadows, Christian Dietrich, Christian Georgi, Dani Megert, Diego Marcilio, Ed Merks, Eric Flindt, Eric Williams, Florian Meyer, Harald Förster, Jay Arthanareeswaran, Jens Lidestrom, Joerg Winter, Jonah Graham, Jose Probst, Julian Honnen, Kalyan Prasad Tatavarthi, Karsten Thoms, Kris De Volder, Lakshminarayana Nekkanti, Lakshmi Priya Shanmugam, Lars Vogel, Manoj Palat, Manuel Niquet, Marco Prüser, Marcus Hoepfner, Markus Pöstinger, Mat Booth, Matthias Becker, Michael Keppler, Mickael Istria, Nikita Nemkin, Niraj Modi, Noopur Gupta, Oliver Bartels, Patrick Tasse, Paul Pazderski, Philipp Böll, Pierre-Yves B., Ralph Gerbig, Robert Engel, Rolf Theunissen, Sarika Sinha, Sebastian Ratz, Shawn Kleese, Simeon Andreev, Simon Scholz, Sravan Kumar Lakkimsetti, Stefan Winkler, Stephan Wahlbrink, Thomas Gatterweh, Thomas Singer, Thomas Watson, Thomas Wolf, Till Brychcy, Taimoor Mirza, Tobias Reisner, Uenal Akkaya, Waqas Ilyas and Xi Yan.
     We would also like to acknowledge Sarika Sinha for all the build and releng support.
    </p>

    Also, the webmasters (Frederic Gurr, Denis Roy, Matt Ward and Mikael Barbero) at the Eclipse Foundation for their constant help and education and improvements. And      
      we also thank the other Eclipse projects that make up a part of the infrastructure we 
      depend on: Tycho, EGit, Jenkins for providing fixes and steady improvements.
    </p>

    <p>The JDT team would like to thank everyone who filed good enhancement requests, helped us improve quality by testing and filing good bug reports, and provided answers on JDT forums/newsgroups. Special thanks to the following list of
      people, in alphabetical order, who contributed code to the project: Alexander Fedorov, Alexander Kurtakov, Andrew Obuchowicz, Andrey Loskutov, Carsten Hammer, Evgeny Mandrikov, Fabrice Tiercelin, Jay Arthanareeswaran, Jeff Johnston, Jinbo Wang, Kalyan Prasad Tatavarthi, Kenneth Styrberg, Lakshminarayana Nekkanti, Lars Vogel, Manoj Palat, Mateusz Matela, Mickael Istria, Niraj Modi, Noopur Gupta, Paul Pazderski, Roland Grunberg, Sarika Sinha, Sebastian Lohmeier, Sebastian Zarnekow, Sheng Chen, Simeon Andreev, Stephan Herrmann, Till Brychcy and Vikas Chandra for features and bug fixes.
    </p>
    
    <p>The Plug-in Development Environment team would like to thank the numerous contributors who continue to improve the component every release.
        Special thanks to those who contributed code:
       Alexander Becher, Alexander Fedorov, Alexander Kurtakov, Andrey Loskutov, Dani Megert, Ed Scadding, Julian Honnen, Karsten Thoms, Lars Vogel, Matthias Becker, Mickael Istria, Niraj Modi, Oliver Bartels, Sravan Kumar Lakkimsetti, Stephan Herrmann, Uenal Akkaya and Vikas Chandra.
      </p>

    <p>The Equinox team would like to thank all the contributors that helped improve the project by filing bug reports and enhancement requests.  We also would like to thank the community of developers that have contributed to the Equinox code base this release:
       Alexander Kurtakov, Anjum Fatima, Carsten Hammer, Ed Merks, Karsten Thoms, Lars Vogel, Mat Booth, Maxime Porhel, Michael Zhilin, Mickael Istria, Mykola Nikishov, Niraj Modi, Paul Pazderski, Sravan Kumar Lakkimsetti, Thomas Watson and Todor Boev.
      </p>

  </div>

</div>



<?php
$html = ob_get_contents();
ob_end_clean();

# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

