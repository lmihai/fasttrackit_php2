<?php
//browser - server
session_start(); // serverul genereaza cheia 
//$_SESSION['name'] = 'John'; //vrem sa salvam o variabila cu numele John in baza de date

//echo $_SESSION['name']; //accesam variabila
//ca sa stergem prima data folosim session_start() apoi:

unset($_SESSION['name']);
?>