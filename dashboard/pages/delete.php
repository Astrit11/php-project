<?php

    session_start();
    include('../../db_connect.php');
    $carID = $_GET['carId'];

    $query = "DELETE FROM cars WHERE carID=$carID";
    $result = mysqli_query($conn, $query);
    header("Location:forms.php");

?>