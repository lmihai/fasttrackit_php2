<!DOCTYPE html PUBLIC>
<html>
	<head>
		<title>
			My movies
		</title>


	</head>
	<body>
		<link rel="stylesheet" type="text/css" href="style.css" />
	<center>
			

			<?php

			include("models/model_movies.php");
			include ("views/view_movies.tpl.php");
			
			




//$movie_position_in_array = $_GET["movie"];

			?>

		</center>
	
	</body>
</html>