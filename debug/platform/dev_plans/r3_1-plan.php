<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# index.php
	#
	# Author: 		Michael Rennie
	# Date:			August 25, 2006
	#
	# Description: This is the 3.1 plan item page, describing the items to be addressed in 
	#			   the 3.1 release of eclipse
	#
	#
	#****************************************************************************

	$pageTitle 		= "Platform Debug 3.1 Release Plan";
	$pageKeywords	= "debug, platform, debugging, debugger, breakpoints, release, 3.1, 3.1.1, milestone";
	$pageAuthor		= "Debug Team";	
	
	include("../../_sideCommon.php");
	include("../_pluginCommon.php");
	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<div class="homeitem3col">
			<h3>Overall 3.1 Plan</h3>
			
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
	        <h4>Remaining Focus Items for 3.1</h4>
	        <ul>
		        <li>Context menu launching in editors</li>
		        <li>A memory view that can be used by many debuggers</li>
		        <li>Support for concurrent operations on debuggers</li>
		        <li>Filtering launch configurations associated with closed projects</li>
		        <li>Making the launch configuration dialog more friendly</li>
		      </ul>
	        
	        <h4>Potential Items</h4>
	        <blockquote>
	        	<b>Console enhancements</b> (org.eclipse.ui.console) - push support down into the generic console 
	              <ul>
	                <li>[M2] <img src="/eclipse/debug/images/ok.gif" height=10 width=10> keyboard 
	                  input</li>
	                <li>[M2] <img src="/eclipse/debug/images/ok.gif" height=10 width=10> hyperlinks</li>
	                <li>[M2] <img src="/eclipse/debug/images/ok.gif" height=10 width=10> regular 
	                  expression matching</li>
	                <li>[M3] <img src="/eclipse/debug/images/ok.gif" height=10 width=10> investigate 
	                  support for DBCS output (support for file encodings)</li>
	                <li>[M4] <img src="/eclipse/debug/images/ok.gif" height=10 width=10> investigate 
	                  support for multiple consoles displayed at once</li>
	                <li><img src="/eclipse/debug/images/defer.gif" width="16" height="16"> filtering/folding 
	                  console output</li>
	                <li>[M4] <img src="/eclipse/debug/images/ok.gif" height=10 width=10> console 
	                  output to a file</li>
	              </ul>
            	<b>Concurrency</b>
	              <ul>
	                <li><img src="/eclipse/debug/images/defer.gif"> (see bug <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=80152">80152</a>) 
	                  Support for concurrent operations on debuggers. Many debug architectures 
	                  require communicating with a remote debug target. The debug 
	                  user interface needs to be robust in the face of latent and 
	                  unreliable connections. To avoid blocking the user interface, 
	                  the debug platform is exploiting the use of background jobs 
	                  to perform operations and communicate with debuggers. As the 
	                  opportunity for concurrent requests against debuggers increases, 
	                  the platform must provide support for serializing conflicting 
	                  requests against debuggers - for example a read operation to 
	                  render a stack frame and a request that would invalidate the 
	                  stack frame by resuming its thread. The debug platform needs 
	                  to provide API and a set of guidlines to follow when scheduling 
	                  concurrent operations and requests against debuggers.</li>
	                <li>[M5] <img src="/eclipse/debug/images/ok.gif" height=10 width=10> investigate 
	                  further use of background communication in the debug views, 
	                  to populate views without blocking the UI thread</li>
	              </ul>
            	<b>Publicize the Memory view</b>
	              <ul>
	                <li>[M5] <img src="/eclipse/debug/images/ok.gif" height=10 width=10> promote the Memory view and its extension points to public API</li>
	              </ul>
            	<b>Pluggable debug hierarhcy and specialization</b> 
	              <ul>
	                <li>[M3]<img src="/eclipse/debug/images/ok.gif" height=10 width=10> investigate 
	                  arbitrary debug model element hierarchies</li>
	                <li>[M4]investigate specialized 
	                  event handling in debug views currently controlled by the platform 
	                  to allow debug models to override or extend the default behaviors</li>
	                <li>[M3] <img src="/eclipse/debug/images/ok.gif" height=10 width=10> allow 
	                  debug model presentations to color labels</li>
	                <li>[M4] <img src="/eclipse/debug/images/ok.gif" height=10 width=10> allow 
	                  to override the default &quot;edit variable value&quot; dialog</li>
	                <li><img src="/eclipse/debug/images/defer.gif"> allow to override 
	                  the default &quot;details area&quot; in the variables view</li>
	                <li><img src="/eclipse/debug/images/defer.gif"> limit stack depth 
	                  displayed in debug view, allowing use to see more if desired</li>
	                <li><img src="/eclipse/debug/images/defer.gif"> allow a pluggable 
	                  watch expression factory for a debug model/variable</li>
	              </ul>
            	<b>View Management</b>
	              <ul>
	                <li><img src="/eclipse/debug/images/defer.gif"> enhance auto-close 
	                  feature to close a view when a debug sessions terminates or 
	                  when an associated launch is removed</li>
	              </ul>
	            <b>Launching</b>
	              <ul>
	                <li>[M4] <img src="/eclipse/debug/images/ok.gif" height=10 width=10> API support for hidden launches</li>
	                <li>[M4] <img src="/eclipse/debug/images/ok.gif" height=10 width=10> commands and key-bindings for launch shortcuts</li>
	                <li><img src="defer.gif"> relax requirement 
	                  for launch configurations to have globally unique names</li>
	                <li><img src="/eclipse/debug/images/defer.gif"> detailed launch 
	                  configuration deltas (in change notification)</li>
	              </ul>
	              <b>Ease of use reviews/enhancements</b>
		              <ul>
		                <li><img src="/eclipse/debug/images/defer.gif"> look at ways 
		                  to make the launch dialog more friendly to novice users</li>
		                <li>[M2] <img src="/eclipse/debug/images/ok.gif" height=10 width=10> consolidate run/debug actions and menus to use selection sensitive 
		                  launching (aka context launch)</li>
		                <li>[M6] <img src="/eclipse/debug/images/ok.gif" height=10 width=10> launching from editor context menu</li>
		                <li><img src="/eclipse/debug/images/defer.gif"> debugging/stepping 
		                  without the debug view</li>
		                <li><img src="/eclipse/debug/images/defer.gif"> filtering launch 
		                  configurations associated with closed projects from UI</li>
		                <li><img src="/eclipse/debug/images/defer.gif"> key bindings 
		                  for launching specific configurations and launch shortcuts</li>
		              </ul>
		           <b>Scalability</b>
			            <ul>
			              <li>[M5] <img src="/eclipse/debug/images/ok.gif" height=10 width=10> breakpoint groups to manage different sets of breakpoints for 
			                different tasks</li>
			              <li><img src="/eclipse/debug/images/defer.gif"> investigate ways 
			                to manage large numbers of launch configurations via presentation 
			                and templates</li>
			              <li>[M5] <img src="/eclipse/debug/images/ok.gif" height=10 width=10> searching for variables in the variables view</li>
			              <li><img src="/eclipse/debug/images/defer.gif"> thread filtering 
			                in the debug view for applications with many threads </li>
			            </ul>
			       <b>Help clients</b>
			       		<ul>
				       		<li> Help clients such as the Eclipse Web Tools Platform Project to 
	              				improve their overall integration with the debug platform</li>
              			</ul>
			</blockquote>
		</div>
		
		<div class="homeitem3col">
			<h3>3.1 Current Development Effort - Milestone 7 (Friday, May 13th)</h3>
			<blockquote>
		        <b>Built to last</b>
		          <ul>
		            <li><img src="/eclipse/debug/images/progress.gif"> Bug fixing</li>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> Define component.xml</li>
		            <li>Make step actions retargettable</li>
		            <li><img src="/eclipse/debug/images/defer.gif"> Improve feedback 
		              in debug view when launch is in progress</li>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> Convert to JAR'd plug-in 
		              format</li>
		          </ul>
		        <b>Performance</b>
		          <ul>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> Define manifest.mf</li>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> Convert to new NLS format</li>
		            <li>Expand performance test suite</li>
		            <li><img src="/eclipse/debug/images/progress.gif"> Analyze performance problems</li>
		          </ul>
		 	</blockquote>
		 </div>
		 <div class="homeitem3col">
			<h3>3.1 Milestone 6 (Friday, April 1st)</h3>
			<blockquote>
		        <b>Built to last</b>
		          <ul>
		            <li>Bug fixing</li>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> CPL to EPL conversion</li>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> Make &quot;Drop to Frame&quot; 
		              a platform action</li>
		            <li><img src="/eclipse/debug/images/defer.gif"> Make step actions 
		              retargettable [deferred to M7]</li>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> Make Run to line action 
		              contributable to a view</li>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> Provide double-click ruler 
		              breakpoint action in the platform</li>
		            <li><img src="/eclipse/debug/images/progress.gif"> Allow delegate to be provided by debug 
		              model for watch expression creation from selected variable</li>
		            <li><img src="/eclipse/debug/images/defer.gif"> Support extensible 
		              filters in the debug view [deferred for post 3.1 consideration]</li>
		          </ul>
		        <b>Large-scale development</b>
		          <ul>
		            <li><img src="/eclipse/debug/images/defer.gif"> thread filtering 
		              in the debug view [deferred for post 3.1 consideration]</li>
		          </ul>
		        <b>Ease of use</b>
		          <ul>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> launching from editor context 
		              menu</li>
		          </ul>
		        <b>Performance</b>
		          <ul>
		            <li>Expand performance test suite</li>
		            <li>Analyze performance problems</li>
		          </ul>
		 	</blockquote>
		 </div>
		 <div class="homeitem3col">
			<h3>3.1 Milestone 5 (Friday, February 18th)</h3>
			<blockquote>
		        <b>Built to last</b>
		          <ul>
		            <li> console toolbar action contribution - to be supported by workbench 
		              [Darin Wright]</li>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> investigate further use 
		              of background communication in the debug views [Kevin Barnes]</li>
		            <li><img src="/eclipse/debug/images/progress.gif"> promote the memory view and its extension 
		              points to public API [Darin Wright, Samantha Chan]</li>
		          </ul>
		        <b>Simple to use</b>
		          <ul>
		            <li>context menu launching in editors [Jared Burns]</li>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> migrate custom breakpoint 
		              groups to working set implementation [Darin Wright]</li>
		          </ul>
		        <b>Performance</b>
		          <ul>
		            <li>Expand performance test suite</li>
		            <li>Analyze performance problems</li>
		          </ul>
		 	</blockquote>
		 </div>
		 <div class="homeitem3col">
			<h3>3.1 Milestone 4 (Friday, December 17th)</h3>
			<blockquote>
		        <b>Built to last</b>
		          <ul>
		            <li><img src="/eclipse/debug/images/defer.gif"> console toolbar action 
		              contribution - to be supported by workbench [Darin Wright]</li>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> console context menu action 
		              contribution [Darin Wright]</li>
		            <li><img src="/eclipse/debug/images/defer.gif"> investigate further 
		              use of background communication in the debug views [Darin Wright]</li>
		            <li><img src="/eclipse/debug/images/defer.gif"> promote the memory 
		              view and its extension points to public API [Darin Wright, Samantha 
		              Chan]</li>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> allow debug models wrappering 
		              Java debugger to display monitor information in debug view [Darin 
		              Wright]</li>
		            <li> <img src="/eclipse/debug/images/defer.gif"> enhance view management 
		              auto-close feature to close a view when a debug sessions terminates 
		              or when an associated launch is removed [Jared Burns]</li>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> extensible &quot;edit variable 
		              value&quot; dialog [Jared Burns]</li>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> multiple consoles displayed 
		              at once [Kevin Barnes]</li>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> console output fo a file 
		              [Kevin Barnes]</li>
		            <li><img src="/eclipse/debug/images/defer.gif"> detailed launch configuration 
		              deltas [Luc Bourlier]</li>
		          </ul>
		        <b>Simple to use</b>
		          <ul>
		            <li><img src="/eclipse/debug/images/defer.gif"> context menu launching 
		              in editors [Jared Burns]</li>
		            <li><img src="/eclipse/debug/images/defer.gif"> migrate custom breakpoint 
		              groups to working set implementation [Jared Burns]</li>
		            <li><img src="/eclipse/debug/images/defer.gif"> look at ways to make 
		              the launch dialog more friendy [Darin Wright]</li>
		          </ul>
		 	</blockquote>
		 </div>
		 <div class="homeitem3col">
			<h3>3.1 Milestone 3 (Friday, November 5th)</h3>
			<blockquote>
		        <b>Console enhancements</b> (org.eclipse.ui.console) - push support down into the generic console 
		          <ul>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> investigate support for DBCS 
		              output (support for file encodings) [Kevin Barnes]</li>
		            <li><img src="/eclipse/debug/images/defer.gif"> [deferred to M4] action contribution for console pages 
		              - toolbars and context menus [Darin Wright]</li>
		          </ul>
		        <b>Background communication</b>
		          <ul>
		            <li> <img src="/eclipse/debug/images/progress.gif"> [to be continued in M4] investigate 
		              further use of background communication in the debug views, to populate 
		              views without blocking the UI thread [Kevin Barnes, Darin Wright]</li>
		          </ul>
		        <b>Publicize the Memory view</b> [Darin Wright, Samantha Chan] 
		          <ul>
		            <li><img src="/eclipse/debug/images/progress.gif"> [to be continued in M4] promote 
		              the Memory view and its extension points to public API</li>
		          </ul>
		        <b>Pluggable debug hierarhcy</b>
		          <ul>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> investigate arbitrary debug 
		              model element hierarchy [Darin Wright]</li>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> allow debug model presentations 
		              to color labels [Darin Wright]</li>
		          </ul>
		        <b>Ease of use</b>
		          <ul>
		            <li><img src="/eclipse/debug/images/defer.gif"> [deferred to M4] Context menu launching in editors [Jared 
		              Burns]</li>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10>Enhancements to breakpoint 
		              groups to support composite groups and better persistence of user 
		              groups [Jared Burns]</li>
		          </ul>
        		<b>Bug Fixing Rotation</b>
		 	</blockquote>
		 </div>
		 <div class="homeitem3col">
			<h3>3.1 Milestone 2 Plan (Friday, September 24th)</h3>
			<blockquote>
		        <b>Console enhancements</b> (org.eclipse.ui.console) - push support down into the generic console [Kevin Barnes] 
		          <ul>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> keyboard input</li>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> hyperlinks</li>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> regular expression matching</li>
		            <li><img src="/eclipse/debug/images/defer.gif"> [deferred to M3] investigate support for DBCS output (support 
		              for file encodings)</li>
		          </ul>
		        <b>Ease of use reviews/enhancements</b> [Darin Wright] 
		          <ul>
		            <li><b>[in progress, ongoing]</b> <img src="/eclipse/debug/images/progress.gif"> look at 
		              ways to make the launch dialog more friendly to novice users </li>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> consolidate run/debug actions 
		              and menus to use selection sensitive launching (aka context launch)</li>
		          </ul>
		        <b>Background communication</b> [Kevin Barnes - deferred to M3] 
		          <ul>
		            <li><img src="/eclipse/debug/images/defer.gif"> investigate further 
		              use of background communication in the debug views, to populate 
		              views without blocking the UI thread</li>
		          </ul>
		        <b>Scalability </b>
		          <ul>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> breakpoint groups to manage 
		              different sets of breakpoints for different tasks [Jared Burns]</li>
		            <li><img src="/eclipse/debug/images/defer.gif"> [deferred to M3] investigate ways to manage large numbers 
		              of launch configurations via presentation and templates [Darin 
		              Wright]</li>
		          </ul>
		 	</blockquote>
		 </div>
	</div>
	<div id="rightcolumn">
		$commonside
		$commonplugin
	</div>
</div>


EOHTML;

	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
