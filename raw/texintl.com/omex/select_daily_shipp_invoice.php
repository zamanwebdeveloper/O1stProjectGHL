<?php 
session_start();
include('db_conn.php');
if(!(session_is_registered("user_id")))
{
	session_unset();
	session_destroy();
	header("location: index.php?PHPSESSID=".$PHPSESSID);
}
?>
<html>
<head>
<title>accout login</title>
<script>
function formValidator(){
	// Make quick references to our fields
	    var stu_id = document.getElementById('stu_id');
        var start_date = document.getElementById('start_date');
		var end_date = document.getElementById('end_date');	
   

        
	// Check each input in the order that it appears in the form!
	
		//if(isEmpty(stu_id, "Please Enter the Student ID Correctly"))
       // {
			if(isEmpty(start_date, "Please Select The Start Date Correctly"))
        	{
			//	if(isEmpty(end_date, "Please Select The End Date Correctly"))
    	    //	{
            
					return true;
				//}
			}
        //}
	
	
	
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

<link href="script/style.css" rel="stylesheet" type="text/css">
<script  language="JavaScript" src="script/CalendarPopup.js" type="text/javascript"></script>
<script language="JavaScript">
var cal = new CalendarPopup();
</script>
<script type="text/javascript" language="JavaScript1.2" src="stm31.js"></script>
</head>

<body>
<?php include('head.php');?>
<form id="monthrepo" name="monthrepo" method="post" action="report_shipper_info_out.php" onsubmit='return formValidator()'>
  <table width="100%" height="27" border="0" align="center" bordercolor="#000000" background="item/titl.jpg" bgcolor="">
    <tr>
      <td height="23" align="center"><div align="right"><img src="item/logout.gif"><a href="logout.php">Log out</a> </div></td>
    </tr>
  </table>
     
  <table width="100%" border="0" bgcolor="#E6E6E6">
    <tr>
      <td height="355" valign="top"><table width="76%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#F7F7F7" bgcolor="#F0F0F0">
          <tr> 
            <td width="29%" rowspan="4" valign="top">


<script type="text/javascript" language="JavaScript1.2">
<!--
beginSTM("lljuchr","static","0","0","left","false","false","310","0","0","250","","blank.gif");
beginSTMB("auto","0","0","vertically","blank.gif","0","0","0","3","#996600","","tiled","#cccccc","0","none","0","Normal","10","4","4","0","0","0","0","0","#000000","false","#cccccc","#cccccc","#cccccc","none");
appendSTMI("false","&nbsp;Agent&nbsp;Information","left","middle","","","-1","-1","0","normal","#990000","#990000","","0","-1","-1","blank.gif","blank.gif","4","4","1","","","_self","Arial","9pt","#cccccc","bold","normal","none","Arial","9pt","#ffffff","bold","normal","none","3","solid","#cc0000","#822000","#610000","#bf0000","#822000","#cc0000","#bf0000","#610000","","","","tiled","tiled");
beginSTMB("auto","-10","0","vertically","","0","0","0","3","#ffffff","","tiled","#000000","0","none","20","Normal","10","4","4","0","0","0","0","0","#7f7f7f","false","#000000","#000000","#000000","none");
appendSTMI("false","Add&nbsp;Agent&nbsp;Info","left","middle","","","-1","-1","0","normal","#990000","#990000","","0","-1","-1","blank.gif","blank.gif","4","4","1","","agentadd.php","_self","Arial","9pt","#cccccc","bold","normal","none","Arial","9pt","#ffffff","bold","normal","none","3","solid","#cc0000","#822000","#610000","#bf0000","#822000","#cc0000","#bf0000","#610000","agentadd.php","","","tiled","tiled");
appendSTMI("false","Edit&nbsp;Agent&nbsp;info","left","middle","","","-1","-1","0","normal","#990000","#990000","","0","-1","-1","blank.gif","blank.gif","4","4","1","","selectstu.php","_self","Arial","9pt","#cccccc","bold","normal","none","Arial","9pt","#ffffff","bold","normal","none","3","solid","#cc0000","#822000","#610000","#bf0000","#822000","#cc0000","#bf0000","#610000","selectstu.php","","","tiled","tiled");
appendSTMI("false","View&nbsp;Samples","left","middle","","","-1","-1","0","normal","#990000","#990000","","0","-1","-1","blank.gif","blank.gif","4","4","1","","","_self","Arial","9pt","#cccccc","bold","normal","none","Arial","9pt","#ffffff","bold","normal","none","3","solid","#cc0000","#822000","#610000","#bf0000","#822000","#cc0000","#bf0000","#610000","","","","tiled","tiled");
appendSTMI("false","F.A.Q.","left","middle","","","-1","-1","0","normal","#990000","#990000","","0","-1","-1","blank.gif","blank.gif","4","4","1","","","_self","Arial","9pt","#cccccc","bold","normal","none","Arial","9pt","#ffffff","bold","normal","none","3","solid","#cc0000","#822000","#610000","#bf0000","#822000","#cc0000","#bf0000","#610000","","","","tiled","tiled");
endSTMB();
appendSTMI("false","Export&nbsp;Invoice","left","middle","","","-1","-1","0","normal","#990000","#990000","","0","-1","-1","blank.gif","blank.gif","4","4","1","","","_self","Arial","9pt","#cccccc","bold","normal","none","Arial","9pt","#ffffff","bold","normal","none","3","solid","#cc0000","#822000","#610000","#bf0000","#822000","#cc0000","#bf0000","#610000","","","","tiled","tiled");
beginSTMB("auto","-10","0","vertically","","0","0","0","3","#ffffff","","tiled","#000000","0","none","20","Normal","10","4","4","0","0","0","0","0","#7f7f7f","false","#000000","#000000","#000000","none");
appendSTMI("false","Add&nbsp;Export&nbsp;Invoice","left","middle","","","-1","-1","0","normal","#990000","#990000","","0","-1","-1","blank.gif","blank.gif","4","4","1","","addexport.php","_self","Arial","9pt","#cccccc","bold","normal","none","Arial","9pt","#ffffff","bold","normal","none","3","solid","#cc0000","#822000","#610000","#bf0000","#822000","#cc0000","#bf0000","#610000","addexport.php","","","tiled","tiled");
appendSTMI("false","Edit&nbsp;Export&nbsp;Invoice","left","middle","","","-1","-1","0","normal","#990000","#990000","","0","-1","-1","blank.gif","blank.gif","4","4","1","","","_self","Arial","9pt","#cccccc","bold","normal","none","Arial","9pt","#ffffff","bold","normal","none","3","solid","#cc0000","#822000","#610000","#bf0000","#822000","#cc0000","#bf0000","#610000","","","","tiled","tiled");
appendSTMI("false","View&nbsp;Samples","left","middle","","","-1","-1","0","normal","#990000","#990000","","0","-1","-1","blank.gif","blank.gif","4","4","1","","","_self","Arial","9pt","#cccccc","bold","normal","none","Arial","9pt","#ffffff","bold","normal","none","3","solid","#cc0000","#822000","#610000","#bf0000","#822000","#cc0000","#bf0000","#610000","","","","tiled","tiled");
appendSTMI("false","F.A.Q.","left","middle","","","-1","-1","0","normal","#990000","#990000","","0","-1","-1","blank.gif","blank.gif","4","4","1","","","_self","Arial","9pt","#cccccc","bold","normal","none","Arial","9pt","#ffffff","bold","normal","none","3","solid","#cc0000","#822000","#610000","#bf0000","#822000","#cc0000","#bf0000","#610000","","","","tiled","tiled");
endSTMB();
appendSTMI("false","Report","left","middle","","","-1","-1","0","normal","#990000","#990000","","0","-1","-1","blank.gif","blank.gif","4","4","1","","","_self","Arial","9pt","#cccccc","bold","normal","none","Arial","9pt","#ffffff","bold","normal","none","3","solid","#cc0000","#822000","#610000","#bf0000","#822000","#cc0000","#bf0000","#610000","","","","tiled","tiled");
beginSTMB("auto","-10","0","vertically","","0","0","0","3","#ffffff","","tiled","#000000","0","none","20","Normal","10","4","4","0","0","0","0","0","#7f7f7f","false","#000000","#000000","#000000","none");
appendSTMI("false","Destination&nbsp;Report","left","middle","","","-1","-1","0","normal","#990000","#990000","","0","-1","-1","blank.gif","blank.gif","4","4","1","","select_trac_info.php","_self","Arial","9pt","#cccccc","bold","normal","none","Arial","9pt","#ffffff","bold","normal","none","3","solid","#cc0000","#822000","#610000","#bf0000","#822000","#cc0000","#bf0000","#610000","select_trac_info.php","","","tiled","tiled");
appendSTMI("false","Monthly&nbsp;Invoice&nbsp;Report","left","middle","","","-1","-1","0","normal","#990000","#990000","","0","-1","-1","blank.gif","blank.gif","4","4","1","","repo_mon_invoice.php","_self","Arial","9pt","#cccccc","bold","normal","none","Arial","9pt","#ffffff","bold","normal","none","3","solid","#cc0000","#822000","#610000","#bf0000","#822000","#cc0000","#bf0000","#610000","repo_mon_invoice.php","","","tiled","tiled");
appendSTMI("false","Daily&nbsp;Shipper&nbsp;Sheet","left","middle","","","-1","-1","0","normal","#990000","#990000","","0","-1","-1","blank.gif","blank.gif","4","4","1","","select_daily_shipp_invoice.php","_self","Arial","9pt","#cccccc","bold","normal","none","Arial","9pt","#ffffff","bold","normal","none","3","solid","#cc0000","#822000","#610000","#bf0000","#822000","#cc0000","#bf0000","#610000","select_daily_shipp_invoice.php","","","tiled","tiled");
appendSTMI("false","Daily&nbsp;Recipient&nbsp;Sheet","left","middle","","","-1","-1","0","normal","#990000","#990000","","0","-1","-1","blank.gif","blank.gif","4","4","1","","select_daily_recipient_invoice.php","_self","Arial","9pt","#cccccc","bold","normal","none","Arial","9pt","#ffffff","bold","normal","none","3","solid","#cc0000","#822000","#610000","#bf0000","#822000","#cc0000","#bf0000","#610000","select_daily_recipient_invoice.php","","","tiled","tiled");
endSTMB();
appendSTMI("false","Sothink&nbsp;Glanda","left","middle","","","-1","-1","0","normal","#990000","#990000","","0","-1","-1","blank.gif","blank.gif","4","4","1","","","_self","Arial","9pt","#cccccc","bold","normal","none","Arial","9pt","#ffffff","bold","normal","none","3","solid","#cc0000","#822000","#610000","#bf0000","#822000","#cc0000","#bf0000","#610000","","","","tiled","tiled");
beginSTMB("auto","-10","0","vertically","","0","0","0","3","#ffffff","","tiled","#000000","0","none","20","Normal","10","4","4","0","0","0","0","0","#7f7f7f","false","#000000","#000000","#000000","none");
appendSTMI("false","Download&nbsp;Trial&nbsp;Version","left","middle","","","-1","-1","0","normal","#990000","#990000","","0","-1","-1","blank.gif","blank.gif","4","4","1","","","_self","Arial","9pt","#cccccc","bold","normal","none","Arial","9pt","#ffffff","bold","normal","none","3","solid","#cc0000","#822000","#610000","#bf0000","#822000","#cc0000","#bf0000","#610000","","","","tiled","tiled");
appendSTMI("false","Order&nbsp;Online","left","middle","","","-1","-1","0","normal","#990000","#990000","","0","-1","-1","blank.gif","blank.gif","4","4","1","","","_self","Arial","9pt","#cccccc","bold","normal","none","Arial","9pt","#ffffff","bold","normal","none","3","solid","#cc0000","#822000","#610000","#bf0000","#822000","#cc0000","#bf0000","#610000","","","","tiled","tiled");
appendSTMI("false","View&nbsp;Samples","left","middle","","","-1","-1","0","normal","#990000","#990000","","0","-1","-1","blank.gif","blank.gif","4","4","1","","","_self","Arial","9pt","#cccccc","bold","normal","none","Arial","9pt","#ffffff","bold","normal","none","3","solid","#cc0000","#822000","#610000","#bf0000","#822000","#cc0000","#bf0000","#610000","","","","tiled","tiled");
appendSTMI("false","F.A.Q.","left","middle","","","-1","-1","0","normal","#990000","#990000","","0","-1","-1","blank.gif","blank.gif","4","4","1","","","_self","Arial","9pt","#cccccc","bold","normal","none","Arial","9pt","#ffffff","bold","normal","none","3","solid","#cc0000","#822000","#610000","#bf0000","#822000","#cc0000","#bf0000","#610000","","","","tiled","tiled");
endSTMB();
endSTMB();
endSTM();
//-->
</script>


 </td>
            <td height="34" colspan="3" valign="top" background="item/Footer.gif"><div align="center"><font color="#330099" size="-1" face="Courier New, Courier, mono">Search 
                Daily Shipper Sheet</font></div></td>
          </tr>
          <tr> 
            <td width="23%" height="36" valign="top">&nbsp; Date</td>
            <td width="2%" valign="top">:</td>
            <td width="46%" valign="top"><input name="start_date" type="text" id="start_date" /> 
              <A HREF="#" NAME="anchor1" ID="anchor1" onClick="cal.select(document.monthrepo.start_date,'anchor1','dd-M-yyyy'); return false;">select</A></td>
          </tr>
          <tr> 
            <td height="33" colspan="3" valign="top" background="item/List.gif"> 
              <div align="right"> 
                <input type="submit" name="Submit" value="Click">
              </div></td>
          </tr>
          <tr> 
            <td height="182" colspan="3" valign="top">&nbsp;</td>
          </tr>
        </table></td>
    </tr>
  </table>
</form>
</body>
</html>

