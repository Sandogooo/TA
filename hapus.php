<?php
//$db=mysql_connect("localhost","root","");
//mysql_select_db("databasee_ik27",$db);

include "koneksi.php";

$Namatim=$_GET['Namatim'];
$db=mysql_connect("localhost","root","");
mysql_select_db("tugasakhir",$db);
$query=mysql_query("select * from booking where Namatim='$Namatim'");
if (mysql_num_rows($query)==1){
mysql_query("delete from booking where Namatim='$Namatim'");

echo "<script>alert('Data Berhasil Dihapus')</script>";
echo "<meta http-equiv='refresh' content='1 url=t_bookingadm.php'>";
}else{
	 echo"<script language=\"javascript\">alert(\"Status Member atau Lunas Tidak dapat Di hapus\"); document.location.href='t_bookingadm.php';</script>";

}
?>