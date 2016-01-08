<?php 

require('conn.php'); 
//READ THE STUDENT ID FROM URL
if (isset($_GET['ID'])) {
	$student_id = $_GET['ID'];
}
else {
	echo "No student ID provided";
	exit;
}

//RAD THE PHOT ID FROM STUDENTS TABLE

$sql = 'SELECT Photo FROM Students WHERE  ID =' . $student_id;
$result = mysqli_query($conn, $sql);
if ($result) { 
	$row = mysqli_fetch_assoc($result);
	$photo_id = $row['Photo'];
}
else {
	echo "Error reading student info";
	exit;
}

//READ THE PHOTO LOCATION

$sql = 'SELECT FileLocation FROM Photos WHERE ID = ' .$photo_id;
$result = mysqli_query($conn, $sql);
if ($result) {
	$row = mysqli_fetch_assoc($result);
	$file_location = $row['FileLocation'];
}
else {
	echo "Error reading file info";
	exit;
}
?>
<html>
<head>
	<title>Display the photo</title>
</head>
<body>
<img src="<?php print $file_location; ?>">
</body>
</html>