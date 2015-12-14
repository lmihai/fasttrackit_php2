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
if (!isset($_POST['delete'])) {
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$sql = "SELECT * FROM courses WHERE ID = '" . $id . "'";
		$result = mysqli_query($db_conn, $sql) or die("Could not update" . mysqli_connect_error());
		$row = mysqli_fetch_assoc($result);
	}
}
else {
		$row_id = $_POST['row_id'];
		$sql = "DELETE FROM courses WHERE ID = '" . $row_id . "'";
		$result = mysqli_query($db_conn, $sql) or die("Could not update" . mysqli_connect_error());
		header('location:list.php');
		mysqli_close($db_conn);
}
?>

<html>
<head>
	<title>DELETE</title>
</head>
<body>
<form method="post" action="delete.php">
	<table width="400" border="0" cellspacing="1" cellpadding="2">
		<tr>
			<?php echo "<td>" . $row['CourseName'] . "</td>"; ?>
		</tr>
		<tr>
			<?php echo "<td>" . $row['Trainer'] . "</td>"; ?>
		</tr>
		<tr>
			<td>
				<input name="row_id" type="hidden" value="<?php echo $row["ID"] ?>">
				<input name="delete" type="submit" value="Delete">
			</td>
		</tr>
	</table>
</form>
</body>
</html>