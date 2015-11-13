<html>
<head>
         <style type="text/css">
         <?php include('views/style.css'); ?>
         </style>

</head>
<body>

<p><a href="movies.php">Home</a></p>
<center>
<hr>
<h1 title="Title"> <?php print($movie_details['title']); ?> </h1>
<hr>
<h2 title="year"> <?php print($movie_details['year']); ?> </h2>

<?php
       for ($i = 1; $i <= count($movies); $i++) { ?><?php } ?>

 <a href="https://www.imdb.com<?php print($link[$i]); ?>"> 

<img src="<?php print($movie_details['poster']); ?>" title="go to info">
</a>


</center>
<?php
	foreach ($movie_details["genres"] as $movie_detail_genres) {
		echo'<a href="movies_genres.php?genre=' . $movie_detail_genres .'">' . $movie_detail_genres . "</a>" . " ";
			}
?>
<hr>
<h3>Cast:</h3>
<p><img src="<?php print($movie_actors['image1']); ?>"> <?php print($movie_actors['actor1'] ); ?> </p>
<p><img src="<?php print($movie_actors['image2']); ?>"> <?php print($movie_actors['actor2'] ); ?> </p>
<p><img src="<?php print($movie_actors['image3']); ?>"> <?php print($movie_actors['actor3'] ); ?> </p>
<hr>
<p><a href="movies.php">back to movies</a></p>


</body>
</head>