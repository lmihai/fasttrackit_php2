<?php
if(isset($_POST["username_email"]) && isset($_POST["password"])) {
    echo "You are logged in";
    echo "<br>";
}
else {
    echo '<a href="login.php">login</a>';
    echo "<br>";
}


echo md5("halepenio") . " - halepenio " . "<br>";
echo md5("irina002") . " - irina002 " . "<br>";
echo md5("thoria12x") . " - thoria12x " . "<br>";
echo md5("xmergeax001") . " - xmergeax001 " . "<br>";
?>
