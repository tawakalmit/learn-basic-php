<?php 
session_start(); 
if(!isset($_SESSION["login"])){
	header("Location: login.php");
	exit;
}
require 'functions.php';
if(isset($_POST["submit"])) {
	
	// cek apakah data berhasil ditambahkan atau tidak
	if(tambah($_POST) > 0) {
		echo "
		<script>
		alert ('Data Berhasil Ditambahkan');
		document.location.href = 'index.php';
		</script>
		";
	} else {
		echo "
		<script>
		alert ('Data Gagal Ditambahkan');
		</script>
		";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tambah</title>
</head>
<body>
<h1>Tambah Data Mahasiswa</h1>
	<form action="" method="post">
		<ul>
			<li>
				<label for="nrp">NRP</label>
				<input type="text" name="nrp" id="nrp" required>
			</li>
			<li>
				<label for="nama">Nama</label>
				<input type="text" name="nama" id="nama" required>
			</li>
			<li>
				<label for="email">Email</label>
				<input type="email" name="email" id="email" required>
			</li>
			<li>
				<label for="jurusan">Jurusan</label>
				<input type="text" name="jurusan" id="jurusan" required>
			</li>
			<li>
				<label for="gambar">Gambar</label>
				<input type="text" name="gambar" id="gambar">
			</li>
			<button type="submit" name="submit">Tambah</button>
		</ul>
	</form>

	<a href="index.php">Dashboard</a>

</body>
</html>