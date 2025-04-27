<?php

$first = [
    "first_name" => "Sahrul"
];

$last = [
    "first_name" =>"yusup",
    "last_name" =>"sahrul"
];

$full =$first + $last;
var_dump($full);

$a =[
    "first_name" =>"yusup",
    "last_name" =>"sahrul"
];
$b =[
    "first_name" =>"yusup",
    "last_name" =>"sahrul"
];
var_dump($a==$b);

?>

