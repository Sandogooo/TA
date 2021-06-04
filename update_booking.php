<?php
include "koneksi.php";
$Namatim = $_GET['Namatim'];
$Status = $_GET['Status'];


$db=mysql_connect("localhost","root","");
mysql_select_db("tugasakhir",$db);
mysql_query("UPDATE booking SET Status = '$Status' WHERE Namatim = '$Namatim'");
echo "<script>alert('Data Berhasil Diubah')</script>";
echo "<meta http-equiv='refresh' content='1 url=t_bookingadm.php'>";
?>
