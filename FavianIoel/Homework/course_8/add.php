<?php 
require_once('conn.php');
?>
<html>
<head>
	<title>Add Course</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<center>
		<div class="titlu"><h1>Add another course to table.</h1></div><br><br>
		<div class="form">

			<form method="POST" action="index.php" >
				Course Name: <br><br>
				<input type="text" name="CourseName"required>
				<br><br>
				Trainer Name: <br><br>
				<input type="text" name="Trainer"required>
				<br><br>
				<input name="addcourse" type="submit" value="Add course" class="button" id="link">
			</form>
		</div>
	</center>
</body>
</html>

