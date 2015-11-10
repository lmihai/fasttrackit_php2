<center>
<h1> <?php print($movie_details['title']); ?> </h1>
<h2> <?php print($movie_details['year']); ?> </h2>
<img src="<?php print($movie_details['poster']); ?>">
</center>
<p><img src="<?php print($movie_actors['image1']); ?>"> <?php print($movie_actors['actor1'] ); ?> </p>
<p><img src="<?php print($movie_actors['image2']); ?>"> <?php print($movie_actors['actor2'] ); ?> </p>
<p><img src="<?php print($movie_actors['image3']); ?>"> <?php print($movie_actors['actor3'] ); ?> </p>

<p><a href="movies.php">Back to movies</a></p>

