<link href='tabel.css' rel='stylesheet' type='text/css'>
<center><h1>DATA MEMBER</h1></center> <form method="post" name="daftar" action="T_member.php">

<?php
session_start();
$oo=$_SESSION['username'];
echo "<html><table>";

echo "<tr allign='Centre'>
<th>No Telepon</th>
<th>Tanggal Daftar</th>
<th>Tanggal Selesai</th>
<th>Sisa Main</th>
<th>Harga</th>
<th>Status</th>
<th>username</th>
<th>Bukti Pembayaran</th>
<th>Upload Pembayaran</th>
<th>Edit Data</th>
<th>Daftar ulang</th></tr>";
$koneksi = mysql_connect("localhost","root","");

//if(! $koneksi )
//{
//  die('Gagal Koneksi: ' . mysql_error());
//}

 
mysql_select_db('tugasakhir');
$ambildata = mysql_query("SELECT * FROM member where username = '$oo'");
//if(! $ambildata )
//{
  //die('Gagal ambil data: ' . mysql_error());
//}
  while($row = mysql_fetch_assoc($ambildata))
{
echo "<tr>
<td>{$row['no_telp']}</td>
<td>{$row['daftar']}</td>
<td>{$row['habis']}</td>
<td>{$row['sisa']}</td>
<td>{$row['harga']}</td>
<td>{$row['status']}</td>
<td>{$row['username']}</td>
<td><a href=file/{$row['gambar']} width='100px'><img src=file/{$row['gambar']} width='100px'></td>
<td><a href=uploadpembayaranmember.php?username={$row['username']}>Upload</td>
<td><a href=ubah_member.php?username={$row['username']}>Edit Data</td>
<td><a href=daftarulangmember.php?username={$row['username']}>Daftar Ulang</td></tr>";

} 
echo "</table></html>";
//echo "Berhasil ambil data";
mysql_close($koneksi);

?>
<a href="indexmember.php?username=<?php echo $oo; ?>">BACK</a>

 </form>