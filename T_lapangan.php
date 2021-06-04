<link href='login.css' rel='stylesheet' type='text/css'>
<div class="logo"></div>
<div class="login-block">
<form method="post" name="daftar" action="simpanlapangan.php">
<?php

echo "<html><table border=1>";
//$no=1;

echo "<tr allign='Centre'><td>Kode lapangan</td><td>Harga Lapangan</td><td>Harga 06:00-23:00</td><td>Edit</td><td>Hapus</td></tr>";
$koneksi = mysql_connect("localhost","root","");

//if(! $koneksi )
//{
//  die('Gagal Koneksi: ' . mysql_error());
//}
$sql = 'SELECT * FROM lapangan';

mysql_select_db('tugasakhir');
$ambildata = mysql_query( $sql, $koneksi);
$jumlah = mysql_num_rows($ambildata);
echo "<center><h>DAFTAR HARGA LAPANGAN</h></center>";
echo "Jumlah Lapangan = $jumlah";
//if(! $ambildata )
//{
  //die('Gagal ambil data: ' . mysql_error());
//}
  while($row = mysql_fetch_assoc($ambildata))
{
//<td>$no</td>	
echo "<tr><td>{$row['kd_lapangan']}</td><td>{$row['hrg_lapangan']}</td><td>{$row['malam']}</td><td><a href=edit_lapangan.php?kd_lapangan={$row['kd_lapangan']}>Edit</td><td><a href=d_lapangan.php?kd_lapangan={$row['kd_lapangan']}>Hapus</td></tr>";

//$no++;
} 
echo "</table></html>";
//echo "Berhasil ambil data";
mysql_close($koneksi);

?>
<a href="formlapangan.html">Back</a>
<a href="indexadmin.php">HOME</a>
</tr>
 </form>
</div>