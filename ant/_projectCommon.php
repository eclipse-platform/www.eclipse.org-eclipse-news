<?php

	#*****************************************************************************
	#
	# Copyright (c) 2008, 2009 IBM Corporation and others.
 	# All rights reserved. This program and the accompanying materials
 	# are made available under the terms of the Eclipse Public License v1.0
 	# which accompanies this distribution, and is available at
 	# http://www.eclipse.org/legal/epl-v10.html
 	# Contributors:
	#     IBM Corporation - initial implementation
	#
	# Author: 		Ant Team
	# Date:			November 26, 2008
	#
	# Description: This is a contributed item that provides a common left-hand-side 
	# project side bar for links etc.
	#
	#****************************************************************************
	
	$_theme = "Nova";
	$theme = "solstice";
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
	$Nav->addCustomNav( "About Platform Ant", "/projects/project_summary.php?projectid=eclipse.platform.ant", "", 1);
	$Nav->addNavSeparator("Projects", 	"index.php");
	$Nav->addCustomNav("Platform", "http://www.eclipse.org/platform/", "_self", 1);
	$Nav->addCustomNav("JDT", "http://www.eclipse.org/jdt/", "_self", 1);
	$Nav->addCustomNav("PDE", "http://www.eclipse.org/pde/", "_self", 1);
	$Nav->addCustomNav("e4", "http://www.eclipse.org/e4/", "_self", 1);
	$Nav->addCustomNav("Incubator", "http://www.eclipse.org/eclipse/incubator/", "_self", 1);
	$Nav->addNavSeparator("Development", "http://www.eclipse.org/eclipse/development/", "_self", 1);
	$Nav->addCustomNav("Mailing Lists", 	"http://www.eclipse.org/mail/", "_self", 1);
	$Nav->addCustomNav("Examples", 	"/eclipse/ant/examples/examples.php",	"_self", 2);
	$Nav->addNavSeparator("Project Home", 	"/eclipse/debug/index.php",			"_self", 1);
	$Nav->addCustomNav("Platform Ant", 	"/eclipse/ant/index.php",	"_self", 2);

?>
