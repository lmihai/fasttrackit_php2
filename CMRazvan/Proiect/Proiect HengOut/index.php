<?php session_start();
if (isset($_SESSION['id'])){
echo "Bine ai venit<br> <i>" .  $_SESSION['id']. "</i>";
}
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
					<?php include'meniu.php';?>
				</div>
			</div>
			<div class='div_content'>
<?php
//SELECT prop_name, COUNT(*) AS CEVA FROM propuneri GROUP BY prop_rank
				include 'conn.php';
				$conn = new mysqli($servername, $username, $password, $database);
				if ($conn->connect_error) {
				    die("Connection failed: " . $conn->connect_error);
				} 
				$sql = "SELECT prop_name, prop_poza , prop_descriere , prop_data_execute , prop_create_user , prop_rank FROM propuneri WHERE prop_rank ORDER by prop_rank DESC LIMIT 3";
				$result = $conn->query($sql);
				echo "<table class='table_optiuni'><div class='product_view'>";
				if ($result->num_rows > 0) {
				    while($row = $result->fetch_assoc()) {					
				        echo "<tr class='ceva_ceva'><td class='ceva_ceva_ceva'><br><td class='td_poza' ><img class='poza_prop_p' src='". $row['prop_poza'] ."'</td><td><b>Nume Locatie:</b> " . $row["prop_name"] . "<br><b>Desciere Locatie: </b>" . $row["prop_descriere"]. "<br><b>Postata de: </b><i>". $row["prop_create_user"]. "</i><br><b>Ultima zi: </b>".$row["prop_data_execute"] ."</td><td>REZULTAT VOT<br><h1>".$row['prop_rank']."</h1></td></td></tr><br>" ;
				        ;
				    }
				    echo "</div></table>";
				} else {
				    echo "Nici o propunere";
				}
					
				?>



			</div>
		</div>
	</body>
</html>