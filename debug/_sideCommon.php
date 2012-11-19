<?php

	#*****************************************************************************
	#
	# Copyright (c) 2007, 2012 IBM Corporation and others.
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
	# Description: This is a contributed item that provides a common side bar for links etc.
	#
	#****************************************************************************
    
    $commonside = <<<EOHTML
	<div class="sideitem">
		<h6>Quick Links</h6>
		<ul>
			<li><a href="http://wiki.eclipse.org/Debug/FAQ">Frequently Asked Questions</a></li>
			<li><a href="http://wiki.eclipse.org/Debug/Developers">Developers</a></li>
			<li><a href="/eclipse/debug/documents.php">Articles & Documents</a></li>
			<li><a href="http://wiki.eclipse.org/Debug/Test_Script">Test Script</a></li>
			<li><a href="/eclipse/debug/who.php">Who We Are</a></li>
			<li><a href="http://eclipse-debug.blogspot.com/" target="_blank">Debug Team Blog</a></li>
			<li><a href="/eclipse/debug/about.php">About this content</a></li>
		</ul>
	</div> 
	<div class="sideitem">
		<h6>Git Repos</h6>
		<ul>
			<li><a href="http://git.eclipse.org/c/platform/eclipse.platform.debug.git/">Platform Debug GIT repo</a></li>
    		<li><a href="http://git.eclipse.org/c/jdt/eclipse.jdt.debug.git/">JDT Debug GIT repo</a></li>
		</ul>
	</div>
EOHTML
?>