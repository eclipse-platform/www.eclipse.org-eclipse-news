<?php  	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	
	$App 	= new App();	
	$Nav	= new Nav();	
	$Menu 	= new Menu();		
	include($App->getProjectCommon());

	#*****************************************************************************
	#
	# Copyright (c) 2008 IBM Corporation and others.
 	# All rights reserved. This program and the accompanying materials
 	# are made available under the terms of the Eclipse Public License v1.0
 	# which accompanies this distribution, and is available at
 	# http://www.eclipse.org/legal/epl-v10.html
 	# Contributors:
	#     IBM Corporation - initial implementation
	#
	# Author: 		Ant Team
	# Date:			
	#
	# Description: 
	#
	#
	#****************************************************************************
	
	
	$pageTitle 		= "Platform Ant Project Test Matrix";
	$pageKeywords	= "ant, script, platform, debugging, debugger, breakpoints, launching, test, plan, release, testing, tester";
	$pageAuthor		= "Ant Team";
	
	include("../_sideCommon.php");
	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<div class="homeitem3col">
			<h3>Testers</h3>
			<p>Committers: Darin Wright, Michael Rennie, Kevin Barnes, Darin Swanson</p>
			<p>Community: Anyone who wants to help</p>
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
				    <td width="18%"><b>JDK 1.5</b></td>
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
			<a name="top"></a>
			<h3>Test Grid</h3>
			<div align="center">
			<table width="80%" border="1">
			  <tr> 
			    <td><b>Feature</b></td>
			    <td><strong>Darin Wright</strong></td>
			    <td><b>Michael Rennie</b></td>
			    <td><b>Darin Swanson</b></td>
			  </tr>
			  <tr> 
			    <td><a href="#anteditor">Ant Editor</a></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			  </tr>
			  <tr> 
			    <td><a href="#antview">Ant View</a></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			  </tr>
			  <tr> 
			    <td><a href="#antbreakpoints">Ant Breakpoints</a></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			  </tr>
			  <tr> 
			    <td><a href="#antdebugging">Ant Debugging</a></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			  </tr>
			  <tr> 
			    <td><a href="#contentassist">Content Assist</a></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			  </tr>
			  <tr> 
			    <td><a href="#consoleoutput">Console Output</a></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			  </tr>
			  <tr> 
			    <td><a href="#testsuite">Test Suite</a></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			  </tr>
			  <tr> 
			    <td><a href="#launching">Launching</a></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			  </tr>
			  <tr> 
			    <td><a href="#externaltools">External Tools</a></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			  </tr>
			</table>
			</div>
		</div>
		<div class="homeitem3col">
			<h3>Feature Testing</h3>
			<a name="anteditor"></a>
			<h4>Ant Editor</h4>
				<ul>
				</ul>
				<p><a href="#top">Back to top</a><br><hr></p>
			<a name="antview"></a>
			<h4>Ant View</h4>
				<ul>
				</ul>
			<p><a href="#top">Back to top</a><br><hr></p>
			<a name="antbreakpoints"></a>
			<h4>Ant Breakpoints</h4>
				<ul>
				</ul>
			<p><a href="#top">Back to top</a><br><hr></p>
			<a name="antdebugging"></a>
			<h4>Ant Debugging</h4>
				<ul>
				</ul>
			<p><a href="#top">Back to top</a><br><hr></p>
			<a name="contentassist"></a>
			<h4>Content Assist</h4>
				<ul>
				</ul>
			<p><a href="#top">Back to top</a><br><hr></p>
			<a name="consoleoutput"></a> 
			<h4>Console Output</h4>
				<ul>
				</ul>
			<p><a href="#top">Back to top</a><br><hr></p>
			<a name="testsuite"></a>
			<h4>Test Suite</h4>
				<ul>
				</ul>
			<p><a href="#top">Back to top</a><br><hr></p>
			<a name="launching"></a>
			<h4>Launching</h4>
				<ul>
				</ul>
			<p><a href="#top">Back to top</a><br><hr></p>
			<a name="externaltools"></a>
			<h4>External Tools</h4>
				<ul>
				</ul>
			<p><a href="#top">Back to top</a><br><hr></p>
	</div>
	<div id="rightcolumn">
		$commonside
	</div>
</div>


EOHTML;

	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
