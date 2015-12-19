<style>
	div {
		width: 600px;
		margin-top: 100px;
		margin-left: auto;
		margin-right: auto;
	}
	label{

		margin-right: 50px;
	}
	.pull1 {
		margin-right: 75px;
	}
	.pull {
		margin-right: 85px;
	}	
	
</style>
<?php
//create a page called add_student.php
/*the page should contain a form with the fields
	- first name, last name - text fiels
	- course - Dropdown with list of courses from Courses table
	- score -Text fields
*/
echo '<div>';
echo '<h3>Add student</h3>';
echo '<form method = "post" action="process_add_student.php">';
	echo '<label for="FirstName"><strong>First name </strong></label>';
  	echo '<input type = "text" name = "FirstName">';
  	echo '<br>';
  	echo '<br>';
  	echo '<label for="LastName"><strong>Last name </strong></label>';
  	echo '<input type = "text" name = "LastName">';
  	echo '<br>';
  	echo '<br>';
  	echo '<label for="Course" class="pull1"><strong>Course </strong></label>';
  	echo '<select name = "courselist">';
  		echo '<option value="1">Introduction in testing</option>';
  		echo '<option value="1">PHP</option>';
  		echo '<option value="1">Web development</option>';
  		echo '<option value="1">HTML5 and CSS3</option>';
  		echo '<option value="1">Web design</option>';
  		echo '<option value="1">PHP&MySQL</option>';
  		echo '<option value="1">Responsive Web design</option>';
  	echo '</select>';	
  	echo '<br>';
  	echo '<br>';
  	echo '<label for="score" class="pull"><strong>Score </strong></label>';
  	echo '<input type = "text" name = "score">';
  	echo '<br>';
  	echo '<br>';

  	echo '<input type = "submit" value = "Add student">';
echo '</form>';
echo '</div>';

//on submit, verify that all fields are correctly filled
// create a SQL query to insert the nwe student in the database
//redirect to students.php	
