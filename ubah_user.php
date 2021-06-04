<link href='login.css' rel='stylesheet' type='text/css'>
<div class="login-block">
<?php
session_start();
$oo=$_SESSION['username'];
$username=$_GET['username'];
echo "<h1>EDIT DATA</h1>";
$db=mysql_connect("localhost","root","");
mysql_select_db("tugasakhir",$db);
$query=mysql_query("select * from user where username='$username'",$db);
while ($baris=mysql_fetch_array($query))
{
echo "<form method=\"get\" action=\"update_user.php\">";
echo "<tr><td>No Ktp (ReadOnly)</td> </tr> <br>  <td><input type=\"text\" name=\"no_ktp\"  size=\"15\" value=\"$baris[0]\" readonly></td></tr>";
echo "<tr><td>Nama Lengkap (ReadOnly)</td> </tr> <br>  <td><input type=\"text\" name=\"nama_lengkap\"  size=\"15\" value=\"$baris[1]\" readonly></td></tr>";
echo "<tr><td>Alamat</td> </tr> <br>  <td><input type=\"text\" name=\"alamat\"  size=\"15\" value=\"$baris[2]\" ></td></tr>";
echo "<tr><td>No Telepon</td> </tr> <br>  <td><input type=\"text\" name=\"no_telepon\"  size=\"15\" value=\"$baris[3]\" ></td></tr>";
echo "<tr><td>Username (ReadOnly)</td> </tr> <br>  <td><input type=\"text\" name=\"username\"  size=\"15\" value=\"$baris[4]\" readonly></td></tr>";
echo "<tr><td>New Password</td> </tr> <br> <td><input type=\"text\" name=\"password\" size=\"15\" value=\"$baris[5]\"></td></tr>";

echo "<tr><td><input type=\"submit\" name=\"submit\" value=\"Update\"></td>";
echo "<table>";
echo "</form>";
}
?>

<a href="info_user.php?username=<?php echo $oo; ?>">Back</a> <br>
</tr>
 </form>
</div>