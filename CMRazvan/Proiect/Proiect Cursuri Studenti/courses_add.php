<?php

//error_reporting(0);
include ('connect.php');
$conn_add = new mysqli($server, $user, $pass, $dbname);
if (isset($_POST['valideazaadaugarea']) === TRUE) 
	{
		if ($conn_add->connect_error) 
			{
			    die("Conexiune gresita: " . $conn_add->connect_error);
			} 
					$sql = "INSERT INTO courses (`id`, `coursename`, `trainer`) VALUES (NULL, '". $_POST['numeCurs'] . "', '". $_POST['numeTrainer'] . "')";
				if ($conn_add->query($sql) === TRUE) 
			{
		   		header("Location: courses.php");
				exit;
			} 
				else 
			{
		   		echo "Erroare: " . $sql . "<br>" . $conn_add->error;
			}	
		}
	$conn_add->close();
?>

<html>
	<head>
		<title>Adauga Curs</title>
	</head>
		<body>
			<hr>
			<form class='curs_add' align="center" name="form" method="post" action="courses_add.php">
				<br>
				<input type="text" name="numeCurs" value="Nume Curs">
				<input type="text" name="numeTrainer" value="Nume Trainer">
				<input type="submit" name="valideazaadaugarea" value="Valideaza">
			</form>
			<a href="courses.php"><input type="submit" value="Inapoi la Lista"></a>
		</body>
</html>
<?php
print '<hr>';
include('courses.php');
?>