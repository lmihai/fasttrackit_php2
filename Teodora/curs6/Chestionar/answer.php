<?php
echo "Thank you for your time!<br>";

echo "Here your answers:<br>";
echo "You bought from us: " . $_POST['intrebare1'] . ". <br> You think taste was: " 
. $_POST['intrebare2'] . 
" and style was: " . $_POST['intrebare3'] . ".<br>";

echo "About your purchase you are: " . $_POST['purchase'] . ".<br/>";

echo "About our sevices you are: " . $_POST['service'] . ".<br/>";

echo "About company overall you are: " . $_POST['overall'] . ".<br/>";

echo "Liked to buy from us: " . $_POST['buy'] . ".<br/>";

echo "Liked to reccomand our product: " . $_POST['recprod'] . ".<br/>";

echo "Liked to reccomand our shop: " . $_POST['recshop'] . ".<br/>";

echo "<a href='survey.html'>" . "Take survey again" ."</a>";



