<?php
$name = 0; //''

if(isset($name)){
    echo "Name is set";
} else{
    echo "Name is set";
}

echo "\n";

if(empty($name)){
    echo "Name is empty";
} else{
    echo "Not empty";
}

echo "\n";

// best solution;
if(isset($name) && (is_numeric($name) || $name != '')) {
    echo "Name is set and it's not empty";
}else{
    echo "Name is either not and it's not empty";
}