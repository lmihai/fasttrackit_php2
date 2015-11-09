<?php

include('models/movies.php');


if (isset($_GET['movie'])) {
	$position_movie = $_GET['movie'];
$movie_details = $movies[$position_movie];
include ('views/view_movie_details.tpl.php');
}

