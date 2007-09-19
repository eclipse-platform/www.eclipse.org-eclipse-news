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
	# Date:			August 25, 2006
	#
	# Description: This is the new main page for the Platform Debug website, the old main
	#			   page will redirect to the new main page for the site: www.eclipse.org/eclipse/debug/index.php
	#
	#
	#****************************************************************************

	$pageTitle 		= "Debug Project Related Documents";
	$pageKeywords	= "debug, platform, debugging, debugger, breakpoints, launching, documents, articles, papers";
	$pageAuthor		= "Debug Team";	
	
	include("_sideCommon.php");
	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<div class="homeitem3col">
			<h3>Articles</h3>
			<ul>
				<li>Eclipse Corner article <a target="_blank" href="http://www.eclipse.org/articles/Article-Debugger/how-to.html">How To Write An Eclipse Debugger</a></li>
				<li>Eclipse Corner article <a target="_blank" href="http://www.eclipse.org/articles/Article-Launch-Framework/launch.html">We Have Lift-off: The Launching Framework in Eclipse </a></li>
				<li>Eclipse Corner article <a target="_blank" href="http://www.eclipse.org/articles/article.php?file=Article-MemoryView/index.html">Inside the Memory View: A Guide for Debug Providers</a></li>
				
			</ul>
		</div>
		<div class="homeitem3col">
			<h3>EclipseCon Presentations</h3>
			<ul>
				<li>EclipseCon 2005
					<blockquote>
						<a target="_blank" href="/eclipse/debug/documents/ec_2005/debugger_eclipsecon_2005.pdf">Debug Platform / Java Debugger 3.1</a>
					</blockquote>
				</li>
				<li>EclipseCon 2006 there were three tutorials given, each with a set of exercises, as described below.
					<blockquote>
						<a target="_blank" href="/eclipse/debug/documents/ec_2006/debugger_Basic-Debug-Tutorial.pdf">The Eclipse Debug Framework</a>
						<blockquote>
							<p>The basic exercises are available <a href="/eclipse/debug/documents/ec_2006/Exercises-Debugger.zip">here</a></p>
						</blockquote>
						<a target="_blank" href="/eclipse/debug/documents/ec_2006/debugger_Supporting-a-Community-of-Debuggers.pdf">The Eclipse 3.2 Debug Platform: Supporting a community of debuggers</a>
						<blockquote>
							<p>The Memory View exercises are available <a href="/eclipse/debug/documents/ec_2006/Exercises-MemoryView.zip">here</a></p>
						</blockquote>
						<a target="_blank" href="/eclipse/debug/documents/ec_2006/debugger_Advanced-Debug-Tutorial.pdf">Integrating Custom Debuggers into the Eclipse Platform</a>
						<blockquote>
							<p>The Filebrowser exercises are available <a href="/eclipse/debug/documents/ec_2006/Exercises-FileBrowser.zip">here</a></p>
						</blockquote>
					</blockquote>
				</li>
				<li> EclipseCon 2007 there was only one tutorial given, with no execises done in class. But the associated execises
					are provided below.
					<blockquote>
						<a target="_blank" href="/eclipse/debug/documents/ec_2007/Debug_Tutorial_2007.pdf">A Tour of the Eclipse Debug Framework</a>
						<blockquote>
							<p>The basic exercises are available <a href="/eclipse/debug/documents/ec_2007/Exercise-Debugger.zip">here</a><br>
							The Filebrowser exercises are available <a href="/eclipse/debug/documents/ec_2007/Exercise-FileBrowser.zip">here</a><br>
							The Memory View exercises are available <a href="/eclipse/debug/documents/ec_2007/Exercise-MemoryView.zip">here</a></p>
						</blockquote>
					</blockquote>
				</li>
 			</ul>
		</div>
		<div class="homeitem3col">
			<h3>Miscellaneous Documents</h3>
			<ul>
				<li>Launching has changed, and we have a document describing these changes and the current implementation of <a target="_blank" href="/eclipse/debug/documents/launching/context_launching/Context-launching.pdf">Context Launching</a></li>
				<li>For the 3.3M3 release we are working on moving away from strict mode-based launching to an extensible 'options-based' scheme.
				The following <a href="/eclipse/debug/documents/migration_path.pdf" target="_blank">migration guide</a> describes how you can migrate your launching contributions to use the new scheme.
				<br><br>
				Information about the changes to the launching framework, and the source code needed for the debug plugins can be found on the following 
				<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=157059" target="_blank">bug report</a>.
				<br>
				<blockquote>
					<p>An example project which contributes some tabs to the Java Application tab group and some new modes and mode combinations can be found <a href="/eclipse/debug/misc/launch_mode_example.zip" target="_blank">here</a>.</p>
				</blockquote>
				</li>
				
				<li> Also in 3.3M3, the Step commands have been updated to better reflect the usage of asynchronous adapters and virtual tree viewer implementations. More specific information about these
					changes can be found in the <a href="http://dev.eclipse.org/viewcvs/index.cgi/~checkout~/org.eclipse.debug.core/buildnotes_platform-debug.html" target ="_blank">platform debug build notes</a>.
				</li>
			</ul>
		</div>
		<div class="homeitem3col">
			<h3>Miscellaneous Source Artifacts</h3>
			<ul>
				<li><code>org.eclipse.debug.util</code> is a small helper plugin we use to update our build notes files once we verify bugs. To use it, simply download the plugin below
				and enabled it in your workspace. Once that is done to actually 'use' it, place the cursor at the position in your
				build notes document and click <b>Run->Verify Bug...</b> and enter the number of the bug you verified. The tool will then insert the 
				corresponding html into the build notes document.<br> 
				<blockquote>
					<a href="/eclipse/debug/misc/org.eclipse.debug.util_1.1.0.jar">org.eclipse.debug.util plugin</a> which contains the source as well<br>
				</blockquote>
				</li>
			</ul>
		</div>
	</div>
	<div id="rightcolumn">
		$commonside
	</div>
</div>


EOHTML;

	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
