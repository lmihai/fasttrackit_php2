<?php

$username = $_POST['username'];
$password = $_POST['password'];
/*
echo "Hello " . $username ."!<br>";
echo "Your password encrypted is: " . md5($password) . ".<br>";
*/
//connection
// First we need to tell PHP to cennect to the MYSQL server
// using  mysql_connect() function
//and select the database using mysql_select_db() function
$server = 'localhost';
$user = 'root'; 
$pass = ''; 
$db_name = 'fasttrackit';
error_reporting(E_ALL ^ E_DEPRECATED);// raporteaza erorile in afara de erorile de depreciere

$db_conn = mysqli_connect($server, $user, $pass);
mysqli_select_db($db_conn,$db_name);

$sql = "SELECT * FROM users"; 
//check if user is valid, i.e. username exists in database and
//the password matches the one in the db
$result = mysqli_query($db_conn, $sql);
$row = mysqli_fetch_assoc($result);
if(($username == $row['user_name']) && ($password == $row['user_password'])) {
	echo "It's work!";
}
?>