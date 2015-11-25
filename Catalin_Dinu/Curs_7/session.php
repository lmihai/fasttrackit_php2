<?php		
session_start();
$_SESSION["name"] = "John";
echo $_SESSION["name"];
unset($_SESSION["name"]);
echo $_SESSION["name"];
?>