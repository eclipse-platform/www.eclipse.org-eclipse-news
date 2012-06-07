<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# index.php
	#
	# Author: 		
	# Date:			2012-05-25
	#
	# Description: Eclipse project Juno release acknowledgements page
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Juno Acknowledgements";
	$pageKeywords	= "eclipse, 3.8, 4.2, juno, acknowledgements, thanks";
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
<h3>Eclipse Juno Acknowledgements</h3>

<p>
The entire Eclipse and Equinox team would like to thank our amazing release
engineers Kim Moir and David Williams. Kim and David not only kept our builds
going every day, but managed the largest ever transition in our build system.
They changed the underlying source repository from CVS to Git, moved to new
build hardware, and moved automated tests to run in the Eclipse Hudson instance.
The team would also like to thank the Eclipse Foundation staff for their tireless
efforts, including: Matt Ward and Denis Roy for keeping all that infrastructure going, 
Janet Campbell and Sharon Corbett for guiding us through the Eclipse legal
process, Wayne Beaton for giving us tools to simplify and manage our development
process, Ian Skerrett for his help with marketing the Eclipse 4 release, and
Mike Milinkovich for running the whole show.
</p>
<p>
The Platform and JDT Text team would like to thank everyone who filed good bug reports and enhancement requests.
Special thanks go to Anton Leherbauer, Danail Nachev, and Marcel Bruch for patches they submitted.
</p>

<p>
JDT UI sends thanks to code contributors Sergey Prigogin, Paul Fullbright, Thomas Reinhardt, 
B&ouml;jrn Michael, Philippe Marschall, Michael Pellaton, and Stephan Herrmann. Thanks also to
David Wegener for his answers on the forums/newsgroups.
</p>
<p>
The JDT/Core team would like to thank Marcel Bruch for his contributions to Java 
content assist and for making content assist super-intelligent with the Code Recommenders project. 
We would also like to thank Terry Parker and Samrat Dhillon for their useful contributions 
in Java model and search areas respectively, Szymon Ptaszkiewicz for contributing to JDT/Core and JDT/APT 
and Sebastian Zarnekow for filing several bugs, thus helping us improve the quality of JDT/Core.
</p>
<p>
A special thanks goes to Olivier Thomann, who despite moving on
to other projects, stays as enthusiastic about JDT/Core as ever and readily
sets asides time for consultations when approached.
</p>
<p>
The Plug-in Development Environment team would like to thank everyone who has 
helped improve our user experience by providing great bug reports and excellent patches. 
Special thanks goes out to Philipp Kursawe, Ben Cox, Igor Fedorenko, Gunnar Wagenknecht, 
Troy Bishop, Dimitar Giormov, Sascha Becher and Christian Georgi for their significant contributions.
</p>
<p>
The SWT team would like to thank everyone who filed bugs and helped improve the
toolkit. Special thanks go to: Alexander Kurtakov, Andrew Overholt, Christopher
Deckers, Dani Megert, Lina Kemmel, Markus Keller, McQ, Nam Quang Tran, Paul
Webster, Raymond Lam, Remy Suen, Richard Schwerdtfeger, Steve Northover and
Thomas Singer.
</p>
<p>The release engineering team would like to thank the Eclipse Foundation web masters (Matt Ward and Denis Roy) for their
continuing outstanding support during this Juno release. Every year they are an enormous help in keep things running
smoothly but this release they did even more than usual as the Platform moved our builds and unit test runs to the
build.eclipse.org infrastructure. To accomplish this was no small feat, requiring big tasks such as setting up Mac and
Windows hardware for use in testing, but we most appreciate the small things: educating us (over and over again) on the
nuances of Linux file system permissions (e.g. bug 378708) and very low level things like adding a second fall-back DNS
internal resolver to lesson network failures during builds (bug 381132). Their help and attention to detail is much
appreciated. 
</p>
            

<h3>Active Committers</h3>
This Eclipse Project release was brought to you by the following committers. These committers
were active at the time of the release (one or more commits in the past nine months):
<table width=100%>
<tr>
<td>Andrew Niefer</td>
<td>Ankur Sharma</td>
<td>Ayushman Jain</td>
<td>Bienjamin Cabe</td>
</tr>
<tr>
<td>Bogdan Gheorghe</td>
<td>Boris Bokowski</td>
<td>Brian De</td>
<td>Carolyn MacLeod</td>
</tr>
<tr>
<td>Chris Goldthorpe</td>
<td>Chris Austin</td>
<td>Curtis Windatt</td>
<td>Danail Branekov</td>
</tr>
<tr>
<td>Dani Megert</td>
<td>David Williams</td>
<td>Dean Roberts</td>
<td>Deepak Azad</td>
</tr>
<tr>
<td>DJ Houghton</td>
<td>Eric Moffatt</td>
<td>Felipe Heidrich</td>
<td>Grant Gayed</td>
</tr>
<tr>
<td>Ian Bull</td>
<td>James Blackburn</td>
<td>Jay Arthanareeswaran</td>
<td>John Arthorne</td>
</tr>
<tr>
<td>Kim Moir</td>
<td>Krzysztof Daniel</td>
<td>Lakshmi Shanmugam</td>
<td>Lars Vogel</td>
</tr>
<tr>
<td>Markus Keller</td>
<td>Mat Hall</td>
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
<td>Srikanth Adayapalam</td>
<td>Stephan Herrmann</td>
<td>Susan McCourt</td>
<td>Szymon Brandys</td>
</tr>
<tr>
<td>Szymon Ptaszkiewicz</td>
<td>Tom Schindl</td>
<td>Tom Watson</td>
<td>Tomasz Zarna</td>
</tr>
</table>
</div>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

