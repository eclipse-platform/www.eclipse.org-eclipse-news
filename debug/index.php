<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# Copyright (c) 2007, 2012 IBM Corporation and others.
 	# All rights reserved. This program and the accompanying materials
 	# are made available under the terms of the Eclipse Public License v1.0
 	# which accompanies this distribution, and is available at
 	# http://www.eclipse.org/legal/epl-v10.html
 	# Contributors:
	#     IBM Corporation - initial implementation
	#
	# Author: 		Debug Team
	# Date:			August 22, 2006
	#
	# Description: This is the new main page for the Debug Team website, the old main
	#			   page will redirect to this one in case community members are using old links
	#
	#
	#****************************************************************************
	
	$pageTitle 		= "Eclipse Debug Project";
	$pageKeywords	= "debug, platform, debugging, debugger, jdt, breakpoints";
	$pageAuthor		= "Debug Team";
	
	include("_sideCommon.php");
	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<div class="homeitem">
			<p>The Eclipse Debug Project is not a single project unto itself, it is in fact comprised of 
			two distinct sub-projects: Platform Debug and JDT Debug.</p>
			
			<h2><b>Platform Debug</b></h2>
			<p>The Debug component of the platform defines language independent
			    facilities and mechanisms for:
			    <ul>
				    <li>Launching programs</li>
				    <li>Source lookup</li>
				    <li>Defining and registering breakpoints</li>
				    <li>Event notification from programs being debugged</li>
				    <li>A language independent debug model</li>
				    <li>A language independent debug UI</li>
			    </ul>
		    </p>
		    <p>The Debug component of the platform defines interfaces for a language
		    independent debug model, which abstract common debugging features of many
		    languages. The Debug component of the platform does not provide an
		    implementation of a debugger, it is the duty of other plug-ins to
		    provide language specific implementations of debuggers.</p>
		    
		    <h2><b>JDT Debug</b></h2>
			<p> JDT Debug implements Java debugging support and works with any JDPA-compliant target 
	      		Java VM. It is implemented on top of the language independent &quot;debug 
	      		model&quot; provided by the platform debugger.</p>
	      		
      		<p>JDT debug provides the following debugging functionality:</font>
		        <ul>
			        <li>Launching of a Java VM in either run or debug mode</li> 
			        <li>Attaching to a running Java VM</li>
			        <li>Expression evaluation in the context of a stack frame</li> 
			        <li>Scrapbook pages for interactive Java code snippet evaluation</li> 
			        <li>Dynamic class reloading where supported by Java virtual machine</li>
		        </ul>
	        </p>
	        
		    <p>Both Platform and JDT Debug are built into Eclipse and ship as part of the Eclipse SDK.</p>
		</div>
		<div class="homeitem">
			<h2><b>New and Noteworthy</b></h2>
			<p>The JDT debug component is very responsive to new ideas, feature requests and bug reports. The following is a list of some 
			of the newest and more interesting additions to the component.</p>
			<ul>
			 <li>Bugs fixed so far in: <a href="https://bugs.eclipse.org/bugs/buglist.cgi?list_id=3164739&resolution=FIXED&classification=Eclipse&query_format=advanced&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&component=Debug&product=JDT&product=Platform&target_milestone=4.2.1&target_milestone=4.2.2&target_milestone=4.3&target_milestone=4.3%20M1&target_milestone=4.3%20M2&target_milestone=4.3%20M3&target_milestone=4.3%20M4&target_milestone=4.3%20M5&target_milestone=4.3%20M6&target_milestone=4.3%20M7&target_milestone=4.3">4.3 / 4.2.x</a></li>
			 <li>Latest <a href="http://download.eclipse.org/eclipse/downloads/drops4/S-4.3M2-201209201300/news/">New and Noteworthy</a> for Eclipse 4.3M2</li>
			</ul>
		</div>
		<div class="homeitem">
			<h2><b>Up To The Minute</b></h2>
			<ul>
				<li>Our manual testing programs our now available for <a href="/eclipse/debug/misc/ManualTestingPrograms.zip">download</a>.  Happy testing!
				<li>Platform debug has been migrated to Git, the new repository can be found <a href="http://git.eclipse.org/c/platform/eclipse.platform.debug.git/">here</a></li>
				<li>JDT debug has been migrated to Git, the new repository can be found <a href="http://git.eclipse.org/c/jdt/eclipse.jdt.debug.git/">here</a></li>
			</ul>
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
