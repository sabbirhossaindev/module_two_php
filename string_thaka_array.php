<?php
//delimeter...
$vegetables = explode(', ','brinjal brocolli carrot capsicum');
// var_dump($vegetables);
// echo $vegetables[0];

$vegetablesString = join(', ', $vegetables);
echo $vegetablesString;