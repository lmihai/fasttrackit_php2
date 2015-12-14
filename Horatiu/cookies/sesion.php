<?php
session_start();
$_SESSION['name'] = 'John';
//unset($_SESSION['name']); //stergem
echo $_SESSION['name'];


?>