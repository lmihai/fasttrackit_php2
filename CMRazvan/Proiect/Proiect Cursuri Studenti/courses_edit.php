<?php
//error_reporting(0);
include ('connect.php');

if (isset($_POST['validez_editarea'])) 
	{
		if($_POST['id_modificare']>0);
		{	
			$conn_edit = new mysqli($server, $user, $pass, $dbname);
			$sql = "UPDATE courses SET coursename='". $_POST['coursename_modificare'] . "', trainer='". $_POST['trainer_modificare'] . "' WHERE id ='". $_POST['id_modificare'] . "'";
				if ($conn_edit->query($sql) === TRUE) 
					{
						header("Location: courses.php");
						exit;
					} 
						else 
							{
							    echo "Erroare: " . $sql . "<br>" . $conn_edit->error;
							}
		}
			$conn_edit->close();
	}
?>
<html>
	<head>
		<title>Editeaza Curs</title>
	</head>
		<body>
			<hr>
			<br>
			<form align="center" name="form" method="post" action="">
				<input type="text" name="id_modificare" value="Id">
				<input type="text" name="coursename_modificare" value="Nume Curs">
				<input type="text" name="trainer_modificare" value="Nume Trainer">
				<input type="Submit" name="validez_editarea" value="Valideaza Modificarea">
			</form>
			<a href="courses.php"><input type="submit" value="Back to List"></a>
		</body>
</html>
<?php
print '<hr>';
include('courses.php');
?>
