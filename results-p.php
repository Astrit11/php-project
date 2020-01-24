<?php
include('db_connect.php');

$pickupL = $_POST['pickupL'];
$dropoffL = $_POST['dropoffL'];
$pickupD = $_POST['pickupD'];
$dropoffD = $_POST['dropoffD'];
$pickupT = $_POST['pickupT'];
$dropoffT = $_POST['dropoffT'];
$dateDiff = $_POST['dateDiff'];
$model = $_POST['carModel'];

if ($model == "all") {
  $query = "select * from cars order by 'carPrice'";
}
else {
  $query = "select * from cars where model = '$model' order by 'carPrice'";
}
$res = mysqli_query($conn,$query);
$row=mysqli_fetch_array($res);
if (isset($_POST['driverAge'])) {
  $driverAge = $_POST['driverAge'];
}else {
  $driverAge = 18;
}
function dateInt($date){
  list($month,$day,$year)=explode("/",$date);
  $month =(int)$month;
  $day =(int)$day;
  $year =(int)$year;
  $date = array($month,$day,$year);
  return $date;
}
function checkAvailabilty($pickUp, $dropOff,$checkPickDate,$checkDropDate){
  $rentFrom = dateInt($pickUp);
  $rentUntil = dateInt($dropOff);
  $firstFlag = 0;
  $pickUp = dateInt($checkPickDate);
  $dropOff = dateInt($checkDropDate);

  if ($rentFrom[2] >= $pickUp[2] && $rentFrom[2]<=$dropOff[2]) {
    if ($rentFrom[0] >= $pickUp[0] && $rentFrom[0]<=$dropOff[0]) {
      if ($rentFrom[1] >= $pickUp[1] && $rentFrom[1]<=$dropOff[1]) {
        $firstFlag = 1;
        }
      if ($firstFlag = 0 ) {
        if ($rentFrom[1] > $dropOff[1]) {
          $firstFlag =2;
        }
      }
    }
    if ($firstFlag = 0 ) {
      if ($rentFrom[0] > $dropOff[0]) {
        $firstFlag = 2;
      }
    }
  }
  if ($firstFlag = 0 ) {
    if ($rentFrom[2] > $dropOff[2]) {
      $firstFlag =2;
    }
  }
  if ($firstFlag != 2) {

  if ($firstFlag = 0) {
    if ($rentUntil[2] >= $pickUp[2] && $rentUntil[2]<=$dropOff[2] ||$rentUntil[2] >= $pickUp[2] && $rentUntil[2] > $dropOff[2] ) {
      if ($rentUntil[0] >= $pickUp[0] && $rentUntil[0]<=$dropOff[0]||$rentUntil[0] >= $pickUp[0] && $rentUntil[0]>$dropOff[0]) {
        if ($rentUntil[1] >= $pickUp[1] && $rentUntil[1]<=$dropOff[1] || $rentUntil[1] >= $pickUp[1] && $rentUntil[1]>$dropOff[1]) {
          $firstFlag = 1;
        }
      }
    }
  }
}
  if ($firstFlag==1) {
    return true;
  }
  else {
    return false;
  }
}

