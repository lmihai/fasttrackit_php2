<?php
include ('connect.php');

$conn_delete_course = new mysqli($server, $user, $pass, $dbname);

if (isset($_GET['id_delete_direct'])) {
	$id = $_GET['id_delete_direct'];
	$conn_delete_course = new mysqli($server, $user, $pass, $dbname);
	$sql = "DELETE FROM courses WHERE id ='". $id ."' ";
	if ($conn_delete_course->query($sql) === TRUE) {
		echo "<br><h1>Ati <b>STERS</b> un curs cu id:'". $id . "' cu succes </h1><br>";
		header("Location: courses.php");
		exit;	
	} else {
		echo "Erroare: " . $sql . "<br>" . $conn_delete_course->error;
	}
} elseif (isset($_POST['sterge_curs'])) {
		if($_POST['id_delete']>0);
			{
				$conn_delete_course = new mysqli($server, $user, $pass, $dbname);
				$idd = $_POST['id_delete'];
				$sql = "DELETE FROM courses WHERE id ='". $idd . "' ";
					if ($conn_delete_course->query($sql) === TRUE)
						{
			  				header("Location: courses.php");
							exit;
						} 
						else 
						{
			    			echo "Erroare: " . $sql . "<br>" . $conn_delete_course->error;
						}
			}
}
$conn_delete_course->close();
?>
<html>
	<head>
		<title>Sterge Curs</title>
	</head>
		<body>
			<hr>
			<form align="center" name="form_delete" method="post" action="">
				<input type="text" name="id_delete" value="Id Stergere">
				<input type="Submit" name="sterge_curs" value="Sterge ID">
			</form>
			<a href="courses.php"><input type="submit" value="Inapoi la Lista"></a>
		</body>
</html>
<?php
print '<hr>';
include('courses.php');
?>
