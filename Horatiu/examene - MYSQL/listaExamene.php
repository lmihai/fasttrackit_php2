<?php 
	
	$conn = new PDO('mysql:host=localhost;dbname=facultate', 'root', '');
	$sql = $conn->query('SELECT * FROM cursuri');
	$results = $sql->fetchALL(PDO::FETCH_ASSOC);
	
 ?>

 <html>
 <head>
 	<title>Examene</title>

 	<link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
 		<h1>Semestrul 1</h1>	 
 <table>
 <tr>
 	<th>Nume curs </th>
 	<th>Data examen </th>
 	<th>Nota examen </th>
 	<th>Dificultate </th>
 </tr>
 	
 		<?php for ($i=0; $i <count($results) ; $i++) { 
 		 ?>
 	<tr>
 		<td><?php echo $results[$i]['numeCurs']; ?>	</td>
 		<td><?php echo $results[$i]['dataExamen']; ?></td>
 		<td><?php echo $results[$i]['notaExamen']; ?></td>
 		<td><?php echo $results[$i]['dificultate']; ?></td>
 		<td>   <a href="edit.php?id= <?php echo $results[$i]['ID']; ?>">Edit</a>   <a href="delete.php?id= <?php echo $results[$i]['ID']; ?>"> Delete </a>   </td>
 	</tr>

 	<?php } ?>
 </table><br>
 <a href="add.php">Adauga un nou examen</a>
			
 </body>
 </html>