<?php 
					session_start();
					echo "<html>
		<head>
			<link rel='stylesheet' type='text/css' href='css/mystyle.css'>
		</head>
	<body>
		<div class='_body'>
			<div class='div_top'>
				<div class='div_logo'><img src='img/_logo_1.jpg' alt='130px/130px' width='130' height='130'></div>
				<div class='div_menu'>
					<ul>
						<li><a href='index.php'>Acasa</a></li>
						<li><a  class='active' href='propuneri.php'>Propuneri</a></li>
							<ul style='float:right;list-style-type:none;'>
								<li><a href='despre.php'>Despre</a></li>
								<li><a href='connectare.php'>Conectare</a></li>
							</ul> 
					</ul>
				</div>
			</div>
			<div class='div_content'>";
					if (isset($_SESSION['id'])) {
					echo "
					<div class='div_menu_prop'>
					<ul>
						<li><a href=''>Vote Prop</a></li>
						<li><a href=''>Add Prop</a></li>
						<li><a href=''>Del Prop</a></li>
						<li><a href=''>Stat Prop</a></li>
					</ul>";				

				include 'connection.php';
				$conn = new mysqli($servername, $username, $password, $database);
				$sql = "SELECT * FROM `propuneri`";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
				    while($row = $result->fetch_assoc()) {
				        echo "<br>id: " . $row["prop_id"]. " - Name: " . $row["prop_name"]. " " . $row["prop_descriere"]. "<br>";
				    }
				} else {
				    echo "0 results";
				}
			}
echo "
				
				</div>	
			</div>
		</div>
	</body>
</html>
";
?>