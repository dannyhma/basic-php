<?php

require_once "Data/Person.php";

$danny = new Person("Danny", "Tulang Bawang");
$danny->name = "Danny";
$danny->sayHello("Danny");

$dziky = new Person("Dziky", "Tulang Bawang");
$dziky->name = "Dziky";
$dziky->sayHello(null);

$danny->info();
