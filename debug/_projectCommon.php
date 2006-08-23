<?php

	# set default theme
	$_theme = "";
	$theme = "";
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

 
	

	# Define your project-wide Nav bars here.
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	$Nav->addNavSeparator("Phoenix Home", "/phoenix/");
	$Nav->addCustomNav("About", 			"/phoenix/about.php",	 		"_self", 2);
	$Nav->addCustomNav("Downloads", 		"/phoenix/downloads.php", 		"_self", 2);
	$Nav->addCustomNav("Getting Started", 	"/phoenix/docs/",			 	"_self", 2);
	$Nav->addCustomNav("Development", 		"/phoenix/development.php", 	"_self", 2);

?>
