<?php

function sayHello(string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Danny", "strtoupper");
sayHello("Danny", fn ($name) => strtoupper($name));
