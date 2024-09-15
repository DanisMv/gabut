<?php
session_start();
//cek apakah user sudah login
if(!isset($_SESSION['userid'])){
 die("Anda belum login");//jika belum login jangan lanjut..
}
//cek level user
if($_SESSION['level']!="user"){
 die("Anda bukan user");//jika bukan user jangan lanjut
}
?>
<html>
<head><title>Halaman User</title></head>
<body>
<?php echo "<h3>Welcome ".$_SESSION['userid']."</h3>";?>
Menu :
<a href=halaman2.php>Halaman 2</a> |
<a href=halaman3.php>Halaman 3</a> |
<a href=log.php?op=out>Log Out</a>
</body>
</html> 