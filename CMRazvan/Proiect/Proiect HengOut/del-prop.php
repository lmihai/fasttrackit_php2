<?php
session_start();
if (isset($_SESSION['id'])){
echo "Bine ai venit<br> <i>" .  $_SESSION['id'] . "</i>";
}
?>

<html>
	<head>
		<link rel='stylesheet' type='text/css' href='css/mystyle.css'>
	</head>
	<body>
		<div class='_body'>
			<div class='div_top'>
				<div class='div_logo'><img src='img/_logo_1.jpg' alt='130px/130px' width='130' height='130'></div>
					<div class='div_menu'>
						<?php include 'meniu.php';?>	
					</div>
			</div>
			<div class='div_content'>
	<div class='div_menu_prop'>
					<ul>
						<li><a href='add_user.php'>Add User</a></li>
						<li><a href='add_prop.php'>Add Prop</a></li>
						<li><a class='active' href='del-prop.php'>Del Prop</a></li>
						<li><a href=''>Status Prop</a></li>
					</ul>
				<div class='left_side'>
<?php 				include 'conn.php';
				$conna = new mysqli($servername, $username, $password, $database);
				$sql = "SELECT * FROM `propuneri`"; // conectare pentru poza userului
				$result = $conna->query($sql);
				if ($result->num_rows > 0) 
{				
						while($row = $result->fetch_assoc()) 
	{   
					$connb = new mysqli($servername, $username, $password, $database);
					$sqla = "SELECT user_picture FROM login WHERE user_username = '". $row['prop_create_user']."'"; //conectare pentru date despre porpunere
					$resultb = $connb->query($sqla);
						echo "<table>";
					if ($resultb->num_rows > 0) 
		{
					    while($rowa = $resultb->fetch_assoc()) 
			{	    //UPDATE propuneri SET prop_rank = prop_rank + 1 WHERE prop_id = 30																																																																																																																																																	
				echo "<tr><td class='td_poza'><img class='poza_prop_p' src=". $row["prop_poza"]."></td><td class='desciere'><b>Nume Locatie:</b> " . $row["prop_name"] . "<br><b>Desciere Locatie: </b>" . $row["prop_descriere"]. "<br><b>Postata de: </b><i>". $row["prop_create_user"]. "</i><br><b>Ultima zi: </b>".$row["prop_data_execute"] ."<br><b>VOTURI: </b>".$row['prop_rank']."</td><td class='td_poza'><img class='poza_user_p' src=". $rowa["user_picture"]."><br></td><td class='butoane'><a class='buton_link' href='functii.php?del=".$row['prop_id']."'>Stergere</a></td></tr>";
				echo "</table>";
			}

		}else 
			{
							echo "Eroare baza 1";
			}
	}
} else 	
		{
					    	echo "Nu sunt inregistrari";
		}?>
			</div>
		
	</body>
</html>