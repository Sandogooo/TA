<?php
session_start();
$oo=$_SESSION['username'];
//$c = mysql_fetch_array($cekuser);
include "koneksi.php";
$tanggal = $_POST['date'];
$jam_main = $_POST['mulai'];
$selesai = $_POST['selesai'];
$lama = $selesai - $jam_main;
$lapangan = $_POST['lapangan'];
$Namatim = $_POST['namatim'];
$wak = date('m/d/Y', strtotime('now'));
$status = 'lunas';
$gambar="index.jpg";
if (empty($tanggal)){
  echo "<script>alert('Tanggal belum diisi')</script>";
  echo "<meta http-equiv='refresh' content='1 url=t_bookingmember.php'>";
}else if (empty($jam_main)){
  echo "<script>alert('Jam Main belum diisi')</script>";
  echo "<meta http-equiv='refresh' content='1 url=t_bookingmember.php'>";
}else if(empty($selesai)){
  echo "<script>alert('Jam Selesai belum diisi')</script>";
  echo "<meta http-equiv='refresh' content='1 url=t_bookingmember.php'>";
}else if (empty($lapangan)){
  echo "<script>alert('Lapangan belum diisi')</script>";
  echo "<meta http-equiv='refresh' content='1 url=t_bookingmember.php'>";
}else if (empty($Namatim)){
  echo "<script>alert('Nama TIM belum diisi')</script>";
  echo "<meta http-equiv='refresh' content='1 url=t_bookingmember.php'>";
}else{

    $cekuser2 = mysql_query("select * from booking where Namatim='$Namatim'");
    if(mysql_num_rows($cekuser2)<1){

   $cekstatus = mysql_query("select * from member where username='$oo' and status='$status'");
  if(mysql_num_rows($cekstatus)>0){

  if ($tanggal>=$wak)  {

  $cekuser = mysql_query("select * from booking where tanggal='$tanggal' and lapangan='$lapangan'");
  if(mysql_num_rows($cekuser)>0){
    $a="";
    while($c = mysql_fetch_array($cekuser)){
    if( 
$c['jam_main'] <= $jam_main && $c['selesai'] > $jam_main ||
$c['jam_main'] < $selesai && $c['selesai'] >= $selesai ||
$c['jam_main'] >= $jam_main && $c['selesai'] <= $selesai ||
$c['selesai'] == $selesai ||
$c['jam_main'] == $jam_main ||
$jam_main == $selesai
      ){ 
      $a="2";
    }else{
      if($a!="2"){
          $a="1";
      }
    }
  }
  if($a=="1"){
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
     $koneksi = mysql_connect("localhost","root","");
     $sql2 = "SELECT * FROM member WHERE username = '$oo'";
     $ambildata2 = mysql_query( $sql2, $koneksi);
       while($row1 = mysql_fetch_assoc($ambildata2)){
         $sisa=$row1['sisa'];

      } 

    $coba=$selesai;
    $coba2=$jam_main;
    $coba3=($sisa-($coba-$coba2));

    if ($coba3>="0") {

     $db=mysql_connect("localhost","root","");
      mysql_select_db("tugasakhir",$db);
      mysql_query("UPDATE member SET sisa = '$coba3' WHERE username = '$oo'");

    $hasil1 = 'Member';
    $query = mysql_query("INSERT INTO booking (username,tanggal,jam_main,selesai,lapangan,Namatim,harga,Status,gambar) values ('$oo','$tanggal','$jam_main','$selesai','$lapangan','$Namatim','$hasil1','Member','$gambar')");
    mysql_query($query);
    echo"<script language=\"javascript\">alert(\"Berhasil!!! Jadwal Sudah Berhasil Di Booking\"); document.location.href='t_bookingmember.php';</script>";
    }else
    echo"<script language=\"javascript\">alert(\"Maaf Proses Gagal3 , Sisa Main Member anda = 0\"); document.location.href='t_bookingmember.php';</script>";
    }else{
      echo"<script language=\"javascript\">alert(\" Proses gagal , Lapangan Sudah Di Booking\"); document.location.href='t_bookingmember.php';</script>";
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
      
  $koneksi = mysql_connect("localhost","root","");
     $sql2 = "SELECT * FROM member WHERE username = '$oo'";
    $ambildata2 = mysql_query( $sql2, $koneksi);
      while($row1 = mysql_fetch_assoc($ambildata2)){
        $sisa=$row1['sisa'];
      } 
       
    $coba=$selesai;
    $coba2=$jam_main;
    $coba3=($sisa-($coba-$coba2));

    if ($coba3>="0") {

     $db=mysql_connect("localhost","root","");
      mysql_select_db("tugasakhir",$db);
      mysql_query("UPDATE member SET sisa = '$coba3' WHERE username = '$oo'");

      $hasil1 = 'Member';
      $query = mysql_query("INSERT INTO booking (username,tanggal,jam_main,selesai,lapangan,Namatim,harga,Status,gambar) values ('$oo','$tanggal','$jam_main','$selesai','$lapangan','$Namatim','$hasil1','Member','$gambar')");
      mysql_query($query);
        echo"<script language=\"javascript\">alert(\"Berhasil!!! Jadwal Sudah Berhasil Di Booking\"); document.location.href='t_bookingmember.php';</script>";
      }else{
      echo"<script language=\"javascript\">alert(\"Maaf Proses Gagal , Sisa Main Member anda Tidak cukup\"); document.location.href='t_bookingmember.php';</script>";
    }
  }
}else{
  echo"<script language=\"javascript\">alert(\"Proses Gagal , Tanggal Main sudah lewat\"); document.location.href='t_bookingmember.php';</script>";
}
  }else{
    echo"<script language=\"javascript\">alert(\"Maaf Proses Gagal , Lunasi dulu pembayaran anda\"); document.location.href='t_bookingmember.php';</script>";

  }
}else{
    echo"<script language=\"javascript\">alert(\"Proses Gagal , Nama Tim Sudah Ada\"); document.location.href='t_bookingmember.php';</script>";
  }
}

?>