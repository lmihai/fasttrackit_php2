<?php
include("models/model_movies.php");
include("models/model_actors.php");
if (isset($_GET["movie"])) {
	$movie_details = get_movie_details($_GET["movie"]);
	include("views/view_movies_details.tpl.php");
}
?>