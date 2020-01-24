<?php
include('../../db_connect.php');
session_start();
include('../../db_connect.php');
if (!isset($_SESSION['user']))
{
      header('Location:../../login.html');
}
$user = $_SESSION['user'];

// $conn=mysqli_connect($host,$user,$password,$database);
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
    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
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
                    <h1 class="page-header">Transactions</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h5>All Transactions</h5>
                        </div>
                        <div class="panel-body">
                                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                        <tr>
                                            <th>Transaction ID</th>
                                            <th>Date From</th>
                                            <th>Date Until</th>
                                            <th>Payment</th>
                                            <th>Pickup Location</th>
                                            <th>Dropoff Location</th>
                                            <th>Customer Name</th>
                                            <th>Phone Number</th>
                                            <th>Passport Number</th>
                                        </tr>
                                        </thead>
                                            <?php


                                                $sql = "select  transactionID, dateFrom, dateUntil, payment, pickupLocation, dropOffLocation, customerName, customerLastName, phoneNumber, passportNumber from transactions";
                                                // $query = "select * from cars ";
                                                $result = $conn-> query($sql);

                                                if($result-> num_rows > 0){
                                                    while($row = $result-> fetch_assoc()){
                                                        echo "<tr><td>". $row["transactionID"] ."</td><td>". $row["dateFrom"]. "</td><td>". $row["dateUntil"]. "</td><td>". $row["payment"]. "€</td><td>". $row["pickupLocation"]. "</td><td>". $row["dropOffLocation"]. "</td><td>". $row["customerName"] ." ".$row["customerLastName"]. "</td><td>". $row["phoneNumber"]. "</td><td>". $row["passportNumber"]. "</td></tr>";
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
    </div>
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>
    <script src="../dist/js/sb-admin-2.js"></script>
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>
</body>

</html>
