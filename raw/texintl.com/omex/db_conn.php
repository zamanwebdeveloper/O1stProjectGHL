<?php 
$hostname='localhost';
$username='bengalco_data';
$password='salahuddin2012';

$con=mysql_connect($hostname,$username,$password) or die("Mysql connection failure.");
$dbcon=mysql_select_db('bengalco_data', $con) or die("Database connection failure");

function add_shipment($hawb_no, $origin, $destination, $through, $awb_no, $date, $shipper, $receiver, $prduct, $stutus)
{
	$sql="INSERT INTO shipment(`HAWB`, `origin`, `destination`, `media`, `AWB`, `pdate`, `shipper`, `receiver`, `product`, `status`) VALUES('$hawb_no', '$origin', '$destination', '$through', '$awb_no', '$date', '$shipper', '$receiver', '$prduct', '$stutus')";
	$res=mysql_query($sql) or die(mysql_error());
	if($res)
	{
		return true;
	}
	else
	{
		return false;
	}
}

function add_shipment_dom($hawb_no, $origin, $destination, $date, $shipper, $receiver, $prduct, $stutus)
{
	$sql="INSERT INTO shipment_dom(`HAWB`, `origin`, `destination`, `pdate`, `shipper`, `receiver`, `product`, `status`) VALUES('$hawb_no', '$origin', '$destination', '$date', '$shipper', '$receiver', '$prduct', '$stutus')";
	$res=mysql_query($sql) or die(mysql_error());
	if($res)
	{
		return true;
	}
	else
	{
		return false;
	}
}

function modify_tract($hawb_no, $origin, $destination, $through, $awb_no, $date, $shipper, $receiver, $product, $status)
{
	$sql="UPDATE shipment set origin='$origin', destination= '$destination', media='$through', AWB='$awb_no', pdate='$date', shipper='$shipper', receiver='$receiver', product='$product', status='$status' where HAWB='$hawb_no'";
	$res=mysql_query($sql) or die(mysql_error());
	if($res)
	{
		return ture;
	}
	else
	{
		return false;
	}
}

function modify_tract_dom($hawb_no, $origin, $destination, $date, $shipper, $receiver, $product, $status)
{
	$sql="UPDATE shipment_dom set origin='$origin', destination= '$destination', pdate='$date', shipper='$shipper', receiver='$receiver', product='$product', status='$status' where HAWB='$hawb_no'";
	$res=mysql_query($sql) or die(mysql_error());
	if($res)
	{
		return ture;
	}
	else
	{
		return false;
	}
}

function add_tract($hawb_no, $serial_shipment, $location, $activity, $post_date, $end_shipment)
{
	$sql="Insert into tracking(`sid`, `activity`, `location`, `pdate`, `end_shipment`) VALUES('$serial_shipment', '$activity', '$location', '$post_date', '$end_shipment')";
	$res=mysql_query($sql) or die(mysql_error());
	if($res)
	{
		return ture;
	}
	else
	{
		return false;
	}
}

function add_tract_dom($hawb_no, $serial_shipment, $location, $activity, $post_date, $end_shipment)
{
	$sql="Insert into tracking_dom(`sid`, `activity`, `location`, `pdate`, `end_shipment`) VALUES('$serial_shipment', '$activity', '$location', '$post_date', '$end_shipment')";
	$res=mysql_query($sql) or die(mysql_error());
	if($res)
	{
		return ture;
	}
	else
	{
		return false;
	}
}


function del_client($client_id)
{
	foreach($client_id as $var)
	{
		$sql="Delete from shipment  where serial='$var'";
		$res=mysql_query($sql) or die (mysql_error());
	}
	if($res)
	{
		return true;
	}
	else
	{
		return false;
	}
}	

function del_client_dom($client_id)
{
	foreach($client_id as $var)
	{
		$sql="Delete from shipment_dom  where serial='$var'";
		$res=mysql_query($sql) or die (mysql_error());
	}
	if($res)
	{
		return true;
	}
	else
	{
		return false;
	}
}	

?>