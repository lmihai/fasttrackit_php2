<?php		
if (!isset($_COOKIE["visits"])) {
	setcookie("visits", 1, time() + 3600);
	echo "2";
}
else {
	if ($_COOKIE["visits"] == 1) {
		setcookie("visits", 2, time() + 3600);
		echo "3";
	}
	elseif ($_COOKIE["visits"] == 2) {
		setcookie("visits", 3, time() + 3600);
		echo "4";
	}
	elseif ($_COOKIE["visits"] == 3) {
		setcookie("visits", 4, time() + 3600);
		echo "5 - super";
	}
	else {
		setcookie("visits", null, time() - 3600);
		echo "1";
	}
}
?>