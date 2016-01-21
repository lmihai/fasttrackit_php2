<?php 
session_start();
if (isset($_SESSION['id'])){
echo "Bine ai venit<br> <i>" .  $_SESSION['id']. "</i>";
}

echo "<html>
<head>
<link rel='stylesheet' type='text/css' href='css/mystyle.css'>
</head>
<body>
<div class='_body'>
<div class='div_top'>
<div class='div_logo'><img src='img/_logo_1.jpg' alt='130px/130px' width='130' height='130'></div>
<div class='div_menu'>";
include 'meniu.php';
echo "</div>
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

				include 'conn.php';
				$conna = new mysqli($servername, $username, $password, $database);
				$sql = "SELECT * FROM `propuneri`";
				$result = $conna->query($sql);
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
				     
				$connb = new mysqli($servername, $username, $password, $database);
				$sqla = "SELECT user_picture FROM login WHERE user_username = '". $row['prop_create_user']."'";

				$resultb = $connb->query($sqla);

				if ($resultb->num_rows > 0) {
				    while($rowa = $resultb->fetch_assoc()) {	    
				        echo "<div class='img_prop_show>'<br><img src=". $row["prop_poza"]." style='width:130px ;height:130px;'></div><div class='desciere_prop'> Nume: " . $row["prop_name"] . " <br>Descriere: " . $row["prop_descriere"]. "<br> Propusa de : ". $row["prop_create_user"]. "<br>Date: ".$row["prop_data_execute"] ."</div><div class='poza_user_prop'><img src=". $rowa["user_picture"]." style='width:130px ;height:130px;'></div>";
				    }

				} else {
				   
				}
				        //echo "<div class='img_prop_show>'<br><img src=". $row["prop_poza"]." style='width:130px ;height:130px;'></div><div class='desciere_prop' Nume: " . $row["prop_name"]. " <br>Descriere: " . $row["prop_descriere"]. "<br> Propusa de : ". $row["prop_create_user"]. "</div><div class='poza_user_prop'".$poza_user_prop. "</div>";
				    }
 
				} else {
				    echo "Primul";
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