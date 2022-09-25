<?php 
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

if(isset($_POST['cari'])) {
	$mahasiswa = cari($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Page</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<a href="tambah.php">Tambah Data</a>
<br><br>

<form method="post">

	<input type="text" name="keyword" size="40" autofocus placeholder="cari data" autocomplete="off">
	<button type="submit" name="cari">Cari</button>
	
</form>

<br>

<table border="1" cellpadding="10" cellspacing="0">
	<tr>
		<th>ID</th>
		<th>Aksi</th>
		<th>Gambar</th>
		<th>NRP</th>
		<th>Nama</th>
		<th>Email</th>
		<th>Jurusan</th>
	</tr>

	<?php foreach ( $mahasiswa as $row ) : ?>
	<tr>
		<td><?= $row["id"] ?></td>
		<td><a href="edit.php?id=<?= $row["id"] ?>">edit</a> | <a href="hapus.php?id=<?= $row["id"] ?>" onClick="confirm('yakin?')">delete</a></td>
		<td><img src="img/<?= $row["gambar"] ?>" width="50"></td>
		<td><?= $row["nrp"] ?></td>
		<td><?= $row["nama"] ?></td>
		<td><?= $row["email"] ?></td>
		<td><?= $row["jurusan"] ?></td>
	</tr>
	<?php endforeach; ?>
</table>
</body>
</html>