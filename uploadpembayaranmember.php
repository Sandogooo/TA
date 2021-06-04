<link href='login.css' rel='stylesheet' type='text/css'>
<div class="logo"></div>
<div class="login-block">
<?php
session_start();
$oo=$_SESSION['username'];

$username=$_GET['username'];

echo "<h1>upload bukti Pembayaran</h1>";
$db=mysql_connect("localhost","root","");
mysql_select_db("tugasakhir",$db);
$query=mysql_query("select * from member where username='$username'",$db);
while ($baris=mysql_fetch_array($query))
{
echo "<form method=\"post\" action=\"prosesuploadmember.php\" enctype=\"multipart/form-data\">";
echo "<tr><td>Username</td> </tr> <br>  <td><input type=\"text\" name=\"username\"  size=\"15\" value=\"$baris[5]\" readonly></td></tr>";
echo "<tr><td>Upload File</td> </tr> <br>  <td><input type=\"file\" name=\"file\" size=\"15\" value=\"$baris[8]\" ></td></tr>";

echo "<tr><td><input type=\"submit\" name=\"upload\" value=\"update\"></td>";
echo "<table>";
echo "</form>";
}
?>

<a href="info_member.php?username=<?php echo $oo; ?>">Back</a> <br>
</tr>
 </form>
</div>