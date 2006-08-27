<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# template.php
	#
	# Author: 		Michael Rennie
	# Date:			August 25, 2006
	#
	# Description: This page outlines the debug project 2.1 test matrix
	#
	#
	#****************************************************************************
	
	
	$pageTitle 		= "Debug Project 2.1 Test Matrix";
	$pageKeywords	= "debug, platform, debugging, debugger, breakpoints, launching, test, testing, matrix, plan";
	$pageAuthor		= "Debug Team";
	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<div class="homeitem3col">
			<h3>Testers</h3>
			
		</div>
		<div class="homeitem3col">
			<h3>Test Grid</h3>
			
		</div>
		<div class="homeitem3col">
			<h3>JRE Grid</h3>
			<p>The following JREs should be considered when testing. Committers have been 
			  assigned a JRE and platform to test on. The community can chose any JRE and 
			  platform. </p>
			  <div align="center">
				<table width="75%" border="1">
				  <tr> 
				    <td width="18%">&nbsp;</td>
				    <td width="18%"><b>IBM 1.5</b></td>
				    <td width="18%"><b>JDK 1.4.2</b></td>
				    <td width="18%"><strong>JDK 1.5</strong></td>
				    <td width="18%"><b>IBM 1.4.2</b></td>
				  </tr>
				  <tr> 
				    <td width="18%"><b>Win 2000</b></td>
				    <td width="18%">&nbsp;</td>
				    <td width="18%">&nbsp;</td>
				    <td width="18%">&nbsp;</td>
				    <td width="18%">&nbsp;</td>
				  </tr>
				  <tr> 
				    <td width="18%"><b>Win XP</b></td>
				    <td width="18%">&nbsp;</td>
				    <td width="18%">&nbsp;</td>
				    <td width="18%">&nbsp;</td>
				    <td width="18%">&nbsp;</td>
				  </tr>
				  <tr> 
				    <td width="18%"><b>Linux</b></td>
				    <td width="18%">&nbsp;</td>
				    <td width="18%">&nbsp;</td>
				    <td width="18%">&nbsp;</td>
				    <td width="18%">&nbsp;</td>
				  </tr>
				  <tr> 
				    <td width="18%"><b>Mac</b></td>
				    <td width="18%">&nbsp;</td>
				    <td width="18%">&nbsp;</td>
				    <td width="18%">&nbsp;</td>
				    <td width="18%">&nbsp;</td>
				  </tr>
				</table>
			</div>
		</div>
		<div class="homeitem3col">
			<h3>Feature Testing</h3>
			
		</div>
	</div>
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Quick Links</h6>
			<ul>
				<li><a href="/eclipse/debug/documents.php">Articles & Documents</a></li>
				<li><a href="/eclipse/debug/get_involved.php">Get Involved!</a></li>
				<li><a href="/eclipse/debug/contribute.php">How To Contribute</a></li>
				<li><a href="/eclipse/debug/who.php">Who We Are</a></li>
				<li><a href="http://eclipse-debug.blogspot.com/">Debug Team Blog</a></li>
				<li><a href="/eclipse/debug/about.php">About this content</a></li>
			</ul>
		</div>
	</div>
</div>


EOHTML;

	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
