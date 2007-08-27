<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# Copyright (c) 2007 IBM Corporation and others.
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
	# Description: This is the page that describes how to contributs to either of the 
	#				debug projects: JDT or Platform
	#
	#
	#****************************************************************************
	
	$pageTitle 		= "How To Contribute";
	$pageKeywords	= "debug, platform, debugging, debugger, jdt, breakpoints, contribute, contribution, contributing";
	$pageAuthor		= "Debug Team";
	
	include("_sideCommon.php");
	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<div class="homeitem3col">
		<h3>Overview</h3>
		<p>There are many ways that you as a member of the community can contribute to the Debug Project (either Platform or JDT Debug).</p>
		
		<p>If your goal is to develop source artifacts and patches for the project, than the applicable sections on <a href="#workspace_setup">workspace setup</a> and <a href="#required_plugins">required
			plugins</a> will be of most notible interest. If however, your only interest is to aid the evolution of the project by reporting defects,
			then the section on <a href="#filing_bugs">filing bugs</a> will be of most interest.</p>
			
		<p>It should be noted that if your interest is in the creation of source artifacts for the project (either JDT or Platform Debug),
			we do require that you follow the <a href="http://dev.eclipse.org/conventions.html" target="_blank">coding guidelines</a> outlined on dev.eclipse.org. Failure to do so can mean the outright rejection
			of submitted material.
		</div>
		<div class="homeitem3col">
			<a name="workspace_setup"></a>
			<h3>Creating a Selfhosting Workspace</h3>
			<p>All development on the Debug Platform is done using Eclipse. Code is checked out of
		      the Eclipse CVS repository, edited using JDT, and then run by launching a second instance of
		      Eclipse from within Eclipse.
		      </p>
		</div>
		<div class="homeitem3col">
		<h3>Connect to the Eclipse Repository</h3>
			<p>Create a CVS Repository Location with the following information:</p>
			<blockquote>
			<table width="100%" border="0" summary="CVS location settings">
				<thead>
					<tr>
						<th width="30%" colspan="1" rowspan="1" align="left">Attribute Name</th>
						<th width="70%" colspan="1" rowspan="1" align="left">Value</th>
					</tr>
				</thead>
				<tbody>
				<tr> 
					<td width="30%" valign="top">Host:</td>
					<td width="70%">dev.eclipse.org</td>
				</tr>
				<tr> 
					<td width="30%" valign="top">Repository Path:</td>
					<td width="70%">/cvsroot/eclipse</td>
				</tr>
				<tr> 
					<td width="30%" valign="top">User:</td>
					<td width="70%">anonymous</td>
				</tr>
				<tr> 
					<td width="30%" valign="top">Password:</td>
					<td width="70%">(blank)</td>
				</tr>
				<tr> 
					<td width="30%" valign="top">Connection Type:</td>
					<td width="70%">extssh</td>
				</tr>
				<tr> 
					<td width="30%" valign="top">Use Default Port:</td>
					<td width="70%">ON (default)</td>
				</tr>
				</tbody>
			</table>
			</blockquote>
			
			<p>You can check projects out of the HEAD stream of the newly created repository location by
		      selecting them, then <b>Right Click > Check Out</b>. Check out the Debug Platform projects:</p>
		      <blockquote>
		      org.eclipse.debug.core<br>
		      org.eclipse.debug.ui
		      </blockquote>
      
		      <p>If you're only editing the Debug Platform projects, your workspace setup is now complete. The Debug Platform
		      projects are set up to compile against your installed Eclipse plug-ins (the plug-ins that are being
		      used by your currently running instance of Eclipse). This works because the Debug Platform projects
		      have the "Plug-in Dependencies" library on their Java build path.
		      </p>
      
		      <p>When you upgrade your Eclipse install, the Debug Platform projects will automatically compile
		      against the new plugins. To compile against a different set of plug-ins, you can change the location
		      in the preferences under <b>Window > Preferences > Plug-in Development > Target Platform</b>.
		      
		      <p>
			      An alternate method is to use the <a href="/eclipse/debug/documents/debug.psf">Debug Project Set File</a> and import it once you have created your
			      CVS connection to dev.eclipse.org. <br> 
			      More information about project set files can be found on the <a href="http://wiki.eclipse.org/PSF" target="_blank">PSF Wiki Page</a>
		      </p>
		</div>
		<div class="homeitem3col">
		<a name="required_plugins"></a>
		<h3>Import Required Plug-ins</h3>
			<p><font color="#ff0000"><b>NOTE</b>: You can probably skip this section. If you are compiling other projects that don't use the "Plug-in Dependencies" 
		      library, you may need to import required plug-ins manually, as explained here. Otherwise, this step is not necessary.</font>
		      </p>
		    
		     <p>Import required plug-ins using the "External Plug-ins and Fragments" import wizard.
		     The default values will import binary plugins from your host install. This is generally the
		     right thing to do. On the plug-in selection page, import all plug-ins and select "No to All" when
		     prompted to overwrite the plug-ins that are checked out of CVS.
		      </p>
		      
		      <p>If you import binary plug-ins this way, you'll need to reimport them manually every time you
		      want to compile against a new version of Eclipse (as when a new Integration build occurs).
		      </p>
		</div>
		<div class="homeitem3col">
		<h3>Launching the Run-time Workbench</h3>
				<p>Once your workspace is set up, it's time to launch Eclipse from within Eclipse. To do this,
		      select <b>Debug As</b> (or Run As) <b>&gt; Run-time Workbench</b> from the Debug (or Run) menu.
		      This will launch a second instance of Eclipse (which we refer to as the "target") running the code in your
		      workspace.
		      </p>
		    
		      <p>Any changes you make in your first workspace (which we refer to as the "host") will be reflected in the
		      target. Test changes made in your host workspace by running and debugging programs in the target.
		      </p>
		</div>
		<div class="homeitem3col">
		<a name="filing_bugs"></a>
		<h3>Filing Bugs</h3>
			<p>
			When filing bugs against the Debug Project, we ask that you use your better judgement, and most importantly 
			common sense before filing a bug. Specifically:
			</p>
			<ul>
				<li>Search bugzilla for existing bugs like yours BEFORE you file it. Resolving duplicates is time consuming.</li>
				<li>Be sure that what happened is really a bug. For example if all you see is an entry in the log files that mentions debug
				(platform or otherwise) try to reproduce it, find out how it happened, or better yet come up with a test case. Some log entries are NOT bugs,
				and can be caused by incorrect workspace configuration, etc.</li>
				<li>Bugzilla is not a forum. Do not ask questions on bugzilla like "how do I create a launch configuration?". This is not a bug.</li>
			</ul>
			<p>Bugs that apply to the Debug Platform (breakpoints, debug views, and launch configurations), should be
		      filed against the PLATFORM-DEBUG component. New feature requests should be filed with a severity of
		      "enhancement". Similarly, those bugs that apply to JDT Debug should be filed against the JDT-DEBUG component.
		      </p>
		      <p>By default, bugs filed against a Debug component will be assigned to an inbox account. Interested parties
		      watch this inbox user to see incoming bugs. Committers or the Debug team lead
		      move bugs from the inbox account when someone is actively working on a bug.
		      </p>
		</div>
		<div class="homeitem3col">
		<h3>Bug Lifecycle</h3>
			<p>All bugs for either the JDT or Platform Debug component follow the same lifecycle. All committers and contributors must adhere to this lifecycle
			to ensure all defects are tracked and handled accordingly.</p>
			<ul>
				<li><b>NEW</b> - All newly filed bugs start out in the NEW state.</li>
				<li><b>DUPLICATE/INVALID/WORKSFORME/WONTFIX</b> - If a bug is a duplicate of another bug or if a Debug committer
			     decides that no code changes will be made for the bug, the bug is resolved immediately with an explanation. 
			     Unless the bug is REOPENED for some reason, this is the end of the road.</li>
			     <li><b>ASSIGNED</b> - Once a bug has been validated by a Debug committer, it is moved to the ASSIGNED state. 
     				When a committer is going to work on a bug, they typically reassign it to themselves.</li>
     			 <li><b>RESOLVED-FIXED</b> - Bugs are marked as RESOLVED-FIXED once code that solves the issue has been checked
			       into CVS. When requesting that someone verify a bug, we include a list of all affected files with a brief 
			       explanation of the changes. This makes the verifier's work easier and also provides valuable information
			       if a change needs to be reviewed in the future.</p>
			      <p>Bugzilla is picky about the state changes it allows, so we follow these steps to maximize efficiency:
			      <ul>
			        <li>Reassign the bug to the Debug committer who will be asked to verify the bug.
			        <li>Copy the list of changed files from the Synchronize view and paste them into the comment section of the bug report. For each file, provide a brief description of why the file was changed.
			        <li>Commit the code changes to CVS.
			        <li>Mark the bug RESOLVED-FIXED with a request to verify.
			      </ul></li>
			      <li><b>VERIFIED-FIXED</b> - Bugs are marked as VERIFIED-FIXED once someone verifies the fix 
			      that was checked into CVS. Bugs are always verified by a Debug committer other than the person who checked in 
			      the fix. The verifier makes sure that the original problem is fixed and also looks at the code for any
			      obvious errors. This verification step ensures that all code changes are looked at by at least two pairs of eyes.</li>
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
