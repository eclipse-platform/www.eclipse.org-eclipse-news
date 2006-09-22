<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#
	# Author: 		Michael Rennie
	# Date:			September 19, 2006
	#
	# Description: JDT Debug 3.0 release plan
	#
	#
	#****************************************************************************
	
	
	$pageTitle 		= "JDT Debug 3.0 Release Plan";
	$pageKeywords	= "debug, platform, debugging, debugger, breakpoints, launching, release, plan";
	$pageAuthor		= "Debug Team";
	
	include("/debug/_sideCommon.php")
	include("/debug/jdt/_pluginCommon.php")
	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<div class="homeitem3col">
			<h3>Overall  Plan</h3>
			
			<h4>Overall Themes for JDT Debug:</h4>
	        	<ul>
			        <li>support for mixed languages</li>
			        <li>improved user experience</li>
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
	        	<b> Refactoring Support</b>
		          <ul>
		            <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> for Java launch configurations</li>
		            <li><img src="/eclipse/debug/images/progress.gif"> for breakpoints</li>
		          </ul>
		        <b>Scalability Issues</b>
		          <ul>
		          	<li>support for filtering Java debug actions/views from the UI</li>
		            <li>Applet development activity [canceled - the SDK will define activities]</li>
		            <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> Java debug activities/contexts</li>
		          </ul>
		        <b>Enhanced Classpath Support</b>
		          <ul>
		            <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> Allow the user to append/prepend 
		              the default runtime classpath</li>
		            <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> Provide improved runtime 
		              classpath editing and viewing</li>
		          </ul>
		        <b>Enhanced Mixed Language Support</b>
		          <ul>
		            <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> Provide source lookup based 
		              on the JSR045 specification to search for source in the appropriate 
		              strata</li>
		          </ul>
		        <b>Enhanced Evaluation Support</b>
		          <ul>
		            <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> Provide lightweight evaluations 
		              in a pop-up window to reduce context switching </li>
		          </ul>
		        <b>Investigate support for JDK1.5 features</b>	
		        <b>JSR045</b>
	              <ul>
	                <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> implementation of JSR045 
	                  in JDI client</li>
	                <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> APIs in the Java debug 
	                  model that support strata for breakpoint creation</li>
	                <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> investigate stepping 
	                  in non-default strata</li>
	                <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> investigate source locators 
	                  for non-default strata</li>
	                <li>investigate switching between different sources (for example, 
	                  switch from JSP view to Java view while debugging)</li>
	                <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> example Tomcat launcher 
	                  and JSP source locator for Java family example project </li>
	              </ul>
	              <b>Breakpoints</b>
		              <ul>
		                <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> support breakpoints 
		                  in external source</li>
		                <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> improve breakpoint location 
		                  verification</li>
		                <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> migrate to debug platform 
		                  retargettable actions for breakpoints</li>
		                <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> improve/restructure 
		                  breakpoint properties dialog</li>
		                <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> create exception breakpoints 
		                  from stack traces in the console</li>
		              </ul>
		           <b>Object Browsers</b>
		              <ul>
		                <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> custom object browsers 
		                  for common collection classes, providing navigable semantic 
		                  views of objects</li>
		              </ul>
		           <b>Refactoring</b>
		              <ul>
		                <li><img src="/eclipse/debug/images/progress.gif"> update Java launch configurations 
		                  in conjunction with refactorings (depends on JDT refactoring 
		                  API)</li>
		              </ul>
		           <b>Classpath</b>
		              <ul>
		                <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> allow user to prepend 
		                  and append to default runtime classpath and bootpath (instead 
		                  of specifying complete paths)</li>
		              </ul>
		           <b>Evaluations</b>
		              <ul>
		                <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> investigate lightweight 
		                  &quot;in place&quot; evaluations - show results in a pop-up</li>
		                  <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> use jobs for scheduling 
                  		and execution of evaluations (implicit &amp; explicit)</li>
		              </ul>
			</blockquote>
			
			<h4>Deferred Items </h4>
	      	<blockquote>
	      		<b>Scrapbook</b>
		          <ul>
		            <li>make scrapbook generally easier to use, more visible</li>
		            <li>perhaps create a scrapbook view which does not require a file 
		              (.jpage) to be created</li>
		            <li>investigate global variable support</li>
		            <li>investigate textual import support</li>
		            <li>investigate evaluating snippets from Java comments</li>
		          </ul>
		        </li>
		        <b>Console</b>
		          <ul>
		            <li>investigate pasting stack traces into the console (e.g. from Bugzilla), 
		              to navigate Eclipse from the stack trace</li>
		          </ul>
		        </li>
	      	</blockquote>
		</div>
		<div class="homeitem3col">
		<h3>3.0 Development Effort - Milestone 9 (Friday, May 7th)</h3>
			<blockquote>
				<b>Source Lookup</b> 
		          <ul>
		            <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> Support JSP source lookup 
		              in Java source locator (i.e. support source lookup based on default 
		              stratum in debug target, via JSR045) [Darin Wright]</li>
		            <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> Migrate Java debugger to 
		              use new platform source lookup facilities [Darin Wright]</li>
		          </ul>
		        <b>Refactoring Participants</b> 
		          <ul>
		            <li><img src="/eclipse/debug/images/progress.gif"> Breakpoints [Luc Bourlier]</li>
		          </ul>
		        <b>Smart Fields</b> 
		          <ul>
		            <li>Enhance dialogs with smart fields (code assist) where applicable: 
		              Main tab, Detail formatter</li>
		          </ul>
		        <b>JDK 1.5 Support</b> 
		          <ul>
		            <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> Support breakpoint creation 
		              in 1.5 code [Luc Bourlier]</li>
		          </ul>
		        <b>Bug Fixing</b>
			</blockquote>
		</div>
		<div class="homeitem3col">
		<h3>3.0 Development Effort - Milestone 8 (Friday, March 26th)</h3>
			<blockquote>
				<b>Scalability Issues</b> 
		          <ul>
		            <li>Activity definitions for Java and Applet debugging [Jared Burns]</li>
		          </ul>
		        <b>Source Lookup</b> 
		          <ul>
		            <li><img src="/eclipse/debug/images/progress.gif"> Support JSP source lookup in Java source 
		              locator (i.e. support source lookup based on default stratum in 
		              debug target, via JSR045) [Darin Wright]</li>
		            <li><img src="/eclipse/debug/images/progress.gif"> Migrate Java debugger to use new platform 
		              source lookup facilities [Darin Wright]</li>
		          </ul>
		        <b>Runtime Classpath</b> 
		          <ul>
		            <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> Enhance new append/prepend 
		              bootpath support to make it backwards compatible [Darin Wright]</li>
		          </ul>
		        <b>Refactoring Participants</b> 
		          <ul>
		            <li><img src="/eclipse/debug/images/progress.gif"> Breakpoints [Luc Bourlier]</li>
		          </ul>
		        <b>Smart Fields</b> 
		          <ul>
		            <li>Enhance dialogs with smart fields (code assist) where applicable: 
		              Main tab, Detail formatter</li>
		          </ul>
		        <b>Evaluations</b> 
		          <ul>
		            <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> Enhance evaluation popups 
		              with key-bindings to dismiss/save results [Kevin Barnes]</li>
		            <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> Enhance 'inspect' popup 
		              to display variable details in-line</li>
		          </ul>
		        <b>JDK 1.5 Support</b> 
		          <ul>
		            <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> Enhance JDI client to support 
		              1.5 extensions [Luc Bourlier]</li>
		          </ul>
		        <b>Bug Fixing</b>
			</blockquote>
		</div>
		<div class="homeitem3col">
		<h3>3.0 Development Effort - Milestone 7 (Friday, February 13th)</h3>
			<blockquote>
				<b>Scalability Issues</b> [1 day, Jared Burns] 
		          <ul>
		            <li>Create a separate activity for &quot;Applet Development&quot; 
		              to filter the Applet launch config type from the launch dialog, 
		              launch shortcuts, and launch history.</li>
		          </ul>
		        <b>Source Lookup</b> [2 days, Luc Bourlier] 
		          <ul>
		            <li>Support JSP source lookup in Java source locator (i.e. support 
		              source lookup based on default stratum in debug target, via JSR045)</li>
		          </ul>
		        <b>Runtime Classpath</b> [7 days, Darin Wright] 
		          <ul>
		            <li>Support appending/prepending the default buildpath</li>
		            <li>Enhance support for specifying/viewing a runtime classpath in 
		              the Classpath tab</li>
		          </ul>
		        <b>Refactoring Participants</b> [5 days, Luc Bourlier] 
		          <ul>
		            <li>Breakpoints</li>
		            <li>Java launch configurations</li>
		          </ul>
		        <b>Bug Fixing</b>
			</blockquote>
		</div>
		<div class="homeitem3col">
		<h3>3.0 Development Effort - Milestone 6 (Friday, December 19th)</h3>
			<blockquote>
				<img src="/eclipse/debug/images/ok.gif" width="10" height="10"> <b>Migrate to Equinox (OSGi) 
		          Runtime </b><br><br>
		        <img src="/eclipse/debug/images/progress.gif"> <b>Bug Fixing: Reduce the bug backlog</b><br><br>
		        <b>Leak Analysis</b><br><br>
		        <b>Revisit Runtime Classpath</b> 
		          <ul>
		            <li>There are various bugs relating to specifying runtime classpaths 
		              in Java launch configurations. We are re-examing our classpath support 
		              to determine how these problems can be solved.</li>
		          </ul>
			</blockquote>
		</div>
		<div class="homeitem3col">
		<h3>3.0 Development Effort - Milestone 5 (Friday, November 21st)</h3>
			<blockquote>
				<b><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> Remove Dependency on Xerces 
		          plug-in</b>
		        <img src="/eclipse/debug/images/progress.gif"> <b>Classpath</b> 
		          <ul>
		            <li>Support to prepend and append to the default runtime classpath 
		              and bootpath (<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=34297" target="_blank">bug 
		              34297</a>)</li>
		          </ul>
			</blockquote>
		</div>
		<div class="homeitem3col">
		<h3>3.0 Development Effort - Milestone 4 (Friday, October 10th)</h3>
			<blockquote>
				<b>Classpath</b> [Darin S] [5 days] 
		          <ul>
		            <li><img src="/eclipse/debug/images/defer.gif"> [M5] Support to prepend and append to the default 
		              runtime classpath and bootpath (<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=34297" target="_blank">bug 
		              34297</a>)</li>
		          </ul>
		        <b>Breakpoints</b> [Luc B] [4 days] 
		          <ul>
		            <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> Tests for breakpoint location 
		              verification (<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=42555" target="_blank">bug 
		              42555</a>)</li>
		            <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> Rework breakpoint creation 
		              actions to work on mutli-selection (for example, method breakpoints) 
		              (<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=22960" target="_blank">bug 
		              22960</a>)</li>
		            <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> Java breakpoint listener 
		              API change (<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=37760" target="_blank">bug 
		              37760</a>)</li>
		          </ul>
		        <b>Concurrency </b>[Luc B] [1 day] 
		          <ul>
		            <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> Use jobs for evaluation 
		              support in the Java debug model to serialize evaluations per target 
		              thread (<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=42557" target="_blank">bug 
		              42557</a>)</li>
		          </ul>
			</blockquote>
		</div>
		<div class="homeitem3col">
		<h3>3.0 Development Effort - Milestone 3 (Friday, August 29th)</h3>
			<blockquote>
				<b>Re-work Breakpoint Properties dialog</b> [1 person week] [Jared B] 
		          <ul>
		            <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> Re-work the Breakpoint Properties 
		              dialog to be a &quot;real&quot; properties dialog with pages. Split 
		              breakpoint properties into serveral pages providing the highly used 
		              options on the first page, and less commonly used options on subsequent 
		              pages.</li>
		          </ul>
		        <b>Breakpoint Enhancements</b> [2 person weeks] [Luc B] 
		          <ul>
		            <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> Support for breakpoints 
		              in external source</li>
		            <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> Use background job to validate 
		              breakpoint location in source code (using JDOM/AST)</li>
		            <li><img src="/eclipse/debug/images/defer.gif"> [M4] Tests for breakpoint location verification</li>
		            <li><img src="/eclipse/debug/images/defer.gif"> [M4] Re-work breakpoint creation actions to 
		              work on mutli-selection (for example, method breakpoints)</li>
		          </ul>
		        <b>Refactoring </b>[1 person week] [Darin S] 
		          <ul>
		            <li><img src="/eclipse/debug/images/defer.gif"> [M5] Update Java launch configs when relevant 
		              type refactorings occur</li>
		          </ul>
		        <b>Concurrency</b> [1 person day] [Luc B] 
		          <ul>
		            <li><img src="/eclipse/debug/images/defer.gif"> [M4] Use jobs for evaluation support in the 
		              Java debug model</li>
		            <li><img src="/eclipse/debug/images/defer.gif"> [M4] Serialize evaluations per target thread</li>
		          </ul>
		        <b>Java Family Example</b> [2 person week] [Luc B, Darin W] 
		          <ul>
		            <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> Tomcat launcher</li>
		            <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> JSP source locator</li>
		          </ul>
			</blockquote>
		</div>
		<div class="homeitem3col">
		<h3>3.0 Development Effort - Milestone 2 (Friday, July 18th)</h3>
			<blockquote>
				<b>Re-work Breakpoint Properties dialog</b> [1 person week] 
		          <ul>
		            <li><img src="/eclipse/debug/images/defer.gif"> [M3] Re-work the Breakpoint Properties dialog 
		              to be a &quot;real&quot; properties dialog with pages. Split breakpoint 
		              properties into serveral pages providing the highly used options 
		              on the first page, and less commonly used options on subsequent 
		              pages.</li>
		          </ul>
		        <b>Support for strata in Java Debug Model API</b> [2 person weeks] 
		          <ul>
		            <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> Add API to create breakpoints 
		              in arbitrary strata. Demonstrate the ability to set breakpoints 
		              and step in JSP source.</li>
		          </ul>
			</blockquote>
		</div>
		<div class="homeitem3col">
		<h3>3.0 Development Effort - Milestone 1</h3>
			<blockquote>
				<b>JSR045</b> [Luc B] 
		          <ul>
		            <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> implementation of JSR045 
		              in JDI client</li>
		          </ul>
		        <b>Object Browsers</b> [Joe S] 
		          <ul>
		            <li><img src="/eclipse/debug/images/progress.gif"> [M4, M5] custom object browser for Maps</li>
		          </ul>
			</blockquote>
		</div>
		<div class="homeitem3col">
		<h3>Bug Resolution</h3>
			<ul>
				<li><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&classification=Eclipse&product=JDT&component=Debug&version=3.0&version=3.0.1&version=3.0.2&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&resolution=FIXED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Bug+Number&field0-0-0=noop&type0-0-0=noop&value0-0-0=" target="_blank">Bug Fixes Released to 3.0</a></li>
			</ul>
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
