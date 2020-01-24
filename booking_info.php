<?php
include("db_connect.php");

$carID=$_GET['carID'];
$pickupL = $_GET['pickupL'];
$pickupT = $_GET['pickupT'];
$pickupT = $pickupT.":00:00";
$pickupD = $_GET['pickupD'];
$dropoffL = $_GET['dropoffL'];
$dropoffD = $_GET['dropoffD'];
$dropoffT = $_GET['dropoffT'];
$dropoffT = $dropoffT.":00:00";
$dateDiff = $_GET['dateDiff'];
$totalPrice = $_GET['totalPrice'];

$firstName = $_GET['firstName'];
$lastName = $_GET['lastName'];
$phoneNumber = $_GET['phoneNumber'];
$passportNumber = $_GET['passportNumber'];

$checkQuery = "select * from transactions where carId='$carID' and dateFrom='$pickupD' and dateUntil='$dropoffD' and timeFrom='$pickupT' and timeUntil='$dropoffT' and payment='$totalPrice' and pickupLocation='$pickupL' and dropOffLocation='$dropoffL' and customerName='$firstName' and customerLastName='$lastName' and phoneNumber='$phoneNumber' and passportNumber='$passportNumber'";
$resultCheck = mysqli_query($conn, $checkQuery);
$row=mysqli_fetch_array($resultCheck);

if (empty($row)) {
	$bookquery ="INSERT INTO `transactions`(`carID`, `dateFrom`, `dateUntil`, `timeFrom`, `timeUntil`, `payment`, `pickupLocation`, `dropOffLocation`, `customerName`, `customerLastName`, `phoneNumber`, `passportNumber`) VALUES ($carID, '$pickupD', '$dropoffD','$pickupT','$dropoffT','$totalPrice','$pickupL','$dropoffL','$firstName','$lastName','$phoneNumber','$passportNumber')";
		mysqli_query($conn,$bookquery);
	$newQ = "UPDATE `cars` SET `rentFrom`='$pickupD',`rentUntil`='$dropoffD' WHERE carID = $carID";
	mysqli_query($conn,$newQ);

}




$query = "select * from cars where carID='$carID'";
$result = mysqli_query($conn, $query);
$car = mysqli_fetch_array($result);
include('header_view.php');
?>
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
					<?php if(empty($row)){echo "<b>Booking sucessful!</b>";}else{echo "Error occured please try again!";} ?>
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
					<p>Your Info:</p>
					<div class="row">

					<ul class="list-group col-sm-4">
						<li class="list-group-item">First Name : <?php echo $firstName ?></li>
						<li class="list-group-item">Last Name : <?php echo $lastName ?></li>
						<li class="list-group-item">Phone Number : <?php echo $phoneNumber ?></li>
						<li class="list-group-item">passport Number : <?php echo $passportNumber ?></li>
					</ul>
					<ul class="list-group col-sm-4">
						<li class="list-group-item">Pick-Up Location : <?php echo $pickupL ?></li>
						<li class="list-group-item">Pick-Up Date : <?php echo $pickupD ?></li>
						<li class="list-group-item">Pick-Up Time: <u>from <?php echo $pickupT ?></u></li>
					</ul>
					<ul class="list-group col-sm-4">
						<li class="list-group-item">Drop-Off Location : <?php echo $dropoffL ?></li>
						<li class="list-group-item">Drop-Off Date : <?php echo $dropoffD ?></li>
						<li class="list-group-item">Drop-Off Time: <u> until <?php echo $dropoffT ?> </u></li>
					</ul>
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
