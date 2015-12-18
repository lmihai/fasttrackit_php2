<?php 
error_reporting(E_ALL & ~E_NOTICE);
session_start();

if($_POST['submit']) {
	include_once("connection.php");
	$username = strip_tags($_POST['username']);
	$password = strip_tags($_POST['password']);

	$sql = "SELECT id, username, password FROM members WHERE username = '$username' AND activated = '1' LIMIT 1";
	$query = mysqli_query($dbCon, $sql);

	if ($query) {
		$row = mysqli_fetch_row($query);
		$userId = $row[0];
		$dbUsername = $row[1];
		$dbPassword = $row[2];
	}

	if ($username == $dbUsername && $password == $dbPassword) {
		$_SESSION['username'] = $username;
		$_SESSION['id'] = $userId;
		header('Location: user.php');
	} else {
		header('Location: badlogin.php');
	}
}

?>

<!DOCTYPE html PUBLIC>
<html>
	<head>
		<title>
			Tema7
		</title>

		<link rel="stylesheet" type="text/css" href="style.css" />

	</head>
	<body><center>

		<h1 id="h1">PHP MySQL Login</h1>
		
			<br><hr>
			<form method="post" action="index.php">
				<div class="login">
			<input type="text" placeholder="Username" name="username" /><br><br>
			<input type="password" placeholder="Password" name="password" /> <br><br>
			<input type="submit" name="submit" value="Log In" />
			</div>
			<div class="shadow"></div>
			<br><br>

			<p id="mycss">Se poate verifica loginul cu: </p>
			<p id="mycss">usernames: vlad, vlad2, ionica </p>
			<p id="mycss">passwords: password, pw, parola </p>
			
			<?php


			?>

		
	</center>
	</body>
</html>

