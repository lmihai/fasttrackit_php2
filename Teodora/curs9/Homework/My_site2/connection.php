<?php
//connection
$server = 'localhost';
$user = 'root'; 
$pass = ''; 
$db_name = 'school';

$db_conn = mysqli_connect($server, $user, $pass);
mysqli_select_db($db_conn,$db_name);
