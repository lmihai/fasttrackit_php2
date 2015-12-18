
					<center>
			<h1>My movies</h1>



					<ul>
<?php
					for ($i = 0; $i < count($movies); $i++)

					{ ?>
				<li>
					<a href="movie_details.php?movie=<?php print($i); ?>">
						<?php print ($movies[$i]["title"]); ?>
					</a>
				</li>
						
					
					<?php } ?>

					</center>