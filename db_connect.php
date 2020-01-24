<?php
$host="localhost";
$user="root";
$password="";
$database="car_rental";

$conn=mysqli_connect($host,$user,$password,$database);

if(!$conn)
{
	echo "Database Connection Error!";
}

?>
