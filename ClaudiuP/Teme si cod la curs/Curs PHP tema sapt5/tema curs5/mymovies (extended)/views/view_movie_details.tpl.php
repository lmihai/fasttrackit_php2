<div id="overlay">
	
<link rel="stylesheet" type="text/css" href="style.css" />
<br>
<h3 class="back"><a href="index.php">Back to movies</a></h3>

<h1 class="titles"><?php print ($movie_details["title"]); ?> </h1>

<h2><?php print ($movie_details["year"]); ?> </h2>

<img src="<?php print ($movie_details["poster"]); ?>" id="poster">
<br>
<p id="genres">Genres:
<?php

		foreach ($movie_details["genres"] as $genres)
			{
		print '<a href="movie_genres.php?genre=' . $genres .'">' . $genres . "</a>" . " ";
			}
			

?>
</p>
<h3 class="pitches"><?php print ($movie_details["pitch"]); ?> </h3>

<hr><br>
	<div class="actorimages">
		<h3>Actors</h3>
		<img src="<?php print($actor_details['image1']); ?>" id="image-left">
		<img src="<?php print($actor_details['image2']); ?>" id="image-center"> 
		<img src="<?php print($actor_details['image3']); ?>" id="image-right"> 
		<br>
		<p id="image-left"><?php print($actor_details['actor1'] ); ?> </p>
		<p id="image-center"><?php print($actor_details['actor2'] ); ?> </p>
		<p id="image-center"><?php print($actor_details['actor3'] ); ?> </p>
	</div>
	<br>
	<hr>
			


<h3 class="back"><a href="index.php">Back to movies</a></h3>

<br><br><br>
</div>


