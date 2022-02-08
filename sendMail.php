<?php 


require 'PHPMailer/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;
// Set PHPMailer to use the sendmail transport
$mail->isSMTP();
$mail->Host = 'smtp.hostinger.com';              // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'carlosgs.trejo@gmail.com';                 // SMTP username
$mail->Password = 'CGTB2623944733';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

//Set who the message is to be sent from
$mail->setFrom('abc1@gmail.com', 'First Last');
//Set an alternative reply-to address

//Set who the message is to be sent to
$mail->addAddress('abc@gmail.com', 'Shehan');
//Set the subject line
$mail->Subject = 'Test Mail';

$mail->Body = 'This is Test Mail';


//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
} 

?>