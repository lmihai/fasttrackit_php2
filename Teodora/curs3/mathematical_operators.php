<html>
<head>
	<title>Mathematical Operators</title>
</head>
<body>
	<p>
		<?php
		// ADDITION
		$a = 1;
		$b = 2;
		$c = 3;
		$d = 4;

		$sum = $a + $b;//$sum is 3
		$sum = $sum + $c;//sum is 6
		$sum += $d;//$sum is 10(identical with $sum  = $sum + $d)

		?>
	</p>

	<p>
		<?php
		$students_in_the_room = 13;
		$students_not_present = 2;
		$students_in_other_courses = 30;
		$students_php_text = "Students in the PHP course: ";
		$students_total_text = "Total FastTrackIT students: ";

		//Compute and print the number of $students_in_php_course with message "Students in the PHP course:" before the value.
		$students_in_php_course = $students_in_the_room + $students_not_present;
		print($students_php_text . $students_in_php_course);

		//similary, compute and print the number of $students_in_all_courses
		$students_in_all_courses = $students_in_php_course + $students_in_other_courses;
		print($students_total_text . $students_in_all_courses);

		//Similary with addition you can make all kind of mathematical operations
		$students_in_the_room = $students_in_php_course  - $students_not_present;
		$hands_in_the_room = $students_in_the_room * 2;

		?>
	</p>
	<!-- MATHEMATICAL OPERATORS -->
	<p>
		<?php
		$var1 = 2 + 3;
		print ('2 + 3 = ') . $var1;
		?>
	</p>
	<p>
		<?php
		$var2 = 2 + 3 - 1 ;
		print ('2 + 3 - 1 = ') . $var2;
		?>
	</p>

	<p>
		<?php
		$var3 = 2 + 1 * 4 ;
		print ('2 + 1 * 4 = ') . $var3;
		?>
	</p>
	<p>
		<?php
		$var4 = (2 + 1) * 4 ;
		print ('(2 + 1) * 4 = ') . $var4;
		?>
	</p>
	<p>
		<?php
		$var5 = 3 - 2/2 ;
		print ('3 - 2 / 2 = ') . $var5;
		?>
	</p>
	<p>
		<?php
		$var6 = (6 - 2) / 2;
		print ('(6 - 2) / 2 = ') . $var6;
		?>
	</p>
	<p>
		<?php
		$var7 = 2 + 2 + 2 + 2 ;
		print ('2 + 2 + 2 + 2 = ') . $var7;
		?>
	</p>
	<p>
		<?php
		$var8 = (1 - 2) * 3;
		print ('(1 - 2) * 3 = ') . $var8;
		?>
	</p>
	<p>
		<?php
		$var9 = 7 / 4;
		print ('7 / 4 = ') . $var9;
		?>
	</p>
	<!-- FLOATING POINTS -->
	<p>
		<?php //We do not have to tell PHP that we are using floating numbers; he already knows it!
		$a = 1.75;
		$b = 1.25;
		$c = $a + $b;		
		print ('1.75 + 1.25 = ') . $c;		
		?>	
	</p>
	<p>
		<?php //We do not have to tell PHP that we are using floating numbers; he already knows it!
		$a = 1.75;
		$b = 1.25;		
		$d = $a - $b; 		
		print ('1.75 - 1.25 = ') . $d;		
		?>	
	</p>
	<p>
		<?php //We do not have to tell PHP that we are using floating numbers; he already knows it!
		$a = 1.75;
		$b = 1.25;		
		$e = $a * $b;	
		print ('1.75 * 1.25 = ') . $e;		
		?>	
	</p>
	<p>
		<?php //We do not have to tell PHP that we are using floating numbers; he already knows it!
		$a = 1.75;
		$b = 1.25;		
		$f = $a / $b;	
		print ('1.75 / 1.25 = ') . $f;		
		?>	
	</p>


</body>
</html>