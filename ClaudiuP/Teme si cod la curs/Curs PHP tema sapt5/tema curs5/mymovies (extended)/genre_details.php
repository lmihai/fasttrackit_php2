			<div id="overlay">
				<?php
			
		echo "<center>";
			for ($i=1; $i < count($movies); $i++) {
				$movie_title = $movies[$i]["title"];

					if (isset($_GET["genres"])) {

					foreach ($movies[$i]["genres"] as $genres) {	

	 				if ($_GET["genres"] === $genres) {
			
					include("views/view_genres.tpl.php");
			
			}
		}
	}
}
?>
		
603 230 701
5420