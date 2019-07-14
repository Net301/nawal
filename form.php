<?php
error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");

$to = "nizaretto@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: noreply@nawal-awad.com" . "\r\n" ;
  $headers .= "Organization: Nawal Awad \r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
  $headers .= "X-Priority: 3\r\n";
  $headers .= "X-Mailer: PHP". phpversion() ."\r\n" 
    
    <table>
<?php 


    foreach ($_POST as $key => $value) {
        echo "<tr>";
        echo "<td>";
        echo $key;
        echo "</td>";
        echo "<td>";
        echo $value;
        echo "</td>";
        echo "</tr>";
    }


?>
</table>

if (mail($to,$subject,$txt,$headers)) echo "success"; else echo"fail";
?>