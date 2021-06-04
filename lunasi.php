<link href='login.css' rel='stylesheet' type='text/css'>
<div class="logo"></div>
<div class="login-block">
<?php

$no=1;
$date=$_GET['date'];
echo "<h1>Pembayaran</h1>";
$db=mysql_connect("localhost","root","");
mysql_select_db("tugasakhir",$db);
$query=mysql_query("select * from booking where tanggal='$date'",$db);
while ($baris=mysql_fetch_array($query))
{
$koneksi = mysql_connect("localhost","root","");
$sql = 'SELECT * FROM booking';

mysql_select_db('tugasakhir');
$ambildata = mysql_query( $sql, $koneksi);

$sql1 = 'SELECT * FROM lapangan ORDER BY hrg_lapangan';
$ambildata1 = mysql_query( $sql1, $koneksi);
  while($row = mysql_fetch_assoc($ambildata1))
{
  $harga=$row['hrg_lapangan'];
}
  while($row = mysql_fetch_assoc($ambildata))
{
  $coba=$row['selesai'];
  $coba2=$row['jam_main'];
  $hasil = ($coba-$coba2)*$harga;
}
echo "<form method=\"get\" action=\"update_booking.php\">";
echo "<tr><td>Nama Tim</td> </tr> <br> <td><input type=\"text\" name=\"Namatim\" size=\"15\" value=\"$baris[4]\"></td></tr>";
echo "<tr><td>Bayar</td> </tr> <br> <td><input type=\"text\" name=\"Bayar\" size=\"15\" value=\"$baris[5]\"></td></tr>";

echo "<tr><td><input type=\"submit\" name=\"submit\" value=\"Bayar\"></td>";
echo "<input type=\"hidden\" name=\"Namatim\" value=\"$baris[4]\"></tr>";
echo "<table>";
echo "</form>";

$no++;
}
mysql_close($koneksi);
?>
<a href="t_bookingadm.php">Back</a> <br> <a href="indexadmin.php">Home</a>
</tr>
 </form>
</div>