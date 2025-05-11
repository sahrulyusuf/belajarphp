<?php

$firstName = "sahrul";
$lastName = "ganteng";

$anonymusFunction = function () use ($firstName, $lastName) : string {
    return "Hello $firstName $lastName" . PHP_EOL;
};

$arrowFunction = fn() => "hello $firstName $lastName" . PHP_EOL;

echo $anonymusFunction();
echo $arrowFunction();

?>