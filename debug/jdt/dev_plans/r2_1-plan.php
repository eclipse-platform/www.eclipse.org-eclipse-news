<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#
	# Author: 		Michael Rennie
	# Date:			September 10, 2006
	#
	# Description: This page describes the 2.1 release plan
	#
	#
	#****************************************************************************
	
	
	$pageTitle 		= "JDT Debug 2.1 Release Plan";
	$pageKeywords	= "debug, platform, debugging, debugger, breakpoints, launching, release, plan";
	$pageAuthor		= "Debug Team";
	
	include("../../_sideCommon.php");
	include("../_pluginCommon.php");
	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<div class="homeitem3col">
			<h3>Overall  Plan</h3>
			
			<h4>Overall Themes for JDT Debug:</h4>
	        <ul>
		        <li>robust and enhance</li>
		        <li>reduce gestures, improve usability</li>
		        <li>improve documentation, write articles</li>
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
	        	<b>Architectural issues </b>
		          <ul>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> JDI client review</li>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> support for wrappering the 
		              Java debug model - use of adapters</li>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> synchronization/serialization 
		              of background evaluations</li>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> vulnerability to runtime 
		              exceptions in extension points and listeners</li>
		          </ul>
		        <b>Performance </b>
		          <ul>
		            <li>memory leak pass</li>
		          </ul>
		        <b>Improve test coverage</b> (<img src="/eclipse/debug/images/progress.gif"> so far, we have 14% 
		          more automated tests since 2.0)
		        <b>Launch configurations</b>
		          <ul>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> stop in main option</li>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> applet launch configuration</li>
		          </ul>
		        <b>JREs</b>
		          <ul>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> JRE container should include 
		              archives in the default &quot;extenstion&quot; folder</li>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> search for locally installed 
		              JREs</li>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> import/export JREs as workspace 
		              preferences</li>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> support for IBM 1.4 JRE</li>
		            <li>a global perference for java executable (i.e. java vs. javaw)</li>
		          </ul>
		        <b>Launch Configurations</b>
		          <ul>
		            <li>Support to search for main types which inherit main methods</li>
		          </ul>
		        <b>JDI Client</b>
		        <ul>
		          <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> support JDI 1.3 (except JSR045)</li>
		        </ul>
		        <b>Variables</b>
		          <ul>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> support for multi-select 
		              details (i.e. toString() of more than one variable)</li>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> open declared/concrete type</li>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> pluggable detail formatters</li>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> support a complete range 
		              of filters for static, final, public, protected.... </li>
		          </ul>
		        <b>Breakpoints</b>
		          <ul>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> instance filters</li>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> method entry breakpoints 
		              for &quot;source&quot; types</li>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> improved performance of 
		              method entry breakpoints when exact signature is known</li>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> code assist for breakpoint 
		              conditions</li>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> conditional breakpoint that 
		              suspends when value of expression changes</li>
		          </ul>
		        <b>Evaluations</b>
		          <ul>
		            <li>support for statements 
		              <ul>
		                <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> for</li>
		                <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> while</li>
		                <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> if/else</li>
		                <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> variable declarations</li>
		              </ul>
		            </li>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> support &quot;watch items&quot;</li>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> support for &quot;execute&quot; 
		              action (in addition to inspect &amp; display)</li>
		          </ul>
		        <b>Locks &amp; Montiors</b>
		          <ul>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> new view showing montiors</li>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> deadlock detection</li>
		            <li>monitors requires that the classic VM be used. Can we add a more 
		              prominent &quot;use classic&quot; mode in the Java launch config 
		              such that the montiors can be used? This should be a VM specific 
		              property.</li>
		            <li>display message in view when target VM does not support monitor 
		              information</li>
		          </ul>
		        <b>Stepping</b>
		          <ul>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> support for &quot;step into 
		              selection&quot; - use code resolve to step into a selected method 
		              (name) on the current line</li>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> create step filters from 
		              the debug view, while stepping, based on the selected stack frame.</li>
		          </ul>
		        <b>Source Lookup</b>
		          <ul>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> Bug fixes related to overlapping 
		              source locations</li>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> A new source location for 
		              package fragment roots</li>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> Support for finding all 
		              source elements with the same name (not just the first)</li>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> Support for source folder 
		              attachements</li>
		          </ul>
		        <b>Console</b>
		          <ul>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> hyperlinks from stack traces 
		              to associated source code (standard VM)</li>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> hyperlinks for J9 stack 
		              traces</li>
		          </ul>
		        <b>Articles</b>
		          <ul>
		            <li><img src="progress.gif"> Launching Java Applications Programmatically</li>
		          </ul>
		        <b>Documentation </b>
		          <ul>
		            <li>rework online documentation layout/flow</li>
		          </ul>
			</blockquote>
			
			<h4>Deferred Items </h4>
	      	<blockquote>
	      	<b>Scrapbook</b>
	          <ul>
	            <li>make scrapbook generally easier to use, more visible</li>
	            <li>perhaps create a scrapbook view which does not require a file 
	              (.snip) to be created</li>
	            <li>investigate global variable support</li>
	            <li>investigate textual import support</li>
	            <li>investigate evaluating snippets from Java comments</li>
	          </ul>
	        <b>Refactoring</b>
	          <ul>
	            <li>update Java lanch configurations in conjunction with refactorings 
	              <b>[</b><b>Depends on &quot;refactoring participant&quot; support 
	              from JUI]</b></li>
	          </ul>
	        <b>JREs</b>
	          <ul>
	            <li>display VM properties (java -version) on demand</li>
	            <li><b></b> a global perference for java executable (i.e. java vs. 
	              javaw)</li>
	          </ul>
	        <b>Breakpoints</b>
	          <ul>
	            <li>migrate to retargetable breakpoint actions for add/remove breakpoint, 
	              etc. </li>
	            <li>history for breakpoint conditions</li>
	            <li>create exception breakpoint from console stack trace</li>
	            <li> breakpoints in external source</li>
	          </ul>
	        <b>Console</b>
	          <ul>
	            <li>investigate pasting stack traces into the console (from Bugzilla), 
	              to navigate Eclipse from the stack trace</li>
	          </ul>
	        <b>Evaluations</b> 
	          <ul>
	            <li>support for the following statements: 
	              <ul>
	                <li>assert</li>
	                <li>try/catch</li>
	                <li>switch</li>
	              </ul>
	            </li>
	            <li>watch item persistence</li>
	          </ul>
	        <b>Launch Configurations</b>
	          <ul>
	            <li>support for Java Working Sets</li>
	            <li><b></b> Support to search for main types which inherit main methods</li>
	          </ul>
	        <b>JDI Client</b>
	          <ul>
	            <li>JSR045</li>
	          </ul>
	      	</blockquote>
		</div>
		<div class="homeitem3col">
		<h3>2.1 Development Effort - Milestone 5 (February 7th, 2003)</h3>
			<blockquote>
		        <b>Architecture</b>
		          <ul>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> support for wrappering Java 
		              debug model - use of adapters where applicable</li>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> protect against exceptions 
		              in extension points and listener lists</li>
		          </ul>
		        <b>Evaluation</b>
		          <ul>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> support for &quot;execute&quot; 
		              action (in addition to inspect &amp; display)</li>
		            <li>address watch item update issues</li>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> action to add a variable 
		              to the watch list</li>
		          </ul>
		        <b>Locks &amp; Monitors</b>
		          <ul>
		            <li>display message in Monitors view when target VM does not support 
		              monitor information</li>
		          </ul>
		        <b>Breakpoints</b>
		          <ul>
		            <li><b>[Deferred for post 2.1]</b> breakpoints in external source</li>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> conditional breakpoint that 
		              suspends when value of expression changes</li>
		          </ul>
		        <b>Variables</b>
		          <ul>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> Address accessibility issues 
		              with new vairable filters dialog</li>
		          </ul>
		        <b>Actions</b>
		          <ul>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> Workbench key binding support</li>
		          </ul>
		       <b>Step Filters</b>
		          <ul>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> create step filters from 
		              the debug view, while stepping, based on the selected stack frame</li>
		          </ul>
		        <b>JREs</b>
		          <ul>
		            <li><b>[Deferred for post 2.1]</b> a global perference for java executable 
		              (i.e. java vs. javaw)</li>
		          </ul>
		        <b>Launch Configurations</b>
		          <ul>
		            <li><b>[Deferred for post 2.1]</b> Support to search for main types 
		              which inherit main methods</li>
		          </ul>
		        <b>Source Lookup</b>
		          <ul>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> Support for finding all 
		              source elements with the same name (not just the first)</li>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> Support for source folder 
		              attachments</li>
		          </ul>
		        <b><img src="/eclipse/debug/images/ok.gif" height=10 width=10> Allow for per view settings </b>
		            for qualified name toggle, and variable filters
        		<b><a href="http://dev.eclipse.org/bugs/buglist.cgi?short_desc_type=allwordssubstr&product=JDT&component=Debug&target_milestone=2.1&target_milestone=2.1+M5&long_desc_type=allwordssubstr&bug_file_loc_type=allwordssubstr&keywords_type=allwords&keywords=&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&bug_severity=blocker&bug_severity=critical&bug_severity=major&bug_severity=normal&bug_severity=minor&bug_severity=trivial&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&changedin=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&namedcmd=2.0.1+Fixed%27n+Verified&newqueryname=&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">Bug 
          		Fixing</a></b> - Fixing defects
			</blockquote>
		</div>
		<div class="homeitem3col">
		<h3>Bug Resolution</h3>
		<ul>
			<li><a href="http://dev.eclipse.org/bugs/buglist.cgi?short_desc_type=allwordssubstr&short_desc=&product=JDT&component=Debug&target_milestone=2.1&target_milestone=2.1+M1&target_milestone=2.1+M2&target_milestone=2.1+M3&target_milestone=2.1+M4&target_milestone=2.1+M5&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&keywords_type=allwords&keywords=&bug_status=VERIFIED&resolution=FIXED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&changedin=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&namedcmd=2.0.1+Fixed%27n+Verified&newqueryname=&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">Fixes 
          released to 2.1</a></li>
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
