
<!-- saved from url=(0070)file:///C:/Documents%20and%20Settings/student/My%20Documents/list.html -->
<html xmlns="http://www.w3.org/1999/xhtml"><head id="Head1"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><title>
	
</title><link href="./list_files/edu_style.css" type="text/css" rel="stylesheet">

    


</head>
<?php
$con =mysql_connect("localhost","root","")or die("error found");
mysql_select_db("sjcetp5_application",$con)or die("error in database");
$app=$_GET['app'];
$query = mysql_query("SELECT * FROM basic_info b,education_qualification r WHERE r.application_no&&b.application_no = '$app'")
or die(mysql_error());  

$row = mysql_fetch_array($query);




?>
<body style="margin: 0px">
    <form name="form1" method="post" action="" onsubmit="" id="form1">

        <table width="100%" cellpadding="0" cellspacing="0" height="100%">
            <tbody><tr>
                <td>
                    
<table border="0" cellpadding="0" cellspacing="0" width="100%" align="center" bgcolor="orange">
    <tbody><tr>
        <td width="15%" bgcolor="#339966">
            
        </td>
        <td align="center" bgcolor="#339966">
            <font class="mtext"><font color="#ffffff">
            Application for Admission to Btech Programme<br><br>
            1st Semester 2016-17
            </font></font>
        </td>
        <td width="15%" align="right" valign="middle" bgcolor="#339966" class="mtext">
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
                                                                <td bgcolor="#339966" width="30%">
                                                                    <img height="10" src="./list_files/spacer.gif" width="5"><span class="wtext">Personal Details</span></td>
                                                                <td>
                                                                    </td>
                                                                <td align="right">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="3" bgcolor="#339966" height="3px">
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
                                                                    <input name="txtfullname" value="<?php echo $row ['firstName'] ,' ', $row['middleName'] ,' ' ,$row['lastName'] ?>"type="text" maxlength="20" id="txtfullname" class="text" size="40" onblur="check(this)">&nbsp;<span id="val_name" style="color:#F00;" title="enter the name"></span>
                                                                </td>
                                                            </tr>
                                                            <tr bgcolor="white">
                                                                <td class="tdtext">
                                                                    Gender
                                                                </td>
                                                                <td class="tdtext">
                                                                    <input name="txtgender" value="<?php
                                                                    if($row['gender']=1)
                                                                    {
                                                                        echo "Male";

                                                                      }
                                                                      else
                                                                      {
                                                                        echo "Female";
                                                                      }

                                                                    ?>" type="text" value=""maxlength="20" id="txtgender" class="text" size="40" onblur="checkGender(this)">&nbsp;<span id="val_gender" style="color:#F00;" title="enter the name"></span>
                                                                </td>
                                                            </tr>
                                                            <tr bgcolor="white">
                                                                <td class="tdtext">
                                                                    Date of birth
                                                                </td>
                                                                <td class="tdtext">
                                                                    <input name="txtdatetodisplay" type="text" value="<?php echo $row['dateOfBirth']?>"maxlength="20" id="txtdatetodisplay" class="text" size="40">
                                                                    <input name="txtdob" type="text" value="1/5/1998" maxlength="20" readonly="" id="txtdob" class="text" size="40" style="display: none">
                                                                </td>
                                                            </tr>
                                                            <tr bgcolor="white">
                                                                <td valign="top" class="tdtext">
                                                                    Email-Id (if any)</td>
                                                                <td valign="top" class="tdtext">
                                                                    <input name="txtemailid" value="<?php echo $row['emailAddress']?>"type="text" maxlength="20" id="txtemailid" class="text" size="40">
                                                                </td>
                                                            </tr>
                                                            <tr bgcolor="white">
                                                                
                                                                
                                                            </tr>
                                                            <tr bgcolor="white">
                                                                
                                                                <td class="tdtext">
                                                                    
                                                                    
                                                                </td>
                                                            </tr>
                                                            
                                                            <tr bgcolor="white">
                                                                
                                                                
                                                            </tr>
                                                            <tr bgcolor="white">
                                                                
                                                                <td valign="top" class="tdtext">
                                                                    
                                                                    
                                                                </td>
                                                            </tr>
                                                            <tr bgcolor="white">
                                                                <td valign="top" class="tdtext">
                                                                    Mobile Number</td>
                                                                <td valign="top" class="tdtext">
                                                                    <input name="txtmobileno" value="<?php echo $row['mobileNumber']?>"type="text" maxlength="10" id="txtmobileno" class="text" size="14" onkeypress="return isNumberKey(event)">
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
                                        <td>
                                            <table width="100%" border="0" cellpadding="0" cellspacing="0" id="Table15">
                                                <tbody><tr>
                                                    <td>
                                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" id="Table16">
                                                            <tbody>
                                                              <tr>
                                                                
                                                                <td>
                                                                    </td>
                                                                <td>
                                                                </td>
                                                            </tr>
                                                            
                                                        </tbody></table>
                                                    </td>
                                                </tr>
                                    <tr>
                                                    <td>
                                                        <table width="100%" border="0" cellpadding="4" cellspacing="0" id="Table18" bgcolor="#e0e0e0">
                                                            <tbody>
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                        </tbody></table>
                                                    </td>
                                                </tr>
                                            </tbody></table>
                                        </td>
                                    </tr>
                                    <tr>
                                        
                                    </tr>
                                    <tr>
                                        <td>
                                            <table width="100%" border="0" cellpadding="0" cellspacing="0" id="Table5">
                                                <tbody><tr>
                                                    <td>
                                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" id="Table6">
                                                            <tbody><tr>
                                                                
                                                                
                                                                <td>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                
                                                            </tr>
                                                        </tbody></table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table width="100%" border="0" cellpadding="4" cellspacing="0" id="Table8" bgcolor="#e0e0e0">
                                                            </table>
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
                                                                <td bgcolor="#339966" width="34%"><img height="10" src="./list_files/spacer.gif" width="2"><span class="wtext"> Marks Obtained in 12th Standard(2nd Year Only)
                                                                    </span>
                                                                </td>
                                                                <td width="33%">
                                                                    </td>
                                                                <td width="33%">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="3" bgcolor="#339966" height="3px">
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
                                                                    <input name="txtphymark" value="<?php echo $row['physicsmark']?>"type="text" maxlength="50" id="txtphymark" class="text" size="30" onkeypress="return isNumberKey(event)"></td>
                                                            </tr>
                                                            <tr bgcolor="white">
                                                              <td class="tdtext">Maximum Marks</td>
                                                              <td class="tdtext" align="left" colspan="3"><input name="txtmaxphy" value="<?php echo $row['physicsmaxmark']?>"type="text" maxlength="10" id="txtmaxphy" class="text" size="30" onkeypress="return isNumberKey(event)">
                                                                <span id="reqdiscipline10" style="color: red; visibility: hidden;">Required</span></td>
                                                            </tr>
                                                            <tr bgcolor="white" width="30%">
                                                              <td class="tdtext">Subject</td>
                                                              <td class="tdtext"><input name="txtche" type="text" maxlength="50" id="txtche" class="text" size="30" value="Chemistry"></td>
                                                            </tr>
                                                            <tr bgcolor="white">
                                                              <td class="tdtext"> Marks obtained</td>
                                                              <td class="tdtext"><input name="txtchemark" value="<?php echo $row['chemistrymark']?>"type="text" maxlength="50" id="txtchemark" class="text" size="30" onkeypress="return isNumberKey(event)"></td>
                                                            </tr>
                     <tr bgcolor="white">
                                                              <td class="tdtext">Maximum Marks</td>
                                                              <td class="tdtext" align="left" colspan="3"><input name="txtmaxche" value="<?php echo $row['chemistrymaxmark']?>"type="text" maxlength="10" id="txtmaxche" class="text" size="30" onkeypress="return isNumberKey(event)">
                                                                <span id="reqdiscipline10" style="color: red; visibility: hidden;">Required</span></td>
                                                            </tr>                                       <tr bgcolor="white" width="30%">
                                                              <td class="tdtext">Subject</td>
                                                              <td class="tdtext"><input name="txtmath" type="text" maxlength="50" id="txtmath" class="text" size="30" value="Mathematics"></td>
                                                            </tr>
                                                            <tr bgcolor="white">
                                                              <td class="tdtext"> Marks obtained</td>
                                                              <td class="tdtext"><input name="txtmathmark" value="<?php echo $row['mathsmark']?>"type="text" maxlength="50" id="txtmathmark" class="text" size="30" onkeypress="return isNumberKey(event)"></td>
                                                            </tr>
                <tr bgcolor="white">
                                                              <td class="tdtext">Maximum Marks</td>
                                                              <td class="tdtext" align="left" colspan="3"><input name="txtmaxmath" type="text" maxlength="10" id="txtmaxmath" value="<?php echo $row['mathsmaxmark']?>"class="text" size="30" onkeypress="return isNumberKey(event)">
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
                                                                <td bgcolor="#339966" width="33%">
                                                                    <img height="10" src="./list_files/spacer.gif" width="5"><span class="wtext">Details Of Kerala Govt. Entrance Examination</span></td>
                                                                <td width="35%">
                                                                    </td>
                                                                <td width="32%">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="3" bgcolor="#339966" height="3px">
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
                                                                
                                                                <td width="70%" align="left" class="tdtext">
                                                              </td>
                                                            </tr>
                                                            <tr bgcolor="white">
                                                                <td class="tdtext" width="30%">Year</td>
                                                                <td class="tdtext" align="left"><input name="txtentranceyear" type="text" maxlength="25" id="txtentranceyear" value="<?php echo '201',$row['entranceyear']?>"class="text" size="30">
                                                            </td></tr>
                                                            <tr bgcolor="white">
                                                              <td class="tdtext">Rank</td>
                                                              <td class="tdtext" align="left">
                                                              <input type="text" value="<?php echo $row['entrancerank']?>"name="txtentrancerank" id="txtentrancerank" class="text" size="30"></td>
                                                            </tr>
                                                            <tr bgcolor="white">
                                                              <td class="tdtext">Roll Number</td>
                                                              <td class="tdtext" align="left" colspan="3"><input name="txtentrancerollnumber" type="text" maxlength="100" value="<?php echo $row['entrancerollnumber']?>"id="txtentrancerollnumber" class="text" size="30" onkeypress="return isNumberKey(event)">
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
                                                              <td class="tdtext"><input name="txtp1mark" value="<?php echo $row['paper1mark']?>"type="text" maxlength="50" id="txtp1mark" class="text" size="30" onkeypress="return isNumberKey(event)"></td>
                                                            </tr>
                                                            <tr bgcolor="white">
                                                              <td class="tdtext">Maximum Marks</td>
                                                              <td class="tdtext" align="left" colspan="3"><input name="txtmaxp1" value="<?php echo $row['paper1maxmark']?>"type="text" maxlength="10" id="txtmaxp1" class="text" size="30" onkeypress="return isNumberKey(event)">
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
                                                              <td class="tdtext"><input name="txtp2mark" type="text" value="<?php echo $row['paper2mark']?>"maxlength="50" id="txtp2mark" class="text" size="30" onkeypress="return isNumberKey(event)"></td>
                                                            </tr>
                                                            <tr bgcolor="white">
                                                              <td class="tdtext">Maximum Marks</td>
                                                              <td class="tdtext" align="left" colspan="3"><input name="txtmaxp2" type="text" maxlength="10" id="txtmaxp2"value="<?php echo $row['paper2maxmark']?>" class="text" size="30" onkeypress="return isNumberKey(event)">
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
                                                        <input type="submit" name="btnsubmit" value="Submit" id="btnsubmit" class="submit" style="color:Black;bgcolor=">
                                                    </td>
                                                    <td class="bld" align="right" width="33%">
                                                       <input type="submit" name="btnsubmit" value="Edit" id="btnsubmit" class="submit" style="color:Black;bgcolor="> 
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
        <td height="22px" colspan="3" align="center" bgcolor="#339966" class="sbld">
            <font size="1" face="verdana" color="#ffffff">© SJCET,Palai. All rights reserved</font>
        </td>
    </tr>
</tbody></table>
                </td>
            </tr>
        </tbody></table>

</form>


</body></html>