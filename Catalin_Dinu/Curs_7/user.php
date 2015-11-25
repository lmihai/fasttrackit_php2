<?php
if (!isset($_SESSION)) {
    session_start();
}
if(isset($_SESSION["user_id"])) {
    echo "You are logged in with id " . $_SESSION["user_id"];
    echo "<br>";
    echo '<a href="login.php">back</a>';
}
else {
    echo '<a href="login.php">login</a>';
    echo "<br>";
}
?>
