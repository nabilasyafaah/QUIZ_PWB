<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="login.php" method="post">
     	<h2>SILAHKAN LOGIN</h2>

     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

     	<label>Username</label>
     	<input type="text" name="uname" placeholder="Masukan username anda! (Try : nabila)"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Masukan password anda! (Try: 123456)"><br>

     	<button type="submit">Login</button>
          <a href="signup.php" class="ca">Buat akun baru?</a>
     </form>
</body>
</html>