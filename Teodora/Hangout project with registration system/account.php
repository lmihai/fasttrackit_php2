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
	<title>Account</title>
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
							<li><a href="Profile.php">Profile</a></li>
							<li><a href="UpdateProfile.php">Update Profile</a></li>
							<li><a href="update.php">Update account</a></li>
							<li><a href="LogOut.php">Log Out</a></li>
						</ul>
					</nav>
				</div>
					<div class="LeftBody">
						<h3>Your account page</h3>
						<ul>If you want to:
							<li><a href="update.php">Update your account</a></li>
							<li><a href="UpdateProfile.php">Update your profile</a></li>
							<li><a href="Profile.php">View your profile</a></li>
							<li><a href="LogOut.php">Log out</a></li>
						</ul>
					</div>
					<div class="RightBody">
						<ul>If you want to:
							<li><a href="search.php">Find other members</a></li>
							<li><a href="proposals_list.php">Find hangout proposal</a></li>
							<li><a href="newproposal.php">Make a hangout proposal</a></li>							
						</ul>
					</div>							
					
			</div>
				<?php include ('footer.php'); ?>
			</div>
		

</body>
</html>