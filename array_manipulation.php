<?php
// array_shift(); // data add for
// array_push(); // data add for
// array_unshift(); // data remove for
// array_pop(); // data remove for

$students = array(
    "sabbir",
    "badon",
    "monir"
);

// $student = array_pop($students);
// $student = array_shift($students);

array_push($students, "kamal");
array_unshift($students, "hridoy");

$n = count($students);
for($i=0; $i < $n; $i++){
    echo $students[$i] . "\n";
}