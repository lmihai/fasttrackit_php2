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
	.pull {
		margin-right: 85px;
	}	
	
</style>
<?php
//create a page called add.php
/*the page should contain a form with two text fields: 
  - Course name
  - Trainer
  */
  echo '<div>';
  echo '<form method = "post" action ="process_add.php">';
  	echo '<label for="CourseName"><strong>Course name: </strong></label>';
  	echo '<input type = "text" name = "CourseName">';
  	echo '<br>';
  	echo '<br>';
  	echo '<label class="pull" for="Trainer"><strong>Trainer: </strong></label>';
  	echo '<input type = "text" name = "Trainer">';
  	echo '<br>';
  	echo '<br>';

  	echo '<input type = "submit" value = "Add course">';
  echo '</form>';
  echo '</div>';
