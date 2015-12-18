<?php
$server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "school";


// Create connection
$db_conn = mysqli_connect($server, $db_user, $db_pass, $db_name);
// Check connection
if (!$db_conn) {
	die("Connection failed: " . mysqli_connect_error());
}

if (isset($_GET['id'])) {
	$student_id = $GET['ID'];
}
else {
	echo "No student ID provided";
	exit;
}
$sql = "SELECT Photo FROM students WHERE ID = ' . $studenrt_id'";
$result = mysqli_query($db_conn, $sql) or die("Could not update" . mysqli_connect_error());
if ($result) {
	$row = mysqli_fetch_assoc($result);
	$photo_id = $row['Photo'];
}
else {
	echo"Error reading student info";
	exit;
}
$sql = "SELECT FileLocation FROM Photos WHERE ID = ' . $photo_id'";
$result = mysqli_query($db_conn, $sql) or die("Could not update" . mysqli_connect_error());
if ($result) {
	$row = mysqli_fetch_assoc($result);
	$file_location = $row['FileLocation'];
}
else {
	echo"Error reading file info";
	exit;
}
?>
<html>
<body>
<img src="<?php echo $file_location; ?>">
</body>
</html>
