<link href='login.css' rel='stylesheet' type='text/css'>
<div class="login-block">
<?php
session_start();
$oo=$_SESSION['username'];
$Namatim=$_GET['Namatim'];
echo "<h1>EDIT DATA</h1>";
$db=mysql_connect("localhost","root","");
mysql_select_db("tugasakhir",$db);
$query=mysql_query("select * from booking where Namatim='$Namatim'",$db);
while ($baris=mysql_fetch_array($query))
{
echo "<form method=\"post\" action=\"proses_upload.php\" enctype=\"multipart/form-data\">";
echo "<tr><td>Namatim</td> </tr> <br>  <td><input type=\"text\" name=\"Namatim\"  size=\"15\" value=\"$baris[5]\" readonly></td></tr>";
echo "<tr><td>Harga</td> </tr> <br>  <td><input type=\"text\" name=\"harga\"  size=\"15\" value=\"$baris[6]\" readonly></td></tr>";
echo "<tr><td>Upload File</td> </tr> <br>  <td><input type=\"file\" name=\"file\" size=\"15\" value=\"$baris[8]\" ></td></tr>";

echo "<tr><td><input type=\"submit\" name=\"upload\" value=\"update\"></td>";
echo "<table>";
echo "</form>";
}
?>

<a href="info_penyewaan.php?username=<?php echo $oo; ?>">BACK</a>
</tr>
 </form>
</div>