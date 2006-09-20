<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#
	# Author: 		Michael Rennie
	# Date:			September 19, 2006
	#
	# Description: the dev plan for 3.2 for JDT
	#
	#
	#****************************************************************************
	
	
	$pageTitle 		= "JDT Debug 3.2 Release Plan";
	$pageKeywords	= "debug, platform, debugging, debugger, breakpoints, launching, release, plan";
	$pageAuthor		= "Debug Team";
	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<div class="homeitem3col">
			<h3>Overall  Plan</h3>
			
			<h4>Overall Themes for JDT Debug:</h4>
	        <ul>
		        <li><i>Scaling Up</i></li>
		        <li><i>Simple to Use</i></li>
		        <li><i>Appealing to the Broader Community</i></li>
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
	        	<b>Enhance multithreaded debugging</b>
	        		<ul>
	        			<li>Allow resuming a single thread when a breakpoint suspends 
		                  the entire VM</li>
		                <li>Provide convenience actions to navigate from locks to owning 
		                  threads in the Debug view</li>
	        		</ul>
	        		<b>Enhance Java breakpoints</b>
	        		<ul>
	        			<li>Create Java exception breakpoints from catch clauses in the 
		                  Java editor</li>
		                <li>Provide breakpoint decorators for associated members in the 
		                  Java editor outline and variables view</li>
		                <li>Display breakpoints associated with Java class libraries as 
		                  a single group in the Breakpoints view when the &quot;Show &gt; 
		                  Files&quot; option is selected (i.e. grouped under &quot;rt.jar&quot;)</li>
		                <li>Many users do not know the &quot;suspend on uncaught exception&quot; 
		                  and &quot;suspend on compilation error&quot; preferences exist 
		                  and are often confused when the debugger suspends when no breakpoints 
		                  are present in the breakpoints view. Making the preferences 
		                  more visible, perhaps has breakpoints in the breakpoints view, 
		                  would make the options more visible and easier to work with.</li>
			        		</ul>
			        <b>Enhance Java launch configuration editing</b>
	        		<ul>
	        			<li><img src="/eclipse/debug/images/defer.gif">Simplify reordering 
		                  and editing of runtime class paths</li>
		                <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> Improve the UI for setting 
		                  the working directory</li>
	        		</ul>
	        		<b>Enhance JRE management</b>
	        		<ul>
	        			<li>Simplify editing of javadoc locations and source attachments 
                  		for a JRE's libraries</li>
	        		</ul>
	        		<b>Enhance the Java scrapbook and Display view</b>
	        		<ul>
	        			<li><img src="/eclipse/debug/images/defer.gif">The Java scrapbook 
		                  and Display view require extensive work to catch up with the 
		                  Java editor in terms of features (quick fix, undo/redo, auto 
		                  completion, support for import statements, etc.).</li>
	        		</ul>
	        		<b>Appealing to the Broader Community</b>
	        		<ul>
	        			<li>Add support for Java SE 6 features</li>
            			<li>Ensure Java debugger works with the WTK</li>
	        		</ul>
			</blockquote>
		</div>
		<div class="homeitem3col">
		<h3>3.2 Development Effort - Milestone 6 (Friday, March 31th)</h3>
			<blockquote>
	        		<ul>
	        			<li>Support classpath variables for native library locations (bug 125082)</li>
        				<li>Bug fixing</li>
	        		</ul>
			</blockquote>
		</div>
		<div class="homeitem3col">
		<h3>3.2 Development Effort - Milestone 5 (Friday, February 17th)</h3>
			<blockquote>
        		<ul>
        			<li><img src="/eclipse/debug/images/ok.gif" width="10" height="10">API to query a VM install's system 
			          properties (IVMInstall3)</li>
			        <li><img src="/eclipse/debug/images/defer.gif">Investigate use of content 
			          types to identify launchable Java files (mains, Applets, etc.).</li>
			        <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10">Display thread groups in the 
			          debug view</li>
			        <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10">Launch enhancements 
			          <ul>
			            <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10">Investigate ways to reduce 
			              the number of launch shortcuts applicable to selections</li>
			            <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10">Provide common &quot;Java&quot; 
			              property tests for Java launch shortcuts, for use by JUnit, PDE, 
			              SWT</li>
			          </ul>
			        </li>
        		</ul>
			</blockquote>
		</div>
		<div class="homeitem3col">
		<h3>3.2 Development Effort - Milestone 4 (Friday, December 16th)</h3>
			<blockquote>
	        		<ul>
	        			<li><img SRC="progress.gif"> Enhance the Java class path tab to simplify 
				          reordering and editing of runtime class paths</li>
				        <li>Launch enhancements 
				          <ul>
				            <li>Investigate ways to reduce the number of launch shortcuts applicable 
				              to selections</li>
				            <li>Provide common &quot;Java&quot; property tests for Java launch 
				              shortcuts, for use by JUnit, PDE, SWT</li>
				          </ul>
				        </li>
				        <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10">Extensible execution environments 
				          <ul>
				            <li>Provide an extension to allow contribution of execution environment 
				              descriptions (for JREs), and delegates to classify JREs</li>
				          </ul>
				        </li>
	        		</ul>
			</blockquote>
		</div>
		<div class="homeitem3col">
		<h3>3.2 Development Effort - Milestone 3 (Friday, November 4th)</h3>
			<blockquote>
	        		<ul>
	        			<li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> Java breakpoint refactoring 
				          test suite</li>
				        <li><img SRC="progress.gif"> Enhance the Java class path tab to simplify 
				          reordering and editing of runtime class paths</li>
				        <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> Improve the UI the setting the 
				          working directory on a Java application launch configuration</li>
	        		</ul>
			</blockquote>
		</div>
		<div class="homeitem3col">
		<h3>3.2 Development Effort - Milestone 2 (Friday, September 23rd)</h3>
			<blockquote>
	        		<ul>
	        			<li><img src="/eclipse/debug/images/defer.gif">Support to create Java 
				          exception breakpoints from catch clauses and references to exceptions 
				          in the Java editor</li>
				        <li><img src="/eclipse/debug/images/defer.gif">Breakpoint decorators 
				          in Java editor outline and variables view to show which members have 
				          associated breakpoints</li>
	        		</ul>
			</blockquote>
		</div>
		<div class="homeitem3col">
		<h3>Bug Resolution</h3>
			<ul>
				<li><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&classification=Eclipse&product=JDT&component=Debug&version=3.2&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&resolution=FIXED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Bug+Number&field0-0-0=noop&type0-0-0=noop&value0-0-0=">Bug Fixes Released to 3.2</a></li>
			</ul>
		</div>
	</div>
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Quick Links</h6>
			<ul>
				<li><a href="/eclipse/debug/documents.php">Articles & Documents</a></li>
				<li><a href="/eclipse/debug/get_involved.php">Get Involved!</a></li>
				<li><a href="/eclipse/debug/contribute.php">How To Contribute</a></li>
				<li><a href="/eclipse/debug/who.php">Who We Are</a></li>
				<li><a href="http://eclipse-debug.blogspot.com/">Debug Team Blog</a></li>
				<li><a href="/eclipse/debug/about.php">About this content</a></li>
			</ul>
		</div>
		<div class="sideitem">
			<h6>Plugins</h6>
			<ul>
				<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.jdt.debug" target="_blank">jdt.debug</a></li>
		        <li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.jdt.debug.ui" target="_blank">jdt.debug.ui</a></li>
		        <li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.jdt.launching" target="_blank">jdt.launching</a></li>
		        <li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.jdt.launching.j9" target="_blank">jdt.launching.j9</a></li>
		        <li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.jdt.launching.macosx" target="_blank">jdt.launching.macosx</a></li>
		        <li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.jdt.debug.tests." target="_blank">jdt.debug.tests</a></li>
		        <li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.jdt.debug.jdi.tests" target="_blank">jdt.debug.jdi.tests</a></li>
			</ul>
		</div>
	</div>
</div>


EOHTML;

	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
