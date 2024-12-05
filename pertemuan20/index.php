<?php
// Tambahkan di baris paling atas
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

if( !isset($_SESSION["login"]) ) {
	header("Location: login.php");
	exit;
}

require 'functions.php';
$siswa = query("SELECT * FROM siswa");
 
// tombol cari ditekan
if( isset($_POST["cari"]) ) {
	$siswa = cari($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
	<link rel="stylesheet" href="style.css">
	<script src="js/jquery-3.7.1.min.js"></script>
	<script src="js/script.js"></script>
</head>
<body>
	<div class="admin-container">
		<nav class="nav-menu">
			<a href="logout.php" class="nav-link">Logout</a>
		</nav>

		<h1>Daftar Siswa</h1>

		<div class="action-buttons">
			<a href="tambah.php" class="btn-add">Tambah data Siswa</a>
		</div>

		<div class="search-container">
			<form action="" method="post">
				<input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian.." autocomplete="off" id="keyword">
				<button type="submit" name="cari" id="tombol-cari">Cari!</button>
				<img src="img/loader.gif" class="loader">
			</form>
		</div>

		<div id="container">
			<table class="data-table">
				<tr>
					<th>No.</th>
					<th>Aksi</th>
					<th>Gambar</th>
					<th>NISN</th>
					<th>Nama</th>
					<th>Email</th>
					<th>Jurusan</th>
				</tr>

				<?php $i = 1; ?>
				<?php foreach( $siswa as $row ) : ?>
				<tr>
					<td><?= $i; ?></td>
					<td>
						<a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a> |
						<a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">hapus</a>
					</td>
					<td><img src="img/<?= $row["gambar"]; ?>" width="100"></td>
					<td><?= $row["nisn"]; ?></td>
					<td><?= $row["nama"]; ?></td>
					<td><?= $row["email"]; ?></td>
					<td><?= $row["jurusan"]; ?></td>
				</tr>
				<?php $i++; ?>
				<?php endforeach; ?>
			</table>
		</div>
	</div>
</body>
</html>