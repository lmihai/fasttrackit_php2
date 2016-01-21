<?php session_start();
if (isset($_SESSION['id'])){
echo "Bine ai venit<br> <i>" .  $_SESSION['id']. "</i>";
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
					<?php include'meniu.php';?>
				</div>
			</div>
			<div class='div_content'>
<?php


$servername = "localhost";
$username = "root";
$password = "";
$database = "hangout";
if (isset($_POST['user_connect'])) {
	

$conn_login = new mysqli($servername, $username, $password, $database);

if (isset($_POST['user_username']) && isset($_POST['user_password']))
{
	$sql = "SELECT * FROM login WHERE user_username='" . $_POST['user_username'] . "' AND user_password= md5('" . $_POST['user_password'] . "')";
	$result = $conn_login->query($sql);

	if ($result->num_rows > 0) 
	{
		$row = $result -> fetch_assoc();
		$_SESSION['id']=$row['user_username'];
		echo  $row['user_username'];
		header("Location: index.php");
		exit;
	}
	else
		
	{
		echo "<br><div class='form_user_error'>Ai gresit User sau Parola mai incearca</div>";
//		header("Location: connectare.php");
//		exit;
	}	
}
}
?>
				<div class='div_form_add_user'>
				
					<form align='center' method='post' action=''>
						<br>
						<input type='text' name='user_username' value='Username'><br><br>
						<input type='password' name='user_password' value='Password'><br><br>
						<input type='submit' name='user_connect' value='Conecteazate'>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>