<?php
$con = mysqli_connect("localhost","root","","UserRegistration");
if(!$con) {
	echo 'Eroare conectare la baza de date!';
}