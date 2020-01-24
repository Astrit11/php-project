<?php
echo "<meta http-equiv=\"refresh\" content=\"3; url=http://localhost/web-car-rental/login.html\">";
include("db_connect.php");

  $firstName = $_POST['inputName'];
  $lastName = $_POST['inputLastName'];
  $email =$_POST['inputEmail'];
  $email = strtolower($email);
  $inputPassword = $_POST['inputPassword'];
  $confirmPassword = $_POST['inputConfirmPassword'];

  $query_1 = "select * from users WHERE users.email='$email'";
  $result = mysqli_query($conn,$query_1);
  $user = mysqli_fetch_array($result);


    if ($email == $user[3] ) {
      echo "Username already exists";
    }
    else if($inputPassword==$confirmPassword){
        $query2 = "INSERT INTO users (firstName, lastName, email, password)
                VALUES('$firstName','$lastName', '$email', '$inputPassword')";
        mysqli_query($conn, $query2);
        echo "User Registered Successfully!";
        echo "</br>You will be ridirected shortly to login page!";

        // sleep(3);
        // red();
    }
    else{
        echo "Error!";

    }


function red(){
  header("location: login.html");
}
