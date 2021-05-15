<?php
     setcookie("COOKIE_ANDA", "Taqobbalallaahu minnaa wa minkum shiyaamana washiyaamakum kullu aamiin wa antum fii khoir. Mohon untuk dibukakan pintu maaf atas segala khilaf. Semoga kita bisa kembali berjumpa dengan Ramadhan di tahun-tahun mendatang. Mohon maaf lahir dan batin", time()+ 60,'/');
     echo 'Cookie akan hangus dalam 60 detik!';
?>

<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Menggunakan Fungsi Session dan Cookies</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <h1>Minal Aidin Wal Faizin, <?php echo $_SESSION['name']; ?></h1>
     <a href="read_cookie.php">Baca Cookie</a>
     <a href="logout.php">Logout</a>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>

