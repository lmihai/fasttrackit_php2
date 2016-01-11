<?php
	//ATENTIE PAGINA TRBUIE SA FUNCTIONEZe CA  update.php, AVEM ACELEASI INPUT  DIN REGISTER + POZA, .....
	require 'connections/connections.php';
	
?>
<?php
//verificare daca utiliz este logat
session_start();
if(isset($_SESSION['UserID']))
{
	$user = $_SESSION['UserID'];
}
else{
	header('Location:login.php');
}
?>
<?php
//print 'user ID: ' . $user;
//print "<pre>";
//var_dump($_FILES);
if(isset($_FILES['filePhoto'])){
	if($_FILES['filePhoto']['error'] === 0) {
	//update file-upload to only allow gif, png and jpeg file types.
		if($_FILES['filePhoto']['type'] == 'image/gif'
		|| $_FILES['filePhoto']['type'] == 'image/png'
		|| $_FILES['filePhoto']['type'] == 'image/jpeg') {
			//print "File uploaded";
			//let's move the file to the permanent location
			$filename = $_FILES['filePhoto']['tmp_name'];
			$destination = 'upload/' . $_FILES['filePhoto']['name'];
			//check student ID before moving the file to its permanent location
			$UserID = $_SESSION['UserID']; 				
				if(move_uploaded_file($filename, $destination)) {
					//insert the file information in the database
					//print 'File moved succesfully';
					$sql3 = 'INSERT INTO Files (Filelocation) 
						VALUES ("' . $destination . '")';
						mysqli_query($con, $sql3);
						if($file_id = mysqli_insert_id($con)){
							//echo "Succes";
							//var_dump($file_id);
							$sql4 = 'UPDATE user SET Photo = ' . $file_id . '
						 	WHERE UserID = ' . $UserID;
							$result = mysqli_query($con, $sql4);
							
						}
					}
					else {
						print 'Destination not writable, cannot move file';
					}				
	} else {
		print "Only gif, png or jpeg files allowed";
		die;
	}
}
 else {
	print "Upload error: " . $_FILES['filePhoto']['error'];
	exit;
	}
}

?>
<!doctype html>
<html>
<head>
	<title>Update Profile</title>
	<link rel="stylesheet" href="css/master.css" type="text/css" />
	<link rel="stylesheet" href="css/menu.css" type="text/css" />
</head>
<body>
	<div class="container">
		<div class="header">
			<div class="RightBody">
			<h2>Romanian membership</h2>
			</div>
		</div>
			<div class="menu">
				<div id="Menu">
					<nav>
						<ul class="cssmenu">
							<li><a href="Profile.php">Profile</a></li>
							<li><a href="account.php">Account</a></li>
							<li><a href="update.php">Update acount</a></li>
							<li><a href="LogOut.php">Log Out</a></li>
						</ul>
					</nav>
				</div>
					<div class="LeftBody">
						
						<form method="post" enctype="multipart/form-data"  
							action="" type="file" name="fileUpload">
							<div class="FormElement">							
							<input type="file" name="filePhoto" class="TField" />
							</div>
							<div class="FormElement">
							<input type="submit" name="btnSubmit" value="Submit" class="button"/>
							</div>
						</form>

					</div>
					<div class="RightBody">
						<?php
						if(isset($_FILES['filePhoto'])){
							if($result){
								print 'succesfully uploaded !';
								print'<a href="Profile.php">Back</a> to your profile.';
							}
						}
						?>
					</div>							
					
			</div>
			<?php include ('footer.php'); ?>
		</div>
		

</body>
</html>
