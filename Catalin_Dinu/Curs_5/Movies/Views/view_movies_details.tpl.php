<link rel="stylesheet" type="text/css" href="views/style.css">
<h1> <?php echo($movie_details["title"]); ?> </h1>
<h2> <?php echo '<a href="movies_years.php?year=' . $movie_details["year"] .'">' . $movie_details["year"] . '</a>' ?> </h2>
<h3>Genres:
<?php
	foreach ($movie_details["genres"] as $movie_detail_genres) {
		echo'<a href="movies_genres.php?genre=' . $movie_detail_genres .'">' . $movie_detail_genres . "</a>" . " ";
			}
?>
</h3>
<img src="<?php echo($movie_details["poster"]); ?> ">
<h3>Cast</h3>
<?php
function cast_actors() {
	global $movie_details;
foreach ($movie_details["actors"] as $movie_detail_cast) {
	foreach ($movie_detail_cast as $key => $movie_detail_actors) {
			if ($key == 'image') {
				echo  '<img src="'. $movie_detail_actors .'" style="width:45px;"> ';
			}
			else {
				echo  $movie_detail_actors;
			}
		}
		echo  "<br>";
	}
}
cast_actors();
?>
<p><a href="movies.php">Back to movies</a></p>

