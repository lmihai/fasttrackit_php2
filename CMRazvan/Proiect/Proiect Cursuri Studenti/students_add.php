<?php

//error_reporting(0);
include ('connect.php');
$conn = new mysqli($server, $user, $pass, $dbname);
if (isset($_POST['valideazaadaugareastudentului']) === TRUE) 
	{
		if ($conn->connect_error) 
			{
			    die("Conexiune gresita: " . $conn->connect_error);
			} 
					$sql = "INSERT INTO students (`id`, `firstname`, `lastname`, `course`, `score`)
					 VALUES (NULL, '". $_POST['fistname_add'] . "', '". $_POST['lastname_add'] ."', '". $_POST['course_add'] ."', '". $_POST['score_add'] ."')";
				if ($conn->query($sql) === TRUE) 
			{
		   		header("Location: students.php");
				exit;
			} 
				else 
			{
		   		echo "Erroare: " . $sql . "<br>" . $conn->error;
			}	
		}
	$conn->close();
?>

<html>
	<head>
		<title>Adauga Student</title>
	</head>
		<body>
			<hr>
			<form align="center" name="form" method="post" action="students_add.php">
				<br>
				<input type="text" name="fistname_add" value="Nume">
				<input type="text" name="lastname_add" value="Prenume">
				<!-- aici se face selectul din baza de date pentru cursurile existente si adaugare cursului -->
				<select name="course_add">
				<?php
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "school";

$connection = mysql_connect($server, $user, $pass, $dbname);

mysql_select_db($dbname,$connection);

$result = mysql_query("SELECT * FROM courses",$connection) or die('Cannot show tables ');


while($row = mysql_fetch_row($result)) 
{
	for ($i=0; $i < count($row); $i++) 
	{ 
		

	}
	echo "<option name='course_add' value='". $row[0] ."'>".  $row[1]."</option>";
}
				?>
				</select>
				<!-- <input type="text" name="course_add" value="Id Curs"> -->
				<input type="text" name="score_add" value="Nota">
				<input type="submit" name="valideazaadaugareastudentului" value="Adauga">
			</form>
			<a href="students.php"><input type="submit" value="Inapoi la Studenti"></a>
		
		</body>
</html>
<?php
print '<hr>';
include('students.php');
?>