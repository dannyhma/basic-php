<?php

require_once "Data/SayGoodBye.php";

use Data\Traits\{Person, SayHello, SayGoodBye};

$person = new Person();
$person->goodBye("Dziki");
$person->hello("Danny");

$person->name = "Jhon";
var_dump($person);

$person->run();
