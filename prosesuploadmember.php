<link href='login.css' rel='stylesheet' type='text/css'>
<div class="login-block">
<html>

	<h1>Upload Gambar Bukti Pembayaran</h1>
		<?php 
		session_start();
		$oo=$_SESSION['username'];
		include 'koneksi.php';
		if($_POST['upload']){
			$ekstensi_diperbolehkan	= array('png','jpg');
			$nama = $_FILES['file']['name'];
			$x = explode('.', $nama);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['file']['size'];
			$file_tmp = $_FILES['file']['tmp_name'];	
 
			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ukuran < 1044070){			
					move_uploaded_file($file_tmp, 'file/'.$nama);
					$query = mysql_query("UPDATE member SET gambar = '$nama' where username = '$oo'");
					if($query){
						echo 'FILE BERHASIL DI UPLOAD';
					}else{
						echo 'GAGAL MENGUPLOAD GAMBAR';
					}
				}else{
					echo 'UKURAN FILE TERLALU BESAR';
				}
			}else{
				echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
			}
		}
		?>
 
		<br/>
		<br/>
<a href="info_member.php?username=<?php echo $oo; ?>">BACK</a>
	</body>
</html>
</tr>
 </form>
</div>
?>
