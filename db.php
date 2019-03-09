<?php
date_default_timezone_set('Asia/Calcutta');
$dt=date("y-m-d");
$dt=date("y-m-d h:i::sa");
$servername="localhost";
$username="root";
$password="";
$dbname="healthcare";
$conn=new MySQLi($servername,$username,$password,$dbname);
if(!$conn){
die("connection failed:".mysql_connection_error());
}
?>

