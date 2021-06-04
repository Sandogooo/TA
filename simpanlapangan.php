<?php
include "koneksi.php";
$kd_lapangan = $_POST['kd_lapangan'];
$hrg_lapangan = $_POST['hrg_lapangan'];
$malam = $_POST['malam'];
$daftar = mysql_query("INSERT INTO lapangan (kd_lapangan,hrg_lapangan,malam) values ('$kd_lapangan','$hrg_lapangan','$malam')");
if ($daftar){
echo "<script>alert('Data Berhasil Ditambahkan')</script>";
echo "<meta http-equiv='refresh' content='1 url=formlapangan.html'>";

}
?>
