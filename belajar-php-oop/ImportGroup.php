<?php

require_once "Data/Conflict.php";
require_once "Data/Helper.php";

use data\one\{Conflict as Conflict1, Sample, Dummy};
use function Helper\{helpMe as help};
use const Helper\{APPLICATION as APP};

$conflict = new Conflict1;
$sample = new Sample;
$dummy = new Dummy;

help();

echo APP . PHP_EOL;
