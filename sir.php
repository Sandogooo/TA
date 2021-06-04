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
  
 $cekuser = mysql_query("select * from booking WHERE tanggal='$tanggal'");
  if(mysql_num_rows($cekuser)>0){
    $c = mysql_fetch_array($cekuser);
    if( $c['jam_main'] <= $jam_main && $c['selesai'] >= $jam_main && $c['tanggal'] == $tanggal && $c['lapangan'] == $lapangan
    ||  $c['jam_main'] <= $selesai && $c['selesai'] >= $selesai && $c['tanggal'] == $tanggal && $c['lapangan'] == $lapangan 
    ||  $c['jam_main'] >= $jam_main && $c['selesai'] <= $selesai && $c['tanggal'] == $tanggal && $c['lapangan'] == $lapangan 
    ||  $c['jam_main'] == $jam_main  && $c['tanggal'] == $tanggal && $c['lapangan'] == $lapangan 
    xor $c['selesai'] == $selesai && $c['tanggal'] == $tanggal && $c['lapangan'] == $lapangan 
     ){
      echo"<script language=\"javascript\">alert(\"MAAF !!! Jadwal Sudah DI Booking\"); document.location.href='t_booking.php';</script>";
    }else{
              
              $ambildata1 = mysql_query("SELECT * FROM lapangan WHERE kd_lapangan = '$lapangan'");
             while($row1 = mysql_fetch_assoc($ambildata1)){
                  $harga=$row1['hrg_lapangan'];
                    }
          }
$awal  = new DateTime($jam_main);
$akhir = new DateTime($selesai); // Waktu sekarang
$diff  = $awal->diff($akhir);


$hasil1= $diff->h * $harga;


             $query = mysql_query("INSERT INTO booking (tanggal,jam_main,selesai,lapangan,Namatim,harga,Status) values ('$tanggal','$jam_main','$selesai','$lapangan','$Namatim','$hasil1','booked')");
      
               echo"<script language=\"javascript\">alert(\"Berhasil !!! Jadwal  Berhasil Di Booking\"); document.location.href='t_booking.php';</script>";
  }
}
?>