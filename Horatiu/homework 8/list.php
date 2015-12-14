

<center>
<?php
$conn = new PDO('mysql:host=localhost;dbname=school','root','');

$sql = $conn->query('select * from courses');
$results = $sql->fetchAll(PDO::FETCH_ASSOC);


?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>


<table>
<tr>
	<th>Course name</th>
	<th>Trainer</th>
	<th>Operations</th>
</tr>

<?php 
for ($i=0; $i <count($results) ; $i++) { 
 ?> 
 <tr>
	<td><?php echo $results[$i]['CourseName']; ?></td>
	<td><?php echo $results[$i]['Trainer']; ?></td>
	<td>	<a href="edit.php?id=<?php echo $results[$i]['ID'] ?>"> Edit </a>	<a href="delete.php?id=<?php echo $results[$i]['ID'] ?>">Delete</a>	</td>
 </tr>
	<?php } ?>
	</table>
</center>
<a href="add.php">Add a new course</a>

</body>
</html>