<?php

session_start();
if (!isset($_SESSION['admin_reg_id'])) {
    header('Location: adminlogin.php');
    exit();
}
include '../server.php';
if (isset($_POST['pdf_new_pan'])) {
    $pdf_new_pan_id = $_POST['pdf_new_pan_id'];
    $pdf_new_pan_name = $_POST['pdf_new_pan_name'];
    $pdf_new_pan_email = $_POST['pdf_new_pan_email'];
    $pdf_new_pan_mobnumber = $_POST['pdf_new_pan_mobnumber'];
    $pdf_new_pan_gender = $_POST['pdf_new_pan_gender'];
    $pdf_new_pan_father = $_POST['pdf_new_pan_father'];
    $pdf_new_pan_aadhaarno = $_POST['pdf_new_pan_aadhaarno'];
    $pdf_new_pan_picture = $_POST['pdf_new_pan_picture'];
    $pdf_new_pan_sign = $_POST['pdf_new_pan_sign'];
    
}

require_once('TCPDF-main/tcpdf.php');

// Create new PDF instance
$pdf = new TCPDF('P', 'mm', 'A4');

// Disable header and footer
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

// Add a page
$pdf->AddPage();

// Set font
$pdf->SetFont('helvetica', '', 14);

// Add title
$pdf->Cell(190, 10, 'Candidate Details', 0, 1, 'C');

// Set smaller font for subtitle
$pdf->SetFont('helvetica', '', 8);
$pdf->Cell(190, 5, 'NEW PAN CARD', 0, 1, 'C');

// Set font for table content
$pdf->SetFont('helvetica', '', 10);

$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
$pdf->setJPEGQuality(75);

// Add table headers
$pdf->Cell(10, 5, 'ID', 1);
$pdf->Cell(20, 5, 'Name', 1);
$pdf->Cell(40, 5, 'Email', 1);
$pdf->Cell(30, 5, 'Mobile number', 1);
$pdf->Cell(20, 5, 'gender', 1);
$pdf->Cell(20, 5, 'Father', 1);
$pdf->Cell(50, 5, 'AAdhaar', 1);
$pdf->Ln(); 


$pdf->Cell(10, 5, $pdf_new_pan_id, 1);
$pdf->Cell(20, 5, $pdf_new_pan_name, 1);
$pdf->Cell(40, 5, $pdf_new_pan_email, 1);
$pdf->Cell(30, 5, $pdf_new_pan_mobnumber, 1);
$pdf->Cell(20, 5,$pdf_new_pan_gender, 1); 
$pdf->Cell(20, 5,$pdf_new_pan_father, 1); 
$pdf->Cell(50, 5,$pdf_new_pan_aadhaarno, 1); 
$pdf->Ln(); 


$pdf->SetXY(110, 200);
$pdf->Image($pdf_new_pan_picture, '', '', 40, 40, '', '', 'T', false, 300, '', false, false, 1, false, false, false);
$pdf->Image($pdf_new_pan_sign, '', '', 40, 40, '', '', '', false, 300, '', false, false, 1, false, false, false);


$pdf->Output('candidate_details.pdf', 'I');
?>
