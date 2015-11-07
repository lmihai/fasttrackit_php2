<?php


	include('models/model_movies.php');
	if (isset( $_GET['movie'])) {
		$movie_position_in_array = $_GET['movie'];
		$movie_details = $movies[$movie_position_in_array];
		include('views/view_movie_details.tpl.php');
		/*print('<h1>' . $movie_details['title'] . '</h1>');
		print('<h2>' . $movie_details['year'] . '</h2>');
		print('<img src="' . $movie_details['poster'] . '">');
		print('<p><a href="movies.php?">BACK</a></p>');
*/
	}