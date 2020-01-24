<?php
session_start();
include('../../db_connect.php');
if (!isset($_SESSION['user']))
{
      header('Location:../../login.html');
}
$user = $_SESSION['user'];
$carID = $_GET['carId'];

$editQuery = "select * from cars where carID='$carID'";
$result = mysqli_query($conn, $editQuery);
$row = mysqli_fetch_array($result);

$removeQuery = "DELETE FROM cars WHERE id=$carID";
$result2 = mysqli_query($conn, $removeQuery);

if ($conn->query($result2) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Dashboard</title>
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Admin Dashboard</a>
                <a class="navbar-brand" href="../../index.html">Car Rental</a>
            </div>
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="index.php"><i class="fa fa-user fa-fw"></i> <?php echo $user[1]."'s Profile"?></a>
                        </li>
                        <li><a href="settings.php"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="../../logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                        </li>
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="tables.php"><i class="fa fa-table fa-fw"></i> Activity</a>
                        </li>
                        <li>
                            <a href="forms.php"><i class="fa fa-edit fa-fw"></i> Manage Cars</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Car</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Car
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                <form role="form" method="POST" action="addCar.php">
                                        <div class="form-group">
                                            <label>Car Name</label>
                                            <input class="form-control" name="carName" value="<?php echo $row['carName']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Image URL</label>
                                            <input class="form-control" name="imageUrl" value='<?php echo $row['image']; ?>'>
                                        </div>
                                        <div class="form-group">
                                            <label>Location</label>
                                            <select class="form-control" name="Location" value='<?php echo $row['carLocation']; ?>'>
                                                <option>Skopje Airport</option>
                                                <option>Ohrid Airport</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Car Price</label>
                                            <input class="form-control" name="carPrice" value='<?php echo $row['carPrice']; ?>'>
                                        </div>
                                        <div class="form-group">
                                            <label for="sel1">Car Doors</label>
                                            <select class="form-control" id="sel1" name="Doors" value='<?php echo $row['doors']; ?>'>
                                              <option>3 Doors</option>
                                              <option>4 Doors</option>
                                              <option>5 Doors</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="sel1">Car Seats</label>
                                            <select class="form-control" id="sel1" name="Seats" value='<?php echo $row['seats']; ?>'>
                                              <option>4 Seats</option>
                                              <option>5 Seats</option>
                                              <option>7 Seats</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Large Bags</label>
                                            <select class="form-control" name="Lbags" value='<?php echo $row['large_bag']; ?>'>
                                                <option>1 Large Bag</option>
                                                <option>2 Large Bags</option>
                                                <option>3 Large Bags</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Small Bags</label>
                                            <select class="form-control" name="Sbags"value='<?php echo $row['small_bag']; ?>'>
                                                <option>1 Small Bag</option>
                                                <option>2 Small Bags</option>
                                                <option>3 Small Bags</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="sel1">Air Condition</label>
                                            <select class="form-control" id="sel1" name="Condition" value='<?php echo $row['aircondition']; ?>'>
                                              <option>Air Condition</option>
                                              <option>No Air Condition</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="sel1">Transmission</label>
                                            <select class="form-control" id="sel1" name="Transmission" value='<?php echo $row['transmission']; ?>'>
                                              <option>Manual</option>
                                              <option>Automatic</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="sel1">Model</label>
                                            <select class="form-control" id="sel1" name="Model" value='<?php echo $row['model']; ?>'>
                                              <option>Compact</option>
                                              <option>Estate</option>
                                              <option>Intermediate</option>
                                              <option>People Carrier</option>
                                              <option>SUV</option>
                                              <option>Mini</option>
                                            </select>
                                        </div>

                                        <button type="submit" class="btn btn-default">Save</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>
    <script src="../dist/js/sb-admin-2.js"></script>
</body>

</html>
