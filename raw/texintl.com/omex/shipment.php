<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="generalrules.css" rel="stylesheet" type="text/css" />
<title>Welcome to Bengal Post</title>
<style type="text/css">
.shipment
{
height:100%;
width:100%;
float:left;
overflow:hidden;
margin-bottom:10px;
}

.header_img
{
height:auto;
width:80%;
margin:0 auto;
background-color:#009A39;
overflow:hidden;
}

.left
{
height:140px;
width:300px;
float:left;
background:url(images/left_img.gif) no-repeat;
}
.middle
{

height:100%;
width:200px;
float:left;
}
.center
{
height:100%;
width:250px;
margin:0 auto;

}
.right
{
height:140px;
width:300px;
float:right;
background:url(images/right_img.gif) no-repeat;
}

</style>
</head>

<body background="images/hole.jpg" repeat-x; leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
	<div class="shipment">
	
		<div class="header_img">	
			<div class="left">
			</div>
			
			<div class="middle">
				<div class="center">		
						<table width="200" border="0" cellspacing="0" cellpadding="0">
						  <tr>	
							<td>
							<a href ="index.php"><h2>Back</h2></a>
							<h2 style="color:white">Track Another </h2> 
								<form name="form1" method="post" action="shipment.php">
									<div align="center">
									  <textarea style="resize:none" name="track_no" cols="20" rows="2" id="track_no"></textarea></br>
									  <input type="submit" name="Submit" value="Go">
									</div>
							  </form>
							</td>
						  </tr>
						</table>
				</div>
			</div>
			
			<div class="right">
			</div>
				
		</div>
	</div>
