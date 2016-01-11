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
	<title>Proposals list</title>
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
							<li><a href="searchproposal.php">Search proposal</a></li>
						</ul>
					</nav>
				</div>
			</div>
			<br style="clear:both;"/>	
					<div class="Container">
						<div>
							
							<?php
							$sql_lastproposal = "SELECT * FROM proposal GROUP BY starts 
											ORDER BY starts DESC ";
						$searchResultsproposal = mysqli_query($con, $sql_lastproposal);
						echo '<h4>Last hangout proposals for you...</h4>';
						echo '<table><tr bgcolor="#ccc"><td>Date</td><td>Subject</td>
								<td>Location</td><td>Details</td><td>Vote</td><td>View</td>';
							while($row1 = mysqli_fetch_array($searchResultsproposal)){
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
								echo $row1['description'];
								echo'</td>';
								
								
								echo'<td>';										
								$ID = $row1['ID'];
								echo '<a href = "http://localhost/fasttrackit_php2\Teodora\Hangout project with registration system/vote.php?ID='.$ID.'">VOTE</a>';	// _GET['ID'] pentru proposal							
								echo'</td>';

								echo'<td>';										
								$ID = $row1['ID'];
								echo '<a href = "http://localhost/fasttrackit_php2\Teodora\Hangout project with registration system/Proposal.php?ID='.$ID.'">View</a>';	//	// _GET['ID'] pentru vote proposal							
								echo'</td>';
							

								echo '</tr>';
							}
						echo '</table>'	;
						?>
						</div>
					<?php include ('footer.php'); ?>
					</div>
		

</body>
</html>