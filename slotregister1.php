<!DOCTYPE html>
 <html lang="en" class="no-js"> 
    <head>
    <!-- meta charec set -->
        <meta charset="utf-8">
		<!-- Always force latest IE rendering engine or request Chrome Frame -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<!-- Page Title -->
        <title>Allotment@SJCET</title>		
		<!-- Meta Description -->
        <meta name="description" content="Blue One Page Creative HTML5 Template">
        <meta name="keywords" content="one page, single page, onepage, responsive, parallax, creative, business, html5, css3, css3 animation">
        <meta name="author" content="Muhammad Morshed">
		<!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Google Font -->
		
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

		<!-- CSS
		================================================== -->
		<!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- Twitter Bootstrap css -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- jquery.fancybox  -->
        <link rel="stylesheet" href="css/jquery.fancybox.css">
		<!-- animate -->
        <link rel="stylesheet" href="css/animate.css">
		<!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/main.css">
         <link rel="stylesheet" href="css/hover.css">
		<!-- media-queries -->
        <link rel="stylesheet" href="css/media-queries.css">
        <link rel="stylesheet" href="css/new.css">
		<!-- Modernizer Script for old Browsers -->
        <script src="js/modernizr-2.6.2.min.js"></script>

    </head>




    <?php
if(isset($_POST['btn1']))
{
$con1 =mysql_connect("localhost","root","")or die("error found");
mysql_select_db("admin",$con1)or die("error in database");

$f1name = $_POST['name'];
$A1pp_no = $_POST['Appno'];

$d_br=$_POST['slot'];
if($d_br='slot1')
{

$insQuery= "insert into slot1(App_no,fname,lname) values('$A1pp_no','$f1name','{$l1name}')";
  				mysql_query($insQuery) or die(mysql_error());

}
}

	?>
	
    <body id="body">
	
		<!-- preloader -->
		<div id="preloader">
			<img src="img/332.gif" alt="Preloader">
		</div>
		<!-- end preloader -->

        <!-- 
        Fixed Navigation
        ==================================== -->
        <header id="navigation" class="navbar-fixed-top navbar">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-bars fa-2x"></i>
                    </button>
					<!-- /responsive nav button -->
					
					<!-- logo -->
                    <a class="navbar-brand" href="#body">
						<h1 id="logo">
                        <img src="img/sjcetlogo.png" alt="SJCET Allotment"><img src="img/logo.png" alt="SJCET Allotment">
						</h1>
					</a>
					<!-- /logo -->
                </div>

				<!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <ul class="nav navbar-nav">
                        <li ><a href="home.php">Home</a></li>

                        
                        <li><a href="login.php"><button type="button" class="btn btn-primary hvr-fade" onclick="window.location.href='./login.php'">Logout</button></a></li>
                      
                    </ul>
                </nav>
				<!-- /main nav -->
				
            </div>
        </header>
        <!--
        End Fixed Navigation
        ==================================== -->
		
		
		
		
        <!--
        End Home SliderEnd
        ==================================== -->
		
      
			<section id="allot" class="date">
			<div class="container">
				<div class="row mb50">
				
					<div class="sec-title text-center mb50 wow fadeInDown animated" data-wow-duration="500ms">
						<br><br><br><br>
						<h2>SLOT REGISTRATION</h2>
						<div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
					</div>
					
					<div class="sec-sub-title text-center wow rubberBand animated" data-wow-duration="1000ms">
						<p> REGISTER THE CANDIDATE ACCORDING TO RANK AND REPORTED SLOT</p>
					</div>

					<div class="col-md-offset-3 col-md-10 list">
					<br>
					<form action="" method="post">
<label>Application No:</label><input type="text" name="txt_appno" />
					<button type="submit" name="btn_app">Proceed</button><br />
</form>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</div>


    <?php
    $con =mysql_connect("localhost","root","")or die("error found");
