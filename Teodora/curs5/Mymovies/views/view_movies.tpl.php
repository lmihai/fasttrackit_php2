<h1>My movies</h1>
<hr>
<ul>

	<?php
		print("<ul class='center'>\n");
				for($i=0; $i < count($movies); $i++) {
					$movie_title = $movies[$i]["title"];					
					print('<li><a href="movies_details.php?movie=' . $i . '">' . $movie_title . "</a></li>\n");
				} 
	?>
	
</ul>