<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# index.php
	#
	# Author: 		
	# Date:			2010-05-31
	#
	# Description: Eclipse project development main page
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse 3.7 and 4.1 Acknowledgements";
	$pageKeywords	= "eclipse, 3.7, 4.1, acknowledgements, thanks";
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
<h3>Eclipse 3.7 and 4.1 Acknowledgements</h3>


<p>
The Platform Ant team would like to thank everyone who filed bugs and all those involved in testing the update to Ant version 1.8.2. 
Special thanks go to Jeff McAffer for contributing a patch and Antoine Levy Lambert for extra testing during the Ant 1.8.2 update.
</p>

<p>
The Platform and JDT Debug team would like to thank everyone who filed bugs and asked or answered newsgroup questions. 
Special thanks go to Patrick Chuong, Jesper S Møller, Eike Stepper and Winnie Lai for taking the time to contribute patches.
</p>

<p>
The Plug-in Development Environment team would like to thank everyone who has contributed patches and helped to improve our user 
experience. Special thanks goes out to Jeff McAffer for the target platform work, Tomasz Zarna for Team API support, 
Markus Keller for improving workbench launching and Gunnar Wagenknecht for fixing JUnit plug-in test launching.
</p>

<p>The SWT team would like to thank everyone who filed bugs and helped improve the
toolkit. Special thanks go to: Andrew Overholt, Christopher Deckers, Chris
Russo, Dani Megert, Markus Keller, McQ, Paul Webster, Remy Suen, and Simon
Pope.  Thanks also to Brett Lewis, Brian Cragun, and Richard Schwerdtfeger for
their assistance in the area of accessibility.</p>

<p>
The Platform and JDT Text team would like to thank everyone who filed good bug reports and enhancement requests. Special thanks go to:<br>
Markus Schorn, James Blackburn, Nick Sandonato and Kim Moir for all her releng work.
</p>

<p>
The JDT/Core team would like to thank everyone who helped to make JDT/Core
better through bug reports, patches, comments in the forum,...
A special thanks for Frédéric Fusier who moved to a new project and was a key
contribution in many areas of the bundle. Also we would like to thank Stephan
Herrmann who is working on JDT/Core during his spare time. He made numerous key
contributions, participated in discussion, provided patches and many other
things. He was granted commit rights during the 3.7 cycle.
</p>

<p>
JDT UI sends thanks to:<br>
Kris De Volder, Mirko Raner, Johannes Utzig, Niels Thykier, Konstantin Komissarchik, Björn Michael and Kim Moir for her help with our performance test issues.
</p>

<p>The Platform Workspace team would like to thank the following for their code
contributions to this release: Malgorzata Janczarska, Szymon Ptaszkiewicz,
Krzysztof Kazmierczyk, Olexiy Buyansky, Wojciech Galanciak, Eduard Bartsch and
Thirumala Reddy Mutchukota. Credit also goes to Dani Megert who has been
helping to improve Workspace components.</p>

<p>The release engineering team would like to thank: David Williams for his long hours, endless patience, and helpful advice in managing the coordinated Indigo release; Olivier
Thomann for his assistance in implementing code coverage in the build; Paul Webster, Andrew Niefer and John Arthorne for their always sage advice with respect to build issues; DJ Houghton, 
Pascal Rapicault, and Ian Bull for their p2 advice; Tom Watson for his Equinox help; a huge thanks to the Eclipse webmasters Denis Roy and Matt Ward for their outstanding work keeping the eclipse.org infrastructure working 
despite our efforts to bring it to its knees; and finally the Eclipse community in general for spreading the open source love. </p>


</div>
  </div>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

