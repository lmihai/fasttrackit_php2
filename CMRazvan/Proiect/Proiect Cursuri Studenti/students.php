<?php
session_start();
if (isset($_SESSION['id'])) {

error_reporting(0);
include ('connect.php');

$connection = mysql_connect($server, $user, $pass, $dbname);

mysql_select_db($dbname,$connection);

$result = mysql_query("SELECT * FROM students",$connection) or die('Cannot show tables ');

echo "<html>
<head>
	<title>Studenti</title>
	<link rel='stylesheet' type='text/css' href='css/mystyle.css'>
</head>
	<body>
		<div class='div_body'>
			<div class='div_top'>
				<div class='div_nav'>
					<ul>
						<li><a class='' href='user.php'>Acasa</a></li>
						<li><a href='courses.php'>Cursuri</a></li>
						<li><a class='active' href='students.php'>Studenti</a></li>
						<li><a href='stats.php'>Statistica</a></li>
							<ul style='float:right;list-style-type:none;'>
								<li><a href=''>Despre</a></li>
								<li><a href='logoff.php'>Deconectare</a></li>
							</ul> 
					</ul>
<table cellpadding='6' cellspacing='16' class='db-course' value='List'>
<tr>
<th>Nr</th>
<th>ID</th>
<th>Primul Nume</th>
<th>Al doilea Nume</th>
<th>Curs</th>
<th>Nota</th>
<th>Poza</th>
<th>CV</th>
<th>Operatiuni Directe</th>
</tr>";
// tre sa afisa nota cu virgula
$j = 0;

while($row = mysql_fetch_row($result)) 
{
		echo '<tr>';
		echo '<td>';
		$j = $j + 1;
		print($j);
		echo '</td>';

	for ($i=0; $i < count($row); $i++) 
	{ 
		// deci for-ul face sa afiseze arayurile si ele de obicei incep de la 0 si numara cate 
		// spatii am pe o coloana exemplu 0 1 2  0 e pozitia 1 e numele cursului 2 este numele trainerului
		echo '<td>'.$row[$i].'</td>';
	}//operatiuni
		// aici ii zic sa stearga id_delete ca asta e namele la functia care 
		//face sa stearga row de 0 adica dupa pozitia care o da pt fiecare
		//experiment <a href="file-upload.php?filePhoto='. $row[0] .'">
		//<a href="students_edit.php?validez_editarea='.$row[0].'"><input type="submit" style="width:100px" name="validez_editareabb" value="Edit(direct)"></a> 
	echo '	<td>				
				<a href="students_update.php?validez_updatelebb='.$row[0].'"> <input type="submit" style="width:100px" name="validez_updatelebb" value="Modifica(d)"></a> 		
				<a href="upload-form.php?upload_direct='.$row[0].'"><input type="submit" style="width:100px " name="upload_direct" value="Incarca(d)"></a> 
				<a href="students_delete.php?id_delete='. $row[0] .'"><input type="submit" style="width:100px" name="id_delete" value="Sterge(d)"></a>
				<a href="user-profile.php?profil='. $row[0] .'"><input type="submit" style="width:100px" name="profil" value="Profil(d)"></a>
			</td>';
	echo '</tr>';
}
		echo '</table><br/>';

	print('	<a href="students_add.php" text-align="left"><input type="submit" style="width:200px;" value="Adauga Student"></a>
			<a href="user.php"><input type="submit" style="width:100px;" value="Acasa"></a>
			<a href="students_edit.php"><input type="submit" style="width:100px" value="Modifica"></a> 
			<a href="upload-form.php"><input type="submit" style="width:100px " value="Incarca"></a> 
			<a href="students_delete.php"><input type="submit" style="width:100px" value="Sterge"></a>
			<a href="user-profile.php"><input type="submit" style="width:100px" name="profil" value="Profil"></a>');
		echo '<br>
				</div>
			</div>
		</div>
	</body>
</html>';
		}
		else
{
	header("Location: login.php");
	exit;
}
?>
