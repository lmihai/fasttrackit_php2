<?php

//when we open the page with a student ID in the URL,
//we want to display student's photo
//step 1: Connesct to mysql from php
	$server = 'localhost';
	$user = 'root'; 
	$pass = ''; 
	$db_name = 'school';

	$db_conn = mysqli_connect($server, $user, $pass, $db_name);


//step 2: Read the student ID from URL
	if (isset($_GET['ID'])) {
		$student_id = $_GET['ID'];
	}
	else {
		print 'No student ID provided.';
		exit;
	}	
//step 3: Read the Photo ID from Students Table
	$sql = 'SELECT Photo FROM students
			WHERE ID = ' . $student_id;
	$result = mysqli_query($db_conn, $sql);
	if($result)	{
			$row = mysqli_fetch_assoc($result);
			$photo_id = $row['Photo'];
			//echo $photo_id;
	}		
	else{
			print 'Error reading student info';
			exit;
		}
				
//read the photo location
	$sql2 = 'SELECT Filelocation FROM files
			WHERE ID = ' . $photo_id;
	$result2 = mysqli_query($db_conn, $sql2);
	if($result2) {
				$row2 = mysqli_fetch_assoc($result2);
				$file_location = $row2['Filelocation'];	
				//set the header for the image
				//header("Content-type: uploads/jpeg");
				//echo $file_location;		
			}
	else {
				print 'Error reading file info';
				exit;
			}


?>
<html>
	<body>
		<img src= "http://localhost/fasttrackit_php2/Teodora/curs9/<?php print $file_location; ?>" />
		<!-- atentie la adresa completa (path) pt imagine! -->
	</body>
</html>