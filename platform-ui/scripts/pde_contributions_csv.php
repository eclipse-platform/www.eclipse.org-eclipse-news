<html>
<head>
<title>$CVSHeader: www/eclipse/platform-ui/scripts/pde_contributions_csv.php,v 1.31 2008/06/02 21:08:41 darin Exp $</title>
</head>
<body>
<?php
require_once "/home/data/httpd/eclipse-php-classes/system/dbconnection_bugs_ro.class.php";
ini_set("display_errors", "true");
error_reporting (E_ALL);
$committerList = array("Michael Valenta" => array("IBM", ""), "Mike Pawlowski" => array("IBM", ""), "Paul Webster" => array("IBM", ""), "Andrew Niefer" => array("IBM", ""), "Wassim Melhem" => array("IBM", ""), "Curtis Windatt" => array("IBM", ""), "Olivier Thomann" => array("IBM", ""), "Darin Wright" => array("IBM", ""), "Michael Rennie" => array("IBM", ""), "Brian Bauman"=> array("IBM", ""), "Noam Chitayat"=> array("IBM", ""), "Chris Aniszczyk" => array("IBM", "") );
// the following bugs have been examined by hand and found to not be viable contributions
$exclusions = array();
$committerOverrides = array("170213" => "Wassim Melhem", "170941" => "Brian Bauman", "173447" => "Brian Bauman", "173793" => "Brian Bauman", "185502" => "Brian Bauman", "190717" => "Brian Bauman", "191365" => "Brian Bauman", "229453" => "Nick Boldt", "215760" => "Brian Bauman", "214511" => "Brian Bauman", "214457" => "Brian Bauman", "213255" => "Brian Bauman", "212755" => "Brian Bauman", "212745" => "Brian Bauman", "212744" => "Brian Bauman", "211754" => "Brian Bauman", "208967" => "Brian Bauman", "192232" => "Mike Pawlowski", "192232" => "Mike Pawlowski", "192259" => "Mike Pawlowski", "192267" => "Mike Pawlowski", "192275" => "Mike Pawlowski", "192296" => "Mike Pawlowski", "192329" => "Mike Pawlowski", "192330" => "Mike Pawlowski", "192517" => "Mike Pawlowski", "193385" => "Brian Bauman", "194529" => "Mike Pawlowski", "194650" => "Brian Bauman", "195281" => "Chris Aniszczyk", "195433" => "Brian Bauman", "195763" => "Brian Bauman", "196027" => "Mike Pawlowski", "196046" => "Mike Pawlowski", "196091" => "Mike Pawlowski", "196095" => "Wassim Melhem", "196226" => "Mike Pawlowski", "196227" => "Mike Pawlowski", "196240" => "Mike Pawlowski", "196335" => "Mike Pawlowski", "196675" => "Mike Pawlowski", "196685" => "Mike Pawlowski", "196734" => "Brian Bauman", "196735" => "Wassim Melhem", "196866" => "Wassim Melhem", "196874" => "Wassim Melhem", "196878" => "Wassim Melhem", "196879" => "Mike Pawlowski", "196882" => "Wassim Melhem", "197056" => "Wassim Melhem", "197077" => "Wassim Melhem", "197410" => "Wassim Melhem", "197821" => "Brian Bauman", "197905" => "Wassim Melhem", "198175" => "Brian Bauman", "198305" => "Wassim Melhem", "198309" => "Wassim Melhem", "198310" => "Wassim Melhem", "199101" => "Brian Bauman", "199134" => "Brian Bauman", "199149" => "Wassim Melhem", "199169" => "Brian Bauman", "200428" => "Brian Bauman", "200756" => "Brian Bauman", "201044" => "Brian Bauman", "201260" => "Mike Pawlowski", "201325" => "Brian Bauman", "201980" => "Brian Bauman", "202011" => "Mike Pawlowski", "203993" => "Brian Bauman", "229453" => "Nick Boldt", "215760" => "Brian Bauman", "214511" => "Brian Bauman", "214457" => "Brian Bauman");
$contributorOverrides = array("195281" => "Danail Nachev");
$locationOverrides = array();
$includedMilestones = array("3.4", "3.4 M1", "3.4 M2", "3.4 M4", "3.4 M5", "3.4 M6", "3.4 M7", "3.4 RC1", "3.4 RC2", "3.4 RC3", "3.4 RC4");
$uniqueNames = array();
$uniqueCount = array();
$uniqueBugs = array();

$dbc 	= new DBConnectionBugs();
$dbh 	= $dbc->connect();
$rs = null;

//
// David M Williams
// Tim deBoer
// Raghu Srinivasan
// Phil Berkland
// kiril mitov

