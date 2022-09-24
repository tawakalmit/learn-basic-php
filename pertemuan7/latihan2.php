<?php 
// SUPERGLOBAL
// Merupakan Array Associative
// GET & POST

// $_GET
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
 	<title>GET</title>
 </head>
 <body>

 <h1>Daftar Mahasiswa</h1>
 <ul>
 <?php foreach($mahasiswa as $mhs) : ?>
 		<li><a href="latihan3.php?Nama=<?= $mhs["Nama"]?>&NIK=<?= $mhs["NIK"] ?>&Email=<?= $mhs["Email"] ?>&Jurusan=<?= $mhs["Jurusan"] ?>&Gambar=<?= $mhs["Gambar"] ?>"><?= $mhs["Nama"] ?></a></li>
 <?php endforeach; ?>
 </ul>
 
 </body>
 </html>