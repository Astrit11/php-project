<?php
include("db_connect.php");
$car_id=$_GET['carID'];
$car_name=$_GET['carName'];
$query = "select * from cars where carID='$car_id'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
include('header_view.php');
?>



<div class="media">
  <img class="mr-3" src="<?php echo $row['image'] ?>" alt="Generic placeholder image">
  <div class="media-body">
    <h5 class="mt-0"><?php echo $car_name ?></h5>
    <div class="grid">
        <div class="row">
          <span class="col-sm-6"><?php echo $row['seats']; ?></span>
          <span class="col-sm-6"><?php echo $row['doors']; ?></span>
        </div>
        <div class="row">
          <span class="col-sm-6"><?php echo $row['large_bag']; ?></span>
          <span class="col-sm-6"><?php echo $row['small_bag']; ?></span>
        </div>
        <div class="row">
          <span class="col-sm-6"><?php echo $row['aircondition']; ?></span>
          <span class="col-sm-6"> <?php echo $row['transmission']; ?></span>
        </div>
    </div>
  </div>
</div>

</body>
