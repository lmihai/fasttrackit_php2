<?php

	include('models/model_movies.php');
	include('models/model_actors.php');

	if(isset($_GET['movie'])) {
			//$movie_position_in_array = $_GET['movie'];
			//do something about that movie 
			//print($movie_position_in_array);

			//instead of accessing the array directly from the controller file, let's use the fnew function
			$movies_details = get_movie_details($_GET['movie']);
			include('views/view_movies_details.tpl.php');
			$actor_details = get_actor_details($_GET['movie']);
			include('views/view_actor_details.tpl.php');
		}	