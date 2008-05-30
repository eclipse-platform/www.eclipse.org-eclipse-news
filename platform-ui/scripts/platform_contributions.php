<html>
<head><title>$CVSHeader: www/eclipse/platform-ui/scripts/platform_contributions.php,v 1.69 2008/05/30 14:13:42 khorne Exp $</title></head>
<body>
<?php
require_once "/home/data/httpd/eclipse-php-classes/system/dbconnection_bugs_ro.class.php";
ini_set("display_errors", "true");
error_reporting (E_ALL);
$committerList = array("Tom Schindl", "Susan F. McCourt", "Szymon Brandys", "Kim Horne","Boris Bokowski","Paul Webster","Eric Moffatt","Tod Creasey","Kevin McGuire", "Tomasz Zarna", "Carolyn MacLeod", "Grant Gayed", "Chris Goldthorpe", "Markus Keller", "Daniel Megert", "Martin Aeschlimann", "Benno Baumgartner", "Christopher Daniel", "DJ Houghton", "Darin Wright", "Darin Swanson", "Samantha Chan", "Michael Rennie", "Curtis Windatt", "Kim Moir", "John Arthorne", "Oleg Besedin", "Chris Aniszczyk", "Thomas Watson", "Stefan Xenos", "Michael Valenta", "Atsuhiko Yamanaka", "Scott Kovatch");
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

function checkProject($projectNumber, $component, $includes) {

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

	// AND position('contributed' in bugs.keywords) > 0
    //echo "sql_info: " . $sql_info . "<br />";
    //flush();

    $rs = mysql_query($sql_info, $dbh);

    echo "<table border='1' cellpadding='2' width='80%'>\n";
    echo "<tr><th>CVS Directory</th><th>Bug Number</th><th>Name</th><th>Added Lines</th><th>Committer</th></tr>\n";

    while( $myrow  = mysql_fetch_assoc($rs) ) {
        if( !in_array($myrow['attachment_real_name'], $committerList) && !in_array($myrow['bug_id'], $exclusions) && !in_array($myrow['bug_id'], $uniqueBugs)) {
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
            	$color = (strcmp($committer, $contributor) == 0 || in_array($contributor, $committerList)) ? "#FFFF00" : (strpos($myrow['bug_keywords'], 'contributed') === false ? "#FF8080" : "#FFFFFF");
            	//$color = strpos($myrow['bug_keywords'], 'contributed') === false ? (strcmp($committer, $contributor) == 0  ? "#FFFF00": "#FF8080") : "#FFFFFF";
                echo "<tr bgcolor=\"$color\">";
                
                if (array_key_exists($myrow['bug_id'], $locationOverrides)) {
                	$allProjects = $locationOverrides[$myrow['bug_id']];
                }
                else {
	                $allProjects = findPatchProjects($myrow);                            
                }
                $projects = array();
                
                echo "<td>";
                foreach ($allProjects as $project) {
                	if (!in_array($project, $projects)) {
                		array_push($projects, $project);
          	    	  	echo $project;
                		echo "<br/>";
                	}
                }
                echo "</td>";
                
                //echo "   ";
                echo "<td>" . "<a href=\"https://bugs.eclipse.org/bugs/show_bug.cgi?id=" . $myrow['bug_id'] . "\">" . $myrow['bug_id'] . "</a>" . "</td>";
                $buglist[] = $myrow['bug_id'];
                //echo "   ";
                //echo $myrow['bug_status'];
                //echo ",";
                //echo $myrow['bug_resolution'];
                //echo ",";
                //echo "<td>" . $myrow['bug_target_milestone'] . "</td>";
                //echo "   ";
                //echo $myrow['filename'];
                //echo ",";
                //echo $myrow['timestamp'];
                //echo ",";
                //echo "<td>" . str_replace("@","{at}", $contributorEmail) . "</td>";
                //echo "   ";
                echo "<td>" . str_replace("@","{at}", $contributor) . "</td>";

               
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
                
                //echo "<td>" . countNewLines($myrow) . "</td>";
                echo "<td>" . countAddedLines($myrow) . "</td>";
                echo "<td>" . $committer . "</td>";
                echo "</tr>\n";
            }
        }

         
    }
    echo "</table>\n";

    //$cslist = "";
    //foreach ($buglist as $bug) {
    //    $cslist = $cslist . $bug . ",";
    //}
    //if (strlen($cslist) > 0) {
    //    echo "<p>Tip: You can use this <a href=\"https://bugs.eclipse.org/bugs/buglist.cgi?bug_id=" . $cslist ."\">bugzilla single list</a> for above table to first list all bugs in the table, and then narrow or sort the result how ever you would like.</p>";
    //}
    flush();
}


