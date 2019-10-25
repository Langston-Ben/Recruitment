<?php

require_once '../TCPDF-master/tcpdf.php';



$pdf = new TCPDF('P', 'mm', 'A4');
$pdf->AddPage();
$pdf->SetFont('times', 'B', 14);
$pdf->Image('../images/ldslogo.gif',80,10,50,18);

$pdf->Cell(34, 25, '', 0, 1);
$pdf->Cell(120, 5, 'The Church of Jesus Christ of Latter-day Saints', 0, 0);
$pdf->Cell(50, 5, 'Database Recruitment', 5, 1);

$pdf->SetFont('times','', 14);

$pdf->Cell(120, 5, '120 N 200 W', 0, 0);
$pdf->Cell(50, 5, "Email: $email", 0, 1);

$pdf->Cell(120, 5, 'Salt Lake City, UT 84103', 0, 0);
$date = date("m/j/Y");
$pdf->Cell(50, 5, "Date:  $date", 0, 1);

$pdf->Cell(34, 5, '', 0, 1);
$pdf->SetFont('times', 'B', 14);
$pdf->Cell(0,5,"Recruitment Test Results",0,1,'C');


//$pdf->Cell(34, 5, '[dd/mm/yyyy]', 0, 1);

$pdf->Cell(189, 10, '', 0, 1);




$pdf->SetFont('times','', 14);
//$pdf->SetFont('Arial','8',14);

$pdf->SetFillColor(169, 169, 169);
$pad = 1;
$pdf->SetCellPadding($pad);
$pdf->Cell(190 , 5,'Question 1 - Show results for this question',1,1,'L',true);
$pdf->MultiCell(190 , 5,$question1,1,1);
$pdf->Cell(190 , 5,'',0,1);

$pdf->Cell(190 , 5,'Question 2 - Show results for this question',1,1,'L',true);
$pdf->MultiCell(190 , 5,$question2,1,1);
$pdf->Cell(190 , 5,'',0,1);

$pdf->Cell(190 , 5,'Question 3 - Show results for this question',1,1,'L',true);
$pdf->MultiCell(190 , 5,$question3,1,1);
$pdf->Cell(190 , 5,'',0,1);

$pdf->Cell(190 , 5,'Question 4 - Show results for this question',1,1,'L',true);
$pdf->MultiCell(190 , 5,$question4,1,1);
$pdf->Cell(190 , 5,'',0,1);

$pdf->Cell(190 , 5,'Question 5 - Show results for this question',1,1,'L',true);
$pdf->MultiCell(190 , 5,$question5,1,1);
$pdf->Cell(190 , 5,'',0,1);

$pdf->Cell(190 , 5,'Question 6 - Show results for this question',1,1,'L',true);
$pdf->MultiCell(190 , 5,$question6,1,1);
$pdf->Cell(190 , 5,'',0,1);

$pdf->Cell(190 , 5,'Question 7 - Show results for this question',1,1,'L',true);
$pdf->MultiCell(190 , 5,$question7,1,1);
$pdf->Cell(190 , 5,'',0,1);

$pdf->Cell(190 , 5,'Question 8 - Show results for this question',1,1,'L',true);
$pdf->MultiCell(190 , 5,$question8,1,1);
$pdf->Cell(190 , 5,'',0,1);

$pdf->Cell(190 , 5,'Question 9 - Show results for this question',1,1,'L',true);
$pdf->MultiCell(190 , 5,$question9,1,1);
$pdf->Cell(190 , 5,'',0,1);

$pdf->Cell(190 , 5,'Question 10 - Show results for this question',1,1,'L',true);
$pdf->MultiCell(190 , 5,$question10,1,1);
$pdf->Cell(190 , 5,'',0,1);





ob_clean();
//$pdf->Output();
$attachdata = $pdf->Output('foo.pdf','S'); //  return the document as a string (name is ignored)
$pdf->Close();

require_once "../mailer/PHPMailer-master/src/PHPMailer.php";
require_once "../mailer/PHPMailer-master/src/SMTP.php";
require_once "../mailer/PHPMailer-master/src/Exception.php";



$mail = new PHPMailer\PHPMailer\PHPMailer();

//Enable SMTP debugging. 
$mail->SMTPDebug = 0;                               
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

$mail->addAddress("benlangston2009@gmail.com", "Recruitment Officer");

$mail->isHTML(true);

$mail->Subject = "Recruitment assessment from '$email'";
$mail->Body = "<span style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px'><p>This email was generated from an applicant that has completed the "
        . "database skill assessment.<br><br>The email address for this individual is '$email'<br><br>"
        . "Sincerely yours, <br><br><i>The Database Recruitment Team<br></i></p></span>";


//$mail->addAttachment("file.txt", "File.txt");        


$mail->AddStringAttachment($attachdata, 'Recruit.pdf');

if(!$mail->send()) 
{
    echo "Mailer Error: " . $mail->ErrorInfo;
} 
else 
{       //need include statement
    
 $message = "<p>Thank you, $email, the message has been sent successfully.</p>";
            include '../results.php';
            exit;   
    
//    echo "Message has been sent successfully";
}