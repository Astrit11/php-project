<?php
  $pickupL = $_GET['pickUpLocation'];
  $dropoffL = $_GET['dropOffLocation'];
  $pickupD = $_GET['pickUpDate'];
  $dropoffD = $_GET['dropOffDate'];
  $pickupT = $_GET['pickUpTime'];
  $dropoffT = $_GET['dropOffTime'];
  $dateDiff = $_GET['dateDiff'];

  if (isset($_GET['driverAge'])) {
    $driverAge = $_GET['driverAge'];
  }
  else {
    $driverAge = 18;
  }
  $vars = "pickupL=".$pickupL."&pickupD=$pickupD"."&pickupT=$pickupT"."&dropoffL=$dropoffL"."&dropoffD=$dropoffD"."&driverAge=$driverAge"."&dropoffT=$dropoffT"."&dateDiff=$dateDiff"."&carModel=";
  ?>



<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/fav.png">
    <meta name="author" content="codepixer">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta charset="UTF-8">
    <title>Car Rentals</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/main.css">

                <script>
                  function initiateCars(str){
                    function paintDiv(str){
                      if (str != "all") {
                        document.getElementById('Economy').classList.remove("btn-secondary");
                        document.getElementById('Intermediate').classList.remove("btn-secondary");
                        document.getElementById('Mini').classList.remove("btn-secondary");
                        document.getElementById('Compact').classList.remove("btn-secondary");
                        document.getElementById('SUV').classList.remove("btn-secondary");
                        document.getElementById('Economy').classList.add("btn-primary");
                        document.getElementById('Intermediate').classList.add("btn-primary");
                        document.getElementById('Mini').classList.add("btn-primary");
                        document.getElementById('Compact').classList.add("btn-primary");
                        document.getElementById('SUV').classList.add("btn-primary");

                        document.getElementById(str).classList.remove("btn-primary");
                        document.getElementById(str).classList.add("btn-secondary");
                      }
                    }
                    var htmlBuffer=[];
                    var vars=" <?php echo $vars ?>"+str;
                    var out = document.getElementById('carsShow');
                    out.innerHTML = "<b>Loading</b>";
                    var xml = new XMLHttpRequest();
                    xml.onreadystatechange = function(){

                      if (xml.readyState == 4 && xml.status == 200) {

                        if (this.responseText != "") {
                          out.innerHTML = this.responseText;
                          // htmlBuffer.push(this.responseText);
                        }
                      }
                    }
                    // out.innerHTML=htmlBuffer.join();
                    paintDiv(str);
                    xml.open("POST","results-p.php",true);
                    xml.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    xml.send(vars);
                  }
                </script>
</head>
<body onload="initiateCars('all')">
<header id="header" id="home">
    <div class="container">
        <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
                <a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="index.html">Home</a></li>
                    <li><a href="cars.html">Cars</a></li>
                    <li><a href="service.html">Service</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="login.html">Login</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>


<section class="banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
<div class="container" style="padding-top: 100px;">
            <div class="row">
                <div class="col-sm-2">
                    <button class="btn btn-primary" id="Economy" style="width: 10rem;" onClick="initiateCars(this.value)" value="Economy">
                        <img class="card-img-top" src="https://cdn2.rcstatic.com/images/car_images/new_images/volkswagen/polo_lrg.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Economy</h5>
                        </div>
                    </button>
                </div>
                <div class="col-sm-2">
                    <button class="btn btn-primary" id="Intermediate" style="width: 10rem;" onClick="initiateCars(this.value)" value="Intermediate">
                        <img class="card-img-top" src="https://cdn2.rcstatic.com/images/car_images/new_images/skoda/rapid_lrg.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Intermediate</h5>
                        </div>
                    </button>
                </div>
                <div class="col-sm-2">
                    <button class="btn btn-primary" id="Mini" style="width: 10rem;" onClick="initiateCars(this.value)" value="Mini">
                        <img class="card-img-top" src="https://cdn2.rcstatic.com/images/car_images/new_images/seat/mii_lrg.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Mini</h5>
                        </div>
                    </button>
                </div>
                <div class="col-sm-2">
                    <button class="btn btn-primary" id="Compact" style="width: 10rem;" onClick="initiateCars(this.value)" value="Compact">
                        <img class="card-img-top" src="https://cdn2.rcstatic.com/images/car_images/new_images/volkswagen/golf_lrg.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Compact</h5>
                            </div>
                    </button>
                </div>
                <div class="col-sm-2">
                    <button class="btn btn-primary" id="SUV" style="width: 10rem;" onClick="initiateCars(this.value)" value="SUV">
                        <img class="card-img-top" src="https://cdn2.rcstatic.com/images/car_images/new_images/suzuki/vitara_lrg.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">SUV</h5>
                        </div>
                    </button>
                </div>

            </div>
        </div>
    <div class="container" >
        <div class="row" id="carsShow">

        </div>
    </div>
</section>



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
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved.</a>
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
