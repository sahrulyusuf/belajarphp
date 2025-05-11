<?php

function foo()
{
    echo"foo" . PHP_EOL;
}

function bar()
{
    echo "bar" . PHP_EOL;
}

$functionYangAkanDipanggil = "foo";
$functionYangAkanDipanggil();

$functionYangAkanDipanggil = "bar";
$functionYangAkanDipanggil();

function sayHello(string $name, $filter)
{
    $finalName =$filter($name);
    echo "hello $finalName" .PHP_EOL;
}

function sampleFunction(string $name): string {
    return "Sample $name";
}

sayHello("Sahrul", "samplefunction");
sayHello("Sahrul", "strtoupper");
sayHello("Sahrul", "strtolower");


?>
