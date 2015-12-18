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
		$id = $_GET['id'];
		$sql = "SELECT students.ID as studentID, courses.ID as courseID, students.FirstName, students.LastName, students.Score, courses.CourseName FROM students LEFT JOIN courses ON students.Course = courses.ID WHERE students.ID = '" . $id . "'";
		$result = mysqli_query($db_conn, $sql) or die("Could not update" . mysqli_connect_error());
		$row = mysqli_fetch_assoc($result);
	}
?>
<html>
<head>
	<title>DETAILS</title>
</head>
<body>
<form method="post" action="students.php">
	<table width="400" border="0" cellspacing="1" cellpadding="2">
		<tr>
			<td width="100">First name</td>
			<td><?php echo $row["FirstName"] ?></td>
		</tr>
		<tr>
			<td width="100">Last name</td>
			<td><?php echo $row["LastName"] ?></td>
		</tr>
		<tr>
			<td width="100">Course</td>
			<td><?php echo $row["CourseName"] ?></td>
		</tr>
		<tr>
			<td width="100">Score</td>
			<td><?php echo $row["Score"] ?></td>
		</tr>
		<tr>
			<td width="100"></td>
			<td><input name="row_id" type="hidden" value="<?php echo $row["studentID"] ?>">
				<input name="edit_student" type="submit" value="Back">
			</td>
		</tr>
	</table>
</form>
</body>
</html>