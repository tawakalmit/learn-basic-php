<?php 
// pengulangan pada array
// for / foreach

$angka = [3, 6, 8, 9, 4, 1, 2, 5, 99];

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Latihan 1</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>

<?php for ($i=0; $i < count($angka); $i++) : ?>
    <div class="kotak"><?= $angka[$i]; ?></div>
<?php endfor; ?>

<div class="clear"></div>

<?php foreach ( $angka as $a ) : ?>
    <div class="kotak"><?= $a; ?></div>
<?php endforeach; ?>
</body>
</html>