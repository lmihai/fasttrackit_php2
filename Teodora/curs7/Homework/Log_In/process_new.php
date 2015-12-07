<?php
$username = $_POST['username'];
$password = md5($_POST['password']);

require_once('connect.php');

$sql_new = "INSERT INTO users (user_name, user_password) VALUES ('$username', '$password')";
$result_new = mysqli_query($db_conn,$sql_new);

// if successfully insert data into database, displays message "Successful". 
if($result_new){
echo "Successful";
echo "<br>";
echo "<a href='login.php'>Go to Log in</a>";
}

else {

echo "ERROR";
error_reporting(E_ALL ^ E_DEPRECATED);

}
?> 



