<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# index.php
	#
	# Author: 		Michael Rennie
	# Date:			August 25, 2006
	#
	# Description: This is the 2.1 plan item page, describing the items to be addressed in 
	#			   the 2.1 release of eclipse
	#
	#
	#****************************************************************************

	$pageTitle 		= "Platform Debug 2.1 Release Plan";
	$pageKeywords	= "debug, platform, debugging, debugger, breakpoints, release, 2.1, 2, milestone";
	$pageAuthor		= "Debug Team";	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<div class="homeitem3col">
			<h3>Overall 2.1 Plan</h3>
			
			<h4>Overall Themes for Platform Debug:</h4>
	        <ul>
		        <li>robust and enhance</li>
		        <li>reduce gestures, improve usability</li>
		        <li>write articles</li>
	        </ul>
	        <table>
				<tr> 
		          <td><img src="/eclipse/debug/images/defer.gif"> item is deferred</td>
		          <td> <img src="/eclipse/debug/images/progress.gif"> item is under development </td>
		          <td> <img src="/eclipse/debug/images/ok.gif" width="10" height="10"> item is finished </td>
		        </tr>
			</table>
	        <h4>Planned Items</h4>
	        <blockquote>
	        	<b> Architectural issues</b>
	            	<ul>
	            		<li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> synchronization/serialization of runnables</li>
	            		<li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> &quot;plural&quot; listener interfaces for breakpoints, launches, and expressions</li>
	            		<li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> vulnerability to runtime exceptions in extension points and listeners</li>
	            		<li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> incorporate step debug into debug core interfaces </li>
	          		</ul>
	        	<b> Performance</b>
	          		<ul>
	            		<li>memory leak pass</li>
	          		</ul>
	        	<b> Actions</b>
	          		<ul>
	            		<li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> Workbench key binding support</li>
	          		</ul>
	        	<b> Launch configurations</b>
	          		<ul>
	            		<li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> convenience action to open launch config dilaog from history menu (perhaps CTRL-click)</li>
	            		<li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> dialog to support editing of single launch configuration</li>
	            		<li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> support for launch configuration categories</li>
	            		<li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> support for launch configuration groups</li>
	          		</ul>
	        	<b> Variables</b>
	          		<ul>
	            		<li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> support for multi-select details (i.e. details of more than one variable)</li>
	            		<li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> support for wrapped details area rather than horizontal scrolling</li>
	            		<li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> support for font selection in the details area</li>
	            		<li>migrate detail area location setting to view menu (as in type hierachy view)</li>
	            		<li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> variables remain expanded on stack frame browsing</li>
	            		<li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> variables remain expanded on iterative suspend/resume/suspend</li>
	          		</ul>
	        	<b> Presentation</b>
	          		<ul>
	            		<li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> show sticky instruction pointers (via markers or highlighting), in all visible stack frames</li>
	          		</ul>
	        	<b> Console</b>
	          		<ul>
	            		<li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> investigate extensible &quot;open&quot; 
	              		menu actions - eg. &quot;Open on Type&quot;.[This is to be replaced 
	              		with domain specific hyperlinks, implemented with the following 
	              		&quot;line tracker&quot; extension point]. </li>
	            		
	            		<li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> line tracker extension point 
	              		- extensions are notified when lines are added to the console for 
	              		a specific process type. Extension may process output and add hyperlinks 
	              		as required.</li>
	            		<li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> support for showing the output of a specific process without debug view interaction</li>
	          		</ul>
		        <b> Breakpoints</b>
		          	<ul>
		            	<li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> use platform support for selective persistence of breakpoints</li>
	              	</ul>
		        <b> Source lookup</b>
		          	<ul>
		            	<li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> &quot;Source not found&quot; 
		              	editor - opened when source is not located for the selected stack frame </li>
		          	</ul>
		        <b> Articles</b>
		          	<ul>
		            	<li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> We Have Liftoff: The Launching Framework in Eclipse</li>
		          	</ul>
			</blockquote>
			
			<h4>Deferred Items (Post 2.1)</h4>
	      	<blockquote>
		        <b> Launch Configurations</b>
		          	<ul>
			            <li>import/export</li>
			            <li>support location history in common tab</li>
			            <li>define common (optional) launch config attributes - such as project</li>
			            <li>support for working sets in launch dialog (was experimented with, but was removed)</li>
		          	</ul>
	        	<b> Source Lookup</b>
		          	<ul>
		            	<li>Migrate local file storage &amp; zip storage to the platform</li>
		          	</ul>
		        <b> Actions</b>
		          	<ul>
			            <li>Investigate set of retargetable actions - add/remove breakpoint, 
			              run to line, etc. [Discovered the workbench does not support contribution 
			              of target actions for retargettable actions].</li>
			            <li>Improve start-up performance of contributed toggle actions in debug views (lazy activation)</li>
		          	</ul>
		        <b> Console</b>
		          	<ul>
			            <li>Generic extension point for regular expression matching in console output, with marker creation and lifecycle</li>
		          	</ul>
		        <b> Presentation</b>
		          	<ul>
			            <li>investigate scalibility issues - views, actions, menus for many debug models</li>
		          	</ul>
	      	</blockquote>
		</div>
		
		<div class="homeitem3col">
			<h3>2.1 Development Effort - Milestone 5 (February 7th, 2003)</h3>
			<blockquote>
		        <b> Console</b>
		          	<ul>
		            	<li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> Support for showing the output of a specific process with drop-down menu </li>
		          	</ul>
		        <b> Architecture</b>
		          	<ul>
		            	<li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> Protect againt exceptions in listener lists and extension points</li>
		          	</ul>
		        <b> Actions</b>
		          	<ul>
			            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> Workbench key binding support</li>
			            <li><img src="/eclipse/debug/images/defer.gif"> Improve start-up performance of contributed toggle actions in debug views (lazy activation)</li>
			            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> Support for new &quot;step debug&quot; interface/action</li>
		          	</ul>
		        <b> Variables</b>
		          	<ul>
			            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> Support for wrappered details area</li>
			            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> Support for font selection in the details area</li>
		          	</ul>
		        <b> Launch Configurations</b>
		          	<ul>
			            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> Remove support for working set filters in launch dialog</li>
			            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> Support for editing &amp; launching a single configuration from the dialog (for external tools/ant)</li>
		          	</ul>
		        <a href="http://dev.eclipse.org/bugs/buglist.cgi?short_desc_type=allwordssubstr&short_desc=&product=Platform&component=Debug&target_milestone=2.1&target_milestone=2.1+M1&target_milestone=2.1+M2&target_milestone=2.1+M3&target_milestone=2.1+M4&target_milestone=2.1+M5&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&keywords_type=allwords&keywords=&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&bug_severity=blocker&bug_severity=critical&bug_severity=major&bug_severity=normal&bug_severity=minor&bug_severity=trivial&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&changedin=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">Fixing defects</a><br>
		 	</blockquote>
		 </div>
		 <div class="homeitem3col">
			<h3>Bug Resolution</h3>
			<ul>
	        	<li><a href="http://dev.eclipse.org/bugs/buglist.cgi?short_desc_type=allwordssubstr&short_desc=&product=Platform&component=Debug&target_milestone=2.1&target_milestone=2.1+M1&target_milestone=2.1+M2&target_milestone=2.1+M3&target_milestone=2.1+M4&target_milestone=2.1+M5&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&keywords_type=allwords&keywords=&bug_status=VERIFIED&resolution=FIXED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&changedin=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">Fixes released in 2.1</a></li>
	      	</ul>
		 </div>
	</div>
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Quick Links</h6>
			<ul>
				<li><a href="/eclipse/debug/documents.php">Articles & Documents</a></li>
				<li><a href="/eclipse/debug/contribute.php">How To Contribute</a></li>
				<li><a href="/eclipse/debug/about.php">About this content</a></li>
			</ul>
		</div>
		<div class="sideitem">
			<h6>Plugins</h6>
			<ul>
				<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.debug.core" target="_top">debug.core</a></li>
        		<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.debug.ui" target="_top">debug.ui</a></li>
			</ul>
		</div>
	</div>
</div>


EOHTML;

	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