mysql_select_db("sjcetp5_application",$con)or die("error in database");


    if(isset($_POST['btn_app']))
    {

    $app = $_POST['txt_appno'];

$query = mysql_query("SELECT * FROM sjcetp5_application.basic_info b,sjcetp5_application.education_qualification r WHERE r.application_no = '$app' and b.application_no = '$app'")
or die("Diee");
$row = mysql_fetch_array($query);
$f1name=$row['firstName'];
   $l1name=$row['lastName'];
   $A1pp_no= $row['application_no'];





  			
  					
  					
   ?>
<form action="" method="post">


	

<tr>
<td>AppNo:</td>
<td> <input type="text" name="Appno" value="" ></td>
</tr>
<tr>
<td>Name</td>
<td> <input type="text" name="name" value="" ></td>
</tr>


</td>
</form>

   <?php
    }
    ?>
                    
					

		


					
					
					<div class="col-md-offset-3 col-md-10 list">
					<br>
					<form action="" method="post">
  REPORTED SLOT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
<select name="slot">
<option value="null">--</option>
  <option value="slot1">SLOT 1</option>
  <option value="slot2">SLOT 2</option>
  <option value="slot3">SLOT 3</option>
  
</select>
</div>
                     <div class="col-md-offset-4 col-md-4 text-center">
					<br/><br><button  type="submit" name="btn1" class="btn btn-lg btn-proceed hvr-fade" >SUBMIT</button>
				</div> 
					</form>


					</div>
					
		</section>		
		
       
		
		<footer id="footer" class="footer">
			<div class="container">
				<div class="row">
				
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms">
						<div class="footer-single">
							<img src="img/8.jpg" alt="">
							
						</div>
					</div>
				
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
						<div class="footer-single">
							
							<p>  Contact<br>  Principal - 9447820405 <br>  Office : 04822-239301,239302<br> Fax : 04822-239307<br> Fr. Jose Tharappel, Bursar - 09447136390<br> Rev.Fr.Mathew Koramkuzha :9446922066 <br> Mr. Jyothis Thomas - 9447205778<br>  Prof. Dr.Madhukumar.S - 09495431623 </p>
						</div>
					</div>
				
					
				</div>
				<div class="row">
					<div class="col-md-12">
						<p class="copyright text-center">
							Copyright © 2015 <a href="http://mellontech.co.in/">Mellontech</a>. All rights reserved. Designed & developed by <a href="http://mellontech.co.in/">Mellontech</a>
						</p>
					</div>
				</div>
			</div>
		</footer>
		
		<a href="javascript:void(0);" id="back-top"><i class="fa fa-angle-up fa-3x"></i></a>

		<!-- Essential jQuery Plugins
		================================================== -->
		<!-- Main jQuery -->
        <script src="js/jquery-1.11.1.min.js"></script>
		<!-- Single Page Nav -->
        <script src="js/jquery.singlePageNav.min.js"></script>
		<!-- Twitter Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
		<!-- jquery.fancybox.pack -->
        <script src="js/jquery.fancybox.pack.js"></script>
		<!-- jquery.mixitup.min -->
        <script src="js/jquery.mixitup.min.js"></script>
		<!-- jquery.parallax -->
        <script src="js/jquery.parallax-1.1.3.js"></script>
		<!-- jquery.countTo -->
        <script src="js/jquery-countTo.js"></script>
		<!-- jquery.appear -->
        <script src="js/jquery.appear.js"></script>
		<!-- Contact form validation -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
		<!-- Google Map -->
        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
		<!-- jquery easing -->
        <script src="js/jquery.easing.min.js"></script>
		<!-- jquery easing -->
        <script src="js/wow.min.js"></script>
		<script>
			var wow = new WOW ({
				boxClass:     'wow',      // animated element css class (default is wow)
				animateClass: 'animated', // animation css class (default is animated)
				offset:       120,          // distance to the element when triggering the animation (default is 0)
				mobile:       false,       // trigger animations on mobile devices (default is true)
				live:         true        // act on asynchronously loaded content (default is true)
			  }
			);
			wow.init();
		</script> 
		<!-- Custom Functions -->
        <script src="js/custom.js"></script>
		
		
    </body>
</html>