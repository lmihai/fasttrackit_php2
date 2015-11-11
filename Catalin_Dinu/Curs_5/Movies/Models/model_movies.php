<?php
include("models/model_movies_genres.php");
include("models/model_actors.php");
$movies = array(
				array(
					"title" => "The Godfather",
					"year" => "1972",
					"genres" => array($genres[0], $genres[1]),
					"poster" => "images/godfather.jpg",
					"actors" => array($actors[0], 
									  $actors[1],									  
									  $actors[2],
									  ),
					),
				array(
					"title" => "Pulp Fiction",
					"year" => "1994",
					"genres" => array($genres[0], $genres[1]),
					"poster" => "images/pulpfiction.jpg",
					"actors" => array($actors[3],
									  $actors[4],
									  $actors[5],
									  ),
					),
				array(
					"title" => "Life is Beautiful",
					"year" => "1997",
					"genres" => array($genres[2], $genres[1], $genres[3]),
					"poster" => "images/life.jpg",
					"actors" => array($actors[6],
									  $actors[7],
									  $actors[8],
									  ),
					),
				array(
					"title" => "Scent of a Woman",
					"year" => "1992",
					"genres" => array($genres[1]),
					"poster" => "images/scentofawoman.jpg",
					"actors" => array($actors[1],
									  $actors[9],
									  $actors[10],
									  ),
					)
				);
function get_movie_details($movie_index = NULL) {
	global $movies;
	return $movies[$movie_index];
}
?>