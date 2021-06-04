<?php
include "koneksi.php";
session_start();
$oo=$_SESSION['username'];
$_SESSION['username']=$_GET['username'];

$no_ktp = $_GET['no_ktp'];
$nama_lengkap = $_GET['nama_lengkap'];
$alamat = $_GET['alamat'];
$no_telepon = $_GET['no_telepon'];
$username = $_GET['username'];
$password = $_GET['password'];


$db=mysql_connect("localhost","root","");
mysql_select_db("tugasakhir",$db);
mysql_query("UPDATE user SET no_ktp = '$no_ktp', nama_lengkap = '$nama_lengkap' , alamat = '$alamat', no_telepon = '$no_telepon', password = '$password' , level = 'user' WHERE username = '$username'");
echo "<script>alert('Data Berhasil Diubah')</script>";
echo "<meta http-equiv='refresh' content='1 url=info_user.php'>";
?>
