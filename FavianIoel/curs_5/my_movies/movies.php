<?php 

//An array ith movies
$movies = array();
$movies[1] = array(
	                'title' => 'The Godfather',
	                'year'  => 1972, 
	                'poster'=> 'images/godfather.jpg');
$movies[2] = array(
	                'title' => 'Pulp fiction',
	                'year'  => 1994, 
	                'poster'=> 'images/pulpfiction.jpg');
$movies[3] = array(
	                'title' => 'Life is beautiful',
	                'year'  => 1997, 
	                'poster'=> 'images/life.jpg');
$movies[4] = array(
	                'title' => 'Goodfellas', 
	                'year'  => 1990, 
	                'poster'=> 'images/goodfellas.jpg');
$movies[5] = array(
	                'title' => 'The Shawshank Redemption', 
	                'year'  => 1994, 
	                'poster'=> 'images/theshawshankredemption.jpg');
$movies[6] = array(
	                'title' => 'The Dark Knight',
	                'year'  => 2008,
	                'poster'=> 'images/thedarkknight.jpg');
$movies[7] = array(
	                'title' => '12 Angry Men',
	                'year'  => 1957,
	                'poster'=> 'images/angrymen.jpg');
$movies[8] = array(
	                'title' => 'Schindler'."'".'s List',
	                'year'  => 1993,
	                'poster'=> 'images/schindlerslist.jpg');
$movies[9] = array(
	                'title' => 'Fight Club',
	                'year'  => 1999,
	                'poster'=> 'images/fightclub.jpg');
$movies[10] = array(
	                'title' => 'Star Wars: Episode V - The Empire Strikes Back',
	                'year'  => 1980,
	                'poster'=> 'images/starwarsv.jpg');
$movies[11] = array(
	                'title' => 'Inception',
	                'year'  => 2010,
	                'poster'=> 'images/inception.jpg');
//print('<pre>');
//print_r($movies);




echo "<h1>My movies</h1>\n";
echo "<ul>\n";
for ($i=1; $i < count($movies); $i++) { 
	$movie_title = $movies[$i]['title'];
	print('<li><a href="movies.php?movie=' . $i . '">' . $movie_title . "</a></li>\n");
}
echo "</ul>\n"; 


//make sure exists .
if (isset($_GET['movie'])) {
	$movie_position_in_array = $_GET['movie'];
	print($movie_position_in_array);


//test
$movie_position_in_array = $_GET['movie'];
$movie_details = $movies[$movie_position_in_array];


//Display all movie details
$movie_position_in_array = $_GET['movie'];
$movie_details = $movies[$movie_position_in_array];
print('<h1>'. $movie_details['title']. '</h1>');
print('<h2>'. $movie_details['year']. '</h2>');
print('<img src="' . $movie_details['poster'] . '">');


//give users a link
print('<p><a href="movies.php">Back to movies</a></p>');

} 
else {
	echo '<p>---------------------------------------------------------------------------</p>';
} 





?>