		<?php
			include('models/model_movies.php');
	if (isset($_GET['movies'])) 
	{
		$movie_position_in_array = $_GET['movies'];
		$movies_details = $movies[$movie_position_in_array];
		include('view/view_movies.details.tpl.php');
	} 