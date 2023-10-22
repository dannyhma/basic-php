<?php

function sayHello(string $first, string $last, string $middle = ""): void
{
    echo "Hello $first $middle $last" . PHP_EOL;
}

sayHello("Danny", "D.", "Himawan");

sayHello(last: "Himawan", first: "Danny", middle: "D.");
sayHello(first: "Danny", last: "Himawan");
