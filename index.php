
<link rel="stylesheet" type="text/css" href="style.css">
<?php

session_start();
if(isset($_POST['login']))
{
  
 mysql_connect('localhost','root','') or die(mysql_error());
 mysql_select_db('login') or die(mysql_error());
 $name=$_POST['username'];
 $pwd=$_POST['password'];
 if($name!=''&&$pwd!='')
 {
   $query=mysql_query("select * from adminlogin where Usename='".$name."' and Password='".$pwd."'") or die(mysql_error());
   $res=mysql_fetch_row($query);


   if($res)
   {
    $_SESSION['name']=$name;
    header('location:home.php');
   }
   else
   {
   die(header("location:index.php?loginFailed=true&reason=password")); 
  
   }
 }
 else
 {
 die(header("location: index.php?loginFailed=true&reason=password")); 
 
 }
}
?>

<div id="warp">
SJCET ADMIN LOGIN

  <form method="post" action="" id="formu">
    	<div class="admin">
			      <div class="rota">
				        <h1>ADMIN</h1>
        				<input name="username" type="text"  value="" placeholder="Username"/><br />
				        <input name="password" type="password"  value="" placeholder="Password"/>
      			</div>
    		</div>
    		<div class="cms">
      			<div class="roti">
			        	<h1>SJCET</h1>
				        <button name="login" type="submit">Submit</button><br />
				        <p> <a href="#">Forgot Password</a> </p>
      </div>
    		</div>
  	</form>
</div>