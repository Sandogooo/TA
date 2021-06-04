<?php
include "koneksi.php";
$No_telepon = $_POST['No_telepon'];
$date = date('d/m/Y');
$sisa = $_POST['sisa'];
$harga = $_POST['harga'];
$username = $_POST['username'];
$password = $_POST['password'];
$gambar = "index.jpg";
$habis = date('d/m/Y', strtotime('+30 days', strtotime('now'))); //operasi penjumlahan tanggal sebanyak 6 hari
if (empty($No_telepon)){
echo "<script>alert('No_telepon belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=formmember.html'>";
}else 
if(empty($date)){
echo "<script>alert('Tanggal belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=formmember.html'>";
}else 
if (empty($username)){
echo "<script>alert('Username belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=formmember.html'>";
}else
if (empty($password)){
echo "<script>alert('Password belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=formmember.html'>";
}else{
$cek_username=mysql_num_rows(mysql_query
             ("SELECT username FROM member
               WHERE username='$username'"));
if ($cek_username > 0){
  echo "<script>alert('Username Sudah Ada')</script>";
  echo "<meta http-equiv='refresh' content='1 url=formmember.html'>";
}else{
$daftar = mysql_query("INSERT INTO member (no_telp,daftar,habis,sisa,harga,username,password,status,gambar) values ('$No_telepon','$date','$habis','4','400000','$username','$password','Belumlunas','$gambar')");
if ($daftar){
echo "<script>alert('Berhasil Mendaftar')</script>";
echo "<meta http-equiv='refresh' content='1 url=login_member.php'>";
}
}
}
?>
