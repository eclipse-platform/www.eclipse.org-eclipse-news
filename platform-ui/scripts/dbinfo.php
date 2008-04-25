<?php
require_once "/home/data/httpd/eclipse-php-classes/system/dbconnection_bugs_ro.class.php";

ini_set("display_errors", "true");
error_reporting (E_ALL);

$dbc 	= new DBConnectionBugs();
$dbh 	= $dbc->connect();
$rs = null;

$sql_info = "SELECT  * FROM components WHERE id = 1";

$rs = mysql_query($sql_info, $dbh);

//echo "<h1>Products</h1>";
//echo "<table border='1' cellpadding='2' width='80%'>";
//echo "<tr><th>ID</th><th>Name</th></tr>";

//while ($myrow  = mysql_fetch_assoc($rs)) {
//	echo "<tr><td>" . $myrow['id'] . "</td><td>" . $myrow['name'] . "</td></tr>";
//	
//}

//echo "</table>";

echo "<table>";
$i = 0;
while ($myrow  = mysql_fetch_assoc($rs)) {
	if (i++ == 0) {
		echo "<tr>";
		foreach($myrow as $key=>$value) {
			echo "<th>" . $key . "</th>";
		}
		echo "</tr>";
		flush();
	}
	echo "<tr>";
	foreach($myrow as $key=>$value) {
		echo "<td>" . $value . "</td>";
	}
	echo "</tr>";
	flush();
}
echo "</table>";
flush();

$dbc->disconnect();

$rs 		= null;
$dbh 		= null;
$dbc 		= null;



exit();
?>