<?php
//on submit, verify if the text field are filled(not empty)
if(!empty($_POST['CourseName']) && (!empty($_POST['Trainer'])) {
		$course_name = $_POST['CourseName'];
		$trainer = $_POST['Trainer'];
		//then create SQL query which updates the record
		//which has the ID from the hidden field with the 
		//values received by form
		require_once ('connection.php');
		

		
}		