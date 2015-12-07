<?php
require_once('connection.php');
if(isset($_GET['ID'])){
	$courseID = $_GET['ID'];
	$sql_delete = "DELETE FROM courses 
					WHERE ID = $courseID";
	//print ($sql_delete);				
	$result = mysqli_query($db_conn,$sql_delete);
	if($result) {
		echo "<br>";
		echo "<h2>You successfully delete this course</h2>";
		echo "<br>";
		echo '<p><a href="list.php">Back to list</p></a>';
	}else{
		echo "Error";
		error_reporting(E_ALL ^ E_DEPRECATED);
	}

}