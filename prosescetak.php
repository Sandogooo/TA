<?php
//koneksi ke database
include "koneksi.php";

$date=$_POST['date'];

mysql_connect("localhost","root","");
mysql_select_db("tugasakhir");

//mengambil data dari tabel
   $cekuser2 = mysql_query("select * from booking where tanggal='$date'");
   if(mysql_num_rows($cekuser2)>0){
$sql=mysql_query("SELECT * from booking where tanggal='$date' and Status='member' or  tanggal='$date' and Status='lunas'");
$data = array();
while ($row = mysql_fetch_assoc($sql)) {
    array_push($data, $row);
}
 
//mengisi judul dan header tabel
$judul = "LAPORAN DATA BOOKING DAFEST FUTSAL";
$tanggal = "Tanggal $date";
$header = array(
array("label"=>"Username", "length"=>30, "align"=>"L"),	
array("label"=>"Tanggal", "length"=>30, "align"=>"L"),
array("label"=>"Jam Main", "length"=>20, "align"=>"L"),
array("label"=>"Selesai", "length"=>20, "align"=>"L"),
array("label"=>"Lapangan", "length"=>20, "align"=>"L"),
array("label"=>"Nama Tim", "length"=>25, "align"=>"L"),
array("label"=>"Harga", "length"=>25, "align"=>"L"),
array("label"=>"Status", "length"=>30, "align"=>"L"),
array("label"=>"Gambar", "length"=>30, "align"=>"L")
);
 
//memanggil fpdf
require_once ("fpdf/fpdf.php");
$pdf = new FPDF();
$pdf->AddPage();
 
//tampilan Judul Laporan
$pdf->SetFont('Arial','B','16'); //Font Arial, Tebal/Bold, ukuran font 16
$pdf->Cell(0,10, $judul, '0', 1, 'C');  
$pdf->SetFont('Arial','B','12');
$pdf->Cell(0,10, $tanggal, '0', 1, 'C');

//Header Table
$pdf->SetFont('Arial','','10');
$pdf->SetFillColor(139, 69, 19); //warna dalam kolom header
$pdf->SetTextColor(255); //warna tulisan putih
$pdf->SetDrawColor(222, 184, 135); //warna border
foreach ($header as $kolom) {
    $pdf->Cell($kolom['length'], 9, $kolom['label'], 1, '0', $kolom['align'], true);
}
$pdf->Ln();
 
//menampilkan data table
$pdf->SetFillColor(245, 222, 179); //warna dalam kolom data
$pdf->SetTextColor(0); //warna tulisan hitam
$pdf->SetFont('');
$fill=false;
foreach ($data as $baris) {
$i = 0;
foreach ($baris as $cell) {
$pdf->Cell($header[$i]['length'], 9, $cell, 1, '0', $kolom['align'], $fill);
$i++;
}
$fill = !$fill;
$pdf->Ln();
}
 
//output file pdf
//$pdf->SetFont('Arial','B','16'); 
//$pdf->Cell(0,10, $total, '0', 1, 'C');
$pdf->Output();
}else{
	echo"<script language=\"javascript\">alert(\"Tanggal Tidak Ditemukan \"); document.location.href='cetaklaporan.php';</script>";
}
?>
