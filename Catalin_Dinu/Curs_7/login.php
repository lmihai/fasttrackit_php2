<?php

// start the session
session_start();

$server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "homework_7";

$db_conn = mysql_connect($server, $db_user, $db_pass);


if (!$db_conn) {
    echo "Unable to connect to DB: " . mysql_error();
    exit;
}

if (!mysql_select_db("homework_7")) {
    echo "Unable to select homework_7: " . mysql_error();
    exit;
}
if(isset($_POST["username"]) && isset($_POST["password"])) {
	$user = $_POST["username"];
	$pass = MD5($_POST["password"]);

 $sql = 'SELECT * FROM login_form WHERE username = "' . $user . '" and password = "' . $pass . '"';
	$result = mysql_query($sql, $db_conn) or die ( "Error : ". mysql_error() );
	$row = mysql_fetch_array($result);
	if($row["username"]==$user && $row["password"]==$pass) {
    	echo"Excelent";
		}
	else {
    	echo"Sorry, your credentials are not valid, Please try again.";
	}

}

/*
if (isset($_SESSION["username"])) {
	header ('Locaction: http://localhost/fasttrackit_php2/Catalin_Dinu/Curs_7/user.php');
}
*/



// $sql = 'SELECT username, password FROM login_form WHERE "username" = "' . $user . '" and "password" = MD5("' . $pass . '")';
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

