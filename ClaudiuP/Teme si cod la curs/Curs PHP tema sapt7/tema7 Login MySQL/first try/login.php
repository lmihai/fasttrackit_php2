<?php

$host="localhost";
$user ="root";
$pass = "";
$db="tema7";

mysql_connect($host, $user, $pass);
mysql_select_db($db);

if (isset($_POST['username'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$sql = "SELECT * FROM users WHERE username='".$username."' AND password='".$password."' LIMIT 1";
	$res = mysql_query($sql);

	if (mysql_num_rows($res) == 1) {
		echo "You have succesfully logged in.";
		exit();
	} else {
		echo "Invalid Username or Password. Please try again.";
		exit();
	}
}
?>

<!DOCTYPE html PUBLIC>
<html>
	<head>
		<title>
			Tema7
		</title>

		<link rel="stylesheet" type="text/css" href="oddandeven.css" />

	</head>
	<body>
			<br><br><br><hr>
			<form method="post" action="login.php">
			Username: <input type="text" name="username" /><br><br>
			Password: <input type="password" name="password" /> <br><br>
			<input type="submit" name="submit" value="Log In" />
			<?php


			?>

		
	
	</body>
</html>

