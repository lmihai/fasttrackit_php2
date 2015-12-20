<?php
//create a page called delete_student.php
//the page should accept a $_GET parameter called ID
//if the parameter is present, create a SQL query to delete the student
require_once('connection.php');
if(isset($_GET['ID'])){
	$studentID = $_GET['ID'];
	$sql_delete = "DELETE FROM students 
					WHERE ID = $studentID";
	//print ($sql_delete);				
	$result = mysqli_query($db_conn,$sql_delete);
	if($result) {
		echo "<br>";
		echo "<h2>You successfully delete this student from database</h2>";
		echo "<br>";
		echo '<p><a href="students.php">Back to students list</p></a>';
	}else{
		echo "Error";
		error_reporting(E_ALL ^ E_DEPRECATED);
	}

}
//redirect to students.php