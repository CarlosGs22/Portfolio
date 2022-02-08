<?php


$headers =  'MIME-Version: 1.0' . "\r\n"; 
$headers .= 'From: Your name <carlosgs.trejo@gmail.com>' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

$to = "gustavo.trejo@uteq.edu.mx";
$subject = "OK";
$body = "OK";


mail($to, $subject, $body, $headers);



?>