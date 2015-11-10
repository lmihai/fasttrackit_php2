<html>
<head>
<style type="text/css">

html {
background: url(images/background.jpg) no-repeat center center fixed;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
 background-size: cover;
}
 h1 , p , h2 , h3 , a , li{
 	color: white ;
 }
 </style>
</head>
<body>

<center>
<h1> <?php print($movie_details['title']); ?> </h1>
<h2> <?php print($movie_details['year']); ?> </h2>
<img src="<?php print($movie_details['poster']); ?>">
</center>
<p><img src="<?php print($movie_actors['image1']); ?>"> <?php print($movie_actors['actor1'] ); ?> </p>
<p><img src="<?php print($movie_actors['image2']); ?>"> <?php print($movie_actors['actor2'] ); ?> </p>
<p><img src="<?php print($movie_actors['image3']); ?>"> <?php print($movie_actors['actor3'] ); ?> </p>

<p><a href="movies.php">Back to movies</a></p>

</body>
</head>