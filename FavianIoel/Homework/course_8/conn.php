<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

//This adds a new field.
if(isset($_POST['addcourse'])) {
	if (isset($_POST["CourseName"]) && isset($_POST["Trainer"])){
		$course_Name = $_POST['CourseName'];
		$trainer = $_POST['Trainer'];
		$sql_add = "INSERT INTO Courses (CourseName, Trainer) VALUES ('$course_Name', '$trainer')";
		$result = mysqli_query($conn, $sql_add);
		header('location:index.php');
		mysqli_close($conn);
	}
	else {
		echo "<center>You need to have both course name and trainer name, please try again.";
	}
}


?>
