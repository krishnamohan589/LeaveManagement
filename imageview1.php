<?php
session_start();
$x = $_SESSION['sessionVar'];
mysql_connect("localhost","mohan_leav","Aa@12345")or die("unconnected");
mysql_select_db("emp")or die("no db");
$sql = "SELECT imageData FROM output_images1 WHERE eid='$x'";
$result1 = mysql_query("$sql");
$row = mysql_fetch_array($result1);
echo $row["imageData"];
?>