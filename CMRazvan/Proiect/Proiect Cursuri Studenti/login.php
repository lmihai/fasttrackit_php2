<?php
session_start();
//setcookie('php', 'phpacces', time() + 3600);
include ('connect.php');
//cone
$conn_login = new mysqli($server, $user, $pass, $dbname);

if (isset($_POST['username']) && isset($_POST['password']))
{
	$sql = "SELECT * FROM login WHERE user_name='" . $_POST['username'] . "' AND user_pass= md5('" . $_POST['password'] . "')";
	$result = $conn_login->query($sql);
	
	if ($result->num_rows > 0) 
	{
		$row = $result -> fetch_assoc();
		$_SESSION['id']=$row['user_id'];
		header("Location: user.php");
		exit;
	}
	else
	{
		header("Location: login.php");
		exit;
	}	
}

?>
<html>
<head>
	<title>Login</title>
	<link rel='stylesheet' type='text/css' href='css/mystyle.css'>
</head>
	<body>
		<div class='div_nav'>
			<ul>
				<li><a class='' href='user.php'>Acasa</a></li>
				<li><a href='courses.php'>Cursuri</a></li>
				<li><a href='students.php'>Studenti</a></li>
				<li><a href='stats.php'>Statistica</a></li>
					<ul style='float:right;list-style-type:none;'>
						<li><a href=''>Despre</a></li>
						<li><a class='active' href='login.php'>Conectare</a></li>
					</ul> 
			</ul>
				<div class='div_login'>
					<h1>Logheaza-te!</h1>
						<form class='forum' name="form" method='post' action=''>
							<p class='usernames'>Utilizator</p>
							<input class='username' type='text' name='username'></input>
							<p class='password1'>Parola</p>
							<input class='password' type='password' name='password'></input>
							<button class='buton' type='submit' name='login' value='Login'>Login</button>
						</form>
				</div>
		</div>
	</body>
</html>


