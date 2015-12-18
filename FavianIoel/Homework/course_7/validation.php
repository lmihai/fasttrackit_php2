<?php

$username = $_POST['username'];
$password = md5($_POST['password']);



$server = 'localhost';
$user = 'root'; 
$pass = ''; 
$db_name = 'loginform';
error_reporting(E_ALL ^ E_DEPRECATED);// raporteaza erorile in afara de erorile de depreciere

$db_conn = mysqli_connect($server, $user, $pass);
mysqli_select_db($db_conn,$db_name);

$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
 
//check if user is valid, i.e. username exists in database and
//the password matches the one in the db
$result = mysqli_query($db_conn, $query);
$row = mysqli_fetch_assoc($result);


/*
echo "Hello " . $username ."!<br>";
echo "Your password encrypted is: " . md5($password) . ".<br>";
*/

if(($username == $row['username']) && ($password == $row['password'])) {
	//echo "It's work!";
	session_start();
	$_SESSION['user_id'] = $row['ID'];	
	//echo $_SESSION['user_id'];
	//Then redirect to another page, user.php
	include("home.php");
    exit();
}
else{	

	include('faildusername.php');
	
	exit();
}

?>