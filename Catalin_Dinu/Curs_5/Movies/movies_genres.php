<link rel="stylesheet" type="text/css" href="views/style.css">
<?php
include("models/model_movies_genres.php");
include("models/model_movies.php");
for ($i=0; $i < count($movies); $i++) {
	$movie_title = $movies[$i]["title"];
		if (isset($_GET["genre"])) {		
			 if ($_GET["genre"] == $genres[$i]) {
			 	echo ('<li><a href="movies_details.php?movie=' . $i . '">' . $movie_title . '</a></li><br>');
				}
			}
}
?>


