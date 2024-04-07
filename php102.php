
<?php

$grade = 100;

if($grade == 100 || $grade <= 90 ){
    echo "A";
} else if ($grade == 80 && $grade >= 80){
    echo "B";
} else if ($grade == 70 || $grade <= 60){
    echo "C";
} else if ($grade == 60 || $grade <= 50){
    echo "D";
} else if ($grade == 51 || $grade <= 10){
    echo "F";
} 
else {
    echo "You failed";
}

?>