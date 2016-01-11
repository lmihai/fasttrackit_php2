<?php
	require 'connections/connections.php';
?>
<?php
/*
session_start();
if(isset($_GET['UserID']))
{

} 
else{
	header('Location:login.php');
}
*/

if(isset($_GET['UserID'])){ 
	$user = $_GET['UserID'];

	$result = $con->query("SELECT * FROM user
						WHERE UserID = '$user'");

	$row = $result->fetch_array(MYSQLI_BOTH);
	$_GET['UserID'] = $row['UserID'];
	$_GET['First_Name'] = $row['Fname'];
	$_GET['Last_Name'] = $row['Lname'];
	$_GET['Email'] = $row['Email'];
	$_GET['password'] = $row['Password'];
	$_GET['Timestamp'] = $row['Timestamp'];
	$_GET['ocupation'] = $row['ocupation'];
	$_GET['Company'] = $row['Company'];
	$_GET['Phone'] = $row['Phone'];
	$_GET['location'] = $row['location'];
	$_GET['Photo'] = $row['Photo'];
}
?>
<!doctype html>
<html>
<head>
	<title>Another Profile</title>
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
							<li><a href="search.php">Back</a></li>
							
						</ul>
					</nav>
				</div>
				</div>

					<div class="LeftBody">
						<div class="picture">
							<?php
							// Read the Photo ID from Students Table
							$sql = 'SELECT Photo FROM user
							WHERE UserID = ' . $_GET['UserID'];
							$result = mysqli_query($con, $sql);
							if($result)	{
								$row = mysqli_fetch_assoc($result);
								$photo_id = $row['Photo'];
								//print $photo_id;			
							}

							$sql2 = 'SELECT Filelocation FROM files
										WHERE ID = ' . $_GET['Photo'];
							$result2 = mysqli_query($con, $sql2);
							if($result2) {
								$row2 = mysqli_fetch_assoc($result2);
								$file_location = $row2['Filelocation'];						
							}
							?>
							<?php
							if($photo_id == 0){								
							echo '<a href = "UpdateProfile.php">Change image
							<img src="img/img.jpg" alt="Update image" /></a>';
							}
							else{
								echo '<img src="http://localhost/fasttrackit_php2\Teodora\Hangout project with registration system/'.$file_location.'"/>';
							}
							?>
						</div>	
						<p>First name: <?php echo $_GET['First_Name']; ?></p>
						<p>Last name: <?php echo $_GET['Last_Name']; ?></p>
						<p>Email: <?php echo $_GET['Email']; ?></p>
						<p>Member from: <?php echo $_GET['Timestamp']; ?></p>
						<p>Ocupation: <?php echo $_GET['ocupation']; ?></p>
						<p>Location: <?php echo $_GET['location']; ?></p>
						<p>Company: <?php echo $_GET['Company']; ?></p>
						<p>Phone: <?php echo $_GET['Phone']; ?></p>
					</div>
					<div class="RightBody">
						pune ceva ce tine de profil...
						<br>
						motto...
						<br>
						linkuri catre portofoliu
						<br>
						link catre cv
						<br>
						link catre facebook...
						<br>
						link catre site, blog...

		</div>					
			<?php include ('footer.php'); ?>
	</div>
		

</body>
</html>