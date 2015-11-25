<?php
if(isset($_POST["username_email"]) && isset($_POST["password"])) {
    echo "Hello " . $_POST["username_email"] . ", your password " . $_POST["password"]. " was correct.";
    echo "<br>";
}
else {
    echo "Nothing entered";
    echo "<br>";
}
if(isset($_POST["checkbox"])) {
    echo "Yeey you want us to remember you";
    echo "<br>";
}
else {
    echo "Oh no...you chose that we`ll forget you:(";

}
?>