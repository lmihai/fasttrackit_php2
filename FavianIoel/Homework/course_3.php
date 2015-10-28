<?php

/*--------------------------TASK 1 ---------------------------------
compare the following ages and print the name of the oldest person:
a)maria vs Ana         c)Ionescu vs Ana
b)Alex vs ionescu      d)George vs Vlad 
*/


//given variables :
$age_maria = 20;
$age_ana = 25;
$age_ionescu = 25;
$age_george = 30;
// added 
$age_alex = 18;
$age_vlad = 19;

// a)
if ($age_maria > $age_ana ) {
	print("Maria .");
}
	elseif ($age_maria < $age_ana) {
		print("Ana .") ;
	}

echo "<p></p>";

// b)
	if ($age_alex > $age_ionescu) {
		print("Alex .");
	}
	elseif ($age_alex < $age_ionescu) {
		print("Ionescu .") ;
	}

echo "<p></p>";

// c)
	if ($age_ionescu > $age_ana) {
		print("Ionescu .");
	}
	elseif ($age_ionescu < $age_ana) {
		print("Ana .");
	}
	elseif ($age_ionescu == $age_ana) {
		print("Bouth Ionescu and Maria  are 25 .") ;
	}

echo "<p></p>";

// d)
	if ($age_george > $age_vlad) {
		print("George .");
	}
	elseif ($age_george < $age_vlad) {
		print("Vlad .") ;
	}

?>
<?php
echo "</br>";
echo "</hr>";
echo "</br>";
	/*-------------------------------TASK 2-----------------------------
	Print the results for the following expressions:
	a) not($a)and $b          d) $a === $c             g) $a == $c
	b) $a or $b               e) $a and $c or$d        h) not($b) === $c
	c) not($a or $b)          f) not($c) == $b         i) $a or not ($b) */
   
 // Given  Variables :

    $a = true;
    $b = false;
    $c = 1;
    $d = 0;  
 //aded values :
    $x1 = !($a) && $b;
    $x2 = $a || $b;
    $x3 = !($a || $b);
    $x4 = $a === $c;
    $x5 = $a && ($c || $d);
    $x6 = !($c) == $b;
    $x7 = $a == $c;
    $x8 = !($b) === $c;
    $x9 = $a || !($b);

            
            //a)   
                echo "<br />";
                if ($x1 == false) {
                    print ("false");
                }

            //b)     
                echo "<br />";
                if ($a || $b) {
                    print ("true");
                }
            
            //c)    
                echo "<br />";
                if ($x3 == false) {
                    print ("false");
                }
            
             //d)   
                echo "<br />";
                if ($x4 == false){
                    print ("false");  
                }
          
             //e)
                echo "<br />";
                if($x5 == true) {
                    print ("true");
                }
                else {
                    print (" false ");
                }

             //f)
                echo "<br />";    
                if ($x6 == true){
                   echo " true";
                   }
                else {
                   echo "false";
                }
                
            //g)
                echo "<br />";
                if ($x7 == true) {
                    echo "true";
                   }

            //h)
                echo "<br />";
                if ($x8 == false) {
                    echo "false";
                   } 
            //i)
                echo "<br />";
                if ($x9 == true) {
                      echo "true";
                   }

?>
<?php
echo "</h1>";
/*given the following
  variables */
$x = 5;
$y = 6;

//---------------------------task 3-------------------------------
/* Solve and explain the results for :
a) !(x > 6)                  c) (x==6 || x==5)
b) (x==6 && x==5)            d) (x>-1 && y<10) */


// a)
if ($x > 6) {
   echo "a) x > 6";
}
else{
    echo "a) !(x > 6 ) --> becouse x = 5 .";
}

echo "<p></p>";

// b)
if ($x==6 && $x==5) {
    echo " b) true";
}
else {
    echo "b) false - becouse x   <6 ";
}
echo "<p></p>";

// c)
if ($x==6 || $x==5) {
    echo "c ) true => x=5 ";
}
echo "<p></p>";

// d)
if ($x>-1 && $y<10) {
    echo "d) true";
}
?>