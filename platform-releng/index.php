<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Platform Release Engineering";
	$pageKeywords	= "releng";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the markers!	
ob_start();
?>		

	<div id="midcolumn">
		<h1><?= $pageTitle ?></h1>

		<div class="homeitem3col">
		  <h3>About the Platform Releng</h3>
			<p>Platform releng provides release engineering services for the Eclipse Project team (<a href="http://www.eclipse.org/platform=">Platform"</a>,
			<a href="http://www.eclipse.org/jdt=">JDT"</a><a href="http://www.eclipse.org/pde=">PDE"</a><a href="http://www.eclipse.org/equinox=">Equinox"</a>).  We maintain 
			the build scripts that are used to 	massage the source from the developer to a download at eclipse.org.  We are responsible the following cvs projects
			</p>
			<ul>
				<li><b>org.eclipse.releng</b> - Map files used by the entire team to submit source to the build</li>
				<li><b>org.releng.eclipsebuilder</b> - Scripts used to run the build and run tests.</li>
				<li><b>org.eclipse.releng.basebuilder</b> - A subset of SDK plugins used to run the build.</li>
				<li><b>org.eclipse.test</b> - Eclipse test framework</li>
				<li><b>org.eclipse.releng.tests</b> - Test eclipse plugin and features for inclusion of legal files,  adherence to versioning guidelines and readiness translation.</li>
			</ul>
			<p>The RelEng Plug-in is included in the Eclipse builds and is available at the bottom of the download page. <br>
      </p>
       </p><p>This Plug-in provides  features that will help with the Eclipse development process. Installing the plug-in  will add the following actions. The source is contained in the *.jar files so 
please feel free to submit patches for features or bug fixes. To install simply unzip the file into your plugins directory and restart Eclipse. </p>
b>Please use the Release feature of this plug-in to do your build submissions.</b></p><ol> 
<li><b>Release</b> to the Team menu. This action will Tag selected projects with  the specified version <b>and</b> update the appropriate loaded *.map files with  the version. The user must have the *.map files loaded in their workspace and 
the use must commit the map file changes to the repository when done.</li>
<li><b>Load  Map Projects </b>to the Team menu. Select one or more *.map file and this action will load the projects listed in the *.map file into your workspace. Naturally 
the versions specified in the *.map file will be loaded.</li>
<li><b>Tag Map Projects</b> to the Team menu. Select one or more *Map files and this action will tag the projects 
listed in the *Map files with a tag you specify.</li>
<li><b>Compare with Released</b>  to the Compare menu. Compare the selected projects with the versions referenced in the currently loaded map files.</li>
<li><b>Replace with Released</b> to the Replace menu. Replace the selected projects with the versions referenced in the currently loaded map files.</li>
<li><b>Fix Copyright</b> to the Resource Perspective Projects context menu. Select one or more projects in the Resource Perspective. This action will sanity check the copyright notices in all the *.java and *.properties 
files. Copyrights will be updated automatically where the tool deems appropriate.  A copyright.log file will be written to the workspace directory noting odd conflicts 
that need to be looked at. You need to commit the changes yourself. 
		    </p>
	    </div>
		<div class="homeitem3col">
		  <h3>Get involved!</h3>
	      <p>If you are interested in seeing what's happening in platform-releng, subscribe to our mailing list:
	        <a href="http://dev.eclipse.org/mailman/listinfo/platform-releng-dev">platform-releng-dev@eclipse.org</a>. 
	        There are also a number of bugs with the "helpwanted" or "bugday" tag that we are looking for the community to help out with</p>
			<b>Bugs</b> <ul>

        <li><a href="http://bugs.eclipse.org/bugs/buglist.cgi?bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&priority=P1&email1=&emailtype1=substring&emailassigned_to1=1&email2=&emailtype2=substring&emailreporter2=1&bugidtype=include&bug_id=&changedin=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&product=Platform&version=&component=Releng&short_desc=&short_desc_type=allwordssubstr&long_desc=&long_desc_type=allwordssubstr&keywords=&keywords_type=anywords&field0-0-0=noop&type0-0-0=noop&value0-0-0=&cmdtype=doit&order=Reuse+same+sort+as+last+time" target="_top">Priority 
          1</a></li>
        <li><a href="http://bugs.eclipse.org/bugs/buglist.cgi?bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&email1=&emailtype1=substring&emailassigned_to1=1&email2=&emailtype2=substring&emailreporter2=1&bugidtype=include&bug_id=&changedin=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&product=Platform&component=Releng&short_desc=&short_desc_type=allwordssubstr&long_desc=&long_desc_type=allwordssubstr&keywords=&keywords_type=anywords&field0-0-0=noop&type0-0-0=noop&value0-0-0=&cmdtype=doit&newqueryname=&order=Reuse%2Bsame%2Bsort%2Bas%2Blast%2Btime" target="_top" >New, 
          Assigned and Reopened</a> </li>
        <li><a href="http://bugs.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&email1=&emailtype1=substring&emailassigned_to1=1&email2=&emailtype2=substring&emailreporter2=1&bugidtype=include&bug_id=&changedin=7&votes=&chfield=resolution&chfieldfrom=&chfieldto=Now&chfieldvalue=&product=Platform&version=&component=Releng&short_desc=&short_desc_type=allwordssubstr&long_desc=&long_desc_type=allwordssubstr&keywords=&keywords_type=anywords&field0-0-0=noop&type0-0-0=noop&value0-0-0=&cmdtype=doit&order=Reuse+same+sort+as+last+time" target="_top">Resolved 
          in the last week</a></li>
        <li><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&amp;short_desc_type=allwordssubstr&amp;short_desc=&amp;classification=Eclipse&amp;product=Platform&amp;component=Releng&amp;long_desc_type=allwordssubstr&amp;long_desc=&amp;bug_file_loc_type=allwordssubstr&amp;bug_file_loc=&amp;status_whiteboard_type=allwordssubstr&amp;status_whiteboard=&amp;keywords_type=allwords&amp;keywords=helpwanted&amp;bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;emailtype1=substring&amp;email1=&amp;emailtype2=substring&amp;email2=&amp;bugidtype=include&amp;bug_id=&amp;votes=&amp;chfieldfrom=&amp;chfieldto=Now&amp;chfieldvalue=&amp;cmdtype=doit&amp;order=Reuse+same+sort+as+last+time&amp;field0-0-0=noop&amp;type0-0-0=noop&amp;value0-0-0=">Helpwanted bugs</a>
         </li>
      </ul>
	      <p></p>
		</div>
	</div>

	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Platform releng</h6> links</h6>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="buildSchedule.html">Build Schedule</a></li>
				<li><a href="http://wiki.eclipse.org/index.php/Platform-releng-faq">Platform Releng FAQ</a></li>
			</ul>
		</div>
	</div>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
