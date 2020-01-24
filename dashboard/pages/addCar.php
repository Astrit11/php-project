<?php
  session_start();
  include('../../db_connect.php');
  if (!isset($_SESSION['user']))
  {
        header('Location:../../login.html');
  }


  include('../../db_connect.php');
  $userID = $_SESSION['user'][0];


  $carName = $_POST['carName'];
  $imageUrl = $_POST['imageUrl'];
  $location = $_POST['Location'];
  $carPrice = $_POST['carPrice'];
  $doors = $_POST['Doors'];
  $seats = $_POST['Seats'];
  $largeBags = $_POST['Lbags'];
  $smallBags = $_POST['Sbags'];
  $condition = $_POST['Condition'];
  $transmission = $_POST['Transmission'];
  $model = $_POST['Model'];


$query = "INSERT INTO cars (carName, image, doors, seats, large_bag, small_bag, aircondition, transmission, model, carPrice, carLocation, userID)
                VALUES('$carName', '$imageUrl', '$doors', '$seats', '$largeBags', '$smallBags', '$condition', '$transmission', '$model', '$carPrice', '$location', '$userID')";
$result = mysqli_query($conn,$query);

header("Location: forms.php");
?>

