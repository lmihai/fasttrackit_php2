<?php require('conn.php');
echo "<br>";
?>
<html>
<head>
	<title>Post Uploaded Fies</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php 
// if error ocurs let me know the file didn't upload.
	if ($_FILES['filePhoto']['error'] === 0) {
// if there is not an update error , we put a File condition .
		if ($_FILES['filePhoto']['type'] == 'image/gif'
          || $_FILES['filePhoto']['type'] == 'image/png'
            || $_FILES['filePhoto']['type'] == 'image/jpeg') {
//move the files to its permanent location.
			$filename = $_FILES['filePhoto']['tmp_name'];
			$destination = 'uploads/' . $_FILES['filePhoto']['name'];
//check student ID before moving the file to its perm.loc.        
			$student_id = $_POST["studentId"];
			if (!$student_id) {
				print ("Please provide a student ID.");
				exit;
			}
			if (move_uploaded_file($filename, $destination)) {
				$sql = 'INSERT INTO Files (FileLocation)
                        Values ("' . $destination . '")';
				mysqli_query($conn,$sql);
            if ($file_id = mysqli_insert_id($conn))/*insert was successful */{
            $sql = 'UPDATE Students SET Photo = ' . $file_id . ' WHERE ID = ' . $student_id;
            mysqli_query($conn, $sql);
        }
     }
            else {
                echo 'Destination not writable, cannot move file';
                }
        
    }else { 
    	echo 'Only GIF, PNG or Jpeg format files are allowed';
        die;
} 

    } else {
        print "Upload error: " . $_FILES['filePhoto']['error'];
	    exit;
    }


?>
</body>
</html>