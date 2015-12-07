<style>
	div {
		width: 600px;
		margin-left: auto;
		margin-right: auto;	
		margin-top: 70px;			
	}
	.pull{
		margin-right: 35px;
	}
	.pull2{
		margin-right: 70px;
	}
</style>
<?php
//create a page called edit.php
//the page should accept a $_GET parameter called ID
//if the parameter is present, create SQL query to read the course
//details from database
require_once('connection.php');
if(isset($_GET['ID'])){
	$courseID = $_GET['ID'];
	$sql_details = "SELECT * FROM courses
					WHERE ID = $courseID";
	$result = mysqli_query($db_conn, $sql_details) or die 
	(error_reporting(E_ALL ^ E_DEPRECATED));
	$row = mysqli_fetch_array($result); 	
	//create a form with two text fields,pre-filled with the
	//values from the db: Course name and Trainer
	echo '<div>';
	echo '<form method = "post" action ="process_edit.php">';
	  	echo '<label for="CourseName"><strong>Course name: </strong></label>';
	  	echo '<input type = "text" name = "CourseName" value="'.$row['CourseName'].'">';
	  	echo '<br>';
	  	echo '<br>';
	  	echo '<label class="pull" for="Trainer"><strong>Trainer: </strong></label>';
	  	echo '<input type = "text" name = "Trainer" value ="'.$row['Trainer'].'">';
	  	echo '<br>';
	  	echo '<br>';
	  	echo '<label class="pull2" for="ID"><strong>ID: </strong></label>';
	  	echo '<input type = "password" name = "ID" value="'.$row['ID'].'">';
	  	echo '<br>';
	  	echo '<br>';
	  	echo '<input type = "submit" value = "UPDATE">';
	echo '</form>';
	echo '</div>';	
	
}//end if(isset)