<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exeption;


require ('./extern/phpmailer/class.phpmailer.php');
require ('./extern/phpmailer/class.smtp.php');



$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "chrischivlog@gmail.com";
$mail->Password = "chrischivlo";
$mail->SetFrom("chrischivlog@gmail.com");
$mail->Subject = "Test";
$mail->Body = "hello";
$mail->AddAddress("chrischimc@gmail.com");

 if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
    echo "Message has been sent";
 }
?>