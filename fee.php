
<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
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
        End Home SliderEnd
        ==================================== -->
		
      
					
		</section>
		
        <!--
		
        <section id="courseArchive">
      <div class="container">
        <div class="row">
          <!-- start course content -->
         <section id="courseArchive">
      <div class="container">
        <div class="row">
          <!-- start course content -->
          <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="courseArchive_content">              
             
             <div class="single_course_content">
			 <form action="" method="post">
			 <br><br>
               <h2>FEE TO BE REMITTED</h2>
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
<?php
$con1 =mysql_connect("localhost","root","")or die("error found");
mysql_select_db("admin",$con1)or die("error in database");



if(isset($_POST['btn_app'])){
$app = $_POST['txt_appno'];

$insQuery= "insert into fees(App_no) values({$app})";
mysql_query($insQuery,$con1) or die(mysql_error());
}?>
</div>
               <table class="table table-striped course_table">
               <thead><tr><th>PARTICULARS</th><th>AMOUNT ( IN RUPEES )</th></tr></thead>
               <tbody><tr><td scope="row">1. ADMISSION FEE</td><td scope="col"><input name="total_seat_course1" type="text" value="150"></td></tr><tr><td scope="row">2. TUITION FEE</td><td scope="col"><input name="total_seat_course2" type="text" value="75,000"></td></tr><tr><td scope="row">3. CAUTION DEPOSIT</td><td scope="col"><input name="total_seat_course3" type="text" value="10,000"></td></tr><tr><td scope="row">4. Fee for value added course/training</td><td scope="col"><input name="total_seat_course4" type="text" value="10,000"></td></tr><tr><td scope="row">5. Fee for University/ statutory bodies</td><td scope="col"><input name="total_seat_course5" type="text" value="KTU Fees"></td></tr><tr><td scope="row">6. University Examination Fee</td><td scope="col"><input name="total_seat_course6" type="text" value="KTU Fees"></td></tr><tr><td></td><td><input style="cursor: pointer;
    padding: 5px 25px;
    background: #78ADC9 none repeat scroll 0% 0%;
    border: 1px solid #33842A;
    border-radius: 10px;
    box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.75);
    color: #F3F3F3;
    font-size: 1.1em;" type="submit" name="btnsubmit" value="UPDATE" /></tr></tbody></table></form>
            
             </div>
           
            </div>
          </div>
          <!-- End course content -->

         
            </div>
          </div>
          <!-- start course archive sidebar -->
        </div>
      </div>
    </section>
        <!
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
