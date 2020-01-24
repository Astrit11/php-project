<?php
session_start();
if (isset($_SESSION['user'])) {
  $user = $_SESSION['user'];
  header('Location : home.php');
  exit();
}
else {
  header("Location:". APP_ROOT. "login.html"); exit();
}


?>
