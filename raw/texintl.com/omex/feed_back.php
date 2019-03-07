<?php
//session_name();
session_start();
include('connect.php');

if(!isset($_POST['user_id']))
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>feed_back</title>
<link rel="stylesheet" type="text/css" href="css/style1.css" />
<style type="text/css">
.flash
{
height:200px;
width:240px;
float:left;
margin:0px 10px 10px 10px;
border:solid 1px green;
}

.left_ber_img
{
height:200px;
width:240px;
float:left;
margin:10px;
border:solid 1px green;
}
.main_body
{
width:732x;
height:auto;
float:left;
overflow:hidden;
}

	.feed
	{
	padding-left:40px;
	height:100%;
	width:470px;
	float:right;
	}


</style>

<?php
	if(isset($_GET['h']) || $_GET['h'] != '')
	{
		$height = $_GET['h'];
	}
	else
	{
?>

<?php
	}
?>

</head>

<body onload="startTime()">
	<div id="wrapper">
		<div class="container">
		<!--header started -->
			<div class="banner">
				<div class="banner_top">
				
				</div>
				
				<div class="top_menu">
        <div class="menu_left">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="contact_us.php">Contact </a></li>
            <li><a href="webmail">&nbsp;Webmail</a></li>
          </ul>
        </div>
        <div class="menu_middle">
          <table cellpadding="0px" cellspacing="0px" border="0" width="734px" height="50px" style="font-family:arial; font-size:13px">
            <tr>
              <td colspan="3" align="center" width="253px" style="border-right:solid 1px #FF9900; ">
				<b>&nbsp;International Tracking</b> 
			  </td>
			  
			  <td colspan="3" align="center"  width="253px"  style="border-right:solid 1px #FF9900; ">
				<b>&nbsp;&nbsp;&nbsp;&nbsp;Domestic Tracking</b> 
			  </td>
			  
				  <td colspan="3" rowspan="2"> 
						<table border="0" cellpadding="0" cellspacing="0" height="50px" width="225px">
							<tr>
								<td>
									<form name="the_form" id="the_form" method="post" action="index.php">
									  <tr>
										<td  style="padding-left:3px"><b>User Name</b> </td>
										<td><input type="text" class="navblack1" id="user_id" name="user_id" onfocus="if (this.value==this.defaultValue) 
																	this.value='';" onblur="if (this.value=='') this.value=this.defaultValue;" value="UserName" size="12" maxlength="40" />
										</td>
										<td rowspan="2"><input name="button" type="button" onclick="document.forms[0].submit();" value="Login" />
											<input type="hidden" name="h" id="h" value="<?php echo $_GET['h'];?>" />
										</td>
									  </tr>
									  <tr>
										<td  style="padding-left:3px"><b>Password</b> </td>
										<td><input class="navblack1" type="password" id="user_pass" name="user_pass" onfocus="if (this.value==this.defaultValue) this.value='';" onblur="if (this.value=='') this.value=this.defaultValue;" value="Password" size="12" maxlength="20" /></td>
									  </tr>
									</form>
								</td>
							</tr>
						</table>
				
				  </td>
			  </td>
            </tr>
			
            <tr style="font-size:12px">
              <form action="shipment.php" method="post" target="window.open('shipment.php','Tracking Info','status=1,toolbar=1,location=no')"> 
				<td style="padding-left:3px">
					<b>AWB No</b> 
				</td>
				
				<td >
					<input name="track_no" type="text" size="23" maxlength="25" height="30px"  onfocus="if (this.value==this.defaultValue) 
											this.value='';" onblur="if (this.value=='') this.value=this.defaultValue;" value="Enter your Number"/>
                </td>
				
                <td cellpadding="3px" style="border-right:solid 1px #FF9900">
					<input type="submit" value=" GO " name="submit" />
                </td>
				
              </form>
			  
             <form target="window.open('shipment_dom.php','Tracking Info','status=1,toolbar=1,location=no')" method="post" action="shipment_dom.php">
                <td style="padding-left:3px">
					<b>CN / Ref No</b> 
				</td>
				
                <td>
					<input name="track_no" type="text" size="20" maxlength="25" onfocus="if (this.value==this.defaultValue) 
						this.value='';" onblur="if (this.value=='') this.value=this.defaultValue;" value="Enter your Number"/>
                </td>
				
                <td style="border-right:solid 1px #FF9900">
					<input type="submit" name="submit" value=" GO " />
                </td>
				
              </form>
            </tr>
		
          </table>
        </div>
		
	  </div>
			</div>
			
			
			<div id="write">
			
				<div class="left_ber">
					<div class="main_menu">
						<ul>
							<li><img src="images/arrow.png" height="9" width="13" style="padding-right:7px"  /><a href="about.php">About company</a></li>
							<li><img src="images/arrow.png" height="9" width="13" style="padding-right:7px"  /><a href="terms_condition.php">Terms & Condition </a> </li>
							<li><img src="images/arrow.png" height="9" width="13" style="padding-right:7px"  /><a href="service.php">Our Service </a></li>
							<li><img src="images/arrow.png" height="9" width="13" style="padding-right:7px"  /><a href="feed_back.php">Feedback </a></li>
						</ul>
					</div>
					
					<div class="image_left">
						<table height="440px" cellpadding="0px" cellspacing="0px" >
							<tr>
								<td >
									<div class="flash">
									
										<embed src="flash/uncle_f.swf" height="200px" width="240px";> </embed>
									
									</div>
								
								</td>
							</tr>
							
							<tr>
								<td> 
									<div class="left_ber_img">
										<img src="images/bg.jpg" height="200px" width="240px"  />
									</div>
								</td>
							</tr>
						
						
						</table>
					
					</div>
				</div>
			
				
			<div class="main_body">
				<table border="0" height="100%" width="100%" style="font-family:arial">
					<tr>
						
						<td rowspan="3"><p><b style="font-size:24px">&nbsp; &nbsp; &nbsp; Online form </b><br/> <br/><b> 
						&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; All fields are mendatory</b></p>
							<br />
						<div class="feed">
						 	<table style="text-align:center " width="420" height="auto" border="0" align="center" cellpadding="2" cellspacing="2" >
							<form>
								<tr> 
                                    <td width="217" height="27" align="left" class="tabfont">
										<font color="#000000" face="MS Sans Serif"><b style="text-align:left">Name &nbsp;&nbsp; </b></font>
									</td>
                                    <td width="200" height="27">
                                        <input type="text" name="required-cname" size="39">
                                     </td>
                                  </tr>
                                  <tr> 
                                    <td width="217" height="91" align="left" valign="top" class="tabfont">
									<font color="#000000" face="MS Sans Serif"><b>Address &nbsp;&nbsp;</b></font>
									</td>
                                    <td width="200" height="91">
                                        <textarea rows="5" name="required-caddress" cols="30"></textarea>
                                    </td>
                                  </tr>
                                  <tr> 
                                    <td width="217" height="29" align="left" class="tabfont">
									<font color="#000000" face="MS Sans Serif"><b>Country &nbsp;&nbsp;</b></font>
									</td>
                                    <td width="217" height="29">
                                        <select class="inputCopy" name="required-country" value size="1">
                                          <option selected value="USA">United 
                                          States 
                                          <option value="Canada">Canada 
                                          <option value="United Kingdom">United 
                                          Kingdom 
                                          <option value="Afghanistan">Afghanistan 
                                          <option value="Albania">Albania 
                                          <option value="Algeria">Algeria 
                                          <option value="American Samoa">American 
                                          Samoa 
                                          <option value="Andorra">Andorra 
                                          <option value="Angola">Angola 
                                          <option value="Anguilla">Anguilla 
                                          <option value="Antarctic Treaty Territory">Antarctic 
                                          Treaty Territory 
                                          <option value="Antigua and Barbuda">Antigua 
                                          and Barbuda 
                                          <option value="Argentina">Argentina 
                                          <option value="Armenia">Armenia 
                                          <option value="Aruba">Aruba 
                                          <option value="Australia">Australia 
                                          <option value="Austria">Austria 
                                          <option value="Azerbaijan">Azerbaijan 
                                          <option value="Bahamas">Bahamas 
                                          <option value="Bahrain">Bahrain 
                                          <option value="Bangladesh" selected="selected">Bangladesh 
                                          <option value="Barbados">Barbados 
                                          <option value="Belarus">Belarus 
                                          <option value="Belgium">Belgium 
                                          <option value="Belize">Belize 
                                          <option value="Benin">Benin 
                                          <option value="Bermuda">Bermuda 
                                          <option value="Bhutan">Bhutan 
                                          <option value="Bolivia">Bolivia 
                                          <option value="Bosnia and Herzegovina">Bosnia 
                                          and Herzegovina 
                                          <option value="Botswana">Botswana 
                                          <option value="Bouvet Island">Bouvet 
                                          Island 
                                          <option value="Brazil">Brazil 
                                          <option value="British Indian Ocean Territory">British 
                                          Indian Ocean Territory 
                                          <option value="British Virgin Islands">British 
                                          Virgin Islands 
                                          <option value="Brunei Darussalam">Brunei 
                                          Darussalam 
                                          <option value="Bulgaria">Bulgaria 
                                          <option value="Burkina Faso">Burkina 
                                          Faso 
                                          <option value="Burundi">Burundi 
                                          <option value="Cambodia">Cambodia 
                                          <option value="Cameroon">Cameroon 
                                          <option value="Cape Verde">Cape Verde 
                                          <option value="Cayman Islands">Cayman 
                                          Islands 
                                          <option value="Central African Republic">Central 
                                          African Republic 
                                          <option value="Chad">Chad 
                                          <option value="Chile">Chile 
                                          <option value="China">China 
                                          <option value="Christmas Island">Christmas 
                                          Island 
                                          <option value="Cocos Islands">Cocos 
                                          Islands 
                                          <option value="Colombia">Colombia 
                                          <option value="Comoros">Comoros 
                                          <option value="Congo">Congo 
                                          <option value="Cook Islands">Cook Islands 
                                          <option value="Costa Rica">Costa Rica 
                                          <option value="Côte d'Ivoire">Côte d'Ivoire 
                                          <option value="Croatia">Croatia 
                                          <option value="Cuba">Cuba 
                                          <option value="Cyprus">Cyprus 
                                          <option value="Czech Republic">Czech 
                                          Republic 
                                          <option value="Denmark">Denmark 
                                          <option value="Djibouti">Djibouti 
                                          <option value="Dominica">Dominica 
                                          <option value="Dominican Republic">Dominican 
                                          Republic 
                                          <option value="Ecuador">Ecuador 
                                          <option value="East Timor">East Timor 
                                          <option value="Egypt">Egypt 
                                          <option value="El Salvador">El Salvador 
                                          <option value="Equatorial Guinea">Equatorial 
                                          Guinea 
                                          <option value="Eritrea">Eritrea 
                                          <option value="Estonia">Estonia 
                                          <option value="Ethiopia">Ethiopia 
                                          <option value="Falkland Islands">Falkland 
                                          Islands 
                                          <option value="Faroe Islands">Faroe 
                                          Islands 
                                          <option value="Fiji">Fiji 
                                          <option value="Finland">Finland 
                                          <option value="France">France 
                                          <option value="French Guiana">French 
                                          Guiana 
                                          <option value="French Polynesia">French 
                                          Polynesia 
                                          <option value="French Southern Territories">French 
                                          Southern Territories 
                                          <option value="Gabon">Gabon 
                                          <option value="Gambia">Gambia 
                                          <option value="Georgia">Georgia 
                                          <option value="Germany">Germany 
                                          <option value="Ghana">Ghana 
                                          <option value="Gibraltar">Gibraltar 
                                          <option value="Greece">Greece 
                                          <option value="Greenland">Greenland 
                                          <option value="Grenada">Grenada 
                                          <option value="Guadeloupe">Guadeloupe 
                                          <option value="Guam">Guam 
                                          <option value="Guatemala">Guatemala 
                                          <option value="Guinea">Guinea 
                                          <option value="Guinea-Bissau">Guinea-Bissau 
                                          <option value="Guyana">Guyana 
                                          <option value="Haiti">Haiti 
                                          <option value="Heard and McDonald Islands">Heard 
                                          and McDonald Islands 
                                          <option value="Honduras">Honduras 
                                          <option value="Hong Kong">Hong Kong 
                                          <option value="Hungary">Hungary 
                                          <option value="Iceland">Iceland 
                                          <option value="India">India 
                                          <option value="Indonesia">Indonesia 
                                          <option value="Iran, Islamic Republic of">Iran, 
                                          Islamic Republic of 
                                          <option value="Iraq">Iraq 
                                          <option value="Ireland">Ireland 
                                          <option value="Israel">Israel 
                                          <option value="Italy">Italy 
                                          <option value="Jamaica">Jamaica 
                                          <option value="Japan">Japan 
                                          <option value="Jordan">Jordan 
                                          <option value="Kazakhstan">Kazakhstan 
                                          <option value="Kenya">Kenya 
                                          <option value="Kiribati">Kiribati 
                                          <option value="Korea, Democratic People's Republic of">Korea, 
                                          Democratic People's Republic of 
                                          <option value="Korea, Republic of">Korea, 
                                          Republic of 
                                          <option value="Kuwait">Kuwait 
                                          <option value="Kyrgyzstan">Kyrgyzstan 
                                          <option value="Lao People's Democratic Republic">Lao 
                                          People's Democratic Republic 
                                          <option value="Latvia">Latvia 
                                          <option value="Lebanon">Lebanon 
                                          <option value="Lesotho">Lesotho 
                                          <option value="Liberia">Liberia 
                                          <option value="Libyan Arab Jamahiriya">Libyan 
                                          Arab Jamahiriya 
                                          <option value="Liechtenstein">Liechtenstein 
                                          <option value="Lithuania">Lithuania 
                                          <option value="Luxembourg">Luxembourg 
                                          <option value="Macau">Macau 
                                          <option value="Macedonia (Former Yugoslav Republic)">Macedonia 
                                          (Former Yugoslav Republic) 
                                          <option value="Madagascar">Madagascar 
                                          <option value="Malawi">Malawi 
                                          <option value="Malaysia">Malaysia 
                                          <option value="Maldives">Maldives 
                                          <option value="Mali">Mali 
                                          <option value="Malta">Malta 
                                          <option value="Marshall Islands">Marshall 
                                          Islands 
                                          <option value="Martinique">Martinique 
                                          <option value="Mauritania">Mauritania 
                                          <option value="Mauritius">Mauritius 
                                          <option value="Mayotte">Mayotte 
                                          <option value="Mexico">Mexico 
                                          <option value="Micronesia (Federated States of)">Micronesia 
                                          (Federated States of) 
                                          <option value="Moldova, Republic of">Moldova, 
                                          Republic of 
                                          <option value="Monaco">Monaco 
                                          <option value="Mongolia">Mongolia 
                                          <option value="Montserrat">Montserrat 
                                          <option value="Morocco">Morocco 
                                          <option value="Mozambique">Mozambique 
                                          <option value="Myanmar">Myanmar 
                                          <option value="Namibia">Namibia 
                                          <option value="Nauru">Nauru 
                                          <option value="Nepal">Nepal 
                                          <option value="Netherlands">Netherlands 
                                          <option value="Netherlands Antilles">Netherlands 
                                          Antilles 
                                          <option value="New Caledonia">New Caledonia 
                                          <option value="New Zealand">New Zealand 
                                          <option value="Nicaragua">Nicaragua 
                                          <option value="Niger">Niger 
                                          <option value="Nigeria">Nigeria 
                                          <option value="Niue">Niue 
                                          <option value="Norfolk Island">Norfolk 
                                          Island 
                                          <option value="North Mariana Islands">North 
                                          Mariana Islands 
                                          <option value="Norway">Norway 
                                          <option value="Oman">Oman 
                                          <option value="Pacific Islands">Pacific 
                                          Islands 
                                          <option value="Pacific Trust Territory">Pacific 
                                          Trust Territory 
                                          <option value="Pakistan">Pakistan 
                                          <option value="Palau">Palau 
                                          <option value="Panama">Panama 
                                          <option value="Papua New Guinea">Papua 
                                          New Guinea 
                                          <option value="Paraguay">Paraguay 
                                          <option value="Peru">Peru 
                                          <option value="Philippines">Philippines 
                                          <option value="Pitcairn Island">Pitcairn 
                                          Island 
                                          <option value="Poland">Poland 
                                          <option value="Portugal">Portugal 
                                          <option value="Qatar">Qatar 
                                          <option value="Reunion">Reunion 
                                          <option value="Romania">Romania 
                                          <option value="Russian Federation">Russian 
                                          Federation 
                                          <option value="Rwanda">Rwanda 
                                          <option value="S. Georgia and S. Sandwich Isls.">S. 
                                          Georgia and S. Sandwich Isls. 
                                          <option value="Saint Kitts and Nevis">Saint 
                                          Kitts and Nevis 
                                          <option value="Saint Lucia">Saint Lucia 
                                          <option value="Saint Vincent and the Grenadines">Saint 
                                          Vincent and the Grenadines 
                                          <option value="St. Helena">St. Helena 
                                          <option value="St. Pierre and Miquelon">St. 
                                          Pierre and Miquelon 
                                          <option value="San Marino">San Marino 
                                          <option value="São Tomé and Principe">São 
                                          Tomé and Principe 
                                          <option value="Saudi Arabia">Saudi Arabia 
                                          <option value="Senegal">Senegal 
                                          <option value="Seychelles">Seychelles 
                                          <option value="Sierra Leone">Sierra 
                                          Leone 
                                          <option value="Singapore">Singapore 
                                          <option value="Slovakia">Slovakia 
                                          <option value="Slovenia">Slovenia 
                                          <option value="Solomon Islands">Solomon 
                                          Islands 
                                          <option value="Somalia">Somalia 
                                          <option value="South Africa">South Africa 
                                          <option value="Spain">Spain 
                                          <option value="Sri Lanka">Sri Lanka 
                                          <option value="Sudan">Sudan 
                                          <option value="Suriname">Suriname 
                                          <option value="Svalbard and Jan Mayen Islands">Svalbard 
                                          and Jan Mayen Islands 
                                          <option value="Swaziland">Swaziland 
                                          <option value="Sweden">Sweden 
                                          <option value="Switzerland">Switzerland 
                                          <option value="Syrian Arab Republic">Syrian 
                                          Arab Republic 
                                          <option value="Taiwan">Taiwan 
                                          <option value="Tajikistan">Tajikistan 
                                          <option value="Tanzania, United Republic of">Tanzania, 
                                          United Republic of 
                                          <option value="Thailand">Thailand 
                                          <option value="Togo">Togo 
                                          <option value="Tokelau">Tokelau 
                                          <option value="Tonga">Tonga 
                                          <option value="Trinidad and Tobago">Trinidad 
                                          and Tobago 
                                          <option value="Tunisia">Tunisia 
                                          <option value="Turkey">Turkey 
                                          <option value="Turkmenistan">Turkmenistan 
                                          <option value="Turks and Caicos Islands">Turks 
                                          and Caicos Islands 
                                          <option value="Tuvalu">Tuvalu 
                                          <option value="Uganda">Uganda 
                                          <option value="Ukraine">Ukraine 
                                          <option value="United Arab Emirates">United 
                                          Arab Emirates 
                                          <option value="United Kingdom">United 
                                          Kingdom 
                                          <option value="USA">United States 
                                          <option value="U.S. Minor Outlying Islands">U.S. 
                                          Minor Outlying Islands 
                                          <option value="Uruguay">Uruguay 
                                          <option value="Uzbekistan">Uzbekistan 
                                          <option value="Vanuatu">Vanuatu 
                                          <option value="Vatican City State (Holy See)">Vatican 
                                          City State (Holy See) 
                                          <option value="Venezuela">Venezuela 
                                          <option value="Viet Nam">Viet Nam 
                                          <option value="Virgin Islands">Virgin 
                                          Islands 
                                          <option value="Wallis and Futuna Islands">Wallis 
                                          and Futuna Islands 
                                          <option value="Western Sahara">Western 
                                          Sahara 
                                          <option value="Western Samoa">Western 
                                          Samoa 
                                          <option value="Yemen">Yemen 
                                          <option value="Yugoslavia (Former)">Yugoslavia 
                                          (Former) 
                                          <option value="Zaire">Zaire 
                                          <option value="Zambia">Zambia 
                                          <option value="Zimbabwe">Zimbabwe 
                                          <option value="Other">Other</option>
                                        </select>
                                      </td>
                                  </tr>
                                  <tr> 
                                    <td width="217" height="27" align="left" class="tabfont">
										<font color="#000000" face="MS Sans Serif">
											<b>Email Address &nbsp;&nbsp;</b>
										</font></td>
                                    <td width="200" height="27">
                                        <input type="text" name="required-emailaddress" size="39">
                                    </td>
                                  </tr>
                                  <tr> 
                                    <td width="217" height="91" align="left" valign="top" class="tabfont">
									<font color="#000000" face="MS Sans Serif"><b>Message &nbsp;&nbsp;</b></font></td>
                                    <td width="200" height="91">
                                        <textarea rows="5" name="required-message" cols="30"></textarea>
                                     </td>
                                  </tr>
                                  <tr> 
									<td>&nbsp;</td>
                                    <td height="29" align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <input type="reset" value="Reset" name="B2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<input type="submit" value="Submit" name="b12">
                                        
                                    </td>
                                  </tr>
								 </form>
                                </table>
								
							</div>
								
						</td>			
					
					</tr>
						
					
				</table>
				
			</div>
		</div>
			<!--secnod_img end-->
			
			<!--last_text started -->
			<div class="last_text">
				<div class="last_bg">
					<table height="60xp" width="100%" border="0">
						<th><img src="images/calculator.gif" height="36" width="36" /></th>
							<td>&nbsp;<a href="#">Calculator</a></td>
							<th><img src="images/calender.gif" height="36" width="36" /></th>
							<td>&nbsp;<a href="#">Calender</a></td>
							<th><img src="images/holiday.gif" height="36" width="36" /></th>
							<td>&nbsp;<a href="#">Holiday</a></td>
							<th><img src="images/weight.gif" height="36" width="36" /></th>
							<td>&nbsp;<a href="#">Volumatric Weight</a></td>
						
					</table>
				</div>
			</div>
			<!--last_text end -->
			
			<div class="footer">
				<div class="footer_bg">
					<table width="100%" border="0">
						<tr>
							<td><p style="color:#FF9900; font-size:18px; font-weight:bold; padding-left:20px">Copy right &copy; Bengal Courier</p></td>
							<td><p style="text-align:right; padding-right:10px">Powered by <b style="color:white"><a href="http://ssmtech.net" target="_blank">SSM Technology</a></b></p></td>
						</tr>
					</table>
				</div>
			</div>
				
		</div>
	</div>



