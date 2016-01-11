<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// sql to create table
$sql = "CREATE TABLE Files (
ID INT NOT NULL AUTO_INCREMENT, 
FileLocation TEXT NOT NULL,
PRIMARY KEY (ID),
);
ALTER TABLE Students ADD Photo INT;";


// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

?>
