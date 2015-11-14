<?php
$movies = array();
			$movies[1]= array('title' => 'The Godfather', 'year' => 1972, 'poster' => 'img/godfather.jpg');
			$movies[2]= array('title' => 'Pulp Fiction', 'year' => 1994, 'poster' => 'img/pulpfiction.jpg');
			$movies[3]= array('title' => 'Life Is Beautiful', 'year' => 1997, 'poster' => 'img/life.jpg');
	
//create function which return details about movie
function get_movie_details($movie_index = NULL) {
	global $movies;
	return $movies[$movie_index];
}

?>