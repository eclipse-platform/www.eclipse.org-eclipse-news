<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Team Component 3.4 Verification Plan";
	$pageKeywords	= "Eclipse, Team, 3.4, verification plan";
	$pageAuthor		= "Team/Compare/CVS team";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<p>Back to the <a href="plan.php">Development Plan Page</a></p>
			
			<div class="homeitem3col">
			
			<h3>3.3.1 Verification (Friday, August 31, 2007) </h3>
			<a name="3_3_1"></a>
			
			<ul>
			  <li>
			  <a href="https://bugs.eclipse.org/bugs/buglist.cgi?quicksearch=190778%2C+175266%2C198457%2C190023%2C+190626">Tomek's bugs to verify</a>  
			  </li>
			  <li>
			  <a href="https://bugs.eclipse.org/bugs/buglist.cgi?quicksearch=190822%2C+191052%2C+192392%2C+189577%2C+189956%2C+190434">Krzysztof's bugs to verify</a>  
			  </li>
			  <li>
			  <a href="https://bugs.eclipse.org/bugs/buglist.cgi?quicksearch=192735%2C+194782%2C+194942%2C+195412%2C++195521%2C196157+">Szymon's bugs to verify</a>  
			  </li> 
			</ul>
			</div>
			
			<div class="homeitem3col">
			<h3>3.4 Verification - Milestone 2</h3>
			<a name="m2"></a>
			
			<ul>
			  <li>
			  <a href="https://bugs.eclipse.org/bugs/buglist.cgi?quicksearch=136330%2C168751%2C175000%2C175526%2C197957%2C198319%2C198382%2C198671%2C+203287%2C+203348%2C+202095">Tomek's bugs to verify</a>  
			  </li>
			  <li>
			  <a href="https://bugs.eclipse.org/bugs/buglist.cgi?quicksearch=201547%2C70893%2C199056%2C199224%2C199367%2C200170%2C200414%2C202422%2C203077%2C203251">Krzysztof's bugs to verify</a>  
			  </li>
			  <li>
			  <a href="https://bugs.eclipse.org/bugs/buglist.cgi?quicksearch=133667%2C+191364%2C+196231%2C+198398%2C+199239%2C+199242%2C+199252%2C+199450%2C+199536%2C++202788">Szymon's bugs to verify</a>  
			  </li> 
			</ul>
			</div>
			
			<div class="homeitem3col">
			<h3>3.4 Verification - Milestone 3</h3>
			<a name="m3"></a>
			</div>
			
			<div class="homeitem3col">
			<h3>3.4 Verification - Milestone 4</h3>
			<a name="m4"></a>
			</div>
			
			<div class="homeitem3col">
			<h3>3.4 Verification - Milestone 5</h3>
			<a name="m5"></a>
			</div>

	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
	<div class="sideitem">
		<h6>Quick Links</h6>
		<ul>
			<li><a href="#3_3_1">3.3.1</a></li>
			<li><a href="#m2">Milestone 2</a></li>
			<li><a href="#m3">Milestone 3</a></li>
			<li><a href="#m4">Milestone 4</a></li>
			<li><a href="#m5">Milestone 5</a></li>
			<li><a href="#m6">Milestone 6</a></li>
		</ul>
	</div>
	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
