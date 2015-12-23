<?php
$server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "school";


// Create connection
$db_conn = mysqli_connect($server, $db_user, $db_pass, $db_name);
if (!isset($_POST['btnSubmit'])) {
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$sql = "SELECT * FROM students WHERE ID = '" . $id . "'";
		$result = mysqli_query($db_conn, $sql) or die("Could not update" . mysqli_connect_error());
		$row = mysqli_fetch_assoc($result);
		$row_id = $row['ID'];
	}
}
else {
	$row_id = $_POST['row_id'];
}

?>
<html>
<body>
<form method="post" enctype="multipart/form-data" action="student_photo.php?" name="fileUpload">
	<input name="row_id" type="hidden" value="<?php echo $row_id ?>"><br/>
	Photo:<input required type="file" name="filePhoto" /><br/>
	<input type="submit" name="btnSubmit" value="Upload" />
</form>
</body>
</html>

<?php
if (isset($_POST["btnSubmit"])) {
	if ($_FILES['filePhoto']['error'] == UPLOAD_ERR_PARTIAL) {
		$error = 'Partial update! Full file was not uploaded';
	}
	if ($_FILES['filePhoto']['error'] === 0) {
		$student_id = $_POST['row_id'];
		if ($student_id) {
			echo "File uploaded." . "<br>";
			if ($_FILES['filePhoto']['type'] == 'image/gif'
				|| $_FILES['filePhoto']['type'] == 'image/png'
				|| $_FILES['filePhoto']['type'] == 'image/jpeg'
			) {
				$filename = $_FILES['filePhoto']['tmp_name'];
				$destination = "uploads/" . $_FILES['filePhoto']['name'];
				if (move_uploaded_file($filename, $destination)) {
					$sql = 'INSERT INTO Files (FileLocation) VALUES ("' . $destination . '")';
					mysqli_query($db_conn, $sql);
					if ($file_id = mysqli_insert_id($db_conn)) {
						$sql = 'UPDATE Students SET Photo = ' . $file_id . ' WHERE ID = ' . $student_id;
						mysqli_query($db_conn, $sql);
						header('location:students.php');
					}
					echo "File moved succesfully." . "<br>";
				} else {
					echo "Destination not writable, cannot move file.";
				}
			}

		} else {
			echo "Only gif, png or jpg files are allowed";
			die;
		}
	} else {
		echo "upload error: " . $_FILES['filePhoto']['error'];
		exit;
	}
}
?>
