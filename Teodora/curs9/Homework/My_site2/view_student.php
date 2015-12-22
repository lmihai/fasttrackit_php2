<style>
	div{
		width: 80%;
		margin: auto;
		text-align: center;
	}
</style>
<?php
//pct 7 din tema
//create a page to display ALL the information for a student
//including photo(as an IMG) and a link to download the CV


if(isset($_GET['ID'])){
	$studentID = $_GET['ID'];

	//db connection
	require_once('connection.php');

	$sql = "SELECT students.ID, students.FirstName, students.LastName,
			students.Course, students.Score, students.Photo, students.CV,
			 courses.CourseName, files.Filelocation, files_cv.Filelocation_cv 
		FROM students 
		JOIN courses ON students.Course = courses.ID
		JOIN files ON students.Photo = files.ID 
		JOIN files_cv ON students.CV = files_cv.ID
		WHERE students.ID = $studentID";
	//print $sql;
	//print '<br>';

	$result = mysqli_query($db_conn, $sql) or die 
	(error_reporting(E_ALL ^ E_DEPRECATED));
	$row = mysqli_fetch_array($result);
	//print '<pre>';
	//print var_dump($row);
	$file_location = $row['Filelocation'];
	$cv_location = $row['Filelocation_cv']	;
	//print var_dump($file_location);
	echo '<hr>';
	echo'<div>';
	echo '<img src= "http://localhost/fasttrackit_php2/Teodora/curs9/Homework/My_site2/'.$file_location.'" />';
	echo '<h3>Name: ' . $row['FirstName'] . " " . $row['LastName'] . '</h4>';
	echo '<h4>Course name: ' . $row['CourseName'] . '</h5>';
	echo '<h5>Score: ' . $row['Score'] . '</h5>';

	echo '<a href="http://localhost/fasttrackit_php2/Teodora/curs9/Homework/My_site2/'.$cv_location.'" download>
			Download cv</a>';
	echo'</div>';
	echo'<hr>';
	echo '<a href = "students.php">Back to the students list </a>';		
}//end if isset by ID			 