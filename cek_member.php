
<?php
include "koneksi.php";
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
if (empty($username)){
    echo "<script>alert('Username belum diisi')</script>";
    echo "<meta http-equiv='refresh' content='1 url=login_member.php'>";
    
}else if (empty($password)){
    echo "<script>alert('Password belum diisi')</script>";
    echo "<meta http-equiv='refresh' content='1 url=login_member.php'>";
}else{
	$cekuser = mysql_query("select * from member where username='$username' AND password='$password'");
    if(mysql_num_rows($cekuser)==1){//jika berhasil akan bernilai 1
        $c = mysql_fetch_array($cekuser);
        $_SESSION['username'] = $c['username'];
        if($c['status']=="admin"){
            header("location:indexadmin.php");
        }


			//header("location:indexuser.php");
                echo"<script language=\"javascript\">alert(\"Welcome {$c['username']}\"); document.location.href='indexmember.php?username={$c['username']}';</script>";       
                //header("location:indexuser.php?username={$c['username']}");
            

    }else{
        echo"<script language=\"javascript\">alert(\"Password atau Username Salah !!! Atau pembayaran belum lunas \"); document.location.href='login_member.php';</script>";
    }
}
?>

