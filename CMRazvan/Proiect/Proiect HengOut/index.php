<?php

?>
<html>
		<head>
			<link rel="stylesheet" type="text/css" href="css/mystyle.css">
		</head>
	<body>
		<div class='_body'>
			<div class='div_top'>
				<div class='div_logo'><img src="img/_logo_1.jpg" alt='130px/130px' width='130' height='130'></div>
				<div class='div_menu'>
					<ul>
						<li><a class='active' href='index.php'>Acasa</a></li>
						<li><a href='propuneri.php'>Propuneri</a></li>
							<ul style='float:right;list-style-type:none;'>
								<li><a href='despre.php'>Despre</a></li>
								<li><a href='connectare.php'>Conectare</a></li>
							</ul> 
					</ul>
				</div>
			</div>
			<div class='div_content'>
				<table>
					<tr><td class='tb_ob_1'><?php 
				include 'connection.php';
				$conn = new mysqli($servername, $username, $password, $database);
				$sql = "SELECT * FROM `propuneri` WHERE prop_rank = 7";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
				    while($row = $result->fetch_assoc()) {
				        echo "id: " . $row["prop_id"]. " - Name: " . $row["prop_name"]. " " . $row["prop_descriere"]. "<br>";
				    }
				} else {
				    echo "0 results";
				}
				//pentru poza
				// $conn_2 = new mysqli($servername, $username, $password, $database);
				// $sql_2 = "SELECT * FROM `propuneri` WHERE prop_rank = 7";
				// $result = $conn_2->query($sql_2);
				// if ($result->num_rows > 0) {
				//     while($row_2 = $result->fetch_assoc()) {
				//         echo "id: " . $row_2["prop_id"]. " - Name: " . $row_2["prop_name"]. " " . $row_2["prop_descriere"]. "<br>";
				//     }
				// } else {
				//     echo "0 results";
				// }

				$conn->close();

				?></td></tr>
					<tr><td class='tb_ob_2'><?php 
				include 'connection.php';
				$conn = new mysqli($servername, $username, $password, $database);
				if ($conn->connect_error) {
				    die("Connection failed: " . $conn->connect_error);
				} 
				$sql = "SELECT * FROM `propuneri` WHERE prop_rank = 3";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
				    while($row = $result->fetch_assoc()) {
				        echo "id: " . $row["prop_id"]. " - Name: " . $row["prop_name"]. " " . $row["prop_descriere"]. "<br>";
				    }
				} else {
				    echo "0 results";
				}
				$conn->close();
				?></td></tr>
					<tr><td class='tb_ob_3'><?php 
				include 'connection.php';
				$conn = new mysqli($servername, $username, $password, $database);
				if ($conn->connect_error) {
				    die("Connection failed: " . $conn->connect_error);
				} 
				$sql = "SELECT * FROM `propuneri` WHERE prop_rank = 2";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
				    // output data of each row
				    while($row = $result->fetch_assoc()) {
				        echo "id: " . $row["prop_id"]. " - Name: " . $row["prop_name"]. " " . $row["prop_descriere"]. "<br>";
				    }
				} else {
				    echo "0 results";
				}
				$conn->close();
				?></td></tr>
				</table>
			</div>
		</div>
	</body>
</html>