<?php
	require 'connections/connections.php';
?>
<?php
//verificare daca utiliz este logat
session_start();
if(isset($_SESSION['UserID']))
{
	$user = $_SESSION['UserID'];
}
else{
	header('Location:login.php');
}
?>


<!doctype html>
<html>
<head>
	<title>View proposal</title>
	<link rel="stylesheet" href="css/master.css" type="text/css" />
	<link rel="stylesheet" href="css/menu.css" type="text/css" />
</head>
<body>
	<div class="container">
		<div class="header">
			<div class="RightBody">
			<h2>Romanian membership</h2>
			</div>
		</div>
			<div class="menu">
				<div id="Menu">
					<nav>
						<ul class="cssmenu">
							<li><a href="account.php">Account</a></li>
							<li><a href="Profile.php">Profile</a></li>
							<li><a href="search.php">Search members</a></li>
							<li><a href="proposals_list.php">Search proposal</a></li>
						</ul>
					</nav>
				</div>
			</div>
			<br style="clear:both;"/>	
					<div class="Container">
					<h3>Proposal</h3>
					<div>
						<?php
							if(isset($_GET['ID'])){
								$ID = $_GET['ID'];
								/*
								$date = $_GET['date']; 
								$location = $_GET['location'];
								$details = $_GET['details'];
								$subject = $_GET['subject'];
								*/
						$sql_viewproposal = "SELECT * FROM proposal
							WHERE ID = '$ID' ";
						$Resultsproposal = mysqli_query($con, $sql_viewproposal);
						echo '<table><tr bgcolor="#ccc"><td>Date</td><td>Subject</td>
								<td>Location</td><td>Address</td><td>Details</td>';
							while($row1 = mysqli_fetch_array($Resultsproposal)){
								echo '<tr>';

								echo'<td>';
								echo $row1['ends'];
								echo'</td>';

								echo'<td>';
								echo $row1['subject'];
								echo'</td>';

								echo'<td>';
								echo $row1['location'];
								echo'</td>';

								echo'<td>';
								echo $row1['address'];
								echo'</td>';

								echo'<td>';
								echo $row1['description'];
								echo'</td>';		
						echo '</tr>';
							}
						echo '</table>'	;
					}
					?>
						<h2>Vote results for this proposal</h2>

						Punem aici rezulatele voturilor ptr aceasta propunere
						<?php
						$sql_result_vote = "SELECT "

 						?>
					</div>
					<br>
					<?php include ('footer.php'); ?>
					</div>
		

</body>
</html>
