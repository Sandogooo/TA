<?php
//$db=mysql_connect("localhost","root","");
//mysql_select_db("databasee_ik27",$db);

include "koneksi.php";

$kd_lapangan=$_GET['kd_lapangan'];
//mysql_query("delete * from barang where kd_brg='$kd_brg'",$db);
mysql_query("delete from lapangan where kd_lapangan='$kd_lapangan'");
echo "<script>alert('Data Berhasil Dihapus')</script>";
echo "<meta http-equiv='refresh' content='1 url=T_lapangan.php'>";
?>