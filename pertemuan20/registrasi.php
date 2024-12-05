<?php 
require 'functions.php';

if( isset($_POST["register"]) ) {

	if( registrasi($_POST) > 0 ) {
		echo "<script>
				alert('user baru berhasil ditambahkan!');
			  </script>";
	} else {
		echo mysqli_error($conn);
	}

}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Registrasi</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="login-container">
		<h1>Registrasi Jujutsu</h1>

		<form action="" method="post">
			<ul>
				<li>
					<label for="username">Username</label>
					<input type="text" name="username" id="username" placeholder="Masukkan username">
				</li>
				<li>
					<label for="password">Password</label>
					<input type="password" name="password" id="password" placeholder="Masukkan password">
				</li>
				<li>
					<label for="password2">Konfirmasi Password</label>
					<input type="password" name="password2" id="password2" placeholder="Konfirmasi password">
				</li>
				<li>
					<button type="submit" name="register">Daftar Sekarang!</button>
				</li>
			</ul>
		</form>
	</div>
</body>
</html>