<?php
$fruits = array('apple', 'banana', 'orange', 'plum', 'dates', 'mango');
$random = array("a"=>12, "b"=>45, "c"=>34, "d"=>22, "e"=>77, "f"=>31, 12=>78, "g"=>36);

$newFruits = array("jackfruit", "pineapple", "tamarind");
$someFruits = array_splice($fruits, -5, 2, $newFruits);

print_r($someFruits);
print_r($fruits);