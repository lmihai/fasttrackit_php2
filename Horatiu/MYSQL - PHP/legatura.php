<?php
$server = 'localhost';
$user = 'root';
$pass = '';
$db_name = 'fasttrackid';
/// CELE DE MAI SUS SUNT PREDEFINITE - NU NECESITA SA LE SCRIU DIN NOU, DAR AM FACUT-O CA SA OBSERVAM
// (continuare) FIECARE VARIABILA CE INSEAMNA

$db_conn = mysql_connect($server, $user, $pass);
mysql_select_db($db_name, $db_conn);
error_reporting(E_ALL);   /// prin asta raportam toate erorile

$sql = "SELECT * FROM students WHERE student_id = 1 ";
//creez o variabila noua
$result = mysql_query($sql, $db_conn);
$row = mysql_fetch_assoc($result);

echo $row['student_name'];echo '<br>';


echo md5('Horatiu'); // asta e ceva diferit - ca sa modifice parola care a setat-o


?>