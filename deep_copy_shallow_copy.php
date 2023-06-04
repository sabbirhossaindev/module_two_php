<?php
$person = array('fname'=>'Hello', 'lname'=> 'world');
function printData(& $person){
    $person['fname'] .= " Change";
    print_r($person);
}

printData($person);

// assositive array data remove;
$person = array('fname'=>'Hello', 'lname'=> 'world');
unset($person ['lname']);
print_r($person);