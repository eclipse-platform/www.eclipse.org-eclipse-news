<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Core downloads";
	$pageKeywords	= "core, runtime, resources, jobs, preferences";
	
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
		<h3>Examples/Contributions</h3>
			<ul>
				<li><a href="downloads/examples/movedeletehook/MoveDeleteHookExample1.java">Move/Delete 
				Hook</a> example for Team providers.</li>
			</ul>
		</div>

		<div class="homeitem3col">
		<h3>Spies/Tools</h3>
		      The Platform/Core team has created a group of tools which help them when 
		      developing code or trying to debug problems and investigate bug reports. 
		      They have been developed as both plug-ins and headless utilities and are 
		      available here for download. Also check the <a href="#updates">Update Site</a>. 
		      <ul>
		        <li><b>Core Tools <a href="downloads/tools/org.eclipse.core.tools_1.3.0.zip">v1.4.0</a></b> 
		          - Updated version that works with the Eclipse 3.2 Release.  The "Find Unreferenced Members"
		          tool has been improved to present results in the Search view, and to omit methods that override
		          a supertype method. Simply select a Java element in the Package Explorer
		          and choose "Find Unreferenced Members" from the context menu.</li>
		        <li><b>Core Tools <a href="downloads/tools/org.eclipse.core.tools_1.3.0.zip">v1.3.0</a></b> 
		          - Updated version that works with the Eclipse 3.1 Release.</li>
		        <li><b>Core Tools <a href="downloads/tools/org.eclipse.core.tools_1.2.0.zip">v1.2.0</a> 
		          </b>- Updated version that works with the Eclipse 3.1 M5a build and 
		          later. Note that the plug-ins in this update are shipped as JARs. Yah!</li>
		        <li><b>Core Tools <a href="downloads/tools/org.eclipse.core.tools_1.1.0.zip">v1.1.0</a></b> 
		          - The first version of the tools to run on the Eclipse 3.0 runtime. 
		          This is mostly a port of the original tools but there are some new views 
		          (e.g., Eclipse Preferences view). There may be some issues... Works 
		          with org.eclipse.osgi from HEAD as of 20040505 or I builds starting 
		          the week of 05/10.</li>
		        <li><b>Core Tools <a href="downloads/tools/org.eclipse.core.tools_1.0.2.zip">v1.0.2</a></b> 
		          - This is the version of the core tools plugin that you should use for 
		          Eclipse release 2.1. The core tools patch is not required for this version. 
		          This update fixes a non binary-compatible change that was made within 
		          org.eclipse.core.resources, and appearing in all builds since I20030128. 
		          Some more information has also been added to the element tree spy. Fixes 
		          have been added on 2003/09/23 to fix a concurrency problem.</li>
		        <li><b>Core Tools Patch <a href="downloads/tools/core-tools-patch_1.0.1.zip">v1.0.1</a></b> 
		          - Apply this patch if you want to run the Core Tools on Eclipse builds 
		          earlier than I20021127 (including 2.0.*). See the Core Tools install 
		          notes for details. 
		        <li><b>Core Tools <a href="downloads/tools/org.eclipse.core.tools_1.0.0.zip">v1.0.0</a></b> 
		          - A series of runtime and resource related views and perspectives. The 
		          runtime tools allow users to look which plugins and classes are loaded, 
		          discover why/when they were loaded, etc. The resource tools expose the 
		          behaviour/performance of builders and resource change listeners as well 
		          as the structure of deltas, the workspace and resources. The metadata 
		          tools allow you to inspect the data behind the scenes. To install on 
		          Eclipse 2.0.* and 2.1 prior to I20021127, get the patch below. Otherwise, 
		          just fetch this download, follow the instructions in the <a href="downloads/tools/readme.html">readme</a> 
		          (also in the org.eclipse.core.tools/doc directory) and enjoy.</li>
		        <li><b><img src="images/new.gif" width="31" height="14">Upgraded for Eclipse 3.x. <a href="downloads/tools/org.eclipse.core.tools.restorer_3.0.0.zip">Workspace 
		          Re-Builder</a></b> - Command-line utility program for basic restoration 
		          of a corrupt workspace. This version will re-create your projects 
		          for you but will not restore your metadata. Check out the <a href="downloads/tools/readme_restorer_3.0.0.html">readme</a> 
		          for more details.</li>
		        <li><img src="images/new.gif" width="31" height="14"> <a href="downloads/tools/message_bundles/com.ibm.zrh.eclipse.nls_1.0.0.zip"><strong>JDT/UI 
		          NLS Convertor v1.0.0</strong></a> - Tool to convert your message bundle 
		          accessing to the new Eclipse 3.1 message bundle format. See the complete 
		          documentation <a href="documents/3.1/message_bundles.html">here</a>.</li>
		        <li><img src="images/new.gif" width="31" height="14"> <a href="downloads/tools/org.eclipse.core.tools.buildJARS_1.0.0.zip"><strong>JAR 
		          Convertor v1.0.0</strong></a> - Tool which JARs the plug-ins inside 
		          an Eclipse install. For more information see <a href="documents/3.1/run_from_jars.html">this</a> 
		          page.</li>
		      </ul>
		</div>

		<div class="homeitem3col">
		<h3>Update site</h3>
			  The Core team has an update site where you can find various utility plug-ins:</p>
		      <blockquote>
		        <p>http://eclipse.org/eclipse/platform-core/updates</p>
		      </blockquote>
		</div>

		<div class="homeitem3col">
		<h3>Patches</h3>
	      <ul>
	      	<li>This is where you would find patches for current bugs.  Currently there are no active patches.</li>
	      </ul>
		</div>

		<div class="homeitem3col">
		<h3>Archive</h3>
			<ul>
				<li>Jed's <a href="downloads/examples/autorefresh/com.example.autorefresh-updatesite.zip"> 
				Auto-refresh plug-in v2.1</a> from June 18, 2003. As <a href="http://dev.eclipse.org/mhonarc/lists/platform-core-dev/msg00260.html">described</a> 
				on the platform-core-dev mailing list. For use with Eclipse 2.1 and 
				greater.</li>
				<li>Jed's <a href="downloads/examples/autorefresh/com.example.autorefresh_20030207.zip">Auto-refresh 
				plug-in</a> for versions of Eclipse prior to 2.1 as <a href="http://dev.eclipse.org/mhonarc/lists/platform-core-dev/msg00190.html">described</a> 
				on the platform-core-dev mailing list.</li>
			</ul>
		</div>

	</div>

	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Core links</h6>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="documents.php">Documents</a></li>
				<li><a href="downloads.php">Downloads</a></li>
				<li><a href="resources.php">Resources</a></li>
				<li><a href="planning.php">Planning</a></li>
				<li><a href="testing.php">Testing</a></li>
			</ul>
		</div>
	</div>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
