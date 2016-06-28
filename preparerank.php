<?php 

$con =mysql_connect('localhost','root','')or die('error found');
mysql_select_db('sjcetp5_application',$con)or die('error in database');


$selq="select * from education_qualification";
$res=mysql_query($selq);
while($result=mysql_fetch_array($res))
{

		$appl_no=$result['application_no'];

		$phy_mark=$result['physicsmark'];
		$che_mark=$result['chemistrymark'];
		$maths_mark=$result['mathsmark'];
		$E_paper1=$result['paper1mark'];
		$E_paper2=$result['paper2mark'];

	    //equation should be supplied here
		$calulated_mark=($phy_mark)+($che_mark)+($maths_mark)+($E_paper1)+($E_paper2);

		
		$insquery="insert into tbl_ranklist(application_no,cal_mark) values('".$appl_no."','".$calulated_mark."')";
		mysql_query($insquery);


}



?>