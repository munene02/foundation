<?php

 // ++++++++++++++++++++++++++++++++++++
error_reporting(0);

  
 // configuration
 
$email_it_to = "info@theimpactfoundation.co.ke";

$error_message = "Please complete the form first";

$rnd=$_POST['rnd'];
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$company=$_POST['company'];
$body=$_POST['body'];

  
if(!isset($rnd) || !isset($name) || !isset($email) || !isset($mobile) || !isset($body)) {
	echo $error_message;
    die();
}


$subject = "I want to Volunteer";
$email_from = $email;

$email_message = 'Message submitted by '.stripslashes($name).
					', email:'.$email_from. '  '."\n".
					', Mobile:'.$mobile.'  '."\n".
					', Company:'.$company.'  '."\n";
$email_message .=" on ".date("d/m/Y")."\n\n";
$email_message .= stripslashes($body);
$email_message .="\n\n";

// Always set content-type when sending HTML email


$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8". "\r\n";
$headers .= 'From: '.stripslashes($name);

//$headers .= 'From: <'.$email_from.'>' . "\r\n";

mail($email_it_to,$subject,$email_message,$headers);



?>