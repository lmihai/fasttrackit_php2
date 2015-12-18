 <?php
 if (!isset($_COOKIE['visits'])) {
	setcookie('visits' , 1 , time()+ (10 * 365 * 24 * 60 * 60));

////////////////////////////////
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Create database
$sql = "CREATE DATABASE loginform";
$sql = "CREATE TABLE loginform.users (
	ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	username VARCHAR(32) NOT NULL,
	password VARCHAR(128) NOT NULL
	)";
 $sql = "INSERT INTO loginform . users (username,password) VALUES('admin','".md5('admin')."')";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully : check in the PHPMyAdmin for loginform database if you  won't believe me .:))";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
////////////////////////////////
} else {
////////////////////////////////

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

///////////////////////////////////
}
include('login.php');