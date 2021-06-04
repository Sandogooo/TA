<link href='login.css' rel='stylesheet' type='text/css'>
<div class="logo"></div>
<div class="login-block">
<?php
session_start();
$oo=$_SESSION['username'];
$username=$_GET['username'];
echo "<h1>Edit Data Member</h1>";
$db=mysql_connect("localhost","root","");
mysql_select_db("tugasakhir",$db);
$query=mysql_query("select * from member where username='$username'",$db);
while ($baris=mysql_fetch_array($query))
{
echo "<form method=\"get\" action=\"proses_ubahmember.php\">";
echo "<tr><td>Username</td> </tr> <br>  <td><input type=\"text\" name=\"username\"  size=\"15\" value=\"$baris[5]\" readonly></td></tr>";
echo "<tr><td>No Telp</td> </tr> <br> <td><input type=\"text\" name=\"no_telp\" size=\"15\" value=\"$baris[0]\"></td></tr>";
echo "<tr><td>Password</td> </tr> <br> <td><input type=\"text\" name=\"password\" size=\"15\" value=\"$baris[6]\"></td></tr>";

echo "<tr><td><input type=\"submit\" name=\"submit\" value=\"Update\"></td>";
echo "<input type=\"hidden\" name=\"Namatim\" value=\"$baris[1]\"></tr>";
echo "<table>";
echo "</form>";
}
?>

<a href="info_member.php?username=<?php echo $oo; ?>">BACK</a>
</tr>
 </form>
</div>