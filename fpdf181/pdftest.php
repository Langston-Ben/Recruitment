<?php

require_once '../fpdf181/fpdf.php';



$pdf = new FPDF('P', 'mm', 'A4');
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 14);

$pdf->Image('../images/ldslogo.gif',80,7,50,18);
$pdf->Cell(34, 25, '', 0, 1);
$pdf->Cell(132, 5, 'The Church of Jesus Christ of Latter-day Saints', 0, 0);
$pdf->Cell(59, 5, 'Database Recruitment', 5, 1);

$pdf->SetFont('Arial','', 14);

$pdf->Cell(132, 5, '120 N 200 W', 0, 0);
$pdf->Cell(29, 5, "Email: $email", 0, 1);

$pdf->Cell(132, 5, 'Salt Lake City, UT 84103', 0, 0);
$date = date("m/j/Y");
$pdf->Cell(29, 5, "Date:  $date", 0, 1);


$pdf->Cell(34, 5, '', 0, 1);

$pdf->Cell(34, 5, '', 0, 1);
$pdf->SetFont('Arial', 'B', 'U');
//$pdf->SetFont('','U');
$pdf->Cell(0,5,"Recruitment Test Results",0,1,'C');


//$pdf->Cell(34, 5, '[dd/mm/yyyy]', 0, 1);

$pdf->Cell(189, 10, '', 0, 1);




$pdf->SetFont('Arial','', 14);
//$pdf->SetFont('Arial','8',14);

$pdf->SetFillColor(169, 169, 169);
$pdf->Cell(190 , 5,'Question 1 - Show results for this question',1,1,'L',true);
$pdf->MultiCell(190 , 5,$question1,1,1);
$pdf->Cell(190 , 5,'',0,1);

$pdf->Cell(190 , 5,'Question 2 - Show results for this question',1,1,'L',true);
$pdf->Cell(190 , 20,'Placeholder for variable2',1,1);
$pdf->Cell(190 , 5,'',0,1);

$pdf->Cell(190 , 5,'Question 3 - Show results for this question',1,1,'L',true);
$pdf->Cell(190 , 20,'Placeholder for variable3',1,1);
$pdf->Cell(190 , 5,'',0,1);

$pdf->Cell(190 , 5,'Question 4 - Show results for this question',1,1,'L',true);
$pdf->Cell(190 , 20,'Placeholder for variable4',1,1);
$pdf->Cell(190 , 5,'',0,1);

$pdf->Cell(190 , 5,'Question 5 - Show results for this question',1,1,'L',true);
$pdf->Cell(190 , 20,'Placeholder for variable5',1,1);
$pdf->Cell(190 , 5,'',0,1);

$pdf->Cell(190 , 5,'Question 6 - Show results for this question',1,1,'L',true);
$pdf->Cell(190 , 20,'Placeholder for variable6',1,1);
$pdf->Cell(190 , 5,'',0,1);
$pdf->Cell(190 , 5,'',0,1);
$pdf->Cell(190 , 5,'',0,1);
$pdf->Cell(190 , 5,'',0,1);
$pdf->Cell(190 , 5,'',0,1);
$pdf->Cell(190 , 5,'',0,1);

$pdf->Cell(190 , 5,'Question 7 - Show results for this question',1,1,'L',true);
$pdf->Cell(190 , 20,'Placeholder for variable7',1,1);
$pdf->Cell(190 , 5,'',0,1);


$pdf->Cell(190 , 5,'Question 8 - Show results for this question',1,1,'L',true);
$pdf->Cell(190 , 20,'Placeholder for variable8',1,1);
$pdf->Cell(190 , 5,'',0,1);

$pdf->Cell(190 , 5,'Question 9 - Show results for this question',1,1,'L',true);
$pdf->Cell(190 , 20,'Placeholder for variable9',1,1);
$pdf->Cell(190 , 5,'',0,1);

$pdf->Cell(190 , 5,'Question 10 - Show results for this question',1,1,'L',true);
$pdf->Cell(190 , 20,'Placeholder for variable10',1,1);
$pdf->Cell(190 , 5,'',0,1);






$pdf->Output();
$pdf->Close();



