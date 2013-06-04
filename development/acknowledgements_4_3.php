<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# index.php
	#
	# Author: 		
	# Date:			2013-06-04
	#
	# Description: Eclipse project Kepler release acknowledgements page
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Kepler Acknowledgements";
	$pageKeywords	= "eclipse, 4.3, kepler, acknowledgements, thanks";
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
<h3>Eclipse Kepler Acknowledgements</h3>

<p>
The entire Eclipse and Equinox team would like to thank our amazing release
engineer David Williams. David not only kept our builds going every day,
but together with Thanh Ha and Paul Webster, managed the largest ever transition in our build system from PDE Build to CBI (Tycho).
The team would also like to thank the Eclipse Foundation staff for their tireless
efforts, including: Matt Ward and Denis Roy for keeping all that infrastructure going, 
Janet Campbell and Sharon Corbett for guiding us through the Eclipse legal
process, Wayne Beaton for giving us tools to simplify and manage our development
process, Ian Skerrett for his help with marketing the Eclipse release, and
Mike Milinkovich for running the whole show.
</p>
<p>
The Platform Text team would like to thank everyone who filed good bug reports and enhancement requests.
Special thanks go to Christian Walther and Marco Descher for patches they submitted.
</p>

<p>
JDT UI sends thanks to code contributors Oliver Masutti, Lars Vogel, Christian Georgi, Philippe Marschall, Tristan Hume,
Billy Huang, Kelly Campbell, Martin Hare Robertson, Snjezana Peco and Stephan Herrmann.
</p>
<p>
The JDT Core team would like to thank everyone who contributed to the Kepler release in the
form of bug reports and patches. We would specially like to thank Stephan Hermann for continuing
to be a significant contributor, Olivier Thomann for helping by means of bug fixes and valuable
suggestions and Jesper M&oslash;ller and Troy Bishop for providing significant patches.
<br>
Special thanks go to David Williams for the several test runs, trouble-shooting and fixes
to the custom bundle scripts and Thanh Ha, Paul Webster and others for chipping in with the CBI
related issues.
</p>
<p>
The Plug-in Development Environment team would like to thank everyone who has
helped improve our user experience by providing great bug reports and excellent
patches. Special thanks to Carsten Pfeiffer for improving our quickfix support,
Christian Pontesegger for creating the image browser view, Maarten Meijer for
updating the builder template, Thomas Schindl for adding the classpath resolver
API and Thanh Ha for the endless CBI support. We appreciate all of the help we
received from other Eclipse developers and members of the community including:
Troy Bishop, Mickael Istria, Tomasz Zarna, Brian de Alwis, Lars Vogel, Chris
Dail, and Christian Georgi.
</p>
<p>
The SWT team would like to thank everyone who filed bugs and helped to improve the
toolkit. Special thanks go to: Alexander Kurtakov and Anatoly Spektor (GTK+ 3 work),
Christof Engel and Martin Kolb (fix for COM/Browser leak), Alex Lu/Boris Dachevski/
Viktor Malytskyy/Alex Pogrebtsov and Carsten Pfeiffer (XULRunner Windows x86_64 help),
and Makoto Kato (providing a source of XULRunner Windows x86_64 downloads). Additional
thanks to Chun Yan Zhang, Dani Megert, Lina Kemmel, Markus Keller, McQ, and Paul Webster.
</p>
<p>The release engineering team ... 
</p>
<p>
The Platform UI team would like to extend special thanks to the following people 
who have made (and continue to make) significant contributions to Eclipse 4 and
the Workbench: Alexander Kurtakov, Amit Joglekar, Arnaud Brunet, Brian Vosburgh, 
Christian Georgi, Christian Janz, Christian Pontesegger, Christian Walther, Fredrik Attebrant, 
Jens K&uumlbler, Joachim Mairboeck, John Cortell, Joseph Carroll, Josh Davis, Karen Butzke, 
Kevin Sawicki, Kirill Zotkin, Lars Vogel, Lorenzo Bettini, Marco Descher, Markus Alexander Kuppe, 
Matt Hurne, Meng Xin Zhu, Michael Seele, Michael Wohlfart, Mikael Barbero, Noopur Gupta, 
Oliver Schaefer, Patrick Chuong, Piotr Aniola, Robin Rosenberg, Robin Stocker, R&uumldiger Herrmann, 
Sarah Brake, Sebastian Bauer, Snjezana Peco, Sopot Cela, Stephan Wahlbrink, Szymon Ptaszkiewicz, 
Thomas Beyer, Tristan Hume, Troy Bishop, Vincent Lorenzo, Wim Jongman and Zhongwei Zhao.
</p>


<h3>Active Committers</h3>
<p>
This Eclipse and Equinox release was brought to you by the following committers. These committers
were active at the time of the release (one or more commits in the past nine months):
</p>
<p>
<table width=100%>
<tr>
<td>Andrew Niefer</td>
<td>Ankur Sharma</td>
<td>Ayushman Jain</td>
<td>Benjamin Cabe</td>
</tr>
<tr>
<td>BJ Hargrave</td>
<td>Bogdan Gheorghe</td>
<td>Boris Bokowski</td>
<td>Borislav Kapukaranov</td>
</tr>
<tr>
<td>Brian de Alwis</td>
<td>Carolyn MacLeod</td>
<td>Chris Goldthorpe</td>
<td>Chris Austin</td>
</tr>
<tr>
<td>Curtis Windatt</td>
<td>Danail Branekov</td>
<td>Daniel Leberre</td>
<td>Dani Megert</td>
</tr>
<tr>
<td>David Williams</td>
<td>Dean Roberts</td>
<td>Deepak Azad</td>
<td>DJ Houghton</td>
</tr>
<tr>
<td>Eric Moffatt</td>
<td>Felipe Heidrich</td>
<td>Glynn Normington</td>
<td>Grant Gayed</td>
</tr>
<tr>
<td>Ian Bull</td>
<td>James Blackburn</td>
<td>Jay Arthanareeswaran</td>
<td>John Arthorne</td>
</tr>
<tr>
<td>John Ross</td>
<td>Lazar Kirchev</td>
<td>Kim Moir</td>
<td>Krzysztof Daniel</td>
</tr>
<tr>
<td>Lakshmi Shanmugam</td>
<td>Lars Vogel</td>
<td>Markus Keller</td>
<td>Martin Lippert</td>
</tr>
<tr>
<td>Mat Hall</td>
<td>Mengxin Zhu</td>
<td>Michael Rennie</td>
<td>Oleg Besedin</td>
</tr>
<tr>
<td>Olivier Thomann</td>
<td>Pascal Rapicault</td>
<td>Paul Webster</td>
<td>Pawel Piech</td>
</tr>
<tr>
<td>Raksha Vasisht</td>
<td>Satyam Kandula</td>
<td>Serge Beauchamp</td>
<td>Silenio Quarti</td>
</tr>
<tr>
<td>Srikanth Sankaran</td>
<td>Stephan Herrmann</td>
<td>Stoyan Boshev</td>
<td>Susan McCourt</td>
</tr>
<tr>
<td>Szymon Brandys</td>
<td>Szymon Ptaszkiewicz</td>
<td>Thomas Hallgren</td>
<td>Tobias Oberlies</td>
</tr>
<tr>
<td>Tom Schindl</td>
<td>Tom Watson</td>
<td>Tomasz Zarna</td>
</tr>
</table>
</p>
</div>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