</body>
</html>

<?php
}
else
{
	$admin_id=$_POST['user_id'];
	$admin_password=$_POST['user_pass'];
	$sql = "Select * from adminsign where admin_id='$admin_id'";
	$result = connect($sql);
	$num_rows = mysql_num_rows($result);
	if($num_rows > 0)
	{
		$myrow = mysql_fetch_row($result);
		if($myrow[1] == $admin_password)
		{
			setcookie('member_ID', $myrow[0],time()+8*60*60);
			setcookie('member_Type', 'Super_Admin',time()+8*60*60);
			header('Location: login_home.php');
		}
		else
		{
			echo('<script language="javascript">alert("User ID and/or Password does not Matched!!!");location.href="home.php";</script>');
		}
	}
	else
	{
		$sql = "select user_id, password, user_type from employee where user_id= '$admin_id'";
		$result = connect($sql);
		$num_rows = mysql_num_rows($result);
		if($num_rows > 0)
		{
			$myrow = mysql_fetch_row($result);
			if($myrow[1] == $admin_password)
			{
				setcookie('member_ID', $myrow[0],time()+8*60*60);
				if($myrow[2] == 'admin')
				{
					setcookie('member_Type', 'Admin',time()+8*60*60);
				}
				elseif($myrow[2] == 'agent')
				{
					setcookie('member_Type', 'Agent',time()+8*60*60);
				}
				elseif($myrow[2] == 'agent_dom')
				{
					setcookie('member_Type', 'Agent_DOM',time()+8*60*60);
				}
				elseif($myrow[2] == 'admin_dom')
				{
					setcookie('member_Type', 'Admin_DOM',time()+8*60*60);
				}
				else
				{
					setcookie('member_Type', 'Special',time()+8*60*60);
				}
				header('Location: login_home.php');
			}
			else
			{
				echo('<script language="javascript">alert("User ID and/or Password does not Matched!!!");location.href="home.php";</script>');
			}
		}
		else
		{
			$prefix = "bexs_";
			$sql = "SELECT login_id, password, employee_type, employee_name, employee_id FROM " . $prefix . "employee e WHERE login_id='" . $_POST['user_id'] . "'";
			$result = connect($sql);
			$num_rows = mysql_num_rows($result);
			$server_time = (mktime()+(19*60*60));
			//echo date("d M, Y h:i:s A", $server_time) . '<br>';
			
			//$server = (mktime(0,0,0)-(8*60*60));   //localhost
			
			if(date("H")>=13 && date("H")<=23)
			{
				$server = (mktime(0,0,0)+(11*60*60)); //web
			}
			else
			{
				$server = (mktime(0,0,0)); //web
				
			}
			//echo date("d M, Y h:i:s A", $server) . '<br>';
			

			if($num_rows > 0)
			{
				$myrow = mysql_fetch_row($result);
				if($myrow[1] == md5($_POST['user_pass']))
				{
					setcookie('USER[ID]', $myrow[4], $server_time);
					if($myrow[2] == 1)
					{
						setcookie('USER[TYPE]', 'admin', $server_time);
					}
					elseif($myrow[2] == 2)
					{
						setcookie('USER[TYPE]', 'scb', $server_time);
					}
			
					setcookie('USER[NAME]', $myrow[3], $server_time);
					setcookie('H', $_POST['h'], $server_time);
					setcookie('TODAY[START]', $server, $server_time);
					header('Location: soft/index.php');
				}
				else
				{
					echo('<script language="javascript">alert("User ID and/or Password does not Matched!!!");location.href="home.php";</script>');
				}
			}
			else
			{
				echo('<script language="javascript">alert("User ID and/or Password does not Matched!!!");location.href="home.php";</script>');
			}
		}
	}
}
?>