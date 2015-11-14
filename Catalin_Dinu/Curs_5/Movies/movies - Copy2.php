<?php
$movies = array(
	array(
		"title" => "The Godfather",
		"year" => "1972",
		"poster" => "images/godfather.jpg"
		),
	array(
		"title" => "Pulp Fiction",
		"year" => "1994",
		"poster" => "images/pulpfiction.jpg"
		),
	array(
		"title" => "Life is Beautiful",
		"year" => "1997",
		"poster" => "images/life.jpg"
		)
	);
$actors = array(
			array(
				array(
					"actor" => "Marlon Brando",
					"image" => "images/marlonbrando.jpg"
					),
				array(
					"actor" => "Al Pacino",
					"image" => "images/alpacino.jpg"
					),
				array(
					"actor" => "James Caan",
					"image" => "images/jamescaan.jpg"
					)
				),
			array(
				array(
					"actor" => "Tim Roth",
					"image" => "images/timroth.jpg"
					),
				array(
					"actor" => "John Travolta",
					"image" => "images/johntravolta.jpg"
					),
				array(
					"actor" => "Samuel L. Jackson",
					"image" => "images/samuelljackson.jpg"
					)
				),
			array(
				array(
					"actor" => "Roberto Benigni",
					"image" => "images/robertobenigni.jpg"
					),
				array(
					"actor" => "Nicoletta Braschi",
					"image" => "images/nicolettabraschi.jpg"
					),
				array(
					"actor" => "Giorgio Cantarini",
					"image" => "images/giorgiocantarini.jpg"
					)
				)
			);
// You can preview it
// echo("<pre>");
// print_r($movies);

if (isset($_GET["movie"])) {
	$movie_position_in_array = $_GET["movie"];
	$movie_details = $movies[$movie_position_in_array];
	echo("<h1>" . $movie_details["title"] . "</h1>");
	echo("<h2>" . $movie_details["year"] . "</h2>");
	echo('<img src="' . $movie_details["poster"] . '">');
	echo('<h3>Cast</h3>');
	for ($i=0; $i < count($actors); $i++) {
		$actor_names = $actors[$i][$i]["actor"];
		echo('<li>"" . $actor_names . ""</li><br>');
		}
}
else {
	echo ("<h1>My movies</h1><br>");
	echo("<ul><br>");
for ($i=0; $i < count($movies); $i++) {
	$movie_title = $movies[$i]["title"];
	echo('<li><a href="movies.php?movie=' . $i . '">' . $movie_title . '</li><br>');
	}
echo("</ul>");
}
?>