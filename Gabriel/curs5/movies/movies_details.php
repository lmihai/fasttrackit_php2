
	
	<?php



	include('models/model_movies.php');
	include('models/model_actors.php');
	if (isset( $_GET['movie'])) {
		$movie_details = get_movie_details($_GET['movie']);
		include('views/view_movie_details.tpl.php');
		$actor_details = get_actor_details($_GET['movie']);
		include('views/view_actor_details.tpl.php');
		
	}
	?>


