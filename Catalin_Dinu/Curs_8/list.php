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
$sql = "SELECT CourseName, Trainer FROM courses";
$result = mysqli_query($db_conn, $sql);
if (mysqli_num_rows($result) > 0) {
	echo "<table style='width:100%'><tr><th>Course name</th><th>Trainer</th><th colspan='2'>Operations</th></tr>";
	// output data of each row
	while($row = mysqli_fetch_assoc($result)) {
		echo "<tr><td>" . $row["CourseName"] . "</td><td>" . $row["Trainer"] . "</td><td><a href='edit.php?ID=[course ID]'>edit</a></td><td>" . "</td><td><a href='delete.php?ID=[course ID]'>delete</a></td></tr>" . "<br>";
	}
	echo "</table>" . "<br>";
}
else {
	echo "0 results";
}

echo "<a href='add.php'>Add a new course</a>";

mysqli_close($db_conn);
?>