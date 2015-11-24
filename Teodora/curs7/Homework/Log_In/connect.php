<?php

$server = 'localhost';
$user = 'root'; 
$pass = ''; 
$db_name = 'fasttrackit';
error_reporting(E_ALL ^ E_DEPRECATED);// raporteaza erorile in afara de erorile de depreciere

$db_conn = mysqli_connect($server, $user, $pass);
mysqli_select_db($db_conn,$db_name);

$sql = "SELECT * FROM users WHERE user_name='".$username."' AND user_password='".($password)."' "; 
//check if user is valid, i.e. username exists in database and
//the password matches the one in the db
$result = mysqli_query($db_conn, $sql);
$row = mysqli_fetch_assoc($result);

?>