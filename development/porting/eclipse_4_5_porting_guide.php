<?php  																														
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 
$App 	= new App();	
$Nav	= new Nav();	
$Menu 	= new Menu();
/* un-comment to use 100% of the content box
$right_nav = FALSE;
*/	
$keyword = 'Eclipse 4.5, API contract compatibility, migrating 4.4 plug-ins to 4.5';
require_once($_SERVER['DOCUMENT_ROOT'] ."/eclipse/development/nova/_projectCommon.php");