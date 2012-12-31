<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# index.php
	#
	# Author: 		Michael Rennie
	# Date:			August 25, 2006
	#
	# Description: This is the source lookup proposal item page, describing the items to be addressed in 
	#			   the refactoring of source lookup facilities in 3.0
	#
	#
	#****************************************************************************

	$pageTitle 		= "Platform Debug 3.0 Source Lookup Proposal";
	$pageKeywords	= "debug, platform, debugging, debugger, breakpoints, release, 3.0, 3, 3.0.1, milestone, source, lookup";
	$pageAuthor		= "Debug Team";
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<p>This document proposes a solution for providing source lookup services in the debug platform.</p>
		<p>Author: Darin Wright. Last modified: September 5, 2003</p>
		<div class="homeitem3col">
			<h2><b>Goals</b></h2>
			<p>Providing source lookup services in the debug platform is motivated by the 
			  following goals:</p>
			<ul>
			  <li>Reduce the burden (and code duplication) among debug model providers for 
			    providing implementations of source locators</li>
			  <li>Provide a common user interface for specifying a source lookup path between 
			    many debug models</li>
			</ul>
		</div>
		<div class="homeitem3col">
			<h2><b>The Problem</b></h2>
			<p>From a conceptual point of view, source lookup is similar among many debuggers: 
			  for a given stack frame a source file is found and displayed to the user. Generally, 
			  this involves searching in various repositories for a file with a known name. 
			  However, some parts of the source lookup process are specific to each debugger 
			  (or language being debugged). The goal of the debug platform is to provide an 
			  implementation for the common parts of source lookup, allowing specific debuggers 
			  to contribute to the process where needed.</p>
		</div>
		<div class="homeitem3col">
			<h2><b>A Solution</b></h2>
			<p>Source lookup in Eclipse is achieved as follows:</p>
			<ol>
			  <li>Source is requested for a stack frame (IStackFrame)</li>
			  <li>The source locator (ISourceLocator) associated with a debug session (ILaunch) 
			    is consulted for the source element (Object) for a specific stack frame</li>
			  <li>The source element (Object) is translated into an editor input (IEditorInput) 
			    for a specific editor by the debug model presentation (IDebugModelPresentation)</li>
			</ol>
			<p>Resolving the source element for a stack frame (step 2) is the crux of the 
			  source lookup process that we want to generalize in the debug platform. The 
			  process can be broken down into these steps:</p>
			<ol>
			  <li>Resolving a source file name for a given stack frame (note this is specific 
			    to a debug model).</li>
			  <li>Searching through a collection of source repositories for a file (or files) 
			    with the given name (this process can be generalized). If more than one file 
			    is found, the user must choose the appropriate file to view.</li>
			  <li>Translating the file into a source element object pertinent to the debug 
			    session (note this is specific to a debug model). For example, the Java debugger 
			    would translate a file into a compilation unit object, such that its model 
			    presentation can perform the proper translation to an editor input and editor 
			    id.</li>
			</ol>

			<h4>The Players</h4>
			<p>The following agents are used to abstract the source lookup process.</p>
			<ul>
			  <li>Source locator (ISourceLocator - exists today)</li>
			  <li>source repository (ISourceRepository - a new entity, similar to the &quot;ISourceLocation&quot; 
			    used in the Java debugger)</li>
			  <li>source resolver (ISourceResolver - a new entity, contributed for a launch 
			    configuration type, used to perform debug model specific work)</li>
			</ul>
			<p>A source locator contains an ordered collection of source repositories. A source 
			  repository is a store of source code - for example, a project, folder, archive, 
			  etc.. A source resolver is used to generate a source file name for a stack frame 
			  from a specific debug mode, and to translate a source file into a corresponding 
			  source element object that a debug model presentation understands (for example, 
			  a compilation unit).</p>
			<p>This solution proposes that a generic source locator could be provided by debug 
			  platform, along with implementations of common source repositories. It would 
			  be up to debug model providers (actually, launch configuration type providers) 
			  to contribute implementations of source resolvers.</p>

			<h4>Source Lookup Path</h4>
			<p>Although a source locator contains a collection of source repositories, a launch 
			  configuration contains an unresolved collection of source locations. A source 
			  location is a description of one (or more) source repositories. At launch time, 
			  source locations are translated (resolved) into a collection of actual source 
			  repositories. A source resolver is responsible for providing a default set of 
			  source locations for a launch configuration, and for resolving a set of source 
			  locations into a set of source repositories at launch time. For example, this 
			  allows a &quot;project&quot; source location to be translated into the appropriate 
			  set of Java source folders and archives by the Java debugger.</p>

			<h4>Source Locations and Repositories</h4>
			<p>The debug platform would provide an extension point for contributing source 
			  locations. As well, it would contribute the following common source location 
			  implementations.</p>
			<ul>
			  <li>Project</li>
			  <li>Folder (internal and external)</li>
			  <li>Archive (internal and external)</li>
			  <li>Working Set (a container of projects and/or folders)</li>
			  <li>Workspace (a container of projects)</li>
			</ul>
			<p>Closely tied to source locations, are source repositories. The debug platform 
			  would also provide implementations of source repositories for the following. 
			  All of the above mentioned source locations can be broken down into these building 
			  blocks.</p>
			<ul>
			  <li>IContainer (i.e. a project or folder)</li>
			  <li>Archive (to be used for an internal or external archive file)</li>
			</ul>
			<p>The Java debugger would, for example, contribute the following model specific 
			  source locations, which can also be resolved into source repository implementations 
			  provided by the debug platform.</p>
			<ul>
			  <li>Java classpath variable</li>
			  <li>Java container classpath variable</li>
			</ul>
			<p>The debug platform would provide a new (optional) attribute on the launch configuration 
			  type extension point to associated a source resolver with a launch configuration 
			  type. This allows default source lookup path computation and resolution to be 
			  controlled on a launch configuration type basis (for example, the source lookup 
			  path is different between Java applications and Runtime workbench configurations, 
			  even though they are both based on Java). The source resolver used for a launch 
			  configuration could also be overridden on a configuration basis, via a launch 
			  configuration attribute.</p>
			<p>A source location will contribute a factory used to persist and restore source 
			  location mementos.</p>

			<h4>User Interface</h4>
			<p>Source locations need to be displayed and manipulated in the user interface. 
			  For this reason, source locations will contribute a label provider and &quot;chooser&quot;. 
			  The label provider is used to render a source location. The chooser is used 
			  to select a source location. For example, a source lookup tab will have a set 
			  of buttons to add source locations. When the user presses a button to add, for 
			  example, a project to a source lookup path, the project's &quot;chooser&quot; 
			  will be used to select a project to add.</p>

			<h4>Projects Are Special</h4>
			<p>Adding a project to a source lookup path may have different meanings among 
			  different launch configuration types. For example, when adding a project to 
			  a Java application, prerequisite and exported projects may need to be added 
			  as well. For this reason, the project source location chooser will have its 
			  own extension point that allows source resolvers to extend its functionality. 
			  This will allow the Java source resolver to add check boxes for adding prerequisite 
			  and exported projects, and to compute the set of projects actually added to 
			  the source lookup path, based on the projects selected in the dialog.</p>
		</div>
		<div class="homeitem3col">
			<h2><b>Source Lookup Features</b></h2>
			<p>Following is a list of features that will be supported by source lookup.</p>
			<ul>
			  <li>Changing a source lookup path at runtime. This can be done by changing the 
			    source lookup path stored on an underlying launch configuration.</li>
			  <li>Allowing the user to search for and choose between multiple source elements 
			    with the same name on the source lookup path.</li>
			  <li>When source is not found, the editor displayed should provide a button for 
			    modifying the current source lookup path.</li>
			  <li>The source loctor provided by the debug platform will provide change notification 
			    as repositories are added/removed.</li>
			</ul>
		</div>
		<div class="homeitem3col">
			<h2><b>Summary</b></h2>
			<p>The parts of source lookup that are generic, are provided by the debug platform</p>
			<ul>
			  <li>common source locations - project, folder, archive, working set</li>
			  <li>common source repositories - container (folder or project), archive</li>
			  <li>source locator - uses a source resolver to generate a collection of source 
			    repositories that are searched for a source file</li>
			</ul>
			<p>The parts of source lookup that are debug model or launch configuration type 
			  specific are controlled by an ISourceResolver:</p>
			<ul>
			  <li>providing a source name for a stack frame</li>
			  <li>computing a default set of source location for a launch configuration</li>
			  <li>resolving a set of source locations into a set of source repositories for 
			    a launch configuration</li>
			  <li>translating a source file into a source element object</li>
			  <li>determining the set of supported source locations for a launch configuration</li>
			</ul>
		</div>
		<div class="homeitem3col">
			<h2><b>Notes</b></h2>
			<ul>
			  <li> 
			    <p>It might be better to split the ISourceResolver into two parts - one that 
			      handles debug model specifics (providing a source name for a frame, and 
			      translating a file to a source element object), and one that handles launch 
			      configuration specifics (computing default source locations and resolving 
			      to source repositories). This will likely scale better.</p>
			  </li>
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
