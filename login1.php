<?php
session_start();
?>
<link href='login.css' rel='stylesheet' type='text/css'>
<div class="logo"></div>
<div class="logo"></div>
<div class="login-block">
<form method="post" name="login" action="cek_login.php">
<tr>
<td colspan=3><center><font size=5>LOGIN USER</font></center></td>
</tr>
<tr>
<td><input type="text" name="username" id="username" placeholder="Username"></td>
</tr>
<td><input type="password" name="password" id="password" placeholder="Password"></td>
</tr>
<tr>
<td colspan=3><input type="submit" value="Login"></a></td>
Belum punya Akun?
<a href="daftar.php">Daftar</a>
<a href="index.html">Home</a> <br>
</tr>
 </form>
</div>