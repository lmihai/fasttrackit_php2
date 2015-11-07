
<?php
echo "<h1>----Tema Curs 4-----</h1>";
?>

<?php
$friends = array();
$friends[1] = array('first_name'=>'John', 'last_name'=>'Doe', 'ticket' => array(1,3,21,4,54,32));
$friends[2] = array('first_name'=>'Jane', 'last_name'=>'Foo','ticket' => array(31,13,12,14,45,43));
$friends[3] = array('first_name'=>'Elvis', 'last_name'=>'Peanutbutter','ticket' => array(33,11,12,24,44,54));

print $friends[2];

?>

<?php
$loto_players = array(
					array("John", "Doe", 11, 3, 22, 17,36, 40),
					array("Jane", "Foo", 32, 6, 18, 21,13, 42),
					array("Elvis", "Peanutbutter", 21, 7, 17, 35, 5, 44)
					);
print_r($loto_players);
?>