<?php
//$db=mysql_connect("localhost","root","");
//mysql_select_db("databasee_ik27",$db);

include "koneksi.php";

$username=$_GET['username'];
$db=mysql_connect("localhost","root","");
mysql_select_db("tugasakhir",$db);
$query=mysql_query("select * from member where username='$username' and status='BelumLunas'");
if (mysql_num_rows($query)==1){
mysql_query("delete from member where username='$username'");

echo "<script>alert('Data Berhasil Dihapus')</script>";
echo "<meta http-equiv='refresh' content='1 url=t_member.php'>";
}else{
	 echo"<script language=\"javascript\">alert(\"Proses Gagal, Member masih memiliki sisa main\"); document.location.href='T_member.php';</script>";

}
?>