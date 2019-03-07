<?php
include('connec_db.php');
?>
<!--
<?php
$theDate = isset($_REQUEST["date1"]) ? $_REQUEST["date1"] : "";

?> 

-->
<html><head>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="generalrules.css" rel="stylesheet" type="text/css" />


<link href="calendar/calendar/calendar.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="calendar/calendar/calendar.js"></script>



<script src="script/datetimepicker.js"language="JavaScript" type="text/javascript"></script>
<script language="JavaScript" src="script/checkdata.js" type="text/javascript"></script>
<script language="JavaScript" src="script/CalendarPopup.js" type="text/jaascript"></script>
</head>
<body>
<div align="center"><br>
  <br>
  <span class="HEADLINE"><strong><font size="+1">Add Traking Information</font></strong></span></div>
<table width="44%" border="0" align="center" cellpadding="0" cellspacing="0" class="p07">
<form name="display" action="succaddshipment.php" method="post" onSubmit="return check_track();" target="mainFrame">
<tr>
<td colspan="3">&nbsp;</td>
</tr>
  <tr> 
    <td width="116" class="p02bold">Token No. </td>
    <td width="11" class="p02"><strong>:</strong></td>
      <td width="217" height="27">
	  <?php
	  	$sql = "SELECT MAX(serial) FROM shipment";
		$res=mysql_query($sql) or die(mysql_error());
		$row=mysql_fetch_array($res);
		echo $row[0]+1;
	  ?> 
	  </td>
  </tr>
  <tr> 
    <td class="p02bold">HAWB No. </td>
    <td class="p02"><strong>:</strong></td>
    <td height="26" class="tabfontfocus"><input name="hawb_num" type="text" size="30"></td>
  </tr>
  <tr> 
    <td class="p02bold">Origin</td>
    <td class="p02"><strong>:</strong></td>
    <td height="32" class="tabfontfocus"><input name="origin" type="text" size="30"></td>
  </tr>
  <tr> 
    <td class="p02bold">Destination</td>
    <td class="p02"><strong>:</strong></td>
    <td height="29" class="tabfontfocus"><input name="destination" type="text" size="30"></td>
  </tr>
  <tr> 
    <td class="p02bold">Through</td>
    <td class="p02"><strong>:</strong></td>
    <td height="27" class="tabfontfocus"><select name="through">
	<option value="UNKNOWN">UNKNOWN</option>
	<?php 
	$sql="select * from media";
	$res=mysql_query($sql) or die(mysql_error());
	while($row=mysql_fetch_array($res))
	{
		?>
<option value="<?php echo $row['m_id']; ?>" > <?php echo $row['media_name'];?></option>		
	<?php
	}
	?>
      </select></td>
  </tr>
  <tr> 
    <td class="p02bold">AWB No</td>
    <td class="p02"><strong>:</strong></td>
    <td height="24" class="tabfontfocus"><input name="awb_num" type="text" size="30"></td>
  </tr>
  <tr> 
    <td class="p02bold">Post Date</td>
    <td class="p02"><strong>:</strong></td>
    <td height="28" class="tabfontfocus">
	<?php
require_once('calendar/calendar/classes/tc_calendar.php');
?>
	
<!--	<input name="post_date" type="text" size="30"> -->

	

<table border="0" cellspacing="0" cellpadding="2">
                <tr>
                <!--  <td nowrap>Date 3 :</td> -->
                  <td><?php
					  $myCalendar = new tc_calendar("date5", true, false);
					  $myCalendar->setIcon("calendar/calendar/images/iconCalendar.gif");
					  //$myCalendar->setDate(date('d'), date('m'), date('Y'));
					  $myCalendar->setPath("calendar/calendar/");
					  $myCalendar->setYearInterval(2000, 2050);
					  $myCalendar->dateAllow('2008-05-13', '2050-03-01');
					  $myCalendar->setDateFormat('j F Y');
					  //$myCalendar->setHeight(350);
					  //$myCalendar->autoSubmit(true, "form1");
					  $myCalendar->setAlignment('left', 'bottom');
					  $myCalendar->disabledDay("Fri");
					  $myCalendar->setSpecificDate(array("2011-04-01", "2011-08-15", "2011-12-16", "2011-02-21"), 0, 'year');
					  // $myCalendar->setSpecificDate(array("2011-04-10", "2011-04-14"), 0, 'month');
					  //$myCalendar->setSpecificDate(array("2011-06-01"), 0, '');
					  $myCalendar->writeScript();
					  ?></td>
                  <td>
				  
				  <!--
				  <input type="button" name="button" id="button" value="Check the value" onClick="javascript:alert(this.form.date5.value);"></td>
				  -->
				  
                </tr>
              </table>
	
	</input>
	<!--
	<a href="javascript:NewCal('post_date','ddmmyyyy',true,24)"><img src="images/cal.gif"  width="16" height="16" border="0" alt="Pick a date"></a></td>
	-->
	
	
  </tr>
  <tr>
    <td class="p02bold">Shipper</td>
    <td class="p02"><strong>:</strong></td>
    <td height="28" class="tabfontfocus"><input name="shipper" type="text" size="30"></td>
  </tr>
  <tr>
    <td class="p02bold">Receiver</td>
    <td class="p02"><strong>:</strong></td>
    <td height="28" class="tabfontfocus"><input name="receiver" type="text" size="30"></td>
  </tr>
  <tr>
    <td class="p02bold">Product</td>
    <td class="p02"><strong>:</strong></td>
    <td height="28" class="tabfontfocus"><select name="product">
        <option value="Select">Select</option>
        <?php 
	$sql="select * from product";
	$res=mysql_query($sql) or die(mysql_error());
	while($row=mysql_fetch_array($res))
	{
		?>
        <option value="<?php echo $row['p_id']; ?>" > <?php echo $row['p_name'];?></option>
        <?php
	}
	?>
      </select></td>
  </tr>
  <tr>
    <td class="p02bold">Status</td>
    <td class="p02"><strong>:</strong></td>
    <td height="26" class="tabfontfocus"><input name="status" type="text" size="30"></td>
  </tr>
  <tr>
<td colspan="3">&nbsp;</td>
</tr><tr> 
    <td class="p01quote">&nbsp;</td>
    <td class="tabfontfocus">&nbsp;</td>
    <td height="14" class="tabfontfocus"><input type="submit" name="Submit" value="Submit"></td>
  </tr>
  </form>
</table>
</body>
</html>