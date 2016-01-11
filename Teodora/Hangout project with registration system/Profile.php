<?php
	require 'connections/connections.php';
?>
<?php
session_start();
if(isset($_SESSION['UserID']))
{

} 
else{
	header('Location:login.php');
}
/*
if(isset($_GET['UserID'])){ 
	$user = $_GET['UserID'];
		
	}//AM INCERCAT CODUL ASTA PENTRU A FACE LEG CU search.php LINK CATRE PAG DE PROFIL NU MERGE!!
*/
?>
<?php
	$user = $_SESSION['UserID'];
	//$user = (isset($_GET['UserID'])) ? $_GET['UserId'] : $_SESSION['UserID']; am incercat si asta si nu merge!!

	$result = $con->query("SELECT * FROM user
						WHERE UserID = '$user'");

	$row = $result->fetch_array(MYSQLI_BOTH);
	$_SESSION['UserID'] = $row['UserID'];
	$_SESSION['First_Name'] = $row['Fname'];
	$_SESSION['Last_Name'] = $row['Lname'];
	$_SESSION['Email'] = $row['Email'];
	$_SESSION['password'] = $row['Password'];
	$_SESSION['Timestamp'] = $row['Timestamp'];
	$_SESSION['ocupation'] = $row['ocupation'];
	$_SESSION['Company'] = $row['Company'];
	$_SESSION['Phone'] = $row['Phone'];
	$_SESSION['location'] = $row['location'];
	$_SESSION['Photo'] = $row['Photo'];

?>
<!doctype html>
<html>
<head>
	<title>Profile</title>
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
							<li><a href="UpdateProfile.php">Update profile</a></li>
							<li><a href="LogOut.php">Log Out</a></li>
						</ul>
					</nav>
				</div>
				</div>

					<div class="LeftBody">
						<div class="picture">
							<?php
							// Read the Photo ID from Students Table
							$sql = 'SELECT Photo FROM user
							WHERE UserID = ' . $_SESSION['UserID'];
							$result = mysqli_query($con, $sql);
							if($result)	{
								$row = mysqli_fetch_assoc($result);
								$photo_id = $row['Photo'];
								//print $photo_id;			
							}

							$sql2 = 'SELECT Filelocation FROM files
										WHERE ID = ' . $_SESSION['Photo'];
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
								echo '<img src="http://localhost\fasttrackit_php2\Teodora\Hangout project with registration system/'.$file_location.'"/>';
							}
							?>
						</div>	
						<p>First name: <?php echo $_SESSION['First_Name']; ?></p>
						<p>Last name: <?php echo $_SESSION['Last_Name']; ?></p>
						<p>Email: <?php echo $_SESSION['Email']; ?></p>
						<p>Member from: <?php echo $_SESSION['Timestamp']; ?></p>
						<p>Ocupation: <?php echo $_SESSION['ocupation']; ?></p>
						<p>Location: <?php echo $_SESSION['location']; ?></p>
						<p>Company: <?php echo $_SESSION['Company']; ?></p>
						<p>Phone: <?php echo $_SESSION['Phone']; ?></p>
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