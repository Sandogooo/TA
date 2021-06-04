<link href='login.css' rel='stylesheet' type='text/css'>
<div class="logo"></div>
<div class="login-block">
<?php
$kd_lapangan=$_GET['kd_lapangan'];
echo "<h1>Edit Data Lapangan</h1>";
$db=mysql_connect("localhost","root","");
mysql_select_db("tugasakhir",$db);
$query=mysql_query("select * from lapangan where kd_lapangan='$kd_lapangan'",$db);
while ($baris=mysql_fetch_array($query))
{
echo "<form method=\"get\" action=\"update_lapangan.php\">";
echo "<tr><td>Kode Lapangan</td> </tr> <br>  <td><input type=\"text\" name=\"kd_lapangan\"  size=\"15\" value=\"$baris[0]\" readonly></td></tr>";
echo "<tr><td>Harga Lapangan</td> </tr> <br> <td><input type=\"text\" name=\"hrg_lapangan\" size=\"15\" value=\"$baris[1]\"></td></tr>";
echo "<tr><td>Harga Lapangan (18:00 - 23:00)</td> </tr> <br> <td><input type=\"text\" name=\"malam\" size=\"15\" value=\"$baris[2]\"></td></tr>";

echo "<tr><td><input type=\"submit\" name=\"submit\" value=\"Update\"></td>";
echo "<input type=\"hidden\" name=\"kd_lapangan\" value=\"$baris[0]\"></tr>";
echo "<table>";
echo "</form>";
}
?>

<a href="T_lapangan.php">Back</a> <br>
<a href="indexadmin.php">Home</a>
</tr>
 </form>
</div>