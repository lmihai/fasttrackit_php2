<?php


	include('models/model_sports.php');

	if (isset($_GET['sport'])) {
		$position_sport = $_GET['sport'];
		$sport_details = $sports[$position_sport];
		include ('view/view_sport_details.tpl.php');
	}

