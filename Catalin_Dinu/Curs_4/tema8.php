<?php
$array1 = array(1, 3, 5, 7, 9,);
$array2 = array(2, 4, 6, 8, 10,);
$array3 = array();
   for ($i=0; $i < count($array1); $i++) {
      $array3[$i] = $array1[$i] + $array2[$i];
}
print_r($array3);
?>