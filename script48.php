<?php
function sum($carry, $item){
    $carry += $item;
    return $carry;
}


$numbers = array(1, 2, 3, 4, 5);
var_dump(array_reduce($numbers, "sum")); // int(15)
?>