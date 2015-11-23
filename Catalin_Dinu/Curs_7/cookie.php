<?php		
setcookie("friend", "yes", time() + 3600);
echo $_COOKIE["friend"];
setcookie("friend", null, time() - 3600);
?>