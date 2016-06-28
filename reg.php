


<!-- saved from url=(0171)http://projects.bitsadmission.com/mba/mbaapply/Regstep2.aspx?sid=BITS635887101414581449PILANI&pid=635887101414581449MBA&yid=635887101414581449PROGRAMME&yip=117.240.124.201 -->
<html xmlns="http://www.w3.org/1999/xhtml"><head id="Head1"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><title>
	
</title><link href="sjcet/edu_style.css" type="text/css" rel="stylesheet">

    

    <script language="javascript" type="text/javascript">
function check(elem)
{
	if(elem.value=="")
	{
		document.getElementById("val_name").innerHTML="Required";
		//elem.focus();
		return false;
	}
	else
	{
		document.getElementById("val_name").innerHTML="        ";
		//elem.focus();
		return true;
	}
}    
function checkGender(elem)
{
	if(elem.value=="")
	{
		document.getElementById("val_gender").innerHTML="Required";
		//elem.focus();
		return false;
	}
	else
	{
		document.getElementById("val_gender").innerHTML="        ";
		//elem.focus();
		return true;
	}
}    

 function nationality() {
   
            var inputs = document.getElementById('rdnationality').getElementsByTagName("input");
            
            for (var i = 0; i < inputs.length; i++) {
                if (inputs[i].checked) {
                    //alert(inputs[i].value);
                    if (inputs[i].value == "Others") {
                        document.getElementById('dvgdnmlist').style.display = "block";
                    } else {
                        document.getElementById('dvgdnmlist').style.display = "none";
                    }
                }
            }
        }   
  
    </script>

</head>
<body style="margin: 0px">
    <form name="form1" method="post" action="" onSubmit="" id="form1">

        <table width="100%" cellpadding="0" cellspacing="0" height="100%">
            <tbody><tr>
                <td>
                    
<table border="0" cellpadding="0" cellspacing="0" width="100%" align="center" bgcolor="orange">
    <tbody><tr>
        <td width="15%" bgcolor="#FF6600">
            <img src="sjcet/bitsat.jpg" alt="bitsat" width="102" height="99">
        </td>
        <td align="center" bgcolor="#FF6600">
            <font class="mtext"><font color="#ffffff">
            Application for Admission to Btech Programme<br><br>
            1st Semester 2016-17
            </font></font>
        </td>
        <td width="15%" align="right" valign="middle" bgcolor="#FF6600" class="mtext">
            <font color="#ffffff">
                SJCET, Palai&nbsp;</font>
        </td>
    </tr>
    <tr bgcolor="#d3d3d3" style="height: 5">
        <td align="right" colspan="3">
        </td>
    </tr>
