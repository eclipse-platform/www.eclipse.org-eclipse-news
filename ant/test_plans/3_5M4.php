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
	# Date:			November 28, 2008
	#
	# Description: Test plan for the 3.5M4 milestone
	#
	#
	#****************************************************************************
	
	
	$pageTitle 		= "Platform Ant 3.5M4 Test Matrix";
	$pageKeywords	= "ant, script, platform, debugging, debugger, breakpoints, launching, test, plan, release, testing, tester";
	$pageAuthor		= "Ant Team";
	
	include("../_sideCommon.php");
	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<div class="homeitem3col">
			<h2><b>Testers</b></h2>
			<p>Committers: Darin Wright, Michael Rennie, Kevin Barnes, Darin Swanson</p>
			<p>Community: Anyone who wants to help</p>
		</div>
		<div class="homeitem3col">
			<h2><b>JRE Grid</b></h2>
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
				    <td width="18%"><b>Win Vista</b></td>
				    <td width="18%">&nbsp;</td>
				    <td width="18%">&nbsp;</td>
				    <td width="18%">&nbsp;</td>
				    <td width="18%">&nbsp;</td>
				  </tr>
				  <tr> 
				    <td width="18%"><b>Win XP</b></td>
				    <td width="18%">Darin Swanson</td>
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
				    <td width="18%">Michael Rennie</td>
				    <td width="18%">&nbsp;</td>
				  </tr>
				</table>
			</div>
		</div>
		<div class="homeitem3col">
			<a name="top"></a>
			<h2><b>Test Grid</b></h2>
			<div align="center">
			<table width="80%" border="1">
			  <tr> 
			    <td><b>Feature</b></td>
			    <td><strong>Darin Wright</strong></td>
			    <td><b>Michael Rennie</b></td>
			    <td><b>Darin Swanson</b></td>
			    <td><b>Kevin Barnes</b></td>
			  </tr>
			  <tr> 
			    <td><a href="#anteditor">Ant Editor</a></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center"><img src="/eclipse/ant/images/ok.gif" width="10" height="10"></div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			  </tr>
			  <tr> 
			    <td><a href="#antview">Ant View</a></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center"><img src="/eclipse/ant/images/ok.gif" width="10" height="10"></div></td>
			    <td> <div align="center">&nbsp;</div></td>
			  </tr>
			  <tr> 
			    <td><a href="#antdebugging">Debugging</a></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center"><img src="/eclipse/ant/images/ok.gif" width="10" height="10"></div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			  </tr>
			  <tr> 
			    <td><a href="#importexport">Import / Export</a></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center"><img src="/eclipse/ant/images/ok.gif" width="10" height="10"></div></td>
			    <td> <div align="center">&nbsp;</div></td>
			  </tr>
			  <tr> 
			    <td><a href="#inputhandling">Input Handling</a></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center"><img src="/eclipse/ant/images/ok.gif" width="10" height="10"></div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			  </tr>
			  <tr> 
			    <td><a href="#launching">Launching</a></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			   <td> <div align="center"><img src="/eclipse/ant/images/ok.gif" width="10" height="10"></div></td>
			    <td> <div align="center">&nbsp;</div></td>
			  </tr>
			  <tr> 
			    <td><a href="#externaltools">External Tools</a></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center"><img src="/eclipse/ant/images/ok.gif" width="10" height="10"></div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			  </tr>
			  <tr> 
			    <td><a href="#refactoring">Refactoring</a></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center"><img src="/eclipse/ant/images/ok.gif" width="10" height="10"></div></td>
			    <td> <div align="center">&nbsp;</div></td>
			  </tr>
			  <tr> 
			    <td><a href="#preferences">Preferences</a></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center"><img src="/eclipse/ant/images/ok.gif" width="10" height="10"></div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			  </tr>
			  <tr> 
			    <td><a href="#testsuite">Test Suite</a></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center">&nbsp;</div></td>
			    <td> <div align="center"><img src="/eclipse/ant/images/ok.gif" width="10" height="10"></div></td>
			    <td> <div align="center">&nbsp;</div></td>
			  </tr>
			</table>
			</div>
		</div>
		<div class="homeitem">
			<h2><b>Feature Testing</b></h2>
			<a name="anteditor"></a>
			<h3>Ant Editor</h3>
				<ul>
					<li> Folding
						<ul>
						 	<li>Make use of the editor context ruler menu</li>
						 	<li>Key binding actions: Expand All, Enable folding</li> 
						 	<li>Folding is presented for all the partitions in the Ant buildfile. Partion hover is correct.</li>
						</ul>
					</li>
					<li> Navigation
						<ul>
					    	<li>properties (from files as well)</li>
					     	<li>targets</li>
						    <li>referenced elements</li>
							<li>macrodefs, taskdefs</li>
							<li>Enable / disable</li>
					 	<li>Key Modifier and modifier manipulation (preference page)</li>
					  	<li>Links presented for all reasonable Ant elements</li>
						</ul>
					</li>
					<li> Mark Occurrences
						<ul>
						 	<li>respecting preference and editor toolbar setting to mark occurrences</li>
						 	<li>sticky occurrences setting</li>
						  	<li>ensure targets references are correctly highlighted</li>
						  	<li>ensure properties references are correctly highlighted</li>
						</ul>
					</li>
					<li> Content Assist
						<ul>
						 	<li>Should respect global preferences for auto-completion, activation, colouring, etc</li>
						 	<li>Should offer reasonable completions</li>
						 	<li>Templates should be available and work when applied and run</li>
						</ul>
					</li>
					<li> Performance
						<ul>
						  	<li>"Large" taskdefs (ant-contrib) in Ant Editor</li>
						  	<li>"Large" imports (need to generate test case) in Ant Editor</li>
						  	<li>"Large" properties (need to generate test case) in Ant Editor</li>
						</ul>
					</li>
				</ul>
				<p><a href="#top">Back to top</a><br><hr></p>
			<a name="antview"></a>
			<h3>Ant View</h3>
				<ul>
					<li> General
					    <ul>
					      <li>Context menu actions</li>
					      <li>DnD</li>
					      <li>Add/removal</li>
					      <li>Search</li>
						  <li>Running targets (default and otherwise)</li>
						  <li>Navigation to targets with selection for normal, external entities and imported targets</li>
					    </ul>
					</li>
					<li> Auto Reconcile
						<ul>
						 	<li>ensure correct functionality on / off (use the editor toolbar action with the "refresh" icon)</li>
							<li>reconcile triggered on save</li>
						</ul>
					</li>
				</ul>
			<p><a href="#top">Back to top</a><br><hr></p>
			<a name="antdebugging"></a>
			<h3>Debugging</h3>
				<ul>
					<li>Buildfiles in the same JRE
						<ul>
					   		<li>breakpoints (check target breakpoints as well)</li>
					      	<li>stepping (step into, step over for constructs like antcall and ant)</li>
					      	<li>dependency stack</li>
					      	<li>suspend / resume / terminate</li>
						  	<li>run to line support</li>
						  	<li>properties update correctly in the variables view</li>
					    </ul>
					</li>
				  	<li>Buildfiles in a separate JRE
				    	<ul>
					      	<li>breakpoints (check target breakpoints as well)</li>
					      	<li>stepping (step into, step over for constructs like antcall and ant)</li>
						  	<li>dependency stack</li>
					      	<li>suspend / resume / terminate</li>
						  	<li>run to line support</li>
						  	<li>properties update correctly in the variables view</li>
					    </ul>
				  	</li>
				</ul>
			<p><a href="#top">Back to top</a><br><hr></p>
			<a name="importexport"></a>
			<h3>Import / Export</h3>
				<ul>
					<li>Export a Java Project to a buildfile containing a javac task etc.
				    	<ul>
				      		<li>error cases</li>
				      		<li>classpath including plugin dependencies</li>
				    	</ul>
				  	</li>
				  	<li>Import a Java Project from an external buildfile containing a javac task
					    <ul>
					    	<li>error cases</li>
					      	<li>correct links setup for multi-platform</li>
					      	<li>correct links for various destdir and sourcedir</li>
						  	<li>correct links for various destdir and sourcedir</li>
					    </ul>
					</li>
				</ul>
			<p><a href="#top">Back to top</a><br><hr></p>
			<a name="inputhandling"></a> 
			<h3>Input Handling</h3>
				<ul>
					<li>Same JRE
				    	<ul>
				      		<li>with / without valid args</li>
				      		<li>cancel</li>
				      		<li>-noinput</li>
				    	</ul>
				  	</li>
				  	<li>Separate JRE
				    	<ul>
				      		<li>with / without valid args</li>
				      		<li>cancel</li>
				      		<li>-noinput</li>
				    	</ul>
				  	</li>
				</ul>
			<p><a href="#top">Back to top</a><br><hr></p>
			<a name="launching"></a>
			<h3>Launching</h3>
				<ul>
					<li>Correct UI representation of objects contributed to build (same/separate JRE) in the preferences and launch configuration tabs
					    <ul>
					      	<li>properties</li>
					      	<li>classpath entries</li>
					      	<li>tasks</li>
						  	<li>types</li>
					    </ul>
					</li>
				</ul>
			<p><a href="#top">Back to top</a><br><hr></p>
			<a name="externaltools"></a>
			<h3>External Tools</h3>
				<ul>
					<li> Tool Builders
						<ul>
						 	<li>migration from 2.0, 3.0 (with and without prompting)</li>
						  	<li>Java projects and simple projects</li>
						  	<li>add / remove (ensure cleanup on disk)</li>
						  	<li>rename on creation and as an edit (ensure cleanup on disk)</li>
						  	<li>executing an Ant build and program</li>
						  	<li>same VM / separate VM</li>
						  	<li>making use of environment variables</li>
							<li>Ant builders set to execute different targets for different build kinds (Ant builder target tab)
							    <ul>
							      	<li>auto</li>
							      	<li>manual</li>
							      	<li>after a clean (full)</li>
								  	<li>on a clean</li>
							    </ul>
							</li>
							<li>Program builders triggered on clean (Build option tab)</li>
							<li>Migration of existing builders to new format (3.0.1 builder to 3.1 builder only)</li>
						</ul>
					</li>
				</ul>
			<p><a href="#top">Back to top</a><br><hr></p>
			<a name="refactoring"></a>
			<h3>Refactoring</h3>
				<ul>
					<li> In the Ant Editor
						<ul>
							<li>Rename in File (Alt-Shift-R) - ensure linked mode is correct and edits are executed correctly</li>
						</ul>
					</li>
					<li> Rename Projects
						<ul>
							<li>Build files should be updated</li>
							<li>Ant launch configurations should be updated</li>
						</ul>
					</li>
					<li> Rename Buildfiles
						<ul>
							<li>Build files should be updated</li>
							<li>Ant launch configurations should be updated</li>
						</ul>
					</li>
				</ul>
			<p><a href="#top">Back to top</a><br><hr></p>
			<a name="preferences"></a>
			<h3>Preferences</h3>
				<ul>
					<li>All preference pages must have help topics</li>
					<li>All preference changes must be cancelable</li>
					<li>Ensure correct adherance to the user preference settings for:
	  					<ul>
	  						<li>Ant runtime settings</li>
	  						<li>Editor customization</li>
	  						<li>Ignoring errors / problems</li>
						</ul>
					</li>
				</ul>
			<p><a href="#top">Back to top</a><br><hr></p>
			<a name="testsuite"></a>
			<h3>Test Suite</h3>
				<p>All tests should run without failure, and should be runnable individually</p>
				<ul>
					<li> Launch the Ant core test suite from org.eclipse.ant.tests.core</li>
					<li> Launch the Ant ui test suites from org.eclipse.ant.tests.ui</li>
				</ul>
			<p><a href="#top">Back to top</a><br><hr></p>
		</div>
	</div>
	<div id="rightcolumn">
		$commonside
	</div>
</div>


EOHTML;

	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
