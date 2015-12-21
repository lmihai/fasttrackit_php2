<style>
	div {
		width: 650px;
		margin-left: auto;
		margin-right: auto;	
		margin-top: 70px;			
	}
	.center{
		text-align: center;
		padding: 5px 9px;
	}
	.left{
		text-align: left;
		padding: 5px 10px;
	}
</style>	
<?php
//create a page called students.php


//connection to db
require_once('connection.php');

//read all the students from the database using a SQL query
/*
$sql = "SELECT courses.*, COUNT(students.course) AS countStudents 
		FROM courses
		LEFT JOIN students ON courses.ID = students.course	
		GROUP BY courses.ID";
*/

$sql = "SELECT students.ID, students.FirstName, students.LastName,courses.CourseName 
		FROM students 
		JOIN courses ON students.Course = courses.ID 
		ORDER BY students.FirstName";	

$result = mysqli_query($db_conn, $sql) or die 
(error_reporting(E_ALL ^ E_DEPRECATED));	
//print ($sql);


//loop through all the students and put them in an array
//loop through the array and create a HTML table
echo '<div>';
echo'<table>';
echo '<tr>
		<th>Student name</th>
		<th>Course </th>
		<th></th>
		<th></th>
		<th >Operations</th>
		<th></th>
		</tr>';
while($row = mysqli_fetch_array($result) ) { 
	echo '<tr><td class="left">';	
	echo $row['FirstName'] .' '. $row['LastName'];
	echo '</td>';

	echo '<td class="left">';
	echo $row['CourseName'];
	echo '</td>';
	

	echo '<td>';
	//link the edit links to edit_student.php?ID=[studentID]
	echo '<a href="edit_student.php?ID= '.$row["ID"] .'" class="center">Edit<a>';
	echo '</td>';

	echo '<td>';
	//link the delete links to delete_student.php?ID=[studentID]
	echo '<a href="delete_student.php?ID= '.$row["ID"].'"class="center">Delete<a>';
	echo '</td>';

	echo '<td>';
	echo '<a href="student_photo.php?ID= '.$row["ID"].'"class="center">Upload photo<a>';
	echo '</td>';

	echo '<td>';
	echo '<a href="delete.php?ID= '.$row["ID"].'"class="center">Upload CV<a>';
	echo '</td>';
}
echo '</table>';
echo '</div>';
//below the table add a link to a page called add_student.php
echo '<br>';
echo '<div><a href="add_student.php">Add a new student</a></div>';

echo '</div>';


