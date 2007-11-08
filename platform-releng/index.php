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
			the build scripts that are used to massage the source from the developer to a download at eclipse.org.  We are responsible the following cvs projects
			</p>
			<ul>
				<li><b>org.eclipse.releng</b> - Map files used by the entire team to submit source to the build</li>
				<li><b>org.releng.eclipsebuilder</b> - Scripts used to run the build and tests.</li>
				<li><b>org.eclipse.releng.basebuilder</b> - A subset of SDK plugins used to run the build.</li>
				<li><b>org.eclipse.test</b> - Eclipse test framework</li>
				<li><b>org.eclipse.releng.tests</b> - Test eclipse plugin and features for inclusion of legal files and adherence to versioning guidelines.</li>
			</ul>			
	    </div>
		<div class="homeitem3col">
		  <h3>Get involved!</h3>
	      <p>If you are interested in seeing what's happening in platform-releng, subscribe to our mailing list:
	        <a href="http://dev.eclipse.org/mailman/listinfo/platform-releng-dev">platform-releng-dev@eclipse.org</a>. 
	        There are also a number of bugs with the "helpwanted" tag that indicate where help would be greatly appreciated.</p>
			

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
			<h6>Platform releng link</h6> 
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
