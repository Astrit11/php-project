<?php
    $email = 'markuarbi@gmail.com';
    $firstname = $_POST["name"];
    $to= $_POST["email"];
    $subject= $_POST["subject"];
    $text= $_POST["message"];



    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $message ='<table style="width:100%">
        <tr>
            <td>'.$firstname.'</td>
        </tr>
        <tr><td>Email: '.$email.'</td></tr>
        <tr><td>Text: '.$text.'</td></tr>

    </table>';

    if (@mail($to, $subject, $text, $headers))
    {
        echo 'The message has been sent.';
    }else{
        echo 'failed';
    }

?>
