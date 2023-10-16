<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Danny";
$manager->sayHello("Dziki");

$vp = new ViceManager();
$vp->name = "Himawan";
$vp->sayHello("Andrian");
