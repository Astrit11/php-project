<?php
session_start();
include('../../db_connect.php');
if (!isset($_SESSION['user']))
{
      header('Location:../../login.html');
}
$user2 = $_SESSION['user'];



include('../../db_connect.php');

$currentPassword = $_POST['currentPassword'];
$newPassword = $_POST['newPassword'];
$newConfirmPassword = $_POST['confirmNewPassword'];

$oldPQuery = "select * from users where userID = '$user2[0]'";

$result2=mysqli_query($conn,$oldPQuery);
$row2 = mysqli_fetch_row($result2);
ob_start();
if ($newPassword == $newConfirmPassword) {
  if ($row2[4]==$currentPassword) {
    $updateQuery = "UPDATE users SET password= '$newPassword' WHERE userID = $user2[0];";
    mysqli_query($conn,$updateQuery);
    echo "Succes.";
  }else {
    echo "Wrong";
    ob_end();
  }
}
else {
  echo "NoSuccess.";
  ob_end();

}










 ?>
