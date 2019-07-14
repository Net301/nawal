<?php
error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");

$to = "nizaretto@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: noreply@nawal-awad.com" . "\r\n" ;

if (mail($to,$subject,$txt,$headers)) echo "success"; else echo"fail";
?>