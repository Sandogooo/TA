<?php
include "koneksi.php";
$username=$_GET['username'];
$no_telp = $_GET['no_telp'];
$password = $_GET['password'];

$db=mysql_connect("localhost","root","");
mysql_select_db("tugasakhir",$db);
mysql_query("UPDATE member SET no_telp = '$no_telp', password = '$password' WHERE username = '$username'");
echo "<script>alert('Data Berhasil Diubah')</script>";
echo "<meta http-equiv='refresh' content='1 url=info_member.php'>";

?>