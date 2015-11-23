<!DOCTYPE html>
<html lang="en">
<head>
	<!-- rendering & touch zooming (mobile) -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Latest compiled and minified CSS -->
    <link href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/shift.css" rel="stylesheet">
    <link rel="stylesheet" href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/bootstrap.css">
        
         <style type="text/css">
         <?php include('views/style.css'); ?>
         </style>

</head>
<body>

<div class="container">
	<div class="jumbotron"

    <p><a class="btn btn-default" href="movies.php" role="button">Home</a></p>
       <center>
    <h1 title="Title"> <?php print($movie_details['title']); ?> </h1>
       </center>
</div> 
</div>

<div class="container">
    <center>

      <h2 title="year"> <?php print($movie_details['year']); ?> </h2>

     <?php
       for ($i = 1; $i <= count($movies); $i++) { ?><?php } ?>

            <a href="https://www.imdb.com<?php print($link[$i]); ?>"> 

       <img src="<?php print($movie_details['poster']); ?>" title="go to info" alt="poter" class="img-rounded">
            </a>
    </center>  

<h3>Genre:</h3>
<?php
	foreach ($movie_details["genres"] as $movie_detail_genres) {
		echo'<a href="movies_genres.php?genre=' . $movie_detail_genres .'">' . $movie_detail_genres . "</a>" . " ";
			}
?> 

</div>

<hr class="style-seven">

<div class="container">
<h3>Cast:</h3>
<p><img src="<?php print($movie_actors['image1']); ?>" class="img-rounded"> <?php print($movie_actors['actor1'] ); ?> </p>
<p><img src="<?php print($movie_actors['image2']); ?>" class="img-rounded"> <?php print($movie_actors['actor2'] ); ?> </p>
<p><img src="<?php print($movie_actors['image3']); ?>" class="img-rounded"> <?php print($movie_actors['actor3'] ); ?> </p>
</div>

<hr  class="style-seven">
<div class="container">
<p><a class="btn btn-default" href="movies.php" role="button">back to movies</a></p>
</div>

</body>
</head>