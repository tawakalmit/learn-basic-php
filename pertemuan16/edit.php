<?php 
session_start(); 
if(!isset($_SESSION["login"])){
	header("Location: login.php");
	exit;
}
require 'functions.php';

// ambil data di url
$id = $_GET['id'];
// query data mahasiswa sesuai ID
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

if(isset($_POST["submit"])) {
	
	if(edit($_POST) > 0) {
		echo "
		<script>
		alert ('Data Berhasil Diubah');
		document.location.href = 'index.php';
		</script>
		";
	} else {
		echo "
		<script>
		alert ('Data Gagal Diubah');
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
	<title>Edit Data</title>
</head>
<body>
<h1>Tambah Data Mahasiswa</h1>
	<form action="" method="post">
		<input type="hidden" name="id" value="<?= $mhs["id"] ?>">
		<ul>
			<li>
				<label for="nrp">NRP</label>
				<input type="text" name="nrp" id="nrp" required value="<?= $mhs["nrp"]; ?>">
			</li>
			<li>
				<label for="nama">Nama</label>
				<input type="text" name="nama" id="nama" required value="<?= $mhs["nama"]; ?>" >
			</li>
			<li>
				<label for="email">Email</label>
				<input type="email" name="email" id="email" required value="<?= $mhs["email"]; ?>">
			</li>
			<li>
				<label for="jurusan">Jurusan</label>
				<input type="text" name="jurusan" id="jurusan" required value="<?= $mhs["jurusan"]; ?>">
			</li>
			<li>
				<label for="gambar">Gambar</label>
				<input type="text" name="gambar" id="gambar" value="<?= $mhs["gambar"]; ?>">
			</li>
			<button type="submit" name="submit">Edit</button>
		</ul>
	</form>

	<a href="index.php">Dashboard</a>

</body>
</html>