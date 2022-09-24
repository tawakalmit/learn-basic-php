<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Latihan Array</title>
	<style>
		.kotak {
			width: 30px;
			height: 30px;
			background-color: green;
			text-align: center;
			line-height: 30px;
			margin: 3px;
			float: left;
			transition: 1s;
			border-radius: 5px;
			color: white;
			cursor: pointer;
		}

		.kotak:hover {
			transform: rotate(360deg);
		}
	</style>
</head>
<body>

<?php 
$angka = [[1,2,3],[4,5,6],[7,8,9]];
?>

<?php foreach($angka as $a) : ?>
	<?php foreach($a as $b) : ?>
	<div class="kotak"><?= $b; ?></div>
	<?php endforeach; ?>
<?php endforeach; ?>


</body>
</html>