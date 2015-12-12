<?php
//on submit, verify that both fields are filled;

$valid = true;

if($_SERVER['REQUEST_METHOD'] == "POST") {
	if(!empty($_POST['CourseName'])) {
		$course_name = $_POST['CourseName'];
		//echo $course_name;
		//echo '<br>';
	}
	else{
		echo "Please insert one course!";
		$valid = false;
	}
		if(!empty($_POST['Trainer'])) {
		$trainer = $_POST['Trainer'];
		//echo $trainer;
	}
	else{
		echo "Please insert trainer name!";
		$valid = false;
	}
}

if($valid){	
//connect to db
require_once('connection.php');

//create a SQL query to insert the new course in db.
$sql_add= "INSERT INTO courses (CourseName, Trainer) 
			VALUES ('$course_name', '$trainer')";
$result = mysqli_query($db_conn,$sql_add);
echo "<strong>Success!</strong><br>";
echo "Your course named: " . $course_name . " with trainer: " .$trainer. 
' was successfully added in database!';
echo '<br>';
echo '<a href = "list.php">Go back to the list </a>';
}
else{
	echo "ERROR";
	error_reporting(E_ALL ^ E_DEPRECATED);
}