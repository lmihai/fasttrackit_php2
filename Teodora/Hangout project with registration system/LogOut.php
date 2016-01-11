<?php
	require 'connections/connections.php';
?>
<?php
session_start();
unset($_SESSION['UserID']);
session_destroy();
?>
<!doctype html>
<html>
<head>
	<title>Log Out</title>
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
							<li><a href="Register.php">Register</a></li>
							<li><a href="Login.php">LogIn</a></li>
						</ul>
					</nav>
				</div>
					<div class="LeftBody"></div>
					<div class="RightBody">
						You have logged out
					</div>							
					
			</div>
			<?php include ('footer.php'); ?>
	</div>
		

</body>
</html>