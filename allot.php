<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
    <?php
    session_start();
if (!isset($_SESSION['name']))
{
    header("Location: index.php");
    }
    ?>

     <?php


	

mysql_connect('localhost', 'root', '') or die(mysql_error());

mysql_select_db("sjcetp5_application") or die(mysql_error());

if(isset($_POST['submit1']))

{
	
$UID = $_POST['appno'];

if($UID!='')
{

$query = mysql_query("SELECT * FROM basic_info WHERE application_no = '$UID'")
or die(mysql_error());  

$row = mysql_fetch_array($query);
if ( $row)
{
	header("location:slotregister.php? app=  $UID ");
}
else
{
	die(header("location:allot.php?loginFailed=true&reason=password"));
}
}
else
{
	die(header("location:allot.php?loginFailed1=true&reason=password"));
}
}	
?>
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
                        <li><a href="#register">REGISTER</a></li>
                        <li><a href="#validate">VALIDATE</a></li>
                        <li><a href="#allot">ALLOT</a></li>
                        <li><a href="#higher">HIGHER</a></li>
                        <li><a href="#fee">FEE</a></li>
                        <li><a href="#print">PRINT</a></li>
                        <li><a href="index.php"><button type="button" class="btn btn-primary hvr-fade" onclick="window.location.href='./login.php'">Logout</button></a></li>
                      
                    </ul>
                </nav>
				<!-- /main nav -->
				
            </div>
        </header>
        <!--
        End Fixed Navigation
        ==================================== -->
		
		
		
        <!--
        Home Slider
        ==================================== -->
		
		<section id="slider">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			
				<!-- Indicators bullet -->
				<ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				</ol>
				<!-- End Indicators bullet -->				
				
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					
					<!-- single slide -->
					<div class="item active" style="background-image: url(img/banner.jpg);">
						<div class="carousel-caption">
							<h2 data-wow-duration="700ms" data-wow-delay="500ms" class="wow bounceInDown animated">PRE<span> ALLOTMENT</span>!</h2>
							<h3 data-wow-duration="1000ms" class="wow slideInLeft animated"><span class="color">-> Pre Allotment</span> Procedures</h3>
							<p data-wow-duration="1000ms" class="wow slideInRight animated">A College with difference</p>
							
						</div>
					</div>
					<!-- end single slide -->
					
					<!-- single slide -->
					<div class="item" style="background-image: url(img/banner.jpg);">
						<div class="carousel-caption">
							<h2 data-wow-duration="500ms" data-wow-delay="500ms" class="wow bounceInDown animated">SJCET<span>   ADMISSIONS</span>!</h2>
							<h3 data-wow-duration="500ms" class="wow slideInLeft animated"><span class="color">-> Allotment day</span> Procedures</h3>
							<p data-wow-duration="500ms" class="wow slideInRight animated">A college with difference</p>
							
							
						</div>
					</div>
					<!-- end single slide -->
					
				</div>
				<!-- End Wrapper for slides -->
				
			</div>
		</section>
		
        <!--
        End Home SliderEnd
        ==================================== -->
		
      
		
		
        <!--
        Our Works
        ==================================== -->
		
		<section id="register" class="preallot clearfix">
			<div class="container">
				<div class="row">
				
					<div class="sec-title text-center">
						<h2>REGISTRATION</h2>
						<div class="devider"><i class="fa fa-arrows"></i></div>
					</div>
					
					<div class="col-md-offset-4 col-md-10 list">
						<p><br><br><br>PROCEED TO ALLOT SLOT TO THE CANDIDATE REPORTED<br></p>
					</div>
					
                    <div class="col-md-offset-4 col-md-4 text-center">
					<br/><br/><a href="slotregister.php"><button type="button" class="btn btn-lg btn-proceed hvr-fade">PROCEED</button></a><br><br><br>
					
					</div><br><br><br><br><br><br>
                   
				</div>"
			</div>
			
			

		</section>
		
        <!--
        End pre allotment
        ==================================== -->
		
        <!--
       allotment
        ==================================== -->		
		
		<section id="validate" class="allot">
			<div class="container">
				<div class="row">
		
					<div class="sec-title text-center wow fadeInUp animated" data-wow-duration="700ms">
						<h2>CERTIFICATE VERIFICATION</h2>
						<div class="devider"><i class="fa fa-arrows"></i></div>
					</div>
					
					<div class="col-md-offset-3 col-md-10 list">
						<p><br><br><br>CLICK HERE TO CHECK CERTIFICATE DETAILS OF STUDENT AND VALIDATE<br></p>
					</div>

					   <div class="col-md-offset-4 col-md-4 text-center">
					<br/><br/><a href="list.php"><button type="button" class="btn btn-lg btn-proceed hvr-fade">PROCEED</button></a><br><br><br>
					
					</div><br><br><br><br><br><br>
                   

		</div>
        </div>
        </section>
        
		
		
		<!--
        Contact Us
        ==================================== -->
        		
	 
		<section id="allot" class="date">
			<div class="container">
				<div class="row mb50">
				
					<div class="sec-title text-center mb50 wow fadeInDown animated" data-wow-duration="500ms">
						<br><br><br><br>
						<h2>ALLOTMENT PORTAL</h2>
						<div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
					</div>
					
					<div class="sec-sub-title text-center wow rubberBand animated" data-wow-duration="1000ms">
						<p> ENTER TO ALLOT THE APPLICANT</p>
					</div>
					<div class="col-md-offset-3 col-md-10 list">
					<br>
					
