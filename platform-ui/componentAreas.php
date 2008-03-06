<style type="text/css">
<!--
div.component{
	vertical-align: top; 
	text-align:right;
}
a.bugs {
	style="font-size: smaller";
}
div.owner {
	text-indent: 30px;
}
-->
</style>
<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	ob_start();
	$pageTitle = "Platform UI Component Areas";
	$pageKeywords	= "platform ui component area";
	$pageAuthor = "Platform UI Monkey";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
	 

?>
<script language="javascript">
<!--
function viewBugsWithSummary(desc) {
	window.location = "https://bugs.eclipse.org/bugs/buglist.cgi?short_desc_type=anywordssubstr&short_desc=" + encodeURI(desc) + "&product=Platform&component=UI&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&keywords_type=allwords&keywords=&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&changedin=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&newqueryname=&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=";
}

function viewBugsByUser(email) {
	window.location = "https://bugs.eclipse.org/bugs/buglist.cgi?short_desc_type=allwordssubstr&short_desc=&product=Platform&component=UI&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&keywords_type=allwords&keywords=&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailassigned_to1=1&emailtype1=substring&email1=" + email + "&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&changedin=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&newqueryname=&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=";
}

window.onload = function() {

	 var xmlHttp=null;
	 try {
	    // Firefox, Opera 8.0+, Safari, IE7+
	    xmlHttp = new XMLHttpRequest();
	 } catch (e) {
	    // Internet Explorer
	    try {
	       xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
	    } catch (e) {
	       xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
	    }
	 }
	 xmlHttp.onreadystatechange = function() {
	    if (xmlHttp.readyState == 4){
	       
	          if (xmlHttp.status == 200) {
	             buildTable(xmlHttp.responseText);
	        	  //document.getElementById("ajax_output").innerHTML = xmlHttp.responseText;
	          }else{
	        	  alert(xmlHttp.status);
	          }
	       } 
	 }
	 xmlHttp.open("get","componentAreas.json");
	 xmlHttp.send(null); 

}
function buildTable(loadedJSON){
	var container = eval('(' + loadedJSON + ')');
	var assignments = container.assignments;
	var users = container.users;
	
	table = document.getElementById('componentAreas');
	var row = table.insertRow(0);
	var component = row.insertCell(0);
	var description = row.insertCell(1);
	component.innerHTML = '<h3>Component</h3>';
	description.innerHTML = "<h3>Description</h3>";
	
	for (i = 0; i < assignments.length; i++){
		row = table.insertRow(i+1);
		component = row.insertCell(0);
		description = row.insertCell(1);
		component.innerHTML = '<div id="component">[<a href="javascript:viewBugsWithSummary(\'[' + assignments[i].component + ']\')">' + assignments[i].component + '</a>]</div>';
		description.innerHTML = assignments[i].description;
			
		for (j = 0; j < users.length; j++){
			if (users[j].user == assignments[i].assignee){
				description.innerHTML += '<div class="owner">' + users[j].name + ' <a class="bugs"  href="javascript:viewBugsByUser(\''+users[j].email+'\')">[bugs]</a></div>';
			}
		}
	}
	
}
//-->
<!-- 'directories=0,height=480,location=0,resizable=1,scrollbars=1,toolbar=0,width=515' -->
</script>

<div id="maincontent">
	<div id="midcolumn">
		<h1><?= $pageTitle ?></h1>
		Platform UI is divided into the following functional areas. The tags in
square brackets are used in bug report subject headings to indicate the
affected area. The current owner of each functional area is indicated in
parentheses. The queries here may not represent all bugs in a given
component area if there are any that havn't been properly tagged.
<p>
<p>Last updated: March 4, 2008
<p>
<table id="componentAreas" border="1">

</table>

<p>	
	</div>
</div>


<?
	# Generate the web page
	$App->AddExtraHtmlHeader($script);
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, ob_get_clean());
?>