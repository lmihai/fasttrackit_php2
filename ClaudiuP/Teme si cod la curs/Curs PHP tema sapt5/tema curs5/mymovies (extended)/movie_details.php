			<div id="overlay">
				<?php
			include("models/model_movies.php");
		echo "<center>";
			if (isset($_GET["movie"]))
			{
				$movie_position_in_array = $_GET["movie"];
				$movie_details = $movies[$movie_position_in_array];
				
			}		
			
			if (isset($_GET['movie'])) 
				{
 		//Display all Actors for each movie.
   				 $actor_details=$actors[$movie_position_in_array];
 				} 
 				include('views/view_movie_details.tpl.php');
		echo "</center>";
		
			