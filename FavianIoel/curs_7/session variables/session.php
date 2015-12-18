<?php

session_start();// we want to work with sessions .
$_SESSION['name'] ='John'; //save a session var .
echo $_SESSION['name'] ='John';//read session .
unset($_SESSION['name']);//delete session .

 ?>