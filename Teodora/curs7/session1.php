<?php
/*
Create a page which does following:
	Start the session
	Check whether we have a $_GET parameters "name" and it saves
	the name in a session variable
	After this, it checks whether there is a session variable called
	"name" and it prints it
	*/


session_start();
if(isset($_GET['name'])) {
	$_SESSION['name'] = $_GET['name'];
}
if(isset($_SESSION['name'])) {
	echo $_SESSION['name']; //acuma in browser daca scriem 
							//...session1.php?name=Teo 
							//afiseaza Teo in pagina
	
}

?>