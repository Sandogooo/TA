<link href='css1.css' rel='stylesheet' type='text/css'>
<center><h1>Cetak Laporan Penyewaan</h1></center> <form method="post" name="daftar" action="prosescetak.php">
<html lang="en">
<body>
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
<td>Tanggal:<input type="text" name="date" id="datepicker"></td>

<input type="submit" value="Cetak"></td>
<br> 
<a href="indexadmin.php">HOME</a>
<br>
<br>
<?php

echo "<html><table>";
$no=1;

echo "<tr allign='Centre'><th>Tanggal</th><th>Jam Main</th><th>Selesai</th><th>lapangan</th><th>Nama TIM</th><th>Harga</th><th>Status</th></tr>";

$koneksi = mysql_connect("localhost","root","");
 $sql = 'SELECT * FROM booking ';
 
if(isset($_POST['qcari'])){
  $qcari=$_POST['qcari'];
  $sql="SELECT * FROM booking where tanggal like '%$qcari%'";
}


mysql_select_db('tugasakhir');
$ambildata = mysql_query( $sql, $koneksi);
$jumlah = mysql_num_rows($ambildata);
echo "Jumlah Booking = $jumlah";
  while($row=mysql_fetch_array($ambildata))
{
echo "<tr><td>{$row['tanggal']}</td><td>{$row['jam_main']}</td><td>{$row['selesai']}</td><td>{$row['lapangan']}</td><td>{$row['Namatim']}</td><td>{$row['harga']}</td><td>{$row['Status']}</td></tr>";

$no++;
} 
echo "</table></html>";
//echo "Berhasil ambil data";
mysql_close($koneksi);

?>
</tr>
 </form>
</div>