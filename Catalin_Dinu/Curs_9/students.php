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
$sql = "SELECT courses.CourseName, students.ID, students.FirstName, students.LastName FROM students LEFT JOIN courses ON students.Course = courses.ID GROUP BY students.ID";
$result = mysqli_query($db_conn, $sql);
if (mysqli_num_rows($result) > 0) {
	echo "<table width='80%' border=0>
			<tr bgcolor='#CCCCCC'>
				<td>Student name</td>
				<td>Course</td>
				<td>Operations</td>
			</tr>";
	// output data of each row
	while ($row = mysqli_fetch_assoc($result)) {
		echo "<tr>";
		echo "<td>" . $row['FirstName'] ." " .  $row['LastName']. "</td>";
		echo "<td>" . $row['CourseName'] . "</td>";
		echo "<td><a href=\"edit_student.php?id=$row[ID]\">Edit</a> | <a href=\"delete_student.php?id=$row[ID]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a> | <a href=\"\">Upload photo</a> | <a href=\"\">Upload CV</a></td>";
	}
	echo "</table>";
	echo "<br>";
}
else {
	echo "0 results";
}

echo "<a href='add_student.php'>Add a new student</a>";

mysqli_close($db_conn);
?>