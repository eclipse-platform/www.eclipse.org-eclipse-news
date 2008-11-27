<?php 

require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	

$App = new App();	
$Nav = new Nav();	
$Menu = new Menu();		

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
	# Date:			November 26, 2008
	#
	# Description: This is our information page provided to give new and existing community
	#			   members some information on how they can get involved in the the development
	#			   and direction of the ant platform.
	#
	#
	#****************************************************************************
	
	$pageTitle 		= "Get Involved in the Platform Ant Project";
	$pageKeywords	= "involved, ant, platform, debugging, debugger, jdt, breakpoints";
	$pageAuthor		= "Ant Team";
	
	include("_sideCommon.php");
	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<div class="homeitem3col">
			<h3>Overview</h3>
			<p>There are many ways that you as a member of the community can get involved and contribute to the Platform Ant Project.</p>
			<p>The first step is to let us know you are out there.  Sign up for our <a href="#mailing_lists">mailing lists</a> and chat with us about your problems and interests.  You should also sign up for a <a href="https://bugs.eclipse.org/bugs/">Bugzilla</a> account and add jdt-debug-index@eclipse.org and platform-debug-inbox@eclipse.org to your watch list.</p>
			<p>Here are some ways you can contribute:
			<ol>
			<li>Participate in <a href="http://wiki.eclipse.org/BugDay">Bug Day</a>.
			<li><a href="#writing_code">Write code</a>, developing source artifacts and patches for the Ant projects.</li>
			<li><a href="#filing_bugs">File bug reports</a> in <a href="https://bugs.eclipse.org/bugs/">Bugzilla</a> for defects you find.
			<li>Participate in a milestone <a href="#test_pass">test pass</a>.
			<li>Assist in bug triage by checking if reports are duplicates, out of date, missing fields, etc.  Read up on <a href="#filing_bugs">filing bugs</a> and then take a peek at our <a href="https://bugs.eclipse.org/bugs/buglist.cgi?cmdtype=runnamed&namedcmd=Inbox">Inbox</a>.</li>
			</ol>
		</div>
		<a name="mailing_lists"></a>
		<div class="homeitem3col">
			<h3>Mailing Lists</h3>
			<ul>
			</ul>		
		</div>
		<a name="writing_code"></a>
		<div class="homeitem3col">
			<h3>Writing Code for the Ant Components</h3>
			<p>All development on the Ant Platform is done using Eclipse. Code is checked out of
		      the Eclipse CVS repository, edited using JDT, and then run by launching a second instance of Eclipse from within Eclipse.</p>
			  <p> Note that any contributed code must follow the <a href="http://wiki.eclipse.org/index.php/Development_Conventions_and_Guidelines">coding guidelines</a> outlined on dev.eclipse.org. When working on debug code, you should set your compiler compliance level to 1.4 (Java > Compiler Preference Page).</p>
			<p>Your first step is to download an Eclipse build.  You can download a the Eclipse platform at <a href="http://download.eclipse.org/eclipse/downloads/">here</a>.  New users are best off downloading the latest stream stable build.  Once you have the platform downloaded, setup and launched, you can connect to the CVS repository.</p>
		</div>
		<div class="homeitem3col">
		<h3>Connect to the Eclipse Repository</h3>
			<p>The easiest way to download the correct projects from CVS is to use our <a href="/eclipse/ant/documents/project_sets/psf_files.php">Ant Project Set File</a>.  Download the psf file for non-committers then in Eclipse go to <b>File > Import</b> and select <b>Team > Team Project Set</b>.  If you have not done so already, you will have to define a repository connection which can be done using the information below.  The project set file will checkout the debug projects from CVS. More information about project set files can be found on the <a href="http://wiki.eclipse.org/PSF" target="_blank">PSF Wiki Page</a>.</p>
		      </p>
		
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
					<td width="70%">pserver</td>
				</tr>
				<tr> 
					<td width="30%" valign="top">Use Default Port:</td>
					<td width="70%">ON (default)</td>
				</tr>
				</tbody>
			</table>
			</blockquote>
			
			<p>You can check projects out of the HEAD stream of the newly created repository location by
		      selecting them, then <b>Right Click > Check Out</b>. Check out the Ant projects:</p>
			  <ul>
				  <li>org.eclipse.ant.core</li>
				  <li>org.eclipse.ant.ui</li>
				  <li>org.eclipse.ant.tests.core</li>
				  <li>org.eclipse.ant.tests.ui</li>
				  <li>org.eclipse.ui.externaltools</li>
			  </ul>
      
		      <p>Your workspace setup is now complete. The Platform Ant
		      projects are set up to compile against your installed Eclipse plug-ins (the plug-ins that are being
		      used by your currently running instance of Eclipse). This works because the Platform Ant projects
		      have the "Plug-in Dependencies" library on their Java build path.
		      </p>
      
		      <p>When you upgrade your Eclipse install, the Platform Ant projects will automatically compile
		      against the new plugins. To compile against a different set of plug-ins, you can change the location
		      in the preferences under <b>Window > Preferences > Plug-in Development > Target Platform</b>.
		      
		      
		</div>
		<div class="homeitem3col">
		<a name="required_plugins"></a>
		<h3>Import Required Plug-ins</h3>
			<p><font color="#ff0000"><b>NOTE</b>: You can probably skip this section. If you are compiling other projects that don't use the "Plug-in Dependencies" 		      library, you may need to import required plug-ins manually, as explained here. Otherwise, this step is not necessary.</font>
		      </p>
		    
		     <p>Import required plug-ins using the "External Plug-ins and Fragments" import wizard.
		     The default values will import binary plugins from your host install. This is generally the
		     right thing to do. On the plug-in selection page, import all plug-ins and select "No to All" when
		     prompted to overwrite the plug-ins that are checked out of CVS.
		      </p>
		      
		      <p>If you import binary plug-ins this way, you'll need to re-import them manually every time you
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
		<h3>Creating Patches</h3>
				<p>So now you have the code to fix a bug in your host workspace and have tested it in your target.  The next step is to get that code committed to CVS.  However, only committers have the permission to do that.  Instead, contributors are expected to create a patch file containing their changes and post it to the bug report they are working on.  The patch will be reviewed by one or more committers.  Once the patch is accepted, a committer will apply it to CVS and resolve the bug as fixed.</p>
				<p>To create a patch, select all of the changed projects in the Package Explorer view.  Right click and go to Team > Synchronize, this should open up the Synchronize View.  In the Synchronize View, make sure there are no conflicting changes and that all of your changes follow the <a href="http://wiki.eclipse.org/index.php/Development_Conventions_and_Guidelines">coding guidelines</a>.  Then select your outgoing changes, right click and go to Create Patch...  In the dialog, select a destination for the patch (it is best to include the bug number in the file name and use the extension .patch), double check all your changes are included, then hit OK.  Attach the created patch to the bug report.</p>
		</div>
		<a name="filing_bugs"></a>
		<div class="homeitem3col">
			<h3>Creating Bug Reports</h3>
			<p>
			When filing bugs against the Debug Project, we ask that you use your better judgment, and most importantly 
			common sense before filing a bug. Specifically:
			</p>
			<ul>
				<li>Search bugzilla for existing bugs like yours BEFORE you file it. Resolving duplicates is time consuming.</li>
				<li>Be sure that what happened is really a bug. For example if all you see is an entry in the log files that mentions debug
				(platform or otherwise) try to reproduce it, find out how it happened, or better yet come up with a test case. Some log entries are NOT bugs,
				and can be caused by incorrect workspace configuration, etc.</li>
				<li>Bugzilla is not a forum. Do not ask questions on bugzilla like "how do I create a launch configuration?". This is not a bug.</li>
			</ul>
			<p>Bugs should be filed against the PLATFORM-ANT component. 
				New feature requests should be filed with a severity of "enhancement".
		      </p>
		      <p>By default, bugs filed against an Ant component will be assigned to an inbox account. Interested parties
		      watch this inbox user to see incoming bugs. Committers or the Ant team lead
		      move bugs from the inbox account when someone is actively working on a bug.
		      </p>
		</div>
		<div class="homeitem3col">
		<h3>Bug Lifecycle</h3>
			<p>All bugs for the Platform Ant component follow the same lifecycle. All committers and contributors must adhere to this lifecycle
			to ensure all defects are tracked and handled accordingly.</p>
			<ul>
				<li><b>NEW</b> - All newly filed bugs start out in the NEW state.</li>
				<li><b>DUPLICATE/INVALID/WORKSFORME/WONTFIX</b> - If a bug is a duplicate of another bug or if an Ant committer
			     decides that no code changes will be made for the bug, the bug is resolved immediately with an explanation. 
			     Unless the bug is REOPENED for some reason, this is the end of the road.</li>
			     <li><b>ASSIGNED</b> - Once a bug has been validated by an Ant committer, it is moved to the ASSIGNED state. 
     				When a committer is going to work on a bug, they typically reassign it to themselves.</li>
     			 <li><b>RESOLVED-FIXED</b> - Bugs are marked as RESOLVED-FIXED once code that solves the issue has been checked
			       into CVS. When requesting that someone verify a bug, we include a list of all affected files with a brief 
			       explanation of the changes. This makes the verifier's work easier and also provides valuable information
			       if a change needs to be reviewed in the future.</p>
			      <p>Bugzilla is picky about the state changes it allows, so we follow these steps to maximize efficiency:
			      <ul>
			        <li>Reassign the bug to the person who fixed it and CC the Ant committer who will be asked to verify the bug.
			        <li>Copy the list of changed files from the Synchronize view and paste them into the comment section of the bug report. For each file, provide a brief description of why the file was changed.
			        <li>Commit the code changes to CVS.
			        <li>Mark the bug RESOLVED-FIXED with a request to verify.
			      </ul></li>
			      <li><b>VERIFIED-FIXED</b> - Bugs are marked as VERIFIED-FIXED once someone verifies the fix 
			      that was checked into CVS. Bugs are always verified by an Ant committer other than the person who checked in 
			      the fix. The verifier makes sure that the original problem is fixed and also looks at the code for any
			      obvious errors. This verification step ensures that all code changes are looked at by at least two pairs of eyes.  In addition
				  the verifier will add an entry in the build notes stating that the bug has been fixed.</li>
			</ul>
		</div>
		<a name="test_pass"></a>
		<div class="homeitem3col">
			<h3>Test Passes</h3>
			<p>
				Before every milestone release the Ant Team does an intense one-day test pass where we test all of the functionality of the Ant components.  
				We try to check everything to make sure 100% of the functionality is available in every major release.  
				In addition, we try odd use cases and unusual code to ensure our code is as robust as possible.
			</p>
			<p>
				To organize the test pass, we follow a <a href="http://www.eclipse.org/eclipse/ant/test_plans/test_plans.php">test matrix</a>.  
				The matrix defines who is working on which platform (OS and VM combination) and who is responsible for testing what functionality.  
				The matrix also contains a basic overview of what must be tested in each section.
			</p>
			<p>
				NOTE: Testing should always be done on your host, so to launch Eclipse with a specific vm, 
				you should launch Eclipse with the following argument: <code>-vm C:\(JVM Location)\java.exe</code>  
			</p>
			<p>
				If you would like to help out during a test pass, contact us via our <a href="#mailing_lists">mailing lists</a>.  
				Before the test pass, let us know what platform you are going to test on and what sections you are planning to test.  
				If you have any questions about how to test some area, we would be happy to help explain.
			</p>
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
