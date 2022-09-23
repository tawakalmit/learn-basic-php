<?php 
$mahasiswa = [
    ["M Ikbal Tawakal", "3203282704940001", "Front End Developer", "tawakal.mit@gmail.com"],
    ["M Ikbal Tawakal", "3203282704940001", "Front End Developer", "tawakal.mit@gmail.com"],
    ["M Ikbal Tawakal", "3203282704940001", "Front End Developer", "tawakal.mit@gmail.com"]
]
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

    <?php foreach($mahasiswa as $mhs) : ?>
    <ul>
        <li>Nama : <?= $mhs[0]; ?></li>
        <li>NIK : <?= $mhs[1]; ?></li>
        <li>Jabatan : <?= $mhs[2]; ?></li>
        <li>Email : <?= $mhs[3]; ?></li>
    </ul>
    <?php endforeach; ?>

</body>
</html>