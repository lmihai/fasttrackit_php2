<?php
	require 'connections/connections.php';
?>
<?php

//verificare daca utiliz este logat
session_start();
if(isset($_SESSION['UserID']))
{

}
else{
	header('Location:login.php');
}
?>
<?php
	$user = $_SESSION['UserID'];

	$result = $con->query("SELECT * FROM user
						WHERE UserID = '$user'");

	$row = $result->fetch_array(MYSQLI_BOTH);

	$_SESSION['First_Name'] = $row['Fname'];
	$_SESSION['Last_Name'] = $row['Lname'];
	$_SESSION['Email'] = $row['Email'];
	$_SESSION['password'] = $row['Password'];

?>
<?php
	if(isset($_POST['Update'])) {
		$UpdateFname = $_POST['First_Name'];
		$UpdateLname = $_POST['Last_Name'];
		$UpdateEmail = $_POST['Email'];
		$UpdatePw = $_POST['Password'];

		$sql = $con->query("UPDATE user SET Fname = '{$UpdateFname}', Lname = '{$UpdateLname}',
					Email = '{$UpdateEmail}', Password = '{$UpdatePw}'
					WHERE UserID = $user");
					

	}
	
?>

<!doctype html>
<html>
<head>
	<title>Update account</title>
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
			<div class="menu"></div>
				<div id="Menu">
					<nav>
						<ul class="cssmenu">
							<li><a href="account.php">Account</a></li>
							<li><a href="Profile.php">Profile</a></li>
							<li><a href="UpdateProfile.php">Update Profile</a></li>
							<li><a href="LogOut.php">Log Out</a></li>
						</ul>
					</nav>
				</div>
					<div class="LeftBody">
						<?php
							if(isset($_POST['Update'])) {
								if($sql){
								print "Succes update!";
								//header('Location:update.php');
								echo '<p>Go <a href ="account.php">back</a> to your accont</p>';
								}
						}
	
						?>
					</div>
					<div class="RightBody">
						<form action="" method="post" name="form1" >
							<div class="FormElement">
								<input type="text" name="First_Name" required="required" class="TField" id="First_Name" placeholder="First Name" value="<?php echo $_SESSION['First_Name']; ?>">	
							</div>
							<div class="FormElement">
								<input type="text" name="Last_Name" required="required" class="TField" id="Last_Name" placeholder="Last Name" value="<?php echo $_SESSION['Last_Name']; ?>">	
							</div>
							<div class="FormElement">
								<input type="email" name="Email" required="required" class="TField" id="Email" placeholder="Email" value="<?php echo $_SESSION['Email']; ?>">									
							</div>
							<div class="FormElement">
								<input type="password" name="Password" required="required" class="TField" id="Password" placeholder="Password" value="<?php echo $_SESSION['password']; ?>">									
							</div>
						
							<div class="FormElement">
								<input type="submit" name="Update" class="button" value="Update Info" >
							</div>
						</form>						
				</div>	
					
				<?php include ('footer.php'); ?>
		</div>
		

</body>
</html>