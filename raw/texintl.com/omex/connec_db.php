<?php 
$hostname='localhost';
$username='bengalco_data';
$password='salahuddin2012';

$con=mysql_connect($hostname,$username,$password) or die("Mysql connection failure.");
$dbcon=mysql_select_db('bengalco_data', $con) or die("Database connection failure");
?>