<?php 
require "functions.php";

if(isset($_POST['login'])) {

	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

	// cek username
	if(mysqli_num_rows($result) === 1){
		// cek password
		$row = mysqli_fetch_assoc($result);
		if (password_verify($password, $row["password"])) {
			header("Location: index.php");
			exit;
		}
	}

	$error = true;


}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
</head>
<body>

	<h1>Login</h1>

	<?php if(isset($error)) : ?>
		<p>username/password salah</p>
	<?php endif; ?>

	<form method="post">
		<ul>
			<li>
				<label for="username">Username</label>
				<input type="text" name="username" id="username">
			</li>
			<li>
				<label for="password">Password</label>
				<input type="password" name="password" id="username">
			</li>
			<li><button type="submit" name="login">Login</button></li>
		</ul>
	</form>

</body>
</html>