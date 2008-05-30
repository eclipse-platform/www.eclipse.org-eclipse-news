<html>
<head>
<title>$CVSHeader: www/eclipse/platform-ui/scripts/platform_contributions_csv.php,v 1.7 2008/05/30 17:28:26 khorne Exp $</title>
</head>
<body>
<?php
require_once "/home/data/httpd/eclipse-php-classes/system/dbconnection_bugs_ro.class.php";
ini_set("display_errors", "true");
error_reporting (E_ALL);
$committerList = array("Tom Schindl"=> array ("BestSolution.at Systemhaus GmbH", ""), "Susan F. McCourt"=> array ("IBM", "sfrankin"), "Szymon Brandys"=> array("IBM", "sbrandys"), "Kim Horne" => array("IBM", "khorne"),"Boris Bokowski"=> array ("IBM", "bbokowski"),"Paul Webster"=> array ("IBM", "pwebster"),"Eric Moffatt"=> array ("IBM", "emoffatt"),"Tod Creasey"=> array ("IBM", "tod"),"Kevin McGuire"=> array ("IBM", "kevinm"), "Tomasz Zarna"=> array ("IBM", "tzarna"), "Carolyn MacLeod"=> array ("IBM", "carolyn"), "Grant Gayed"=> array ("IBM", "ggayed"), "Chris Goldthorpe"=> array ("IBM", "cgoldthor"), "Markus Keller"=> array ("IBM", "mkeller"), "Daniel Megert"=> array ("IBM", "dmegert"), "Martin Aeschlimann"=> array ("IBM", "maeschli"), "Benno Baumgartner"=> array ("IBM", "bbaumgart"), "Christopher Daniel"=> array ("IBM", ""), "DJ Houghton"=> array ("IBM", "dj"), "Darin Wright"=> array ("IBM", "darin"), "Darin Swanson"=> array ("IBM", "darin"), "Samantha Chan"=> array ("IBM", ""), "Michael Rennie"=> array ("IBM", "mrennie"), "Curtis Windatt"=> array ("IBM", ""), "Kim Moir"=> array ("IBM", "kmoir"), "John Arthorne"=> array ("IBM", "johna"), "Oleg Besedin"=> array ("IBM", "obesedin"), "Chris Aniszczyk"=> array ("Independent", "caniszczyk"), "Thomas Watson"=> array ("IBM", "twatson"), "Stefan Xenos"=> array ("IBM", "sxenos"), "Michael Valenta"=> array ("IBM", "mvalenta"), "Atsuhiko Yamanaka"=> array ("JCraft", ""), "Scott Kovatch"=> array ("Adobe", ""));
// the following bugs have been examined by hand and found to not be viable contributions
$exclusions = array("232499", "208332", "56313", "144260", "149884", "199476", "213623", "223147", "162140", "166482", "221190");
$committerOverrides = array("87752" => "Tomasz Zarna", "189304" => "Michael Valenta", "190674" => "Michael Valenta", "208022" => "Tomasz Zarna", "205335" => "Darin Wright", "213244" => "Darin Wright", "213609" => "Darin Wright", "213719" => "Darin Wright", "214424" => "Darin Wright", "217369" => "Darin Wright", "219633" => "Darin Wright", "219643" => "Darin Wright", "223791" => "Curtis Windatt", "186121" => "Michael Valenta", "44107" => "John Arthorne", "155704" => "John Arthorne", "197605" => "DJ Houghton", "205618" => "Oleg Besedin", "72322" => "Martin Aeschlimann", "180921" => "Szymon Brandys", "32166" => "Daniel Megert", "40889" => "Daniel Megert", "184255" => "Daniel Megert", "193728" => "Daniel Megert", "208881" => "Daniel Megert", "201502" => "Kim Horne", "221387" => "Andrew Niefer", "131516" => "Chris Goldthorpe", "191031" => "Chris Goldthorpe", "191045" => "Chris Goldthorpe", "192507" => "Chris Goldthorpe", "156456" => "Chris Goldthorpe", "171276" => "Chris Goldthorpe", "173655" => "Chris Goldthorpe", "178557" => "Dejan Glozic", "189192" => "Chris Goldthorpe", "194490" => "Chris Goldthorpe", "197838" => "Dejan Glozic", "200674" => "Dejan Glozic", "200690" => "Chris Goldthorpe", "205282" => "Chris Goldthorpe", "222635" => "Chris Goldthorpe", "225786" => "Chris Goldthorpe", "226015" => "Chris Goldthorpe", "187796" => "Paul Webster", "217061" => "Daniel Megert", "132499" => "Sonia Dimitrov", "196116" => "Daniel Megert");
$contributorOverrides = array("184830" => array("Marko Topolnik", "mt4web@gmail.com"), "215297" => array("Will Horn", "will.horn@gmail.com"), "212518" => array("Matt Carter", "matt@baselib.org"));
$locationOverrides = array( "47783" => array("org.eclipse.swt"), "49724" => array("org.eclipse.swt"), "202328" => array("org.eclipse.swt"), "217369" => array("org.eclipse.debug.examples.core"), "197977" => array("org.eclipse.team.ui"), "184533" => array("org.eclipse.ui.tests"), "207838" => array("org.eclipse.core.databinding"), "220843" => array("org.eclipse.jface"), "192507" => array("org.eclipse.help"), "127308" => array("org.eclipse.ui.workbench"));
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


echo $componenetLabel . ",";
echo "https://bugs.eclipse.org/bugs/show_bug.cgi?id=" . $myrow['bug_id'] . ",";

echo str_replace("@","{at}", $contributor) . ",";

$count = countAddedLines($myrow);
echo $count < 100 ? "small" :  $count . ",";

echo $committer . ",";
echo str_replace(",", " ", $myrow['description']);
echo "\n";
}
}


}

flush();
}

checkProject("Platform Ant", 1, 16, $includedMilestones);

checkProject("Platform Compare", 1, 18, $includedMilestones);

checkProject("Platform CVS", 1, 84, $includedMilestones);

checkProject("Platform Debug", 1, 20, $includedMilestones);

checkProject("Platform IDE", 1, 542, $includedMilestones);

checkProject("Platform Releng", 1, 4, $includedMilestones);

checkProject("Platform Resources", 1, 7, $includedMilestones);

checkProject("Platform Runtime", 1, 120, $includedMilestones);

checkProject("Platform Search", 1, 19, $includedMilestones);

checkProject("Platform SWT", 1, 2, $includedMilestones);

checkProject("Platform Team", 1, 6, $includedMilestones);

checkProject("Platform Text", 1, 42, $includedMilestones);

checkProject("Platform UI", 1, 8, $includedMilestones);

checkProject("Platform Update", 1, 3, $includedMilestones);

checkProject("Platform UA", 1, 5, $includedMilestones);

$dbc->disconnect();

$rs 		= null;
$dbh 		= null;
$dbc 		= null;


exit();
?>