<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# Copyright (c) 2007 IBM Corporation and others.
 	# All rights reserved. This program and the accompanying materials
 	# are made available under the terms of the Eclipse Public License v1.0
 	# which accompanies this distribution, and is available at
 	# http://www.eclipse.org/legal/epl-v10.html
 	# Contributors:
	#     IBM Corporation - initial implementation
	#
	# Author: 		Debug Team
	# Date:			November 10, 2006
	#
	# Description: a new and noteworty entry for 3.3M6 debug 
	#
	#
	#****************************************************************************
	
	
	$pageTitle 		= "Debug Project New and Noteworthy for 3.3M6";
	$pageKeywords	= "debug, platform, debugging, debugger, breakpoints, launching, new, noteworthy";
	$pageAuthor		= "Debug Team";
	
	include("../../../_sideCommon.php");
	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<table border="0" width="80%" cellpadding="10" cellspacing="0">
		  <tr> 
		    <td colspan="2"> <hr></td>
		  </tr>
		  <tr> 
		   <td valign="top" align="left"><b>Launch selection vs. launch last</b></td>
		    <td valign="top"><p>Running and debugging applications has been simplified 
		        to run or debug the selected file or active editor. Use the &quot;Run/Debug 
		        &gt; Launching &gt; Launch the selected resource or active editor&quot; 
		        preference to enable this behavior. When the selected resource (or active 
		        editor) is not executable, you can opt to launch the associated project 
		        by selecting &quot;Always launch project if selected resource cannot be 
		        launched&quot;.</p>
		      <p><img src="launch-pref.png" alt="Preference for launch selection vs. launch last"/>
		      </p>
		      <p>Pressing the Run or Debug toolbar button will launch the selected resource 
		        (as will the Run or Debug action in the top level Run menu). When no launch 
		        configuration exists for a file and there is only one way to launch it, 
		        the file will simply be launched in the mode you selected. When there 
		        is more than one way to launch a file you will be prompted to select how 
		        to run or debug the application. For example, when running a JUnit test 
		        you can run as a Java application or JUnit test. A a launch configuration 
		        will be created and an entry will be added to the launch history for the 
		        application.</p>
		      <p><img src="select-way.png" alt="Select a way to run the application"/></p>
		      <p>When the same resource is launched again, the most recent configuration 
		        in the launch history associated with that resource is re-launched.</p></td> 
		  </tr>
		  <tr> 
		    <td colspan="2"> <hr /> </td>
		  </tr>
		  <tr> 
		    <td width="30%" valign="top" align="left"><b>Run/Debug settings</b></td>
		    <td width="70%" valign="top"><p>A new properties page has been added to manage 
		        launch configurations associated with a resource. For example, selecting 
		        the &quot;Run/Debug Settings&quot; property page for a project will display 
		        all launch configurations associated with that project. Configurations 
		        can be created, deleted, and edited from this page.</p>
		      <p><img src="run-settings.png" alt="Run/Debug Settings property page" /></p></td>
		  </tr>
		  <tr> 
		    <td colspan="2"> <hr /> </td>
		  </tr>
		  <tr> 
		    <td valign="top" align="left"><b>Hyperlink stepping</b></td>
		    <td valign="top"><p>When debugging you can use hyperlinks to step into a method. 
		        Use the &quot;Ctrl-Alt&quot; keys to step into the method (rather than 
		        &quot;Ctrl&quot; which will navigate to the source code).</p>
		      <p><img src="hyperlink-step.png" alt="Step into using hyperlink (Ctrl+Alt)" /></p></td>
		  </tr>
		  <tr> 
		  	<td colspan="2"> <hr /> </td>
		  </tr>
		   <tr> 
		    <td valign="top" align="left"><b>Force early return</b></td>
		    <td valign="top"><p>You can force an early return from a method (only available 
		        when debugging on a J2SE6 virtual machine). This returns a value from 
		        the current stack frame without executing any more instructions in the 
		        method and releases any locks obtained by synchronized blocks. A return 
		        value is created by selecting an expression and &quot;Force Return (Alt-Shift-F)&quot;. 
		        This action is available from the Java editor's context menu, top level 
		        Run menu, in the Display view, and in the detail pane of the Variables 
		        view.</p>
		      <p>For example, if a method was going to return <code>false</code> you could 
		        for return a value of <code>true</code> by selecting an expression in 
		        the Display view and invoking &quot;Force Return&quot;. Forcing an early 
		        return from a void method does not require an expression to be selected.</p>
		      <p><img src="false-sample.png" alt="Code snippet that would return 'false'" /></p>
		      <p><img src="force-return.png" alt="Force return value of selected expression" /></p></td>
		  </tr>
		  <tr> 
		    <td colspan="2"> <hr /> </td>
		  </tr>
		  <tr> 
		    <td valign="top" align="left"><b>Browse object references</b></td>
		    <td valign="top"><p>You can browse all references to an object (only available 
		        when debugging on a J2SE6 virtual machine). Object references can be displayed 
		        in the variables view by toggling the &quot;Show References&quot; setting 
		        in the view menu. References to an object are grouped in a collection 
		        named &quot;References&quot;.</p>
		      <p><img src="references.png" alt="Show references in variables view" /></p>
		      <p>References can also be displayed in a popup by selecting an object in 
		        the variables view and selecting &quot;All References...&quot; from the 
		        context menu.</p></td>
		  </tr>
		  <tr> 
		    <td colspan="2"> <hr /> </td>
		  </tr>
		  <tr> 
		    <td valign="top" align="left"><b>Browse all instances</b></td>
		    <td valign="top"><p>You can browse all instances of a type (only available 
		        when debugging on a J2SE6 virtual machine). Instances are displayed in 
		        a popup by selecting a type in the editor outline, a type name in the 
		        Java editor, or a variable in the Variables view and selecting &quot;All 
		        Instances...&quot; from the context menu.</p>
		      <p><img src="instances.png" width="282" height="244" /></p></td>
		  </tr>
		  <tr> 
		    <td colspan="2"> <hr /> </td>
		  </tr>
		  <tr> 
		    <td valign="top" align="left"><b>Step through filters vs. step return</b></td>
		    <td valign="top"><p>You can configure step filters to always return from a 
		        filtered location or step through to a non-filtered location. For example, 
		        if <code>java.util</code> is a filtered location, stepping into code in 
		        <code>HashMap</code> could result in a call back to your application code 
		        to check the equality of an object. If you choose to &quot;Step through 
		        filters&quot; a step into would end up in your application code. However, 
		        when the &quot;Step through filters&quot; option is disabled, a step into 
		        <code>HashMap</code> would behave like a step over.</p>
		      <p>Use the &quot;Step though filters&quot; preferences setting on the &quot;Java 
		        &gt; Debug &gt; Step Filtering&quot; preference to toggle the feature.</p>
		      </td>
		  </tr>
		  <tr> 
		    <td colspan="2"> <hr /> </td>
		  </tr>
		  <tr> 
		    <td valign="top" align="left"><b>Export logical structures</b></td>
		    <td valign="top"><p>You can now export and import logical structure preferences 
		        separate from other workspace preferences.</p>
		      <p><img src="export-logical.png" alt="Export logical structures" /></p></td>
		  </tr>
		</table>
	</div>
	<div id="rightcolumn">
		$commonside
	</div>
</div>


EOHTML;

	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
