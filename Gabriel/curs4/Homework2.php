<?php

for ($i=1; $i <= 100 ; $i++) { 
	if ($i % 15 == 0) {
		echo "FastTrack";
	}
	elseif ($i % 3 == 0) {
		echo "Fast";
	}
	elseif ($i % 5 == 0) {
		echo "Track";
	}
	else
		echo "$i";
	echo "<br>";
}


?>