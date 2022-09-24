<?php 
// $mahasiswa = [
// 	["M Ikbal Tawakal", "3203282704940001", "Front End Developer", "tawakal.mit@gmail.com"],
// 	["M Ikbal Tawakal", "3203282704940001", "Front End Developer", "tawakal.mit@gmail.com"],
// 	["M Ikbal Tawakal", "3203282704940001", "Front End Developer", "tawakal.mit@gmail.com"]
// ];

// Array Associative
// key adalah string yang kita buat sendiri

$mahasiswa = [
	[
		"Nama" => "M Ikbal Tawakal",
		"NIK" => "3203282704940001",
		"Email" => "tawakal.mit@gmail.com",
		"Jurusan" => "Front End Developer",
		"Gambar" => "satu.jpg"
	],
	[
		"Nama" => "Squall Leonheart",
		"NIK" => "3203282704940001",
		"Email" => "squall@gmail.com",
		"Jurusan" => "Back End Developer",
		"Gambar" => "dua.jpg"
	],
];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Daftar Mahasiswa</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<?php foreach ($mahasiswa as $mhs) : ?>
	<ul>
		<li>
			<img src="img/<?= $mhs["Gambar"]; ?>">
		</li>
		<li><?= $mhs["Nama"]; ?></li>
		<li><?= $mhs["NIK"]; ?></li>
		<li><?= $mhs["Email"]; ?></li>
		<li><?= $mhs["Jurusan"]; ?></li>
	</ul>
<?php endforeach; ?>

</body>
</html>