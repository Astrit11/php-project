<?php
  session_start();
  unset($_SESSION['user']);
  $username = $_SESSION['user'];
  setcookie($username, "", time()-3600);
  session_destroy();
  header("Location:login.html");
  die;
?>
