<?php





//While loops ----- ------ ----- ----- ----- -----

	$numarator = 1;

/*	while ($numarator <= 10) {
		echo $numarator." Merge<p></p>";
	
	$numarator ++;

}

*/
//Do-While loops  ----- ----- -- ---- - --- - - -

echo "<p></p>";
echo "<h1>Diferenta intre whileLoop si DO-WHILE este ca nu verificam conditia la inceput in cazul ultimei</h1>";

do {
	echo "Acest text va aparea<br>";
	$numarator ++;
} while ( $numarator <= 10);

echo "<p></p>";
echo "<h1>For loops</h1>";

//For Loops  - 

for ($numara=10; $numara >= 1 ; $numara--) { 
	echo $numara."<br>";
}


?>