echo "<h1>Eclipse Platform Project Log</h1>";
echo "<p>Date of Query: " . date(DATE_RFC822) . "</p>";

echo "<h2>Committers</h2>";
echo "<h2>Developers</h2>";

echo "<h3>Platform: Ant</h3>";
checkProject(1, 16, $includedMilestones);

echo "<h3>Platform: Compare</h3>";
checkProject(1, 18, $includedMilestones);

//echo "<h3>Platform: Core</h3>";
//checkProject(1, 10, $includedMilestones);

echo "<h3>Platform: CVS</h3>";
checkProject(1, 84, $includedMilestones);

echo "<h3>Platform: Debug</h3>";
checkProject(1, 20, $includedMilestones);

//echo "<h3>Platform: Doc</h3>";
//checkProject(1, 9, $includedMilestones);

echo "<h3>Platform: IDE</h3>";
checkProject(1, 542, $includedMilestones);

echo "<h3>Platform: Releng</h3>";
checkProject(1, 4, $includedMilestones);

echo "<h3>Platform: Resources</h3>";
checkProject(1, 7, $includedMilestones);

echo "<h3>Platform: Runtime</h3>";
checkProject(1, 120, $includedMilestones);

//echo "<h3>Platform: Scripting</h3>";
//checkProject(1, 1, $includedMilestones);

echo "<h3>Platform: Search</h3>";
checkProject(1, 19, $includedMilestones);

echo "<h3>Platform: SWT</h3>";
checkProject(1, 2, $includedMilestones);

echo "<h3>Platform: Team</h3>";
checkProject(1, 6, $includedMilestones);

echo "<h3>Platform: Text</h3>";
checkProject(1, 42, $includedMilestones);

echo "<h3>Platform: UI</h3>";
checkProject(1, 8, $includedMilestones);

echo "<h3>Platform: Update</h3>";
checkProject(1, 3, $includedMilestones);

echo "<h3>Platform: User Assistance</h3>";
checkProject(1, 5, $includedMilestones);

//echo "<h3>Platform: WebDAV</h3>";
//checkProject(1, 17, $includedMilestones);

//echo "<h3>Platform: Website</h3>";
//checkProject(1, 358, $includedMilestones);

$dbc->disconnect();

$rs 		= null;
$dbh 		= null;
$dbc 		= null;

//echo "<h2>Summary, by Contributors</h2>";
//echo "<table border='1' cellpadding='2' width='80%'>";
//echo "<tr><th>Id</th><th>Name</th><th>Number of patches</th></tr>";
//array_multisort($uniqueCount, SORT_DESC, SORT_NUMERIC);
//foreach (array_keys($uniqueCount) as $key) {
     
//    echo "<tr>";
//    echo "<td>" . str_replace("@","{at}", $key) . "</td><td>" . $uniqueNames[$key] . "</td><td>" . $uniqueCount[$key] . "</td>";
//    echo "</tr>";
//}
//echo "</table>";

echo "<h2>Third Party Software</h2>";

echo "<table border='1' cellpadding='2' width='80%'>";
echo "<tr><th>Name</th><th>IPZilla</th><th>Location</th><th>License</th><th>Usage</th></tr>";
echo "<tr><td>Apache Lucene 1.9.1</td><td><a href=\"https://dev.eclipse.org/ipzilla/show_bug.cgi?id=243\">243</a></td><td>org.apache.lucene_1.9.1.v200803061811.jar<br/>org.apache.lucene.analysis_1.9.1.v200803061811.jar<br/>org.apache.lucene.analysis.source_1.9.1.v200803061811.jar<br/>org.apache.lucene.source_1.9.1.v200803061811.jar<br/></td><td>The Apache Software License Version 2.0</td><td>Used by the help engine.</td></tr>";
echo "<tr><td>Apache Ant 1.7.0</td><td><a href=\"https://dev.eclipse.org/ipzilla/show_bug.cgi?id=1232\">1232</a></td><td>org.apache.ant_1.7.0.v200803061910</td><td>The Apache Software License Version 2.0</td><td>Ant external tool support</td></tr>";
echo "<tr><td>ICU4J 3.8.1</td><td><a href=\"https://dev.eclipse.org/ipzilla/show_bug.cgi?id=1919\">1919</a></td><td>com.ibm.icu_3.8.1.v20080402.jar</td><td>MIT license, X.Net License</td><td>Unicode globalization support library for Java.</td></tr>";
echo "<tr><td>jsch 1.37</td><td><a href=\"https://dev.eclipse.org/ipzilla/show_bug.cgi?id=2014\">2014</a></td><td>com.jcraft.jsch_0.1.37.v200803061811.jar</td><td>New BSD license</td><td>Communication library used by ECF.</td>";
echo "</table>";
echo "</body></html>";


exit();
?>
