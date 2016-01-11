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
<?php
	if(isset($_POST['choice'])) {
		$choice = $_POST;
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
					<?php
					if(!isset($_POST['vote'])) {?>
						<h2>Do you like this proposal?</h2>
						<form action = "" method = "post" name = "choice">
						<input type = "radio" name = "choice" value = "1">Great!I'm sure I'll be there!
						<input type = "radio" name = "choice" value = "2">It's ok. I think if I come!
						<input type = "radio" name = "choice" value = "3">Nope! I think it's a waste of time!					
									
						<input type = "submit" value = "Submit answer" name = "vote" >				
						</form>
					<?php }
					else{
						$choiceID = $_POST['choice']; //id choice
						//print $choiceID;	ok
						$ID = $_GET['ID']; //id proposal
						//print $ID; ok
						//print $user; //id user ok
													
							
						$sql_vote = "INSERT INTO answers (proposalID, userID, choiceID)
											VALUES ('{$ID}', '{$user}','{$choiceID}')";	

						
						
						$resultvote = mysqli_query($con, $sql_vote) or die 
						(error_reporting(E_ALL ^ E_DEPRECATED));				
								
						if($resultvote){
						print "<h3>Your vote was successfully saved! </h3>";
										
						echo '<h2>Go to<a href ="proposals_list.php">List proposals</a></h2>';
						}
						else{
						error_reporting();								 
						}		
					
					}
					?>
			</div>
				<br>
					<?php include ('footer.php'); ?>
		</div>
		

</body>
</html>