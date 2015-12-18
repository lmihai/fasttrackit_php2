<style>
	div {
		width: 600px;
		margin-left: auto;
		margin-right: auto;	
		margin-top: 70px;			
	}
	th {	 
		
		text-align: left;
	}
	.center{
		text-align: center;
	}
	.small {
		width: 50px;
	}
</style>

<?php

//COURSES MANAGEMENT PAGE
//read all courses from db.

//connection to db
require_once('connection.php');

//select all courses 

$sql = "SELECT courses.*, COUNT(students.course) AS countStudents 
		FROM courses
		LEFT JOIN students ON courses.ID = students.course	
		GROUP BY courses.ID";


//display data into a table
$result = mysqli_query($db_conn, $sql) or die 
(error_reporting(E_ALL ^ E_DEPRECATED));
//print ($sql);

echo '<div>';
echo'<table>';
echo '<tr>
		<th class="small">ID</th>
		<th>Course name</th>
		<th>Trainer</th>
		<th>Students number</th>
		<th >Operations</th>
		</tr>';
while($row = mysqli_fetch_array($result) ) { 
	echo '<tr><td>';	
	echo $row['ID'];
	echo '</td>';

	echo '<td>';
	echo $row['CourseName'];
	echo '</td>';

	echo '<td>';
	echo $row['Trainer'];
	echo '</td>';

	echo '<td class="center">';
	echo $row['countStudents'];
	echo '</td>';

	echo '<td>';
	echo '<a href="edit.php?ID= '.$row["ID"] .'">Edit<a>';
	echo '</td>';

	echo '<td>';
	echo '<a href="delete.php?ID= '.$row["ID"].'">Delete<a>';
	echo '</td>';
}
echo '</table>';


//Below the table add a link to page add.php
echo '<br>';
echo '<div><a href="add.php">Add a new course</a></div>';

echo '</div>';