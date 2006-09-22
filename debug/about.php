<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# index.php
	#
	# Author: 		Michael Rennie
	# Date:			August 25, 2006
	#
	# Description: This is the about...content page, with legal disclaimers, etc.
	#
	#****************************************************************************

	$pageTitle 		= "About This Content";
	$pageKeywords	= "debug, platform, debugging, debugger, jdt, breakpoints, about, content, epl";
	$pageAuthor		= "Debug Team";
	
	include("_sideCommon.php")
	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<div class="homeitem3col">
			<h3>License</h3>
			<p>The Eclipse Foundation makes available all content in this plug-in (&quot;Content&quot;).  Unless otherwise 
			indicated below, the Content is provided to you under the terms and conditions of the
			Eclipse Public License Version 1.0 (&quot;EPL&quot;).  A copy of the EPL is available 
			at <a href="http://www.eclipse.org/legal/epl-v10.html">http://www.eclipse.org/legal/epl-v10.html</a>.
			For purposes of the EPL, &quot;Program&quot; will mean the Content.</p>

			<p>If you did not receive this Content directly from the Eclipse Foundation, the Content is 
			being redistributed by another party (&quot;Redistributor&quot;) and different terms and conditions may
			apply to your use of any object code in the Content.  Check the Redistributor's license that was 
			provided with the Content.  If no such license exists, contact the Redistributor.  Unless otherwise
			indicated below, the terms and conditions of the EPL still apply to any source code in the Content
			and such source code may be obtained at <a href="http://www.eclipse.org">http://www.eclipse.org</a>.</p>
		</div>
	</div>
	<div id="rightcolumn">
		$commonside
	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
