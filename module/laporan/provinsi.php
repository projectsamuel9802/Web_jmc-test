<?php
require_once('../../vendor/fpdf/fpdf.php');

$pdf = new FPDF('P', 'mm', 'A4');
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 25);
$pdf->Cell(80);
$pdf->Cell(30, 10, 'Laporan Jumlah Penduduk', 0, 0, 'C');
$pdf->Ln(20);
//Table
$pdf->SetFont('Times', 'B', 15);
$pdf->Cell(15, 10, 'No.', 1, 0, 'C');
$pdf->Cell(87, 10, 'Nama Provinsi', 1, 0, 'C');
$pdf->Cell(87, 10, 'Jumlah Penduduk', 1, 0, 'C');
$pdf->Ln();
$pdf->SetFont('Times', '', 12);
$pdf->Cell(15, 7, 'No.', 1, 0, 'C');
$pdf->Cell(87, 7, 'Nama Provinsi', 1, 0, 'C');
$pdf->Cell(87, 7, 'Jumlah Penduduk', 1, 0, 'C');
$pdf->Ln();


$pdf->Output();
