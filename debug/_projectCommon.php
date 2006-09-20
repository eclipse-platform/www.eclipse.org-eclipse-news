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

?>
