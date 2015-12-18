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

if (!isset($_POST['update'])) {
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$sql = "SELECT * FROM students WHERE ID = '" . $id . "'";
		$result = mysqli_query($db_conn, $sql) or die("Could not update" . mysqli_connect_error());
		$row = mysqli_fetch_assoc($result);
	}
}
else {
	if (isset($_POST["FirstName"]) && isset($_POST["LastName"]) && isset($_POST["CourseName"]) && isset($_POST["Score"]) && $_POST["FirstName"] != "" && $_POST["LastName"] != ""&& $_POST["CourseName"] != "" && $_POST["Score"] != "" ) {
		$first_name = $_POST["FirstName"];
		$last_name = $_POST["LastName"];
		$course = $_POST["CourseName"];
		$score = $_POST["Score"];
		$row_id = $_POST['row_id'];
		$sql = "UPDATE students SET FirstName = '$first_name', LastName = '$last_name', Course = '$course' , Score = '$score' WHERE ID = '" . $row_id . "'";
		$result = mysqli_query($db_conn, $sql) or die("Could not update" . mysqli_connect_error());
		header('location:students.php');
		mysqli_close($db_conn);
		}
	else {
		echo "You need to have both course name and trainer";
	}
}
?>
<html>
<head>
	<title>EDIT</title>
</head>
	<body>
		<form method="post" action="edit_student.php">
			<table width="400" border="0" cellspacing="1" cellpadding="2">
				<tr>
					<td width="100">First name</td>
					<td><input name="FirstName" required type="text" placeholder='<?php echo $row["FirstName"] ?>'></td>
				</tr>
				<tr>
					<td width="100">Last name</td>
					<td><input name="LastName" required type="text" placeholder='<?php echo $row["LastName"] ?>'></td>
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
				</tr>
				<tr>
					<td width="100">Score</td>
					<td><input name="Score" required type="text" placeholder='<?php echo $row["Score"] ?>'></td>
				</tr>
				<tr>
					<td width="100"></td>
					<td><input name="row_id" type="hidden" value="<?php echo $row["ID"] ?>">
						<input name="update" type="submit" value="Update">
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>


