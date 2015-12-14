<?php 
$conn = new PDO('mysql:host=localhost;dbname=facultate', 'root', '');

if (isset($_POST['submit'])) {
	$query = $conn->prepare("INSERT INTO cursuri (numeCurs, dataExamen, notaExamen, dificultate) VALUES (:nCurs, :dataEx, :notEx, :dif)");
	$query->execute(array(':nCurs'=>$_POST['numeCurs'], ':dataEx'=>$_POST['dataExamen'], ':notEx'=>$_POST['notaExamen'], ':dif'=>$_POST['textarea']));
	header('location:listaExamene.php');
	print_r($_POST);
}


 ?>
 <html>
 <head>
 	<title>Edit page</title>


 </head>

 <body>
 <form method="post" action="#">

	
 	<div>
 		<label> Numele cursului </label>
 		<input type="text" name="numeCurs" placeholder="Numele cursului"  >
    </div>
    <div>
 		<label> Data examenului </label>
 		<input type="text" name="dataExamen" placeholder="Data examenului"  >
 	</div>
 	<div>
 		<label> Nota examenului </label>
 		<input type="text" name="notaExamen" placeholder="Nota examenului"  >
 	</div>
 	<div>
 		<label> Dificultate </label><br>
 		<textarea name="textarea" rows="8" cols="30" placeholder="Dificultatea examenului - camp obligatoriu" ></textarea>
 	</div>
 		<input type="submit" name="submit" value="Submit" >

 	

 </form>
 <a href="listaExamene.php">Inapoi la tabel</a>
 </body>


 </html>