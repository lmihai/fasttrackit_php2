<?php
echo "<strong><h1>FOREACH syntax</h1></strong><br>";
$team = array('PM' => 'John' , 'Developer' => 'Jack' , 'Tester' => 'Jake' );

foreach ($team as $value => $player) {
	echo $value. '  '.$player.'<br>';
}
?>