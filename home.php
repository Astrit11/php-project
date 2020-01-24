<?php
session_start();
include("home_page/header.php");

$user = $_SESSION['user'];
echo "Name: ".$user[1];
echo "</br>";
echo "Name: ".$user[2];
echo "<hr>";
?>


 <a href="logout.php">Log Out</a>
<?php include("home_page/footer.php") ?>
