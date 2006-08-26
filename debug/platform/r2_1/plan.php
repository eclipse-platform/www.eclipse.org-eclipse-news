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
			
			<h4>The overall themes for platform debug are:</h4>
	        <ul>
		        <li>robust and enhance</li>
		        <li>reduce gestures, improve usability</li>
		        <li>write articles</li>
	        </ul>
	        
	        <h4>Planned<b></b> Items</h4>
	        <ul>
	        	<li>Architectural issues 
	            	<ul>
	            		<li><img src="ok.gif" height=15 width=15> synchronization/serialization of runnables</li>
	            		<li><img src="ok.gif" height=15 width=15> &quot;plural&quot; listener interfaces for breakpoints, launches, and expressions</li>
	            		<li><img src="ok.gif" height=15 width=15> vulnerability to runtime exceptions in extension points and listeners</li>
	            		<li><img src="ok.gif" height=15 width=15> incorporate step debug into debug core interfaces </li>
	          		</ul>
	          	</li>
	        	<li>Performance 
	          		<ul>
	            		<li>memory leak pass</li>
	          		</ul>
	        	</li>
	        	<li>Actions 
	          		<ul>
	            		<li><img src="ok.gif" height=15 width=15> Workbench key binding support</li>
	          		</ul>
	        	</li>
	        	<li>Launch configurations 
	          		<ul>
	            		<li><img src="ok.gif" height=15 width=15> convenience action to open launch config dilaog from history menu (perhaps CTRL-click)</li>
	            		<li><img src="ok.gif" height=15 width=15> dialog to support editing of single launch configuration</li>
	            		<li><img src="ok.gif" height=15 width=15> support for launch configuration categories</li>
	            		<li><img src="ok.gif" height=15 width=15> support for launch configuration groups</li>
	          		</ul>
	        	</li>
	        	<li>Variables 
	          		<ul>
	            		<li><img src="ok.gif" height=15 width=15> support for multi-select details (i.e. details of more than one variable)</li>
	            		<li><img src="ok.gif" height=15 width=15> support for wrapped details area rather than horizontal scrolling</li>
	            		<li><img src="ok.gif" height=15 width=15> support for font selection in the details area</li>
	            		<li>migrate detail area location setting to view menu (as in type hierachy view)</li>
	            		<li><img src="ok.gif" height=15 width=15> variables remain expanded on stack frame browsing</li>
	            		<li><img src="ok.gif" height=15 width=15> variables remain expanded on iterative suspend/resume/suspend</li>
	          		</ul>
	        	</li>
	        	<li>Presentation 
	          		<ul>
	            		<li><img src="ok.gif" height=15 width=15> show sticky instruction pointers (via markers or highlighting), in all visible stack frames</li>
	          		</ul>
	        	</li>
	        	<li>Console 
	          		<ul>
	            		<li><img src="ok.gif" height=15 width=15> investigate extensible &quot;open&quot; 
	              		menu actions - eg. &quot;Open on Type&quot;.[This is to be replaced 
	              		with domain specific hyperlinks, implemented with the following 
	              		&quot;line tracker&quot; extension point]. </li>
	            		
	            		<li><img src="ok.gif" height=15 width=15> line tracker extension point 
	              		- extensions are notified when lines are added to the console for 
	              		a specific process type. Extension may process output and add hyperlinks 
	              		as required.</li>
	            		<li><img src="ok.gif" height=15 width=15> support for showing the output of a specific process without debug view interaction</li>
	          		</ul>
	        	</li>
		        <li>Breakpoints 
		          	<ul>
		            	<li><img src="ok.gif" height=15 width=15> use platform support for selective persistence of breakpoints</li>
	              	</ul>
		        <li>Source lookup 
		          	<ul>
		            	<li><img src="ok.gif" height=15 width=15> &quot;Source not found&quot; 
		              	editor - opened when source is not located for the selected stack frame </li>
		          	</ul>
		        </li>
		        <li>Articles 
		          	<ul>
		            	<li><img src="ok.gif" height=15 width=15> We Have Liftoff: The Launching Framework in Eclipse</li>
		          	</ul>
		        </li>
			</ul>
			
			<h4>Deferred Items (Post 2.1)</h4>
	      	<ul>
		        <li> Launch Configurations 
		          	<ul>
			            <li>import/export</li>
			            <li>support location history in common tab</li>
			            <li>define common (optional) launch config attributes - such as project</li>
			            <li>support for working sets in launch dialog (was experimented with, but was removed)</li>
		          	</ul>
		        </li>
	        	<li>Source Lookup 
		          	<ul>
		            	<li>Migrate local file storage &amp; zip storage to the platform</li>
		          	</ul>
	        	</li>
		        <li>Actions 
		          	<ul>
			            <li>Investigate set of retargetable actions - add/remove breakpoint, 
			              run to line, etc. [Discovered the workbench does not support contribution 
			              of target actions for retargettable actions].</li>
			            <li>Improve start-up performance of contributed toggle actions in debug views (lazy activation)</li>
		          	</ul>
		        </li>
		        <li>Console 
		          	<ul>
			            <li>Generic extension point for regular expression matching in console output, with marker creation and lifecycle</li>
		          	</ul>
		        </li>
		        <li>Presentation 
		          	<ul>
			            <li>investigate scalibility issues - views, actions, menus for many debug models</li>
		          	</ul>
		        </li>
	      	</ul>
		</div>
		
		<div class="homeitem3col">
			<h3>2.1 Development Effort - Milestone 5 (February 7th, 2003)</h3>
			<ul>
	        	<li><a href="http://dev.eclipse.org/bugs/buglist.cgi?short_desc_type=allwordssubstr&short_desc=&product=Platform&component=Debug&target_milestone=2.1&target_milestone=2.1+M1&target_milestone=2.1+M2&target_milestone=2.1+M3&target_milestone=2.1+M4&target_milestone=2.1+M5&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&keywords_type=allwords&keywords=&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&bug_severity=blocker&bug_severity=critical&bug_severity=major&bug_severity=normal&bug_severity=minor&bug_severity=trivial&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&changedin=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">Fixing defects</a></li>
		        <li>Console 
		          	<ul>
		            	<li><img src="ok.gif" height=15 width=15> Support for showing the output of a specific process with drop-down menu </li>
		          	</ul>
		        </li>
		        <li>Architecture 
		          	<ul>
		            	<li><img src="ok.gif" height=15 width=15> Protect againt exceptions in listener lists and extension points</li>
		          	</ul>
		        </li>
		        <li>Actions 
		          	<ul>
			            <li><img src="ok.gif" height=15 width=15> Workbench key binding support</li>
			            <li><b>[Deferred]</b> Improve start-up performance of contributed toggle actions in debug views (lazy activation)</li>
			            <li><img src="ok.gif" height=15 width=15> Support for new &quot;step debug&quot; interface/action</li>
		          	</ul>
		        </li>
		        <li>Variables 
		          	<ul>
			            <li><img src="ok.gif" height=15 width=15> Support for wrappered details area</li>
			            <li><img src="ok.gif" height=15 width=15> Support for font selection in the details area</li>
		          	</ul>
		        </li>
		        <li>Launch Configurations 
		          	<ul>
			            <li><img src="ok.gif" height=15 width=15> Remove support for working set filters in launch dialog</li>
			            <li><img src="ok.gif" height=15 width=15> Support for editing &amp; launching a single configuration from the dialog (for external tools/ant)</li>
		          	</ul>
		        </li>
		     </ul>
		 </div>
		 <div class=""homeitem3col>
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
				<li><a href="/eclipse/debug/about.php">About this content</a></li>
			</ul>
		</div>
	</div>
</div>


EOHTML;

	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
