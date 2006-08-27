<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# template.php
	#
	# Author: 		Michael Rennie
	# Date:			August 25, 2006
	#
	# Description: This is the 3.2 release plan page
	#
	#
	#****************************************************************************
	
	
	$pageTitle 		= "Platform Debug 3.2 Release Plan";
	$pageKeywords	= "debug, platform, debugging, debugger, breakpoints, launching, 3.2, 3.2.x, release, plan";
	$pageAuthor		= "Debug Team";
	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<div class="homeitem3col">
			<h3>Overall 3.2 Plan</h3>
			<h4>Overall Themes for Platform Debug:</h4>
				<ul>
			        <li>Scaling Up</li>
			        <li>Design for Extensibility: Be a Better Platform</li>
			        <li>Simple to Use</li>
			      </ul>
			<table>
				<tr> 
		          <td><img src="/eclipse/debug/images/defer.gif"> item is deferred</td>
		          <td> <img src="/eclipse/debug/images/progress.gif"> item is under development </td>
		          <td> <img src="/eclipse/debug/images/ok.gif" width="10" height="10"> item is finished </td>
		        </tr>
			<table>
			<h4>Potential Work Items</h4>
			<blockquote>
				<b>Additional breakpoint management enhancements</b> -
					The debug platform provides ways to manage 
	              large numbers of breakpoints via groupings and working sets to allow 
	              efficient enabling and disabling logical sets of related breakpoints. 
	              Additional features would be helpful:
	              <ul>
	                <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> Import and export of 
	                  breakpoints: allow breakpoints to be shared between users and 
	                  persisted for later use.</li>
	                <li><img src="/eclipse/debug/images/defer.gif">B reakpoint working 
	                  sets and launch configurations: allow breakpoint working sets 
	                  to be associated with launch configurations for automatic enabling/disabling 
	                  when launching</li>
	              </ul>
	             <b>Increased flexibility and control for debug providers</b> - 
	              The debug support in Eclipse is increasingly being used 
	              in areas that require more flexible mechanisms than those required 
	              by simple Java programs. Potential areas of work and investigation 
	              include: 
		              <ul>
		                <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> Flow control: provide 
		                  a debug implementation with more control over the number and 
		                  order of requests sent to a debugger, potentially allowing for 
		                  coalescing of requests.</li>
		                <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> Asynchronous API's: provide 
		                  explicitly asynchronous API's for interactions with debuggers 
		                  that require communication with a remote process and allow for 
		                  cancellation of requests made against a target.</li>
		                <li><img src="/eclipse/debug/images/defer.gif"> Pluggable view 
		                  update policies: allow debuggers to provide custom update/refresh 
		                  policies views provided by the debug platform. 
		                  <ul>
		                    <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> Update policies have 
		                      been replaced with model proxies - a model proxy interfaces 
		                      a debug model with the debug user interface, firing incremental 
		                      deltas describing elements that have changed in a model</li>
		                  </ul>
		                </li>
		                <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> Flexible element hierarchy: 
		                  support the presentation of different debug architectures in 
		                  all views provided by the debug platform.</li>
		                <li>Table trees: allow table trees to be used in the standard 
		                  debug views for more flexible/informative presentations.</li>
		                <li>Debug context management: support debugging without the Debug 
		                  view open and allow for more than one debug session to be active 
		                  at once, driving different sets of debug views. Global debug 
		                  actions (such as step, resume, terminate, etc.), should act 
		                  on the active debug context. Debug implementers may need control 
		                  over view wiring (setting the input to debug views).</li>
		              </ul>
	            <b>Simplify running and debugging</b> - The current launching 
	              framework within Eclipse provides a flexible and powerful way to 
	              launch applications within and external to the Eclipse workbench. 
	              However, there are a number of usability issues with the current 
	              user interface and the launching task flow can be fairly complex. 
	              Potential areas of work and investigation include: 
		              <ul>
		                <li><img src="/eclipse/debug/images/defer.gif"> Context sensitive 
		                  run/debug toolbar buttons: rather than forcing the user to choose 
		                  the way to launch an application via cascade menus (as a Java 
		                  Application, Java Applet, etc.), simply allow the user to press 
		                  run or debug to launch the currently selected item with a single 
		                  click, prompting the user for input only when necessary.</li>
		                <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> User preferences to filter 
		                  type of launch configurations</li>
		                <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> ssociate launch configurations 
		                  with files/projects 
		                  <ul>
		                    <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> Support resource 
		                      based filtering - filters configurations from closed and 
		                      unavailable projects</li>
		                    <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> Automatic deletion 
		                      of configurations when a project is deleted (user configurable)</li>
		                  </ul>
		                </li>
		                <li><img src="/eclipse/debug/images/defer.gif">Allow configurations 
		                  to be associated with resources and viewed/managed via a resource's 
		                  properties.</li>
		                <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> Simplify the launch dialog: 
		                  the perspective settings associated with launching should be 
		                  an advanced option rather than the first thing a user sees when 
		                  they open the launch dialog.</li>
		              </ul> 
			</blockquote>
		</div>
		</div>
		<div class="homeitem3col">
			<h3>3.2 Current Development Effort - Milestone 6 (Friday, March 31th)</h3>
			<blockquote>
				<b>Flexible debug platform</b>
		          <ul>
		            <li>Asynchronous capability adapters - provisional interfaces to allow 
		              asynchronous action enablement (terminate, step, etc.)</li>
		            <li><img src="/eclipse/debug/images/progress.gif"> Support for columns in 'single model' 
		              debug views</li>
		          </ul>
		        <b>Replace delegate actions</b> - (extensions) in debug view (menu/toolbar) 
		          with single action objects 
		          <ul>
		            <li>to address enablement issues, and improve performance (only one 
		              copy of each action)</li>
		          </ul>
		        <b>Clean up API access warnings</b> for clients subclassing public classes 
		          that subclass internal implementations<br>
		        <b>Address performance test failures</b><br>
		        <b>Bug fixing</b>
			</blockquote>
		</div>
		<div class="homeitem3col">
			<h3>3.2 Milestone 5 (Friday, February 17th)</h3>
			<blockquote>
				<b>Flexible debug platform</b>
		          <ul>
		            <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> Support for SWT virtual tree 
		              in the asynchronous tree viewer</li>
		            <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> Incremental content retrieval</li>
		            <li><img src="/eclipse/debug/images/progress.gif"> Support for table trees</li>
		            <li><img src="/eclipse/debug/images/defer.gif"> Pluggable cell editors 
		              in asynchronous table viewer</li>
		            <li><img src="/eclipse/debug/images/defer.gif"> Investigate multiple 
		              debug contexts, view sets, pin, etc.</li>
		            <li><img src="/eclipse/debug/images/defer.gif"> Investigate pluggable 
		              drag and drop between all debug views</li>
		          </ul>
		        <b>Launching enhancements</b>
		          <ul>
		            <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> Add a toolbar to the launch 
		              dialog tree viewer - support new, copy, delete, and filters</li>
		            <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> Preferences for filter configurations 
		              from the UI in the launch dialog and launch history - closed projects, 
		              deleted projects, configuration types types, capabilities</li>
		          </ul>
		        <b>Debug view management</b>
		          <ul>
		            <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> Rework debug view management 
		              support (automatically display views associated with debug contexts)</li>
		          </ul>
        	</blockquote>
		</div>
		<div class="homeitem3col">
			<h3>3.2 Milestone 4 (Friday, December 16th)</h3>
			<blockquote>
				<b>Release new internal API's</b> 
		          The new API's will be internal for 3.2 to allow time for review and 
		          use by community 
		          <ul>
		            <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> Asynchronous viewer API - asynchronous structured viewers as API, including 
		                  an abstract structured asynchronous viewer and a tree viewer</li>
		            <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> Flexible hierarchy API - asynchronous label and tree content adapters as API. 
		            	Provide default implementation of adapters, registered for 
		                  default debug model elements and allow clients to provide custom adapters to create custom 
		                  content in all debug views</li>
		            <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> Pluggable model proxies - Allows debuggers to provide custom model proxies to control 
		                  the update of elements in a debug viewer</li>
		            <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> Debug context API - Allows debuggers to drive debugging (source lookup, action 
		                  enablement, etc.)</li>
		          </ul>
		        <b>Launching enhancements</b>
		          <ul>
		            <li>Investigate single click launching - goal is to replace the &quot;Run/Debug 
		              As&quot; cascade menus with single actions - &quot;Run/Debug&quot;.</li>
		            <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> Add hyperlink from launch 
		              dialog to perspective preferences</li>
		            <li>Investigate ways for products to reduce the number of configuration 
		              types visible in the launch dialog</li>
		            <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> Provide API to associated 
		              a resource with a launch configuration (allows filtering configurations 
		              from closed projects)</li>
		          </ul>
			</blockquote>
		</div>
		<div class="homeitem3col">
			<h3>3.2 Milestone 3 (Friday, November 4th)</h3>
			<blockquote>
				<b>Release new API's for review and feedback</b> The new API's will not be committed until M4: 
			          <ul>
			            <li><img src="/eclipse/debug/images/progress.gif"> Asynchronous viewer API - Release asynchronous structured viewers as API, including 
			                  an abstract structured asynchronous viewer and a tree viewer</li>
			            <li><img src="/eclipse/debug/images/progress.gif"> Flexible hierarchy API - Release asynchronous label and tree content adapters as API. 
			            	Provide default implementation of adapters, registered for default debug model elements, which 
			            	allows clients to provide custom adapters to create custom content in all debug views</li>
			            <li><img src="/eclipse/debug/images/progress.gif"> Pluggable update policy API - Allows debuggers to provide custom adapters to control the 
			                  update &amp; refresh of elements in a debug viewer</li>
			            <li><img src="/eclipse/debug/images/progress.gif"> Debug context API - Allows debuggers to drive debugging (source lookup, action 
			                  enablement, etc.)</li>
			          </ul>
		        <b>Centralize launch perspective settings</b>
		        <b>Investigate single click context sensitive launching</b>
		          <ul>
		            <li><img src="/eclipse/debug/images/progress.gif"> Goal is to replace the &quot;Run/Debug As&quot; cascade menus 
		              into single click actions - &quot;Run/Debug&quot;.</li>
		          </ul>
		        <b>Support for console content types</b> to allow line trackers to be contributed based on content in a 
		          console
			</blockquote>
		</div>
		<div class="homeitem3col">
			<h3>3.2 Milestone 2 (Friday, September 23rd)</h3>
			<blockquote>
				<b>Prototype asynchronous tree viewer</b>
		          <ul>
		            <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> interfaces (adapters) used to retrieve content and labels for 
		              this view will be explicitly asynchronous to support latent content and provide context such that different content for the same element 
		                  is possible in different views/contexts/settings</li>
		            <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> support duplicate elements</li>
		            <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> allow refresh calls to be made in a non-UI thread</li>
		          </ul>
		        <b>Prototype flexible element hierarchy</b>
		          <ul>
		            <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> the asynchronous tree will use adapters that support a flexible 
		              hierarchy as described <a href="docs/flexible_hierarchy.html">here</a></li>
		          </ul>

        		<b>Prototype pluggable update policies</b>
        		<b>Breakpoint import/export</b>
		        <b>Support to remove a single process 
		          console from the console view</b> (in addition to remove all terminated)
			</blockquote>
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
