<?php
$numbers  = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

foreach ($numbers as $key => $value) {
    #print each number
    echo $value . "\n";
}

for ($number = 0; $number < count($numbers); $number++) {
    echo "numbers[$number] = $numbers[$number]" . "\n";
}

$number = 0;
while ($number < count($numbers)) {
    echo "Number at index $number is $numbers[$number] \n";
    $number++;
}
// while ($number < count($numbers)){
//     echo "Number at index $number is $numbers[$number] \n";
//     $num++;
// }
