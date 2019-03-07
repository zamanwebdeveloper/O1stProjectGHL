<html><head>
<title></title>
<link href="generalrules.css" rel="stylesheet" type="text/css" />
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<form id="form" name="form" method="get" action="login_view.php" onsubmit='return formValidator()' target="mainFrame">
<input type="hidden" name="page" id="page" value="editagent.php">
<p>&nbsp;</p>
<table width="58%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#F2F2F2">
          <tr bgcolor="#E4E4E4"> 
            <td height="18" colspan="3" align="center" valign="top" background="item/List.gif" class="brandColorEmph">Select 
                User ID</td>
          </tr>
          <tr> 
            <td width="33%" height="24" valign="top"><div align="center"><strong><font face="Courier New, Courier, mono">User 
              ID </font></strong></div></td>
            <td width="7%" valign="top"><div align="center"><strong>:</strong></div></td>
            <td width="60%" valign="top"><input name="user_id" type="text" size="32"></td>
          </tr>
          <tr> 
            <td height="24" valign="top"><div align="center"><strong><font face="Courier New, Courier, mono">User 
              Type </font></strong></div></td>
            <td valign="top"><div align="center"><strong>:</strong></div></td>
            <td valign="top"><select name="user_type">
                <option value="agent">agent&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                <option value="admin">admin</option>
              </select></td>
          </tr>
          <tr> 
            <td height="33" colspan="3" align="center" valign="middle"> 
              <div align="center">
                <input type="submit" name="Submit" value="Go">
              </div></td>
          </tr>
  </table>
</form>
</body>
</html>

