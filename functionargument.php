<?php

function sayHello($firstname, $lastname = "")
{
    echo"hello $firstname $lastname" . PHP_EOL; 
}

sayHello("muhammad");
sayHello("sahrul");
sayHello("arul", "ganteng");

function sum(int $first, int $last)
{
    $total = $first + $last;
    echo "total $first + $last = $total" . PHP_EOL;
}

sum(100,100);
sum("100", "100");

function sumAll(...$values)
{
    $total = 0;
    foreach($values as $value) {
        $total += $value;
    }
    echo "total" . implode(",", $values) . "= $total" . PHP_EOL;
}

$values = [1,2,3,4,5];

sumAll(1,2,3,4,5);
sumAll(...$values);

?>