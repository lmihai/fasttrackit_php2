<?php
$array = array(2, 3, 1, 5, 4,);
echo "array before sort: ";
for ( $i = 0; $i < count($array); $i++ ) {
   echo $array[$i];
}
echo "<br>";

for ( $i = 0; $i < count($array); $i++ ) {
   for ($j = 0; $j < count($array); $j++ )
   {
      if ($array[$i] < $array[$j])
      {
         $temp = $array[$i];
         $array[$i] = $array[$j];
         $array[$j] = $temp;
      }
   }
}
echo "array after sort: ";
for( $i = 0; $i < count($array); $i++ ) {
   echo $array[$i];
}
?>