</div>
                    <div class="col-md-offset-4 col-md-4 text-center">
					<br/><br/><a href="allotportal.php"><button type="button" class="btn btn-lg btn-proceed hvr-fade">PROCEED</button></a>

					</div>
					
					

					</div>
					
		</section>
		<section id="higher" class="date">
			<div class="container">
				<div class="row mb50">
				
					<div class="sec-title text-center mb50 wow fadeInDown animated" data-wow-duration="500ms">
					<br><br><br><br>
						<h2>HIGHER OPTION LADDER</h2>
						<div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
					</div>
					
					<div class="sec-sub-title text-center wow rubberBand animated" data-wow-duration="1000ms">
						<p>  SET HIGHER OPTION PREFERENCE</p>
					</div>
					
                    <div class="col-md-offset-4 col-md-4 text-center">
					<br/><br/><a href="higher.php"><button type="button" class="btn btn-lg btn-proceed hvr-fade">PROCEED</button></a>

					</div>
					
		</section>
		<section id="fee" class="date">
			<div class="container">
				<div class="row mb50">
				
					<div class="sec-title text-center mb50 wow fadeInDown animated" data-wow-duration="500ms">
						<h2>FEE STAMPING</h2>
						<div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
					</div>
					
					<div class="sec-sub-title text-center wow rubberBand animated" data-wow-duration="1000ms">
						<p>  VERIFY FEE PAYMENT</p>
					</div>
					
                    <div class="col-md-offset-4 col-md-4 text-center">
					<br/><br/><a href="fee.php"><button type="button" class="btn btn-lg btn-proceed hvr-fade">PROCEED</button>

					</div>
					
		</section>
		<section id="cancel" class="date">
			<div class="container">
				<div class="row mb50">
				
					<div class="sec-title text-center mb50 wow fadeInDown animated" data-wow-duration="500ms">
						<h2>CANCEL ALLOTMENT</h2>
						<div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
					</div>
					
					<div class="sec-sub-title text-center wow rubberBand animated" data-wow-duration="1000ms">
						<p>  ENTER THE APPLICATION NO> TO CANCEL THE ALLOTMENT</p>
					</div>
					
                    <div class="col-md-offset-4 col-md-4 text-center">
					<br/><br/><a href="cancel.php"><button type="button" class="btn btn-lg btn-proceed hvr-fade">PROCEED</button>

					</div>
					
		</section>
        	<section id="print" class="date">
			<div class="container">
				<div class="row mb50">
				
					<div class="sec-title text-center mb50 wow fadeInDown animated" data-wow-duration="500ms">
						<h2>PRINT LETTERS</h2>
						<div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
					</div>
					
					<div class="sec-sub-title text-center wow rubberBand animated" data-wow-duration="1000ms">
						<p>  PROCEED TO PRINT VARIOUS DETAILS</p>
					</div>
					
                    <div class="col-md-offset-4 col-md-4 text-center">
					<br/><br/><a href="print.php"><button type="button" class="btn btn-lg btn-proceed hvr-fade">PROCEED</button>

					</div>
					
		</section>
        <!--
      
        End Contact Us

        ==================================== -->
		
		
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
