<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#
	# Author: 		Michael Rennie
	# Date:			November 10, 2006
	#
	# Description: a new and noteworty entry for 3.1M5 debug 
	#
	#
	#****************************************************************************
	
	
	$pageTitle 		= "Debug Project New and Noteworthy for 3.1M5";
	$pageKeywords	= "debug, platform, debugging, debugger, breakpoints, launching, new, noteworthy";
	$pageAuthor		= "Debug Team";
	
	include("../../../_sideCommon.php");
	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<table border="0" width="80%" cellpadding="10" cellspacing="0">
  <tr> 
    <td colspan="2"> 
      <hr>
    </td>
  </tr>
  <tr> 
    <td width="30%" valign="top" align="left"> 
      <p align="right"><b>Breakpoint organization</b> 
    </td>
    <td width="70%" valign="top"> 
      <p>The Breakpoints view allows breakpoints to be grouped by type, project, 
        file, or working sets and supports nested groupings. You can use breakpoint 
        working sets to group breakpoints into problem specific sets that can 
        be quickly enabled and disabled as a whole. Newly created breakpoints 
        are automatically placed into the default breakpoint working set, which 
        is displayed with a bold font. You can copy and paste and drag and drop 
        breakpoints between breakpoint working sets, and a breakpoint can be placed 
        in more than one breakpoint working set.
      <p><img src="breakpoint_workingsets.gif" title="Breakpoints view" alt="Breakpoints view showing working sets"> 
    </td>
  </tr>
  <tr> 
    <td colspan="2"> 
      <hr>
    </td>
  </tr>
  <tr> 
    <td width="30%" valign="top" align="left"> 
      <p align="right"><b>Find variable</b>
    </td>
    <td width="70%" valign="top"> 
      <p>The Find Variable action in the Variables view allows you to type in 
        the name of a variable you are looking for. As you type, the Variables 
        view selects the next visible variable matching the entered text. As well, 
        the Find variable dialog shows variables matching the text entered so 
        far.
    </td>
  </tr>
  <tr> 
    <td colspan="2"> 
      <hr>
    </td>
  </tr>
  <tr> 
    <td width="30%" valign="top" align="left"> 
      <p align="right"><b>Ant &quot;objects&quot; presentation in the UI</b>
    </td>
    <td width="70%" valign="top">Ant tasks, types, properties and extra classpath entries are differentiated in the Ant preferences and Ant launch configuration tabs based on their availability for same or separate JRE builds
          <p><img src="ant_object_ui.gif" title="Classpath ant preference page" alt="Classpath entries"> 
    </td>
  </tr>
  <tr> 
    <td colspan="2"> 
      <hr>
    </td>
  </tr>
  <tr> 
    <td width="30%" valign="top" align="left"> 
      <p align="right"><b>Ant debugger call stack and properties</b>
    </td>
    <td width="70%" valign="top">The Ant debugger presents you the dependency call stack for any target. As well the presentation of Ant properites are grouped in the Variables view for your convienience:
    <ul><li>System: Ant properties set from the System for the the build</li>
    <li>User: properties such as those set using the -D option</li>
    <li>Runtime: all properties set during the execution of the build</li>
    </ul>
          <p><img src="ant_dep_callstack.gif" title="Debug view" alt="Ant dependency call stack"> 
    </td>
  </tr>
  <tr> 
    <td colspan="2"> 
      <hr>
    </td>
  </tr>
  <tr> 
    <td width="30%" valign="top" align="left"> 
      <p align="right"><b>Ant target(s) per build kind</b>
    </td>
    <td width="70%" valign="top"> 
      <p>The Targets tab for an Ant builder allows you to specify the target(s) that should be executed for each build kind. This includes the target to execute when you invoke a &quot;Clean&quot;.
      <p><img src="build_targets.gif" title="Builder properties dialog" alt="Targets tab"> 
    </td>
  </tr>
  <tr>
    <td width="30%" valign="top" align="left">&nbsp;</td>
    <td width="70%" valign="top">&nbsp;</td>
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
