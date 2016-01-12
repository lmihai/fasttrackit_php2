<?php

$con = mysqli_connect("localhost","root","","userregistration2");
if(!$con) {
	echo 'Eroare conectare la baza de date!';
}