<?php
include ('connect.php');

if (isset($_POST['validez_editareabb'])) 
	{
		if($_POST['id_modificare']);
		{	
			$conn_edit = new mysqli($server, $user, $pass, $dbname);
			$sql = "UPDATE students SET firstname='". $_POST['fistname_modificare'] . "', lastname='". $_POST['lastname_modificare'] . "', course='". $_POST['curs_modificare'] . "', score='". $_POST['score_modificare'] . "' WHERE id ='". $_POST['id_modificare'] . "'";
				if ($conn_edit->query($sql) === TRUE) 
					{
					 	header("Location: students.php");
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
		<title>Editeaza Student</title>
	</head>
		<body>
			<hr>
			<br>
			<form align="center" name="form" method="post" action="">
				<input type="text" name="id_modificare" value="Id">
				<input type="text" name="fistname_modificare" value="Prenumele">
				<input type="text" name="lastname_modificare" value="Nume Familie">
				<input type="text" name="curs_modificare" value="Curs">
				<input type="text" name="score_modificare" value="Nota">
				<input type="Submit" name="validez_editarea" value="Valideaza Modificarea">
			</form>
			<a href="students.php"><input type="submit" value="Inapoi la Studenti"></a>
		</body>
</html>
<?php
print '<hr>';
include('students.php');
?>
