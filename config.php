<?php
$hostname="localhost";
$username="root";
$password="";
$db_name="student";
$con=mysql_connect($hostname,$username,$password);
mysql_select_db($db_name);
if(empty($con))
{
die("Connection error:".mysql_error());
}

?>
