<link href='css1.css' rel='stylesheet' type='text/css'>
<center><h1>DATA MEMBER</h1></center> <form method="post" name="daftar" action="T_member.php">
<html lang="en">
  <input type='text' value='' name='qcari' placeholder='berdasarkan username' >
  <input type='submit' value='cari'>
  <a href="T_member.php">Reset</a><br>
<body>
<?php

echo "<html><table border=1>";

echo "<tr allign='Centre'><td>Username</td><td>No Telepon</td><td>Tanggal Daftar</td>
<td>Tanggal Selesai</td><td>Sisa</td><td>Harga</td><td>Status</td><td>Bukti Pembayaran</td><td>Edit</td><td>Hapus</td></tr>";
$koneksi = mysql_connect("localhost","root","");

//if(! $koneksi )
//{
//  die('Gagal Koneksi: ' . mysql_error());
//}
require_once('koneksi.php');
 $sql = 'SELECT * FROM member where status = "lunas" or status = "BelumLunas"  or status = "pending"';
 
if(isset($_POST['qcari'])){
  $qcari=$_POST['qcari'];
  $sql="SELECT * FROM member where username like '%$qcari%'";
}

mysql_select_db('tugasakhir');
$ambildata = mysql_query( $sql, $koneksi);
$jumlah = mysql_num_rows($ambildata);
echo "Jumlah Member = $jumlah";
//if(! $ambildata )
//{
  //die('Gagal ambil data: ' . mysql_error());
//}
  while($row = mysql_fetch_assoc($ambildata))
{
echo "<tr><td>{$row['username']}</td><td>{$row['no_telp']}</td><td>{$row['daftar']}</td><td>{$row['habis']}</td>
<td>{$row['sisa']}</td><td>{$row['harga']}</td><td>{$row['status']}</td>
<td><a href=file/{$row['gambar']} width='100px'><img src=file/{$row['gambar']} width='100px'></td>
<td><a href=edit_member.php?username={$row['username']}>Edit</td>
<td><a href=hapus_member.php?username={$row['username']}>Hapus</td></tr>";
} 
echo "</table></html>";
//echo "Berhasil ambil data";
mysql_close($koneksi);

?>
<a href="indexadmin.php">BACK</a>
</tr>
 </form>
</div>