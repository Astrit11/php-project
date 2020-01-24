<?php
session_start();
include('../../db_connect.php');
if (!isset($_SESSION['user']))
{
      header('Location:../../login.html');
}
$user = $_SESSION['user'];

$query_3= "select count(*) from cars, users where users.userID=$user[0] and cars.userID=$user[0]";
$result = mysqli_query($conn, $query_3);
$query_3 = mysqli_fetch_array($result);

$query_4= "select count(*) from users";
$result = mysqli_query($conn, $query_4);
$query_4 = mysqli_fetch_array($result);

$query_5= "select count(*) from transactions, users, cars where users.userID=$user[0] and users.userID = cars.userID and transactions.carID = cars.carID ";
$result = mysqli_query($conn, $query_5);
$query_5 = mysqli_fetch_array($result);


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
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">
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
            <a class="navbar-brand" href="#">Admin Dashboard</a>
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
                <h1 class="page-header">Dashboard</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-car fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge"><?php echo $query_3[0]; ?></div>
                                <div>Total Cars</div>
                            </div>
                        </div>
                    </div>
                    <a href="#">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-green">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-users fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge"><?php echo $query_4[0]?></div>
                                <div>Total Users</div>
                            </div>
                        </div>
                    </div>
                    <a href="#">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-yellow">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-check fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge"><?php echo $query_5[0]?></div>
                                <div>Total Transaction</div>
                            </div>
                        </div>
                    </div>
                    <a href="#">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-red">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-map-marker fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">2</div>
                                <div>Cars Location</div>
                            </div>
                        </div>
                    </div>
                    <a href="#">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            </div>
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header">Cars List</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">

                                </div>
                                <div class="panel-body">
                                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                        <tr>
                                            <th>Car Name</th>
                                            <th>Car Available</th>
                                            <th>Doors</th>
                                            <th>Seats</th>
                                            <th>Model</th>
                                            <th>Car Price</th>
                                            <th>Location</th>
                                        </tr>
                                        </thead>
                                            <?php

                                                $sql = "select carName, carAvailability, doors, seats, model, carPrice, carLocation from cars where userID=".$user[0];
                                                // $query = "select * from cars ";
                                                $result = $conn-> query($sql);


                                                if($result-> num_rows > 0){
                                                    while($row = $result-> fetch_assoc()){
                                                        echo "<tr><td>". $row["carName"] ."</td><td>". $row["carAvailability"]. "</td><td>". $row["doors"]. "</td><td>". $row["seats"]. "</td><td>". $row["model"]. "</td><td>". $row["carPrice"]. "€</td><td>". $row["carLocation"]. "</td></tr>";
                                                    }
                                                    echo "</table>";
                                                }
                                                else{
                                                    echo "0 result";
                                                }
                                                $conn-> close();

                                            ?>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>
    <script src="../dist/js/sb-admin-2.js"></script>
</body>
</html>
