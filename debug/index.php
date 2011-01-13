<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# Copyright (c) 2007, 2011 IBM Corporation and others.
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
			<p>For a complete listing of new and noteworthy entries check the <a href="/eclipse/debug/nan/new_and_noteworthy.php">New and Noteworthy</a> page.</p>
		</div>
		<div class="homeitem">
			<h2><b>Up To The Minute</b></h2>
			<ul>
				<li>Our manual testing programs our now available for <a href="/eclipse/debug/misc/ManualTestingPrograms.zip">download</a>.  Happy testing!
				<li>We are presenting two tutorials at EclipseCon 2008.  The presentations are available for both <a target="_blank" href="/eclipse/debug/documents/ec_2008/Debug_Tutorial_Basic_2008.ppt">Debug Platform: The Basics</a> and <a target="_blank" href="/eclipse/debug/documents/ec_2008/Debug_Tutorial_Custom_Integration_2008.ppt">Debug Platform: Custom Integration</a>. More
				information can be found on the <a href="/eclipse/debug/documents.php">Documents</a> page along with exercises.
				</li>
				<li>To help new contributors, we have created a <a href="http://wiki.eclipse.org/images/c/c4/Debug.psf" target="_blank">project set file</a> containing all of the projects needed to get started with debug coding.</li>
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
