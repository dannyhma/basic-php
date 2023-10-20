<?php

require_once "Data/Manager.php";

$manager = new Manager();
$manager->name = "Himawan";
$manager->sayHello("Danny");

$vp = new VicePresident();
$vp->name = "Himawan";
$vp->sayHello("Danny");
