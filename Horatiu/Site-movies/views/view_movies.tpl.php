<h1>My movies</h1>
<ul>

<?php

for ($i=1; $i <=count($movies) ; $i++) { ?>
<li>
<?php	$movie_title = $movies[$i]['title']; ?>
	<a href="movies_details.php?movie=<?php echo $i ?>"><strong><em><?php echo $movie_title ?></em></strong></a>

</li>
<?php } ?>








</ul>