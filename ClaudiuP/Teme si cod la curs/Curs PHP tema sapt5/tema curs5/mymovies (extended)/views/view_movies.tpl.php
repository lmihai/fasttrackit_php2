
					<center><br><br><br><br>
			<div id="overlay">
			<h1>My movies</h1> <br>
				<link rel="stylesheet" type="text/css" href="style.css" />


					
					<ul>
<?php
					for ($i = 0; $i < count($movies); $i++)

					{ ?>
				<h3><li> 
					<a href="movie_details.php?movie=<?php print($i); ?>" class="btn">
						<?php print ($movies[$i]["title"]); ?>
						</a>
						<?php
						echo "<br>";
						?></h3>
					
				</li>

						
					
					<?php } ?>
				<br><br><hr>
				</div>
					</center>