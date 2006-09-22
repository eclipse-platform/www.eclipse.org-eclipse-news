<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# template.php
	#
	# Author: 		Michael Rennie
	# Date:			August 25, 2006
	#
	# Description: This page outlines the debug project 2.1 test matrix
	#
	#
	#****************************************************************************
	
	
	$pageTitle 		= "Debug Project 2.1 Test Matrix";
	$pageKeywords	= "debug, platform, debugging, debugger, breakpoints, launching, test, testing, matrix, plan";
	$pageAuthor		= "Debug Team";
	
	include("_sideCommon.php")
	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<div class="homeitem3col">
			<h3>Testers</h3>
			<p>Committers: Darin Wright</p>
			<p>Community: Anyone who wants to help</p>
		</div>
		<div class="homeitem3col">
			<h3>JRE Grid</h3>
			<p>The following JREs should be considered when testing. Committers have been 
			  assigned a JRE and platform to test on. The community can chose any JRE and 
			  platform. </p>
			  <div align="center">
				<table width="75%" border="1">
				  <tr> 
				    <td width="18%">&nbsp;</td>
				    <td width="18%"><b>JDK 1.3.1</b></td>
				    <td width="18%"><b>JDK 1.4.2</b></td>
				    <td width="18%"><b>IBM 1.3.1</b></td>
				    <td width="18%"><b>IBM 1.4.2</b></td>
				    <td width="18%"><b>J9</b></td>
				  </tr>
				  <tr> 
				    <td width="18%"><b>Win 2000</b></td>
				    <td width="18%">&nbsp;</td>
				    <td width="18%">&nbsp;</td>
				    <td width="18%">&nbsp;</td>
				    <td width="18%">&nbsp;</td>
				    <td width="18%">&nbsp;</td>
				  </tr>
				  <tr> 
				    <td width="18%"><b>Win XP</b></td>
				    <td width="18%">&nbsp;</td>
				    <td width="18%">&nbsp;</td>
				    <td width="18%">&nbsp;</td>
				    <td width="18%">&nbsp;</td>
				    <td width="18%">&nbsp;</td>
				  </tr>
				  <tr> 
				    <td width="18%"><b>Linux</b></td>
				    <td width="18%">&nbsp;</td>
				    <td width="18%">&nbsp;</td>
				    <td width="18%">&nbsp;</td>
				    <td width="18%">&nbsp;</td>
				    <td width="18%">&nbsp;</td>
				  </tr>
				  <tr> 
				    <td width="18%"><b>Mac</b></td>
				    <td width="18%">&nbsp;</td>
				    <td width="18%">&nbsp;</td>
				    <td width="18%">N/A</td>
				    <td width="18%">N/A</td>
				    <td width="18%">N/A</td>
				  </tr>
				</table>
			</div>
		</div>
		<div class="homeitem3col">
			<h3>Feature Testing</h3>
			<h4>Breakpoints</h4>
				<p>Line Breakpoints</p>
				<ul>
				  <li>creation - double-click in ruler, from &quot;Run&quot; menu, and key-binding 
				    (Ctrl+Shift+B)</li>
				  <li>deletion - from breakpoints view menu &amp; toolbar, from ruler pop-up menu</li>
				  <li>show qualified names</li>
				  <li>enable/disable - from ruler pop-up, breakpoint view context menu</li>
				  <li>suspend VM vs. suspend thread - menu and properties dialog</li>
				  <li>hit count - menu and properties dialog, enabled and disabled hit count via 
				    properties dialog</li>
				  <li>conditions - enabled/disabled, code assist, valid conditions, syntax errors, 
				    runtime errors, suspend on 'true' vs. suspend on change, multi-line conditions, 
				    simple conditions, conditions that take a long time</li>
				  <li>thread restriction</li>
				  <li>instance restriction - available in variables view context menu (only when 
				    VM supports it).</li>
				</ul>
				<p>Exception Breakpoints</p>
				<ul>
				  <li> creation - toolbar in breakpoints view, and from &quot;Run...&quot; menu, 
				    try to assign keybinding</li>
				  <li>deletion</li>
				  <li>show qualified names</li>
				  <li>enable/disable</li>
				  <li>caught vs. uncaught/both</li>
				  <li>scoped exceptions - wild card patterns, specific types, specific packages</li>
				  <li>suspend VM vs. suspend thread</li>
				  <li>hit count</li>
				  <li>thread restriction</li>
				  <li>instance restriction</li>
				</ul>
				<p>Method Breakpoints</p>
				<ul>
				  <li> creation - context menu in outliner, and from &quot;Run...&quot; menu, 
				    try to assign keybinding</li>
				  <li>deletion</li>
				  <li>show qualified names</li>
				  <li>enable/disable</li>
				  <li>entry vs. exit/both</li>
				  <li>source and binary methods</li>
				  <li>suspend VM vs. suspend thread</li>
				  <li>hit count</li>
				  <li>thread restriction</li>
				  <li>instance restriction</li>
				</ul>
				<p>Watchpoints</p>
				<ul>
				  <li> creation - context menu in outliner, and from &quot;Run...&quot; menu, 
				    try to assign keybinding</li>
				  <li>deletion</li>
				  <li>show qualified names</li>
				  <li>enable/disable</li>
				  <li>access vs. modification/both</li>
				  <li>primitives, arrays, objects</li>
				  <li>suspend VM vs. suspend thread</li>
				  <li>hit count</li>
				  <li>thread restriction</li>
				  <li>instance restriction (note that instance restriction will not work for primitives)</li>
				</ul>
				<p>Uncaught Exceptions &amp; Compilation Errors</p>
				<ul>
				  <li> all combinations of &quot;suspend on uncaught exceptions&quot; and &quot;suspend 
				    on compilation errors&quot;</li>
				</ul>
				<hr>
			<h4>Stepping</h4>
				<p>Step tests should be performed in the debug perspective, and in a non-debug 
				  perspective, with and without the debug view present. We do not expect stepping 
				  to work without the debug view present.</p>
				<p>Step Over</p>
				<ul>
				  <li> via toolbar, &quot;Run&quot; menu, keybinding</li>
				  <li>step over a line that will cause a breakpoint to be hit</li>
				  <li>step over a conditional breakpoint - try true and false conditions</li>
				  <li>step over a line that takes a long time to execute</li>
				  <li>rapid stepping - hold down the step over hotkey</li>
				  <li>step over in a non-top stack frame</li>
				  <li>&quot;Reuse editor when displaying source code&quot; preference</li>
				</ul>
				<p>Step Into</p>
				<ul>
				  <li> via toolbar, &quot;Run&quot; menu, keybinding</li>
				  <li>rapid stepping - hold down the step into hotkey</li>
				  <li>step into a location where a conditional breakpoint is hit - try true and 
				    false conditions</li>
				  <li>step into in a non-top stack frame (should not be enabled)</li>
				</ul>
				<p>Step Return</p>
				<ul>
				  <li> via toolbar, &quot;Run&quot; menu, keybinding</li>
				  <li>rapid stepping - hold down the step return hotkey</li>
				  <li>step return from a method that will cause a breakpoint to be hit</li>
				  <li>step return from a method that will take a long time to execute</li>
				  <li>step return from a method that will cause a conditional breakpoint to be 
				    hit - try true and false conditions</li>
				  <li>rapind stepping - hold down the step return hotkey</li>
				  <li>step return from a non-top stack frame</li>
				</ul>
				<p>Step with Filters</p>
				<p>Step with Filters is effectively a &quot;step into&quot;, but the location 
				  that is stepped into may be filtered. Filters are defined from the &quot;Java 
				  &gt; Debug &gt; Step Filters&quot; preference page.</p>
				<ul>
				  <li>Step into a filtered location (should act like a step over)</li>
				  <li>Step thru a filtered location (i.e. step into a filtered method that will 
				    step into a non-filtered method)</li>
				  <li>Step into a filtered location that contains a breakpoint</li>
				  <li>Step into a filtered location that contains a conditional breakpoint - try 
				    true and false conditions</li>
				  <li>Rapid stepping - hold down the step with filters hotkey</li>
				  <li>try class filters, package filters, wild card filters</li>
				  <li>filter static initializers, constructors</li>
				  <li>enable and disable step filters</li>
				  <li>step with filters from a non-top stack frame (should not be enabled)</li>
				</ul>
				<p>Step Into Selection</p>
				<p>Step Into Selection steps into the selected method on the current line of execution, 
				  in the top stack frame.</p>
				<ul>
				  <li>Use context menu and keybinding</li>
				  <li>Step into a method that is not the next method to be stepped into, on the 
				    current line</li>
				  <li>Step into a method that has already been stepped into, on the current line 
				    (should cause error)</li>
				  <li>Step into a method with the same name/signature as a method on the current 
				    line</li>
				  <li>Step into a method that is not on the current line (should not work)</li>
				  <li>Step into a method that is not in the top stack frame (should not work)</li>
				</ul>
				<p>Run to Line</p>
				<ul>
				  <li>Use context menu and keybinding</li>
				  <li>Run to a line in the current method</li>
				  <li>Run to a line in a method further down the stack</li>
				  <li>Run to a line that has already been executed (debug the program again - 
				    see if it gets hit)</li>
				  <li>Run to a line that will never be hit</li>
				</ul>
				<p>Show In...</p>
				<ul>
				  <li> &quot;Show In...&quot; is offered for stack frames</li>
				  <li>shows associated resource (if any) in the resource navigator</li>
				</ul>
				<hr>
			<h4>Variables</h4>
				<p>Rendering</p>
				<ul>
				  <li>show/hide qualified names</li>
				  <li>show/hide static</li>
				  <li>show/hide constants</li>
				  <li>show/hide type names</li>
				  <li>primitive display options - hex, ASCII, unsigned values</li>
				  <li>copy selected variables to clipboard</li>
				</ul>
				<p>Updating</p>
				<ul>
				  <li>update while rapid stepping</li>
				  <li>expansion remains while stepping</li>
				  <li>expansion and selection is remembered between different stack frames selected 
				    in the same thread</li>
				  <li>resuming to a breakpoint in a loop remembers expansion and selection</li>
				  <li>changed variables render in preference specified color</li>
				  <li>change a variable's value - primitives &amp; Strings</li>
				</ul>
				<p>Details</p>
				<ul>
				  <li>show/hide details area</li>
				  <li>use text wrap in details area</li>
				  <li>details update while stepping</li>
				  <li>create detail formatter from preference page</li>
				  <li>create detail formatter from variables view context menu</li>
				  <li>edit detail formatter from variables view context menu</li>
				</ul>
				<p>Navigation</p>
				<ul>
				  <li> open on declared/concrete type/type hierarchy</li>
				  <li>inspect a variable</li>
				  <li>watch a variable</li>
				</ul>
				<hr>
			<h4>Watch Items</h4>
				<ul>
				  <li>Create a watch item before a program starts execution</li>
				  <li>Create a watch item while a program is running</li>
				  <li>Ensure watch item updates while stepping</li>
				  <li>Watch item update when breakpoint suspends all threads</li>
				  <li>Add multiple watch items - ensure they all update while stepping</li>
				  <li>Create a watch item with compilation errors</li>
				  <li>Create a watch item with runtime errors</li>
				</ul>
				<hr>
			<h4>Launching Framework</h4>
				<p>Open Launch Dialog</p>
				<ul>
				  <li> Pressing run/debug in a new workspace with no launches opens launch dialog</li>
				  <li>Using &quot;Run...&quot;/&quot;Debug...&quot; from drop-down menus &amp; 
				    Run menu</li>
				  <li>Ctrl-Click a launch in the drop down launch history</li>
				  <li>Select a debug element in the debug view - context menu should contain launch 
				    config name + &quot;...&quot;</li>
				</ul>
				<p>Manipulation</p>
				<ul>
				  <li> Delete a config</li>
				  <li>Rename a config (also updated in history/favorites)</li>
				  <li>Duplicate a config</li>
				</ul>
				<p>Launch History</p>
				<ul>
				  <li>Create a favorite from the preference page</li>
				  <li>Create a favorite from the &quot;Common&quot; tab</li>
				  <li>Re-order favorites and launch history</li>
				  <li>Remove favorites and launch history items</li>
				  <li>Import a shared launch configuration (i.e. into the workspace) that is a 
				    favorite (from file system or repository) - should show up in favorites</li>
				</ul>
				<p>Launching</p>
				<ul>
				  <li> Launching from history</li>
				  <li>Re-launch last run/debug - hotkeys</li>
				  <li>Re-launch from history menu in &quot;Run&quot; menu</li>
				  <li>Re-launch from debug view</li>
				  <li>Launch history/last launch persistence across workbench invocations</li>
				  <li>Perspective switching when launching based on global preferencs</li>
				  <li>Perspective switching overridden  with launch config specific settings</li>
				  <li>&quot;Remove terminated lanches&quot; preferences</li>
				  <li>&quot;Build (if required) before launching&quot; preference</li>
				  <li>&quot;Save dirty editors&quot; preference - never/prompt/auto</li>
				</ul>
				<hr>
			<h4>Evaluations (in Debugger)</h4>
				<p>Display View</p>
				<ul>
				  <li>evaluation actions only enabled when a stack frame is selected (in context 
				    menu and Run menu)</li>
				  <li>keybindings work</li>
				  <li>&quot;this&quot; resolves to receiver of selected stack frame</li>
				  <li>code assist via keybinding, auto-complete, pop-up menu</li>
				  <li>implicit &quot;this&quot; evaluations/code assist</li>
				  <li>result is displayed in Display view</li>
				  <li>runtime error</li>
				  <li>syntax error</li>
				</ul>
				<p>Details Area</p>
				<ul>
				  <li> evaluation actions only enabled when a stack frame is selected (in context 
				    menu and Run menu)</li>
				  <li>keybindings work</li>
				  <li>&quot;this&quot; resolves to selected variable</li>
				  <li>&quot;this&quot; resolves to receiver in stack frame when no variable is 
				    selected</li>
				  <li>implicit &quot;this&quot; evaluations/code assist</li>
				  <li>result is displayed in details area</li>
				  <li>runtime error</li>
				  <li>syntax error</li>
				</ul>
				<p>Java Editor</p>
				<ul>
				  <li> for both compilation units (source) and class files (binaries)</li>
				  <li>actions enable only when a stack frame is selected and expression is highlighted</li>
				  <li>result is displayed in Display view</li>
				  <li>runtime error</li>
				  <li>syntax error</li>
				</ul>
				<p>General Evaluation Support</p>
				<ul>
				  <li> boolean expressions</li>
				  <li>message sends</li>
				  <li>multi-statements</li>
				  <li>for loops</li>
				  <li>while loops</li>
				  <li>variable declarations</li>
				  <li>object instantiations</li>
				  <li>array instantiations/access</li>
				  <li>inspect vs. display vs. execute</li>
				  <li>evaluations not supported when debugging in context of external source (i.e. 
				    source elements not on the buildpath, just on the source lookup path)</li>
				  <li>breakpoints in application code are honored (but nested evaluations are 
				    not supported)</li>
				</ul>
				<hr>
			<h4>Scrapbook</h4>
				<ul>
				  <li> code assist visibility is that of associated project's classpath</li>
				  <li>no &quot;this&quot; context</li>
				  <li>variable declarations</li>
				  <li>all types of statements</li>
				  <li>display vs. inspect vs. execute</li>
				  <li>imports</li>
				  <li>runtime errors</li>
				  <li>syntax errors</li>
				  <li>breakpoints are honored in application code</li>
				  <li>evaluations/details are disabled at a breakpoint in application code (nested 
				    evaluations not supported)</li>
				  <li>properties (via context menu on &quot;.jpage&quot; file) 
				    <ul>
				      <li>Working directory</li>
				      <li>VM args</li>
				      <li>alternate JRE</li>
				    </ul>
				  </li>
				  <li>open type/type hierarchy via pop-up and keybindings</li>
				</ul>
				<hr>
			<h4>Java Applications (Configs)</h4>
				<p>Creation</p>
				<ul>
				  <li> default config creation based on navigator selection</li>
				  <li>default config creation based on active editor</li>
				  <li>default config creation from launch short cut &quot;run/debug as -&gt; Java 
				    Application&quot; </li>
				</ul>
				<p>Main</p>
				<ul>
				  <li> specify a project by typing</li>
				  <li>select a project from &quot;browse&quot; button</li>
				  <li>specify a non-existant project</li>
				  <li>specify no project</li>
				  <li>specify a main type via typing</li>
				  <li>specify a main type via searching</li>
				  <li>specify a non-existant type</li>
				  <li>search external jars</li>
				  <li>stop in main</li>
				</ul>
				<p>Arguments</p>
				<ul>
				  <li> program arguments are sent to application</li>
				  <li>program arguments with quotes for whitespace</li>
				  <li>VM args are sent to application</li>
				  <li>VM args with quotes for whitespace</li>
				  <li>Working directory - local, workspace relative, default</li>
				</ul>
				<p>JRE</p>
				<ul>
				  <li> default JRE - should track workspace/project default JRE as it changes</li>
				  <li>explicit JRE - remains constant as workspace/project JRE changes</li>
				  <li>specification of java vs. javaw</li>
				  <li>reference to a deleted/moved JRE</li>
				</ul>
				<p>Classpath</p>
				<ul>
				  <li> default classpath updates as project's build path changes</li>
				  <li>non-default classpath/bootpath 
				    <ul>
				      <li>ordering</li>
				      <li>external jars</li>
				      <li>external folders</li>
				      <li>internal jars</li>
				      <li>internal folders</li>
				      <li>variables (resolve to internal &amp; external jars)</li>
				      <li>containers</li>
				    </ul>
				  </li>
				</ul>
				<p>Source Lookup</p>
				<ul>
				  <li> default source lookup path updates to mirror the config's classpath</li>
				  <li>duplicate source file prompting (select option in tab, and ensure there 
				    are duplicates on the source lookup path) 
				    <ul>
				      <li>during a debug session, the source locator remembers which duplicate 
				        to use, but re-prompts on subsequent debug sessions</li>
				    </ul>
				  </li>
				  <li>non-default source lookup
				    <ul>
				      <li>ordering</li>
				      <li>external jars with attached source</li>
				      <li>external jars that are simply source archives</li>
				      <li>internal jars with attached source</li>
				      <li>internal jars that are simply source archives</li>
				      <li>external folders</li>
				      <li>internal folders</li>
				      <li>source root paths within source archives are found automatically</li>
				      <li>variables (resolve to internal &amp; external jars)</li>
				      <li>containers</li>
				    </ul>
				  </li>
				</ul>
				<hr>
			<h4>Remote Debugging</h4>
				<ul>
				  <li> specify a project via typing/browsing</li>
				  <li>specify a non-existant project</li>
				  <li>default source lookup path should track project's build path</li>
				  <li>connect to a remote vm 
				    <ul>
				      <li>try suspend=&quot;y&quot; and suspend=&quot;n&quot;</li>
				      <li>try different sockets</li>
				      <li>try &quot;localhost&quot; and &quot;127.0.0.1&quot;</li>
				    </ul>
				  </li>
				  <li>terminate should only be available when the config specifies</li>
				</ul>
				<hr>
			<h4>Applets</h4>
				<p>Main</p>
				<ul>
				  <li> specify a project via typing/browsing</li>
				  <li>specify a non-existant project</li>
				  <li>specify an applet class via typing/searching</li>
				  <li>specify a class that is not an applet</li>
				  <li>specify default applet viewer class</li>
				  <li>specify an explicit applet viewer class</li>
				</ul>
				<p>Parameters</p>
				<ul>
				  <li> specify various width &amp; height</li>
				  <li>specify parameters (available via Applet#getParameter(...))</li>
				  <li>specify applet name - allows applets to communicate with each other via 
				    AppletContext#getApplet(...) </li>
				</ul>
				<hr>
			<h4>Threads &amp; Monitors</h4>
				<ul>
				  <li>monitors view displays by object, which objects (monitors) are owned by 
				    which threads</li>
				  <li>threads view displays by thread, which thread owns which monitors</li>
				  <li>deadlock view displays cycles in the relationship - a thread wating for 
				    a monitor, owned by a thread waiting for a monitor...</li>
				  <li>suspend/resume affects all threads in the selected VM</li>
				  <li>when a VM does not support monitor information, an infomation message is 
				    displayed </li>
				  <li>when no VM is suspended, an information message is displayed<br>
				  </li>
				</ul>
				<hr>
			<h4>Hot Code Replace</h4>
				<p>Positive (J9, JDK1.4)</p>
				<ul>
				  <li>changes within pre-existing method</li>
				  <li>changes within pre-existing instance variable initializer (frames won't 
				    automatically pop, but it should work)</li>
				  <li>all affected frames are dropped automatically</li>
				  <li>changes in method of inner type</li>
				  <li>changes in method of anonymous inner type</li>
				  <li>default and non-default packages</li>
				  <li>drop to frame</li>
				</ul>
				<p>Negative</p>
				<ul>
				  <li> Not supported by VM</li>
				  <li>method addition/removal</li>
				  <li>field addition/removal</li>
				  <li>can't pop frames when in&quot;main&quot;</li>
				  <li>can't pop affected frames when native method on the stack</li>
				  <li>toggle error notification preferences - should only be told of errors when 
				    preferences are on</li>
				</ul>
				<hr>
			<h4>Installed JREs</h4>
				<p>Basic</p>
				<ul>
				  <li> Add a JRE - Standard, 1.1.x, J9</li>
				  <li>Re-name a JRE</li>
				  <li>Change default JRE</li>
				  <li>Remove a JRE</li>
				  <li>Search for JREs</li>
				  <li>Export JREs (workspace preferences)</li>
				  <li>Import JREs (workspace preferences)</li>
				</ul>
				<p>Libraries</p>
				<ul>
				  <li> Default libraries</li>
				  <li>non-default system libraries</li>
				  <li>re-order system libraries</li>
				  <li>change source attachments</li>
				  <li>persisted across workbench invocations</li>
				  <li>noted when running an associated config</li>
				  <li>noted in Java project build path when referenced explicitly (via container, 
				    or workspace default)</li>
				</ul>
				<p>Re-build</p>
				<ul>
				  <li> when a project references a JRE that is changed (re-named, removed, library 
				    change), you should be prompted to re-build the workspace</li>
				  <li>changing a source attachment should not prompt for a re-build</li>
				</ul>
				<hr>
			<h4>Console</h4>
				<ul>
				  <li> output appears automatically when a program is run/debugged</li>
				  <li>accepts input from standard in</li>
				  <li>fixed width console</li>
				  <li>buffer size preference</li>
				  <li>color for out/in/err</li>
				  <li>hyperlinks appear for exception stack traces</li>
				  <li>scroll lock</li>
				  <li>process lock</li>
				  <li>remove all terminated</li>
				  <li>process termination</li>
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
