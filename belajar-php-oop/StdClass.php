<?php

$array = [
    "firstName" => "Danny",
    "middleName" => "D.",
    "lastName" => "Himawan",
];

$object = (object) $array;
var_dump($object);

echo "First Name $object->firstName" . PHP_EOL;
echo "Middle Name $object->middleName" . PHP_EOL;
echo "Last Name $object->lastName" . PHP_EOL;

$arrayAgain = (array) $object;
var_dump($arrayAgain);

require_once "data/Person.php";

$person = new Person("Danny", "Tulang Bawang");
var_dump($person);

$arrayPerson = (array) $person;
var_dump($arrayPerson);
