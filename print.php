<?php 
 		$con=mysql_connect("localhost","root","")or die("canot connect");
   		mysql_select_db(admin,$con) or die("Error in datbase");
   		$selquery1="select * from seat where Branch='aie'";
   		$selquery2="select * from seat where Branch='civil'";
   		$selquery3="select * from seat where Branch='cs'";
   		$selquery4="select * from seat where Branch='ec'";
   		$selquery5="select * from seat where Branch='eee'";
   		$selquery6="select * from seat where Branch='mech'";
  					$sel1=mysql_query($selquery1,$con)or die(mysql_error());
  					$sel2=mysql_query($selquery2,$con)or die(mysql_error());
  					$sel3=mysql_query($selquery3,$con)or die(mysql_error());
  					$sel4=mysql_query($selquery4,$con)or die(mysql_error());
  					$sel5=mysql_query($selquery5,$con)or die(mysql_error());
  					$sel6=mysql_query($selquery6,$con)or die(mysql_error());
  					$row1=mysql_fetch_array($sel1);
  					$row2=mysql_fetch_array($sel2);
  					$row3=mysql_fetch_array($sel3);
  					$row4=mysql_fetch_array($sel4);
  					$row5=mysql_fetch_array($sel5);
  					$row6=mysql_fetch_array($sel6);
   					
	   
       				 $seats1 =$row1['seat_avail'];
       				 $seats2 =$row2['seat_avail'];
       				 $seats3 =$row3['seat_avail'];
       				 $seats4 =$row4['seat_avail'];
       				 $seats5 =$row5['seat_avail'];
       				 $seats6 =$row6['seat_avail'];
       				 $allot1 =$row1['seat_allot'];
       				 $allot2 =$row2['seat_allot'];
       				 $allot3 =$row3['seat_allot'];
       				 $allot4 =$row4['seat_allot'];
       				 $allot5 =$row5['seat_allot'];
       				 $allot6 =$row6['seat_allot'];
   		?>
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
		
      
			<section id="allot" class="date">
			<div class="container">
				<div class="row mb50">
				
					<div class="sec-title text-center mb50 wow fadeInDown animated" data-wow-duration="500ms">
						<br><br><br><br>
						<h2>PRINT</h2>
						<div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
					</div>
					
					<div class="sec-sub-title text-center wow rubberBand animated" data-wow-duration="1000ms">
						<p> TO PRINT DIFFERENT FORMS AND LETTERS</p>
					</div>
					<div class="col-md-offset-3 col-md-10 list">
					<br>
					<form>
  ALLOTMENT LETTER&nbsp;&nbsp;&nbsp;&nbsp;:
  <input type="text" name="firstname">
  <button type="submit" name="btn_app">Proceed</button><br />
 
</form>
</div>
<div class="col-md-offset-3 col-md-10 list">
					<br>
					<form>
  HIGHER OPTION&nbsp;&nbsp;&nbsp;:
  <input type="text" name="firstname">
 <button type="submit" name="btn_app">Proceed</button><br />
</form>
</div>
<div class="col-md-offset-3 col-md-10 list">
					<br>
					<form>
  RANK LIST&nbsp;&nbsp;:
  
 <a href="rank.php"><button type="button" name="btn_app">Proceed</button><br /></a>
</form>
</div>
<div class="col-md-offset-3 col-md-10 list">
					<br>
					<form>
  SLOT 1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
 <a href="printslot1.php"><button type="button" name="btn_app">Proceed</button><br /></a>
</form>
</div>
      <div class="col-md-offset-3 col-md-10 list">
					<br>
					<form>
  SLOT 2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
<a href="printslot2.php"> <button type="button" name="btn_app">Proceed</button><br /></a>
</form>
</div>
<div class="col-md-offset-3 col-md-10 list">
					<br>
					<form>
 SLOT 3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
 <a href="printslot1.php"><button type="button" name="btn_app">Proceed</button><br /></a>
</form>
</div>
                    <div class="col-md-offset-3 col-md-10 list">
					<br>
					<form>
  MECHANICAL:
 <a href="printmech.php"><button type="button" name="btn_app">Proceed</button><br /></a>
</form>
</div>
<div class="col-md-offset-3 col-md-10 list">
					<br>
					<form>
  CIVIL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
 <a href="printcivil.php"><button type="button" name="btn_app">Proceed</button><br /></a>
</form>
</div>
<div class="col-md-offset-3 col-md-10 list">
					<br>
					<form>
  COMPUTER&nbsp;&nbsp;:
 <a href="printcs.php"><button type="button" name="btn_app">Proceed</button><br /></a>
</form>
</div>
	<div class="col-md-offset-3 col-md-10 list">
					<br>
					<form>
  ELECTRICAL&nbsp;&nbsp;:
 <a href="printeee.php"><button type="button" name="btn_app">Proceed</button><br /></a>
</form>
</div>
<div class="col-md-offset-3 col-md-10 list">
					<br>
					<form>
  ELECTRONICS&nbsp;:
<a href="printec.php"> <button type="button" name="btn_app">Proceed</button><br /></a>
</form>
</div>
<div class="col-md-offset-3 col-md-10 list">
					<br>
					<form>
  APPLIED&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
<a href="printaie.php"> <button type="button" name="btn_app">Proceed</button><br /></a>
</form>
</div>
		</section>		
		
        <section>	

              <!-- start single sidebar -->
              <div class="single_sidebar">
                <h2>Live Status <span class="fa fa-angle-double-right"></span></h2>
                        <table class="table table-striped course_table"><thead><tr><th>Branch</th><th>Available</th><th>Alloted</th></tr></thead><tbody><tr><td scope="row">AE&I</td><td scope="col"><?php echo $seats1; ?></td><td scope="col"><?php echo $allot1; ?></td></tr><tr><td scope="row">CE</td><td scope="col"><?php echo $seats2; ?></td><td scope="col"><?php echo $allot2; ?></td></tr><tr><td scope="row">CSE</td><td scope="col"><?php echo $seats3; ?></td><td scope="col"><?php echo $allot3; ?></td></tr><tr><td scope="row">ECE</td><td scope="col"><?php echo $seats4; ?></td><td scope="col"><?php echo $allot4; ?></td></tr><tr><td scope="row">EEE</td><td scope="col"><?php echo $seats5; ?></td><td scope="col"><?php echo $allot5; ?></td></tr><tr><td scope="row">ME</td><td scope="col"><?php echo $seats6; ?></td><td scope="col"><?php echo $allot6; ?></td></tr></tbody></table>
              </div>
              <!-- End single sidebar -->
              <!-- start single sidebar -->
              <div class="single_sidebar">
                <h2>Waiting List Status <span class="fa fa-angle-double-right"></span></h2>
                <table class="table table-striped course_table"><thead><tr><th>Branch</th><th>Waiting Count</th></tr></thead><tbody><tr><td scope="row">AE&I</td><td scope="col">0</td></tr><tr><td scope="row">CE</td><td scope="col">0</td></tr><tr><td scope="row">CSE</td><td scope="col">0</td></tr><tr><td scope="row">ECE</td><td scope="col">0</td></tr><tr><td scope="row">EEE</td><td scope="col">0</td></tr><tr><td scope="row">ME</td><td scope="col">0</td></tr></tbody></table>              </div>
              <!-- End single sidebar -->
              <!-- start single sidebar -->
              
              <!-- End single sidebar -->
            </div>
          </div>
          <!-- start course archive sidebar -->
        </div>
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
