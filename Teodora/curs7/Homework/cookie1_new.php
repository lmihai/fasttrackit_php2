<?php
// set the variable to 0, it'll matter only if the cookie for the variable is not set
$countVisit = 0;
// if cookie is set for the variable, it'll go to $countVisit and get added by 1; 
//otherwise it'll show 0 for tha variable
if(isset($_COOKIE['countVisit'])){
$countVisit = $_COOKIE['countVisit'];
$countVisit ++;
}

//set cookie for countVisit
setcookie('countVisit', $countVisit,time()+3600);

// if the variable is not set, say 'welcome', 
//otherwise show "hello" for each fifth visit;
if($countVisit == 0){
echo "Welcome";
} elseif($countVisit % 5 == 0) {
	echo "Hello";
}

?>