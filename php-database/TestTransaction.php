<?php

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$connection->beginTransaction();

$connection->exec("INSERT INTO comments(email, comment) VALUES ('dannyhma@gmail.com', 'hi')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('dannyhma@gmail.com', 'hi')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('dannyhma@gmail.com', 'hi')");

$connection->commit();

$connection = null;