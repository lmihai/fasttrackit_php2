<?php
	require 'connections/connections.php';
?>
<?php
	if(isset($_POST['LogIn'])){
		$EM = $_POST['Email'];
		$PW = $_POST['Password'];

		$result = $con->query("SELECT * FROM user
			WHERE Email = '$EM'");

		$row = $result->fetch_array(MYSQLI_BOTH); //verificam daca datele se potrivesc cu cele din db
		

		//if statement pentru verificarea parolei encryptate din register
		if(password_verify($PW,$row['Password'])){
		session_start();
		$_SESSION["UserID"] = $row['UserID'];
		//print $_SESSION["UserID"];
		header('Location: account.php');
		} else{
			session_start();
			$_SESSION['LogInFail'] = 'yes';
		}

	}
?>
<!doctype html>
<html>
<head>
	<title>Login</title>
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
					<form action="" name="form1" method="post">
						<?php if(isset($_POST["LogInFailed"])) { ?>
						<div class="FormElement">LogInFailed! Please Try Again.</div>	
						<?php } ?>
						<div class="FormElement">
							<input type="email" name="Email" required="required" class="TField" id="Email" placeholder="Email">	
						</div>
						<div class="FormElement">
							<input type="password" name="Password" required="required" class="TField" id="Password" >									
						</div>
						<div class="FormElement">
							<input type="submit" name="LogIn" class="button" value="LogIn" >
						</div>
					</div>
					</form>							
					
			</div>
			<?php include ('footer.php'); ?>
		</div>
		

</body>
</html>