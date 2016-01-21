<?php

//error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$database = "hangout";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if (isset($_POST['user_add'])) {
	
if ($_FILES['user_picture']['error'] === 0) //trew sa fac partea de conditie pe partea de doc  ) {
	if ($_FILES['user_picture']['type']== 'image/gif'
		|| $_FILES['user_picture']['type']== 'image/png'
		|| $_FILES['user_picture']['type']== 'image/jpeg'){
					$filename_photo_user = $_FILES['user_picture']['tmp_name'];
					$destination_photo_user = "uploads/userphoto/" . $_FILES['user_picture']['name'];
					}

if (move_uploaded_file($filename_photo_user, $destination_photo_user)) {

$sql = "INSERT INTO login (	`user_id`, `user_username`, `user_password`, `user_email`, `user_picture`, `user_signature`, `user_registration`, `user_accounttype`, `user_description`) 
VALUES (NULL, '" . $_POST['user_username'] ."', md5('" . $_POST['user_password'] ."'),'". $_POST['user_email'] ."','". $destination_photo_user ."', '". $_POST['user_signature'] ."','". $_POST['user_registration'] ."', '". $_POST['user_accounttype'] ."',
		'". $_POST['user_description'] ."')";




if ($conn->query($sql) === TRUE) {
    echo "New record created successfully USER<br>";

} else {

    echo "Error: " . $sql . "<br>" . $conn->error;
}

}}
$conn->close();
				
?>







<html>
		<head>
			<link rel="stylesheet" type="text/css" href="css/mystyle.css">
		</head>
	<body>
		<div class='_body'>
			<div class='div_top'>
				<div class='div_logo'><img src="img/_logo_1.jpg" alt='130px/130px' width='130' height='130'></div>
				<div class='div_menu'>
				<?php include 'meniu.php';?>
				</div>
			</div>
			<div class='div_content'>
							
			<form class='add_user' method="POST" enctype="multipart/form-data" action="">
				<input class='add_user' type='hidden' name='user_id' value=''>
				<input class='add_user' type='text' name='user_username' value='Username'required><br><br>
				<input class='add_user' type='password' name='user_password' value='Password'required><br><br>
				<input class='add_user' type='email' name='user_email' value='e-mail'required><br><br>
				<input class='add_user' type="date" name ="user_registration" required><br><br>
				<input class='add_user' type='text' name='user_signature' value='Cuvant Cheie'required><br><br>
					<select class='add_user' name='user_accounttype' required>
					  <option value="admin">Admin</option>
					  <option value="subAdmin">subAdmin</option>
					  <option value="moderator">Moderator</option>
					  <option value="guest">Guest</option>
					</select><br><br>
				<textarea class='add_user' name='user_description'required>Detali despre account</textarea><br><br>
				<input class='add_user' type='file' name='user_picture' value='Poza'required></input><br><br>
				<input type='submit' name='user_add' value='Add User'>
			</form>
		
	</body>
</html>