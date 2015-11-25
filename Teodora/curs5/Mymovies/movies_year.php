<?php
	
include("models/model_movies.php");
for ($i=1; $i <=count($movies); $i++) {
	$movie_title = $movies[$i]["title"];
	$movie_year = $movies[$i]["year"];
		if (isset($_GET["year"])) {		
			 if ($_GET["year"] === $movie_year) {
			 	echo ('<li><a href="movies_details.php?movie=' . $i . '">' . $movie_title . '</a></li><br>');
				}
			}
}



?>
