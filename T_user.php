<link href='css1.css' rel='stylesheet' type='text/css'>
<center><h1>DATA USER</h1></center> <form method="post" name="daftar" action="T_user.php">
<html lang="en">
  <input type='text' value='' name='qcari' placeholder='berdasarkan username'>
  <input type='submit' value='cari'>
  <a href="T_user.php">Reset</a><br>
<body>
<?php

echo "<html><table border=1>";

echo "<tr allign='Centre'><td>Username</td><td>No KTP</td><td>Nama Lengkap</td>
<td>Alamat</td><td>No Telp</td><td>Hapus</td></tr>";
$koneksi = mysql_connect("localhost","root","");

//if(! $koneksi )
//{
//  die('Gagal Koneksi: ' . mysql_error());
//}
require_once('koneksi.php');
 $sql = 'SELECT * FROM user where level = "user"';
 
if(isset($_POST['qcari'])){
  $qcari=$_POST['qcari'];
  $sql="SELECT * FROM user where username like '%$qcari%'";
}

mysql_select_db('tugasakhir');
$ambildata = mysql_query( $sql, $koneksi);
$jumlah = mysql_num_rows($ambildata);
echo "Jumlah User = $jumlah";
//if(! $ambildata )
//{
  //die('Gagal ambil data: ' . mysql_error());
//}
  while($row = mysql_fetch_assoc($ambildata))
{
echo "<tr><td>{$row['username']}</td>
<td>{$row['no_ktp']}</td>
<td>{$row['nama_lengkap']}</td>
<td>{$row['alamat']}</td>
<td>{$row['no_telepon']}</td>
<td><a href=hapus_user.php?username={$row['username']}>Hapus</td></tr>";
} 
echo "</table></html>";
//echo "Berhasil ambil data";
mysql_close($koneksi);

?>
<a href="indexadmin.php">BACK</a>
</tr>
 </form>
</div>