<?php
$server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "school";


// Create connection
$db_conn = mysqli_connect($server, $db_user, $db_pass, $db_name);
$sql = "CREATE TABLE Files (ID INT NOT NULL AUTO_INCREMENT, Filelocation TEXT NOT NULL, PRIMARY KEY (ID))";
mysqli_query($db_conn, $sql);
$sql = "ALTER TABLE Students ADD Photo INT";
mysqli_query($db_conn, $sql);
echo "<pre>";
var_dump($_POST);
echo "<hr>";
var_dump($_FILES);
if ($_FILES['filePhoto']['error'] == UPLOAD_ERR_PARTIAL) {
	$error = 'Partial update! Full file was not uploaded';
	}
if ($_FILES['filePhoto']['error'] === 0) {
	$student_id = $_POST['studentID'];
	if ($student_id) {
		echo "File uploaded." . "<br>";
			if ($_FILES['filePhoto']['type'] == 'image/gif'
				|| $_FILES['filePhoto']['type'] == 'image/png'
				|| $_FILES['filePhoto']['type'] == 'image/jpeg') {
				$filename = $_FILES['filePhoto']['tmp_name'];
				$destination = "uploads/" . $_FILES['filePhoto']['name'];
					if(move_uploaded_file($filename, $destination)) {
						$sql = 'INSERT INTO Files (FileLocation) VALUES ("' . $destination . '")';
						mysqli_query($db_conn, $sql);
						if ($file_id = mysqli_insert_id($db_conn)) {
							$sql = 'UPDATE Students SET Photo = ' . $file_id . ' WHERE ID = ' . $student_id;
							mysqli_query($db_conn, $sql);
							}
							echo "File moved succesfully." . "<br>";
						}
					else {
					echo "Destination not writable, cannot move file.";
				}
			}

		}
	else {
		echo "Only gif, png or jpg files are allowed";
		die;
		}
}
else {
	echo "upload error: " . $_FILES['filePhoto']['error'];
	exit;
}

?>
