<?php


include("models/model_genres.php");
include("models/model_movies.php");



for ($i=1; $i < count($movies); $i++) {
	$movie_title = $movies[$i]["title"];

		if (isset($_GET["genre"])) {
			foreach ($movies[$i]["genres"] as $genre) {	

	    if ($_GET["genre"] === $genre) {
			
			include("views/view_movie_genres.tpl.php");
			
			}
		}
	}
}
?>
