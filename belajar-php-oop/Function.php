<?php

require_once "data/Person.php";

$danny = new Person();
$danny->name = "Danny";
$danny->sayHello("Danny");

$dziky = new Person();
$dziky->name = "Dziky";
$dziky->sayHello(null);
