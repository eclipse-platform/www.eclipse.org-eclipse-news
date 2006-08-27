<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# template.php
	#
	# Author: 		Michael Rennie
	# Date:			August 25, 2006
	#
	# Description: This page outlines the debug project 3.0 test plan matrix
	#
	#
	#****************************************************************************
	
	
	$pageTitle 		= "Debug Project 3.0 Test Matrix";
	$pageKeywords	= "debug, platform, debugging, debugger, breakpoints, launching, test, testing, matrix, plan";
	$pageAuthor		= "Debug Team";
	
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
				    <td width="18%"><b>JDK 1.4.2</b></td>
				    <td width="18%"><b>IBM 1.4.2</b></td>
				  </tr>
				  <tr> 
				    <td width="18%"><b>Win 2000</b></td>
				    <td width="18%">&nbsp;</td>
				    <td width="18%">&nbsp;</td>
				  </tr>
				  <tr> 
				    <td width="18%"><b>Win XP</b></td>
				    <td width="18%">&nbsp;</td>
				    <td width="18%">&nbsp;</td>
				  </tr>
				  <tr> 
				    <td width="18%"><b>Linux</b></td>
				    <td width="18%">&nbsp;</td>
				    <td width="18%">&nbsp;</td>
				  </tr>
				  <tr> 
				    <td width="18%"><b>Mac</b></td>
				    <td width="18%">&nbsp;</td>
				    <td width="18%">N/A</td>
				  </tr>
				</table>
			</div>
		</div>
		<div class="homeitem3col">
			<a name="top"></a>
			<h3>Test Grid</h3>
			<div align="center">
			<table width="80%" border="1">
			  <tr> 
			    <td><b>Feature</b></td>
			    <td><b>Darin Wright</b></td>
			  </tr>
			  <tr> 
			    <td><a href="#Breakpoints">Breakpoints</a></td>
			    <td> 
			      <div align="center"><img src="/eclipse/debug/images/ok.gif" width="10" height="10"></div>
			    </td>
			  </tr>
			  <tr> 
			    <td><a href="#Stepping">Stepping</a></td>
			    <td> 
			      <div align="center"><img src="/eclipse/debug/images/ok.gif" width="10" height="10"></div>
			    </td>
			  </tr>
			  <tr> 
			    <td><a href="#Variables">Variables</a></td>
			    <td> 
			      <div align="center"><img src="/eclipse/debug/images/ok.gif" width="10" height="10"></div>
			    </td>
			  </tr>
			  <tr> 
			    <td><a href="#Watch">Watch Items</a></td>
			    <td> 
			      <div align="center"><img src="/eclipse/debug/images/ok.gif" width="10" height="10"></div>
			    </td>
			  </tr>
			  <tr> 
			    <td><a href="#LaunchFramework">Launching Framework</a></td>
			    <td> 
			      <div align="center"><img src="/eclipse/debug/images/ok.gif" width="10" height="10"></div>
			    </td>
			  </tr>
			  <tr> 
			    <td><a href="#Evaluations">Evaluations</a></td>
			    <td> 
			      <div align="center"><img src="/eclipse/debug/images/ok.gif" width="10" height="10"></div>
			    </td>
			  </tr>
			  <tr> 
			    <td><a href="#Scrapbook">Scrapbook</a></td>
			    <td> 
			      <div align="center"><img src="/eclipse/debug/images/ok.gif" width="10" height="10"></div>
			    </td>
			  </tr>
			  <tr> 
			    <td><a href="#JavaApp">Java Applications</a></td>
			    <td> 
			      <div align="center"><img src="/eclipse/debug/images/ok.gif" width="10" height="10"></div>
			    </td>
			  </tr>
			  <tr> 
			    <td><a href="#Remote">Remote Debugging</a></td>
			    <td>
			      <div align="center"><img src="/eclipse/debug/images/ok.gif" width="10" height="10"></div>
			    </td>
			  </tr>
			  <tr> 
			    <td><a href="#Applets">Applets</a></td>
			    <td>
			      <div align="center"><img src="/eclipse/debug/images/ok.gif" width="10" height="10"></div>
			    </td>
			  </tr>
			  <tr> 
			    <td><a href="#Threads">Threads & Monitors</a></td>
			    <td> 
			      <div align="center"><img src="/eclipse/debug/images/ok.gif" width="10" height="10"></div>
			    </td>
			  </tr>
			  <tr> 
			    <td><a href="#Hot">HCR</a></td>
			    <td> 
			      <div align="center"><img src="/eclipse/debug/images/ok.gif" width="10" height="10"></div>
			    </td>
			  </tr>
			  <tr> 
			    <td><a href="#JREs">Installed JREs</a></td>
			    <td> 
			      <div align="center"><img src="/eclipse/debug/images/ok.gif" width="10" height="10"></div>
			    </td>
			  </tr>
			  <tr> 
			    <td><a href="#JSP">JSP Example</a></td>
			    <td> 
			      <div align="center"><img src="/eclipse/debug/images/ok.gif" width="10" height="10"></div>
			    </td>
			  </tr>
			  <tr> 
			    <td><a href="#Console">Console</a></td>
			    <td> 
			      <div align="center"><img src="/eclipse/debug/images/ok.gif" width="10" height="10"></div>
			    </td>
			  </tr>
			  <tr>
			    <td><a href="#Refactoring">Refactoring</a></td>
			    <td>
			      <div align="center"><img src="/eclipse/debug/images/ok.gif" width="10" height="10"></div>
			    </td>
			  </tr> 
			</table>
			</div>
		</div>
		<div class="homeitem3col">
			<h3>Feature Testing</h3>
			<h4><a name="Breakpoints"></a>Breakpoints</h4>
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
				  <li>create in invalid locations (should be automatically moved or disallowed)</li>
				  <li>skip all breakpoints</li>
				  <li>breakpoint updates with refactorings</li>
				</ul>
				<p>Exception Breakpoints</p>
				<ul>
				  <li> creation - toolbar in breakpoints view, and from &quot;Run...&quot; menu, 
				    try to assign keybinding</li>
				  <li>create from stack trace in the console (create a new one/open properties 
				    dialog on existing one)</li>
				  <li>deletion</li>
				  <li>show qualified names</li>
				  <li>enable/disable</li>
				  <li>caught vs. uncaught/both</li>
				  <li>scoped exceptions - wild card patterns, specific types, specific packages</li>
				  <li>suspend VM vs. suspend thread</li>
				  <li>hit count</li>
				  <li>thread restriction</li>
				  <li>instance restriction</li>
				  <li>skip all breakpoints</li>
				  <li>breakpoint updates with refactorings</li>
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
				  <li>conditions - enabled/disabled, code assist, valid conditions, syntax errors, 
				    runtime errors, suspend on 'true' vs. suspend on change, multi-line conditions, 
				    simple conditions, conditions that take a long time</li>
				  <li>skip all breakpoints</li>
				  <li>breakpoint updates with refactorings</li>
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
				  <li>skip all breakpoints</li>
				  <li>breakpoint updates with refactorings</li>
				</ul>
				<p>Uncaught Exceptions &amp; Compilation Errors</p>
				<ul>
				  <li> all combinations of &quot;suspend on uncaught exceptions&quot; and &quot;suspend 
				    on compilation errors&quot;</li>
				  <li>should still work when &quot;skip all breakpoints&quot; is on</li>
				</ul>
				<p>Class Load Breakpoints</p>
				<ul>
				  <li>creation - context menu in outliner, and &quot;Run &gt; Add Class Load Breakpoint&quot;</li>
				  <li>deletion</li>
				  <li>show qualified names</li>
				  <li>enable/disable</li>
				  <li>suspend VM vs. suspend thread</li>
				  <li>thread restriction</li>
				  <li>skip all breakpoints</li>
				  <li>breakpoint updates with refactorings</li>
				</ul>
			<p><a href="#top">Back to top</a><br><hr></p>
			<h4><a name="Stepping"></a>Stepping</h4>
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
				  <li>step return from a non-top stack frame</li>
				  <li>step return from class loading code (ensure that you return to non-class 
				    loading code)</li>
				</ul>
				<p>Step Filters</p>
				<p>When the &quot;Step With Filters&quot; filters toggle is &quot;on&quot;, all 
				  stepping actions continue stepping (over, into, return) until an unfiltered 
				  location is reached. Filters are defined from the &quot;Java &gt; Debug &gt; 
				  Step Filters&quot; preference page.</p>
				<ul>
				  <li>Step into a filtered location (should act like a step over)</li>
				  <li>Step through a filtered location (i.e. step into a filtered method that 
				    will step into a non-filtered method)</li>
				  <li>Step into a filtered location that contains a breakpoint</li>
				  <li>Step into a filtered location that contains a conditional breakpoint - try 
				    true and false conditions</li>
				  <li>Rapid stepping - hold down the step with filters hotkey</li>
				  <li>try class filters, package filters, wild card filters</li>
				  <li>filter static initializers, constructors</li>
				  <li>enable and disable step filters</li>
				  <li>Step over from a filtered location (should continue stepping out of the 
				    method - like a step return)</li>
				  <li>Step return from a filtered location when the second method on the stack 
				    is also filtered (should continue step return to the non-filtered location)</li>
				</ul>
				<p>Step Into Selection</p>
				<p>Step Into Selection steps into the selected method (or the method that the 
				  cursor is on).</p>
				<ul>
				  <li>Use context menu and keybinding</li>
				  <li>Step into a method that is not the next method to be stepped into, on the 
				    current line</li>
				  <li>Step into a method that has already been stepped into, on the current line 
				    (should cause error)</li>
				  <li>Step into a method with the same name/signature as a method on the current 
				    line</li>
				  <li>Step into a method that is not on the current line</li>
				  <li>Step into a method that is not in the top stack frame</li>
				</ul>
				<p>Run to Line</p>
				<ul>
				  <li>Use context menu and keybinding</li>
				  <li>Class file and Compilation Unit editors</li>
				  <li>Run to a line in the current method</li>
				  <li>Run to a line in a method further down the stack</li>
				  <li>Run to a line that has already been executed (debug the program again - 
				    see if it gets hit)</li>
				  <li>Run to a line that will never be hit</li>
				  <li>Run to a line that will encounter a breakpoint before the line is hit 
				    <ul>
				      <li>user preference to &quot;skip breakpoints during run-to-line&quot;</li>
				    </ul>
				  </li>
				</ul>
				<p>Show In...</p>
				<ul>
				  <li> &quot;Show In...&quot; is offered for stack frames</li>
				  <li>shows associated resource (if any) in the resource navigator</li>
				</ul>
			<p><a href="#top">Back to top</a><br><hr></p>
			<h4><a name="Variables"></a>Variables</h4>
				<p>Rendering</p>
				<ul>
				  <li>show/hide qualified names</li>
				  <li>show/hide static</li>
				  <li>show/hide constants</li>
				  <li>show/hide type names</li>
				  <li>show/hide null array entries</li>
				  <li>primitive display options - hex, ASCII, unsigned values</li>
				  <li>copy selected variables to clipboard</li>
				  <li>ensure method arguments appear for class libraries that do not have debug 
				    attributes </li>
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
				  <li>view orientation</li>
				  <li>show/hide details area</li>
				  <li>use text wrap in details area</li>
				  <li>details update while stepping</li>
				  <li>create detail formatter from preference page</li>
				  <li>create detail formatter from variables view context menu</li>
				  <li>edit detail formatter from variables view context menu</li>
				  <li>remove detail formatter from variable view context menu</li>
				</ul>
				<p>Navigation</p>
				<ul>
				  <li> open on declared/concrete type/type hierarchy</li>
				  <li>inspect a variable</li>
				  <li>watch a variable</li>
				</ul>
				<p>Logical Structures</p>
				<ul>
				  <li> turn on logical structures</li>
				  <li>ensure lists, maps, map entries and SWT composites show with logical structures</li>
				  <li>ensure variable selection/expansion remains when stepping/changing stack 
				    frames</li>
				  <li>selectively turn logical structures on/off via context menu &quot;Show As 
				    &gt; ...&quot;</li>
				</ul>
			<p><a href="#top">Back to top</a><br><hr></p>
			<h4><a name="Watch"></a>Watch Items</h4>
				<ul>
				  <li>Creation 
				    <ul>
				      <li>before a program starts execution</li>
				      <li> while a program is running</li>
				      <li>from variables view context menu &quot;Watch&quot;</li>
				    </ul>
				  </li>
				  <li>Ensure watch item updates while stepping</li>
				  <li>Watch item update when breakpoint suspends all threads</li>
				  <li>Add multiple watch items - ensure they all update while stepping</li>
				  <li>Create a watch item with errors 
				    <ul>
				      <li>compilation errors</li>
				      <li>runtime errors</li>
				      <li>errors should appear as children of the watch item in the view</li>
				    </ul>
				  </li>
				  <li>Watch items persist on workbench shutdown/restart</li>
				  <li>Watch items update when 
				    <ul>
				      <li>stack frame selection changes (i.e. selected context)</li>
				      <li>when enabled (from disabled)</li>
				      <li>when expression is changed and a stack frame is already selected</li>
				    </ul>
				  </li>
				</ul>
			<p><a href="#top">Back to top</a><br><hr></p>
			<h4><a name="LaunchFramework"></a>Launching Framework</h4>
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
				  <li>Java refactorings 
				    <ul>
				      <li>Rename/move a main type referenced in a launch config</li>
				      <li>Rename a project referenced in a launch config</li>
				      <li>Rename/move a compilation unit<br>
				      </li>
				    </ul>
				  </li>
				</ul>
				<p>Launch History</p>
				<ul>
				  <li>Create a favorite from the &quot;Common&quot; tab</li>
				  <li>Reorder favorites and launch history</li>
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
				  <li>Perspective switching when launching based on global preferences</li>
				  <li>Perspective switching overridden with launch config specific settings</li>
				  <li>&quot;Remove terminated launches&quot; preferences</li>
				  <li>&quot;Build (if required) before launching&quot; preference - <b>NEW</b>: 
				    should only build required projects in the case of Java applications, and 
				    progress dialog should appear to show building.</li>
				  <li>&quot;Save dirty editors&quot; preference - never/prompt/auto</li>
				  <li><b>NEW</b>: prompt to launch in debug mode when breakpoints are present</li>
				  <li><b>NEW</b>: prompt to continue launch when compile errors are present</li>
				  <li>launch in foreground and background (controlled via common tab on launch 
				    config) </li>
				</ul>
				<p>Context Menu Launch</p>
				<ul>
				  <li> There is a launch cascade menu for each launch mode</li>
				  <li>Ensure &quot;Run&quot; cascade menu displays appropriate choices for selection 
				    (same for &quot;Debug&quot;) 
				    <ul>
				      <li>Applets</li>
				      <li>Main types</li>
				      <li>Applets &amp; Main types</li>
				      <li>JUnit tests</li>
				      <li>Shows &quot;Run...&quot; when there is no applicable shortcut</li>
				    </ul>
				  </li>
				  <li>Note that before a shortcut's property tester is loaded, it will appear 
				    in the context menu by default. For example, the Java application shortcut 
				    requires the &quot;hasMain&quot; tester from the Java debug plug-in, and thus, 
				    until the plug-in is loaded, the shortcut will appear for all Java files whether 
				    they have a main method or not.</li>
				  <li>Profile menu appears when a profiler is present in the SDK</li>
				</ul>
				<p>Perspective Switching/Debug View Management</p>
				<ul>
				  <li> Ensure perspective switching preferences/dialogs prompt/switch as specified 
				    <ul>
				      <li>Activate workbench when a breakpoint is hit</li>
				      <li>Activate Debug View when a breakpoint is hit 
				        <ul>
				          <ul>
				            <li>Debug action set should open automatically when a debug view is 
				              opened</li>
				            <li>Relevant debug views should automatically open when a stack frame 
				              is selected
				              <ul>
				                <li>in debug perspective, by default</li>
				                <li>in other perspectives, as defined by &quot;View Management&quot; 
				                  preferences (also available in debug view drop-down menu)</li>
				                <li>Automatically opened views should close when debugging ends</li>
				                <li>Views that were opened/closed manually should remain as such 
				                  (can reset this when a perspective is reset or by using &quot;reset&quot; 
				                  button on the View Management preferences page</li>
				              </ul>
				            </li>
				          </ul>
				        </ul>
				      </li>
				      <li>Switch perspective when a breakpoint is hit</li>
				      <li>Switch perspective when launching</li>
				    </ul>
				  </li>
				</ul>
			<p><a href="#top">Back to top</a><br><hr></p>
			<h4><a name="Evaluations"></a>Evaluations (in Debugger)</h4>
				<p>Display View</p>
				<ul>
				  <li>evaluation actions only enabled when a stack frame is selected (in context 
				    menu and Run menu)</li>
				  <li>keybindings work</li>
				  <li>&quot;this&quot; resolves to receiver of selected stack frame</li>
				  <li>code assist via keybinding, auto-complete, pop-up menu</li>
				  <li>implicit &quot;this&quot; evaluations/code assist</li>
				  <li>result is displayed in-line for &quot;Display&quot; and in popup for &quot;Inspect&quot;</li>
				  <li>popup result can be persisted by &quot;moving to expressions view&quot;</li>
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
				   <li>result is displayed in popup and is added to correct view (Display or Expressions view depending for Display or Inspect) when the relevant key binding is 
				    pressed</li>
				  <li>runtime error</li>
				  <li>syntax error</li>
				</ul>
				<p>Java Editor</p>
				<ul>
				  <li> for both compilation units (source) and class files (binaries)</li>
				  <li>actions enable only when a stack frame is selected and expression is highlighted</li>
				  <li>result is displayed in popup and is added to correct view (Display or Expressions view depending for Display or Inspect) when the relevant key binding is 
				    pressed</li>
				  <li>runtime error</li>
				  <li>syntax error</li>
				</ul>
				<p>General Evaluation Support</p>
				<ul>
				  <li>boolean expressions</li>
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
				    not supported) based on user preference &quot;Suspend for breakpoints during 
				    evaluations&quot; </li>
				</ul>
			<p><a href="#top">Back to top</a><br><hr></p>
			<h4><a name="Scrapbook"></a>Scrapbook</h4>
				<ul>
				  <li> code assist visibility is that of associated project's classpath</li>
				  <li>no &quot;this&quot; context</li>
				  <li>variable declarations</li>
				  <li>all types of statements</li>
				  <li>display vs. inspect vs. execute</li>
				  <li>imports</li>
				  <li>runtime errors (does not suspend on runtime exception - error is written 
				    to scrapbook and console)</li>
				  <li>syntax errors</li>
				  <li>breakpoints are honored in application code</li>
				  <li>evaluations/details are disabled at a breakpoint in application code (nested 
				    evaluations not supported)</li>
				  <li>properties (via context menu on &quot;.jpage&quot; file) 
				    <ul>
				      <li>Working directory</li>
				      <li>VM arguments</li>
				      <li>alternate JRE</li>
				    </ul>
				  </li>
				  <li>open type/type hierarchy via popup and keybindings</li>
				</ul>
			<p><a href="#top">Back to top</a><br><hr></p>
			<h4><a name="JavaApp"></a>Java Applications (Configurations)</h4>
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
				  <li>specify a nonexistent project (error)</li>
				  <li>specify no project</li>
				  <li>specify a main type via typing (no type name validation is performed - error 
				    occurs on launch if invalid)</li>
				  <li>specify a main type via searching</li>
				  <li>specify a nonexistent type (no type name validation is performed - error 
				    accrues on launch if invalid)</li>
				  <li>search external jars</li>
				  <li>use &quot;${java_type_name}&quot; variable to launch the selected compilation 
				    unit</li>
				</ul>
				<p>VM/Program Arguments</p>
				<ul>
				  <li>Arguments with quotes and spaces are interpreted as single argument</li>
				  <li>use of string variables as arguments</li>
				</ul>
				<p>JRE</p>
				<ul>
				  <li> default JRE - should track workspace/project default JRE as it changes</li>
				  <li>explicit JRE - remains constant as workspace/project JRE changes</li>
				  <li>specification of Java vs. javaw</li>
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
				      <li>Java variables (resolve to internal &amp; external jars)</li>
				      <li>string variables</li>
				      <li>containers</li>
				      <li>prepend/append to default classpath 
				        <ul>
				          <li>default classpath changes with buildpath</li>
				        </ul>
				      </li>
				      <li>prepend/append to default bootpath</li>
				    </ul>
				  </li>
				</ul>
				<p>Source Lookup</p>
				<ul>
				  <li> default source lookup path updates to mirror the configurations classpath</li>
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
				      <li>Java variables (resolve to internal &amp; external jars)</li>
				      <li>string variables</li>
				      <li>containers</li>
				    </ul>
				  </li>
				  <li>Modify the source lookup path at runtime via context menu &quot;Edit Source 
				    Lookup...&quot;</li>
				  <li>Modify the source lookup path from &quot;Source not found&quot; editor when 
				    debugging </li>
				</ul>
			<p><a href="#top">Back to top</a><br><hr></p>
			<h4><a name="Remote"></a>Remote Debugging</h4>
				<ul>
				  <li> specify a project via typing/browsing</li>
				  <li>specify a nonexistent project</li>
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
			<p><a href="#top">Back to top</a><br><hr></p>
			<h4><a name="Applets"></a>Applets</h4>
				<p>Main</p>
				<ul>
				  <li> specify a project via typing/browsing</li>
				  <li>specify a nonexistent project (should see error if does not exist)</li>
				  <li>specify an applet class via typing/searching (no validation is performed 
				    on type name in the tab - error occurs on launch if an invalid type is specified)</li>
				  <li>specify a class that is not an applet (no validation is performed - error 
				    occurs on launch if invalid)</li>
				  <li>specify default applet viewer class</li>
				  <li>specify an explicit applet viewer class</li>
				</ul>
				<p>Parameters</p>
				<ul>
				  <li> specify various width &amp; height</li>
				  <li>specify parameters (available via Applet#getParameter(...))</li>
				  <li>specify applet name - allows Applets to communicate with each other via 
				    AppletContext#getApplet(...) </li>
				</ul>
			<p><a href="#top">Back to top</a><br><hr></p>
			<h4><a name="Threads"></a>Threads &amp; Monitors</h4>
				<ul>
				  <li>monitors view displays by object, which objects (monitors) are owned by 
				    which threads</li>
				  <li>threads view displays by thread, which thread owns which monitors</li>
				  <li>deadlock view displays cycles in the relationship - a thread waiting for 
				    a monitor, owned by a thread waiting for a monitor...</li>
				  <li>suspend/resume affects all threads in the selected VM</li>
				  <li>when a VM does not support monitor information, an information message is 
				    displayed </li>
				  <li>when no VM is suspended, an information message is displayed<br>
				  </li>
				</ul>
			<p><a href="#top">Back to top</a><br><hr></p>
			<h4><a name="Hot"></a>Hot Code Replace</h4>
				<p>Positive</p>
				<ul>
				  <li>changes within pre-existing method</li>
				  <li>changes within preexisting instance variable initializer (frames won't automatically 
				    pop, but it should work)</li>
				  <li>all affected frames are dropped automatically</li>
				  <li>changes in method of inner type</li>
				  <li>changes in method of anonymous inner type</li>
				  <li>default and non-default packages</li>
				  <li>drop to frame (context menu and toolbar)</li>
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
			<p><a href="#top">Back to top</a><br><hr></p>
			<h4><a name="JREs"></a>Installed JREs</h4>
				<p>Basic</p>
				<ul>
				  <li> Add a JRE - Standard, 1.1.x, J9</li>
				  <li>Rename a JRE</li>
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
				  <li>reorder system libraries</li>
				  <li>change source attachments</li>
				  <li>persisted across workbench invocations</li>
				  <li>noted when running an associated config</li>
				  <li>noted in Java project build path when referenced explicitly (via container, 
				    or workspace default)</li>
				</ul>
				<p>Rebuild</p>
				<ul>
				  <li> when a project references a JRE that is changed (renamed, removed, library 
				    change), the project will need to be rebuilt
				<ul>
				      <li>if autobuild is on, the build should triggered/start automatically when 
				        you press OK (close the preferences dialog) </li>
				      <li>if autobuild is off, the build should be deferred until manually invoked, 
				        or caused by a launch</li>
				    </ul>
				  </li>
				  <li>changing a source attachment should not cause a rebuild</li>
				</ul>
			<p><a href="#top">Back to top</a><br><hr></p>
			<h4><a name="JSP"></a>JSP Example</h4>
				<ul>
				  <li>Ensure JSP debugging example works as specified in the org.eclipse.jdt.ui.examples.javafamily 
				    ReleaseNotes.html. The instructions are in the section titled &quot;Debugging 
				    a JSP&quot;</li>
				    <ul>
				      <li>Tomcat launch configuration</li>
				      <li>breakpoint in JSP files</li>
				      <li>stepping in a Java file from a JSP file and stepping back</li>
				      <li>evaluation in the context of a JSP file (require jsp-api.jar, jasper-runtime.jar and servlet-api.jar for <tomcat>/common/lib in the project Java build path)</li>
				    </ul>
				</ul>
			<p><a href="#top">Back to top</a><br><hr></p>
			<h4><a name="Console"></a>Console</h4>
				<ul>
				  <li> output appears automatically when a program is run/debugged</li>
				  <li>console title bolds when content changes (and stacked beneath other views)</li>
				  <li>accepts input from standard in</li>
				  <li>fixed width console</li>
				  <li>buffer size preference</li>
				  <li>color for out/in/err</li>
				  <li>hyperlinks appear for exception stack traces</li>
				  <li>scroll lock - global to all processes</li>
				  <li>pin console - global to all processes, when a different console is selected 
				    it should remain pinned</li>
				  <li>process lock</li>
				  <li>remove all terminated</li>
				  <li>process termination</li>
				  <li>switching between consoles with the console drop down. Clicking on the drop-down 
				    button should toggle between the last two consoles shown</li>
				</ul>
			<p><a href="#top">Back to top</a><br><hr></p>
			<h4><a name="Refactoring"></a>Refactoring</h4>
				<ul>
				  <li>launch configuration main type is updated after type rename, type move, package rename</li>
				  <li>launch configuration project is updated after project rename, package move, type move</li>
				  <li>Java breakpoints are updated after type rename, type move, package rename, package move, project rename
				    <ul>
				      <li>VM suspend at the new location</li>
				      <li>breakpoint attributes are preserved</li>
				      <li>label is updated</li>
				      <li>marker location is updated (text selected when double-clicking on a breakpoint in the breakpoint view)</li>
				    </ul>
				  </li>
				</ul>
			<p><a href="#top">Back to top</a><br></p>
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
	</div>
</div>


EOHTML;

	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
