<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

// Attempt select query execution
$sql = "SELECT * FROM courses";
if ($result = mysqli_query($conn, $sql)) {
	if (mysqli_num_rows($result)>0) {
		echo "<table>";
		echo "<th>Course<br> No.</th>";
		echo "<th>CourseName</th>";
		echo "<th>Trainer</th>";
		echo "</tr>";
		while ($row = mysqli_fetch_array($result)) {
			echo "<tr>";
			echo "<td>" . $row['ID'] . "</td>";
			echo "<td>" . $row['CourseName'] . "</td>";
			echo "<td>" . $row['Trainer'] . "</td>";
			echo "</tr>";
		}
		echo "</table>";

   	//Close result set
		mysqli_free_result($result);
	} else {
		echo "No records matching your query were found .";
	}
}else {
	echo "ERROR: Could not able to execute $sql." . mysqli_close($conn);
}

//close conection
mysqli_close($conn);
?>
