<?php

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
	# Date:			September 21, 2006
	#
	# Description: This is a contributed item that provides a common left-hand-side 
	# project side bar for links etc.
	#
	#****************************************************************************
	
	$_theme = "Nova";
	$theme = "Nova";
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
	$Nav->addCustomNav( "About Platform Debug", "/projects/project_summary.php?projectid=platform.debug", "", 1);
	$Nav->addCustomNav( "About JDT Debug", "/projects/project_summary.php?projectid=jdt.debug", "", 1);
	$Nav->addNavSeparator("Project Home", 	"/eclipse/debug/index.php",			"_self", 1);
	$Nav->addCustomNav("Platform Debug", 	"/eclipse/debug/platform/index.php",	"_self", 2);
	$Nav->addCustomNav("JDT Debug", 	"/eclipse/debug/jdt/index.php",	"_self", 2);

?>
