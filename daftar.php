<?php
include "koneksi.php";
session_start();
if (isset($_SESSION['no_ktp'])){
header ("location:index.html");
}
?>
<link href='login.css' rel='stylesheet' type='text/css'>
<div class="logo"></div>
<div class="login-block">
<form method="post" name="daftar" action="proses_daftar.php">
<tr>
<td colspan=3><center><font size=5>DAFTAR USER</font></center></td>
</tr>
<tr>
<td><input type="text" name="no_ktp" placeholder="No KTP"></td>
</tr>
<tr>
<td><input type="text" name="nama_lengkap" placeholder="Nama Lengkap"></td>
</tr>
<tr>
<td><input type="text" name="alamat" placeholder="Alamat"></td>
</tr>
<tr>
<td><input type="text" name="no_telepon" placeholder="No HP" ></td>
</tr>
<tr>
<td><input type="text" name="username" id="username" placeholder="Username"></td>
</tr>
<tr>
<td><input type="password" name="password" id="password" placeholder="Password"></td>
</tr>
<tr>
</tr>
<tr>
<td colspan=3><input type="submit" value="Daftar"></a></td>
</tr>
<a href="login1.php">Login</a>
<a href="index.html">Home</a>
</table>
</form>
</body>
</html>