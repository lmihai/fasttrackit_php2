<?php
/*
Create a page which does the follwing
	when you open it for the firt time, it says "Hello"
	when you open it for the second time it says "Hello again"
	when you open it for the third time, it says "Goodbye"
	and then starts from the beginning...
	*/


if(!isset($_COOKIE['visits'])) {
	setcookie('visits', 1, time() + 3600);
	echo "Hello";
}
else{
	if($_COOKIE['visits'] == 1) {
		setcookie('visits', 2 ,time() + 3600);
		echo "Hello again";
	}
	else{
		setcookie('visits', null, time() -3600);
		echo "Goodbye";
	}	
}



?>