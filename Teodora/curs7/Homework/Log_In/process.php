<?php

$username = $_POST['username'];
$password = md5($_POST['password']);
//$passwordmd5 = md5($password);

require_once("connect.php");

$sql = "SELECT * FROM users WHERE user_name='".$username."' AND user_password='".($password)."' "; 
//check if user is valid, i.e. username exists in database and
//the password matches the one in the db
$result = mysqli_query($db_conn, $sql);
$row = mysqli_fetch_assoc($result);
/*
echo "Hello " . $username ."!<br>";
echo "Your password encrypted is: " . md5($password) . ".<br>";
*/

if(($username == $row['user_name']) && ($password == $row['user_password'])) {
	//echo "It's work!";
	session_start();
	$_SESSION['user_id'] = $row['user_id'];	
	//echo $_SESSION['user_id'];
	//Then redirect to another page, user.php
	header("Location:user.php");
	//verificare
	//echo "Usename: " .$username. "<br>";
	//echo "Password: " . $password. ".";	
    exit();
}
else{		
	echo "<h3>Invalid login information. Please try again.</h3><br>";	 
	echo "<a href ='login.php'><strong>Back</strong></a>";
	echo "<h3>...or create your account here: <a href = 'signin.php'>Create </a></h3>";
	//header("Location:login.php"); nu!
	exit();
}

?>