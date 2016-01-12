<html>
	<head>
		<title>Profil</title>
		<link rel='stylesheet' type='text/css' href='css/mystyle.css'>
	</head>
		<body><hr>
					<table align="center">
						<tr>
								<td style="border: solid blue 3px;border-collapse: collapse;width:300px;height: 30px;"><?php
									include ('connect.php');
									$conn = new mysqli($servername, $username, $password, $dbname);
									if ($conn->connect_error) {
									    die("Connection failed: " . $conn->connect_error);
									} 
									$id = $_GET['profil'];
									$sql = "SELECT file.FilePhotoLocation FROM file JOIN students ON students.Photo = file.ID WHERE students.id ='" . $id . "'";
									$result = $conn->query($sql);
									if ($result->num_rows > 0) {
									    while($row = $result->fetch_assoc()) {
									        echo  '<img src='.$row["FilePhotoLocation"].' alt="'.$row["FilePhotoLocation"].'" style="width:300px;height:300px;" ><br>';
									    }
									}	else {
									    	echo "Fara Poza";
										}
									$conn->close();
										?>
								</td>
								<td><table style="border: solid blue 3px;border-collapse: collapse; width: 500px; height: 300px;">
							<tr><td >ID: </td>
								<td><?php
									$id = $_GET['profil'];
									include ('connect.php');
									$conn = new mysqli($server, $user, $pass, $dbname);
									$sql_one = "SELECT * FROM students WHERE id =" . $id ;
									$result = $conn->query($sql_one);
									if ($result->num_rows > 0) {
									    while($row = $result->fetch_assoc()) {
									        echo  $row["id"]."<br>";
									    }
									}	else {
											echo "Fara ID";
										}
										?>
								</td></tr>
							<tr><td>Nume: </td>
								<td><?php
									$id = $_GET['profil'];
									include ('connect.php');
									$conn = new mysqli($server, $user, $pass, $dbname);
									$sql_one = "SELECT * FROM students WHERE id =" . $id ;
									$result = $conn->query($sql_one);
									if ($result->num_rows > 0) {
									    while($row = $result->fetch_assoc()) {
											echo  $row["firstname"]."<br>";
										}
									}	else {
										    echo "Fara Nume";
										}
										?>
								</td></tr>
							<tr><td>Prenume: </td>
								<td><?php
									$id = $_GET['profil'];
									include ('connect.php');
									$conn = new mysqli($server, $user, $pass, $dbname);
									$sql_one = "SELECT * FROM students WHERE id =" . $id ;
									$result = $conn->query($sql_one);
									if ($result->num_rows > 0) {
									    while($row = $result->fetch_assoc()) {
									        echo  $row["lastname"]."<br>";
									    }
									} else {
										    echo "Fara Prenume";
										}
									?>
								</td></tr>
							<tr><td>Curs: </td>
								<td><?php
									include ('connect.php');
									$conn = new mysqli($servername, $username, $password, $dbname);
									if ($conn->connect_error) {
									    die("Connection failed: " . $conn->connect_error);
									} 
									$id = $_GET['profil'];
									$sql = "SELECT courses.coursename FROM courses JOIN students ON students.course = courses.id WHERE students.id ='" . $id . "'";
									$result = $conn->query($sql);
									if ($result->num_rows > 0) {
									    while($row = $result->fetch_assoc()) {
									        echo  $row["coursename"] ;
									    }
									}	else {
									echo "Fara Curs";
										}
									?>
								</td></tr>
							<tr><td>Medie Curs: </td>
								<td><?php
									include ('connect.php');
									$conn = new mysqli($server, $user, $pass, $dbname);
									$sql_one = "SELECT * FROM students WHERE id =" . $id ;
									$result = $conn->query($sql_one);
									if ($result->num_rows > 0) {
										while($row = $result->fetch_assoc()) {
											echo  $row["score"]."<br>";
										}
									}	else {
										echo "Fara Note";
										}
									?>
								</td></tr>
							<tr><td>Cv: </td>
								<td><?php
									include ('connect.php');
									$conn = new mysqli($servername, $username, $password, $dbname);
									if ($conn->connect_error) {
									    die("Connection failed: " . $conn->connect_error);
									} 
										$id = $_GET['profil'];
										$sql = "SELECT file.FileCVLocation FROM file JOIN students ON students.CV = file.ID WHERE students.id ='" . $id . "'";
										$result = $conn->query($sql);
									if ($result->num_rows > 0) {
										while($row = $result->fetch_assoc()) {
										echo  '<a href='.$row["FileCVLocation"].' target="_blank">CV</a>';
										}
									}else{
										echo "Fara CV";
									}
									$conn->close();
									?>
								</td></tr>
							</table></td>
						</tr>
							</TABLE>
<hr><a href="students.php"><input type="submit" style="width:150px;" value="Inapoi la Studenti"></a><br><br>
<?php echo '<div class="rest">'; include('students.php') ;'</div>';?>
		</body>
</html>
