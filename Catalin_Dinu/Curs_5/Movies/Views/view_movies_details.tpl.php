<link rel="stylesheet" type="text/css" href="views/style.css">
<h1> <?php echo($movie_details["title"]); ?> </h1>
<h2> <?php echo($movie_details["year"]); ?> </h2>
<img src="<?php echo($movie_details["poster"]); ?> ">
<h3>Cast</h3>
<?php
for ($i=0; $i < count($actors[0]); $i++) {
		$actor_names = $actors[$i][0]["actor"];
		$actor_image = $actors[$i][0]["image"];
		echo '<img src="' . $actor_image . '"style="width:40px;">' . $actor_names . "<br>";
		}
?>
<p><a href="movies.php">Back to movies</a></p>