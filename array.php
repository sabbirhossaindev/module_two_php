<?php
// var_dump()
// count()
$student = array(
    "sabbir",
    "badon",
    "monir",
    "labu",
    "hridoy"
);
// var_dump($student);
// echo count($student); length find-out for.

$n = count($student);
for($i=0; $i < $n; $i++){
    echo $student[$i] . "\n";
} //all array display showing..