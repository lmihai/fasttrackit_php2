<ul>
<?php
	for ($i = 0 ; $i < count($movies); $i++)
		{
			$movies_title = $movies[$i]["title"];
			print('<li><a href ="movies_details.php?movies=' . $i . '">' . $movies_title . "</a></li>\n");
		}
?>
</ul>

