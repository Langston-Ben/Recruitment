<?php

require_once "mailer/PHPMailer-master/src/PHPMailer.php";
require_once "mailer/PHPMailer-master/src/SMTP.php";
require_once "mailer/PHPMailer-master/src/Exception.php";



$mail = new PHPMailer\PHPMailer\PHPMailer();

//Enable SMTP debugging. 
$mail->SMTPDebug = 3;                               
//Set PHPMailer to use SMTP.
$mail->isSMTP();            
//Set SMTP host name                          
$mail->Host = "mail.benjaminlangston.com";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;                          
//Provide username and password     
$mail->Username = "recruitment@benjaminlangston.com";                 
$mail->Password = 'CqdsG2V!fy^[p';                           
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "tls";                           
//Set TCP port to connect to 
$mail->Port = 587;                                   

$mail->From = "recruitment@benjaminlangston.com";
$mail->FromName = "Ben Langston";

$mail->addAddress("benlangston2009@gmail.com", "Interviewer");

$mail->isHTML(true);

$mail->Subject = "Subject Text";
$mail->Body = "<i>Mail body in HTML</i>";
$mail->AltBody = "This is the plain text version of the email content";

$mail->addAttachment("file.txt", "File.txt");        




if(!$mail->send()) 
{
    echo "Mailer Error: " . $mail->ErrorInfo;
} 
else 
{
    echo "Message has been sent successfully";
}