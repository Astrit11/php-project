<?php
function ifsessionExists(){
// check if session exists?
  if(isset($_SESSION)){
    return true;
  }else{
    return false;
  }
 }


if (!ifsessionExists()) {
  session_start();
  require("db_connect.php");
  $loginEmail = $_POST['inputEmail'];
  $loginPassword = $_POST['inputPassword'];

  if ($loginEmail != "") {
    $loginEmail = strtolower($loginEmail);
  }
  $query = "select * from users where users.Email='$loginEmail'";
  $result = mysqli_query($conn,$query);
  $row = mysqli_fetch_row($result);
  if ($loginEmail==$row[3]) {
    if ($row[4]==$loginPassword) {
      $_SESSION['user'] = $row;

      if(isset($_COOKIE['user']))
      $_SESSION['user'] = $_COOKIE['user'];
      header('Content-Type: web-car-rental/json');
      echo json_encode(['location'=>'dashboard/pages/index.php']);
      exit;
    }
    else {
      echo "Wrong Password!";
    }
  }
  else {
    echo "Sorry user not in database!";
  }
}
else {
  header('Content-Type: web-car-rental/json');
  echo json_encode(['location'=>'home.php']);
  exit;}
  ?>
