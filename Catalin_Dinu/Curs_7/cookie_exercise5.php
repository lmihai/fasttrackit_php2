<?php
if (!isset($_COOKIE['visits'])) $_COOKIE['visits'] = 0;
$visits = $_COOKIE['visits'] + 1;
setcookie('visits',$visits,time()+3600);
if ($visits % 5 == 0) {
	echo"Hello";
} else {
	echo'';
}
?>