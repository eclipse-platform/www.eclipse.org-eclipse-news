<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# template.php
	#
	# Author: 		Michael Rennie
	# Date:			August 25, 2006
	#
	# Description: This page outlines the debug project 3.3 test matrix
	#
	#
	#****************************************************************************
	
	
	$pageTitle 		= "Debug Project 3.3 Test Matrix";
	$pageKeywords	= "debug, platform, debugging, debugger, breakpoints, launching, test, testing, matrix, plan";
	$pageAuthor		= "Debug Team";
	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<div class="homeitem3col">
			<h3>Testers</h3>
			<p>Committers: Kevin Barnes, Darin Wright, Samantha Chan, Michael Rennie</p>
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
				    <td width="18%"><b>IBM 1.5</b></td>
				    <td width="18%"><b>JDK 1.4.2</b></td>
				    <td width="18%"><strong>JDK 1.5</strong></td>
				    <td width="18%"><b>IBM 1.4.2</b></td>
				  </tr>
				  <tr> 
				    <td width="18%"><b>Win 2000</b></td>
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
				  </tr>
				  <tr> 
				    <td width="18%"><b>Linux</b></td>
				    <td width="18%">&nbsp;</td>
				    <td width="18%">&nbsp;</td>
				    <td width="18%">&nbsp;</td>
				    <td width="18%">&nbsp;</td>
				  </tr>
				  <tr> 
				    <td width="18%"><b>Mac</b></td>
				    <td width="18%">&nbsp;</td>
				    <td width="18%">&nbsp;</td>
				    <td width="18%">&nbsp;</td>
				    <td width="18%">&nbsp;</td>
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
			    <td><strong>Darin Wright</strong></td>
			    <td><b>Michael Rennie</b></td>
			    <td><b>Samantha Chan</b></td>
			    <td><strong>Kevin Barnes</strong></td>
			  </tr>
			  <tr> 
			    <td><a href="#Evaluations">Evaluations</a></td>
			    <td><div align="center"><img src="/eclipse/debug/images/ok.gif" width="10" height="10"></div></td>
			    <td> <div align="center"></div></td>
			    <td> <div align="center"></div></td>
			    <td> <div align="center"></div></td>
			  </tr>
			  <tr> 
			    <td><a href="#Launch">Launch Options</a></td>
			    <td><div align="center"></div></td>
			    <td> <div align="center"><img src="/eclipse/debug/images/ok.gif" width="10" height="10"></div></td>
			    <td> <div align="center"></div></td>
			    <td> <div align="center"></div></td>
			  </tr>
			  <tr> 
			    <td><a href="#Debug">View Management</a></td>
			    <td><div align="center"></div></td>
			    <td> <div align="center"></div></td>
			    <td> <div align="center"><img src="/eclipse/debug/images/ok.gif" width="10" height="10"></div></td>
			    <td> <div align="center"></div></td>
			  </tr>
			  <tr> 
			    <td><a href="#Breakpoints">Breakpoints</a></td>
			    <td><div align="center"></div></td>
			    <td> <div align="center"></div></td>
			    <td> <div align="center"></div></td>
			    <td> <div align="center"><img src="/eclipse/debug/images/ok.gif" width="10" height="10"></div></td>
			  </tr>
			  <tr> 
			    <td><a href="#Run">Run to Line</a></td>
			    <td><div align="center"><img src="/eclipse/debug/images/ok.gif" width="10" height="10"></div></td>
			    <td> <div align="center"></div></td>
			    <td> <div align="center"></div></td>
			    <td> <div align="center"></div></td>
			  </tr>
			  <tr> 
			    <td><a href="#Logical">Logical Structures</a></td>
			    <td><div align="center"></div></td>
			    <td> <div align="center"><img src="/eclipse/debug/images/ok.gif" width="10" height="10"></div></td>
			    <td> <div align="center"></div></td>
			    <td> <div align="center"></div></td>
			  </tr>
			  <tr> 
			    <td><a href="#Watch">Watch Items</a></td>
			    <td><div align="center"></div></td>
			    <td> <div align="center"></div></td>
			    <td> <div align="center"><img src="/eclipse/debug/images/ok.gif" width="10" height="10"></div></td>
			    <td> <div align="center"></div></td>
			  </tr>
			  <tr> 
			    <td><a href="#Context">Context Launching</a></td>
			    <td><div align="center"></div></td>
			    <td> <div align="center"></div></td>
			    <td> <div align="center"></div></td>
			    <td> <div align="center"><img src="/eclipse/debug/images/ok.gif" width="10" height="10"></div></td>
			  </tr>
			  <tr> 
			    <td><a href="#Classpaths">Runtime Classpath</a></td>
			    <td><div align="center"><img src="/eclipse/debug/images/ok.gif" width="10" height="10"></div></td>
			    <td> <div align="center"></div></td>
			    <td> <div align="center"></div></td>
			    <td> <div align="center"></div></td>
			  </tr>
			  <tr> 
			    <td><a href="#Source">Source Lookup</a></td>
			    <td><div align="center"></div></td>
			    <td> <div align="center"><img src="/eclipse/debug/images/ok.gif" width="10" height="10"></div></td>
			    <td> <div align="center"></div></td>
			    <td> <div align="center"></div></td>
			  </tr>
			  <tr> 
			    <td><a href="#Monitors">Monitor Information</a></td>
			    <td><div align="center"></div></td>
			    <td> <div align="center"></div></td>
			    <td> <div align="center"><img src="/eclipse/debug/images/ok.gif" width="10" height="10"></div></td>
			    <td> <div align="center"></div></td>
			  </tr>
			  <tr> 
			    <td><a href="#Hot">HCR</a></td>
			    <td><div align="center"></div></td>
			    <td> <div align="center"></div></td>
			    <td> <div align="center"></div></td>
			    <td> <div align="center"><img src="/eclipse/debug/images/ok.gif" width="10" height="10"></div></td>
			  </tr>
			  <tr> 
			    <td><a href="#JREs">Installed JREs</a></td>
			    <td><div align="center"><img src="/eclipse/debug/images/ok.gif" width="10" height="10"></div></td>
			    <td> <div align="center"></div></td>
			    <td> <div align="center"></div></td>
			    <td> <div align="center"></div></td>
			  </tr>
			  <tr> 
			    <td><a href="#EEs">Execution Environments</a></td>
			    <td><div align="center"></div></td>
			    <td><div align="center"><img src="/eclipse/debug/images/ok.gif" width="10" height="10"></div></td>
			    <td><div align="center"></div></td>
			    <td><div align="center"></div></td>
			  </tr>
			  <tr> 
			    <td><a href="#String">String Variables</a></td>
			    <td><div align="center"></div></td>
			    <td> <div align="center"></div></td>
			    <td> <div align="center"><img src="/eclipse/debug/images/ok.gif" width="10" height="10"></div></td>
			    <td> <div align="center"></div></td>
			  </tr>
			  <tr> 
			    <td><a href="#Console">Console</a></td>
			    <td><div align="center"></div></td>
			    <td> <div align="center"></div></td>
			    <td> <div align="center"></div></td>
			    <td> <div align="center"><img src="/eclipse/debug/images/ok.gif" width="10" height="10"></div></td>
			  </tr>
			  <tr> 
			    <td><a href="#Variables">Variables</a></td>
			    <td><div align="center"><img src="/eclipse/debug/images/ok.gif" width="10" height="10"></div></td>
			    <td> <div align="center"></div></td>
			    <td> <div align="center"></div></td>
			    <td> <div align="center"></div></td>
			  </tr>
			  <tr> 
			    <td><a href="#Refactoring">Refactoring</a></td>
			    <td><div align="center"></div></td>
			    <td> <div align="center"><img src="/eclipse/debug/images/ok.gif" width="10" height="10"></div></td>
			    <td> <div align="center"></div></td>
			    <td><div align="center"></div></td>
			  </tr>
			  <tr> 
			    <td><a href="#Applets">Applets</a></td>
			    <td><div align="center"></div></td>
			    <td><div align="center"></div></td>
			    <td> <div align="center"><img src="/eclipse/debug/images/ok.gif" width="10" height="10"></div></td>
			    <td> <div align="center"></div></td>
			  </tr>
			  <tr> 
			    <td><a href="#Remote">Remote Debugging</a></td>
			    <td><div align="center"></div></td>
			    <td> <div align="center"></div></td>
			    <td> <div align="center"></div></td>
			    <td> <div align="center"><img src="/eclipse/debug/images/ok.gif" width="10" height="10"></div></td>
			  </tr>
			  <tr> 
			    <td><a href="#JSP">JSP Example</a></td>
			    <td>
			      <div align="center"><img src="/eclipse/debug/images/ok.gif" width="10" height="10"></div>
			    </td>
			    <td> <div align="center"></div></td>
			    <td> <div align="center"></div></td>
			    <td> 
			      <div align="center"></div>
			    </td>
			  </tr>
			</table>
			</div>
		</div>
		<div class="homeitem3col">
			<h3>Feature Testing</h3>
			<a name="Evaluations"></a>
			<h4>Evaluations</h4>
				<ul>
				  <li>NEW: switch statement</li>
				  <li>Java 5.0 features 
				    <ul>
				      <li>Generic types</li>
				      <li>enhanced for loop syntax</li>
				      <li>varargs</li>
				      <li>autoboxing</li>
				      <li>enumerations</li>
				    </ul>
				  </li>
				  <li>From various contexts 
				    <ul>
				      <li>Java Compilation Unit editor</li>
				      <li>Java Classfile editor</li>
				      <li>Display view</li>
				      <li>Details area</li>
				      <li>Snippet editor</li>
				      <li>in class files without attached soruce</li>
				      <li>for arrays as the receivnig 'this' context</li>
				    </ul>
				  </li>
				  <li>Use key bindings and context menus</li>
				  <li>Use code assist (key binding and context menu)</li>
				  <li>Inspect vs. Display 
				    <ul>
				      <li>Note that in the Display view and Snippet editor, &quot;Display&quot; 
				        prints the result in-line</li>
				      <li>Everywhere else, popups are used to display/inspect the result</li>
				    </ul>
				  </li>
				  <li>Persisting the result - i.e. move the result to the Display view or Expressions 
				    view</li>
				  <li>In a clean workspace, popups should size reasonable on the first use, afterwhich 
				    the popup sizes are persisted and reused</li>
				</ul>
				<p><a href="#top">Back to top</a><br><hr></p>
			<a name="Launch"></a>
			<h4>Launch Options</h4>
				<ul>
				  <li>Build before launch 
				    <ul>
				      <li> build is scoped to relevant projects</li>
				      <li>Standard job progress dialog is displayed for the following cases. The 
				        &quot;Run in Background&quot; button is never present. 
				        <ul>
				          <li>Launching in foreground (un-check &quot;Launch in background&quot; 
				            option on common tab) 
				            <ul>
				              <li>Waiting for ongoing build to complete before launching</li>
				              <li>Building before launching</li>
				            </ul>
				          </li>
				        </ul>
				      </li>
				      <li>The progress dialog never appears when launching in the background
				        <ul>
				          <li>When waiting for an ongoing build to complete before launching a 
				            node appears in the debug view in italics showing &quot;waiting for 
				            build&quot;</li>
				        </ul>
				      </li>
				    </ul>
				  </li>
				  <li>Prompt to launch in face of compilation errors 
				    <ul>
				      <li>always/prompt</li>
				      <li>NEW: prompt shuold tell you which project(s) contain errors</li>
				      <li>irrelvant errors should not cause prompt (i.e. Ant errors should not 
				        prevent Java launch)</li>
				    </ul>
				  </li>
				  <li>Prompt to launch in debug mode when breakpoints present 
				    <ul>
				      <li>always/never/prompt</li>
				    </ul>
				  </li>
				  <li>Save dirty editors</li>
				  <li> Launch in foreground/background (controlled via common tab on launch config)</li>
				</ul>
			<p><a href="#top">Back to top</a><br><hr></p>
			<a name="Debug"></a>
			<h4>Debug View Management </h4>
				<ul>
				  <li>Switch to Debug perspective 
				    <ul>
				      <li>When launching (always/never/prompt)</li>
				      <li>When suspending (always/never/prompt)</li>
				    </ul>
				  </li>
				  <li>Activate the Debug view when program suspends 
				    <ul>
				      <li>Debug action set should also open automatically when a debug view is 
				        opened</li>
				      <li>Relevant debug views should automatically open when stack frame is selected 
				        <ul>
				          <li>In debug perspective by default</li>
				          <li>In other perpectives as configured on the &quot;View Management&quot; 
				            pref page (also available in Debug View drop down menu)</li>
				          <li>Use PDA debugger to try debugging different langauges in same perspective 
				            (hope to have this available - example from draft debug article)</li>
				          <li>Automatically opened views should close when debugging ends</li>
				        </ul>
				      </li>
				    </ul>
				  </li>
				  <li>Activate the workbench when a breakpoint is hit</li>
				</ul>
			<p><a href="#top">Back to top</a><br><hr></p>
			<a name="Breakpoints"></a>
			<h4>Breakpoints</h4>
				<ul>
				  <li>Breakpoint groups 
				    <ul>
				      <li>show breakpoints, breakpoint types, breakpoint working sets, files, 
				        projects, resource working sets, advanced</li>
				      <li>auto-add to default breakpoint working set</li>
				      <li>drag &amp; drop between breakpoint working sets (move)</li>
				      <li>copy &amp; paste between breakpoint working sets</li>
				      <li>stratum breakpoints should group by stratum (eg. JSP breakpoints).</li>
				    </ul>
				  </li>
				  <li>Creation of different types of breakpoints (line, class load, method, exception, and watchpoint). 
				    <ul>
				      <li>No breakpoints can be set in interfaces</li>
				      <li>Breakpoints can be set in external source file (file from OS that does not belong to a project)</li>
				      <li>Toggle Line breakpoints - double click in ruler, Run menu action (menu 
				        &amp; keybinding), context menu in outline view</li>
				      <li>Toggle Method breakpoints - double click in ruler, Run menu action (menu 
				        &amp; keybinding), context menu in outline view</li>
				      <li>Class Load Breakpoint - double click in ruler, Run menu action (menu 
				        &amp; keybinding), context menu in outline view</li>
				      <li>Togggle Watchpoints - double click in ruler, Run menu action (menu 
				        &amp; keybinding), context menu in outline view
				        <ul>
				        	<li> watchpoint cannot appear on 'final' field</li>
				        	<li> watchpoint cannot appear on 'static final' field</li>
				        </ul>
				        </li>
				        <li>Exception Breakpoints - Run menu action, hyperlink from stack trace, breakpoints view</li>
				      </ul>
				  </li>
				  <li>Refactorings</li>
				  <ul>
				  	<li>breakpoints should be updated if enclosing type is refactored</li>
				  	<li>method breakpoints should be updated after refactoring method</li>
				  	<li>line breakpoints should be updated if enclosing method refactored</li>
				  	<li>watchpoint should be updated if field refactored</li>
				  </ul>
				  <li>Skip all breakpoints option (manual use of the toggle) 
				    <ul>
				      <li>groups and breakpoints should be rendered with &quot;skip&quot; (crossed 
				        out) line</li>
				    </ul>
				  </li>
				  <li>Import/Export 
				    <ul>
				      <li>export wizard is properly initialized based on breakpoint selection 
				        in Breakpoints view</li>
				      <li>wizard settings are persisted for subsequent import/export operations</li>
				      <li>breakpoint working set information is exported and are re-created on 
				        import</li>
				      <li>existing breakpoints are updated with imported information (for example, 
				        hit count, etc.)</li>
				        <li>breakpoint working sets are recreated properly</li>
				    </ul>
				  </li>
				  <li>Option to open inspector on exception when an exception breakpoint is hit 
				    <ul>
				      <li>Java &gt; Debug: &quot;open popup when suspended on exception&quot;</li>
				    </ul>
				  </li>
				  <li>Option to delete breakpoints vs. working set when &quot;delete&quot; pressed 
				    on a working set
				    <ul>
				    	<li>choices are persisted</li>
				    </ul>
				    </li>
				  <li>Preference for suspending Thread by default on newly created breakpoints</li>
				</ul>
			<p><a href="#top">Back to top</a><br><hr></p>
			<a name="Run"></a>
			<h4>Run to Line </h4>
				<ul>
				  <li>Run to Line
				    <ul>
				      <li>Context menu</li>
				      <li>Run menu action and keybinding</li>
				      <li>Classfile and Compilation unit editor</li>
				      <li>Preference to &quot;skip breakpoints during run to line&quot; (on main 
				        Run/Debug pref page)</li>
				    </ul>
				  </li>
				</ul>
			<p><a href="#top">Back to top</a><br><hr></p>
			<a name="Logical"></a> 
			<h4>Logical Structures </h4>
				<ul>
				  <li>View variables with logical structures on/off</li>
				  <li>Stepping with logical strutures on/off</li>
				  <li>Works for 
				    <ul>
				      <li>java.util.Collection (flat list)</li>
				      <li>java.util.Map (list of map entries)</li>
				      <li>java.util.Map$Entry (key/value)</li>
				    </ul>
				  </li>
				  <li>Selectively turn off logical structures via context menu &quot;Show As &gt; 
				    ...&quot; </li>
				  <li>User defined logical structures 
				    <ul>
				      <li>more than one structure for a type 
				        <ul>
				          <li>all appear in &quot;Show As &gt; ..&quot; menu</li>
				          <li>can choose between structures properly</li>
				        </ul>
				      </li>
				      <li>structures persist restore properly across workbench invocations</li>
				      <li>structures with compilation errors</li>
				      <li>structures with runtime errors</li>
				      <li>when two different types (A,B) share the same possible logical structures, 
				        their enabled (selected) structure is shared (i.e. if you select &quot;show 
				        A as X&quot; then B will also show as X.</li>
				    </ul>
				  </li>
				</ul>
			<p><a href="#top">Back to top</a><br><hr></p>
			<a name="Watch"></a>
			<h4>Watch Items</h4>
				<ul>
				  <li>Create
				    <ul>
				      <li>From context menu &quot;Add Watch Expression&quot;</li>
				      <li>From variables view context menu &quot;Watch&quot;</li>
				    </ul>
				  </li>
				  <li>Persist</li>
				  <li>Enable/disable</li>
				  <li>Update while stepping</li>
				  <li>Update when selecting a different stack frame</li>
				  <li>Errors appear as children of a watch expression (compilation errors, runtime 
				    errors) </li>
				</ul>
			<p><a href="#top">Back to top</a><br><hr></p>
			<a name="Context"></a>
			<h4>Context Menu Launching</h4>
				<ul>
				  <li>Run/Debug from the context and top level Run/Debug cascade menus. Note that 
				    before a shortcut's propery tester is loaded, it will appear in the context 
				    menu by default. For example, the Java application shortcut requires the &quot;hasMain&quot; 
				    tester from the Java debug plug-in, and thus, until the plug-in is loaded, 
				    the shortcut will appear on all Java files whether they have a main method 
				    or not. 
				    <ul>
				      <li>Java Applications (with main, without main, compilation unit, type, 
				        method, classfile, package, project)</li>
				      <li>Java Applets</li>
				      <li>JUnit tests</li>
				      <li>Ant build, Ant build... (build file, targets in outline and Ant view)</li>
				    </ul>
				  </li>
				  <li>The context menu appears in
				    <ul>
				      <li>Resource navigator</li>
				      <li>Package explorer</li>
				      <li>Outline view</li>
				      <li>Editor</li>
				    </ul>
				  </li>
				  <li>Use keybindings to launch (ALT-Shift-D/X) 
				    <ul>
				      <li>an active editor</li>
				      <li>a selection in an outline/navigator</li>
				    </ul>
				  </li>
				</ul>
			<p><a href="#top">Back to top</a><br><hr></p>
			<a name="Classpaths"></a>
			<h4>Runtime Classpaths</h4>
				<ul>
				  <li>The default classpath should track a project's buildpath</li>
				  <li>Using a non-default bootpath 
				    <ul>
				      <li>Prepending and appending to the default bootpath</li>
				      <li>Using an explicit bootpath (i.e. without prepend/append)</li>
				    </ul>
				  </li>
				  <li>Using a non-default classpath 
				    <ul>
				      <li>different types of entries</li>
				      <li>new entry type - String Variables</li>
				    </ul>
				  </li>
				  <li>Option to only include exported items in runtime classpath (by default, 
				    all items are included).</li>
				</ul>
			<p><a href="#top">Back to top</a><br><hr></p>
			<a name="Source"></a>
			<h4>Source Lookup</h4>
				<ul>
				  <li>The default source lookup path should track changes in the default buildpath 
				    (when using a default runtime classpath). If a non-default runtime classpath 
				    is used, the default source lookup path should track the runtime classpath.</li>
				  <li>Searching for duplicate source files</li>
				  <li>Modifying the source lookup path when a source file cannot be found</li>
				  <li>Types of entries on the source lookup path 
				    <ul>
				      <li>Internal archives</li>
				      <li>External archives</li>
				      <li>Java projects</li>
				      <li>Java classpath variables</li>
				      <li>Directory (external)</li>
				      <li>Folder (in the workspace)</li>
				      <li>Java Library (JRE, required plug-ins, etc).</li>
				    </ul>
				  </li>
				  <li>Multiple source roots in archives</li>
				</ul>
			<p><a href="#top">Back to top</a><br><hr></p>
			<a name="Monitors"></a>
			<h4>Threads &amp; Monitors &amp; Thread Groups </h4>
				<ul>
				  <li>Monitor information is shown in the debug view 
				    <ul>
				      <li>No information/errors for VMs that do not support monitor information</li>
				      <li>monitor information appears for suspended threads</li>
				      <li>monitor information is not displayed for running threads</li>
				      <li>Ensure valid deadlocks are detected 
				        <ul>
				          <li>threads are rendered red (preference color), and have deadlock overlay</li>
				        </ul>
				      </li>
				    </ul>
				  </li>
				  <li>Thread groups
				    <ul>
				      <li>Thread groups can be displayed in debug view by turning on the &quot;Show 
				        Thread Groups&quot; option in the view menu</li>
				    </ul>
				  </li>
				</ul>
			<p><a href="#top">Back to top</a><br><hr></p>
			<a name="Hot"></a>
			<h4>Hot Code Replace </h4>
				<ul>
				  <li>Valid HCR 
				    <ul>
				      <li>method changes (existing)</li>
				      	<ul>
				      		<li>changes to statements inside method work on SUN and IBM vms</li>
				      		<li>HCR fails adding/removing/changing signature of method on SUN vm</li>
				      		<li>HCR allows methods to be added for IBM J9 vm</li>
				      	</ul>
				      <li>changes in existing instance variable initializer</li>
				      <li>affected frames are automatically popped (unless top frame or native 
				        method on the stack)</li>
				      <li>change method in declared inner type</li>
				      <li>change method in anonymous inner type</li>
				      <li>default and non-default packages</li>
				    </ul>
				  </li>
				  <li>Manually drop to frame
				    <ul>
				      <li>works in all methods except last method on stack</li>
				      <li>a native method cannot be dropped (and thus a method above a native 
				        cannot be dropped/re-entered)</li>
				    </ul>
				  </li>
				</ul>
			<p><a href="#top">Back to top</a><br><hr></p>
			<a name="JREs"></a>
			<h4>Installed JREs </h4>
				<ul>
				  <li>Changing the default JRE triggers a build if the default JRE is referenced 
				    by a project.</li>
				  <li>JREs allow a javadoc location to be set per library in the JRE 
				    <ul>
				      <li>Changing the javadoc location on a JRE updates the buildpath javadoc 
				        location</li>
				      <li>Changing the javadoc location on a buildpath (JRE library) updates the 
				        JRE</li>
				    </ul>
				  </li>
				  <li>Changing a javadoc location or source attachment does not causes an explicit 
				    bootpath to be used when launching with that JRE.</li>
				  <li>Copy a JRE definition</li>
				  <li>Import/export of JRE preferences</li>
				</ul>
			<p><a href="#top">Back to top</a><br><hr></p>
			<a name="EEs" id="EEs"></a>
			<h4>Execution Environments </h4>
				<ul>
				  <li>Specifying a build path via EE 
				    <ul>
				      <li>Changing the default JRE for an EE updates buildpath</li>
				    </ul>
				  </li>
				  <li>Specifying a runtime JRE via EE 
				    <ul>
				      <li>Changing the default JRE for an EE updates the default and/or selected EE runtime JRE</li>
				    </ul>
				  </li>
				</ul>
			<p><a href="#top">Back to top</a><br><hr></p>
			<a name="String"></a>
			<h4>String Variables </h4>
				<ul>
				  <li>Use String Variables in launch configs 
				    <ul>
				      <li>VM args, program args, main type name</li>
				    </ul>
				  </li>
				  <li>String Variable selection dialog</li>
				</ul>
			<p><a href="#top">Back to top</a><br><hr></p>
			<a name="Console"></a>
			<h4>Console </h4>
				<ul>
				  <li>Show when output to standard out/err</li>
				  <li>Console title bolds when content changes (but not if on top/auto activated)</li>
				  <li>Console input - typing, pasting, pasting multiple lines</li>
				  <li>CTRL-Z/D for EOF when doing console input</li>
				  <li>Pin a console - pin action is specific to console view. When pinned, console 
				    should not change in that view</li>
				  <li>Scroll lock - specific to console view. When locked, the console in that 
				    view should not scroll</li>
				  <li>Switching between consoles - use the drop down to toggle between consoles. 
				    Clicking on the drop-down should toggle between the last two consoles shown</li>
				  <li>Open new console - CVS and Java Stack Trace Console</li>
				  <li>Stack trace console 
				    <ul>
				      <li>Pasting and navigating stack traces</li>
				      <li>hyperlinks are colored by hyperlink color preferences</li>
				      <li>editing stack traces/clearing console</li>
				      <li>contents are persisted across workbench invocations and close/re-open</li>
				      <li>formatting</li>
				    </ul>
				  </li>
				  <li>Hyperlinks for stack traces, link to source code</li>
				  <li>Hyperlinks for exception names allow creation/modification of exception 
				    breakpoint settings</li>
				  <li>Use alternate console encoding to display DBCS character set 
				    <ul>
				      <li>remember to use &quot;-Dfile.encoding=UTF-8&quot; (or whatever encoding) 
				        on the VM args</li>
				    </ul>
				  </li>
				  <li>Open more than one console view 
				    <ul>
				      <li>pin a view selectively</li>
				      <li>scroll lock a view selectively</li>
				      <li>key-bindings work in views - FORMAT in Java stack trace console/CTRL-D/Z 
				        in process console</li>
				    </ul>
				  </li>
				  <li>Multiplex output via common tab 
				    <ul>
				      <li>a file</li>
				      <li>the console</li>
				      <li>both</li>
				      <li>none</li>
				    </ul>
				  </li>
				  <li>Link to console preferences from context menu</li>
				</ul>
			<p><a href="#top">Back to top</a><br><hr></p>
			<a name="Variables"></a>
			<h4>Variables</h4>
				<ul>
				  <li>NEW: &quot;Find Variable&quot; support and key-binding</li>
				  <li>Changed variables appear red (preference color) when stepping</li>
				  <li>Variables remain expanded/selected as stepping</li>
				  <li>When switching between stack frames (without resuming), the variables expanded/selected 
				    are maintained (i.e. expand and select for frame 1, then select frame 2 and 
				    expand/select. when re-selecting frame 1, the original state is restored).</li>
				  <li>toString() in-line in the tree viewer 
				    <ul>
				      <li>for all variables</li>
				      <li>for variables with detail formatters</li>
				      <li>only in the details area</li>
				    </ul>
				  </li>
				  <li>Debug hover works for symbols with the same name and different values (inherited 
				    fields), showing correct value</li>
				  <li>Changing variable values 
				    <ul>
				      <li>via &quot;Change Value...&quot; context action 
				        <ul>
				          <li>dialogs are different for primitives &amp; objects</li>
				          <li>evaluations are supported</li>
				          <li>editing a String value via evaluation and direct editing</li>
				        </ul>
				      </li>
				      <li>via CTRL-S in the details area 
				        <ul>
				          <li>evaluations for objects</li>
				          <li>direct editing for primitives</li>
				        </ul>
				      </li>
				    </ul>
				  </li>
				  <li>Column support 
				    <ul>
				      <li>Turn columns off/on</li>
				      <li>Colum size automatically until user changes them</li>
				      <li>Sizes are persisted</li>
				      <li>Select &amp; persist columns to display</li>
				      <li>background &quot;changed&quot; color highlighting</li>
				    </ul>
				  </li>
				</ul>
			<p><a href="#top">Back to top</a><br><hr></p>
			<a name="Refactoring"></a>
			<h4>Refactoring</h4>
				<ul>
				  <li>launch configuration main type is updated after type rename, type move, 
				    package rename <br>
				  </li>
				  <li>launch configuration project is updated after project rename, package move, 
				    type move <br>
				  </li>
				  <li>Java breakpoints are updated after type rename, type move, package rename, 
				    package move, project rename <br>
				    <ul>
				      <li>VM suspend at the new location <br>
				      </li>
				      <li>breakpoint attributes are preserved <br>
				      </li>
				      <li>label is updated <br>
				      </li>
				      <li>marker location is updated (text selected when double-clicking on a 
				        breakpoint in the breakpoint view)</li>
				    </ul>
				  </li>
				</ul>
			<p><a href="#top">Back to top</a><br><hr></p>
			<a name="Applets"></a>
			<h4>Applets</h4>
				<ul>
				  <li>Main tab 
				    <ul>
				      <li>specify a project via typing/browsing <br>
				      </li>
				      <li>specify a nonexistent project (should see error if does not exist) <br>
				      </li>
				      <li>specify an applet class via typing/searching (no validation is performed 
				        on type name in the tab - error occurs on launch if an invalid type is 
				        specified) <br>
				      </li>
				      <li>specify a class that is not an applet (no validation is performed - 
				        error occurs on launch if invalid) <br>
				      </li>
				      <li>specify default applet viewer class <br>
				      </li>
				      <li>specify an explicit applet viewer class </li>
				    </ul>
				  </li>
				  <li>Parameters 
				    <ul>
				      <li>specify various width &amp; height <br>
				      </li>
				      <li>specify parameters (available via Applet#getParameter(...)) <br>
				      </li>
				      <li>specify applet name - allows Applets to communicate with each other 
				        via AppletContext#getApplet(...)</li>
				    </ul>
				  </li>
				</ul>
			<p><a href="#top">Back to top</a><br><hr></p>
			<a name="Remote"></a>
			<h4>Remote Debugging</h4>
				<ul>
				  <li>connect to a remote VM 
				    <ul>
				      <li>try &quot;suspend=y&quot; and &quot;suspend =n&quot; options</li>
				      <li>try different sockets</li>
				      <li>try conneting to a socket that has no VM</li>
				      <li>try &quot;localhost&quot; and &quot;127.0.0.1&quot;</li>
				    </ul>
				  </li>
				  <li>terminate should only be enabled when the config specifies that terminate 
				    is supported</li>
				</ul>
				<p><a href="#top">Back to top</a><br><hr></p>
				<a name="JSP"></a>
				<h4>JSP Example </h4>
				<ul>
				  <li>Try JSP debugging example, as documented in the &quot;org.eclipse.jdt.ui.examples.javafamily&quot; 
				    plug-in ReleaseNotes.html. The instructions are in the section titled &quot;Debugging 
				    a JSP&quot; 
				    <ul>
				      <li>Tomcat launch configuration</li>
				      <li>Breakpoints in JSP files</li>
				      <li>Enable/Disable installed JSP breakpoints</li>
				      <li>Enable/Disable un-installed breakpoints when a target/server is running</li>
				      <li>Changing the stratum displayed via context menu in debug view</li>
				      <li>Stepping in a Java file from a JSP file and stepping back (source lookup 
				        should work)</li>
				      <li>Evaluation in the context of a JSP file (requries adding jsp-api.jar, 
				        jasper-runtime.jar and servlet-api.jar from /common/lib to the project's 
				        build path)</li>
				    </ul>
				  </li>
				</ul>
				<a href="#top">Back to top</a><br>
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
