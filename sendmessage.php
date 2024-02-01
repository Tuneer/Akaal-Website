<?php
session_start();

$n = $_POST['name'];
$e = $_POST['email'];
$p = $_POST['mob'];
$m = $_POST['message'];

$to = "info@akaalenterprises.com, IT@akaalenterprises.com, akaalinfoit@gmail.com";
$subject = $_POST['subject'];

$message ='Name:'. $n . "\r\n"
.'Email:'. $e . "\r\n"
.'Phone:' . $p . "\r\n"
.'Message:'. $m;

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: IT@akaalenterprises.com' . "\r\n";

$mails = mail($to,$subject,$message,$headers);
if ($mails == true) {
   # code...
echo $to,$subject,$message,$headers;
$_SESSION['messsucc'] = "Success";
echo $_SESSION['messsucc'];
}else{
   $_SESSION['messsucc'] = "Failed";
echo $_SESSION['messsucc'];
header('Location: contactus.php');
}


?>