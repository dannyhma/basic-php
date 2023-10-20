<?php

require_once "Data/Conflict.php";
require_once "Data/Helper.php";

use data\one\Conflict;
use function Helper\helpMe;
use const Helper\APPLICATION;

$conflict1 = new Conflict();
$conflict2 = new data\two\Conflict();

helpMe();

echo APPLICATION . PHP_EOL;
