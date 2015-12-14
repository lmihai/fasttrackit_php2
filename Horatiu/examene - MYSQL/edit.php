<?php 
	$conn = new PDO('mysql:host=localhost;dbname=facultate', 'root', '');
	if (isset($_POST['submit'])) {
		$query = $conn->prepare("UPDATE cursuri SET numeCurs= :cname, dataExamen= :dExam, notaExamen= :nExam, dificultate= :tArea WHERE ID= :id");
		$query->execute(array(':cname'=>$_POST['numeCurs'], ':dExam'=>$_POST['dataExamen'], ':nExam'=>$_POST['notaExamen'], ':tArea'=>$_POST['textarea'], ':id'=>$_GET['id']));	
		header('location:listaExamene.php');
	}
/*  if (isset($_POST['submitNota'])) {
		$query = $conn->prepare("UPDATE cursuri SET notaExamen= :nExam WHERE ID = :id");
		$query->execute(array(':nExam'=>$_POST['submitNota'], ':id'=>$_GET['id']));
		header('location:listaExamene.php');
	} */
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
 	<!--	<input type="submit" name="submitNota" value="Submit" > -->
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