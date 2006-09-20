<?php

	# Page updated by Michael Rennie
	# Date: August 22, 2006
	# Default page items include the following:
	#	Home
	#	Downloads
	#	What's New
	#	Get Involved!
	#	Filing Bugs
	# set default theme
	
	$_theme = "Phoenix";
	$theme = "Phoenix";
	if(isset($_POST['theme'])) {
		$_theme = $_POST['theme'];
	}
	if($_theme != "" && $App->isValidTheme($_theme)) {
		setcookie("theme", $_theme);
		$theme = $_theme;
	}
	else {
		# Get theme from browser, or none default
		$theme = $App->getUserPreferedTheme();
	}

	# Defined project nav bar links
	$Nav->addNavSeparator("Project Home", 	"/eclipse/debug/index.php",			"_self", 1);
	$Nav->addCustomNav("Platform Debug", 	"/eclipse/debug/platform/index.php",	"_self", 2);
	$Nav->addCustomNav("JDT Debug", 	"/eclipse/debug/jdt/index.php",	"_self", 2);

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

?>
