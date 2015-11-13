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
// You can preview it
// echo("<pre>");
// print_r($movies);

if (isset($_GET["movie"])) {
	$movie_position_in_array = $_GET["movie"];
	$movie_details = $movies[$movie_position_in_array];
	echo("<h1>" . $movie_details["title"] . "</h1>");
	echo("<h2>" . $movie_details["year"] . "</h2>");
	echo('<img src="' . $movie_details["poster"] . '">');
	echo('<p><a href="movies.php">Back to movies</a></p>');
}
else {
	echo ("<h1>My movies</h1><br>");
	echo("<ul><br>");
for ($i=0; $i < count($movies); $i++) {
	$movie_title = $movies[$i]["title"];
	echo('<li><a href="movies.php?movie=' . $i . '">' . $movie_title . '</a></li><br>');
	}
echo("</ul>");
}
?>