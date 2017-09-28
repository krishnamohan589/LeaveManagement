<?php
 mysql_connect("localhost","root","root")or die("unconnected");
 mysql_select_db("emp")or die("no db");
$member_id = $_GET['id'];
$dt1= $_GET['date1'];
 $query = "update leaves set status = 'Disapproved' where id ='$member_id' && date1='$dt1'";
if(mysql_query($query))
{
	header("Location: alleaves.php");
}
?>