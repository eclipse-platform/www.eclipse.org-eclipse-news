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
</p>
<p>
The JDT Debug team would like to thank everyone who helped improve the Java debugger by filing bugs,
testing and providing patches. Specifically we would like to thank Brock Janiczak for the new XML node
logical structure support, Thomas Schindl for the Javadoc support for ext libraries, Pascal Gruen,
Jesper M&oslash;ller, Yevgen Kogan and Samrat Dhillon for bug fixes.
</p>
<p>
The Platform Debug team would like to thank everyone who helped improve the debugger framework
by filing bugs, testing and providing patches. Specifically we would like to thank Mohamed Hussein
for bug fixes and the warning support in the launch dialog, Mikhail Khodjaiants, Christian Georgi,
Valentin Ciocoi, Robin Stocker and Krzysztof Daniel for bug fixes.
</p>
<p>
The Plug-in Development Environment team would like to thank everyone who has
helped improve our user experience by providing great bug reports and excellent
patches. Special thanks to Carsten Pfeiffer for improving our quickfix support,
Christian Pontesegger for creating the image browser view, Maarten Meijer for
updating the builder template, Thomas Schindl for adding the classpath resolver
API. We appreciate all of the help we
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
<p>The release engineering team would like to thank all the other Eclipse committers and many contributors who 
helped improve the releng process and deliverables. Its hard to single out individuals, in such 
a large team effort, as moving to Tycho and CBI Tools, but special thanks go to Andrew Ross and 
Igor Fedorenko who provided the initial prototype of the CBI build (with Paul Webster's invaluable help).
In particular they provided CBI specific tools for signing jars and a versioning tool that 
was required for our Platform builds. Other required tools came from  Krzysztof Daniel 
for a CBI version of computing API Tooling data files (and many other contributions). Would also
like to give a special thanks to Jan Sievers who not only gave much Maven and Tycho advice, but 
also made critical improvement to Tycho (for version 0.18.0) that were essential for us producing our final 
production builds, such as improvements to producing source bundles, source features, and much, much more. 
</p>
<p>
The Platform UI team would like to extend special thanks to the following people 
who have made (and continue to make) significant contributions to Eclipse Platform 4 and
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
<td>Alexander Kurtakov</td>
<td>Arun Thondapu</td>
<td>BJ Hargrave</td>
<td>Bogdan Gheorghe</td>
</tr>
<tr>
<td>Brian de Alwis</td>
<td>Carolyn MacLeod</td>
<td>Chris Austin</td>
<td>Curtis Windatt</td>
</tr>
<tr>
<td>Daniel Rolka</td>
<td>Dani Megert</td>
<td>David Williams</td>
<td>Deepak Azad</td>
</tr>
<tr>
<td>Eric Moffatt</td>
<td>Grant Gayed</td>
<td>Ian Bull</td>
<td>Jay Arthanareeswaran</td>
</tr>
<tr>
<td>Jesper Moller</td>
<td>John Arthorne</td>
<td>John Ross</td>
<td>Kai Toedter</td>
</tr>
<tr>
<td>Lakshmi Shanmugam</td>
<td>Lazar Kirchev</td>
<td>Malgorzata Janczarska
<td>Manju Mathew</td>
</tr>
<tr>
<td>Markus Keller</td>
<td>Martin Lippert</td>
<td>Mengxin Zhu</td>
<td>Michael Rennie</td>
</tr>
<tr>
<td>Noopur Gupta</td>
<td>Oleg Besedin</td>
<td>Olivier Thomann</td>
<td>Pascal Rapicault</td>
</tr>
<tr>
<td>Paul Elder</td>
<td>Paul Webster</td>
<td>Pawel Piech</td>
<td>Remy Suen</td>
</tr>
<tr>
<td>Silenio Quarti</td>
<td>Simon Kaegi</td>
<td>Srikanth Sankaran</td>
<td>Stephan Herrmann</td>
</tr>
<tr>
<td>Stoyan Boshev</td>
<td>Szymon Brandys</td>
<td>Szymon Ptaszkiewicz</td>
<td>Thanh Ha</td>
</tr>
<tr>
<td>Tobias Oberlies</td>
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

