<?php

// this is class
class Person
{
    var string $name;
    var ?string $address = null;
    var string $country;

    function sayHello(?string $name)
    {
        if (is_null($name)) {
            echo "Hi, my name is $this->name" . PHP_EOL;
        } else {
            echo "Hi $name, my name is $this->name" . PHP_EOL;
        }
    }
}
