<?php 
if (isset($_POST["submit"])) {
	if ($_POST["username"] == "admin" && $_POST["password"] == "123") {
		header("Location: admin.php");
		exit;
	} else {
		$error = true;
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Admin</title>
</head>
<body>

	<h1>Login Admin</h1>

<?php if(isset($error)) : ?>
	<p>Login Gagal</p>
<?php endif; ?>

<ul>
<form method="post">
	<li>
		<label for="username">Username</label>
		<input type="text" name="username" id="username">
	</li>
	<li>
		<label for="password">password</label>
		<input type="text" name="password" id="password">
	</li>
	<li>
		<button type="submit" name="submit">Login</button>
	</li>
</form>
</ul>

</body>
</html>