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
$sql = "SELECT students.ID as studentID, courses.ID as courseID, students.FirstName, students.LastName, courses.CourseName FROM students LEFT JOIN courses ON students.Course = courses.ID";
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
		echo "<td><a href='student_details.php?id=$row[studentID]'>" . $row['FirstName'] ." " .  $row['LastName']. "</a></td>";
		echo "<td>" . $row['CourseName'] . "</td>";
		echo "<td><a href=\"edit_student.php?id=$row[studentID]\">Edit</a> | <a href=\"delete_student.php?id=$row[studentID]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a> | <a href=\"student_photo.php?id=$row[studentID]\">Upload photo</a> | <a href=\"student_cv.php?id=$row[studentID]\">Upload CV</a></td>";
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