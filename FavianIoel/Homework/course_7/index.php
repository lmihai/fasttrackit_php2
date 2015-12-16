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
$sql = "CREATE TABLE loginform . users (
	ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	username VARCHAR(32) NOT NULL,
	password VARCHAR(128) NOT NULL
	)";
 $sql = "INSERT INTO loginform . users (username,password) VALUES('admin','".md5('admin')."')";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
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
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Login Form</title>
</head>
<body>

	<center>
		<div class="login">
		 <div class="titlu">Login</div>
		  	<div>

				 <form name="login" method="post" action="home.php">
				  <input type="text" name="username"  placeholder="username" required>
				  <br>
				  <br>
				  <input type="password" name="password" placeholder="password" required>
				  <br>
				  <br>
				     <p class="remember_me">
                        <label>
                          <input type="checkbox" name="remember_me" id="remember_me">
                            Remember me on this computer
                        </label>
                     </p>
				  <input type="submit" name="submit" value="Login">
				 </form>
		   </div>
	   </div>
	</center>
	
	
</body>
</html>