<h1>My awkward list of sports</h1>

<ul>
<?php   

for ($i=1; $i <= count($sports) ; $i++) { ?>
	<li>
		<?php $type_sport = $sports[$i]['type'] ; ?>
		<a href="sport_details.php=sport<?php echo $i ?>"><em><?php echo $type_sport ?></em></a>
	</li>
	

	<?php } ?>
</ul>


















</ul>