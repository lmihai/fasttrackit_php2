<?php 

//include the list of movies.
include('models/model_movies.php');

 if (isset($_GET['movie'])) {

        //Display all movie details 
        $movie_position_in_array = $_GET['movie'];
        $movie_details = $movies[$movie_position_in_array];
 
        //include movie details
        include('views/view_movie_details.tpl.php');
}