<br>
<br>
<?php
	$hawb_no = explode(chr(13) . chr(10), $_POST['track_no']);
	//$hawb_no = $_POST['track_no'];
	include_once('connect.php');
	$j=sizeof($hawb_no);
	for($i=0;$i<$j;$i++)
	{
?>
<table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td>
<?php
	$sql="select * from shipment where HAWB='$hawb_no[$i]'";
	//echo $sql;
	$rs_result=connect($sql);
	while ($row = mysql_fetch_array($rs_result)) 
	{
	$serial=$row['serial'];
	//echo $serial;
?>
	<table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr class="Mbrand"> 
    <td colspan="4"><font size="+1" color ="#FF0033">Shipment Tracking:</font></td>
  </tr>
  <tr class="paging"> 
    <td width="20%"><div align="left">AWB No.</div></td>
    <td width="2%"><div align="left"><strong>:</strong></div></td>
    <td colspan="2"><div align="left"><?php echo $row['HAWB'];?></div></td>
  </tr>
  <tr class="paging"> 
    <td><div align="left">Origin</div></td>
    <td><div align="left"><strong>:</strong></div></td>
    <td width="35%"><div align="left"><?php echo $row['origin'];?></div></td>
    <td width="43%"><div align="left">Current Status</div></td>
  </tr>
  <tr class="paging"> 
    <td><div align="left">Destination</div></td>
    <td><div align="left"><strong>:</strong></div></td>
    <td><div align="left"><?php echo $row['destination'];?></div></td>
    <td><div align="left">
      <?php 
	$sql="Select * from tracking where sid='$serial' order by serial desc limit 1";
	$res=connect($sql);
	while($id=mysql_fetch_array($res))
	{
		echo $id['location'];
	}
	?>
    </div></td>
  </tr>
</table>
<br>
	<table width="90%" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr bgcolor="#FFCC00" class="titlenodec"> 
    <td width="13%" align="center">Redox No.</td>
    <td width="16%" align="center">Booking Date</td>
    <td width="16%" align="center">Shipper</td>
    <td width="9%" align="center">Origin</td>
    <td width="13%" align="center">Destination</td>
    <td width="16%" align="center">Receiver</td>
    <td width="17%" align="center">Status</td>
  </tr>
  <tr bgcolor="#F5F5F5"> 
    <td align="center"><?php echo $row['AWB'];?> <div align="center"></div>
      <div align="center"></div></td>
    <td align="center"><?php echo $row['pdate'];?> <div align="center"></div>
      <div align="center"></div></td>
    <td align="center"><?php echo $row['shipper'];?> <div align="center"></div>
      <div align="center"></div></td>
    <td align="center"> <?php echo $row['origin'];?> <div align="center"></div>
      <div align="center"></div></td>
    <td align="center"><?php echo $row['destination'];?> <div align="center"></div>
      <div align="center"></div></td>
    <td align="center"><?php echo $row['receiver'];?> <div align="center"></div>
      <div align="center"></div></td>
    <td align="center"><?php echo $row['status'];?> <div align="center"></div>
      <div align="center"></div></td>
  </tr>
</table>
<br>
	<table width="90%" border="1" cellpadding="0" cellspacing="0" bordercolor="#EBEBEB" bgcolor="#FCFCFC" align="center">
    <tr align="center" bgcolor="#FFFFFF" > 
      <th colspan="4" ><font size="+1" color="#006600"">Tracking Progress:</font></th>
    </tr>
    <tr align="left" bgcolor="#FFCC00"> 
      <th width="20%"><div align="center">Date &amp; Time</div></th>
      <th width="40%"><div align="center">Location</div></th>
      <th width="40%"><div align="center">Activity</div></th>
    </tr>
	   <?php 
	$sql="Select * from tracking where sid='$serial' order by serial ASC ";
	$res=connect($sql);
	while($id=mysql_fetch_array($res))
	{
	?>
    <tr> 
   
      <td align="center"><?php echo $id['pdate']; ?> <div align="center"></div></td>
      <td align="center"><?php echo $id['location']; ?> <div align="center"></div></td>
      <td align="center"><?php echo $id['activity']; ?> <div align="center"></div></td>
      
    </tr>
	<?php } ?>
    
    <tr> 
      <td colspan="3"> </td>
    </tr><?php } ?>
  </table>
<br>

<?php 
$sql="select * from shipment where serial= '$serial'";
$res=connect($sql);
while($id=mysql_fetch_array($res))
{
	$currmedia=$id['media'];
	$awb=$id['AWB'];
	$hawb=$id['HAWB'];
	if($currmedia==1)
	{
		//$goto="http://www.dhl.co.ae/publish/ae/en/eshipping/track.high.html?pageToInclude=RESULT&AWB=".$awb."&type=fasttrack";	
		$goto="http://www.dhl.co.ae/publish/ae/en/eshipping/track.high.html?pageToInclude=RESULTS&AWB=".$awb."&type=fasttrack&awb_hidden=".$awb."";
	}
	else if($currmedia==2)
	{
		$goto="tntsearch.php?cons=".$awb;
	}
	else if($currmedia==3)
	{
		$goto="http://www.fedex.com/Tracking?tracknumbers=".$awb."&action=track&language=english&ctry_code=be&mps=y&ascend_header=1&imageField=Track";		
	}
	else if($currmedia==4)
	{
		$goto="https://webcsw.ocs.co.jp/csw/ECSWG0201R00003P.do?cwbno=".$awb;
		//$goto="ocssearch.php?AWBNo=".$awb;
	}
	else if($currmedia==5)
	{
		$goto="http://www.firstflight.net/track.asp?txtcon_no=".$awb;
	}
	else if($currmedia==6)
	{
		$goto="fardarsearch.php?AWBNo=".$awb;
	}
	else if($currmedia==16)
	{
		$goto="fastPostbd.php?AWBNo=".$awb;
	}
	else if($currmedia==7)
	{
		//$goto="http://www.aramex.com/Post/track_results_multiple.aspx?ShipmentNumber=".$awb;
                $goto="http://www.aramex.com";   
	   //$goto="http://www.aramex.com/Post/track_results.aspx?q=".$awb;
	   //$goto="http://www.aramex.com/express/track_results.aspx";

		
	}
	
	else if($currmedia==8)
	{
		$goto="dpexserarch.php?txtConnote=".$hawb;
		
	}
	
	else if($currmedia==9)
	{
		$goto="http://www.tcs.com.pk/ae/tracking/TrackShipmentResults.aspx?TrackNo=".$awb;
	}
	else if($currmedia==14)
	{
		$goto="upssearch.php?sid=".$awb;
	}
	else if($currmedia==11)
	{
		$goto="http://www.parcelforce.com/track-trace?trackNumber=".$awb;
	}
	else if($currmedia==15)
	{
		$goto="http://www.pafex.com/tracking.asp?action=track&language=english&cntry_code=in&mps=y&ascend_header=1&tracknumbers=" . $awb;
	}
	else
	{
	$goto="empty.php";
	}

}
?>
<iframe align="middle" src="<?php echo $goto; ?>" height="900" width="90%" name="buffer" id="buffer" frameborder="2" vspace="0" hspace="0" marginwidth="0" marginheight="0" scrolling="yes" style="z-index:1"><strong><center>Your Browser does not support iframe. Please use ie 6.0 or higher.</center></strong></iframe>
</td>
</tr>
</table><br><br>
<?php
}
?>
</body>
</html>