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
// $sql = "SELECT * FROM courses";
$sql = "SELECT courses.ID, courses.CourseName, courses.Trainer, Count(students.ID) AS number FROM courses LEFT JOIN students ON students.Course = courses.ID GROUP  BY courses.ID";
$result = mysqli_query($db_conn, $sql);
if (mysqli_num_rows($result) > 0) {
	echo "<table width='80%' border=0>
			<tr bgcolor='#CCCCCC'>
				<td>Course name</td>
				<td>Trainer</td>
				<td>Operations</td>
				<td>Students</td>
			</tr>";
	// output data of each row
	while ($row = mysqli_fetch_assoc($result)) {
		echo "<tr>";
		echo "<td>" . $row['CourseName'] . "</td>";
		echo "<td>" . $row['Trainer'] . "</td>";
		echo "<td><a href=\"edit.php?id=$row[ID]\">Edit</a> | <a href=\"delete.php?id=$row[ID]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
		echo "<td>" . $row['number'] . "</td>";
	}
	echo "</table>";
	echo "<br>";
}
else {
	echo "0 results";
}

echo "<a href='add.php'>Add a new course</a>";

mysqli_close($db_conn);
?>

