<html>
<title>My Super Movie Website</title>

<body>
		<?php
			$movies = array(
					array(
							"title" => "The Good Father",
							"year" => 1972,
							"poster" => "img/godfather.jpg",
						),
					array(
							"title" => "Pulp Fiction",
							"year" => 1994,
							"poster" => "img/pulpfiction.jpg",
						),
					array(
							"title" => "Life Is Beautiful",
							"year" => 1997,
							"poster" => "img/life.jpg",
						)

				);
	//print( "<pre>");
	//print_r($movies);
	//print("<li>" . $movies_title . "</li>\n");
		

	if (isset($_GET['movies'])) {

			$movie_position_in_array = $_GET['movies'];
			$movies_details = $movies[$movie_position_in_array];
			//print($movie_position_in_array);
			print('<h1>' . $movies_details['title'] . '</h1>');
			print('<h2>' . $movies_details['year'] . '</h2>');
			print('<img src="' . $movies_details['poster'] . '">');
			print('<li><a href = "index.php">Back to Movies</a></li>');
			print("Vizionare Placuta");


		} else
		{
			//print("<ul>\n");
			for ($i = 0 ; $i < count($movies); $i++)
			{
				$movies_title = $movies[$i]["title"];
				print('<li><a href = "index.php?movies=' . $i . '">' . $movies_title . "</a></li>\n");
				
			}
		}

		?>
</body>
</html>