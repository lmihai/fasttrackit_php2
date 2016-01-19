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
					$filename_photo = $_FILES['user_picture']['tmp_name'];
					$destination_photo = "uploads/userphoto/" . $_FILES['user_picture']['name'];
					}



$sql = "INSERT INTO login (	'user_id','user_username','user_password', 'user_email', 'user_picture', 'user_signature','user_registration', 'user_accounttype', 'user_description') 
VALUES (Null , ". $_POST['user_username'] ."', '". $_POST['user_password'] ."','". $_POST['user_email'] ."','". $destination_photo ."', '". $_POST['user_signature'] ."','". $_POST['user_registration'] ."', '". $_POST['user_accounttype'] ."',
		'". $_POST['user_description'] ."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";

} else {

    echo "Error: " . $sql . "<br>" . $conn->error;
}

}
$conn->close();
				
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/mystyle.css">
</head>
	<body>
		<div class='div_form'>
			<form class='add_user' method="POST" enctype="multipart/form-data" action="add_user.php">
				<input class='add_user' type='hidden' name='user_id' value=''><br>
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
				<input class='add_user' type='file' name='user_picture' value='Poza'required></input><br><br>
					<textarea class='add_user' name='user_description'required>Detali despre account</textarea><br><br>
				<input type='submit' name='user_add' value='Add User'>
			</form>
		</div>
	</body>
</html>