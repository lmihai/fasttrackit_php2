<?php
	$actors = array();
	$actors[1] = array('Marlon Brando','Al Pacino','James Caan');
	$actors[2] = array('Tim Roth','John Travolta','Samuel L. Jackson');
	$actors[3] = array('Roberto Benigni','Nicoletta Braschi','Giorgio Cantarini');
	
	function get_actor_details($movie_index = NULL){
			global $actors;
			return $actors[$movie_index];
	}