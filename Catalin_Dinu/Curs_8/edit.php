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
		$sql = "SELECT * FROM courses WHERE ID = '" . $id . "'";
		$result = mysqli_query($db_conn, $sql) or die("Could not update" . mysqli_connect_error());
		$row = mysqli_fetch_assoc($result);
	}
}
else {
	if (isset($_POST["CourseName"]) && isset($_POST["Trainer"]) && $_POST["CourseName"] != "" && $_POST["Trainer"] != "") {
		$course_name = $_POST["CourseName"];
		$trainer = $_POST["Trainer"];
		$row_id = $_POST['row_id'];
		sql = "UPDATE Courses SET CourseName = '$course_name', Trainer = '$trainer' WHERE ID = '" . $row_id . "'";
		$result = mysqli_query($db_conn, sql) or die("Could not update" . mysqli_connect_error());
		header('location:list.php');
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
		<form method="post" action="edit.php">
			<table width="400" border="0" cellspacing="1" cellpadding="2">
				<tr>
					<td width="100">Course name</td>
					<td><input name="CourseName" required type="text" placeholder='<?php echo $row["CourseName"] ?>'>
					</td>
				</tr>
				<tr>
					<td width="100">Trainer</td>
					<td><input name="Trainer" required type="text" placeholder='<?php echo $row["Trainer"] ?>'>
				</td>
				</tr>
				<tr>
					<td width="100"></td>
				<td></td>
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