</tbody></table>

                </td>
            </tr>
            <tr>
                <td height="100%" valign="top">
                    <table width="90%" align="center" cellpadding="4" cellspacing="1" bgcolor="#ffffff" border="0">
                        <tbody><tr bgcolor="#ffffff">
                            <td>
                                <table width="80%" cellpadding="0" cellspacing="0" border="0" id="Table1" align="center">
                                    <tbody><tr>
                                        <td class="mtext" align="center">
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>
                                                Enter the required details below&nbsp; and then click on the 'Submit' button on
                                                the bottom of the page.</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center">
                                            <table width="100%" border="0" cellpadding="0" cellspacing="0" id="Table3">
                                                <tbody><tr>
                                                    <td>
                                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" id="Table4">
                                                            <tbody>
                                                              <tr>
                                                                <td bgcolor="#FF6600" width="30%">
                                                                    <img height="10" src="sjcet/spacer.gif" width="5"><span class="wtext">Personal Details</span></td>
                                                                <td>
                                                                    <img src="sjcet/cross1.gif" border="0"></td>
                                                                <td align="right">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="3" bgcolor="#FF6600" height="3px">
                                                                </td>
                                                            </tr>
                                                        </tbody></table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table width="100%" border="0" cellpadding="4" cellspacing="0" id="Table2" bgcolor="#e0e0e0">
                                                            <tbody><tr bgcolor="white">
                                                                <td class="tdtext" width="30%">
                                                                    Full Name</td>
                                                                <td class="tdtext">
                                                                    <input name="txtfullname" type="text" maxlength="20"  id="txtfullname" class="text" size="40" onBlur="check(this)">&nbsp;<span id="val_name" style="color:#F00;" title="enter the name"></span>
                                                                </td>
                                                            </tr>
                                                            <tr bgcolor="white">
                                                                <td class="tdtext">
                                                                    Gender
                                                                </td>
                                                                <td class="tdtext">
                                                                    <input name="txtgender" type="text" maxlength="20"  id="txtgender" class="text" size="40" onBlur="checkGender(this)">&nbsp;<span id="val_gender" style="color:#F00;" title="enter the name"></span>
                                                                </td>
                                                            </tr>
                                                            <tr bgcolor="white">
                                                                <td class="tdtext">
                                                                    Date of birth
                                                                </td>
                                                                <td class="tdtext">
                                                                    <input name="txtdatetodisplay" type="text"  maxlength="20"  id="txtdatetodisplay" class="text" size="40">
                                                                    <input name="txtdob" type="text" value="1/5/1998" maxlength="20" readonly id="txtdob" class="text" size="40" style="display: none">
                                                                </td>
                                                            </tr>
                                                            <tr bgcolor="white">
                                                                <td valign="top" class="tdtext">
                                                                    Email-Id (if any)</td>
                                                                <td valign="top" class="tdtext">
                                                                    <input name="txtemailid" type="text"  maxlength="20"  id="txtemailid" class="text" size="40">
                                                                </td>
                                                            </tr>
                                                            <tr bgcolor="white">
                                                                <td class="tdtext">
                                                                    Father's name
                                                                </td>
                                                                <td class="tdtext">
                                                                    <input name="txtfathersname" type="text" maxlength="20" id="txtfathersname" class="text" size="40">
                                                                    <span id="RequiredFieldValidator20" style="color: red; visibility: hidden;">Enter Fathers Name</span>
                                                                </td>
                                                            </tr>
                                                            <tr bgcolor="white">
                                                                <td class="tdtext">
                                                                    Mother's name
                                                                </td>
                                                                <td class="tdtext">
                                                                    <input name="txtmothersname" type="text" maxlength="20" id="txtmothersname" class="text" size="40">
                                                                    <span id="RequiredFieldValidator21" style="color: red; visibility: hidden;">Enter Mothers Name</span>
                                                                </td>
                                                            </tr>
                                                            <tr bgcolor="white" valign="top">
                                                                <td valign="top" class="tdtext">
                                                                    Nationality</td>
                                                                <td valign="top" class="tdtext">
                                                                    <span id="rdnationality" class="tdtext" onClick="nationality();"><input id="rdnationality_0" type="radio" name="rdnationality" value="Indian"><label for="rdnationality_0">Indian</label><input id="rdnationality_1" type="radio" name="rdnationality" value="Others"><label for="rdnationality_1">Foreign</label></span>
                                                                    <span id="Reqgender" style="color: red; visibility: hidden;">Required</span>
                                                                    <div id="dvgdnmlist" style="display: none; color: Black; font-weight: bold;">
                                                                        Please specify Foreign Nationality:-<br>
                                                                        <input name="txtnationalityother" type="text" maxlength="100" id="txtnationalityother" class="text" size="40">
                                                                    </div>
                                                                    <script language="javascript"> document.getElementById('dvgdnmlist').style.display = 'none';</script>
                                                                </td>
                                                            </tr>
                                                            <tr bgcolor="white">
                                                                <td valign="top" class="tdtext">
                                                                    Address for correspondence</td>
                                                                <td valign="top" class="tdtext">
                                                                    <!--<textarea name="paddress" cols="32" rows="4" ></textarea>-->
                                                                    <input name="txtaddress1" type="text" maxlength="50" id="txtaddress1" class="text" size="40">
                                                                    <span id="reqadd1" style="color: red; visibility: hidden;">Required</span><br>
                                                                    <br>
                                                                    <input name="txtaddress2" type="text" maxlength="50" id="txtaddress2" class="text" size="40">
                                                                    <span id="reqadd2" style="color: red; visibility: hidden;">Required</span><br>
                                                                    <br>
                                                                    <input name="txtaddress3" type="text" maxlength="50" id="txtaddress3" class="text" size="40">
                                                                    <br>
                                                                    <br>
                                                                    <input name="txtaddress4" type="text" maxlength="50" id="txtaddress4" class="text" size="40">
                                                                    <br>
                                                                    <br>
                                                                    &nbsp;City:
                                                                    <input name="txtcity" type="text" maxlength="80" id="txtcity" class="text" size="40">
                                                                    <span id="reqcity" style="color: red; visibility: hidden;">Required</span>
                                                                    PinCode:
                                                                    <input name="txtpincode" type="text" maxlength="6" id="txtpincode" class="text" size="10">
                                                                    <span id="reqpincode" class="tdtext" style="color: red; visibility: hidden;">Required</span><br>
                                                                    <span id="regtxtemailid" style="color:Red;display:none;">Enter only Number for pincode.</span>
                                                                    
                                                                    <br>
                                                                    <br>
                                                                    State<font color="red">*</font>:
                                                                    <select name="ddlstatec" id="ddlstatec" class="text" onChange="Checkstate();">
	<option selected="selected" value="0">--Select State--</option>
	<option value="1">Andaman Nicobar</option>
	<option value="2">Andhra Pradesh</option>
	<option value="3">Arunachal Pradesh</option>
	<option value="4">Assam</option>
	<option value="5">Bihar</option>
	<option value="6">Chandigarh</option>
	<option value="7">Chhattisgarh</option>
	<option value="8">Dadra &amp; Nagar Haveli</option>
	<option value="9">Daman &amp; Diu</option>
	<option value="10">Delhi</option>
	<option value="11">Goa</option>
	<option value="12">Gujarat</option>
	<option value="13">Haryana</option>
	<option value="14">Himachal Pradesh</option>
	<option value="15">Jammu &amp; Kashmir</option>
	<option value="16">Jharkhand</option>
	<option value="17">Karnataka</option>
	<option value="18">Kerala</option>
	<option value="19">Lakshadweep</option>
	<option value="20">Madhya Pradesh</option>
	<option value="21">Maharashtra</option>
	<option value="22">Manipur</option>
	<option value="23">Meghalaya</option>
	<option value="24">Mizoram</option>
	<option value="25">Nagaland</option>
	<option value="26">Orissa</option>
	<option value="27">Pondicherry</option>
	<option value="28">Punjab</option>
	<option value="29">Rajasthan</option>
	<option value="30">Sikkim</option>
	<option value="31">Tamil Nadu</option>
	<option value="32">Telangana</option>
	<option value="33">Tripura</option>
	<option value="34">Uttar Pradesh</option>
	<option value="35">Uttaranchal</option>
	<option value="36">West Bengal</option>
	<option value="100">Others</option>

