<?php 

require('connect.php');

if(isset($_GET['id'])){
	$courseID = $_GET['id'];
	//$courseID = mysqli_real_escape_string($_GET['id']); 
	$sql_delete = "DELETE FROM Courses WHERE ID = $courseID";		
	print ($sql_delete);
	$result = mysqli_query($db_conn,$sql_delete);

	if($result) {
		//echo "Congratulations. You have deleted this course succesfully.";
		header('location:list.php');
		// echo $courseID;

	} else {
		echo "Error";
		error_reporting(E_ALL ^ E_DEPRECATED);
	}

}

?>