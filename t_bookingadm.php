<link href='css1.css' rel='stylesheet' type='text/css'>
<form method="post" name="login" action="t_bookingadm.php">
<center><h1>DATA BOOKING LAPANGAN</h1></center>
  <input type='text' value='' name='qcari'>
  <input type='submit' value='cari'>
  <a href="t_bookingadm.php">Reset</a>
<br>
<?php

echo "<html><table>";
//$no=1;

echo "<tr><th>Tanggal</th><th>Jam Main</th><th>Selesai</th><th>lapangan</th><th>Nama TIM</th><th>Harga</th><th>Status</th><th>Bukti pembayaran</th><th>Edit</th><th>Hapus</th></tr>";

require_once('koneksi.php');
 $sql = 'SELECT * FROM booking ORDER by tanggal,jam_main asc';
 
if(isset($_POST['qcari'])){
  $qcari=$_POST['qcari'];
  $sql="SELECT * FROM booking where Namatim like '%$qcari%'";
}
mysql_select_db('tugasakhir');
$ambildata = mysql_query( $sql);
$jumlah = mysql_num_rows($ambildata);
echo "Jumlah Booking = $jumlah";
while($row=mysql_fetch_array($ambildata))
{
 echo "<tr><td>{$row['tanggal']}</td><td>{$row['jam_main']}</td>
 <td>{$row['selesai']}</td><td>{$row['lapangan']}</td>
 <td>{$row['Namatim']}</td><td>{$row['harga']}</td>
 <td>{$row['Status']}</td>
 <td><a href=file/{$row['gambar']} width='100px'><img src=file/{$row['gambar']} width='100px'></td>
 <td><a href=edit_booking.php?Namatim={$row['Namatim']}>Edit</td>
 <td><a href=hapus.php?Namatim={$row['Namatim']}>Hapus</td></tr>";
//$no++;
} 
echo "</table></html>";
//echo "Berhasil ambil data";

?>

</tr>
 </form>
 <a href="indexadmin.php">Home</a>