</select>
                                                                    <span id="reqstate" style="color: red; visibility: hidden;">Required</span>
                                                                    <br>
                                                                    <div id="ostate" style="display: none">
                                                                        Please enter the Other State
                                                                        <input name="txtopstate" type="text" maxlength="80" id="txtopstate" class="text" size="40">
                                                                        <span id="cvlstate" class="stext" style="color:Red;display:none;">Enter your State</span>
                                                                        <span id="regstate" style="color:Red;display:none;"><br>Only letters.</span>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr bgcolor="white">
                                                                <td valign="top" class="tdtext">
                                                                    Phone Number</td>
                                                                <td valign="top" class="tdtext">
                                                                    <input name="txtcontactno" type="text" id="txtcontactno" class="text" maxlengt="50" size="20">
                                                                    
                                                                </td>
                                                            </tr>
                                                            <tr bgcolor="white">
                                                                <td valign="top" class="tdtext">
                                                                    Mobile Number</td>
                                                                <td valign="top" class="tdtext">
                                                                    <input name="txtmobileno" type="text" maxlength="10" id="txtmobileno" class="text" size="14" onKeyPress="return isNumberKey(event)">
                                                                    <span id="reqmobile" style="color: red; visibility: hidden;">Required</span>
                                                                    <span id="RegularExpressionValidator1" style="color:Red;display:none;">Enter only Number.</span>
                                                                    
                                                                    (Enter only 10 digit mobile number. Do not add "<font color="red">0</font>" or "<font color="red">+91</font>")<br>
                                                                </td>
                                                            </tr>
                                                        </tbody></table>
                                                    </td>
                                                </tr>
                                            </tbody></table>
                                        </td>
                                    </tr>
                                                <tr>
                                        <td height="10">
        
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table width="100%" border="0" cellpadding="0" cellspacing="0" id="Table15">
                                                <tbody><tr>
                                                    <td>
                                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" id="Table16">
                                                            <tbody>
                                                              <tr>
                                                                <td bgcolor="#FF6600" width="30%">
                                                                    <img height="10" src="sjcet/spacer.gif" width="5"><span class="wtext">Batch Preference</span></td>
                                                                <td>
                                                                    <img src="sjcet/cross1.gif" border="0"></td>
                                                                <td>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="3" bgcolor="#FF6600" height="3px">
                                                                </td>
                                                            </tr>
                                                        </tbody></table>
                                                    </td>
                                                </tr>
                                    <tr>
                                                    <td>
                                                        <table width="100%" border="0" cellpadding="4" cellspacing="0" id="Table18" bgcolor="#e0e0e0">
                                                            <tbody>
                                                            <tr bgcolor="white">
                                                                <td width="30%" class="tdtext">Preference 1</td>
                                                                <td width="70%" colspan="3" align="left" class="tdtext">
                                                                    <select name="preference1" id="preference1" class="text" onChange="Checkstate();">
	<option selected="selected" value="0">--Select Preference--</option>
	<option value="1">AEI</option>
	<option value="2">CSE</option>
	<option value="3">ECE</option>
	<option value="4">EEE</option>
	<option value="5">CE</option>
	<option value="6">ME</option>
