<?php

$username = $_POST['username'];
$password = $_POST['password'];

require_once("connect.php");
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
    exit();
}
else{		
	echo "<h3>Invalid login information. Please try again.</h3><br>";
	echo "<a href ='login.php'><strong>Back</strong></a>";
	//header("Location:login.php");
	exit();
}

?>