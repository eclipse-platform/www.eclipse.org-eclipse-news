<?php
require_once "/home/data/httpd/eclipse-php-classes/system/dbconnection_bugs_ro.class.php";

$committerList = array("Kimberly Horne","Boris Bokowski","Paul Webster","Eric Moffatt","Tod Creasey","Kevin McGuire");
$includedMilestones = array("3.4", "3.4M1", "3.4M2", "3.4M4", "3.4M5", "3.4M6", "3.4M7", "3.4RC1", "3.4RC2", "3.4RC3", "3.4RC4");

$debug_count = 0;
$uniqueNames = array();
$uniqueCount = array();

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
function checkProject($projectNumber, $includes) {

    global $dbc;
    global $dbh;
    global $rs;
    global $debug_count;
    global $committerList;
    global $uniqueCount;
    global $uniqueNames;

    $buglist = array ();
    // Product IDs:
    //   20 Web Tools
    //   46 Java Server Faces
    //   47 Dali JPA Tools

    $sql_info = "SELECT  bugs.bug_id as bug_id,
		bugs.bug_status as bug_status,
		bugs.resolution as bug_resolution,
		bugs.target_milestone as bug_target_milestone,
		attachments.filename as filename,
		attachments.ispatch as ispatch,
        attachments.creation_ts as timestamp,
		profiles.login_name as attachment_login_name,
        profiles.realname as attachment_real_name,
        attach_data.thedata as thedata,
		bugs.keywords as bug_keywords
    FROM bugs,attachments,profiles,attach_data
      WHERE attachments.bug_id = bugs.bug_id
          AND attachments.ispatch = 1
          AND attachments.isobsolete = 0
		  AND char_length(bugs.keywords) > 0
          AND position('contributed' in bugs.keywords) > 0  
          AND bugs.product_id = $projectNumber
		  AND attachments.submitter_id = profiles.userid
          AND  attach_data.id = attachments.attach_id 
          ORDER BY bugs.bug_id";


    //echo "sql_info: " . $sql_info . "<br />";
    //flush();

    $rs = mysql_query($sql_info, $dbh);

    echo "<table border='1' cellpadding='2' width='80%'>";
    echo "<tr><th>Count</th><th>Bug Number</th><th>Target Milestone</th><th>Id</th><th>Name</th><th>Total Lines</th><th>Added Lines</th></tr>";

    while( ($debug_count < 1000) && ($myrow  = mysql_fetch_assoc($rs)) ) {
        if( !in_array($myrow['attachment_real_name'], $committerList ) ) {
            if (in_array($myrow['bug_target_milestone'],$includes)) {
                echo "<tr>";
                $debug_count++;
                echo "<td>" . $debug_count . "</td>";
                //echo "   ";
                echo "<td>" . "<a href=\"https://bugs.eclipse.org/bugs/show_bug.cgi?id=" . $myrow['bug_id'] . "\">" . $myrow['bug_id'] . "</a>" . "</td>";
                $buglist[] = $myrow['bug_id'];
                //echo "   ";
                //echo $myrow['bug_status'];
                //echo ",";
                //echo $myrow['bug_resolution'];
                //echo ",";
                echo "<td>" . $myrow['bug_target_milestone'] . "</td>";
                //echo "   ";
                //echo $myrow['filename'];
                //echo ",";
                //echo $myrow['timestamp'];
                //echo ",";
                echo "<td>" . str_replace("@","{at}", $myrow['attachment_login_name']) . "</td>";
                //echo "   ";
                echo "<td>" . $myrow['attachment_real_name'] . "</td>";

               
                    // echo "NOT_WTP_COMMITTER";
                    if( !in_array($myrow['attachment_login_name'], $uniqueNames ) ) {
                        $uniqueNames[$myrow['attachment_login_name']] = $myrow['attachment_real_name'];
                        if (key_exists ($myrow['attachment_login_name'], $uniqueCount)) {
                            $uniqueCount[$myrow['attachment_login_name']] = $uniqueCount[$myrow['attachment_login_name']] + 1;
                        }
                        else {
                            $uniqueCount[$myrow['attachment_login_name']] = 1;
                        }
                    }
                
                echo "<td>" . countNewLines($myrow) . "</td>";
                echo "<td>" . countAddedLines($myrow) . "</td>";
                echo "</tr>";
            }
        }

         
    }
    echo "</table>";

    $cslist = "";
    foreach ($buglist as $bug) {
        $cslist = $cslist . $bug . ",";
    }
    if (strlen($cslist) > 0) {
        echo "<p>Tip: You can use this <a href=\"https://bugs.eclipse.org/bugs/buglist.cgi?bug_id=" . $cslist ."\">bugzilla single list</a> for above table to first list all bugs in the table, and then narrow or sort the result how ever you would like.</p>";
    }
}


ini_set("display_errors", "true");
error_reporting (E_ALL);

echo "<h1>IP Bug Query Working Page</h1>";

echo "<h2>List bugs with attachments marked as contributed.</h2>";

echo "<p>Date of Query: " . date(DATE_RFC822) . "</p>";

echo "<h3>Platform: UI</h3>";
checkProject(1, "UI", $includedMilestones);

echo "<h3>JSF</h3>";
checkProject(1, "IDE", $includedMilestones);

$dbc->disconnect();

$rs 		= null;
$dbh 		= null;
$dbc 		= null;

echo "<h2>Summary, by Contributors</h2>";
echo "<table border='1' cellpadding='2' width='80%'>";
echo "<tr><th>Id</th><th>Name</th><th>Number of patches</th></tr>";
array_multisort($uniqueCount, SORT_DESC, SORT_NUMERIC);
foreach (array_keys($uniqueCount) as $key) {
     
    echo "<tr>";
    echo "<td>" . str_replace("@","{at}", $key) . "</td><td>" . $uniqueNames[$key] . "</td><td>" . $uniqueCount[$key] . "</td>";
    echo "</tr>";
}
echo "</table>";




exit();
?>
