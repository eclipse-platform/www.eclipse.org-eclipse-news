<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# index.php
	#
	# Author: 		
	# Date:			2008-04-23
	#
	# Description: Eclipse project development main page
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse 3.4 Acknowledgements";
	$pageKeywords	= "eclipse, 3.4, acknowledgements, thanks";
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
<h3>Eclipse 3.4 Acknowledgements</h3>


<head>
<title>Eclipse 3.4 Acknowledgements</title>

<p>
The Eclipse project (Platform, JDT, PDE, Equinox) development team received a tremendous amount of support from the Eclipse community throughout the 3.4 release cycle. 
The enormous collective effort of opening bug reports, providing patches, testing, consuming the latest builds and participating in discussions always results in a better 
release. To everyone that helped a big "Thank you!/Merci!/Danke!".  In particular, the team would like to express its appreciation to the following people.
</p>

<p>
Contributors to the Eclipse Platform: Remy Chi Jian Suen, Adam Archer, Francis Upton, Pawel Piech, Matthew Hall,
Jan-Hendrik Diederich, Sebastian Davids, Brock Janiczak, Krzysztof Michalski, Andrew Overholt, Stefan Liebig,
Matt McCutchen, Nikolay Botev, Benjamin Muskalla, Jim Perry, Semion Chichelnitsky, Jakub Jurkiewicz, Jason Brennan,
Matt Carter, Dakshinamurthy Karra, Eric Rizzo, Jacek Pospychala, Micah Hainline, Anton Leherbauer, Oliver Schaefer,
Benjamin CABE, Sky Yan, Chris Torrence, Janusz Lembicz, Billy Biggs, Mark Melvin, Markus Alexander Kuppe, Ed Merks,
Robert Taniwa, Stefan Mücke, Stephan Orcaforge, Tonny Madsen, Carsten Pfeiffer, Willian Mitsuda, Cagatay Calli,
Michael Krauter, David Green, Allan Godding, Martin Oberhuber, Rafael Chaves, Jesper S Møller, Manuel Selva,
Neil Rickards, Martin Karpisek, Mikhail Khodjaiants, Dan Heidinga, Ted Williams, David Kyle, Isaac Pacht, Leo Dos Santos,
Bartosz Michalik, Holger Oehm, Luma Maruojie, Tobias Gerdin, Danail Nachev, Markus Schorn, Mark Powell, Ashley Cambrell,
Aaron Siri, Andrew Ferguson
</p>

<p>
The User Assistance team would like to thank Guillermo Hurtado for his
contribution allowing an infocenter to be built as a war file and also thank
Guillermo Hurtado and and James Perry for their contribution which allows for
multiple remote infocenters. We would also like to thank Robert Taniwa, Jacek
Pospychala, Stefan Xenos, Stefan Mücke, Nick Edgar, Kai Nacke, Kim Sullivan 
and Chris Torrence for the bug fixes they contributed.</p>

<br>Platform Search wishes to thank
<p>Juerg Billeter, Ulrich Etter, Roman Fuchs, Markus Schorn and Cagatay Calli</p>

<br>Platform Text & JDT Text likes to thank
<p>Guy Gurfinkel, Genady Beryozkin, Brock Janiczak, Anton Leherbauer, André
Søreng, Nathan Beyer, Stephan Wahlbrink, Benjamin Muskalla, Andrew Ferguson,
Cagatay Calli, Steffen Pingel, Dakshinamurthy Karra, Nikolay Botev and Lina
Kemmel</p>

<br>JDT UI sends thanks to
<p>Ferenc Hechler, Benjamin Muskalla, Stephan Herrmann, Eric Rizzo, Brock
Janiczak, Francis Upton, Rob Fuhrer and Karsten Becker</p>


<br>PDE would like to thank:

<p>Adam Archer, Ian Bull, Benjamin Cabe, Patrick Dempsey, Joern Dinkla, Kevin
Doyle, Gary Duprex, Peter Friese, Brock Janiczak, Les Jones, Jakub Jurkiewicz,
Bernd Kolb, Blazej Kroll, Eric Li, Fabio Mancinelli, Ed Merks, Bartosz
Michalik, Danial Nachev, Ketan Padegaonkar, Jacek Pospychala, Michael Rennie,
Gaetano Santoro, Darin Swanson, Remy Suen</p>


<br>The SWT team would like to thank everyone who filed bugs and helped improve the
toolkit.  Special thanks go to:

<p>Alex Blewitt, Andrew Overholt, Anton Tarasov, Benjamin Pasero, Boris Bokowski,
Christopher Deckers, Daniel Megert, Eric Rizzo, Eric Scharff, Florian Priester,
Jeff Wu, Leo dos Santos, Mark Powell, Markus Keller, Martin Aeschlimann,
Matthew Hatem, McQ, Mik Kersten, Oleg Krasilnikov, Phil Loats, Remy Suen, Scott
Kovatch, Sky Yan, Tom Schindl</p>




  </div>
  </div>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

