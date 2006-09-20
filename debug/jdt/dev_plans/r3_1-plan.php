<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#
	# Author: 		Michael Rennie
	# Date:			September 19, 2006
	#
	# Description: JDT 3.1 release plan
	#
	#
	#****************************************************************************
	
	
	$pageTitle 		= "JDT Debug 3.1 Release Plan";
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
			        <li>Built to last</li>
			        <li>Simple to use</li>
			        <li>J2SE 5 support</li>
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
	        	<b>J2SE5 feature support</b>
	        		
        		<b>Enhanced support for launching SWT applications</b>
        		
        		<b>Enhanced Java editing features in debug contexts (conditional breakpoints, 
          			evaluations, etc.)</b>
        		
        		<b>JRE management</b>
        		<ul>
        			<li><font color="#808080">[M6]</font> <img src="/eclipse/debug/images/ok.gif" width="10" height="10"> 
                  support a javadoc location per library/jar</li>
        		</ul>
        		<b>Classpath management</b>
        		<ul>
        			<li>rework the classpath tab to mimic the source lookup tab with 
	                  improved support for editing and ordering entries, as well as 
	                  support for an extensible set of classpath entry types</li>
	                <li><font color="#808080">[M6]</font> support for native classpath 
	                  entries (adding shared libraries to the command line)</li>
        		</ul>
        		<b>Evaluations</b>
        		<ul>
        			 <li><font color="#808080">[M4]</font> <img src="/eclipse/debug/images/ok.gif" width="10" height="10"> 
	                  support evaluations when assigning a value to a variable in 
	                  the debugger</li>
	        		</ul>
	        		<b>Ease of use reviews/enhancements </b>
	        		<ul>
	        			li><font color="#808080">[M3]</font> <img src="/eclipse/debug/images/ok.gif" width="10" height="10"> 
	                  paste and navigate Java stack traces in the console (i.e. from 
	                  Bugzilla)</li>
	                <li> <font color="#808080">[M3]</font> <img src="/eclipse/debug/images/ok.gif" width="10" height="10"> 
	                  integrate monitor information in the debug view (to replace 
	                  the Threads &amp; Monitors view)</li>
	                <li><img src="/eclipse/debug/images/defer.gif">assist user in 
	                  scoping breakpoints based on call sequence</li>
	                <li><img src="/eclipse/debug/images/defer.gif">investigate tracepoints</li>
	                <li><img src="/eclipse/debug/images/defer.gif">chaining breakpoints</li>
	                <li> <img src="/eclipse/debug/images/ok.gif" width="10" height="10">extensible logical structures 
	                  for Java debugger 
	                  <ul>
	                    <li><font color="#808080">[M3]</font> <img src="/eclipse/debug/images/ok.gif" width="10" height="10"> 
	                      extension point tosupport contribution of logical structures 
	                      via code snippets</li>
	                    <li><font color="#808080">[M4]</font> <img src="/eclipse/debug/images/ok.gif" width="10" height="10"> 
	                      user interface to allow user defined logical structures</li>
	                  </ul>
	                </li>
	                <li><img src="/eclipse/debug/images/defer.gif">investigate enhancing 
	                  Java editing features in debug contexts (conditional breakpoints, 
	                  scrapbook, etc.)</li>
	                <li><font color="#808080">[M6]</font> <img src="/eclipse/debug/images/ok.gif" width="10" height="10"> 
	                  improved JRE library editing, similar to buildpath jar editnig 
	                  (source path, javadoc location)</li>
	                <li><img src="/eclipse/debug/images/defer.gif"> [<i>PDE now supports 
	                  this</i>] better support for launching SWT based applications</li>
        		</ul>
        		<b>J2SE 5 support - Upgrade JDI client to support new features</b>
        		<ul>
        			<li><font color="#808080">[M1]</font> <img src="/eclipse/debug/images/ok.gif" width="10" height="10"> 
	                  generics</li>
	                <li><font color="#808080">[M1]</font> <img src="/eclipse/debug/images/ok.gif" width="10" height="10"> 
	                  enums</li>
	                <li><font color="#808080">[M1] </font><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> 
	                  varargs</li>
	                <li><font color="#808080">[M4]</font> <img src="/eclipse/debug/images/ok.gif" width="10" height="10"> 
	                  extensible connectors</li>
	                <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> read-only VM (no work 
	                  on our part, a read-only VM has its own JDI implementation)</li>
	                <li><font color="#808080">[M4]</font> <img src="/eclipse/debug/images/ok.gif" width="10" height="10"> 
	                  timeout on connectors</li>
        		</ul>
        		<b>Support for J2SE5 language features in</b>
        		<ul>
        			<li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> breakpoints</li>
	                <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> evaluations 
	                  <ul>
	                    <li><font color="#808080">[M2]</font> <img src="/eclipse/debug/images/ok.gif" width="10" height="10"> 
	                      generics</li>
	                    <li><font color="#808080">[M2]</font> <img src="/eclipse/debug/images/ok.gif" width="10" height="10"> 
	                      enhanced for loop</li>
	                    <li><font color="#808080">[M3]</font> <img src="/eclipse/debug/images/ok.gif" width="10" height="10"> 
	                      varargs</li>
	                    <li><font color="#808080">[M5]</font> <img src="/eclipse/debug/images/ok.gif" width="10" height="10"> 
	                      autoboxing</li>
	                    <li><font color="#808080">[M5]</font> <img src="/eclipse/debug/images/ok.gif" width="10" height="10"> 
	                      enumerations</li>
	                  </ul>
	                </li>
	                <li><font color="#808080">[M3]</font> <img src="/eclipse/debug/images/ok.gif" width="10" height="10"> 
	                  Java debug model API</li>
        		</ul>
			</blockquote>
		</div>
		<div class="homeitem3col">
		<h3>3.1 Development Effort - Milestone 7 (Friday, May 13th)</h3>
			<blockquote>
    			<b>Built to last</b>
		          <ul>
		            <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> Define component.xml</li>
		            <li><img src="/eclipse/debug/images/progress.gif"> Bug fixing</li>
		            <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> Convert to JAR'd plug-in 
		              format</li>
		          </ul>
		        <b>Performance</b>
		          <ul>
		            <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> Define manifest.mf</li>
		            <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> Convert to new NLS format</li>
		            <li><img src="/eclipse/debug/images/progress.gif"> Expand performance test suite</li>
		            <li><img src="/eclipse/debug/images/progress.gif"> Analyze performance problems</li>
		          </ul>
			</blockquote>
		</div>
		<div class="homeitem3col">
		<h3>3.1 Development Effort - Milestone 6 (Friday, April 1st)</h3>
			<blockquote>
				<b>Built to Last</b>
		          <ul>
		            <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> support for a javadoc location 
		              per system library</li>
		            <li><img src="/eclipse/debug/images/progress.gif"> support for native classpath entries</li>
		            <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> CPL to EPL conversion</li>
		            <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> support to define detail 
		              formatters for interfaces</li>
		            <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> API to translate runtime 
		              classpath entries into a source lookup path (collection of source 
		              containers)</li>
		            <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> API for abstract Java launcher 
		              that can be subclassed</li>
		            <li>Bug fixing</li>
		          </ul>
		        <b>Performance</b>
		          <ul>
		            <li>Expand performance test suite</li>
		            <li>Analyze performance problem</li>
		          </ul>
			</blockquote>
		</div>
		<div class="homeitem3col">
		<h3>3.1 Development Effort - Milestone 5 (Friday, February 18th)</h3>
			<blockquote>
				<b>Support for J2SE5 features</b>
		          <ul>
		            <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> enumerations in evaluations 
		              [Luc Bourlier]</li>
		            <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> autoboxing in evaluations 
		              [Luc Bourlier]</li>
		          </ul>
		        <b>User defined logical structures</b>
		          <ul>
		            <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> UI polish - enhancements 
		              to preference page, additional actions to edit/create logical structures 
		              [Jared Burns]</li>
		            <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> support for recursive resolution 
		              of logical structures [Jared Burns] </li>
		          </ul>
			</blockquote>
		</div>
		<div class="homeitem3col">
		<h3>3.1 Development Effort - Milestone 4 (Friday, December 17th)</h3>
			<blockquote>
				<b>Built to last</b>
		          <ul>
		            <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> support evaluations when 
		              assigning a value to a variable [Jared Burns]</li>
		          </ul>
		        <b>Simple to use</b>
		          <ul>
		            <li> <img src="/eclipse/debug/images/defer.gif">investigate scoping 
		              breakpoints based on call sequence [Luc Bourlier] </li>
		            <li><img src="/eclipse/debug/images/defer.gif">investigate chaining 
		              breakpoints [Luc Bourlier]</li>
		            <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> user defined logical structures 
		              [Luc Bourlier]</li>
		            <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> formatting support in the 
		              stack trace console (when pasting strack traces that have been mangled 
		              by Bugzilla) [Kevin Barnes]</li>
		          </ul>
		        <b>Support for J2SE5 features</b>
		          <ul>
		            <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> extensible connectors [Kevin 
		              Barnes]</li>
		            <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> timeout on connectors [Kevin 
		              Barnes]</li>
		            <li><img src="/eclipse/debug/images/defer.gif">enumerations in evaluations 
		              [Luc Bourlier]</li>
		          </ul>
			</blockquote>
		</div>
		<div class="homeitem3col">
		<h3>3.1 Development Effort - Milestone 3 (Friday, November 5th)</h3>
			<blockquote>
				<b>Ease of use reviews/enhancements</b>
		          <ul>
		            <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> integrate monitor information 
		              in the debug view [Luc Bourlier]</li>
		            <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> paste and navigate Java 
		              stack traces in the console (i.e. from Bugzilla/JUnit tests, etc.) 
		              [Kevin Barnes]</li>
		            <li><b>[deferred to M4]</b> assist user in scoping breakpoints based 
		              on call sequence [Jared Burns]</li>
		            <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> support for user extensible 
		              logical structures via extension point [Jared Burns, Luc Bourlier] 
		            </li>
		          </ul>
		        <b>Support for J2SE5 language features in</b>
		          <ul>
		            <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> Java debug model API [Darin 
		              Wright]</li>
		            <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> support for varargs in debugger 
		              evaluations [Luc Bourlier]</li>
		          </ul>
		        <b>JDI Client J2SE5 enhancements</b>
		          <ul>
		            <li><b>[deferred to M4]</b> extensible connectors [Luc Bourlier]</li>
		            <li><b>[deferred to M4]</b> timeout on connectors [Luc Bourlier]</li>
		          </ul>
		        <b>Bug Fixing Rotation</b>
			</blockquote>
		</div>
		<div class="homeitem3col">
		<h3>3.1 Development Effort - Milestone 2 (Friday, September 24th)</h3>
			<blockquote>
				<b>Background communication</b>
		          <ul>
		            <li>background communication in the Threads and Monitors view to avoid 
		              blocking the UI thread [<i>Jared Burns</i>] </li>
		          </ul>
		        <b>Ease of use reviews/enhancements</b>
		          <ul>
		            <li><b>[deferred to M3]</b> rework the Threads and Monitors to be 
		              task oriented [Jared Burns]</li>
		            <li><b>[in progress, complete in M3]</b> paste and navigate Java stack 
		              traces in the console (i.e. from Bugzilla) [Kevin Barnes]</li>
		            <li><b>[in progress]</b> investigate scrapbook usage patterns and 
		              estimate work effort required to improve and/or rework it [Darin 
		              Wright]</li>
		          </ul>
		        <b>Support for J2SE5 language features in</b>
		          <ul>
		            <li><img src="/eclipse/debug/images/progress.gif"> breakpoints [Luc Bourlier]</li>
		            <li><img src="/eclipse/debug/images/progress.gif"> evaluations [Luc Bourlier] 
		              <ul>
		                <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> generics</li>
		                <li><img src="/eclipse/debug/images/ok.gif" width="10" height="10"> enhanced for loop</li>
		              </ul>
		            </li>
		            <li><img src="/eclipse/debug/images/progress.gif"> Java debug model API [Luc Bourlier]</li>
		          </ul>
			</blockquote>
		</div>
		</div>
		<div class="homeitem3col">
		<h3>Bug Resolution</h3>
			<ul>
				<li><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&classification=Eclipse&product=JDT&component=Debug&version=3.1&version=3.1.1&version=3.1.2&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&resolution=FIXED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Bug+Number&field0-0-0=noop&type0-0-0=noop&value0-0-0=" target="_blank">Bug Fixes Released to 3.1</a></li>
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
