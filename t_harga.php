<link href='login.css' rel='stylesheet' type='text/css'>
<div class="logo"></div>
<div class="login-block">
<form method="post" name="daftar" action="simpanlapangan.php">
<?php
session_start();
$oo=$_SESSION['username'];
echo "<html><table border=1>";
$no=1;

echo "<tr allign='Centre'><th>Kode lapangan</th><th>Harga Lapangan</th><th>Harga 06:00-23:00</th></tr>";
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
echo "<br>";
//if(! $ambildata )
//{
  //die('Gagal ambil data: ' . mysql_error());
//}
  while($row = mysql_fetch_assoc($ambildata))
{
echo "<tr><td>{$row['kd_lapangan']}</td><td>{$row['hrg_lapangan']}</td><td>{$row['malam']}</td></tr>";

$no++;
} 
echo "</table></html>";
//echo "Berhasil ambil data";
mysql_close($koneksi);

?>
<br>
<a href="indexuser.php?username=<?php echo $oo; ?>">HOME</a>
</tr>
 </form>
</div>