<?php

function sayHello(string $name, callable $filter)
{
    $FinalName = call_user_func($filter, $name);
    echo "Hello $FinalName" . PHP_EOL;
}

sayHello("arul", "strtoupper");
sayHello("arul", "strtolower");
sayHello("arul", function (string $name): string{
    return strtoupper($name);
});
sayHello("arul", fn($name) => strtoupper($name));

?>