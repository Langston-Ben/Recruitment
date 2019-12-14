<?php

require_once '../TCPDF-master/tcpdf.php';



$pdf = new TCPDF('P', 'mm', 'A4');
$pdf->AddPage();
$pdf->SetFont('times', 'B', 14);
$pdf->Image('../images/ldslogo.gif',80,10,50,18);

$pdf->Cell(34, 25, '', 0, 1);
$pdf->Cell(110, 5, 'The Church of Jesus Christ of Latter-day Saints', 0, 0);
$pdf->Cell(50, 5, 'Database Recruitment', 5, 1);

$pdf->SetFont('times','', 14);

$pdf->Cell(110, 5, '120 N 200 W', 0, 0);
$pdf->MultiCell(100, 5, "Email: $email", 0, 1);

$pdf->Cell(110, 5, 'Salt Lake City, UT 84103', 0, 0);
$date = date("m/j/Y");
$pdf->Cell(50, 5, "Date:  $date", 0, 1);

$pdf->Cell(34, 5, '', 0, 1);
$pdf->SetFont('times', 'B', 14);
$pdf->Cell(0,5,"Recruitment Test Results",0,1,'C');
$percent = '%';
$pdf->Cell(0,5,$score.'%',0,0,'C');


//$pdf->Cell(34, 5, '[dd/mm/yyyy]', 0, 1);

$pdf->Cell(189, 10, '', 0, 1);




$pdf->SetFont('times','', 14);
//$pdf->SetFont('Arial','8',14);

$pdf->SetFillColor(169, 169, 169);
$pad = 1;
$pdf->SetCellPadding($pad);
$pdf->Cell(190 , 5,'Question 1 - Results for this question:  '.$q1Message.$f1Message,1,1,'L',true);
$pdf->MultiCell(190 , 5,$question1,1,1);
$pdf->Cell(190 , 5,'',0,1);

$pdf->Cell(190 , 5,'Question 2 - Results for this question:  '.$q2Message.$f2Message,1,1,'L',true);
$pdf->MultiCell(190 , 5,$question2,1,1);
$pdf->Cell(190 , 5,'',0,1);

$pdf->Cell(190 , 5,'Question 3 - Results for this question:  '.$q3Message.$f3Message,1,1,'L',true);
$pdf->MultiCell(190 , 5,$question3,1,1);
$pdf->Cell(190 , 5,'',0,1);

$pdf->Cell(190 , 5,'Question 4 - Results for this question:  '.$q4Message.$f4Message,1,1,'L',true);
$pdf->MultiCell(190 , 5,$question4,1,1);
$pdf->Cell(190 , 5,'',0,1);

$pdf->Cell(190 , 5,'Question 5 - Results for this question:  '.$q5Message.$f5Message,1,1,'L',true);
$pdf->MultiCell(190 , 5,$question5,1,1);
$pdf->Cell(190 , 5,'',0,1);

$pdf->Cell(190 , 5,"Additional Comments from $email:",1,1,'L',true);
$pdf->MultiCell(190 , 5,$comments,1,1);
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
//Remove the comment on the next line when hosting
//$mail->isSMTP();            

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
//$mail->addAddress("carverj@churchofjesuschrist.org", "Recruitment Officer");
//$mail->addCC('recruitment101t@gmail.com',"Testing Functionality");

$mail->isHTML(true);

$mail->Subject = "Recruitment assessment from $email, Score = $score";
$mail->Body = "<span style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px'><p>This email was generated from an applicant that has completed the "
        . "database skill assessment.<br><br>The email address for this individual is $email.<br><br>"
        . "Sincerely yours, <br><br><i>The Database Recruitment Team<br></i></p></span>";


//$mail->addAttachment("file.txt", "File.txt");        


$mail->AddStringAttachment($attachdata, 'Recruit.pdf');

if(!$mail->send()) 
{
    echo "Mailer Error: " . $mail->ErrorInfo;
} 
else 
{       //need include statement
    
 $message = "<p>Thank you, $email, the assessment has been sent successfully."
         . "<br>Your assessment score is: $score%.</p>";
            include '../confirmation.php';
            exit;   
    
}