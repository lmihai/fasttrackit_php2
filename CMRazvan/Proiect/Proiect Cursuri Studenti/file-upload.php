<?php
include ('connect.php');
$db_conn = mysqli_connect($server,$user,$pass,$db_name);
$sql = "CREATE TABLE file (
	ID INT NOT NULL AUTO_INCREMENT, 
	FilePhotoLocation TEXT NOT NULL, 
	FileCVLocation TEXT NOT NULL,
	PRIMARY KEY (ID))";
mysqli_query($db_conn, $sql);
$sql = "ALTER TABLE students ADD Photo INT AND ADD CV INT";
mysqli_query($db_conn, $sql);

//Poza si CV
if ($_FILES['filePhoto']['error'] === 0 && $_FILES['fileCV']['error'] //trew sa fac partea de conditie pe partea de doc  ) {
	if ($_FILES['filePhoto']['type']== 'image/gif'
		|| $_FILES['filePhoto']['type']== 'image/png'
		|| $_FILES['filePhoto']['type']== 'image/jpeg'
		|| $_FILES['fileCV']['type']== 'aplication/msword'
		|| $_FILES['fileCV']['type']== 'aplication/msword'//fac pe partea de doc txt pdf ){

					$student_id = $_POST['id_student'];
				if (!$student_id) {
					print"Please provide a student id";
				}
				else{
					$filename_cv = $_FILES['fileCV']['tmp_name'];
					$destination_cv = "upload/cv/" . $_FILES['fileCV']['name'];
					$filename_photo = $_FILES['filePhoto']['tmp_name'];
					$destination_photo = "upload/photo/" . $_FILES['filePhoto']['name'];
					if (move_uploaded_file($filename_photo, $destination_photo)) {
							if (move_uploaded_file($filename_cv, $destination_cv)){															 
								$sql = 'INSERT INTO file (FilePhotoLocation , FileCVLocation) VALUES ("' . $destination_photo . '","' . $destination_cv . '")';
								mysqli_query($db_conn, $sql);
								$file_id = mysqli_insert_id($db_conn);
								if ($file_id = mysqli_insert_id($db_conn)) 	{
									$sql = 'UPDATE students SET Photo = '. $file_id .', CV = ' . $file_id . '  WHERE id = '. $student_id;
									mysqli_query($db_conn, $sql);
									print "<hr><br>Poza si CV adaugate cu succes<br><hr>";
								}else{
								print "<hr><br>Destinatia Pozei sau a CV-ului nu se poate scrie, mai incearca<br><hr>";
								}
							}
					}
				
				}
	}
}
include('students.php');
// concluze , in baza de date imi face pentru poza pozitie diferita si pentru cv alta pozitie , daca le incarc deodata , poate din cauza ca nu trimit in acelasi timp mesajul
// daca asi modifica sql sa il trimita combinat si cv si  poza atuncea ar fi pe acceasi linie
?>
