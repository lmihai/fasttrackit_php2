<?php 
$conn = new PDO('mysql:host=localhost;dbname=school','root','');

if (isset($_GET['id'])) {
	$query = $conn->prepare("DELETE FROM Courses WHERE ID=:id");
	$query->execute(array(':id'=>$_GET['id']));
	header('location:list.php');

}


 ?>