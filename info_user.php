<link href='css1.css' rel='stylesheet' type='text/css'>
<center><h1>DATA USER</h1></center> <form method="post" name="daftar" action="T_member.php">
<html lang="en">
<body>
<?php
session_start();
$oo=$_SESSION['username'];
echo "<html><table border=1>";

echo "<tr allign='Centre'><td>No KTP</td><td>Nama Lengkap</td><td>Alamat</td>
<td>No Telepon</td><td>Username</td><td>Ubah Data</td></tr>";
$koneksi = mysql_connect("localhost","root","");

//if(! $koneksi )
//{
//  die('Gagal Koneksi: ' . mysql_error());
//}

 
mysql_select_db('tugasakhir');
$ambildata = mysql_query("SELECT * FROM user where username = '$oo'");
//if(! $ambildata )
//{
  //die('Gagal ambil data: ' . mysql_error());
//}
  while($row = mysql_fetch_assoc($ambildata))
{
echo "<tr><td>{$row['no_ktp']}</td><td>{$row['nama_lengkap']}</td><td>{$row['alamat']}</td>
<td>{$row['no_telepon']}</td><td>{$row['username']}</td><td><a href=ubah_user.php?username={$row['username']}>Edit</td></tr>";

} 
echo "</table></html>";
//echo "Berhasil ambil data";
mysql_close($koneksi);

?>
<a href="indexuser.php?username=<?php echo $oo; ?>">BACK</a>
</tr>
 </form>
</div>