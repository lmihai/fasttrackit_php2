			<?php

			include("models/movie_genres.php");
			include("models/model_movies.php");
			include("genre_details.php"); 
			?>

			
					<center><br><br><br><br>
			<div id="overlay">
			<h1>My movies</h1> <br>
				<link rel="stylesheet" type="text/css" href="style.css" />


					<h2>Movies in this genre are</h2>

					<ul>
<?php

echo ('<li><a href="movie_details.php?movie=' . $i . '">' . $movie_title . '</a></li><br>');


?>
					