function count_addedlines( $data ) {
//$count = substr_count( $data, "\n+" );
$count = preg_match_all ('/\n\+/', $data, $matches );
return $count;
}
function count_newlines( $data ) {
$count = substr_count( $data, "\n" );
//$count = preg_match_all ('/\n\+/', $data, $matches );
return $count;
}
function countNewLines($myrow) {

$result = 0;
$count1 = preg_match( '/patch/', $myrow['filename'] );
if( $count1 > 0 ) {
$result = count_newlines($myrow['thedata']);
}
else
{
$count2 = preg_match( '/RCS file:/', $myrow['thedata'] );
if( $count2 > 0 ) {
$result = count_newlines($myrow['thedata']);
}
}
return $result;
}
function countAddedLines($myrow) {

$result = 0;
$count1 = preg_match( '/patch/', $myrow['filename'] );
if( $count1 > 0 ) {
$result = count_addedlines($myrow['thedata']);
}
else
{
$count2 = preg_match( '/RCS file:/', $myrow['thedata'] );
if( $count2 > 0 ) {
$result = count_addedlines($myrow['thedata']);
}
}
return $result;
}

function findPatchProjects($myrow) {

preg_match_all( '/RCS file: \/(?:(?:cvsroot){0,1}(?:home){0,1}){1}\/eclipse\/([A-Za-z0-9\-\.]+)\/[A-Za-z0-9\/]*/', $myrow['thedata'], $matches);
return $matches[1];
}

function checkProject($componenetLabel, $projectNumber, $component, $includes) {

global $dbc;
global $dbh;
global $rs;
global $committerList;
global $exclusions;
global $uniqueCount;
global $uniqueNames;
global $uniqueBugs;
global $committerOverrides;
global $contributorOverrides;
global $locationOverrides;

$buglist = array ();

$sql_info = "SELECT  bugs.bug_id as bug_id,
		bugs.bug_status as bug_status,
		bugs.resolution as bug_resolution,
		bugs.target_milestone as bug_target_milestone,
		bugs.status_whiteboard as status,
		bugs.short_desc as description,
		attachments.filename as filename,
		attachments.ispatch as ispatch,
        attachments.creation_ts as timestamp,
		attachmentProfiles.login_name as attachment_login_name,
        attachmentProfiles.realname as attachment_real_name,
        committerProfiles.realname as committer_real_name,
        attach_data.thedata as thedata,
		bugs.keywords as bug_keywords,
		bugs.component_id as component_id
    FROM bugs,attachments,profiles as attachmentProfiles, profiles as committerProfiles,attach_data
      WHERE attachments.bug_id = bugs.bug_id
      	  AND resolution = \"FIXED\"
          AND attachments.ispatch = 1
          AND attachments.isobsolete = 0
		  AND char_length(bugs.keywords) > 0
          AND bugs.product_id = $projectNumber
		  AND attachments.submitter_id = attachmentProfiles.userid
		  AND bugs.assigned_to = committerProfiles.userid
          AND attach_data.id = attachments.attach_id 
          AND component_id = $component
          ORDER BY bugs.bug_id, attachments.creation_ts DESC";

$rs = mysql_query($sql_info, $dbh);

while( $myrow  = mysql_fetch_assoc($rs) ) {
if( !array_key_exists($myrow['attachment_real_name'], $committerList) && !in_array($myrow['bug_id'], $exclusions) && !in_array($myrow['bug_id'], $uniqueBugs)) {
if (in_array($myrow['bug_target_milestone'],$includes)) {

array_push($uniqueBugs, $myrow['bug_id']);
$contributor =  $myrow['attachment_real_name'];
$contributorEmail =  $myrow['attachment_login_name'];
if (array_key_exists($myrow['bug_id'], $contributorOverrides)) {
	$pair = $contributorOverrides[$myrow['bug_id']];
	$contributorEmail = $pair[1];
	$contributor = $pair[0];
}
if ($contributor == null) {
	$contributor = $contributorEmail;
}
$committer = $myrow['committer_real_name'];
if (array_key_exists($myrow['bug_id'], $committerOverrides)) {
	$committer = $committerOverrides[$myrow['bug_id']];
}
if (strcmp($committer, $contributor) == 0) {
	$committer = "Chris Aniszczyk";
}


echo $componenetLabel . ",";
echo "https://bugs.eclipse.org/bugs/show_bug.cgi?id=" . $myrow['bug_id'] . ",";

echo str_replace("@","{at}", $contributor) . ",";

$count = countAddedLines($myrow);
echo ($count < 100 ? "small" :  $count) . ",";

echo $committer . ",";
echo str_replace(",", " ", $myrow['description']);
echo "\n";
}
}


}

flush();
}

checkProject("API Tools", 2, 883, $includedMilestones);

checkProject("Build", 2, 21, $includedMilestones);

checkProject("Doc", 2, 23, $includedMilestones);

//checkProject("Incubators", 2, 602, $includedMilestones);

checkProject("UI", 2, 22, $includedMilestones);

$dbc->disconnect();

$rs 		= null;
$dbh 		= null;
$dbc 		= null;


exit();
?>