<?php
//on submit, verify if the text field are filled(not empty)
if((!empty($_POST['CourseName'])) && (!empty($_POST['Trainer'])) ) {		
		//then create SQL query which updates the record
		//which has the ID from the hidden field with the 
		//values received by form		
		$course_name = $_POST['CourseName'];		
		$trainer = $_POST['Trainer'];
		$courseID = $_POST['ID'];
		require ('conn.php');
		$sql_edit= "UPDATE courses 
					SET  CourseName = '$course_name', Trainer = '$trainer'
					WHERE ID = $courseID";
		//print ($sql_edit);
		$result = mysqli_query($conn,$sql_edit);
		//redirect to list.php
		header('location:index.php');
		exit;
}
		
		