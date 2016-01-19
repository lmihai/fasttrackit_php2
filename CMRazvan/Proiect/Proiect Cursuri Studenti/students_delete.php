<?php
include ('connect.php');

$conn_delete_student = new mysqli($server, $user, $pass, $dbname);

if (isset($_GET['id_delete'])) {
	$id = $_GET['id_delete'];
	$conn_delete_student = new mysqli($server, $user, $pass, $dbname);
	$sql = "DELETE FROM students WHERE id ='". $id . "' ";
	
	if ($conn_delete_student->query($sql) === TRUE) {
		echo "<br><h1>Ati <b>STERS DIRECT</b> un Student cu id:'". $id . "' cu succes </h1><br>";
		header("Location: students.php");
		exit;	
	} else {
		echo "Erroare: " . $sql . "<br>" . $conn_delete_student->error;
	}
} elseif (isset($_POST['sterge'])=== TRUE) {
		if($_POST['id_deletes']);
			{
				$conn_delete_student = new mysqli($server, $user, $pass, $dbname);
				
				$sqll = "DELETE FROM students WHERE id ='". $_POST['id_deletes'] . "' ";

					if ($conn_delete_student->query($sqll) === TRUE)
						{
			  			header("Location: students.php");
						exit;
						} 
						else 
						{
			    			echo "Erroare: " . $sqll . "<br>" . $conn_delete_student->error;
						}
			}
}
$conn_delete_student->close();
?>
<html>
	<head>
		<title>Sterge Student</title>
	</head>
		<body>
			<hr>
			<form align="center" name="form_delete" method="post" action="">
				<input type="text" name="id_deletes" value="Id Stergere">
				<input type="Submit" name="sterge" value="Sterge ID">
			</form>
			<a href="students.php"><input type="submit" value="Inapoi la Studenti"></a>
		</body>
</html>

<?php
print '<hr>';
include('students.php');
?>