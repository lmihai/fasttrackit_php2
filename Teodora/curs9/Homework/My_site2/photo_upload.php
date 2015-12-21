<?php
//on submit, verify that a file was correctly uploaded and the file
//it's an image(jpg or png)
/*
echo '<pre>';
var_dump($_POST);
echo '<hr>';
echo '<pre>';
var_dump($_FILES);
*/
if($_FILES['filePhoto']['error'] === 0) {
	if($_FILES['filePhoto']['type'] == "image/jpeg" 
			|| $_FILES['filePhoto']['type'] == "image/png") {
		//store the photo in the Students table
		//first move file from temp to permanent location (using move_uploaded_file function)
		//parameter: filename and destination
		$filename = $_FILES['filePhoto']['tmp_name'];
		$destination = 'uploads/' . $_FILES['filePhoto']['name'];
		//check student ID before moving the file to its permanent location
		$studentId = $_POST['studentId']; 
		//print $studentId;
		if(move_uploaded_file($filename, $destination)){
			//insert the file information in the database
			//store the photo in the Students table
			require_once('connection.php');
			$sql = 'INSERT INTO Files (Filelocation) 
						VALUES ("' . $destination . '")';
						$result1 = mysqli_query($db_conn, $sql);
						if($file_id = mysqli_insert_id($db_conn)){
							//echo "Succes";
							//var_dump($file_id);
							
							$sql2 = 'UPDATE students SET Photo = ' . $file_id . '
						 	WHERE ID = " '. $studentId . '"';
							$result2 = mysqli_query($db_conn, $sql2);
							if($result1 and $result2){
								echo 'Your photo was successfully uploaded!';
								echo '<br />';
								echo '<a href = "students.php">Go back to the students list </a>';
							}
			}
		else {
				print 'Destination not writable, cannot move file';
			}		
	}
		else{
			echo "Only png or jpeg files allowed.";
		}
	}	
}
else {
	print "Upload error: " . $_FILES['filePhoto']['error'];
	
}
