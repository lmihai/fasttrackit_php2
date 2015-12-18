<?php 
session_start();
 ?>
 <html>
 <head>
 	<title>Exercise session vars.</title>
 </head>
 <body>
 <?php/* 
if (!isset($_SESSION['name'])) {
	$_SESSION['name'] = 'Favian Ioel P.';
	echo $_SESSION['name'];
}else echo $_SESSION['name']; */

if (isset($_GET['name'])) {
	$_SESSION['name'] = $_GET['name']
}

if (isset($_SESSION['name'])) {
	echo $_SESSION['name'];
}
  ?>
 </body>
 </html>