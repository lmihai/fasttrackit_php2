<?php
	include ("movie_genres.php");
	
	$movies = array(
				array(
					"title" => "The Godfather",
					"year" => 1972,
					"poster" => "images/godfather.jpg",
					"pitch" =>"<em>From IMDB: <br>The aging patriarch of an organized crime dynasty<br> transfers control of his clandestine empire to his reluctant son.</em>",
					"genres" => array($genres[1],$genres[2]),
					),
				array(
					"title" => "Pulp Fiction",
					"year" => 1994,
					"poster" => "images/pulpfiction.jpg",
					"pitch" => "<em>From IMDB:<br> The lives of two mob hit men, a boxer, a gangster's wife,<br> and a pair of diner bandits intertwine in four tales of violence and redemption.</em>",
					"genres" => array($genres[1],$genres[2]),
					),
				array(
					"title" => "Life is Beautiful",
					"year" => 1997,
					"poster" => "images/life.jpg",
					"pitch" => "<em>From IMDB:<br> When an open-minded Jewish librarian and his son become victims<br> of the Holocaust, he uses a perfect mixture of will,<br> humor and imagination to protect his son from the dangers around their camp.</em>",
					"genres" => array($genres[2],$genres[3],$genres[4]),
					),
				array(
					"title" => "Spring, Summer, Fall, Winter and Spring",
					"year" => 2003,
					"poster" => "images/spring.jpg",
					"pitch" => "<em>From IMDB:<br> On an isolated lake, an old monk lives on a small floating temple. <br>The wise master has also a young boy with him who learns to become a monk.<br> And we watch as seasons and years pass by.</em>",
					"genres" => array($genres[2]),
					),
				array(
					"title" => "The Tree of Life",
					"year" => 2011,
					"poster" => "images/tree.jpg",
					"pitch" => "<em>From IMDB:<br> The story of a family in Waco, Texas in 1956. <br>The eldest son witnesses the loss of innocence and struggles with his parents' conflicting teachings.</em>",
					"genres" => array($genres[2],$genres[5]),
					),
				array(
					"title" => "Solaris",
					"year" => 1972,
					"poster" => "images/solaris.jpg",
					"pitch" => "<em>From IMDB:<br> A psychologist is sent to a station orbiting a distant planet <br>in order to discover what has caused the crew to go insane.</em>",
					"genres" => array($genres[2],$genres[6],$genres[7]),
					),
				array(
					"title" => "Stalker",
					"year" => 1979,
					"poster" => "images/stalker.jpg",
					"pitch" => "<em>From IMDB:<br> A guide leads two men through an area known as the Zone to find a room that grants wishes.</em>",
					"genres" => array($genres[2],$genres[8]),
					),
				array(
					"title" => "Viridiana",
					"year" => 1961,
					"poster" => "images/viridiana.jpg",
					"pitch" => "<em>From IMDB:<br> Viridiana, a young nun about to take her final vows, <br>pays a visit to her widowed uncle at the request of her Mother Superior.</em>",
					"genres" => array($genres[2]),
					),
				array(
					"title" => "Into The Wild",
					"year" => 2007,
					"poster" => "images/intothewild.jpg",
					"pitch" => "<em>From IMDB:<br> After graduating from Emory University, <br> top student and athlete Christopher McCandless abandons his possessions,<br> gives his entire $24,000 savings account to charity <br> and hitchhikes to Alaska to live in the wilderness.<br> Along the way, Christopher encounters a series of characters that shape his life.</em>" ,
					"genres" => array($genres[2],$genres[9],$genres[10]),
					),
				array(
					"title" => "Au Hasard Balthazar",
					"year" => 1966,
					"poster" => "images/auhasardbalthazar.jpg",
					"pitch" => "<em>From IMDB:<br> The story of a mistreated donkey and the people around him.<br> A study on saintliness and a sister piece to Bresson's Mouchette.</em>",
					"genres" => array($genres[2]),
					));
	

include ("model_actors.php");

			 