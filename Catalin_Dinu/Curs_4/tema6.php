<?php
for ($i=1; $i <= 100; $i++) { 
	if ($i % 3 == 0 && $i % 5 == 0) {
		echo "FastTrack";
		echo "<br>";
	}
	elseif ($i % 3 == 0) {
		echo "Fast";
		echo "<br>";
	}
	elseif ($i % 5 == 0) {
		echo "Track";
		echo "<br>";
	}
	else {
		echo $i;
		echo "<br>";
	}
}
?>