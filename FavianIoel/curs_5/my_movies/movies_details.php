<?php 

//include the list of movies & actors .
include ('models/model_actors.php');
include('models/model_movies.php');

 if (isset($_GET['movie'])) {

        //Display all movie details 
        $movie_position_in_array = $_GET['movie'];
        $movie_details = $movies[$movie_position_in_array];
        $movie_actors=$actors[$movie_position_in_array];
        
 if (isset($_GET['movie'])) {
 	//Display all Actors for each movie.
    $movie_actors=$actors[$movie_position_in_array];
  }

        include('views/view_movie_details.tpl.php');


} 

