<?php
//AGGREGATE FUNCTIONS
//functiile de agregare iau mai multe valori de intrare si returneaza o singura valoare
// count,sum, max, min, avg

SELECT COUNT(*) AS QAstudentsCount //numara cati studenti sunt la cursul cu id=1
FROM students
WHERE course = 1;// daca nu punem conditia where ii numara pe toti!

SELECT course, COUNT(*) AS QAstudentsCount
FROM students
GROUP BY Course; //cauta valorile unice dupa curs si ptr fiecare 
//din valori a numarat(count) inregistrarile

SELECT AVG(score) AS AverageScore
FROM students;     //returneaza media aritm. pentru studenti dupa score (8)


SELECT Course, AVG(score) AS AverageScore
FROM students
GROUP BY course; //returneaza media ptr fiecare curs