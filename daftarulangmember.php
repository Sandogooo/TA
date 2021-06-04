<?php
include "koneksi.php";
session_start();
$oo=$_SESSION['username'];
$username = $_GET['username'];
$daftar = date('d/m/Y');
$habis = date('d/m/Y', strtotime ( '+1 month' , strtotime ( 'now' )) ) ;//menambahkan 3 minggu 
$sisa = '4';
$status = 'BelumLunas';
$sisadb = '0';
$gambar = 'index.jpg';

//date('d/m/Y', strtotime('+30 days', strtotime('now')));


$db=mysql_connect("localhost","root","");
mysql_select_db("tugasakhir",$db);

$cekstatus = mysql_query("select * from member where username='$username' and sisa='$sisadb'");
if(mysql_num_rows($cekstatus)>0){
mysql_query("UPDATE member SET daftar = '$daftar', habis = '$habis', sisa = '$sisa', status = '$status', gambar = '$gambar'  WHERE username = '$username'");
echo "<script>alert('Daftar Ulang Berhasil ')</script>";
echo "<meta http-equiv='refresh' content='1 url=info_member.php?username=$oo'>";
}else{
	echo"<script language=\"javascript\">alert(\"Maaf Proses Gagal , Sisa Main anda masih ada\"); document.location.href='info_member.php';</script>";
}
?>
