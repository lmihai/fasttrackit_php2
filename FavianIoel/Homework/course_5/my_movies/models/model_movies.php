<?php 
include("models/model_genres.php");
 //An array ith movies
    $movies = array();
    $movies[1] = array(
                        'title' => 'The Godfather',
                        'year'  => 1972, 
                        'poster'=> 'images/movies/godfather.jpg',
                        'genres'=>array($genres[0], $genres[1]));
    $movies[2] = array(
                        'title' => 'Pulp fiction',
                        'year'  => 1994, 
                        'poster'=> 'images/movies/pulpfiction.jpg',
                        'genres'=>array($genres[0], $genres[1]));
    $movies[3] = array(
                        'title' => 'Life is beautiful',
                        'year'  => 1997, 
                        'poster'=> 'images/movies/life.jpg',
                        'genres'=>array($genres[2], $genres[1], $genres[3]));
    $movies[4] = array(
                        'title' => 'Goodfellas', 
                        'year'  => 1990, 
                        'poster'=> 'images/movies/goodfellas.jpg',
                        'genres'=>array($genres[0], $genres[1], $genres[6]));
    $movies[5] = array(
                        'title' => 'The Shawshank Redemption', 
                        'year'  => 1994, 
                        'poster'=> 'images/movies/theshawshankredemption.jpg',
                        'genres'=>array($genres[0], $genres[1]));
    $movies[6] = array(
                        'title' => 'The Dark Knight',
                        'year'  => 2008,
                        'poster'=> 'images/movies/thedarkknight.jpg',
                        'genres'=>array($genres[0], $genres[1], $genres[7]));
    $movies[7] = array(
                        'title' => '12 Angry Men',
                        'year'  => 1957,
                        'poster'=> 'images/movies/angrymen.jpg',
                        'genres'=>array($genres[0], $genres[1]));
    $movies[8] = array(
                        'title' => 'Schindler'."'".'s List',
                        'year'  => 1993,
                        'poster'=> 'images/movies/schindlerslist.jpg',
                        'genres'=>array($genres[6], $genres[1], $genres[8]));
    $movies[9] = array(
                        'title' => 'Fight Club',
                        'year'  => 1999,
                        'poster'=> 'images/movies/fightclub.jpg',
                        'genres'=>array($genres[1]));
    $movies[10] = array(
                        'title' => 'Star Wars: Episode V - The Empire Strikes Back',
                        'year'  => 1980,
                        'poster'=> 'images/movies/starwarsv.jpg',
                        'genres'=>array($genres[7], $genres[9], $genres[5]));
    $movies[11] = array(
                        'title' => 'Inception',
                        'year'  => 2010,
                        'poster'=> 'images/movies/inception.jpg',
                        'genres'=>array($genres[7], $genres[10], $genres[11]));
    $movies[12] = array(
                        'title' => 'Django Unchained',
                        'year'  => 2012,
                        'poster'=>'images/movies/django.jpg',
                        'genres'=>array($genres[12]));
    $movies[13] = array(
                        'title' => 'Memento',
                        'year'  => 2000,
                        'poster'=>'images/movies/memento.jpg',
                        'genres'=>array($genres[10], $genres[5]));

    //print('<pre>');
    //print_r($movies);
