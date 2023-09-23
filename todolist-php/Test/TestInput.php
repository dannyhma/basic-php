<?php

require_once "../Model/TodoList.php";
require_once "../Helper/Input.php";

$name = input("Name");
echo "Hello $name" . PHP_EOL;

$name = input("Channel");
echo $name . PHP_EOL;
