<?php

require_once "Data/Person.php";

$person = new Person("Danny", "Tulang Bawang");
$person->name = "Danny";
$person->address = "Tulang Bawang";
$person->country = "Indonesia";

// var_dump($person);

echo "Name : $person->name" . PHP_EOL;
echo "Address : $person->address" . PHP_EOL;
echo "Country : $person->country" . PHP_EOL;

$person2 = new Person("Dziky", null);
$person2->name = "Dziky";
$person2->address = null;
$person2->country = "Indonesia";

var_dump($person2);
