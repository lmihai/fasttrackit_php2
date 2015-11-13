

<h1>My movies</h1>
<ul>
	<?php for($i = 1; $i <= count($movies); $i++){
		?>
		<li>
			<a href = "movies_details.php?movie=<?php print($i);?>">
			<?php print($movies[$i]['title']); ?>
			</a>
			</li>

	<?php }	?>



</ul>