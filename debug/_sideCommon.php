<?php

	#*****************************************************************************
	#
	# Copyright (c) 2007, 2011 IBM Corporation and others.
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
			<li><a href="/eclipse/debug/nan/new_and_noteworthy.php">New and Noteworthy</a></li>
			<li><a href="http://wiki.eclipse.org/Debug/Test_Script">Test Script</a></li>
			<li><a href="http://wiki.eclipse.org/images/c/c4/Debug.psf">Debug Project Set File</a></li>
			<li><a href="/eclipse/debug/who.php">Who We Are</a></li>
			<li><a href="http://eclipse-debug.blogspot.com/" target="_blank">Debug Team Blog</a></li>
			<li><a href="http://www.facebook.com/group.php?gid=2469776690" target="_blank">Facebook -- Committers Group</a></li>
			<li><a href="/eclipse/debug/about.php">About this content</a></li>
		</ul>
	</div> 
	<div class="sideitem">
		<h6>Plugins</h6>
		<ul>
			<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.core.variables" target="_blank">core.variables</a></li>
			<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.debug.core" target="_blank">debug.core</a></li>
			<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.debug.examples.core" target="_blank">debug.core</a></li>
			<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.debug.examples.ui" target="_blank">debug.core</a></li>
			<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.debug.tests" target="_blank">debug.tests</a></li>
    		<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.debug.ui" target="_blank">debug.ui</a></li>
    		<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.jdt.debug" target="_blank">jdt.debug</a></li>
	        <li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.jdt.debug.ui" target="_blank">jdt.debug.ui</a></li>
	        <li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.jdt.launching" target="_blank">jdt.launching</a></li>
	        <li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.jdt.launching.macosx" target="_blank">jdt.launching.macosx</a></li>
	        <li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.jdt.launching.ui.macosx" target="_blank">jdt.launching.ui.macosx</a></li>
	        <li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.jdt.debug.tests" target="_blank">jdt.debug.tests</a></li>
	        <li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.jdt.debug.jdi.tests" target="_blank">jdt.debug.jdi.tests</a></li>
    		<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.ui.console" target="_blank">ui.console</a></li>
		</ul>
	</div>
EOHTML
?>