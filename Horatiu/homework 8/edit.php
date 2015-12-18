<?php 
$conn = new PDO('mysql:host=localhost;dbname=school','root','');
	if (isset($_POST['submitButton'])) {
		$query = $conn->prepare("UPDATE Courses SET CourseName= :cname, Trainer= :tname WHERE ID = :id");
		$query->execute(array(':cname'=> $_POST['courseName'],':tname'=> $_POST['trainerName'], ':id'=>$_GET['id']));
		header('location:list.php');
	}

 ?>
 <html>

<head></head>

<body>
<form method = "post" action="#">
	<div>
	<label>Course name: </label>
	<input type="text" name="courseName" placeholder="Adauga curs" required>
	</div>
	<div>
	<label>Trainer name: </label>
	<input type="text" name="trainerName" placeholder="Adauga trainer" required>
	</div>
	<div>
	<input type="submit" name="submitButton" value="EDIT" >
	</div>

</form>
<a href=" list.php">Back to index</a>
</body>
</html>