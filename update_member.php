<?php
include "koneksi.php";
$username=$_GET['username'];
$status = $_GET['status'];


$db=mysql_connect("localhost","root","");
mysql_select_db("tugasakhir",$db);
mysql_query("UPDATE member SET status = '$status' WHERE username = '$username'");
echo "<script>alert('Data Berhasil Diubah')</script>";
echo "<meta http-equiv='refresh' content='1 url=t_member.php'>";
?>
