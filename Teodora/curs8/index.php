<?php
//primul pas in localhost/phpmyadmin creaea bazei de date : school
// urm. pas crearea tabelelor: courses si students 
// creare tabel courses:

	CREATE TABLE courses (
		ID INT NOT NULL AUTO_INCREMENT,
		CourseName VARCHAR(32),
		Trainer TEXT,
		PRIMARY KEY (ID)
		);
//creare tabel students

	CREATE TABLE students(
		ID INT NOT NULL AUTO_INCREMENT,
		FirstName  VARCHAR(16),
		LastName VARCHAR(16),
		Course INT,
		PRIMARY KEY (ID)
		 );

//THE INSERT STATEMENT
	INSERT INTO courses (
		CourseName, Trainer
	)
	VALUES(
		'Introduction in QA', 'Mike Testovici'
	);
//insert another course of your choise

	INSERT INTO courses (
		CourseName, Trainer
	)
	VALUES (
		'PHP', 'Ciprian Popescu'
	);

// THE UPDATE STATEMENT (WHEN WRITING UPDATE AND DELETE QUERIES 
	//DON'T FORGET WHERE)	

UPADATE Courses 
SET 
	CourseName = 'Introduction in Testing',//AM SCHIMBAT numele cursului
	Trainer = 'Michael Testovici'//in loc de Mike...
WHERE // F IMPORTANT!
	ID = 1;	


DELETE FROM courses 
WHERE
ID = 3;	// STERGE CURSUL CU ID 3


//let's put same data in the students table
INSERT INTO `students`( `FirstName`, `LastName`, `Course`) 
VALUES 
('John','Doe',1),
('James','Dean',1),
('Mary','Poppins',2),
('Forrest','Gump',2);

//create an SQL query that reads the first name and the last name
//of all the students

	SELECT FirstName, LastName
	FROM students;

//	we also want the course name;
// for each student we know the course ID, so we can use it
//to link	to the courses table

	SELECT
		students.FirstName, students.LastName,
		courses.CourseName
	FROM
		students
		JOIN courses ON students.Course = courses.ID;


//we can use all the options for the select statement,
		//ORDER BY, WHERE, LIMIT

	SELECT * FROM students 
	JOIN courses 
	ON students.course = courses.ID 
	WHERE students.course = 2
	ORDER BY students.LastName DESC
	LIMIT 1;

//ALTERING TABLES

ALTER TABLE students //ADD A NEW FIELD
ADD score INT;			//aducem o coloana noua de tip INT cu nemele score

UPDATE students //UPDATE AN EXISTING FIELD
SET 			//introducem date in field-ul nou
score = 8
WHERE 
ID = 2;	

//HOME STUDY
//Updating an existing field
//Deleting an existing field
//Deleting a table





