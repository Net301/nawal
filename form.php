<?php
error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");

$name = "";
$phone = "";

if (isset($_POST['name']))
	$name=$_POST['name'];

if (isset($_POST['phone']))
	$phone=$_POST['phone'];


$to = "nawalawad@gmail.com, nizaretto@gmail.com";
$subject = "New Notification from Nawal-Awad.com";
$txt = "Hi Nawal,\nYou were contacted through the website\nFrom: ".$name."\nPhone:".$phone;
$headers = "From: noreply@nawal-awad.com" . "\r\n" ;
  $headers .= "Organization: Nawal Awad \r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
  $headers .= "X-Priority: 3\r\n";
  $headers .= "X-Mailer: PHP". phpversion() ."\r\n" ;

if (mail($to,$subject,$txt,$headers)) echo "success"; else echo"fail";
?>
