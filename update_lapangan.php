<?php
include "koneksi.php";
$kd_lapangan = $_GET['kd_lapangan'];
$hrg_lapangan = $_GET['hrg_lapangan'];
$malam = $_GET['malam'];


$db=mysql_connect("localhost","root","");
mysql_select_db("tugasakhir",$db);
mysql_query("UPDATE lapangan SET hrg_lapangan = '$hrg_lapangan', malam='$malam'  WHERE kd_lapangan = '$kd_lapangan'");
echo "<script>alert('Data Berhasil Diubah')</script>";
echo "<meta http-equiv='refresh' content='1 url=T_lapangan.php'>";
?>
