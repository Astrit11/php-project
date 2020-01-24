<?php
include("db_connect.php");
$carID=$_GET['carID'];
$pickupL = $_GET['pickupL'];
$pickupT = $_GET['pickupT'];
$pickupD = $_GET['pickupD'];

$dropoffL = $_GET['dropoffL'];
$dropoffD = $_GET['dropoffD'];
$dropoffT = $_GET['dropoffT'];
$dateDiff = $_GET['dateDiff'];
$totalPrice = $_GET['totalPrice'];
$vars = "?carID=".$carID."&pickupL=".$pickupL."&pickupD=$pickupD"."&pickupT=$pickupT"."&dropoffL=$dropoffL"."&dropoffD=$dropoffD"."&dropoffT=$dropoffT"."&totalPrice=$totalPrice";

$query = "select * from cars where carID='$carID'";
$result = mysqli_query($conn, $query);
$car = mysqli_fetch_array($result);
include('header_view.php');
?>


	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/elements/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Car Rentals</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/nice-select.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>

			  <header id="header" id="home">
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="index.html">Home</a></li>
				          <li><a href="about.html">About</a></li>
				          <li><a href="cars.html">Cars</a></li>
				          <li><a href="service.html">Service</a></li>
				          <!--<li><a href="team.html">Team</a></li>	-->
				          <li><a href="blog-home.html">Blog</a></li>
				          <li><a href="contact.html">Contact</a></li>
				          <li class="menu-has-children"><a href="">Pages</a>
				            <ul>
				              <li><a href="blog-single.html">Blog Single</a></li>
				              <li><a href="elements.html">Elements</a></li>
				            </ul>
				          </li>
				        </ul>
				      </nav><!-- #nav-menu-container -->
			    	</div>
			    </div>
			  </header><!-- #header -->

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Book Car
							</h1>
						</div>
					</div>
				</div>
			</section>
			<!-- End banner Area -->

			<!-- Start blog-posts Area -->
			<section class="blog-posts-area section-gap">
				<div class="container">
					<hr>
					<div class="media" >
					  <div class="media-body">
					    <h5 class="mt-0" style="font-size: x-large;"><?php echo $car['carName'] ?></h5><br>
					    <div class="grid">
					        <div class="row">
					          <span class="col-sm-6">- <?php echo $car['seats']; ?></span><br>
					          <span class="col-sm-6">- <?php echo $car['doors']; ?></span><br>
					        </div>
					        <div class="row">
					          <span class="col-sm-6">- <?php echo $car['large_bag']; ?></span><br>
					          <span class="col-sm-6">- <?php echo $car['small_bag']; ?></span><br>
					        </div>
					        <div class="row">
					          <span class="col-sm-6">- <?php echo $car['aircondition']; ?></span><br>
					          <span class="col-sm-6">- <?php echo $car['transmission']; ?></span><br>
					        </div>
					    </div>
					  </div>
						<div class="col-sm-2" id="price" style="padding-top: 4vh;">
							<b style="font-size: x-large;"><?php
							echo "<b>".$totalPrice."€<br> <small>for ".$dateDiff." day(s)</small></b>";
							?></b><p>Payment in hand.</p>
						</div>
						<img class="mr-3" src="<?php echo $car['image'] ?>" alt="Generic placeholder image">
					</div>
					<hr>
					<h3 class="display-5">Please Enter Your Valid Information</h3><br>
					<div class="row " style="margin-left:2vh;" >
						<form action="booking_info.php<?php echo $vars;?> " class="border border-primary rounded" style="padding:15px;">
						<div class="form-group">
							<label for="firstName"><b>First Name</b></label>
							<input name="firstName" required type="text" class="form-control" id="firstName"  placeholder="Your First Name">
						</div>
						<div class="form-group">
							<label for="lastName"><b>Last Name</b></label>
							<input name="lastName" required type="text" class="form-control" id="lastName" placeholder="Your Last Name">
						</div>
						<div class="form-group">
							<label for="phoneNumber"><b>Phone number</b></label>
							<input name="phoneNumber" required type="text" class="form-control" id="phoneNumber"  placeholder="Your Phone Number">
						</div>
						<div class="form-group">
							<label for="passportNumber"><b>Passport Number<b></label>
							<input name="passportNumber" required type="text" class="form-control" id="passportNumber" placeholder="ex. H0348374">
						</div>
						<br>
						<input type="hidden" name="carID" value="<?php echo $carID ?>">
						<input type="hidden" name="pickupL" value="<?php echo $pickupL ?>">
						<input type="hidden" name="pickupD" value="<?php echo $pickupD?>">
						<input type="hidden" name="pickupT" value="<?php echo $pickupT ?>">
						<input type="hidden" name="dropoffL" value="<?php echo $dropoffL ?>">
						<input type="hidden" name="dropoffD" value="<?php echo $dropoffD ?>">
						<input type="hidden" name="dropoffT" value="<?php echo $dropoffT ?>">
						<input type="hidden" name="totalPrice" value="<?php echo $totalPrice ?>">
						<input type="hidden" name="dateDiff" value="<?php echo $dateDiff ?>">
						<button type="submit"  class="btn btn-primary" name="button">Book Car</button>
					</form>
					</div>



				</div>
			</section>
			<!-- End blog-posts Area -->


			<!-- start footer Area -->
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-2 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Quick links</h6>
								<ul>
									<li><a href="#">Jobs</a></li>
									<li><a href="#">Brand Assets</a></li>
									<li><a href="#">Investor Relations</a></li>
									<li><a href="#">Terms of Service</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-2 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Features</h6>
								<ul>
									<li><a href="#">Jobs</a></li>
									<li><a href="#">Brand Assets</a></li>
									<li><a href="#">Investor Relations</a></li>
									<li><a href="#">Terms of Service</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-2 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Resources</h6>
								<ul>
									<li><a href="#">Jobs</a></li>
									<li><a href="#">Brand Assets</a></li>
									<li><a href="#">Investor Relations</a></li>
									<li><a href="#">Terms of Service</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
							<div class="single-footer-widget">
								<h6>Follow Us</h6>
								<p>Let us be social</p>
								<div class="footer-social d-flex align-items-center">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-dribbble"></i></a>
									<a href="#"><i class="fa fa-behance"></i></a>
								</div>
							</div>
						</div>
						<div class="col-lg-4  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Newsletter</h6>
								<p>Stay update with our latest</p>
								<div class="" id="mc_embed_signup">
									<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
										<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
			                            	<button class="click-btn btn btn-default"><span class="lnr lnr-arrow-right"></span></button>
			                            	<div style="position: absolute; left: -5000px;">
												<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
											</div>

										<div class="info"></div>
									</form>
								</div>
							</div>
						</div>
						<p class="mt-50 mx-auto footer-text col-lg-12">
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
					</div>
				</div>
			</footer>
			<!-- End footer Area -->

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
			<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  			<script src="js/easing.min.js"></script>
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>
			<script src="js/owl.carousel.min.js"></script>
			<script src="js/jquery.sticky.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>
			<script src="js/waypoints.min.js"></script>
			<script src="js/jquery.counterup.min.js"></script>
			<script src="js/parallax.min.js"></script>
			<script src="js/mail-script.js"></script>
			<script src="js/main.js"></script>
		</body>
	</html>
