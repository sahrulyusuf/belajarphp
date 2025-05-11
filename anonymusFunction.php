<?php

$sayHello = function (string $name) {
    echo "Hello $name" . PHP_EOL; 
};

$sayHello("sahrul");
$sayHello("yusuf");

function SayGoodBye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Good bye $finalName" . PHP_EOL;
}

SayGoodBye("Sahrul", function (string $name): string{
    return strtoupper($name);
});

$filterFunction = function (string $name): string {
    return strtoupper($name);
};
SayGoodBye("sahrul", $filterFunction);


$firstName = "sahrul";
$lastName = "yusup";

$sayHelloSahrul = function () use ($firstName, $lastName){
    echo "Hello $firstName $lastName" . PHP_EOL;
};

$sayHelloSahrul();

?>