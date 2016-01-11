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
if(isset($_POST['proposal'])){	

		$proposalSubject = $_POST['subject'];
		$hangoutDate = $_POST['date'];
		$proposalLocation = $_POST['location'];
		$proposalAddress = $_POST['address'];
		$proposalDescription = $_POST['description'];

		$sql = $con->query("INSERT INTO proposal (UserID, subject, location, address, ends, description ) 
							Values('{$user}', '{$proposalSubject}', '{$proposalLocation}', '{$proposalAddress}', '{$hangoutDate}','{$proposalDescription}')");
					
	}

?>

<!doctype html>
<html>
<head>
	<title>New proposal</title>
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
					<h3>New proposal</h3>
					<form action="" method="post" name="ProposalForm" id="ProposalForm">
							<div class="FormElement">
								<label for "subject">Subject</label>
								<select name="subject" required="required" class="TField" id="subject" placeholder="Subject" >
									<option value="Trainning">Trainning</option>
									<option value="Freelancing">Freelancing discuttion</option>
									<option value="Carrer">Carrer in Web</option>
									<option value="News">News in Web</option>
									<option value="Coffe">Just coffe ...:)</option>	
									<option value="Other">Other...</option>														
								</select>
							</div>
							<br>	
							<div class="FormElemnt">
								<label for "date">Date</label>
								<input type = "date" name ="date" required="required" class="TField" id="date" placeholder="Subject" />
							</div>
							<br>
							<div class="FormElement">
								<label for "address">Address</label>
								<textarea name="address" rows="4" cols="50" id="address" required="required" class="TField"  placeholder="Address">
								</textarea>								
							</div>
							<br>
							<div class="FormElement">
								<label for "location">Location</label>
								<select name="location" required="required" id= "location" class="TField"  placeholder="Location">								
									<option value="Bucuresti">Bucuresti</option>
									<option value="Cluj-Napoca">Cluj-Napoca</option>
									<option value="Timisoara">Timisoara</option>
									<option value="Iasi">Iasi</option>
									<option value="Constanta">Constanta</option>
									<option value="Arad">Arad</option>
									<option value="Deva">Deva</option>			
								</select>
							</div>
							<br>
							<div class="FormElement">
								<label for "description">Description</label>
								<textarea name="description" rows="4" cols="50" id="description" required="required" class="TField"  placeholder="Address">
								</textarea>									
							</div>
							<br>
							<div class="FormElement">
								<input type="submit" name="proposal" class="button" value="Submit proposal" >
							</div>							
					</form>		
					
					</div>									
					<br>
					<br>
			<?php
						//mesaj confirmare inregistrare corecta a propunerii si directionare catre lista propuneri
							if(isset($_POST['proposal'])) {
								if($sql){
								print "<h3>Your proposal was successfully save! </h3>";
								//header('Location:update.php');
								echo '<h2>Go to<a href ="proposals_list.php">List proposals</a></h2>';
								}
						}
	
			?>
					<?php include ('footer.php'); ?>
	</div>
		

</body>
</html>