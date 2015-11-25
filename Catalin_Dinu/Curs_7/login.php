<?php
if (!isset($_SESSION)) {
    session_start();           // start the session
}

$server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "homework_7";

// Establishing connection with server by passing server_name, user_id and password as a parameter
$db_conn = mysqli_connect($server, $db_user, $db_pass);
if (!$db_conn) {
    echo "Unable to connect to DB: " . mysql_error();
    exit;
}
//  Selecting database
if (!mysqli_select_db($db_conn, "homework_7")) {
    echo "Unable to select homework_7: " . mysql_error();
    exit;
}

if(isset($_POST["username"]) && isset($_POST["password"])) {
	$user = $_POST["username"];     // define username
	$pass = MD5($_POST["password"]);    // define password
    // SQL query to fetch information of registerd users and finds user match.
    $sql = 'SELECT * FROM login_form WHERE username = "' . $user . '" and password = "' . $pass . '"';
	$result = mysqli_query($db_conn, $sql) or die ( "Error : ". mysql_error() );
	$row = mysqli_fetch_array($result);
	if($row["username"]==$user && $row["password"]==$pass) {
        $_SESSION["user_id"] = $row["id"];      // Initializing Session
		}
	else {
        if (isset($_SESSION['user_id'])) {
            unset($_SESSION['user_id']);
        }
	}
    // Redirecting To Other Page
    header('Location: http://localhost/fasttrackit_php2/Catalin_Dinu/Curs_7/user.php');
}
?>

<html>
	<head>
		<title>LOGIN</title>
	</head>
	<body>
		<form name="form" method="post" action="login.php">
				<input type = "text" name="username" value = ""> username<br><br>
				<input type = "password" name="password" value = ""> password<br><br>
				<input type="submit" value="Login">
		</form>
	</body>
</html>

