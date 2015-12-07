<?php
//COMBINING STUFF

//SELECT CARE RETURNEAZA NUMELE CURSURILOR SI NOTA MEDIE PE FIECARE CURS


SELECT CourseName , score 
FROM courses 
JOIN students ON Courses.ID = Students.Course 
ORDER BY CourseName;


// lista cursuri ordonata alfab.,fiecare cu media aritm.


SELECT CourseName , AVG(score) AS AverageScore 
FROM courses 
JOIN students ON Courses.ID = Students.Course 
GROUP BY course
ORDER BY CourseName; 