<?php

$server = 'localhost';
$user = 'root'; 
$pass = ''; 
$db_name = 'fasttrackit';
$db_table = 'users';
error_reporting(E_ALL ^ E_DEPRECATED);// raporteaza erorile in afara de erorile de depreciere

$db_conn = mysqli_connect($server, $user, $pass);
mysqli_select_db($db_conn,$db_name);



?>