</select>
                                                                    <span id="reqdiscipline" style="color: red; visibility: hidden;">Required</span>
                                                                    
                                                                </td>
                                                            </tr>
                                                            <tr bgcolor="white">
                                                              <td class="tdtext">Preference 2</td>
                                                              <td class="tdtext" align="left" colspan="3"><select name="preference2" id="preference2" class="text" onChange="Checkstate();">
                                                                <option selected="selected" value="0">--Select Preference--</option>
                                                                <option value="1">AEI</option>
                                                                <option value="2">CSE</option>
                                                                <option value="3">ECE</option>
                                                                <option value="4">EEE</option>
                                                                <option value="5">CE</option>
                                                                <option value="6">ME</option>
                                                              </select>
                                                                <span id="reqdiscipline2" style="color: red; visibility: hidden;">Required</span></td>
                                                            </tr>
                                                            <tr bgcolor="white">
                                                              <td class="tdtext">Preference 3</td>
                                                              <td class="tdtext" align="left" colspan="3"><select name="preference2" id="preference3" class="text" onChange="Checkstate();">
                                                                <option selected="selected" value="0">--Select Preference--</option>
                                                                <option value="1">AEI</option>
                                                                <option value="2">CSE</option>
                                                                <option value="3">ECE</option>
                                                                <option value="4">EEE</option>
                                                                <option value="5">CE</option>
                                                                <option value="6">ME</option>
                                                              </select>
                                                                <span id="reqdiscipline3" style="color: red; visibility: hidden;">Required</span></td>
                                                            </tr>
                                                            <tr bgcolor="white">
                                                              <td class="tdtext">Preference 4</td>
                                                              <td class="tdtext" align="left" colspan="3"><select name="preference2" id="preference4" class="text" onChange="Checkstate();">
                                                                <option selected="selected" value="0">--Select Preference--</option>
                                                                <option value="1">AEI</option>
                                                                <option value="2">CSE</option>
                                                                <option value="3">ECE</option>
                                                                <option value="4">EEE</option>
                                                                <option value="5">CE</option>
                                                                <option value="6">ME</option>
                                                              </select>
                                                                <span id="reqdiscipline4" style="color: red; visibility: hidden;">Required</span></td>
                                                            </tr>
                                                            <tr bgcolor="white">
                                                              <td class="tdtext">Preference 5</td>
                                                              <td class="tdtext" align="left" colspan="3"><select name="preference2" id="preference5" class="text" onChange="Checkstate();">
                                                                <option selected="selected" value="0">--Select Preference--</option>
                                                                <option value="1">AEI</option>
                                                                <option value="2">CSE</option>
                                                                <option value="3">ECE</option>
                                                                <option value="4">EEE</option>
                                                                <option value="5">CE</option>
                                                                <option value="6">ME</option>
                                                              </select>
                                                                <span id="reqdiscipline5" style="color: red; visibility: hidden;">Required</span></td>
                                                            </tr>
                                                            <tr bgcolor="white">
                                                              <td class="tdtext">Preference 6</td>
                                                              <td class="tdtext" align="left" colspan="3"><select name="preference2" id="preference6" class="text" onChange="Checkstate();">
                                                                <option selected="selected" value="0">--Select Preference--</option>
                                                                <option value="1">AEI</option>
                                                                <option value="2">CSE</option>
                                                                <option value="3">ECE</option>
                                                                <option value="4">EEE</option>
                                                                <option value="5">CE</option>
                                                                <option value="6">ME</option>
                                                              </select>
                                                                <span id="reqdiscipline6" style="color: red; visibility: hidden;">Required</span></td>
                                                            </tr>
                                                            
                                                            
                                                        </tbody></table>
                                                    </td>
                                                </tr>
                                            </tbody></table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="10">
        
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table width="100%" border="0" cellpadding="0" cellspacing="0" id="Table5">
                                                <tbody><tr>
                                                    <td>
                                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" id="Table6">
                                                            <tbody><tr>
                                                                <td bgcolor="#FF6600" width="30%">
                                                                    <img height="10" src="sjcet/spacer.gif" width="5"><span class="wtext">Details Of 12th Standared Examination</span></td>
                                                                <td>
                                                                    <img src="sjcet/cross1.gif" border="0"></td>
                                                                <td>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="3" bgcolor="#FF6600" height="3px">
                                                                </td>
                                                            </tr>
                                                        </tbody></table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table width="100%" border="0" cellpadding="4" cellspacing="0" id="Table8" bgcolor="#e0e0e0">
                                                            <tbody>
                                                            <tr bgcolor="white">
                                                                <td width="30%" class="tdtext">Institution Name</td>
                                                                <td class="tdtext" align="left" colspan="3">
                                                                    <input name="txtinsname" type="text" maxlength="100" id="txtinsname" class="text" size="30">
                                                                    <span id="reqdiscipline" style="color: red; visibility: hidden;">Required</span>
                                                                    
                                                                </td>
                                                            </tr>
                                                            <tr bgcolor="white">
                                                              <td class="tdtext">Year of passing</td>
                                                              <td class="tdtext" align="left" colspan="3"><input name="txtyearofpass" type="text" maxlength="4" id="txtyearofpass" class="text" size="30" onKeyPress="return isNumberKey(event)">
                                                                <span id="reqdiscipline7" style="color: red; visibility: hidden;">Required</span></td>
                                                            </tr>
                                                            <tr bgcolor="white">
                                                              <td class="tdtext">Register No of final Exam</td>
                                                              <td class="tdtext" align="left" colspan="3"><input name="txtregno" type="text" maxlength="100" id="txtregno" class="text" size="30" onKeyPress="return isNumberKey(event)">
                                                                <span id="reqdiscipline8" style="color: red; visibility: hidden;">Required</span></td>
                                                            </tr>
                                                            <tr bgcolor="white">
                                                              <td class="tdtext">Total Marks Obtained</td>
                                                              <td class="tdtext" align="left" colspan="3"><input name="txttotmark" type="text" maxlength="10" id="txttotmark" class="text" size="30" onKeyPress="return isNumberKey(event)">
                                                                <span id="reqdiscipline9" style="color: red; visibility: hidden;">Required</span></td>
                                                            </tr>
                                                            <tr bgcolor="white">
                                                              <td class="tdtext">Maximum Marks</td>
                                                              <td class="tdtext" align="left" colspan="3"><input name="txtmaxmark" type="text" maxlength="10" id="txtmaxmark" class="text" size="30" onKeyPress="return isNumberKey(event)">
                                                                <span id="reqdiscipline10" style="color: red; visibility: hidden;">Required</span></td>
                                                            </tr>
                                                            <tr bgcolor="white">
                                                              <td class="tdtext">Percentage/Grade</td>
                                                              <td class="tdtext" align="left" colspan="3"><input name="txtpercent" type="text" maxlength="10" id="txtpercent" class="text" size="30">
                                                                <span id="reqdiscipline11" style="color: red; visibility: hidden;">Required</span></td>
                                                            </tr>
                                                            <tr bgcolor="white">
                                                              <td class="tdtext">Qualifying Exam</td>
                                                              <td class="tdtext" align="left" colspan="3">
                                                              <select name="qualifyingexam" id="qualifyingexam" class="text" onChange="Checkstate();">
	<option selected="selected" value="0">--Select--</option>
	<option value="1">HSE</option>
	<option value="2">CBSE</option>
	<option value="3">ICSE</option>
	<option value="4">Others</option>
