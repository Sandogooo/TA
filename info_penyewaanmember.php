<link href='css1.css' rel='stylesheet' type='text/css'>
<center><h1>DATA INFO PENYEWAAN MEMBER</h1></center> <form method="post" name="daftar" action="T_member.php">
<html lang="en">
<body>
<?php
session_start();
$oo=$_SESSION['username'];
echo "<html><table>";

echo "<tr allign='Centre'><th>Tanggal</th><th>Jam Main</th>
<th>Jam Selesai</th><th>Lapangan</th><th>Nama</th><th>Harga</th><th>Status</th><th>Cetak</th></tr>";
$koneksi = mysql_connect("localhost","root","");

//if(! $koneksi )
//{
//  die('Gagal Koneksi: ' . mysql_error());
//}

 
mysql_select_db('tugasakhir');
$ambildata = mysql_query("SELECT * FROM booking where username = '$oo'");
//if(! $ambildata )
//{
  //die('Gagal ambil data: ' . mysql_error());
//}
  while($row = mysql_fetch_assoc($ambildata))
{
echo "<tr><td>{$row['tanggal']}</td><td>{$row['jam_main']}</td><td>{$row['selesai']}</td><td>{$row['lapangan']}</td><td>{$row['nama']}</td><td>{$row['harga']}</td>
<td>{$row['status']}</td><td><a href=pdfmember.php?nama={$row['nama']}>Cetak</td></tr>";

} 
echo "</table></html>";
//echo "Berhasil ambil data";
mysql_close($koneksi);

?>
<a href="indexmember.php?username=<?php echo $oo; ?>">BACK</a>
</tr>
 </form>
</div>