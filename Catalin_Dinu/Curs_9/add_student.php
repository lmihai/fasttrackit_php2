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
if(isset($_POST['add_student'])) {
	if (isset($_POST["FirstName"]) && isset($_POST["LastName"]) && isset($_POST["CourseName"]) && isset($_POST["Score"]) && $_POST["FirstName"] != "" && $_POST["LastName"] != ""&& $_POST["CourseName"] != "" && $_POST["Score"] != "" ) {
		$first_name = $_POST["FirstName"];
		$last_name = $_POST["LastName"];
		$course = $_POST["CourseName"];
		$score = $_POST["Score"];
		$sql1 = "INSERT INTO students (FirstName, LastName, Course, Score) VALUES ('$first_name', '$last_name', '$course', '$score')";
		$result1 = mysqli_query($db_conn, $sql1);
		header('location:students.php');
		mysqli_close($db_conn);
		}
	else {
		echo "Please fill in all of the fields";
	}
}


?>

<html>
<head>
	<title>ADD</title>
</head>
<body>
<form method="post" action="add_student.php">
	<table width="400" border="0" cellspacing="1" cellpadding="2">
		<tr>
			<td width="100">Add student</td>
			<td></td>
		</tr>
		<tr>
			<td width="100">First name</td>
			<td><input name="FirstName" type="text"></td>
		</tr>`
		<tr>
			<td width="100">Last name</td>
			<td><input name="LastName" type="text"></td>
		</tr>
		<tr>
			<td width="100">Course</td>
			<td><input list="browsers" name="CourseName">
				<datalist id="browsers">
					<?php
					$sql1 = "SELECT * FROM courses";
					$result1 = mysqli_query($db_conn, $sql1);
					while ($row1 = mysqli_fetch_assoc($result1)) {
						echo "<option value=$row1[ID]>$row1[CourseName]</option>";
					}
					?>
				</datalist>
			</td>
			</td>
		</tr>
		<tr>
			<td width="100">Score</td>
			<td><input name="Score" type="text"></td>
		</tr>
		<tr>
			<td width="100"></td>
			<td>
				<input name="add_student" type="submit" value="Add student">
			</td>
		</tr>
	</table>
</form>
</body>
</html>
