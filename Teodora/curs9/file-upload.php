<?php
print "<pre>";
var_dump($_POST);
print "<hr>";
var_dump($_FILES);//ALL the information about the uploaded file
					//stored in the $_FILES variable

	/*
	name = file name of the uploaded file
	type = the mime type of the uploaded file
	tmp_name = the temporary location of the uploaded file
			(we need to copy it to a permanent location)
	error = the error code(if no errors value will be zero)		
	size = the file size of uploaded file in bytes
	*/

//VALIDATING UPLOAD ERROR CODES
//partial update
/*
if($_FILES['filePhoto']['error'] == UPLOAD_ERR_PARTIAL){
	$error = 'Partial update! Full file was not uploaded';
}	
*/


/*
let's create the tables
after uploading, validating and moving the files to permanent location we need three things:
 - insert the file information in the Files table
 - retrieve the ID of the new entry
 - store that ID in the Students table,for the correct student.

 But before, let's make sure we have student ID

*/
	$server = 'localhost';
	$user = 'root'; 
	$pass = ''; 
	$db_name = 'school';
	$db_conn = mysqli_connect($server, $user, $pass, $db_name);

	//create table Files	
	$sql = "CREATE TABLE Files (
		ID INT NOT NULL AUTO_INCREMENT,
		Filelocation TEXT NOT NULL,		
		PRIMARY KEY (ID)
		);";

	mysqli_query($db_conn, $sql);

	//add Photo column to students table
	$sql2 = "ALTER TABLE students ADD Photo INT;";
	mysqli_query($db_conn, $sql2);


//test for file upload susscess: if success print
//"File updoaded" else print "Upload error:[error number]".
if($_FILES['filePhoto']['error'] === 0) {
	//update file-upload to only allow gif, png and jpeg file types.
	if($_FILES['filePhoto']['type'] == 'image/gif'
		|| $_FILES['filePhoto']['type'] == 'image/png'
		|| $_FILES['filePhoto']['type'] == 'image/jpeg') {
			//print "File uploaded";
			//let's move the file to the permanent location
			$filename = $_FILES['filePhoto']['tmp_name'];
			$destination = 'uploads/' . $_FILES['filePhoto']['name'];
			//check student ID before moving the file to its permanent location
			$student_id = $_POST['studentId']; //din form!
				if(!$student_id) {
					print 'Please provide a student ID.';
					exit;
				}
					if(move_uploaded_file($filename, $destination)) {
						//insert the file information in the database
						//print 'File moved succesfully';
						$sql3 = 'INSERT INTO Files (Filelocation) 
						VALUES ("' . $destination . '")';
						mysqli_query($db_conn, $sql3);
						if($file_id = mysqli_insert_id($db_conn)){
							//echo "Succes";
							//var_dump($file_id);
							$sql4 = 'UPDATE students SET Photo = ' . $file_id . '
						 	WHERE ID = ' . $student_id;
							mysqli_query($db_conn, $sql4);
						}
					}
					else {
						print 'Destination not writable, cannot move file';
					}				
	} else {
		print "Only gif, png or jpeg files allowed";
		die;
	}
}
 else {
	print "Upload error: " . $_FILES['filePhoto']['error'];
	exit;
}
?>