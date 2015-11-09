<h1>My movies</h1>
<ul>
<?php
for ($i=0; $i < count($movies); $i++) { ?>
	<li>
		<a href="movies_details.php?movie=<?php echo($i); ?>">
			<?php echo($movies[$i]["title"]); ?>
		</a>
	</li>
<?php } ?>
</ul>