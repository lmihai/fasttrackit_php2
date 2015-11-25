<?php  
// First we need to tell PHP to cennect to the MYSQL server
// using  mysql_connect() function
//and select the database using mysql_select_db() function
$server = 'localhost';//parametru ptr functia mysgli_connect
$user = 'root'; //parametru ptr functia mysgli_connect
$pass = ''; //parametru ptr functia mysgli_connect
$db_name = 'fasttrackit';//parametru ptr functia mysgli_select_db

error_reporting(E_ALL ^ E_DEPRECATED);// raporteaza erorile in afara de erorile de depreciere

$db_conn = mysqli_connect($server, $user, $pass);
mysqli_select_db($db_conn,$db_name);

$sql = "SELECT * FROM students WHERE student_id = 1";

$result = mysqli_query($db_conn, $sql);

$row = mysqli_fetch_assoc($result);
echo $row['student_name'];
echo "<br>";

$string = 'Teodora Roman';// example using md5(function)
echo "Results of md5() function for my string is: " . md5($string) ."<br>";


?>