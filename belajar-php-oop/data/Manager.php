<?php

class Manager
{
    var string $name;

    function sayHello(string $name): void
    {
        echo "Hi $name, my name is Manager $this->name" . PHP_EOL;
    }
}

class ViceManager extends Manager
{
    function sayHello(string $name): void
    {
        echo "Hi $name, my name is VP $this->name" . PHP_EOL;
    }
}
