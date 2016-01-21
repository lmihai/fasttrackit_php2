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
							while($row = mysqli_fetch_array($Resultsproposal)){
								echo '<tr>';

								echo'<td>';
								echo $row['ends'];
								echo'</td>';

								echo'<td>';
								echo $row['subject'];
								echo'</td>';

								echo'<td>';
								echo $row['location'];
								echo'</td>';

								echo'<td>';
								echo $row['address'];
								echo'</td>';

								echo'<td>';
								echo $row['description'];
								echo'</td>';		
						echo '</tr>';
							}
						echo '</table>'	;
					}
					?>
						<h2>Vote results for this proposal</h2>
						
						<?php
							//$sql_result_vote1 = "SELECT COUNT(choiceID) FROM answers WHERE choiceID = 1 and proposalID = '$ID' ";
							$sql_precent_vote = "SELECT answers.choiceID,choices.name,concat(round((COUNT(`choiceID`)*100/(SELECT COUNT(*) FROM answers WHERE answers.proposalID='$ID')),2),'%') AS score FROM answers LEFT JOIN choices ON answers.choiceID=choices.ID WHERE answers.proposalID = '$ID' GROUP BY answers.choiceID ";

							//SELECT`choiceID`,(COUNT(`choiceID`)*100/(SELECT COUNT(*) FROM answers)) AS score FROM answers GROUP BY choiceID
							//intoarce 

							//SELECT`choiceID`,`proposalID`,(COUNT(`choiceID`)*100/(SELECT COUNT(`ID`) FROM answers )) AS score FROM answers WHERE `proposalID`=6 GROUP BY choiceID
							//print $sql_precent_vote1;
							//ATENTIE E OK DAR NU ARATA CHOICE UNDE E 0
							/*
							SELECT choiceID,(COUNT(`choiceID`)*100/(SELECT COUNT(*) FROM answers WHERE proposalID = 6)) AS score
							FROM answers
							WHERE proposalID = 6
							GROUP BY choiceID

							*/
							/* cu JOIN TOT NU ARATA VAR 3 CU 0%
							SELECT answers.choiceID,choices.ID,concat(round((COUNT(`choiceID`)*100/(SELECT COUNT(*) FROM answers WHERE proposalID = 6)),2),'%') AS score
							FROM answers
							JOIN  choices ON choices.ID= answers.choiceID  
							WHERE proposalID = 6
							GROUP BY choiceID

							*/
							//$Resultsvote1 = mysqli_query($con, $sql_result_vote1);
							$ResultsvoteP = mysqli_query($con, $sql_precent_vote);
							//$row1 = mysqli_fetch_array($ResultsvoteP);
							/*
							$sql_result_vote2 = "SELECT COUNT(choiceID) FROM answers WHERE choiceID = 2 and proposalID = '$ID' ";
							$Resultsvote2 = mysqli_query($con, $sql_result_vote2);
							$row2 = mysqli_fetch_assoc($Resultsvote2);
							$sql_result_vote3 = "SELECT COUNT(choiceID) FROM answers WHERE choiceID = 3 and proposalID = '$ID' ";
							$Resultsvote3 = mysqli_query($con, $sql_result_vote3);
							$row3 = mysqli_fetch_assoc($Resultsvote3);
								*/
							//echo '<pre>';
							//echo var_dump($row1);
							echo '<table><tr bgcolor="#ccc"><td>Varianta</td><td>Answer</td>
								<td>Score</td></tr>';
							while($row1 = mysqli_fetch_assoc($ResultsvoteP)){
								echo '<tr>';

								echo'<td>';
								echo $row1['choiceID'];
								echo'</td>';

								echo'<td>';
								echo $row1['name'];
								echo'</td>';

								echo'<td>';
								echo $row1['score'];
								echo'</td>';
										
							echo '</tr>';
							}
						echo '</table>'	;
					
						?>
					</div>
					<br>
					<?php include ('footer.php'); ?>
					</div>
		

</body>
</html>
