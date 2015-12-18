<?php 
/*
_______________________
 - create a database in sql: ////////

CREATE DATABASE school;
_______________________
- create a table named Courses: ////////

CREATE TABLE Courses (
ID INT NOT NULL AUTO_INCREMENT,
CourseName VARCHAR (32),
Trainer TEXT,
PRIMARY KEY (ID)
);
_______________________
- create a table named Students: /////////

CREATE TABLE Students (
ID INT NOT NULL AUTO_INCREMENT,
FirstName VARCHAR(32),
LastName VARCHAR(32),
Course INT,
PRIMARY KEY (ID)
);
_______________________
- INSERT /////////

INSERT INTO TableName (
CourseName, Trainer
)
VALUES (
'Introduction in QA', 'Mike Testovici'
);

- MULTIPLE VALUE INSERT: ///////////

INSERT INTO Students (
	FirstName, LastName, Course
)
VALUES
	('John', 'Doe', 1),
	('James', 'Dean', 1),
	('Mary', 'Poppins', 3),
	('Forrest', 'Gump', 3);
________________________
- UPDATE: //////////////
ID Always refers to the first row

UPDATE TableName
SET
	CourseName = 'Introduction in testing',
	Trainer = 'Michael Testovici'
WHERE
	ID = 1;
((((( When writing UPDATE and DELETE queries, don't forget the WHERE )))))
ID always refers to the first row 
________________________
- DELETE Statement: /////////////

DELETE FROM TableName
WHERE Field1 = Value1;

DELETE FROM Courses
WHERE ID = 2;
________________________
- FETCH & READ : ///////////

SELECT FirstName, LastName
FROM Students;
________________________
- FETCH & READ, JOINING TABLES ///////////
Let's say we also want the course name, which is in a different table within the same db.
We select the student's first and last name from the Students table.
For each student we know the Course ID, se we can use it to link to the course in the Courses table.
We select the name of the course from The Courses table: 

SELECT
	Table1.Field1, Table1.Field2, Table2.Field3
FROM
	Table1
JOIN Table2 ON Table1.Field4 = Table2.Field5;

- in practice:	//////////////
SELECT 
	Students.FirstName, Students.LastName,
	Courses.CourseName
FROM
	Students
JOIN Courses ON Students.Course = Course.ID;

- we can use all the options for the SELECT statement too: /////////////

SELECT 
	Students.FirstName, Students.LastName,
	Courses.CourseName
FROM
	Students
JOIN Courses ON Students.Course = Course.ID
WHERE Students.Course = 3
ORDER BY Students.LastName DESC
LIMIT 1;
________________________
- ALTERING TABLES  //////////
Add a new field, update an existing field, delete a field, delete the entire table, etc. //////////

-add a new field 'Score' ///////

ALTER TABLE
ADD Score INT;

- Add values to the 'Score field' ///////
UPDATE Students
SET Score = 7
WHERE ID = 1;
(((((  ID always refers to the first row  )))))
(((((  documentation on altering tables: http://dev.mysql.com/doc/refman/5.7/en/alter-table.html  )))))
________________________
- AGGREGATE FUNCTIONS /////////
((((( an aggregate function takes many values and returns a single value, computed from the initial values: )))))
((((( COUNT, SUM, MAX/MIN/AVG, DISTINCT )))))

SELECT COUNT(*) AS QAStudentsCount
FROM Students
WHERE Course = 1;

- GROUP BY ////////
SELECT Course, COUNT(*) AS QAStudentsCount
FROM Students
GROUP BY Course;

-Average Score ///////

SELECT AVG(Score) AS AverageScore
FROM Students;

____________

- Combined exercise, join, group by Course and calculate average score.

SELECT CourseName, AVG(Score) as AverageScore
FROM
	Courses
	JOIN Students ON Courses.ID = Students.Course
GROUP BY Course
ORDER BY CourseName;

*/


?>