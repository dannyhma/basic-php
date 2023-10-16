<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Himawan";
$manager->sayHello("Danny");

$vp = new ViceManager();
$vp->name = "Himawan";
$vp->sayHello("Danny");
