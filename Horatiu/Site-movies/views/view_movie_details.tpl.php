<style type="text/css">
<?php include('views/style.css'); ?>
</style>

<center>
<h1> <?php print($movie_details['title']); ?> </h1>
<h2> <?php print($movie_details['year']); ?> </h2>
<img src="<?php print($movie_details['poster']); ?>" ID = "ppp">
</center>



<p><?php echo $movie_actors['name1']; ?> </p>	<img src="<?php echo $movie_actors['photo1']; ?>">
<p><?php echo $movie_actors['name2']; ?> </p>	<img src="<?php echo $movie_actors['photo2']; ?>">
<p><?php echo $movie_actors['name3']; ?> </p>	<img src="<?php echo $movie_actors['photo3']; ?>">







<?php echo '<p><a href="movies.php">Back to movies</a></p>'; ?>


 