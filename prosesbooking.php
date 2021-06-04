<?php
include "koneksi.php";
$tanggal = $_POST['date'];
$jam_main = $_POST['mulai'];
$selesai = $_POST['selesai'];
$lama = $selesai - $jam_main;
$lapangan = $_POST['lapangan'];
$Namatim = $_POST['namatim'];
$harga=0;
if (empty($tanggal)){
  echo "<script>alert('Tanggal belum diisi')</script>";
  echo "<meta http-equiv='refresh' content='1 url=t_booking.php'>";
}else if (empty($jam_main)){
  echo "<script>alert('Jam Main belum diisi')</script>";
  echo "<meta http-equiv='refresh' content='1 url=t_booking.php'>";
}else if(empty($selesai)){
  echo "<script>alert('Jam Selesai belum diisi')</script>";
  echo "<meta http-equiv='refresh' content='1 url=t_booking.php'>";
}else if (empty($lapangan)){
  echo "<script>alert('Lapangan belum diisi')</script>";
  echo "<meta http-equiv='refresh' content='1 url=t_booking.php'>";
}else if (empty($Namatim)){
  echo "<script>alert('Nama TIM belum diisi')</script>";
  echo "<meta http-equiv='refresh' content='1 url=t_booking.php'>";
}else{
  $cekuser = mysql_query("select * from booking where tanggal='$tanggal' and lapangan='$lapangan'");
  if(mysql_num_rows($cekuser)>0){
  	while($c = mysql_fetch_array($cekuser)){
  		$min=mysql_query("SELECT min(jam_main) as jamawal FROM booking");
  		while ($b = mysql_fetch_array($min)) {
  			$awal=$b['jamawal'];
  		}
  		$max=mysql_query("SELECT max(jam_main) as jamakhir FROM booking");
  		while ($b = mysql_fetch_array($max)) {
  			$akhir=$b['jamakhir'];
  		}
		if($jam_main>=$awal && $selesai<=$akhir){
		  	echo"<script language=\"javascript\">alert(\"MAAF !!! Jadwal Sudah DI Booking\"); document.location.href='t_booking.php';</script>";
	    }else{
	      $koneksi = mysql_connect("localhost","root","");

	    $sql = 'SELECT * FROM booking';
	    mysql_select_db('tugasakhir');
	    $ambildata = mysql_query( $sql, $koneksi);
	    $jumlah = mysql_num_rows($ambildata);
	    $sql1 = "SELECT * FROM lapangan WHERE kd_lapangan = '$lapangan'";
	    $ambildata1 = mysql_query( $sql1, $koneksi);
	      while($row1 = mysql_fetch_assoc($ambildata1)){
	        $harga=$row1['hrg_lapangan'];
	      }
	      $coba=$selesai;
	      $coba2=$jam_main;
	      $hasil1 = ($coba-$coba2)*$harga;
	      $query = mysql_query("INSERT INTO booking (tanggal,jam_main,selesai,lapangan,Namatim,harga,Status) values ('$tanggal','$jam_main','$selesai','$lapangan','$Namatim','$hasil1','Booked')");
	      mysql_query($query);
	        echo"<script language=\"javascript\">alert(\"Berhasil !!! Jadwal Sudah Berhasil Di Booking\"); document.location.href='t_booking.php';</script>";
	    }
	}
  }else{

    $koneksi = mysql_connect("localhost","root","");

    $sql = 'SELECT * FROM booking';

    mysql_select_db('tugasakhir');
    $ambildata = mysql_query( $sql, $koneksi);
    $jumlah = mysql_num_rows($ambildata);

    $sql1 = "SELECT * FROM lapangan WHERE kd_lapangan = '$lapangan'";
    $ambildata1 = mysql_query( $sql1, $koneksi);
      while($row1 = mysql_fetch_assoc($ambildata1)){
        $harga=$row1['hrg_lapangan'];
      }
      $coba=$selesai;
      $coba2=$jam_main;
      $hasil2 = ($coba-$coba2)*$harga;
      $query = mysql_query("INSERT INTO booking (tanggal,jam_main,selesai,lapangan,Namatim,harga,Status) values ('$tanggal','$jam_main','$selesai','$lapangan','$Namatim','$hasil2','Booked')");
      mysql_query($query);
        echo"<script language=\"javascript\">alert(\"Berhasil !!! Jadwal Sudah Berhasil Di Booking\"); document.location.href='t_booking.php';</script>";
  }
}
?>