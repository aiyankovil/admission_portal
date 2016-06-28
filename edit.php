
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


if(isset($_POST['save']))
{


$name = mysql_real_escape_string($_POST['name']);
$phymark = mysql_real_escape_string($_POST['phymark']);

$chemark = mysql_real_escape_string($_POST['chemark']);
$mathmark = mysql_real_escape_string($_POST['mathmark']);

    


    $query="UPDATE basic_info b,education_qualification r
            SET firstName='$name',physicsmark='$phymark',chemistrymark='$chemark',mathsmark='$mathmark'
            
            WHERE r.application_no&&b.application_no = '$app'";


mysql_query($query)or die(mysql_error());

if(mysql_query($query)){
      $message ="Records updated";
echo "<script type='text/javascript'>alert('Records updated successfully');</script>";
header("location:allot.php");

}
}
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
                                                Edit the required details below&nbsp; and then click on the 'Save' button on
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
                                                                    <input name="name" value="<?php echo $row ['firstName'] ,' ', $row['middleName'] ,' ' ,$row['lastName'] ?>"type="text" maxlength="20"  class="text" size="40" onblur="check(this)">&nbsp;<span id="val_name" style="color:#F00;" title="enter the name"></span>
                                                                </td>
                                                            </tr>
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
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
                                                                    <input name="phymark" value="<?php echo $row['physicsmark']?>"type="text" maxlength="50"  class="text" size="30" onkeypress="return isNumberKey(event)"></td>
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
                                                              <td class="tdtext"><input name="chemark" value="<?php echo $row['chemistrymark']?>"type="text" maxlength="50"  class="text" size="30" onkeypress="return isNumberKey(event)"></td>
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
                                                              <td class="tdtext"><input name="mathmark" value="<?php echo $row['mathsmark']?>"type="text" maxlength="50"  class="text" size="30" onkeypress="return isNumberKey(event)"></td>
                                                            </tr>
                <tr bgcolor="white">
                                                              <td class="tdtext">Maximum Marks</td>
                                                              <td class="tdtext" align="left" colspan="3"><input name="txtmaxmath" type="text" maxlength="10"  value="<?php echo $row['mathsmaxmark']?>"class="text" size="30" onkeypress="return isNumberKey(event)">
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