<?php
//on submit, verify that all fields are correctly filled
	
$valid = true;

if($_SERVER['REQUEST_METHOD'] == "POST") {
	if(!empty($_POST['FirstName'])) {
		$first_name = $_POST['FirstName'];
		
	}
	else{
		echo "Please insert your first name!";
		$valid = false;
	}
	if(!empty($_POST['LastName'])) {
		$last_name = $_POST['LastName'];
		
	}
	else{
		echo "Please insert your last name!";
		$valid = false;
	}
		if(!empty($_POST['courselist'])) {
		$course = $_POST['courselist'];

	}
	else{
		echo "Please select one course";
		$valid = false;
	}
	if(!empty($_POST['score'])) {
		$score = $_POST['score'];
		
	}
	else{
		echo "Please insert score for this course!";
		$valid = false;
	}
}
if($valid){	
	/* verificare
	print'ok';
	echo 'Datele introduse:<br>';
	echo 'Nume:' . $first_name;
	echo 'Prenume: ' . $last_name;
	echo 'Cursul: ' . $course;
	echo 'Nota: ' . $score;
	*/
	
	// create a SQL query to insert the new student in the database
	
}

//redirect to students.php	