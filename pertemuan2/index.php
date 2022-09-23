<?php 
// ini adalah pertemuan 2 - PHP Dasar
// Sintaks PHP

// Standar OutPut
// echo, print
// print_r
// var_dump

// Penulisan sintaks PHP 
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

// Variabel dan tipe data
// Variabel
// TIdak boleh diawali oleh angka
$nama = "M Ikbal Tawakal";

// Operator
// Aritmatika
// + - * / %

$x = 20;
$y = 10;
echo " $x + $y";

// Penggabung String / Concatenation / concat
// .
$nama_depan = "Muhammad";
$nama_belakang = "Ikbal";
echo $nama_depan . " " . $nama_belakang;


// Assignment
// = , +=, -=, *=, /+, %=, .=

 $namaku = "ikbal";
 $namaku .= " ";
 $namaku .= "TAwakal";
 echo $namaku;

 // Perbandingan
 // <, >, <=, >=, ==

 var_dump(1 < 5);

 // Identitas (Cek Nilai dan tipe data)
 // ===, !==

 var_dump(1 === "1");

 // Logika
 // &&, ||, !
 $x = 10;
 var_dump($x < 20 && $x % 2 == 0);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Belajar PHP</title>
</head>
<body>
	<h1>Halo, Selamat Datang <?php echo $nama; ?></h1>
	<p><?php echo "ini adalah paragraf"; ?></p>
</body>
</html>