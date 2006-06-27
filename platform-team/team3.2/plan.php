<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Team/CVS plan for the 3.2 Release";
	$pageKeywords	= "CVS, 3.2, development plan";
	$pageAuthor		= "CVS team";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<p>Back to the <a href="../dev.php">Team Dev Page</a></p>

			<table border="0" cellspacing="10" cellpadding="0">
			  <tbody>
			    <tr>
			      <td><img src="../images/progress.gif" height="5" width="14"> item
			is under development</td>
			      <td><img src="../images/ok.gif" height="10" width="10"> item is
			finished</td>
			      <td><font class="indexsub">[&gt;3.2]</font> item is deferred</td>
			    </tr>
			  </tbody>
			</table>
			<h1>Themes for Team/CVS 3.2</h1>
			<a name="Themes"></a>
			<p>The overall themes for this release are detailed below:</p>
			<ul>
			  <li><strong>Logical Model Integration</strong></li>
			  <ul>
			    <li>Bug <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=37723">37723</a></li>
			    <li>Requirements identified during 3.1 can be found <a href="logical-support.doc">here</a>.</li>
			    <li><img src="../images/progress.gif" height="5" width="14">Publish proposed 
			      solutions
			      <ul>
			        <li>work in progress is found <a href="model-integration-proposals.html">here</a></li>
			      </ul>
			    </li>
			    <li>Logical Model Decoration by Resource based tools (i.e. repositories) 
			      <ul>
			        <li><img src="../images/ok.gif" height="10" width="10">full adaptable 
			          support in decoration manager</li>
			        <li><img src="../images/progress.gif" height="5" width="14">sub-file level 
			          dirty decoration</li>
			        <li>label updating of model elements without a one-to-one mapping to resources</li>
			      </ul>
			    </li>
			    <li>Compare/Merge 
			      <ul>
			        <li>Logical model integration into the synchronize view</li>
			        <li>Modify CVS synchronize pages to support logical model views</li>
			        <li>Logical model compare editor support</li>
			        <li>Support for head-less model merging</li>
			      </ul>
			    </li>
			    <li>CVS Operations 
			      <ul>
			        <li>modification of CVS operations to use model merging support for head-less 
			          and manual compare/merge</li>
			        <li>Support for the display of logical model elements hierarchies in non-synchronization 
			          views.</li>
			      </ul>
			    </li>
			    <li>Patching 
			      <ul>
			        <li><img src="../images/progress.gif" height="5" width="14">Support multi-select 
			          in create/apply patch</li>
			        <li><img src="../images/progress.gif" height="5" width="14">Support resource 
			          selection in Create Patch</li>
			        <li>Integrate logical model support into apply patch</li>
			      </ul>
			    </li>
			  </ul>
			</ul>
			<h1>3.2 Development Effort - Milestone 1 (Friday August 12, 2005) </h1>
			<a name="m1"></a>
			<ul>
			  <li> <span style="font-weight: bold;">Logical Model Integration<br>
			    </span> 
			    <ul>
			      <li><img src="../images/ok.gif" style="width: 10px; height: 10px;"
			 alt=""> Investigate support for decorators 
			        <ul>
			          <li>Patch applied to workbench for adaptable decorator support (bug 
			            <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=86159">86159</a>)</li>
			        </ul>
			      </li>
			      <li><img src="../images/ok.gif" style="width: 10px; height: 10px;"
			 alt="">&nbsp; Investigate support for team operation participation
			        <ul>
			          <li>Prototype developed but not yet available in repository</li>
			        </ul>
			      </li>
			    </ul>
			  </li>
			  <br>
			  <li><span style="font-weight: bold;">Fostering Community Involvement</span>
			<ul>
			      <li><img alt="" style="height: 10px; width: 10px;"
			 src="../images/ok.gif"> Several patches applied to CVS. Thanks everyone:</li>
			    </ul>
			  </li>
			</ul>
			<h1>3.2 Development Effort - Milestone 2 (September 23, 2005) </h1>
			<a name="m2"></a>
			<ul>
			  <li> <span style="font-weight: bold;">Logical Model Integration Proposal</span></li>
			  <ul>
			    <li><img src="../images/progress.gif" height="5" width="14">Draft proposed 
			      solutions document</li>
			    <li>Participate in cross-team items 
			      <ul>
			        <li>Generic Navigator</li>
			        <li>Problems View</li>
			        <li>User Roles</li>
			      </ul>
			    </li>
			  </ul>
			  <li><strong><img src="../images/progress.gif" height="5" width="14">Team Operation 
			    Participation</strong>
			<ul>
			      <li>Need to identify proper plugin for extension point (bug <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=108352">108352</a>)</li>
			      <li>Determine relationship between Participants, LTK and Generic Navigator</li>
			    </ul>
			  </li>
			  <li><strong><img src="../images/progress.gif" height="5" width="14">Label Decoration 
			    with repository dirty state</strong>
			<ul>
			      <li>Need to add API to ResourceMapping to support decoration of sub-file 
			        level model elements. </li>
			      <li>Need to add support for label update of model elements (bug <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=86493">86493</a>)</li>
			    </ul>
			  </li>
			  <li><strong>Investigate manual merging of Logical Models</strong>
			<ul>
			      <li>Logical models in the synchronize view</li>
			      <li>Logical model elements in Compare editors</li>
			    </ul>
			  </li>
			  <li><span style="font-weight: bold;">Improve Patching</span></li>
			  <ul>
			    <li><img src="../images/ok.gif" style="width: 10px; height: 10px;"
			 alt="">Support for multi-select</li>
			    <li><img src="../images/ok.gif" style="width: 10px; height: 10px;"
			 alt="">Support for resource selection</li>
			  </ul>
			</ul>
			<h1>3.2 Development Effort - Milestone 3 (November 4, 2005) </h1>
			<a name="m3"></a>
			<ul>
			  <li><strong>Displaying Logical Models</strong> 
			    <ul>
			      <li><strong><img src="../images/progress.gif" height="5" width="14"></strong>Investigate 
			        how to use Common Navigator framework to support the display of team context</li>
			    </ul>
			  </li>
			  <li><strong>Headless Merging</strong></li>
			  <ul>
			    <li><strong><img src="../images/progress.gif" height="5" width="14"></strong>Define 
			      API for headless model merging</li>
			    <li><strong><img src="../images/progress.gif" height="5" width="14"></strong>Modify 
			      CVS to perform headless merge operations (e.g. update, replace) using model 
			      API.</li>
			  </ul>
			  <li><span style="font-weight: bold;">Investigate Remote Discovery</span></li>
			  <ul>
			    <li>Investigate possible ways to allow users to browse logical models in a 
			      repository </li>
			  </ul>
			</ul>
			<h1>3.2 Development Effort - Milestone 4 (December 16, 2005) </h1>
			<a name="m4"></a>
			<ul>
			  <li><strong>Displaying Logical Models</strong> 
			    <ul>
			      <li>Intergrate team contexts in Common Navigator (gated by Common Navigator)</li>
			    </ul>
			  </li>
			  <li><strong>Model Level Merging</strong></li>
			  <ul>
			    <li>Use Team contexts and Common Navigator to provide manual merging infrastrucuture 
			      (gated by Common Navigator)</li>
			    <li>Do any additional work to ease the implementation of merge support by 
			      repository or model providers</li>
			  </ul>
			  <li><span style="font-weight: bold;">Remote Discovery</span></li>
			  <ul>
			    <li>Depending on the rsults of the M3 investigation, provide facilites to 
			      support remote browsing</li>
			  </ul>
			</ul>
			<h1>3.2 Development Effort - Milestone 5 (February 17, 2006) </h1>
			<a name="m5"></a>
			<p>See the <a href="logical-physical-mappings.html">Team Support for Logical Model 
			  Integration</a> document for a description of the state of the Team API as of 
			  3.2. M4.</p>
			<ul>
			  <li><strong>Displaying Logical Models</strong> 
			    <ul>
			      <li>Support display of team-aware models in views, dialogs and editors</li>
			      <li>Support different operation types (i.e. merging, commit, sync)</li>
			      <li>Support model actions in team views</li>
			      <li>Support team-state decoration in model views (i.e. outside the context 
			        of a team operation)</li>
			    </ul>
			  </li>
			  <li><strong>Model Level Merging</strong></li>
			  <ul>
			    <li>Stress-test CVS Update</li>
			    <li>Add support for CVS Merge and Replace with</li>
			    <li>Test rename/move scenarios</li>
			    <li>Support shared refactoring history during merging</li>
			    <li>Support concurrency</li>
			  </ul>
			  <li><span style="font-weight: bold;">Remote Discovery</span></li>
			  <ul>
			    <li>Finalize Generic History view 
			      <ul>
			        <li>support page based view</li>
			        <li>provide default page implementation</li>
			        <li>provide CVS hsitory with no regressions from CVS view</li>
			      </ul>
			    </li>
			    <li>Remote Browsing 
			      <ul>
			        <li>Support remote browsing of models using EFS and IResource</li>
			        <li>Support loading of workspace from remote model view 
			          <ul>
			            <li>support partial loading of models</li>
			          </ul>
			        </li>
			      </ul>
			    </li>
			  </ul>
			  <li><strong>Operation Validation</strong> 
			    <ul>
			      <li>Provide mechanism for higher level models to validate operations performed 
			        by lower level models</li>
			      <li>Convert resource operations in the IDE plugin to use the validation 
			        mechanism </li>
			    </ul>
			  </li>
			</ul>
			<h1>3.2 Development Effort - Milestone 6 (March 31, 2006) </h1>
			<a name="m6"></a>
			<p>See the <a href="repoRoadMap.html">Repository Roadmap for Logical Model 
			  Integration</a> and <a href="modelRoadMap.html">Model Roadmap for Logical Model 
			  Integration</a> document for a description of the logica; model support that 
			  was addd in 3.2.</p>
			  <ul>
			  <li>Polish up the Team history view and CVS history page.</li>
			  <li>Polish up Model-based synchronization and related CVS Synchronizations.</li>
			  <li>Live annotate.</li>
			  <li>Proxy support for pserver.</li>
			  </ul>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
	<div class="sideitem">
		<h6>Quick Links</h6>
		<ul>
			<li><a href="#Themes">Overall Themes</a></li>
			<li><a href="#m1">Milestone 1</a></li>
			<li><a href="#m2">Milestone 2</a></li>
			<li><a href="#m3">Milestone 3</a></li>
			<li><a href="#m4">Milestone 4</a></li>
			<li><a href="#m5">Milestone 5</a></li>
			<li><a href="#m6">Milestone 6</a></li>
		</ul>
	</div>
	</div>
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>CVS Related Links</h6>
			<ul><li><a href="http://wiki.eclipse.org/index.php/CVS_FAQ">CVS FAQ Wiki</a></li>
				<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/platform-vcm-home/main.html">Team Support</a></li>
			</ul>
		</div>
	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
