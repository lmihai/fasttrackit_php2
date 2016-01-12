<?php
include ('connect.php');
// Create connection
$conn = new mysqli($server, $user, $pass, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM courses WHERE id = '".$_GET['courses_update']."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "
	<hr>
	<br>
	<form align='center' name='form' method='post' action=''>
		<table align='center'>
			<tr>
				<th>ID</th>
				<th>Nume Curs</th>
				<th>Nume Profesor</th>
			</tr>
			<tr>
				<td><input type='text' name='id' value='". $row['id'] ."'></td>
				<td><input type='text' style='width: 200px;' name='courses_coursename_update' value='". $row['coursename'] ."'></td>
				<td><input type='text' name='courses_trainer_update' value='". $row['trainer'] ."'></td>
				<td><input type='submit' name='courses_validation_update' value='Valideaza'></td>
       </tr></table>
       				
       </form><br><hr>";
    }
} else {
    echo "eroare la citirea ID";
}
if (isset($_POST['courses_validation_update'])) 
	{
		if($_POST['id']>0);
		{	
			$conn = new mysqli($server, $user, $pass, $dbname);
			$sql = "UPDATE courses SET coursename='". $_POST['courses_coursename_update'] . "', trainer='". $_POST['courses_trainer_update'] . "' WHERE id ='". $_POST['id'] . "'";
				if ($conn->query($sql) === TRUE) 
					{
						header("Location: courses.php");
						exit;
					} 
						else 
							{
							    echo "Erroare: " . $sql . "<br>La Scrierea In Baza de date!!" . $conn->error;
							}
		}
			
	}

include 'courses.php';

?>