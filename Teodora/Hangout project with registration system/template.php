<?php
	require 'connections/connections.php';
?>
<!doctype html>
<html>
<head>
	<title>Register</title>
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
							<li><a href="#">Register</a></li>
							<li><a href="#">LogIn</a></li>
						</ul>
					</nav>
				</div>
					<div class="LeftBody">
					<?php
					$pass = '1234';
					$StorePw = password_hash($pass, PASSWORD_BCRYPT, array('cost'=>10));
					print $StorePw;
					?>
					</div>
					<div class="RightBody"></div>							
					
			</div>
			<?php include ('footer.php'); ?>
	</div>
		

</body>
</html>