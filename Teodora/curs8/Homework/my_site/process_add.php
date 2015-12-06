<?php
//on submit, verify that both fields are filled;

$valid = true;

if($_SERVER['REQUEST_METHOD'] == "POST") {
	if(!empty($_POST['CourseName'])) {
		$course_name = $_POST['CourseName'];
		echo $course_name;
		echo '<br>';
	}
	else{
		echo "Please insert one course!";
		$valid = false;
	}
		if(!empty($_POST['Trainer'])) {
		$trainer = $_POST['Trainer'];
		echo $trainer;
	}
	else{
		echo "Please insert trainer name!";
		$valid = false;
	}
}
