<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# get_involved.php
	#
	# Author: 		Michael Rennie
	# Date:			August 22, 2006
	#
	# Description: This is out information page provided to give new and existing community
	#			   members some information on how they can get involved in the the development
	#			   and direction of the debug platform.
	#
	#
	#****************************************************************************
	
	$pageTitle 		= "Get Involved in the Debug Platform";
	$pageKeywords	= "involved, debug, platform, debugging, debugger, jdt, breakpoints";
	$pageAuthor		= "Debug Team";
	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<h2>How you can get involved in the debug platform</h2>
		<p>Intro text.<br /> <a href="#">more about something &raquo;</a> </p>
		<div class="homeitem">
			<h3>Narrow column</h3>
				<p>If you are interested in participating in the development of the Debug component, 
	        	check out the developer's mailing list: <a href="http://dev.eclipse.org/mailman/listinfo/platform-debug-dev">platform-debug-dev@eclipse.org</a>. 
	        	Chat with people there about your problems and interests, and find out 
	        	what you can do to help. </p>
	        	
	        	<p>In particular, if you are interested in and familiar with debug
      			architectures and user interface design for one or more languages, the
      			Debug team wants to talk to you.</p>
      			
      			<p>For more detailed information, check out the <a href="dev.html">Development 
        		Resources</a>.</p>
		</div>
	</div>
</div>


EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
