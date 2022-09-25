<?php 
// Koneksi ke database
// "hostname", "username", "password", "nama database"
$conn = mysqli_connect("localhost", "root", "", "phpdasar" );

// Ambil data dari mahasiswa / query
// "koneksi", "syntax SQL"
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// ambil data (fetch) dari object result
// mysqli_fetch_row() mengembalikan array numerik
// mysqli_fetch_assoc() mengembalikan array associative
// mysqli_fetch_array() mengembalikan array numerik dan associative
// mysqli_fetch_object()

// while($mhs = mysqli_fetch_assoc($result)) {
// 	var_dump($mhs);
// }

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

	<?php while ( $row = mysqli_fetch_assoc($result)): ?>
	<tr>
		<td><?= $row["id"] ?></td>
		<td><a href="">edit</a> | <a href="">delete</a></td>
		<td><img src="img/<?= $row["gambar"] ?>" width="50"></td>
		<td><?= $row["nrp"] ?></td>
		<td><?= $row["nama"] ?></td>
		<td><?= $row["email"] ?></td>
		<td><?= $row["jurusan"] ?></td>
	</tr>
	<?php endwhile; ?>
</table>
</body>
</html>