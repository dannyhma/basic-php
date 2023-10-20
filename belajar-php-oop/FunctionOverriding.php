<?php

require_once "Data/Manager.php";

$manager = new Manager();
$manager->name = "Danny";
$manager->sayHello("Dziki");

$vp = new VicePresident();
$vp->name = "Himawan";
$vp->sayHello("Andrian");
