<?php 
include('db_conn.php');


$hawb_no=$_REQUEST['hawb_num'];
$origin=$_REQUEST['origin'];
$destination=$_REQUEST['destination'];
$through=$_REQUEST['through'];
$awb_no=$_REQUEST['awb_num'];
$date=$_REQUEST['date5'];
$shipper=$_REQUEST['shipper'];
$receiver=$_REQUEST['receiver'];
$prduct=$_REQUEST['product'];
$stutus=$_REQUEST['status'];

$res=add_shipment($hawb_no, $origin, $destination, $through, $awb_no, $date, $shipper, $receiver, $prduct, $stutus);

if($res)
{
	echo "<script> alert('information successfully added'); </script>";
	echo "<script> window.location='login_view.php?page=addtract.php'; </script>";
	
}
else
{
	echo "<script> alert('information is wrong'); </script>";
	echo "<script> window.location='login_view.php?page=addtract.php'; </script>";
}


?>