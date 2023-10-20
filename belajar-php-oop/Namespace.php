<?php

namespace {
    require_once "Data/Conflict.php";
    require_once "Data/Helper.php";

    $conflict1 = new data\one\Conflict();
    $conflict2 = new data\two\Conflict();


    echo Helper\APPLICATION . PHP_EOL;

    Helper\helpMe();
}
