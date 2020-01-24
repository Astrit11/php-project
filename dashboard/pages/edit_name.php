<?php
session_start();
include('../../db_connect.php');
if (!isset($_SESSION['user']))
{
      header('Location:../../login.html');
}
$user1 = $_SESSION['user'];

include('../../db_connect.php');
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];

$updateQuery = "UPDATE users SET firstName = '$firstName', lastName= '$lastName' WHERE userID = $user1[0]; ";
mysqli_query($conn,$updateQuery);
header('Location:settings.php')

 ?>
