<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $POST['message'];
$to = "saviosaju10@gmail.com";
$subject = "Mail From website";
$text = "Nmae = ". $name . "\r\nEmail = " . $email . "\r\nMessage =" . $message;
$headers = "From: noreply@sandx.com" . "\r\n" .
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
    }
//Redirect 
header("Location:thankyou.html");

?>
