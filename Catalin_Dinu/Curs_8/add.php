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
if(isset($_POST['add_course'])) {
	if (isset($_POST["CourseName"]) && isset($_POST["Trainer"]) && $_POST["CourseName"] != "" && $_POST["Trainer"] != "") {
		$course_name = $_POST["CourseName"];
		$trainer = $_POST["Trainer"];
		$sql = "INSERT INTO courses (CourseName, Trainer) VALUES ('$course_name', '$trainer')";
		$result = mysqli_query($db_conn, $sql);
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
	<title>ADD/</title>
</head>
<body>
<form method="post" action="add.php">
	<table width="400" border="0" cellspacing="1" cellpadding="2">

		<tr>
			<td width="100">Course name</td>
			<td><input name="CourseName" type="text" id="CourseName"></td>
		</tr>

		<tr>
			<td width="100">Trainer</td>
			<td><input name="Trainer" type="text" id="Trainer"></td>
		</tr>

		<tr>
			<td width="100"> </td>
			<td> </td>
		</tr>

		<tr>
			<td width="100"> </td>
			<td>
				<input name="add_course" type="submit" id="add_course" value="Add course">
			</td>
		</tr>

	</table>
</form>
</body>
</html>

