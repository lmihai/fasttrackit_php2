<?php

include('models/movies.php');


if (isset($_GET['movie'])) {
	$position_movie = $_GET['movie'];
$movie_details = $movies[$position_movie];
echo "<h1>".$movie_details['title']."</h1>";
echo "<h2>".$movie_details['year']."</h2>";
print('<img src="'.$movie_details['poster'].'">');
echo '<p><a href="movies.php">Back to movies</a></p>';
}

