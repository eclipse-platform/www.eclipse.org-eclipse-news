<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# index.php
	#
	# Author: 		
	# Date:			2009-06-09
	#
	# Description: Eclipse project development main page
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse 3.5 Acknowledgements";
	$pageKeywords	= "eclipse, 3.5 acknowledgements, thanks";
	$pageAuthor		= "";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the markers!	
ob_start();
?>		

	<div id="midcolumn">


<div class="homeitem3col">
<h3>Eclipse 3.5 Acknowledgements</h3>


<p>
The Eclipse and RT projects (Platform, JDT, PDE, Equinox) development team received a tremendous amount of support from the Eclipse community throughout the 3.5 release cycle. 
The enormous collective effort of opening bug reports, providing patches, testing, consuming the latest builds and participating in discussions always results in a better 
release. To everyone that helped a big "Thank you!/Merci!/Danke!".  In particular, the team would like to express its appreciation to the following people.
</p>


<p>
The Platform and JDT Text team would like to thank everyone who filed good bug reports and enhancement requests. Special thanks go to:<br>
Tom Hofmann, Tomasz Zarna, Benjamin Muskalla, Anton Leherbauer, Eric Rizzo, and Florian Albrecht.
</p>

<p>
JDT UI sends thanks to:<br>
Benjamin Muskalla, Brock Janiczak, Ferenc Hechler, Francis Upton IV, and Mateusz Matela.
</p>

<p>
PDE would like to thank everyone that sent in patches! Special thanks to:<br>
Simon Archer, Benjamin Cabe, Jakub Jurkiewicz, Philipp Kursawe, Jeff McAffer, Ketan Padegaonkar, Jacek Pospychala, Ankur Sharma, Remy Suen, Rafael Oliveira N&oacute;brega, Bartosz Michalik and Thomas Watson.
</p>

<p>
Platform Workspace sends thanks to Dani Megert who significantly helped with the compare framework.
Thanks to John Arthorne from the rest of the team for constant help with the resources related issues.
</p>

<p>Platform releng would like to thank Andrew Niefer for help transitioning the build to use the p2 publisher and product builds, 
 John Arthorne and DJ Houghton who assisted with composite repos and Pascal Rapicault for the p2's slicer task 
and other implementation details. I'd also like to extend a special thanks to Jenn Charland our super sysadmin who keeps our build lab in good shape.
A sincere merci to Fr&eacute;d&eacute;ric Fusier for his work improving the performance framework and verifying the performance results.   
</p> 


  </div>
  </div>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

