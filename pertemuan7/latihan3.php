<?php 
if(!isset($_GET["Nama"]) || !isset($_GET["NIK"]) || !isset($_GET["Email"]) || !isset($_GET["Jurusan"]) || !isset($_GET["Gambar"]) ){
	header("Location: latihan2.php");
	exit;
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Detail Mahasiswa</title>
</head>
<body>

	<ul>
		<li><img src="img/<?= $_GET["Gambar"] ?>"></li>
		<li><?= $_GET["Nama"] ?></li>
		<li><?= $_GET["NIK"] ?></li>
		<li><?= $_GET["Email"] ?></li>
		<li><?= $_GET["Jurusan"] ?></li>
	</ul>

<a href="latihan2.php">Kembali ke Daftar Mahasiswa</a>

</body>
</html>