<?php 
session_start();
if (isset($_SESSION['id'])){

echo "Bine ai venit<br> <i>" .  $_SESSION['id'] . "</i>";
}
?>
<html>
		<head>
			<link rel="stylesheet" type="text/css" href="css/mystyle.css">
		</head>
	<body>
		<div class='_body'>
			<div class='div_top'>
				<div class='div_logo'><img src="img/_logo_1.jpg" alt='130px/130px' width='130' height='130'></div>
				<div class='div_menu'>
<?php
 include'meniu.php';?>
				</div>
			</div>
			<div class='div_content'>
				<a href="add_user.php"> Adauga User</a><br>
				<a href="add_prop.php"> Adauga Propunere</a>
			

			</div>
		</div>
	</body>
</html>