function getPrice($price,$driverAge,$dateDiff){
  if ($driverAge != 20) {
      $totalPrice = round(($price*$dateDiff) * 1.20);
      return $totalPrice;

  }
  else {
    $totalPrice = round($price*$dateDiff);
    return $totalPrice;
  }

}
// $car = new Car;
while ($row1=mysqli_fetch_array($res)) {
  if (isset($row1['rentFrom'])&&isset($row1['rentUntil']) ) {
    if (checkAvailabilty($pickupD,$dropoffD,$row1['rentFrom'],$row1['rentUntil'])) {
      $totalPrice = getPrice($row1['carPrice'],$driverAge,$dateDiff);
      $vars ="carID=".$row1['carID']."&pickupL=".$pickupL."&pickupD=$pickupD"."&pickupT=$pickupT"."&dropoffL=$dropoffL"."&dropoffD=$dropoffD"."&dropoffT=$dropoffT"."&dateDiff=$dateDiff"."&totalPrice=$totalPrice";
      echo "<div class=\"banner-content\"><div class=\"col-2\" style=\"margin-top: 100px\">";
      echo "<div class=\"card\" style=\"width: 18rem;\">";
      echo "<img class=\"car\" src=\"".$row1['image']."\">";
      echo "<div class=\"card-body\">";
      echo "<h5 class=\"card-title\">".$row1['carName']."</h5>";
      echo "<small><b>".$row1['model']."</b></small>";
      echo "<div class=\"grid\">";
      echo "<div class=\"row\">";
      echo "<span class=\"col-sm-6\">".$row1['seats'] ."</span>";
      echo "<span class=\"col-sm-6\">".$row1['doors']."</span>";
      echo "</div>";
      echo "<div class=\"row\">";
      echo "<span class=\"col-sm-6\">".$row1['large_bag']."</span>";
      echo "<span class=\"col-sm-6\">".$row1['small_bag']."</span>";
      echo "</div>";
      echo "<div class=\"row\">";
      echo "<span class=\"col-sm-6\">".$row1['aircondition']."</span>";
      echo "<span class=\"col-sm-6\">".$row1['transmission']."</span>";
      echo "</div>";
      echo "</div>";
      echo "<hr>";
      echo "<div class=\"row\">";
      echo "<span class=\"col-sm-6\" id=\"price\">";
      echo "<b style=\"font-size: larger;\">".$totalPrice."€<br> <small>for ".$dateDiff." days</small></b>";
      echo "</span>";
      echo "<span class=\"col-sm-6\">";
      echo "<a href=\"book_car.php?".$vars."\" class=\"btn btn-primary\">Book Car</a></span></div></div></div></div></div>";
    }
  }
  else {
        $totalPrice = getPrice($row1['carPrice'],$driverAge,$dateDiff);
        $vars = "carID=".$row1['carID']."&pickupL=".$pickupL."&pickupD=$pickupD"."&pickupT=$pickupT"."&dropoffL=$dropoffL"."&dropoffD=$dropoffD"."&dropoffT=$dropoffT"."&dateDiff=$dateDiff"."&totalPrice=$totalPrice";
        echo "<div class=\"banner-content\"><div class=\"col-2\" style=\"margin-top: 100px\">";
        echo "<div class=\"card\" style=\"width: 18rem;\">";
        echo "<img class=\"car\" src=\"".$row1['image']."\">";
        echo "<div class=\"card-body\">";
        echo "<h5 class=\"card-title\">".$row1['carName']."</h5>";
        echo "<small><b>".$row1['model']."</b></small>";
        echo "<div class=\"grid\">";
        echo "<div class=\"row\">";
        echo "<span class=\"col-sm-6\">".$row1['seats'] ."</span>";
        echo "<span class=\"col-sm-6\">".$row1['doors']."</span>";
        echo "</div>";
        echo "<div class=\"row\">";
        echo "<span class=\"col-sm-6\">".$row1['large_bag']."</span>";
        echo "<span class=\"col-sm-6\">".$row1['small_bag']."</span>";
        echo "</div>";
        echo "<div class=\"row\">";
        echo "<span class=\"col-sm-6\">".$row1['aircondition']."</span>";
        echo "<span class=\"col-sm-6\">".$row1['transmission']."</span>";
        echo "</div>";
        echo "</div>";
        echo "<hr>";
        echo "<div class=\"row\">";
        echo "<span class=\"col-sm-6\" id=\"price\">";
        echo "<b style=\"font-size: larger;\">".$totalPrice."€<br> <small>for ".$dateDiff." days</small></b>";
        echo "</span>";
        echo "<span class=\"col-sm-6\">";
        echo "<a href=\"book_car.php?". $vars."\" class=\"btn btn-primary\">Book Car</a></span></div></div></div></div></div>";  }
}


 ?>
