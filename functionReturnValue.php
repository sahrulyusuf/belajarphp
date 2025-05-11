<?php

function sum(int $first, int $second): int
{
    $total = $first + $second;
    return $total;
}

$result = sum(10,100);
var_dump($result);

$result = sum(100,100);
var_dump($result);

function getfinalValue(int $value): String
{
    if($value >= 80){
        return "A";
    } else if ($value >= 70){
        return "B";
    } else if ($value >= 60){
        return "C";
    } else if ($value >= 60){
        return "D";
    } else {
        return "E";
    }

    echo "Ups" . PHP_EOL;
}

$score = getfinalValue(50);
var_dump($score);

?>

