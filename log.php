<?php
session_start();
include("koneksi.php");
$userid = $_POST['userid'];
$psw = $_POST['psw'];
$op = $_GET['op'];
if($op=="in"){
$cek = mysqli_query($koneksi,"SELECT * FROM tabeluser WHERE
userid='$userid' AND password='$psw'");
 if(mysqli_num_rows($cek)==1){//jika berhasil akan bernilai 1
 $c = mysqli_fetch_array($cek);
 $_SESSION['userid'] = $c['userid'];
 $_SESSION['level'] = $c['level'];
 if($c['level']=="admin"){
 header("location:./admin/homeadmin.php");
 }
 else if ($c['level']=="mahasiswa"){
 header("location:./mahasiswa/homemhs.php");
 }
 else if ($c['level']=="dosen"){
 header("location:./dosen/homedosen.php");
 }
 }else{

die("password salah
 <a href=\"javascript:history.back()\">kembali</a>");
 }
}else if($op=="out"){
 unset($_SESSION['userid']);
 unset($_SESSION['level']);
 header("location:index.php");
}
?> 