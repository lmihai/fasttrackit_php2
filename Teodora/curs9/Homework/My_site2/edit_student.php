<style>
	div {
		width: 600px;
		margin-left: auto;
		margin-right: auto;	
		margin-top: 70px;			
	}
	.pull{
		margin-right: 85px;
	}
	label {
		margin-right: 50px;
	}
	
</style>
<?php
//the page should accept a $_GET parameter called ID
//if the parameter is present, create a SQL query to read the student
//details from database
require_once('connection.php');
if(isset($_GET['ID'])){
	$studentID = $_GET['ID'];
	$sql_details = "SELECT * FROM students
					WHERE ID = $studentID";
	$result1 = mysqli_query($db_conn, $sql_details) or die 
	(error_reporting(E_ALL ^ E_DEPRECATED));
	$row1 = mysqli_fetch_array($result1); 
	/*	create a form identical with the one from Add student
		the fiels should be pre-filled with the correct values for current student
		also - a hidden field pre-filled with the student ID
		on submit, verify if the text field are correctly filled
		then create a SQL query which updates the record which has the ID
		from the hidden field with the values received by form
		redirect to students.php
	*/
	echo '<div>';
	echo '<form method = "post" action ="process_edit_student.php">';
	  	echo '<label for="FirstName"><strong>First name: </strong></label>';
	  	echo '<input type = "text" name = "FirstName" value="'.$row1['FirstName'].'">';
	  	echo '<br>';
	  	echo '<br>';

	  	echo '<label for="LastName"><strong>Last name: </strong></label>';
	  	echo '<input type = "text" name = "LastName" value="'.$row1['LastName'].'">';
	  	echo '<br>';
	  	echo '<br>';

	  	echo '<label for="Course" class="pull"><strong>Course </strong></label>';
	  	echo '<select name = "courselist">';	  		
	  		echo '<option value="1">Introduction in testing</option>'; 
	  		echo '<option value="2">PHP</option>';
	  		echo '<option value="3">Web development</option>';
	  		echo '<option value="5">HTML5 and CSS3</option>';
	  		echo '<option value="6">Web design</option>';
	  		echo '<option value="7">PHP&MySQL</option>';
	  		echo '<option value="8">Responsive Web design</option>';
	  	  			  		
	  	echo '</select>';	
	  	echo '<br>';
	  	echo '<br>';

	  	echo '<label for="score" class="pull"><strong>Score </strong></label>';
	  	echo '<input type = "text" name = "score" value="'.$row1['score'].'">';
	  	echo '<br>';
	  	echo '<br>';

	  	echo '<input type = "hidden" name = "ID" value="'.$row1['ID'].'">';
	  	echo '<br>';
	  	echo '<br>';
	  	echo '<input type = "submit" value = "UPDATE">';
	echo '</form>';
	echo '</div>';		
}