<?php		
if (!isset($_COOKIE["visits"])) {
	setcookie("visits", 1, time() + 3600);
	echo "Hello";
}
else {
if ($_COOKIE["visits"] == 1) {
setcookie("visits", 2, time() + 3600);
echo "Hello again";
}
else {
setcookie("visits", null, time() - 3600);
echo "Goodbye";
}
}
?>