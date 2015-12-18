<html>
<head>
	<title>Hello</title>
</head>
<body>
<?php 
if (!isset($_COOKIE['visits'])) {
	setcookie('visits' , 1 , time()+3600);
	include("hello.php");
} else {
	if ($_COOKIE['visits']== 1) {
		setcookie('visits',2,time()+3600);
		include("helloag.php");
	} else {
		setcookie('visits', null ,time()+3600);
		include("goodbye.php");
	}
}
 ?>
</body>
</html>