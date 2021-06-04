<?php
include "koneksi.php";
$no_ktp = $_POST['no_ktp'];
$nama_lengkap = $_POST['nama_lengkap'];
$alamat = $_POST['alamat'];
$no_telepon = $_POST['no_telepon'];
$username = $_POST['username'];
$password = $_POST['password'];
if (empty($no_ktp)){
echo "<script>alert('Nama belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
}else
if (empty($nama_lengkap)){
echo "<script>alert('Email belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
}else 
if(empty($username)){
echo "<script>alert('Username belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
}else 
if (empty($no_telepon)){
echo "<script>alert('Password belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
}else
if (empty($username)){
echo "<script>alert('Email belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
}else
if (empty($password)){
echo "<script>alert('Email belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
}else{
$cek_username=mysql_num_rows(mysql_query
             ("SELECT * FROM user
               WHERE username='$username' or no_ktp='$no_ktp'"));
if ($cek_username > 0){
  echo "<script>alert('No KTP Atau Username Sudah Ada')</script>";
  echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
}else{
$daftar = mysql_query("INSERT INTO user (no_ktp,nama_lengkap,alamat,no_telepon,username,password,level) values ('$no_ktp','$nama_lengkap','$alamat','$no_telepon','$username','$password','user')");
if ($daftar){
echo "<script>alert('Berhasil Mendaftar')</script>";
echo "<meta http-equiv='refresh' content='1 url=login1.php'>";
}
}
}
?>