</select>
                                                                <span id="reqdiscipline12" style="color: red; visibility: hidden;">Required</span></td>
                                                            </tr>
                                                            
                                                        </tbody></table>
                                                    </td>
                                                </tr>
                                            </tbody></table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="10"></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table width="100%" border="0" cellpadding="0" cellspacing="0" id="Table7">
                                                <tbody><tr>
                                                    <td>
                                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" id="Table9">
                                                            <tbody><tr>
                                                                <td bgcolor="#FF6600" width="34%"><img height="10" src="sjcet/spacer.gif" width="2"><span class="wtext"> Marks Obtained in 12th Standard(2nd Year Only)
                                                                    </span>
                                                                </td>
                                                                <td width="33%">
                                                                    <img src="sjcet/cross1.gif" border="0"></td>
                                                                <td width="33%">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="3" bgcolor="#FF6600" height="3px">
                                                                </td>
                                                            </tr>
                                                        </tbody></table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table width="100%" align="center" cellpadding="4" cellspacing="0" id="Table10" border="0">
                                                            <tbody>
                                                            <tr bgcolor="white" width="30%">
                                                                <td width="30%" class="tdtext">Subject</td>
                                                                <td width="70%" class="tdtext">
                                                                    <input name="txtphy" type="text" maxlength="50" id="txtphy" class="text" size="30" value="Physics">
                                                                    
                                                                </td>
                                                            </tr>
                                                            <tr bgcolor="white">
                                                                <td class="tdtext" width="30%">
                                                                    Marks obtained</td>
                                                                <td class="tdtext">
                                                                    <input name="txtphymark" type="text" maxlength="50" id="txtphymark" class="text" size="30" onKeyPress="return isNumberKey(event)"></td>
                                                            </tr>
                                                            <tr bgcolor="white">
                                                              <td class="tdtext">Maximum Marks</td>
                                                              <td class="tdtext" align="left" colspan="3"><input name="txtmaxphy" type="text" maxlength="10" id="txtmaxphy" class="text" size="30" onKeyPress="return isNumberKey(event)">
                                                                <span id="reqdiscipline10" style="color: red; visibility: hidden;">Required</span></td>
                                                            </tr>
                                                            <tr bgcolor="white" width="30%">
                                                              <td class="tdtext">Subject</td>
                                                              <td class="tdtext"><input name="txtche" type="text" maxlength="50" id="txtche" class="text" size="30" value="Chemistry"></td>
                                                            </tr>
                                                            <tr bgcolor="white">
                                                              <td class="tdtext"> Marks obtained</td>
                                                              <td class="tdtext"><input name="txtchemark" type="text" maxlength="50" id="txtchemark" class="text" size="30" onKeyPress="return isNumberKey(event)"></td>
                                                            </tr>
                     <tr bgcolor="white">
                                                              <td class="tdtext">Maximum Marks</td>
                                                              <td class="tdtext" align="left" colspan="3"><input name="txtmaxche" type="text" maxlength="10" id="txtmaxche" class="text" size="30" onKeyPress="return isNumberKey(event)">
                                                                <span id="reqdiscipline10" style="color: red; visibility: hidden;">Required</span></td>
                                                            </tr>                                       <tr bgcolor="white" width="30%">
                                                              <td class="tdtext">Subject</td>
                                                              <td class="tdtext"><input name="txtmath" type="text" maxlength="50" id="txtmath" class="text" size="30" value="Mathematics"></td>
                                                            </tr>
                                                            <tr bgcolor="white">
                                                              <td class="tdtext"> Marks obtained</td>
                                                              <td class="tdtext"><input name="txtmathmark" type="text" maxlength="50" id="txtmathmark" class="text" size="30" onKeyPress="return isNumberKey(event)"></td>
                                                            </tr>
                <tr bgcolor="white">
                                                              <td class="tdtext">Maximum Marks</td>
                                                              <td class="tdtext" align="left" colspan="3"><input name="txtmaxmath" type="text" maxlength="10" id="txtmaxmath" class="text" size="30" onKeyPress="return isNumberKey(event)">
                                                                <span id="reqdiscipline10" style="color: red; visibility: hidden;">Required</span></td>
                                                            </tr>                                          </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody></table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="10">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table width="100%" border="0" cellpadding="0" cellspacing="0" id="Table11">
                                                <tbody><tr>
                                                    <td>
                                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" id="Table12">
                                                            <tbody><tr>
                                                                <td bgcolor="#FF6600" width="33%">
                                                                    <img height="10" src="sjcet/spacer.gif" width="5"><span class="wtext">Details Of Kerala Govt. Entrance Examination</span></td>
                                                                <td width="35%">
                                                                    <img src="sjcet/cross1.gif" border="0"></td>
                                                                <td width="32%">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="3" bgcolor="#FF6600" height="3px">
                                                                </td>
                                                            </tr>
                                                        </tbody></table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="bld"><center>
                                                    </center>
                                                        <table width="100%" align="center" cellpadding="4" cellspacing="0">
                                                            <tbody><tr bgcolor="white">
                                                                <td class="tdtext" width="30%">Month</td>
                                                                <td width="70%" align="left" class="tdtext"><input name="txtentrancemonth" type="text" maxlength="25" id="txtentrancemonth" class="text" size="30">
                                                              </td>
                                                            </tr>
                                                            <tr bgcolor="white">
                                                                <td class="tdtext" width="30%">Year</td>
                                                                <td class="tdtext" align="left"><input name="txtentranceyear" type="text" maxlength="25" id="txtentranceyear" class="text" size="30">
                                                            </td></tr>
                                                            <tr bgcolor="white">
                                                              <td class="tdtext">Rank</td>
                                                              <td class="tdtext" align="left">
                                                              <input type="text" name="txtentrancerank" id="txtentrancerank" class="text" size="30"></td>
                                                            </tr>
                                                            <tr bgcolor="white">
                                                              <td class="tdtext">Roll Number</td>
                                                              <td class="tdtext" align="left" colspan="3"><input name="txtentrancerollnumber" type="text" maxlength="100" id="txtentrancerollnumber" class="text" size="30" onKeyPress="return isNumberKey(event)">
                                                              <span id="reqdiscipline8" style="color: red; visibility: hidden;">Required</span></td>
                                                            </tr>
                                                            <tr bgcolor="white" width="30%">
                                                                <td width="30%" class="tdtext">Paper 1</td>
                                                                <td width="70%" class="tdtext">
                                                                    <input name="txtpaper1" type="text" maxlength="50" id="txtpaper1" class="text" size="30" value="Paper 1">
                                                                    
                                                                </td>
                                                            </tr>
                                                            <tr bgcolor="white">
                                                              <td class="tdtext"> Marks obtained</td>
                                                              <td class="tdtext"><input name="txtp1mark" type="text" maxlength="50" id="txtp1mark" class="text" size="30" onKeyPress="return isNumberKey(event)"></td>
                                                            </tr>
                                                            <tr bgcolor="white">
                                                              <td class="tdtext">Maximum Marks</td>
                                                              <td class="tdtext" align="left" colspan="3"><input name="txtmaxp1" type="text" maxlength="10" id="txtmaxp1" class="text" size="30" onKeyPress="return isNumberKey(event)">
                                                                <span id="reqdiscipline10" style="color: red; visibility: hidden;">Required</span></td>
                                                            </tr>
                                                            <tr bgcolor="white" width="30%">
                                                                <td width="30%" class="tdtext">Paper 2</td>
                                                                <td width="70%" class="tdtext">
                                                                    <input name="txtpaper2" type="text" maxlength="50" id="txtpaper2" class="text" size="30" value="Paper 2">
                                                                    
                                                                </td>
                                                            </tr>
                                                            <tr bgcolor="white">
                                                              <td class="tdtext"> Marks obtained</td>
                                                              <td class="tdtext"><input name="txtp2mark" type="text" maxlength="50" id="txtp2mark" class="text" size="30" onKeyPress="return isNumberKey(event)"></td>
                                                            </tr>
                                                            <tr bgcolor="white">
                                                              <td class="tdtext">Maximum Marks</td>
                                                              <td class="tdtext" align="left" colspan="3"><input name="txtmaxp2" type="text" maxlength="10" id="txtmaxp2" class="text" size="30" onKeyPress="return isNumberKey(event)">
                                                                <span id="reqdiscipline10" style="color: red; visibility: hidden;">Required</span></td>
                                                            </tr>
                                                          </tbody>
                                                      </table>
                                                  </td>
                                                </tr>
                                            </tbody></table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table width="95%" align="center" cellpadding="4" cellspacing="0">
                                                <tbody><tr bgcolor="#ffffff">
                                                    <td class="bld" align="left" width="33%">
                                                        
                                                    </td>
                                                    <td class="bld" align="center" width="33%">
                                                        <input type="submit" name="btnsubmit" value="Submit" id="btnsubmit" class="submit" style="color:White;background-color:#FF6600;font-weight:bold;width:100px;">
                                                    </td>
                                                    <td class="bld" align="right" width="33%">
                                                        
                                                    </td>
                                                </tr>
                                            </tbody></table>
                                        </td>
                                    </tr>
                                </tbody></table>
                            </td>
                        </tr>
                    </tbody></table>
                </td>
            </tr>
            <tr>
                <td height="22">
                    
<table cellspacing="0" cellpadding="0" width="100%" align="center" border="0" bgcolor="#d4cab6" id="Table1">
    <tbody>
      <tr bgcolor="#0C477F">
        <td height="22px" colspan="3" align="center" bgcolor="#FF6600" class="sbld">
            <font size="1" face="verdana" color="#ffffff">© SJCET,Palai. All rights reserved</font>
        </td>
    </tr>
</tbody></table>
                </td>
            </tr>
        </tbody></table>

</form>


</body></html>