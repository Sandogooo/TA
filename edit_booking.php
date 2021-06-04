<link href='login.css' rel='stylesheet' type='text/css'>
<div class="logo"></div>
<div class="login-block">
<?php
$Namatim=$_GET['Namatim'];

$db=mysql_connect("localhost","root","");
mysql_select_db("tugasakhir",$db);
$query=mysql_query("select * from booking where Namatim='$Namatim'",$db);
//if(mysql_num_rows($query)>0){
echo "<h1>Edit Data Booking</h1>";
while ($baris=mysql_fetch_array($query))
{
echo "<form method=\"get\" action=\"update_booking.php\">";
echo "<tr><td>Nama tim</td> </tr> <br>  <td><input type=\"text\" name=\"Namatim\"  size=\"15\" value=\"$baris[5]\"></td></tr>";
//echo "<tr><td>Status</td> </tr> <br> <td><input type=\"text\" name=\"Status\" size=\"15\" value=\"$baris[7]\"></td></tr>";
echo "<td>Status</td><br>
     <td><select name=\"Status\">
     <option value=\"$baris[7]\">\"$baris[7]\"</option>
     <option value='lunas'>Lunas</option>
     </select></td><br>";
echo "<br>";    
echo "<tr><td><input type=\"submit\" name=\"submit\" value=\"Update\"></td>";
echo "<input type=\"hidden\" name=\"Namatim\" value=\"$baris[5]\"></tr>";
echo "<table>";
echo "</form>";
}
//}else{
	//echo"<script language=\"javascript\">alert(\"Gagal, Status member atau Lunas Tidak Dapat Di Ubah!!\"); document.location.href='t_bookingadm.php';</script>";
//}

?>
<a href="t_bookingadm.php">Back</a> <br>
<a href="indexadmin.php">Home</a>
</tr>
 </form>
</div>