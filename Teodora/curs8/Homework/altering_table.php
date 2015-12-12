<?php
//HOME STUDY
//Updating an existing field
//Deleting an existing field
//Deleting a table

//1. UPDATING AN EXISTING FIELD	

	ALTER TABLE table_name    // change data type of column
	ALTER COLUMN column_name datatype;

	ALTER TABLE table_name // add a NOT NULL constraint to a column
	MODIFY column_name datatype NOT NULL;

	ALTER TABLE table_name // add primary key to a table
	ADD CONSTRAINT PRIMARY KEY (column1, column2...);

	ALTER TABLE table_name // drop PRIMARY KEY
	DROP PRIMARY KEY;

	ALTER TABLE table1_name // create FOREIGN KEY constraint
	ADD FOREIGN KEY fk_example(_ID)
	REFERENCES table2_name(_ID);

	ALTER TABLE table1_name // drop FOREIGN KEY
	DROP FOREIGN KEY fk_example;




//2. DELETING AN EXISTING FIELD
	ALTER TABLE table_name
	DROP COLUMN column_name;

	
//3. DELETING A TABLE

	DROP TABLE table_name;