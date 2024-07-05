<?php

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$connection->beginTransaction();

$connection->exec("INSERT INTO comments(email, comment) VALUES ('dziky@gmail.com', 'hi')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('dziky@gmail.com', 'hi')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('dziky@gmail.com', 'hi')");

$connection->rollBack();

$connection = null;