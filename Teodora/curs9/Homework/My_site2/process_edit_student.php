<?php
//on submit, verify if the text field are filled(not empty)
if((!empty($_POST['FirstName'])) && (!empty($_POST['LastName']))
 && (!empty($_POST['score']))) {		
		//then create SQL query which updates the record
		//which has the ID from the hidden field with the 
		//values received by form		
		$FirstName = $_POST['FirstName'];		
		$LastName = $_POST['LastName'];
		$studentID = $_POST['ID'];
		$score = $_POST['score'];
		$course = $_POST['courselist'];		
			
	  			
		require_once ('connection.php');
		$sql_edit= "UPDATE students 
					SET  FirstName = '$FirstName', LastName = '$LastName',
					Course = '$course', score = '$score'
					WHERE ID = $studentID";
		//print ($sql_edit);
		$result = mysqli_query($db_conn,$sql_edit);
		//echo 'succes';

		//redirect to students.php
		header('Location:http://localhost/fasttrackit_php2/Teodora/curs9/Homework/My_site2/students.php');
		exit;
}
		