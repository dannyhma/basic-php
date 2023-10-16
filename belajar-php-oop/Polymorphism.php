<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Danny");
var_dump($company);

$company->programmer = new BackendProgrammer("Danny");
var_dump($company);

$company->programmer = new FrontendProgrammer("Danny");
var_dump($company);

sayHelloProgrammer(new Programmer("Danny"));
sayHelloProgrammer(new BackendProgrammer("Danny"));
sayHelloProgrammer(new FrontendProgrammer("Danny"));
