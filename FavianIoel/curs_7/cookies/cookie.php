<?php 
setcookie('friend' , 'yes' , time() + 3600) ;
// cookie("name"  , "value", "expiration date");

// time() -> the number f seconds that have passed until now
// +3600  -> the number of seconds that should pass from now.


//the setcookie("..","..",time()+ 3600) -> always has to be before 
//any other < html tag > not even comments

echo $_COOKIE['friend']; //-> Global variable to read cookies .

//setcookie('friend' , 'yes' , time() -3600) ;//delete
 ?>

