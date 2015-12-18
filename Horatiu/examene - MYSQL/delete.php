<?php 
$conn = new PDO('mysql:host=localhost;dbname=facultate', 'root', '');

if (isset($_GET['id'])) {
	$query = $conn->prepare("DELETE FROM cursuri WHERE ID=:id");
	$query->execute(array(':id'=>$_GET['id']));
	header('location:listaExamene.php');

}

 ?>