<?php
require 'koneksi.php';
require 'fpdf186/fpdf.php';

$pdf = new FPDF('L','mm','A4'); // LANDSCAPE biar muat
$pdf->AddPage();

/* JUDUL */
$pdf->SetFont('Arial','B',14);
$pdf->Cell(0,10,'LAPORAN DATA MAHASISWA',0,1,'C');
$pdf->Ln(3);

/* HEADER */
$pdf->SetFont('Arial','B',8);
$pdf->Cell(10,7,'ID',1);
$pdf->Cell(20,7,'NIM',1);
$pdf->Cell(30,7,'Nama',1);
$pdf->Cell(25,7,'Tmp Lahir',1);
$pdf->Cell(25,7,'Tgl Lahir',1);
$pdf->Cell(15,7,'Saudara',1);
$pdf->Cell(35,7,'Alamat',1);
$pdf->Cell(20,7,'Kota',1);
$pdf->Cell(20,7,'Kelamin',1);
$pdf->Cell(25,7,'Status',1);
$pdf->Cell(20,7,'Hobi',1);
$pdf->Cell(35,7,'Email',1);
$pdf->Cell(20,7,'Password',1);
$pdf->Ln();

/* ISI DATA */
$pdf->SetFont('Arial','',8);
$query = mysqli_query($koneksi, "
    SELECT id, nim, nama, tempatLahir, tanggalLahir, jmlsaudara,
           alamat, kota, jenisKelamin, statusKeluarga, hobi, email, pass
    FROM mhs
");

while ($d = mysqli_fetch_assoc($query)) {
    $pdf->Cell(10,7,$d['id'],1);
    $pdf->Cell(20,7,$d['nim'],1);
    $pdf->Cell(30,7,$d['nama'],1);
    $pdf->Cell(25,7,$d['tempatLahir'],1);
    $pdf->Cell(25,7,$d['tanggalLahir'],1);
    $pdf->Cell(15,7,$d['jmlsaudara'],1);
    $pdf->Cell(35,7,$d['alamat'],1);
    $pdf->Cell(20,7,$d['kota'],1);
    $pdf->Cell(20,7,$d['jenisKelamin'],1);
    $pdf->Cell(25,7,$d['statusKeluarga'],1);
    $pdf->Cell(20,7,$d['hobi'],1);
    $pdf->Cell(35,7,$d['email'],1);
    $pdf->Cell(20,7,$d['pass'],1);
    $pdf->Ln();
}

$pdf->Output();
