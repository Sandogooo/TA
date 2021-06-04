<?php
session_start();
$oo=$_SESSION['username'];
?>

<link href='css1.css' rel='stylesheet' type='text/css'>
<center><h1>JADWAL BOOKING LAPANGAN</h1></center> <form method="post" name="daftar" action="prosesbookingmember.php">
<html lang="en">
<body>
<td>NamaTim<input type="text" name="namatim"></td>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
<td>Date:<input type="text" name="date" id="datepicker"></td>
<th><select name="mulai" >
<option value="">-Jam Mulai-</option>
<option value="07:00">07:00</option>
<option value="08:00">08:00</option>
<option value="09:00">09:00</option>
<option value="10:00">10:00</option>
<option value="11:00">11:00</option>
<option value="12:00">12:00</option>
<option value="13:00">13:00</option>
<option value="14:00">14:00</option>
<option value="15:00">15:00</option>
<option value="16:00">16:00</option>
<option value="17:00">17:00</option>
<option value="18:00">18:00</option>
<option value="19:00">19:00</option>
<option value="20:00">20:00</option>
<option value="21:00">21:00</option>
<option value="22:00">22:00</option>
<option value="23:00">23:00</option>
</select>
<th><select name="selesai" >
<option value="">-Selesai-</option>
<option value="07:00">07:00</option>
<option value="08:00">08:00</option>
<option value="09:00">09:00</option>
<option value="10:00">10:00</option>
<option value="11:00">11:00</option>
<option value="12:00">12:00</option>
<option value="13:00">13:00</option>
<option value="14:00">14:00</option>
<option value="15:00">15:00</option>
<option value="16:00">16:00</option>
<option value="17:00">17:00</option>
<option value="18:00">18:00</option>
<option value="19:00">19:00</option>
<option value="20:00">20:00</option>
<option value="21:00">21:00</option>
<option value="22:00">22:00</option>
<option value="23:00">23:00</option>
</select>
<?php
include"koneksi.php";

echo "<select name='lapangan'>";
$tampil=mysql_query("SELECT * FROM lapangan order by kd_lapangan");
echo "<option>- Pilih Lapangan -</option>";

while($w=mysql_fetch_array($tampil))
{
    echo "<option>$w[kd_lapangan]</option>";        
}
 echo "</select>";
?>
<input type="submit" value="Sewa"></td>
<br> 
<a href="indexmember.php?username=<?php echo $oo; ?>">BACK</a>
<br>
<br>
<?php

echo "<html><table>";
$no=1;

echo "<tr allign='Centre'><th>Tanggal</th><th>Jam Main</th><th>Selesai</th><th>lapangan</th><th>Nama TIM</th><th>Status</th></tr>";

$koneksi = mysql_connect("localhost","root","");

$sql = 'SELECT * FROM booking ORDER by tanggal,jam_main asc';

mysql_select_db('tugasakhir');
$ambildata = mysql_query( $sql, $koneksi);
$jumlah = mysql_num_rows($ambildata);
echo "Jumlah Booking = $jumlah";
  while($row=mysql_fetch_array($ambildata))
{
echo "<tr><td>{$row['tanggal']}</td><td>{$row['jam_main']}</td><td>{$row['selesai']}</td><td>{$row['lapangan']}</td><td>{$row['Namatim']}</td><td>{$row['Status']}</td></tr>";

$no++;
} 
echo "</table></html>";
//echo "Berhasil ambil data";
mysql_close($koneksi);

?>
</tr>
 </form>
</div>