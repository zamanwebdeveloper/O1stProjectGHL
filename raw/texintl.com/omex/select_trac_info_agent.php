<?php 
session_start();
include('db_conn.php');
$member_ID=$_GET['member_ID'];
?>
<html>
<head>
<title>accout login</title>
<script>
function formValidator(){
	// Make quick references to our fields
	    
        var track_no = document.getElementById('track_no');
	
   

        
	// Check each input in the order that it appears in the form!
	
		if(isEmpty(track_no, "Please Enter The  Track No. Correctly"))
        {
            
				return true;
        }
	
	
	
	return false;
	
}

function isEmpty(elem, helperMsg){
	if(elem.value.length == 0){
		alert(helperMsg);
		elem.focus(); // set the focus to this input
		return false;
	}
   else{
	return true;}
}



</script>
<link href="generalrules.css" rel="stylesheet" type="text/css" />
<link href="script/style.css" rel="stylesheet" type="text/css">
<script  language="JavaScript" src="script/CalendarPopup.js" type="text/javascript"></script>
<script language="JavaScript">
var cal = new CalendarPopup();
</script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<form id="departform" name="departform" method="post" action="repor_destination.php" onsubmit='return formValidator()' target="_blank">
<input type="hidden" name="member_ID" id="member_ID" value="<?php echo $member_ID;?>">
      
 <p>&nbsp;</p>
 <table width="76%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#F7F7F7" bgcolor="#F0F0F0"">
          <tr> 
            
            <td height="34" colspan="3" valign="middle" background="item/List.gif"><div align="center"><font color="#330099" size="-1" face="Courier New, Courier, mono">Search 
            Destination </font></div></td>
          </tr>
          <tr> 
            <td width="23%" height="36" valign="top">&nbsp; Track No.</td>
            <td width="2%" valign="top">:</td>
            <td width="46%" valign="top"><input name="track_no" type="text" id="track_no"></td>
          </tr>
          <tr> 
            <td height="33" colspan="3" valign="top"> 
              <div align="right"> 
                <input type="submit" name="Submit" value="Search">
            </div></td>
          </tr>
        </table>
</form>
</body>
</html>

