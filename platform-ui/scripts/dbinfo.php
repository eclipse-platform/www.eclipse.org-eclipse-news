<?php
require_once "/home/data/httpd/eclipse-php-classes/system/dbconnection_bugs_ro.class.php";
$dbc 	= new DBConnectionBugs();
$dbh 	= $dbc->connect();
$rs = null;

$sql_info = "SELECT  id, name FROM components";

$rs = mysql_query($sql_info, $dbh);

echo "<h1>Products</h1>";
echo "<table border='1' cellpadding='2' width='80%'>";
while ($myrow  = mysql_fetch_assoc($rs)) {
	echo "<tr><td>" . $myrow['id'] . "</td><td>" . $myrow['name'] . "</td></tr>";
	
}

echo "</table>";

$dbc->disconnect();

$rs 		= null;
$dbh 		= null;
$dbc 		= null;

exit();
?>