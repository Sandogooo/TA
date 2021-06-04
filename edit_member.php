<link href='login.css' rel='stylesheet' type='text/css'>
<div class="logo"></div>
<div class="login-block">
<?php
$username=$_GET['username'];
echo "<h1>Edit Data Member</h1>";
$db=mysql_connect("localhost","root","");
mysql_select_db("tugasakhir",$db);
$query=mysql_query("select * from member where username='$username'",$db);
while ($baris=mysql_fetch_array($query))
{
echo "<form method=\"get\" action=\"update_member.php\">";
echo "<tr><td>Username</td> </tr> <br>  <td><input type=\"text\" name=\"username\"  size=\"15\" value=\"$baris[5]\" readonly></td></tr>";
//echo "<tr><td>Status</td> </tr> <br> <td><input type=\"text\" name=\"status\" size=\"15\" value=\"$baris[8]\"></td></tr>";
echo "<td>Status</td><br>
     <td><select name=\"status\">
     <option value=\"$baris[7]\">\"$baris[7]\"</option>
     <option value='lunas'>Lunas</option>
     <option value='Belumlunas'>BelumLunas</option>
     </select></td><br>";
echo "<br>";
echo "<tr><td><input type=\"submit\" name=\"submit\" value=\"Update\"></td>";
echo "<input type=\"hidden\" name=\"Namatim\" value=\"$baris[1]\"></tr>";
echo "<table>";
echo "</form>";
}
?>

<a href="T_member.php">Back</a> <br>
</tr>
 </form>
</div>