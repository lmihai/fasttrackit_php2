<?php
$movies = array(
			array(
				"title" => "The Godfather",
				"year" => 1972,
				"poster"=> "img/godfather.jpg"
				),
			array(
				"title" => "Pulp Fiction",
				"year" => 1994,
				"poster"=> "img/pulpfiction.jpg"
				),
			array(
				"title" => "Life Is Beautiful",
				"year" => 1997,
				"poster"=> "img/life.jpg"
				),
			);
//return details about movie
function get_movie_details($movie_index = NULL) {
	global $movies;
	return $movies[$movie_index];
}

?>