<?php
session_start();
if (isset($_SESSION['id'])){
echo "Bine ai venit<br> <i>" .  $_SESSION['id'] . "</i>";
}
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
				<div class='div_menu_prop'>
					<ul>
						<li><a href='add_user.php'>Add User</a></li>
						<li><a class='active' href='add_prop.php'>Add Prop</a></li>
						<li><a href='del-prop.php'>Del Prop</a></li>
						<li><a href=''>Status Prop</a></li>
					</ul>
							<div class='left_side'>

<?php
include 'conn.php';
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if (isset($_POST['prop_add'])) {
	if ($_FILES['prop_poza']['error'] === 0) //trew sa fac partea de conditie pe partea de doc  ) {
	if ($_FILES['prop_poza']['type']== 'image/gif'
		|| $_FILES['prop_poza']['type']== 'image/png'
		|| $_FILES['prop_poza']['type']== 'image/jpeg'){
					$filename_photo_prop = $_FILES['prop_poza']['tmp_name'];
					$destination_photo_prop = "uploads/propuneri/" . $_FILES['prop_poza']['name'];
					}
if (move_uploaded_file($filename_photo_prop, $destination_photo_prop)) {
$sql = "INSERT INTO propuneri (	`prop_id`, `prop_name`, `prop_poza`, `prop_descriere`, `prop_data_create`, `prop_data_execute`, `prop_create_user`, `prop_rank`, `prop_option`) 
VALUES (NULL, '" . $_POST['prop_name'] ."', '" . $destination_photo_prop ."','" . $_POST['prop_descriere'] ."','" . $_POST['prop_data_create'] ."','" . $_POST['prop_data_execute'] ."','" . $_SESSION['id'] ."','" . $_POST['prop_rank'] ."','" . $_POST['prop_option'] ."')";
if ($conn->query($sql) === TRUE) {
echo "New record created successfully Proposel<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}}
$conn->close();
?>

								<form class='add_prop' method="POST" enctype="multipart/form-data" action="add_prop.php">
									<input class='add_prop' type='hidden' name='prop_id' value=''>
									<input class='add_prop' type='text' name='prop_name' value='Nume Locatie'><br><br>
									<input class='add_prop' type='text' name='prop_descriere' value='Descriere'><br><br>	
									<input class='add_prop' type='hidden' name='prop_data_create' value=''>
									<input class='add_prop' type='date' name='prop_data_execute' value='Tipul Intalnirii'><br><br>
									<input class='add_prop' type='hidden' name='prop_create_user' value='asdasdasdasd'>
									<input class='add_prop' type='hidden' name='prop_rank' value=''>
									<textarea class='add_prop' name='prop_option'required>Recomandari</textarea><br><br>
									<input class='add_prop' type='file' name='prop_poza' value=''>	<br><br>
									<input class='add_prop' type='submit' name='prop_add' value='Add propuneri'><br><br>
								</form>
					</div>
			</div>
		</div>
	</body>
</html>


