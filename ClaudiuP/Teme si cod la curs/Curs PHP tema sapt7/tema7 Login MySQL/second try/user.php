<?php 
error_reporting(E_ALL & ~E_NOTICE);
session_start();

if (isset($_SESSION['id'])) {
	$userId = $_SESSION['id'];
	$username = $_SESSION['username'];
	
} else {
	header('Location: index.php');
	die();
}



?>

<!DOCTYPE html PUBLIC>
<html>
	<head>
		<title>
			Tema7
		</title>

	</head>
	<body><center>

	<?php 

		echo "<br><p>Congratulations, <strong>" . $username . "</strong>, you are succesfully logged in.";
		echo " Your user ID is " . $userId . ".<br><br>";

	?>
	<form action="logout.php">
		<input type="submit" value="Log Out." />
	</center>
	</body>
</html>
