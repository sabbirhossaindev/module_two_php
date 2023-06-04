<?php
$foods = [
    'vegetable' => 'brinjal', 'brocolli', 'carrot', 'capsicam',
    'fruits' => 'orange', 'banana', 'apple',
    'drinks' => 'water', 'milk', 'cooks'
];

// echo $foods['vegetable'];
// foreach($foods as $key=>$value){
//     echo $key . "=" . $value . "\n";
// }

// $foods['drinks'] = $foods['drinks'] . ",Orange juice";
$foods['drinks'] .= ", orange juice";
$keys = array_keys($foods);
for($i=0; $i<count($keys); $i++){
    $key = $keys[$i];
    echo $foods[$key] . "\n";
}